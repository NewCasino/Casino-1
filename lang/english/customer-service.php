<div class="inner" id="container">
    <div id="inner">
        <h1>Customer Service</h1>

        <h2><?= _t('Call, fax, email or chat live - we are here for you 24/7') ?></h2>

        <p><?= _t('Here at Casino Del Rio, your level of comfort and sense of security is one of our top priorities. For this
           reason we offer many accessible and helpful platforms for customer support services around the clock, 24/7.
           If you wish to contact us you may do so at any time via email, telephone, online chat, postal mail or fax
           after following these simple steps:') ?></p>

        <p>
            1) <?= _t('Download and install the Casino Del Rio software to your computer.') ?> <br/>
            2) <?= _t('Sign up for a new player account.') ?> <br/>
            3) <?= _t('Enter the \'online support\' section featured in our lobby.') ?> <br/>
            4) <?= _t('Choose the communication platform you most prefer, e.g.: online chat.') ?> <br/>
            <em>*<?= _t('Please remember to include your username when speaking with one of our support staff members.') ?></em>
        </p>
        <br>
        <br>

        <div class="thead">
            <table cellspacing="0" cellpadding="0" summary="help">
                <tbody>
                <tr class="odd">
                    <th width="30%"><?= _t('YOU\'RE LOOKING FOR:') ?></th>
                    <th class="lasthead"><?= _t('YOU\'LL FIND IT HERE:') ?></th>
                </tr>
                <tr>
                    <td valign="top" class="cash">Telephone:</td>
                    <td valign="top" class="cash" style="color:#4E6E20;">
                        <strong>
                            <?= _t('International') ?>: +63-2756-7824<br/><br/>
                            <?= _t('UK Toll Free') ?>: 0800-047-0594<br/><br/>
                            <?= _t('Canada Toll-free') ?>: +1-888-332-9583<br/><br/>
                        </strong>
                    </td>
                </tr>
                <tr class="odd">
                    <td valign="top" class="cash"><br/>Fax:</td>
                    <td valign="top" class="cash" style="color:#4E6E20;">
                        <strong>
                            <br/>
                            <?= _t('International') ?>: +632-756-7813<br/><br/>
                            <?= _t('UK Toll Free') ?>: 44-20-7900-6726<br/><br/>
                            <?= _t('Canada Toll-free') ?>: 1-866-549-0763<br/><br/>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="cash"><br/>Email:</td>
                    <td valign="top" class="cash">
                        <strong>
                            <br/>
                            <a href="mailto:feedback@casinodelrio.com">support@casinodelrio.com</a><br/><br/>
                            <a href="mailto:vipcluben@casinodelrio.com">vipcluben@casinodelrio.com</a><br/><br/>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="cash"><br/>Chat:</td>
                    <td valign="top" class="cash">
                        <strong>
                            <br/> <?= _t('To start a LIVE chat with one of our representitive you must first download our free
                                  software by clicking') ?> <a
                                href="javascript:GoTo(download)"><?= _t('here') ?></a>.<br/><br/>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="cash"><br/><?= _t('Post') ?>:</td>
                    <td valign="top" class="cash">
                        <strong>
                            <br/> Casino Del Rio, P.O. Box 1263 Makati Post Office, Gil Puyat Avenue, Makati City,
                                  Philippines<br/><br/>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="cash"><br/>FAQ:</td>
                    <td valign="top" class="cash">
                        <strong>
                            <br/><?= _t('You can find answers to most commonly asked questions in our') ?> <a
                                href="<?= ABBR_LANG ?>faq">FAQ</a>
                            <?= _t('page') ?>.<br/><br/>
                        </strong>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
        <p><?= _t('Are you up to date on all our latest bonuses, special offers, promotions and your account status?') ?></p>

        <p><?= _t('Casino Del Rio stays in touch with you about all our bonuses, tournaments, promotions, events, updates,
           raffles and important personal information via email. Yet sometimes your internet service provider may
           mistakenly block our emails using an anti-spam filter, thinking that you may not want them. Our emails are
           legitimate and shouldn’t be part of your anti-spam filter – especially if you want to stay up to date on all
           the latest bonuses and special offers. So be sure to add us to your safe list today!') ?></p>

        <p><?= _t('For further information on your account’s status, bonuses, withdrawals and promotions, click') ?> <a
                href="javascript:GoTo(download)"><?= _t('here') ?></a>.</p>

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
                    <div id="jackpot_home" onclick="t_do(); document.location.href=<?= ABBR_LANG ?>jackpots"
                         style="margin-left:0px; width:220px; background-image: url(<?= IMG_PATH ?>en/<?= IMG_PATH ?>jackpot-inner.jpg);">
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
                <dl class="narrow" onclick="document.location.href= <?= ABBR_LANG ?>customer-service
                    ">
                    <dt><?= _t('24/7 Support') ?>:</dt>
                    <dd><?= _t('Canada free') ?>: 1-888-332-9583</dd>
                    <dd></dd>
                    <dd><?= _t('International') ?>: +63-2756-7824</dd>
                </dl>
            </li>
            <li>
                <a href="javascript:GoTo(flash)">
                    <img src="<?= IMG_PATH ?>en/<?= IMG_PATH ?>100games.gif"/>
                </a>

                <p>
                    <a class="sidebar_preview" href="<?= ABBR_LANG ?>casino-games"><?= _t('Click to Preview') ?></a>
                </p>
            </li>


        </ul>

    </div>
    <?php include(__DIR__ . '/nav.php'); ?>
</div>
