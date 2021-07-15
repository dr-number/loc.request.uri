<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-3x grve-padding-bottom-3x grve-bg-none grve-tablet-sm-row-hide grve-mobile-row-hide"
     id="top">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-60">

            <?php
                $helpCredit = $data->getHelpCredit;
                foreach ($helpCredit as $item){
            ?>
            <div class="grve-column wpb_column grve-column-1-3 grve-tablet-sm-column-1">
                <!-- todo цвет -->
                <div class="grve-column-wrapper grve-flex grve-flex-position-bottom">
                    <div class="grve-column-content">
                        <div class="grve-element grve-text" id="title-block-1">
                            <h3 style="text-align: center;"><a href="#q3"><?php print($item->title); ?></a></h3>

                        </div>
                        <div class="grve-element grve-image grve-align-center">
                            <div class="grve-image-wrapper">
                                <img width="800" height="800"
                                     src="<?php print($PATH_PRELANDING.$item->src); ?>"
                                     class="attachment-full size-full" alt="">
                            </div>
                        </div>
                        <div class="grve-empty-space grve-height-1x" style=""></div>
                    </div>
                </div>
            </div>

            <?php } ?>


            <div class="grve-column wpb_column grve-column-1 grve-clipping-animation grve-clipping-up"
                 data-delay="200">
                <div class="grve-column-wrapper vc_custom_1567788159730">
                    <div class="grve-element grve-text">
                        <h3 style="text-align: center;">Ответь всего на 3 вопроса и узнай
                            свои шансы!</h3>
                        <h3 style="text-align: center;"><a
                                    class="maxbutton-7 maxbutton maxbutton-oprosnik ym_consultation thequiz"
                                    href="javascript:void(0);"><span class='mb-text'>Пройти опрос</span></a>
                        </h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper">
        <div class="grve-bg-image grve-bg-center-center grve-bg-image-id-457"
             style="background-image: url(/wp-content/uploads/2019/09/11-1920x1080.png);"></div>
    </div>
</div>
<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-2x grve-padding-bottom-2x grve-bg-fixed grve-desktop-row-hide grve-tablet-row-hide"
     id="top">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-60">
            <div class="grve-column wpb_column grve-column-1 grve-tablet-sm-column-1 grve-align-center">
                <div class="grve-column-wrapper vc_custom_1567122587773 grve-flex grve-flex-position-bottom">
                    <div class="grve-column-content">

                        <?php
                            foreach ($helpCredit as $item){
                                $src = $item->src;
                        ?>
                        <div class="grve-element grve-text">
                            <h3 style="text-align: center;"><?php print($item->title); ?></h3>

                        </div>
                        <div class="grve-empty-space grve-height-1x" style=""></div>
                        <div class="grve-element grve-image grve-align-center" style="">
                            <div class="grve-image-wrapper">
                                <img width="800" height="800"
                                     src="<?php print($PATH_PRELANDING.$src); ?>"
                                     class="attachment-full size-full" alt=""
                                     loading="lazy"
                                     srcset="<?php print($PATH_PRELANDING.$src); ?> 1x, <?php print($PATH_PRELANDING.$src); ?> 2x">
                            </div>
                        </div>
                        <div class="grve-empty-space grve-height-1x" style=""></div>

                        <?php } ?>


                        <div class="grve-element grve-text">
                            <h3 style="text-align: center;">Ответь всего на 3 вопроса и
                                узнай свои шансы!</h3>
                            <h3 style="text-align: center;"><a
                                        class="maxbutton-7 maxbutton maxbutton-oprosnik ym_consultation thequiz"
                                        href="javascript:void(0);"><span class='mb-text'>Пройти опрос</span></a>
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper">
        <div class="grve-bg-image grve-bg-image-id-457"
             style="background-image: url(/wp-content/uploads/2019/09/11-1920x1080.png);"></div>
    </div>
</div>