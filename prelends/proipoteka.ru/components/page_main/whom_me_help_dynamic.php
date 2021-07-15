<!-- todo Подправить блок -->
<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-1x grve-bg-none grve-headings-light" style="background-color: #2b2b2b; color: #ffffff;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-30">
            <div class="grve-column wpb_column grve-column-1">
                <div class="grve-column-wrapper">
                    <h3 class="grve-element grve-title grve-align-center grve-h3" style="margin-bottom: 0px;">
                        <span><br /><h1 style="text-align: center;">Кому мы помогаем:</h1>
                        </span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>

<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-2x grve-bg-none grve-headings-dark grve-custom-height grve-equal-column grve-tablet-sm-row-hide grve-mobile-row-hide"
     style="background-color: #2b2b2b; color: #000000;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-60">

            <?php
                $whomMeHelp = $data->whomMeHelp;
                foreach ($whomMeHelp as $item){
                    $classStyles = $item->classStyles[0];
            ?>
            <div class="grve-column wpb_column grve-column-1-4 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="800">
                <div class="grve-column-wrapper <?php print($classStyles->wrapper); ?>">
                    <div class="grve-element <?php print($classStyles->classIcon); ?> grve-align-center grve-medium" style="margin-bottom: 18px;">
                        <div class="grve-wrapper-icon grve-no-shape">
                            <i class="smp-icon-shield grve-text-white"></i>
                        </div>
                    </div>
                    <h3 class="grve-element grve-title grve-align-center grve-h5" style="">
                        <span>
                            <span style="color: #ffff00;"><?php print($item->title); ?></span>
                        </span>
                    </h3>
                    <div class="grve-element grve-text <?php print($classStyles->description); ?>">
                        <p style="text-align: center;"><?php print($item->description); ?></p>
                    </div>
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                    <div class="grve-element grve-text">
                        <p style="text-align: center;">
                            <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco"><span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                        </p>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>

<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-2x grve-bg-none grve-headings-dark grve-custom-height grve-equal-column grve-desktop-row-hide grve-tablet-row-hide grve-mobile-row-hide"
     style="background-color: #2b2b2b; color: #000000;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-20">

            <?php
                foreach ($whomMeHelp as $item){
                $classStyles = $item->classStyles[1];
            ?>

            <div class="grve-column wpb_column grve-column-1-4 grve-tablet-sm-column-1-2 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="600">
                <div class="grve-column-wrapper <?php print($item->classIcon); ?>">
                    <div class="grve-element <?php print($classStyles->wrapper); ?> grve-align-center grve-medium" style="margin-bottom: 18px;">
                        <div class="grve-wrapper-icon grve-no-shape" >
                            <i class="smp-icon-shield grve-text-white"></i></div>
                    </div>
                    <h3 class="grve-element grve-title grve-align-center grve-h3 grve-increase-heading grve-heading-140">
                          <span style="color: #ffff00;"><?php print($item->title); ?></span>
                    </h3>
                    <div class="grve-element grve-text <?php print($classStyles->description); ?>">
                        <p style="text-align: center;">
                            <?php print($item->description); ?>
                        </p>
                    </div>
                    <div class="grve-empty-space grve-height-1x" ></div>
                    <div class="grve-element grve-text">
                        <p style="text-align: center;">
                            <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco">
                                <span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                        </p>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>

<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-3x grve-bg-none grve-headings-dark grve-custom-height grve-equal-column grve-desktop-row-hide grve-tablet-row-hide grve-tablet-sm-row-hide"
     style="background-color: #2b2b2b; color: #000000;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-60">

            <?php
                foreach ($whomMeHelp as $item){
                    $classStyles = $item->classStyles[2];
            ?>
                <div class="grve-column wpb_column grve-column-1-4 grve-tablet-sm-column-1 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="600">
                <div class="grve-column-wrapper <?php print($classStyles->wrapper); ?>">
                    <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                        <div class="grve-wrapper-icon grve-no-shape">
                            <i class="<?php print($item->classIcon); ?> grve-text-white"></i></div>
                    </div>
                    <h3 class="grve-element grve-title grve-align-center grve-h3 grve-increase-heading grve-heading-140">
                        <span style="color: #ffff00;">
                            <?php print($item->title); ?>
                        </span>
                    </h3>
                    <div class="grve-element grve-text <?php print($classStyles->description); ?>">
                        <p style="text-align: center;">
                            <?php print($item->description); ?>
                        </p>
                    </div>
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                    <div class="grve-element grve-text">
                        <p style="text-align: center;">
                            <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco">
                                <span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>

<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-bottom-1x grve-bg-none" style="background-color: #ffffff;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-60">
            <div class="grve-column wpb_column grve-column-1-6 grve-tablet-sm-column-hide grve-mobile-column-hide"><div class="grve-column-wrapper"></div></div>
            <div class="grve-column wpb_column grve-column-2-3 grve-tablet-sm-column-1">
                <div class="grve-column-wrapper"><div class="grve-empty-space grve-height-1x" style=""></div></div>
            </div>
            <div class="grve-column wpb_column grve-column-1-6 grve-tablet-sm-column-hide grve-mobile-column-hide"><div class="grve-column-wrapper"></div></div>
        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>


<!--

                                    <div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-1x grve-bg-none grve-headings-light" style="background-color: #2b2b2b; color: #ffffff;">
                                        <div class="grve-container">
                                            <div class="grve-row grve-bookmark grve-columns-gap-30">
                                                <div class="grve-column wpb_column grve-column-1">
                                                    <div class="grve-column-wrapper">
                                                        <h3 class="grve-element grve-title grve-align-center grve-h3" style="margin-bottom: 0px;">
                                                            <span>
                                                                <br />
                                                                <h1 style="text-align: center;">Кому мы помогаем:</h1>
                                                            </span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grve-background-wrapper"></div>
                                    </div>

                                    <div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-2x grve-bg-none grve-headings-dark grve-custom-height grve-equal-column grve-tablet-sm-row-hide grve-mobile-row-hide"
                                        style="background-color: #2b2b2b; color: #000000;">
                                        <div class="grve-container">
                                            <div class="grve-row grve-bookmark grve-columns-gap-60">
                                                <div class="grve-column wpb_column grve-column-1-4 grve-tablet-sm-column-1 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="600">
                                                    <div class="grve-column-wrapper vc_custom_1568983661381">
                                                        <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i class="smp-icon-shield grve-text-white"></i></div>
                                                        </div>
                                                        <h3 class="grve-element grve-title grve-align-center grve-h5" style="">
                                                            <span>
                                                                <span style="color: #ffff00;">Плохая кредитная</span><br />
                                                                <span style="color: #ffff00;">история</span>
                                                            </span>
                                                        </h3>
                                                        <div class="grve-element grve-text vc_custom_1572556190159">
                                                            <p style="text-align: center;">
                                                                Мы успешно работаем с плохой кредитной<br />
                                                                историей
                                                            </p>
                                                        </div>
                                                        <div class="grve-empty-space grve-height-1x" style=""></div>
                                                        <div class="grve-element grve-text">
                                                            <p style="text-align: center;">
                                                                <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco"><span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grve-column wpb_column grve-column-1-4 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="800">
                                                    <div class="grve-column-wrapper vc_custom_1568983704505">
                                                        <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i class="smp-icon-shield grve-text-white"></i></div>
                                                        </div>
                                                        <h3 class="grve-element grve-title grve-align-center grve-h5" style="">
                                                            <span>
                                                                <span style="color: #ffff00;">Нет подтверждения</span><br />
                                                                <span style="color: #ffff00;">доходов</span>
                                                            </span>
                                                        </h3>
                                                        <div class="grve-element grve-text vc_custom_1568804123631">
                                                            <p style="text-align: center;">Получим одобрение без документального подтверждения дохода</p>
                                                        </div>
                                                        <div class="grve-empty-space grve-height-1x" style=""></div>
                                                        <div class="grve-element grve-text">
                                                            <p style="text-align: center;">
                                                                <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco"><span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grve-column wpb_column grve-column-1-4 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="1000">
                                                    <div class="grve-column-wrapper vc_custom_1568983719247">
                                                        <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i class="smp-icon-shield grve-text-white"></i></div>
                                                        </div>
                                                        <h3 class="grve-element grve-title grve-align-center grve-h5" style="">
                                                            <span><span style="color: #ffff00;">Рефинансирование ипотечного кредита</span></span>
                                                        </h3>
                                                        <div class="grve-element grve-text vc_custom_1572953468964">
                                                            <p style="text-align: center;">Снизим ежемесячный платеж и уменьшим долговую нагрузку</p>
                                                        </div>
                                                        <div class="grve-empty-space grve-height-1x" style=""></div>
                                                        <div class="grve-element grve-text">
                                                            <p style="text-align: center;">
                                                                <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco"><span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grve-column wpb_column grve-column-1-4 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="200">
                                                    <div class="grve-column-wrapper vc_custom_1568983728895">
                                                        <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i class="smp-icon-shield grve-text-white"></i></div>
                                                        </div>
                                                        <h3 class="grve-element grve-title grve-align-center grve-h5" style="">
                                                            <span>
                                                                <span style="color: #ffff00;">Семейная</span><br />
                                                                <span style="color: #ffff00;">ипотека</span>
                                                            </span>
                                                        </h3>
                                                        <div class="grve-element grve-text vc_custom_1568884327612">
                                                            <p style="text-align: center;">Помогаем одобрить ипотечный кредит от 4,5% семьям с 2-3 детьми</p>
                                                        </div>
                                                        <div class="grve-empty-space grve-height-1x" style=""></div>
                                                        <div class="grve-element grve-text">
                                                            <p style="text-align: center;">
                                                                <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco"><span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grve-background-wrapper"></div>
                                    </div>

                                    <div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-2x grve-bg-none grve-headings-dark grve-custom-height grve-equal-column grve-desktop-row-hide grve-tablet-row-hide grve-mobile-row-hide"
                                        style="background-color: #2b2b2b; color: #000000;">
                                        <div class="grve-container">
                                            <div class="grve-row grve-bookmark grve-columns-gap-20">
                                                <div class="grve-column wpb_column grve-column-1-4 grve-tablet-sm-column-1-2 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="600">
                                                    <div class="grve-column-wrapper vc_custom_1568983742220">
                                                        <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i class="smp-icon-shield grve-text-white"></i></div>
                                                        </div>
                                                        <h3 class="grve-element grve-title grve-align-center grve-h3 grve-increase-heading grve-heading-140" style="">
                                                            <span>
                                                                <span style="color: #ffff00;">Плохая кредитная</span><br />
                                                                <span style="color: #ffff00;">история</span>
                                                            </span>
                                                        </h3>
                                                        <div class="grve-element grve-text vc_custom_1572556198005">
                                                            <p style="text-align: center;">
                                                                Мы успешно работаем с плохой кредитной<br />
                                                                историей
                                                            </p>
                                                        </div>
                                                        <div class="grve-empty-space grve-height-1x" style=""></div>
                                                        <div class="grve-element grve-text">
                                                            <p style="text-align: center;">
                                                                <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco"><span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grve-column wpb_column grve-column-1-4 grve-tablet-sm-column-1-2 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="800">
                                                    <div class="grve-column-wrapper vc_custom_1568983759837">
                                                        <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i class="smp-icon-shield grve-text-white"></i></div>
                                                        </div>
                                                        <h3 class="grve-element grve-title grve-align-center grve-h3 grve-increase-heading grve-heading-140" style="">
                                                            <span>
                                                                <span style="color: #ffff00;">Нет подтверждения</span><br />
                                                                <span style="color: #ffff00;">доходов</span>
                                                            </span>
                                                        </h3>
                                                        <div class="grve-element grve-text vc_custom_1568804139789">
                                                            <p style="text-align: center;">Получим одобрение без документального подтверждения дохода</p>
                                                        </div>
                                                        <div class="grve-empty-space grve-height-1x" style=""></div>
                                                        <div class="grve-element grve-text">
                                                            <p style="text-align: center;">
                                                                <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco"><span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grve-column wpb_column grve-column-1-4 grve-tablet-sm-column-1-2 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="1000">
                                                    <div class="grve-column-wrapper vc_custom_1568983768645">
                                                        <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i class="smp-icon-shield grve-text-white"></i></div>
                                                        </div>
                                                        <h3 class="grve-element grve-title grve-align-center grve-h3 grve-increase-heading grve-heading-140" style="">
                                                            <span><span style="color: #ffff00;">Рефинансирование ипотечного кредита</span></span>
                                                        </h3>
                                                        <div class="grve-element grve-text vc_custom_1572953475622">
                                                            <p style="text-align: center;">Снизим ежемесячный платеж и уменьшим долговую нагрузку</p>
                                                        </div>
                                                        <div class="grve-empty-space grve-height-1x" style=""></div>
                                                        <div class="grve-element grve-text">
                                                            <p style="text-align: center;">
                                                                <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco"><span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grve-column wpb_column grve-column-1-4 grve-tablet-sm-column-1-2 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="200">
                                                    <div class="grve-column-wrapper vc_custom_1568983780729">
                                                        <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i class="smp-icon-shield grve-text-white"></i></div>
                                                        </div>
                                                        <h3 class="grve-element grve-title grve-align-center grve-h3 grve-increase-heading grve-heading-140" style="">
                                                            <span>
                                                                <span style="color: #ffff00;">Семейная</span><br />
                                                                <span style="color: #ffff00;">ипотека</span>
                                                            </span>
                                                        </h3>
                                                        <div class="grve-element grve-text vc_custom_1571424749116">
                                                            <p style="text-align: center;">Помогаем одобрить ипотечный кредит от 4,5% семьям с 2-3 детьми</p>
                                                        </div>
                                                        <div class="grve-empty-space grve-height-1x" style=""></div>
                                                        <div class="grve-element grve-text">
                                                            <p style="text-align: center;">
                                                                <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco"><span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grve-background-wrapper"></div>
                                    </div>

                                    <div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-3x grve-bg-none grve-headings-dark grve-custom-height grve-equal-column grve-desktop-row-hide grve-tablet-row-hide grve-tablet-sm-row-hide"
                                        style="background-color: #2b2b2b; color: #000000;">
                                        <div class="grve-container">
                                            <div class="grve-row grve-bookmark grve-columns-gap-60">
                                                <div class="grve-column wpb_column grve-column-1-4 grve-tablet-sm-column-1 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="600">
                                                    <div class="grve-column-wrapper vc_custom_1568983792093">
                                                        <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i class="smp-icon-shield grve-text-white"></i></div>
                                                        </div>
                                                        <h3 class="grve-element grve-title grve-align-center grve-h3 grve-increase-heading grve-heading-140" style="">
                                                            <span>
                                                                <span style="color: #ffff00;">Плохая кредитная</span><br />
                                                                <span style="color: #ffff00;">история</span>
                                                            </span>
                                                        </h3>
                                                        <div class="grve-element grve-text vc_custom_1572556205897">
                                                            <p style="text-align: center;">
                                                                Мы успешно работаем с плохой кредитной<br />
                                                                историей
                                                            </p>
                                                        </div>
                                                        <div class="grve-empty-space grve-height-1x" style=""></div>
                                                        <div class="grve-element grve-text">
                                                            <p style="text-align: center;">
                                                                <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco"><span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grve-column wpb_column grve-column-1-4 grve-tablet-sm-column-1 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="800">
                                                    <div class="grve-column-wrapper vc_custom_1568983802983">
                                                        <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i class="smp-icon-shield grve-text-white"></i></div>
                                                        </div>
                                                        <h3 class="grve-element grve-title grve-align-center grve-h3 grve-increase-heading grve-heading-140" style="">
                                                            <span>
                                                                <span style="color: #ffff00;">Нет подтверждения</span><br />
                                                                <span style="color: #ffff00;">доходов</span>
                                                            </span>
                                                        </h3>
                                                        <div class="grve-element grve-text vc_custom_1568804145897">
                                                            <p style="text-align: center;">Получим одобрение без документального подтверждения дохода</p>
                                                        </div>
                                                        <div class="grve-empty-space grve-height-1x" style=""></div>
                                                        <div class="grve-element grve-text">
                                                            <p style="text-align: center;">
                                                                <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco"><span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grve-column wpb_column grve-column-1-4 grve-tablet-sm-column-1 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="1000">
                                                    <div class="grve-column-wrapper vc_custom_1568983848346">
                                                        <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i class="smp-icon-shield grve-text-white"></i></div>
                                                        </div>
                                                        <h3 class="grve-element grve-title grve-align-center grve-h3 grve-increase-heading grve-heading-140" style="">
                                                            <span><span style="color: #ffff00;">Рефинансирование ипотечного кредита</span></span>
                                                        </h3>
                                                        <div class="grve-element grve-text vc_custom_1572953482565">
                                                            <p style="text-align: center;">Снизим ежемесячный платеж и уменьшим долговую нагрузку</p>
                                                        </div>
                                                        <div class="grve-empty-space grve-height-1x" style=""></div>
                                                        <div class="grve-element grve-text">
                                                            <p style="text-align: center;">
                                                                <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco"><span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grve-column wpb_column grve-column-1-4 grve-tablet-sm-column-1 grve-clipping-animation grve-clipping-up" style="color: #000000;" data-delay="200">
                                                    <div class="grve-column-wrapper vc_custom_1568983867103">
                                                        <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i class="smp-icon-shield grve-text-white"></i></div>
                                                        </div>
                                                        <h3 class="grve-element grve-title grve-align-center grve-h3 grve-increase-heading grve-heading-140" style="">
                                                            <span>
                                                                <span style="color: #ffff00;">Семейная</span><br />
                                                                <span style="color: #ffff00;">ипотека</span>
                                                            </span>
                                                        </h3>
                                                        <div class="grve-element grve-text vc_custom_1571424757510">
                                                            <p style="text-align: center;">Помогаем одобрить ипотечный кредит от 4,5% семьям с 2-3 детьми</p>
                                                        </div>
                                                        <div class="grve-empty-space grve-height-1x" style=""></div>
                                                        <div class="grve-element grve-text">
                                                            <p style="text-align: center;">
                                                                <a class="maxbutton-2 maxbutton maxbutton-ostavit-zayavku" href="#ulp-wwxxhOM6JtVDZgco"><span class="mb-text">ОСТАВИТЬ ЗАЯВКУ</span></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grve-background-wrapper"></div>
                                    </div>

                                    <div class="grve-section grve-row-section grve-fullwidth-background grve-padding-bottom-1x grve-bg-none" style="background-color: #ffffff;">
                                        <div class="grve-container">
                                            <div class="grve-row grve-bookmark grve-columns-gap-60">
                                                <div class="grve-column wpb_column grve-column-1-6 grve-tablet-sm-column-hide grve-mobile-column-hide"><div class="grve-column-wrapper"></div></div>
                                                <div class="grve-column wpb_column grve-column-2-3 grve-tablet-sm-column-1">
                                                    <div class="grve-column-wrapper"><div class="grve-empty-space grve-height-1x" style=""></div></div>
                                                </div>
                                                <div class="grve-column wpb_column grve-column-1-6 grve-tablet-sm-column-hide grve-mobile-column-hide"><div class="grve-column-wrapper"></div></div>
                                            </div>
                                        </div>
                                        <div class="grve-background-wrapper"></div>
                                    </div>
-->