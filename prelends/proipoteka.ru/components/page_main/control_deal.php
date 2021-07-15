<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-2x grve-bg-fixed"
     id="soprovogdenie" style="padding-bottom: 100px;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-30">
            <div class="grve-column wpb_column grve-column-1-4">
                <div class="grve-column-wrapper"></div>
            </div>

            <div class="grve-column wpb_column grve-column-1-2"
                 style="color:rgb(255,255,255);color:rgba(255,255,255,0.8);">
                <div class="grve-column-wrapper">
                    <h1 class="grve-element grve-title grve-align-center grve-h1"
                        style="margin-bottom: 18px;"><span><br>
<p style="text-align: center;"><span style="color: #ffffff;">Сопровождение сделки</span><br>
</p></span></h1>
                    <div class="grve-element grve-text">
                        <p style="text-align: center;">Мы поможем согласовать сделку и
                            провести её в кратчайшие сроки</p>

                    </div>
                </div>
            </div>

            <div class="grve-column wpb_column grve-column-1-4">
                <div class="grve-column-wrapper"></div>
            </div>
            <div class="grve-column wpb_column grve-column-1 grve-tablet-sm-column-hide grve-mobile-column-hide">
                <div class="grve-column-wrapper">
                    <div class="grve-empty-space grve-height-2x" style=""></div>
                </div>
            </div>

            <?php
                $controlDeal = $data->controlDeal;
                foreach ($controlDeal as $item){
            ?>

            <div class="grve-column wpb_column grve-column-1-5 grve-tablet-sm-column-hide grve-mobile-column-hide grve-parallax-effect <?php print($item->classPosition); ?>"
                 data-parallax-effect="mouse-move-x-y" data-sensitive="low" data-limit="1x"
                 data-invert="false">
                <div class="grve-column-wrapper vc_custom_1568669457098 grve-drop-shadow">
                    <div class="grve-empty-space" style="height: 45px;"></div>
                    <div class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center grve-animated-item grve-zoom-in grve-duration-normal"
                         style="" data-delay="400">
                        <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                class="grve-text-primary-1 <?php print($item->classIco); ?>"></i></div>
                        <div class="grve-box-content">
                            <div class="grve-box-title-wrapper"><h3
                                    class="grve-box-title grve-h5"><?php print($item->title); ?></h3></div>
                        </div>
                    </div>
                    <div class="grve-empty-space" style="height: 45px;"></div>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
    <div class="grve-background-wrapper">
        <div class="grve-bg-image grve-bg-image-id-555"
             style="background-image: url(/wp-content/uploads/2019/09/42.jpg);"></div>
        <div class="grve-bg-overlay grve-bg-dark grve-opacity-60"></div>
    </div>
</div>


<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-2x grve-bg-none grve-desktop-row-hide grve-tablet-row-hide">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-30">
            <div class="grve-column wpb_column grve-column-1 grve-mobile-column-hide">
                <div class="grve-column-wrapper">
                    <div class="grve-empty-space grve-height-2x" style=""></div>
                </div>
            </div>

            <?php
                foreach ($controlDeal as $item){
            ?>
            <div class="grve-column wpb_column grve-column-1-5 grve-parallax-effect <?php print($item->classPosition); ?>"
                 data-parallax-effect="mouse-move-x-y" data-sensitive="low" data-limit="1x"
                 data-invert="false">
                <div class="grve-column-wrapper vc_custom_1568669802889 grve-drop-shadow">
                    <div class="grve-empty-space" style="height: 45px;"></div>
                    <div class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center grve-animated-item grve-zoom-in grve-duration-normal"
                         style="" data-delay="400">
                        <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                class="grve-text-primary-1 <?php print($item->classIco); ?>"></i></div>
                        <div class="grve-box-content">
                            <div class="grve-box-title-wrapper"><h4
                                    class="grve-box-title grve-h6"><?php print($item->title); ?></h4></div>
                        </div>
                    </div>
                    <div class="grve-empty-space" style="height: 45px;"></div>
                </div>
            </div>

                <?php } ?>

        </div>
    </div>
    <div class="grve-background-wrapper">
        <div class="grve-bg-image grve-bg-center-top grve-bg-image-id-555"
             style="background-image: url(/wp-content/uploads/2019/09/42-1920x1080.jpg);"></div>
        <div class="grve-bg-overlay grve-bg-dark grve-opacity-60"></div>
    </div>
</div>
