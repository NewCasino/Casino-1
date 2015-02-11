<div class="inner" id="container">
    <div id="inner">
        <h1><?= _t('Players Club') ?></h1>

        <h2><?= _t('Casino Del Rio\'s exclusive rewards program') ?></h2>

        <p>
            <?= _t(' All members of Casino Del Rio have the exciting opportunity to join our exclusive loyalty program. Join the
            program and your loyalty will be rewarded with all the bonuses, benefits and offers you could ever hope for.
            Here is how the program works:') ?>
        </p>

        <p>
            <?= _t('For every bet you place in one of our games you will earn Complimentary Points, or “Comps” for short. The
            more you play, the more points you will earn until you eventually have enough to exchange them for a range
            of prizes such as bonuses, cash and much more.') ?>
        </p>

        <p>
            <?= _t('You will receive 1 Comp for each €/£/$1 that you bet, which means that you will never waste a bet.
            Additionally, the longer you play at Casino Del Rio, the more your points will be worth, so you’re earning
            just by playing your favourite games. There is no limit on how many Comps you can earn or even redeem so
            you’ll always be able to claim more rewards!') ?>
        </p>

        <p>
            <strong style="color: #4E6E20;"><?= _t('Comp points equal money!') ?></strong><br/>
            <strong style="color: #4E6E20;"><?= _t('1 €/£/$ bet = 1 comp point') ?></strong><br/>
            <strong style="color: #4E6E20;"><?= _t('1000 comp points = 1 €/£/$') ?></strong><br/>
        </p>

        <p><?= _t('Don\'t rely on luck to win prizes, join our loyalty program and the Comp Points will guarantee them for
           you!') ?></p>

        <p><a href="javascript:GoTo(download)"><?= _t('Join Casino Del Rio today and start earning cash credits with your first
                                               bet!') ?></a></p>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </div>

    <div id="sidebar">
        <ul>
            <li id="bonuser" style="padding-left:25px">
                <a href="javascript:GoTo(download)">
                    <img src="<?= IMG_PATH ?>en/images/bonus.gif" id="bonus_inner">
                </a>
            </li>
            <li>
                <a href="javascript:GoTo(download)">
                    <img src="<?= IMG_PATH ?>en/images/download.gif">
                </a>
            </li>
            <li>
                <a href="javascript:GoTo(flash)">
                    <img id="f_button" alt="Flash Casino" src="<?= IMG_PATH ?>en/images/flash.gif">
                </a>
            </li>
            <li>
                <a href="<?= SITE_LANG ?>jackpots">
                    <div id="jackpot_home" onclick="t_do(); document.location.href=" <?= ABBR_LANG ?>jackpots
                    ""
                    style="margin-left:0px; width:220px; background-image: url(images/en/images/jackpot-inner.jpg);">
                    <script type="text/javascript">
                        var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
                        if (hasReqestedVersion) {
                            AC_FL_RunContent(
                                "src", "http://tickers.playtech.com/jackpots/new_jackpot?jp_up&amp;info=2&amp;casino=delrio&amp;font_face=arial&amp;bold=true&amp;bg_color=ffffff&amp;casino=cameo&amp;font_color=000000&amp;currency=eur&amp;sign_align=left",
                                "width", "160",
                                "height", "30",
                                "align", "top",
                                "id", "ticker",
                                "class", "jackpot_obj_home",
                                "quality", "high",
                                "bgcolor", "#ffffff",
                                "wmode", "transparent",
                                "name", "ticker",
                                "allowScriptAccess", "always",
                                "type", "application/x-shockwave-flash",
                                'codebase', 'http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab',
                                "pluginspage", "http://www.adobe.com/go/getflashplayer"
                            );
                        } else {
                            var alternateContent = '';
                            document.write(alternateContent);
                        }
                    </script>
                    <noscript>
                    </noscript>
    </div>
    </a>
    <a style="margin-left:5px;" class="sidebar_preview"
       href="<?= ABBR_LANG ?>jackpots"><?= _t('View All Jackpots') ?></a>
    </li>
    <li>
        <dl class="narrow" onclick="document.location.href=<?= ABBR_LANG ?>customer-service">
            <dt><?= _t('24/7 Support:') ?></dt>
            <dd><?= _t('Canada free') ?>: 1-888-332-9583</dd>
            <dd></dd>
            <dd><?= _t('International') ?>: +63-2756-7824</dd>
        </dl>
    </li>
    <li>
        <a href="javascript:GoTo(flash)">
            <img src="<?= IMG_PATH ?>en/images/100games.gif"/>
        </a>

        <p>
            <a class="sidebar_preview" href="<?= ABBR_LANG ?>casino-games"><?= _t('Click to Preview') ?></a>
        </p>
    </li>


    </ul>

</div>
<?php include(__DIR__ . '/nav.php'); ?>
</div>