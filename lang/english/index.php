<div id="container">
    <div id="left">
        <img src="<?= IMG_PATH ?>skin.jpg" id="skin" alt=""/>
    </div>
    <div id="middle">
        <div id="BonusBox">
            <div class="BonusAmount">
                <div style="font-size: 75px;margin-left: 5px;" class="bonus-text"><?= _t('£/€ 15 FREE') ?></div>
                <div class="bonus-text-desc"><?= _t('No Deposit Required') ?></div>
                <a style="text-decoration:none;" href="javascript:GoTo(download)" id="ad_button">
                    <img src="<?= IMG_PATH ?>en/images/download.gif" alt="Download" id="d_button"/>
                </a>
                <br/>
                <a href="javascript:GoTo(flash)" id="af_button">
                    <img src="<?= IMG_PATH ?>en/images/flash.gif" alt="" id="f_button"/>
                </a>
            </div>
        </div>

    </div>
    <div id="right">
        <a href="<?= ABBR_LANG ?>jackpots">
            <div id="jackpot" onclick="t_do(); document.location.href = '<?= ABBR_LANG ?>jackpots'"
                 style="width:200px; padding-left:140px; background-image: url(<?= IMG_PATH ?>en/images/jackpot.jpg);">
                <script type="text/javascript">
                    var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
                    if (hasReqestedVersion) {
                        AC_FL_RunContent(
                            "src", "http://tickers.playtech.com/jackpots/new_jackpot?jp_up&amp;info=2&amp;casino=delrio&amp;font_face=arial&amp;bold=true&amp;bg_color=717171&amp;casino=cameo&amp;font_color=ffffff&amp;currency=eur&amp;sign_align=left",
                            "width", "160",
                            "height", "30",
                            "align", "top",
                            "id", "ticker",
                            "class", "jackpot_obj",
                            "quality", "high",
                            "bgcolor", "#717171",
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
        <br/>

        <div style="text-align: center; width: 250px;">
            <a class="sidebar_preview"
               href="<?= ABBR_LANG ?>jackpots"><?= _t('View All Jackpots') ?></a>
        </div>
        <ul>
            <li class="one"><?= _t('Download our Free Software') ?></li>
            <li class="two"><?= _t('Open a Real Player Account') ?></li>
            <li class="three"><?= _t('Get your 1st Deposit Bonus') ?></li>
        </ul>
    </div>
</div>
<br><br><br>
