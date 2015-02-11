<?php
    //session_start();
    //$lang = isset($_SESSION['SITE_LANG']) ? $_SESSION['SITE_LANG'] : 'english';

    if ($_SERVER['REQUEST_URI'] === '/') {
        //header('Location: http://' . $_SERVER['SERVER_NAME'] . '/english');
        header('Location: http://' . $_SERVER['SERVER_NAME'] . '/en');
        die;
    }

    $lang = trim($_SERVER['REQUEST_URI'], '/');
    $aaa = explode('?', $lang);
    $lang_page = explode('/', $aaa[0]);
    $lang = '/' . $lang_page[0];
    $page = isset($lang_page[1]) ? $lang_page[1] : 'index';

    define('DOCROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
    //define('SITE_LANG', $lang . '/');
    define('ABBR_LANG', '/' . trim($lang, '/') . '/');
    define('SITE_LANG', '/english' . '/');
    define('IMG_PATH', '/images/');
    define('JS_PATH', '/js/');
    define('CSS_PATH', '/css/');
    define('LANG_DIR', DOCROOT . 'lang');
    define('CACHE_DIR', DOCROOT . 'cache/');


    $lang_short = array('dk', 'de', 'it', 'en', 'es', 'cz', 'ro', 'hu', 'nl', 'rs', 'be', 'no', 'pl', 'pt', 'fi', 'sv', 'el', 'ru', 'id');
    if (!in_array(trim($lang, '/'), $lang_short)) {
        header('Location: http://' . $_SERVER['SERVER_NAME'] . '/en');
        die;
    }
    /*if (!is_dir(LANG_DIR . SITE_LANG)) {
        // header('Location: http://' . $_SERVER['SERVER_NAME'] . '/english');
        header('Location: http://' . $_SERVER['SERVER_NAME'] . '/hu');
        die;
    }*/
    unset($lang);
