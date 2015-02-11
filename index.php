<?php
    include_once('.env.php');
    require_once('constants.php');
    include('vendor/autoload.php');
    use Yandex\Translate\Translator;
    use Yandex\Translate\Exception;

    // Translation function
    function _t($text)
    {
        // Destination language
        $mlang = trim(ABBR_LANG, '/');

        // If we neet the text in english, dont send it to translate
        if ($mlang === 'en') {
            return $text;
        }

        $cache = sha1($mlang . '-' . $text);

        if (is_file(CACHE_DIR . $cache)) {
            return file_get_contents(CACHE_DIR . $cache);
        }

        try {
            $translator = new Translator(YANDEX_API);
            $translation = $translator->translate($text, 'en-' . $mlang);
            file_put_contents(CACHE_DIR . $cache, $translation->__toString());

            return $translation;

        } catch (Exception $e) {
            // handle exception
        }

    }

?>
<!doctype html>
<html>
<head>
    <script>
        var reff = "<?= isset($_GET['var1']) ? $_GET['var1'] : '' ?>";
    </script>
    <?php
        //echo __t('head_tag.php');
        require_once('head_tag.php'); ?>
</head>
<body>

<div class="container" style="overflow: visible;">
    <div id="wrapper">
        <!-- LOGO -->
        <a href="/">
            <img src="<?= IMG_PATH ?>logo.png" id="logo" alt="Online Casino Del Rio" title="Online Casino Del Rio"/>
        </a>
        <?php include('flags.php'); ?>
        <?php
            include(LANG_DIR . SITE_LANG . 'menu.php');
        ?>
        <?php
            $pageToLoad = LANG_DIR . '/english/' . $page . '.php';
            if (!is_file($pageToLoad)) {
                $pageToLoad = LANG_DIR . '/english/index.php';
            }
            include($pageToLoad);
        ?>
        <?php
            include(LANG_DIR . SITE_LANG . 'footer.php');
        ?>
    </div>

</body>
</html>