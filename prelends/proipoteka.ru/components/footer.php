<?php
    $company = $data->aboutCompany;
    $contacts = $data->contacts;
?>
<footer id="grve-footer" data-sticky-footer="yes" class="grve-border grve-bookmark">
    <div class="grve-footer-wrapper">
        <!-- Footer -->
        <div class="grve-widget-area">
            <div class="grve-container grve-padding-top-2x grve-padding-bottom-2x ">
                <div class="grve-row grve-columns-gap-30">
                    <div class="wpb_column grve-column grve-column-1-4 grve-tablet-column-1-2">
                        <div class="grve-column-wrapper">
                            <div id="text-2" class="grve-widget widget widget_text">
                                <div class="grve-widget-title">КОНТАКТЫ:</div>
                                <div class="textwidget">
                                    <p>Ипотечное агентство <a
                                            name="/#q5"></a>
                                        <?php print($company->name); ?><br>
                                        <?php print($company->slogan); ?></p>
                                    <p></p>
                                    <p><strong>Телефон:</strong>
                                        <!-- todo replace -->
                                        <a href="tel:<?php print($contacts->phone); ?>"><?php print($contacts->phone); ?></a></p>
                                    <p><?php print($company->name); ?></p>
                                    <div class="grve-section grve-row-section grve-fullwidth-background grve-bg-none"
                                         id="q5">
                                        <div class="grve-container">
                                            <div class="grve-row grve-bookmark grve-columns-gap-30">
                                                <div class="grve-element grve-social grve-align-left" style="">
                                                    <ul>
                                                        <li>
                                                            <a href="<?php print($contacts->instagram); ?>"
                                                               class="grve-small grve-no-shape" target="_blank"
                                                               rel="noopener noreferrer">
                                                                <i class="grve-text-primary-1 fa fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php print($contacts->vk); ?>"
                                                               class="grve-small grve-no-shape" target="_blank"
                                                               rel="noopener noreferrer">
                                                                <i class="grve-text-primary-1 fa fa-vk"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grve-background-wrapper"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column grve-column grve-column-1-4 grve-tablet-column-1-2">
                        <div class="grve-column-wrapper">
                            <div id="custom_html-3" class="widget_text grve-widget widget widget_custom_html">
                                <div class="textwidget custom-html-widget">
                                    <?php print($data->geomap); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column grve-column grve-column-1-4 grve-tablet-column-1-2">
                        <div class="grve-column-wrapper">
                            <div id="nav_menu-3" class="grve-widget widget widget_nav_menu">
                                <div class="grve-widget-title">НАВИГАЦИЯ</div>
                                <div class="menu-customers-anchor-container">
                                    <ul id="menu-customers-anchor-1" class="menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-643">
                                            <a href="index.php#q0">Цены</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-240">
                                            <a href="index.php#q_calc">Калькулятор ипотеки</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-241">
                                            <a href="index.php#q11">Партнеры</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-242">
                                            <a href="index.php#q3">Этапы работы</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="nav_menu-4" class="grve-widget widget widget_nav_menu">
                                <div class="menu-dogovor-container">
                                    <ul id="menu-dogovor" class="menu">
                                        <li id="menu-item-1043"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1043">
                                            <a href="<?php print $PATH_PRELANDING; ?>wp-content/uploads/2020/01/refinance.docx">Договор
                                                Рефинансирование</a></li>
                                        <li id="menu-item-1044"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1044">
                                            <a href="<?php print $PATH_PRELANDING; ?>wp-content/uploads/2020/01/dog_ipoteka.docx">Договор
                                                Ипотека</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wpb_column grve-column grve-column-1-4 grve-tablet-column-1-2">
                        <div class="grve-column-wrapper">
                            <div class="widget_text grve-widget widget widget_custom_html">

                                <a class="maxbutton-1 maxbutton maxbutton-zakazat-konsultaciyu ym_consultation" href="#ulp-wwxxhOM6JtVDZgco">
                                    <span class="mb-text">ОФОРМИТЬ ЗАЯВКУ</span>
                                </a>

                                <!--
                                <div class="grve-widget-title">Оставить заявку:</div>
                                <div class="textwidget custom-html-widget">

                                    <div role="form" class="wpcf7" id="wpcf7-f86-p279-o5" lang="en-US"
                                         dir="ltr">
                                        <div class="screen-reader-response" role="alert"
                                             aria-live="polite"></div>

                                        <form action="../mail/mail.php" method="post" class="wpcf7-form init"
                                              novalidate="novalidate">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="86">
                                                <input type="hidden" name="_wpcf7_version" value="5.2.1">
                                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                <input type="hidden" name="_wpcf7_unit_tag"
                                                       value="wpcf7-f86-p279-o5">
                                                <input type="hidden" name="_wpcf7_container_post" value="279">
                                                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                            </div>
                                            <div class="grve-form">
                                                <div class="grve-fields-wrapper">
                                                    <div class="grve-one-half">
                                                        <div class="grve-link-text">Ваше имя*</div>
                                                        <p><span
                                                                class="wpcf7-form-control-wrap your-first-name"
                                                            ><input
                                                                    type="text" name="name" value=""
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                    aria-required="true"
                                                                    aria-invalid="false">

                                                            </span></p></div>
                                                    <div class="grve-one-half grve-last-column">
                                                        <div class="grve-link-text">Телефон*</div>
                                                        <p><span class="wpcf7-form-control-wrap tel-000">

                                                                <input
                                                                    type="number" name="phone" value="" size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                    aria-required="true"
                                                                    aria-invalid="false">

                                                            </span></p></div>
                                                    <div><input type="submit" value="Отправить"
                                                                class="wpcf7-form-control wpcf7-submit grve-btn grve-btn-medium">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type='hidden' class='wpcf7-pum'
                                                   value='{"closepopup":false,"closedelay":0,"openpopup":false,"openpopup_id":0}'>
                                            <div class="wpcf7-response-output" role="alert"
                                                 aria-hidden="true"></div>
                                        </form>


                                    </div>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="view_counter" style="background-color: #fff;"></div>

</footer>