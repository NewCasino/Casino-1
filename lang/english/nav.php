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
                <div id="jackpot_home" onclick="t_do(); document.location.href = '<?= ABBR_LANG ?>jackpots'"
                     style="margin-left:0px; width:220px; background-image: url(<?= IMG_PATH ?>en/images/jackpot-inner.jpg);">
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
            <dl class="narrow" onclick="document.location.href = '<?= ABBR_LANG ?>customer-service'">
                <dt><?= _t('24/7 Support:') ?> </dt>
                <dd> <?= _t('Canada free: 1 - 888 - 332 - 9583') ?></dd>
                <dd></dd>
                <dd> <?= _t('International: +63 - 2756 - 7824') ?></dd>
            </dl>
        </li>
        <li>
            <a href="javascript:GoTo(flash)">
                <img src="<?= IMG_PATH ?>en/images/100games.gif"/>
            </a>

            <p>
                <a class="sidebar_preview" href="<?= ABBR_LANG ?>casino-games"> <?= _t('Click to Preview') ?> </a>
            </p>
        </li>


    </ul>

</div>