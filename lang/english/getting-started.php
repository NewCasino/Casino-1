<div class="inner" id="container">
    <div id="inner">
        <h1><?= _t('Getting Started') ?></h1>

        <p><?= _t('Need help getting started at the Casino Del Rio? Our 4 user-friendly steps will guide you through the
           downloading process and help get you playing your favorite games right away!') ?></p>
        <ul id="stepper">
            <li id="toggleboxb1-title"><?= _t('STEP 1') ?></li>
            <li id="toggleboxb2-title"><?= _t('STEP 2') ?></li>
            <li id="toggleboxb3-title"><?= _t('STEP 3') ?></li>
            <li id="toggleboxb4-title"><?= _t('STEP 4') ?></li>
        </ul>
        <div id="toggleboxb1" class="togglegroup">
            <p>
                <strong><?= _t('1. Download: Rapid installation plus amazing graphics') ?></strong>
            </p>

            <p><a href="<?= ABBR_LANG ?>index">Downloading</a> <?= _t('our software is quick and easy and offers you unique
                                                               access to an
                                                               incredible gaming experience. Once installed, you can
                                                               play your
                                                               favorite games simply by opening the software and logging
                                                               in. If you
                                                               would like to start the process, simply hit') ?> <a
                    href="javascript:GoTo(download)">'Download'</a> <?= _t('and enjoy an amazing customer welcome bonus') ?>
                .</p>
            <a href="javascript:GoTo(download)">
                <img width="358px" height="232px" src="<?= IMG_PATH ?>download/complete.gif"/><br/><br/>
                <img alt="" src="<?= IMG_PATH ?>download/language.jpg"/>
            </a>

        </div>
        <div id="toggleboxb2" class="togglegroup">
            <p>
                <strong><?= _t('2. Select Real Money or Fun Mode') ?></strong>
            </p>

            <strong style="color:#4E6E20;"><?= _t('Real Money Mode:') ?></strong><br/>

            <p><?= _t('This allows you to play with the Big Guns and win big profits. It allows you to place your bets from home
               and reap the benefits!') ?></p>

            <strong style="color:#4E6E20;"><?= _t('Fun Mode') ?>:</strong><br/>

            <p><?= _t('Fun Mode works like a practice run, allowing you to try out our games without risking anything. You can
               find out all about our games until you feel ready to move on to Real Money Mode. ') ?></p>
            <a href="javascript:GoTo(download)"><img src="<?= IMG_PATH ?>download/funreal2.jpg"/></a>
        </div>
        <div id="toggleboxb3" class="togglegroup">
            <p>
                <strong><?= _t('3. Make your first deposit and receive your welcome bonus') ?></strong>
            </p>

            <p><?= _t('Choose your deposit method of choice from the list provided in the') ?> <a
                    href="<?= ABBR_LANG ?>cashier"><?= _t('cashier') ?></a>
                <?= _t('and
               then select the amount you wish to place in your personal account.') ?></p>

            <p><?= _t('Once you have registered an amount, the screen will display confirmation of approval and you will receive
               an instant welcome bonus.') ?></p>

            <p><?= _t('There are two types of') ?> <a href="<?= ABBR_LANG ?>promo-offers"><?= _t('bonuses') ?></a>:</p>
            <strong style="color:#4E6E20;"><?= _t('Welcome Bonus') ?></strong><br/>

            <p><?= _t('A Welcome Bonus is awarded to all our new customers as soon as they have made their first deposit in
               their account.') ?></p>

            <strong style="color:#4E6E20;"><?= _t('Extra Deposit Bonus') ?></strong><br/>

            <p><?= _t('An Extra Deposit Bonus is awarded on top of the bonus when you top up your account with your preferred
               payment method.') ?></p>

            <p><?= _t('There is no need to choose between our two great bonuses! Why not take them both and start making money
               now?') ?></p>
            <center>
                <a href="javascript:GoTo(download)"><img src="<?= IMG_PATH ?>en/images/promos.gif"/></a><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <a href="javascript:GoTo(download)"><img src="<?= IMG_PATH ?>en/images/sendtoafriend.gif"/></a>
            </center>
        </div>
        <div id="toggleboxb4" class="togglegroup">
            <p>
                <strong><?= _t('4. Select a game and start playing now!') ?></strong>
            </p>

            <p>
                1) <?= _t('Enter the lobby') ?><br/>
                2) <?= _t('Choose from a range of') ?> <a
                    href="<?= ABBR_LANG ?>casino-games"><?= _t('casino game') ?></a> <?= _t('categories (e.g. card
                games, table
                games etc.)') ?><br/>
                3) <?= _t('Select single player or multiplayer as required') ?><br/>
                4) <?= _t('Start to') ?> <a href="javascript:GoTo(flash)"><?= _t('play') ?></a>!

            </p>

            <div id="previews">
                <div class="preview_block">
                    <a href="javascript:GoTo(download)">
                        <img src="<?= IMG_PATH ?>preview/icon_tablegames.jpg" alt="">
                    </a>
                </div>
                <div class="preview_block">
                    <a href="javascript:GoTo(download)">
                        <img src="<?= IMG_PATH ?>preview/icon_bonusgames.jpg" alt="">
                    </a>
                </div>
                <div class="preview_block">
                    <a href="javascript:GoTo(download)">
                        <img src="<?= IMG_PATH ?>preview/icon_slotgames.jpg" alt="">
                    </a>
                </div>
                <div class="preview_block">
                    <a href="<?= SITE_LANG ?>jackpots">
                        <img src="<?= IMG_PATH ?>preview/icon_progressivegames.jpg" alt="">
                    </a>
                </div>
                <div class="preview_block">
                    <a href="javascript:GoTo(download)">
                        <img src="<?= IMG_PATH ?>preview/icon_arcadegames.jpg" alt="">
                    </a>
                </div>
                <div class="preview_block">
                    <a href="javascript:GoTo(download)">
                        <img src="<?= IMG_PATH ?>preview/icon_videopoker.jpg" alt="">
                    </a>
                </div>
                <div class="preview_block">
                    <a href="javascript:GoTo(download)">
                        <img src="<?= IMG_PATH ?>preview/icon_favoritegames.jpg" alt="">
                    </a>
                </div>
                <div class="preview_block">
                    <a href="javascript:GoTo(download)">
                        <img src="<?= IMG_PATH ?>preview/icon_livegames.jpg" alt="">
                    </a>
                </div>
                <div class="preview_block">
                    <a href="javascript:GoTo(download)">
                        <img src="<?= IMG_PATH ?>preview/icon_asiangames.jpg" alt="">
                    </a>
                </div>
            </div>


        </div>


        <script type="text/javascript">
            var toggleprops = new switchcontent("togglegroup", "div")
            toggleprops.setStatus('<img src="<?= IMG_PATH ?>sv_arrow.jpg" alt="" />', '<img src="<?= IMG_PATH ?>sh_arrow.jpg" alt="" />')
            toggleprops.setColor('#4e6e20', '#555454')
            toggleprops.setPersist(false)
            toggleprops.defaultExpanded(0)
            toggleprops.collapsePrevious(true) //Only one content open at any given time
            toggleprops.init()
        </script>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/><br/>
    </div>

    <?php include(__DIR__ . '/nav.php'); ?>
</div>
