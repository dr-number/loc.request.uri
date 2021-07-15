<div class="grve-section grve-row-section grve-fullwidth grve-bg-none grve-headings-dark grve-custom-height grve-equal-column grve-show-custom-height" id="q1" style="background-color:#353535;color:#000000;">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-none min-height228">

            <?php
                $aboutHelpCredit = $data->aboutHelpCredit;
                foreach ($aboutHelpCredit as $item){
            ?>
            <div class="grve-column wpb_column grve-column-1-3">
                <div class="grve-column-wrapper vc_custom_1570657914040" style="height: 186px;">
                    <div class="grve-empty-space grve-height-2x" style=""></div>
                    <div class="grve-element grve-single-icon grve-align-center grve-medium" style="margin-bottom: 18px;">
                        <div class="grve-wrapper-icon grve-no-shape" >
                            <i class="<?php print($item->classIco); ?> grve-text-black"></i></div>
                    </div>
                    <h3 class="grve-element grve-title grve-align-center grve-h5 grve-increase-heading grve-heading-140" style="">
                        <span><?php print($item->info); ?></span></h3>
                    <div class="grve-empty-space grve-height-1x" style=""></div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>