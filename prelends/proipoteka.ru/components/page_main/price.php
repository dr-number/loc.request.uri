<div class="grve-section grve-row-section grve-fullwidth grve-bg-none grve-headings-light"
     id="q0" style="color:#ffffff;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-none">
            <div class="grve-column wpb_column grve-column-1-4">
                <div class="grve-column-wrapper"></div>
            </div>
            <div class="grve-column wpb_column grve-column-1-2 grve-headings-dark grve-align-center">
                <div class="grve-column-wrapper grve-flex grve-flex-position-middle">
                    <div class="grve-column-content">
                        <h1 class="grve-element grve-title grve-align-center grve-h1"
                            style="margin-bottom: 18px;"><span><br>
<p style="text-align: center;"><span style="color: #ffffff;">Цены</span><br>
</p></span></h1>
                    </div>
                </div>
            </div>
            <div class="grve-column wpb_column grve-column-1-4">
                <div class="grve-column-wrapper"></div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper">
        <div class="grve-bg-image grve-bg-center-center grve-bg-image-id-503"
             style="background-image: url(/wp-content/uploads/2019/09/p-l-4-1920x254.png);"></div>
    </div>
</div>
<div class="grve-section grve-row-section grve-fullwidth-background grve-bg-none" id="q10"
     style="background-color:#f7f7f7;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-30">
            <div class="grve-column wpb_column grve-column-1">
                <div class="grve-column-wrapper">
                    <h2 class="grve-element grve-title grve-align-center grve-h2 grve-increase-heading grve-heading-120"
                        style="margin-bottom: 15px;"><span><br>
<p style="text-align: center;"><span style="color: #000;">Мы работаем на результат и не берём предоплату!</span><br>
</p></span></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>


<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-1x grve-bg-none grve-custom-height grve-equal-column grve-tablet-sm-row-hide grve-mobile-row-hide"
     style="background-color:#f7f7f7;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-30">

            <?php
                $price = $data->price;
                foreach ($price as $item){
            ?>

            <div class="grve-column wpb_column grve-column-1-3 grve-tablet-sm-column-1-2">
                <div class="grve-column-wrapper vc_custom_1568064635410 grve-shadow-medium grve-with-shadow">
                    <div class="grve-empty-space grve-height-1x"></div>
                    <div class="grve-element grve-text">
                        <h2 style="text-align: center;"><strong><?php print($item->title); ?></strong></h2>
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

        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>


<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-1x grve-bg-none grve-custom-height grve-equal-column grve-desktop-row-hide grve-tablet-row-hide"
     style="background-color:#f7f7f7;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-30">

            <?php
                $length = count($price);
                $isOdd = $length % 2 != 0;

                $wrapper = "vc_custom_1568064635410";
                $col = "-2";

                for ($i = 0; $i < $length; ++$i ){
                    $isEndColFull = $isOdd && $i == $length-1;

                    if ($isEndColFull) {
                        $col = "";
                        $wrapper = "vc_custom_1568323404606";
                    }
            ?>

            <div class="grve-column wpb_column grve-column-1-3 grve-tablet-sm-column-1<?php print($col); ?>">
                <div class="grve-column-wrapper <?php print($wrapper); ?> grve-shadow-medium grve-with-shadow">
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                    <div class="grve-element grve-text">
                        <h2 style="text-align: center;"><strong><?php print($item->title); ?></strong></h2>
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

        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>
<div class="grve-section grve-row-section grve-fullwidth-background grve-bg-none grve-tablet-sm-row-hide grve-mobile-row-hide"
     style="background-color:#f7f7f7;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-30">
            <div class="grve-column wpb_column grve-column-1-3">
                <div class="grve-column-wrapper"><h2
                            class="grve-element grve-title grve-align-center grve-h2 grve-increase-heading grve-heading-120"
                            style="margin-bottom: 15px;"><span></span></h2></div>
            </div>
            <div class="grve-column wpb_column grve-column-1-3">
                <div class="grve-column-wrapper"></div>
            </div>
            <div class="grve-column wpb_column grve-column-1-3">
                <div class="grve-column-wrapper"><h2
                            class="grve-element grve-title grve-align-center grve-h2 grve-increase-heading grve-heading-120"
                            style="margin-bottom: 15px;"><span></span></h2></div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>