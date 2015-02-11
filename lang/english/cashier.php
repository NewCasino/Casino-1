<div class="inner" id="container">
    <div id="inner">
        <h1><?= _t('Cashier') ?></h1>

        <h2><?= _t('Over 40 international payment methods for fast & secure banking') ?></h2>

        <p><?= _t('Here at Casino Del Rio we’ve made depositing and withdrawing money incredibly easy. There are more than 40
           different payments methods available, many of which are tailor designed to your locality, so there is sure to
           be one to suit you. As we are a Verisign secured website you can be sure that all your transactions are safe.') ?>
        </p>

        <p>
            <?= _t('Making your first deposit is easy, just follow these simple steps:') ?><br/>
            <?= _t('1) Select a payment method which you wish to use') ?><br/>
            <?= _t('2) Fill out all the information you are asked for') ?><br/>
            <?= _t('3) Type in the amount of money you wish to deposit') ?><br/>
            <?= _t('4) Allow your request to be processed') ?><br/>
            <?= _t('5) Return to the casino lobby and choose a game to play') ?><br/>
        </p>

        <div class="thead">
            <table cellspacing="0" cellpadding="0" border="0" summary="cashier" class="exp_table">
                <tbody>
                <tr class="heading">
                    <th width="20%"><?= _t('Payment Method') ?></th>
                    <th width="20%"><?= _t('Funding') ?></th>
                    <th width="20%"><?= _t('Deposit Time') ?></th>
                    <th width="20%"><?= _t('Bonus Amount') ?></th>
                    <th width="20%"><?= _t('Available') ?></th>
                </tr>
                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/visa.gif">
                    </td>
                    <td valign="top">Visa<br>MasterCard</td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top"></td>
                    <td valign="top"><?= _t('International') ?> <br>C$<br>$ € £</td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/maestro_diners.gif">
                    </td>
                    <td valign="top">Maestro <br> Diners Club</td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top"></td>
                    <td valign="top"><?= _t('International') ?> Diners: $ € £<br> Maestro:€ £</td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/visa_delta.gif">
                    </td>
                    <td valign="top">Visa Electron<br>Delta</td>
                    <td valign="top"><?= _t('Instant') ?>
                    </td>
                    <td valign="top"></td>
                    <td valign="top"><?= _t('International') ?> <br>$ € £</td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/new_neteller.gif">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a>

                    </td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('International') ?> <br>$ € £</td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/instadebit.gif">
                    </td>
                    <td valign="top">
                        <?= _t('Bank account') ?>
                    </td>
                    <td valign="top">
                        <?= _t('Instant') ?>
                    </td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top">
                        $<br>
                        $
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/moneybookers.gif">
                    </td>
                    <td valign="top">
                        <a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a>
                    </td>
                    <td valign="top">
                        <?= _t('Instant') ?>
                    </td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top">
                        <?= _t('International') ?> <br>C$<br>
                                                       $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/clickandbuy.gif">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a>
                    </td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top">
                        <?= _t('International') ?><br>
                        $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/ukash.gif">
                    </td>
                    <td valign="top">
                        <a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a>
                    </td>
                    <td valign="top">
                        <?= _t('Instant') ?>
                    </td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR15.gif">
                    </td>
                    <td valign="top">
                        <?= _t('International') ?><br>
                        £ €
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/paysafecard.gif">
                    </td>
                    <td valign="top">
                        <?= _t('Prepaid card') ?>
                    </td>
                    <td valign="top">
                        <?= _t('Instant') ?>
                    </td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top">
                        <?= _t('International') ?><br>
                        € $ £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/entropay.gif">
                    </td>
                    <td valign="top"><?= _t('Credit Cards') ?><br> Maestro/Solo</td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('International') ?> <br>C$<br>$ € £</td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/banktransfer_small.gif">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a>
                    </td>
                    <td valign="top"><?= _t('1-5 business days') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR15.gif">
                    </td>
                    <td valign="top">
                        <?= _t('International') ?><br>C$<br>
                                                      $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/sofort.gif">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a>
                    </td>
                    <td valign="top"><?= _t('Immediate') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR15.gif">
                    </td>
                    <td valign="top">
                        <?= _t('Germany') ?>, <?= _t('Austria') ?> &amp; <?= _t('Switzerland') ?>
                        <br>
                                            €
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/ideal_new.gif">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR15.gif">
                    </td>
                    <td valign="top">
                        <?= _t('Netherlands') ?><br>
                        $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/logo_giropay.jpg">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('Germany') ?> <br> C$<br>
                                                               $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/nordea.gif">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('Sweden') ?> &amp; <?= _t('Finland') ?> <br> C$<br>
                                                         $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/eps2.jpg">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('Austria') ?> <br> C$<br>
                                                               $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/poli_mb.gif">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top">
                        <?= _t('Australia') ?><br>C$<br>
                                                  $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/enets.gif">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('Singapore') ?> <br> C$<br>
                                                                 $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/teleingreso2.gif">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR15.gif">
                    </td>
                    <td valign="top"><?= _t('Spain') ?><br> C$<br>
                                                            $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/neosurf2.jpg">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR15.gif">
                    </td>
                    <td valign="top"><?= _t('Europe') ?> <br> C$<br>
                                                              $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/multiblanco.jpg">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR15.gif">
                    </td>
                    <td valign="top"><?= _t('Portugal') ?> <br> C$<br>
                                                                $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/dankorts.jpg">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('Denmark') ?> <br> C$<br>
                                                               $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/ewire2.jpg">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('Denmark') ?> <br> C$<br>
                                                               $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/przelewy.gif">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR15.gif">
                    </td>
                    <td valign="top">
                        <?= _t('Poland') ?><br>
                        $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/webmoney.gif">
                    </td>
                    <td valign="top">
                        <a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a>
                    </td>
                    <td valign="top">
                        <?= _t('Instant') ?>
                    </td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top">
                        <?= _t('International') ?><br>
                        C$<br>
                        $ €
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/monets.ru.gif">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('Russia') ?><br>C$<br>
                                                            $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/ecocard.gif">
                    </td>
                    <td valign="top">
                        <a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a>
                    </td>
                    <td valign="top">
                        <?= _t('Instant') ?>
                    </td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top">
                        <?= _t('International') ?><br>C$<br>
                                                      $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/usemybank.gif">
                    </td>
                    <td valign="top"><?= _t('Online banking') ?></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top">
                        CAN, UK, NL, PL, AU, <?= _t('Germany') ?>, <?= _t('Switzerland') ?>, <?= _t('Austria') ?><br>
                        $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/instant-wiretransfer_en.gif">
                    </td>
                    <td valign="top">
                        <a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a> *
                    </td>
                    <td valign="top">
                        <?= _t('Instant') ?>
                    </td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR15.gif">
                    </td>
                    <td valign="top">
                        <?= _t('International') ?><br>
                        C$<br>
                        $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/boleto-bancario_thumb2.gif">
                    </td>
                    <td valign="top">Boleto Bancário</td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top"></td>
                    <td valign="top"><?= _t('Brazil') ?> <br>$</td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/logo_santander.gif">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('24 Hours') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('Chile') ?><br><br>
                        $ €
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/logo_GluePay1.png">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('24 Hours') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('Scandinavia') ?>, <?= _t('Latvia') ?>, <?= _t('Lithuania') ?><br><br>NOK,
                                                             SEK,
                                                             DKK,
                                                             EUR
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/euteller.jpg">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('Finland') ?><br>C$ AU$<br>
                                                             $ € £
                    </td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/bancontact.gif">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('Belgium') ?><br>$ € £</td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/online_bank_transfer.jpg">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('United Kingdom') ?><br>$ € £</td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/ec_by_moneybookers.jpg">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('Germany') ?><br>$ €</td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/logo_DineroMail.jpg">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('Mexico') ?>, <?= _t('Argentina') ?> &amp; <?= _t('Chile') ?><br>$<br></td>
                </tr>

                <tr class="cash_h">
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/logo_lobanet.jpg">
                    </td>
                    <td valign="top"><a href="javascript:GoTo(download)"><?= _t('Click to view') ?></a></td>
                    <td valign="top"><?= _t('Instant') ?></td>
                    <td valign="top">
                        <img alt="" src="<?= IMG_PATH ?>cashier/DR10.gif">
                    </td>
                    <td valign="top"><?= _t('South America') ?></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <?php include(__DIR__ . '/nav.php'); ?>
</div>