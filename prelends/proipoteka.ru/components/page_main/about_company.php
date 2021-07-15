<?php
    $description = $data->aboutCompany->description;
    $staffImg = $data->aboutCompany->staffImg;

    function printStuff(){
        global $data;
        $staffImg = $data->aboutCompany->staffImg;
        print($staffImg->size1536x1920.' 1280w, '.$staffImg->size240x300.' 240w, '.
            $staffImg->size768x960.' 768w, '.$staffImg->size819x1024.' 819w, '.$staffImg->size1536x1920.' 1536w');
    }
?>

<div class="grve-section grve-row-section grve-fullwidth grve-bg-none" id="price">
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
<p style="text-align: center;">О компании<br>
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
        <div class="grve-bg-image grve-bg-center-center grve-bg-image-id-469"
             style="background-image: url(/wp-content/uploads/2019/09/l-p-g-1920x254.png);"></div>
    </div>
</div>

<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-bg-none grve-custom-height grve-middle-content grve-tablet-sm-row-hide grve-mobile-row-hide grve-separator-fullheight"
     data-mobile-equal-columns="false">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-30">
            <div class="grve-column wpb_column grve-column-5-12">
                <div class="grve-column-wrapper">
                    <blockquote
                            class="grve-element grve-animated-item grve-fade-in-up grve-duration-normal grve-align-left"
                            style="" data-delay="800"><p><?php print($description); ?></p></blockquote>
                    <div class="grve-element grve-text grve-animated-item grve-fade-in-up grve-duration-normal"
                         data-delay="1200">
                        <h3 style="font-size: 19px;">Закажите консультацию прямо
                            сейчас!</h3>

                        <h3 style="font-size: 19px;"><a
                                    class="maxbutton-1 maxbutton maxbutton-zakazat-konsultaciyu ym_consultation"
                                    href="#ulp-wwxxhOM6JtVDZgco"><span class='mb-text'>ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</span></a>
                        </h3>

                    </div>
                </div>
            </div>
            <div class="grve-column wpb_column grve-column-7-12 grve-parallax-effect"
                 data-parallax-effect="mouse-move-x" data-sensitive="normal" data-limit="3x"
                 data-invert="false">
                <div class="grve-column-wrapper">
                    <div class="grve-element grve-image grve-align-center" style="">
                        <div class="grve-image-wrapper">
                            <img width="1280" height="1600"
                                 src="<?php print($staffImg->size1536x1920); ?>"
                                 class="attachment-full size-full" alt=""
                                 loading="lazy"
                                 srcset="<?php printStuff() ?>"
                                 sizes="(max-width: 1280px) 100vw, 1280px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>


<div class="grve-section grve-row-section grve-fullwidth-background grve-bg-none grve-desktop-row-hide grve-tablet-row-hide grve-separator-fullheight">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-30">
            <div class="grve-column wpb_column grve-column-5-12 grve-tablet-sm-column-1">
                <div class="grve-column-wrapper">
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                    <blockquote
                            class="grve-element grve-animated-item grve-fade-in-up grve-duration-normal grve-align-left"
                            style="" data-delay="800">
                        <p><?php print($description); ?></p></blockquote>
                    <div class="grve-element grve-text grve-animated-item grve-fade-in-up grve-duration-normal"
                         data-delay="1200">
                        <h3 style="font-size: 19px; text-align: center;">Закажите
                            консультацию прямо сейчас!</h3>
                        <h3 style="font-size: 19px; text-align: center;">

                            <!-- todo добавить функционал ко свем "ОСТАВИТЬ ЗАЯВКУ" -->
                            <a class="maxbutton-1 maxbutton maxbutton-zakazat-konsultaciyu ym_consultation"
                               href="#ulp-wwxxhOM6JtVDZgco"><span class='mb-text'>ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</span></a>
                        </h3>

                    </div>
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                </div>
            </div>
            <div class="grve-column wpb_column grve-column-7-12 grve-tablet-sm-column-1 grve-parallax-effect"
                 data-parallax-effect="mouse-move-x" data-sensitive="normal" data-limit="3x"
                 data-invert="false">
                <div class="grve-column-wrapper">
                    <div class="grve-element grve-image grve-align-center" style="">
                        <div class="grve-image-wrapper">
                            <img width="1280" height="1600"
                                 src="<?php print($staffImg->size1536x1920) ?>"
                                 class="attachment-full size-full" alt=""
                                 loading="lazy"
                                 srcset="<?php printStuff(); ?>"
                                 sizes="(max-width: 1280px) 100vw, 1280px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>


<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-bottom-1x grve-bg-none"
     style="background-color:#ffffff;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-60">
            <div class="grve-column wpb_column grve-column-1-6 grve-tablet-sm-column-hide grve-mobile-column-hide">
                <div class="grve-column-wrapper"></div>
            </div>
            <div class="grve-column wpb_column grve-column-2-3 grve-tablet-sm-column-1">
                <div class="grve-column-wrapper">
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                </div>
            </div>
            <div class="grve-column wpb_column grve-column-1-6 grve-tablet-sm-column-hide grve-mobile-column-hide">
                <div class="grve-column-wrapper"></div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>