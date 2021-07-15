<div class="grve-section grve-row-section grve-fullwidth-background grve-bg-none grve-desktop-row-hide grve-tablet-row-hide grve-mobile-row-hide"
     style="background-color:#f7f7f7;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-30">
            <div class="grve-column wpb_column grve-column-1-2 grve-tablet-sm-column-1-2">
                <div class="grve-column-wrapper"><h2
                            class="grve-element grve-title grve-align-center grve-h2 grve-increase-heading grve-heading-120"
                            style="margin-bottom: 15px;"><span></span></h2></div>
            </div>
            <div class="grve-column wpb_column grve-column-1-2">
                <div class="grve-column-wrapper"><h2
                            class="grve-element grve-title grve-align-center grve-h2 grve-increase-heading grve-heading-120"
                            style="margin-bottom: 15px;"><span></span></h2></div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>

<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-1x grve-bg-none grve-desktop-row-hide grve-tablet-row-hide grve-mobile-row-hide"
     style="background-color:#f7f7f7;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-60">

            <?php
                $needConsultation = $data->needConsultation;
                foreach ($needConsultation as $item){
            ?>

            <div class="grve-column wpb_column grve-column-1-2 grve-tablet-sm-column-1-2">
                <div class="grve-column-wrapper vc_custom_1568150361350 grve-shadow-medium grve-with-shadow">
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                    <div class="grve-element grve-text">
                        <h2 style="text-align: center;"><strong><?php print($item->title); ?></strong>
                        </h2>
                        <h3 style="text-align: center;"><?php print($item->subTitle); ?></h3>
                        <p style="text-align: center;"><?php print($item->description); ?></p>
                        <h3 style="text-align: center;"><strong><?php print($item->price); ?></strong></h3>

                    </div>
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                    <div class="grve-element grve-text">
                        <p style="text-align: center;"><a
                                    class="maxbutton-4 maxbutton maxbutton-oformit-zayavku2"
                                    href="#ulp-wwxxhOM6JtVDZgco"><span class='mb-text'>ОФОРМИТЬ ЗАЯВКУ</span></a>
                        </p>

                    </div>
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                </div>
            </div>

            <?php } ?>



            <div class="grve-column wpb_column grve-column-1 grve-tablet-sm-column-1 grve-align-center"
                 style="color:#000000;">
                <div class="grve-column-wrapper vc_custom_1568323702663">
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                    <div class="grve-element grve-text">
                        <h2 style="text-align: center;">Нужна консультация?</h2>
                        <p style="text-align: center;">Оставьте свои данные, мы свяжемся с
                            Вами и проконсультируем по всем вопросам!</p>

                    </div>
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                    <div role="form" class="wpcf7" id="wpcf7-f86-p279-o3" lang="en-US"
                         dir="ltr">
                        <div class="screen-reader-response" role="alert"
                             aria-live="polite"></div>
                        <form action="/#wpcf7-f86-p279-o3" method="post"
                              class="wpcf7-form init" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="86">
                                <input type="hidden" name="_wpcf7_version" value="5.2.1">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag"
                                       value="wpcf7-f86-p279-o3">
                                <input type="hidden" name="_wpcf7_container_post"
                                       value="279">
                                <input type="hidden" name="_wpcf7_posted_data_hash"
                                       value="">
                            </div>
                            <div class="grve-form">
                                <div class="grve-fields-wrapper">
                                    <div class="grve-one-half">
                                        <div class="grve-link-text">Ваше имя*</div>
                                        <p><span
                                                    class="wpcf7-form-control-wrap your-first-name"><input
                                                        type="text" name="your-first-name" value=""
                                                        size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        aria-required="true"
                                                        aria-invalid="false"></span></p></div>
                                    <div class="grve-one-half grve-last-column">
                                        <div class="grve-link-text">Номер телефона*</div>
                                        <p><span
                                                    class="wpcf7-form-control-wrap tel-000"><input
                                                        type="tel" name="tel-000" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                        aria-required="true"
                                                        aria-invalid="false"></span></p></div>
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
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>

<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-1x grve-bg-none grve-desktop-row-hide grve-tablet-row-hide grve-tablet-sm-row-hide"
     style="background-color:#f7f7f7;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-60">

            <?php foreach ($needConsultation as $item){ ?>
            <div class="grve-column wpb_column grve-column-1 grve-tablet-sm-column-1">
                <div class="grve-column-wrapper">
                    <h2 class="grve-element grve-title grve-align-center grve-h2 grve-increase-heading grve-heading-120"
                        style="margin-bottom: 15px;"><span><br>
<p style="text-align: center;"><span style="color: #000;"><?php print($item->title); ?></span><br>
</p></span></h2>
                </div>
            </div>
            <div class="grve-column wpb_column grve-column-1 grve-tablet-sm-column-1">
                <div class="grve-column-wrapper vc_custom_1568324470775 grve-shadow-medium grve-with-shadow">
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                    <div class="grve-element grve-text">
                        <h3 style="text-align: center;"><?php print($item->subTitle); ?></h3>
                        <p style="text-align: center;"><?php print($item->description); ?></p>
                        <h3 style="text-align: center;"><strong><?php print($item->price); ?></strong></h3>

                    </div>
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                    <div class="grve-element grve-text">
                        <p style="text-align: center;"><a
                                    class="maxbutton-4 maxbutton maxbutton-oformit-zayavku2"
                                    href="#ulp-wwxxhOM6JtVDZgco"><span class='mb-text'>ОФОРМИТЬ ЗАЯВКУ</span></a>
                        </p>

                    </div>
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                </div>
            </div>
            <?php } ?>

            <div class="grve-column wpb_column grve-column-1 grve-align-center"
                 style="color:#000000;">
                <div class="grve-column-wrapper vc_custom_1568324321526">
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                    <div class="grve-element grve-text">
                        <h2 style="text-align: center;">Нужна консультация?</h2>
                        <p style="text-align: center;">Оставьте свои данные, мы свяжемся с
                            Вами и проконсультируем по всем вопросам!</p>

                    </div>
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                    <div role="form" class="wpcf7" id="wpcf7-f86-p279-o4" lang="en-US"
                         dir="ltr">
                        <div class="screen-reader-response" role="alert"
                             aria-live="polite"></div>
                        <form action="/#wpcf7-f86-p279-o4" method="post"
                              class="wpcf7-form init" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="86">
                                <input type="hidden" name="_wpcf7_version" value="5.2.1">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag"
                                       value="wpcf7-f86-p279-o4">
                                <input type="hidden" name="_wpcf7_container_post"
                                       value="279">
                                <input type="hidden" name="_wpcf7_posted_data_hash"
                                       value="">
                            </div>
                            <div class="grve-form">
                                <div class="grve-fields-wrapper">
                                    <div class="grve-one-half">
                                        <div class="grve-link-text">Ваше имя*</div>
                                        <p><span
                                                    class="wpcf7-form-control-wrap your-first-name"><input
                                                        type="text" name="your-first-name" value=""
                                                        size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                        aria-required="true"
                                                        aria-invalid="false"></span></p></div>
                                    <div class="grve-one-half grve-last-column">
                                        <div class="grve-link-text">Номер телефона*</div>
                                        <p><span
                                                    class="wpcf7-form-control-wrap tel-000"><input
                                                        type="tel" name="tel-000" value="" size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                        aria-required="true"
                                                        aria-invalid="false"></span></p></div>
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
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>
