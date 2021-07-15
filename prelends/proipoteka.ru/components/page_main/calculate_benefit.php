<?php
    $defRefinancing = $data->calcDefault->refinancing;
    $defGetting = $data->calcDefault->getting;
?>

<div class="grve-section grve-row-section grve-fullwidth grve-bg-none grve-headings-light calc"
     id="q_calc" style="color:#ffffff;margin-bottom: 60px;">
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
<p style="text-align: center; color: #ffffff;">Рассчитайте вашу выгоду<br>
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

<div class="grve-section grve-row-section grve-fullwidth grve-bg-none" id="calc">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-60 calc">
            <div class="grve-column wpb_column grve-column-1-2">
                <div class="grve-column-wrapper">
                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                        <div class="wpb_wrapper">
                            <div class="calculator__item calculator__refinance">
                                <div class="calc_bold calculator__header">
                                    <h3 class="">Рефинансирование ипотеки</h3>
                                </div>
                                <div class="calculator__content ">
                                    <div class="calculator__row">
                                        <div class="calculator__cell">Остаток основного
                                            долга по кредиту
                                        </div>
                                        <div class="calculator__cell">
                                            <input type="text" value="<?php print($defRefinancing->balanceOwed); ?>" name="r_price" id="">
                                        </div>
                                    </div>
                                    <div class="calculator__row">
                                        <div class="calculator__cell">Оставшийся срок
                                            платежей (лет)
                                        </div>
                                        <div class="calculator__cell">
                                            <input type="text" value="<?php print($defRefinancing->remainingYears); ?>" name="r_price" id="">
                                        </div>
                                    </div>
                                    <div class="calculator__row">
                                        <div class="calculator__cell">Процентная ставка
                                        </div>
                                        <div class="calculator__cell">
                                            <input type="text" value="<?php print($defRefinancing->rate); ?>" name="r_price" id="">
                                        </div>
                                    </div>
                                    <div class="calculator__row">
                                        <div class="calculator__cell">Размер платежа по
                                            кредиту
                                        </div>
                                        <div class="calculator__cell">
                                            <input class="calculator__credit" type="text" id="" disabled="">
                                        </div>
                                    </div>
                                    <div class="calculator__row">
                                        <div class="calculator__cell">Размер платежа после
                                            рефинансирования
                                        </div>
                                        <div class="calculator__cell">
                                            <input class="calculator__pcredit" type="text" id="" disabled="">
                                        </div>
                                    </div>
                                    <div class="calculator__row benefit-month calc_bold">
                                        <div class="calculator__cell">Выгода в месяц</div>
                                        <div class="calculator__cell">
                                            <input class="calculator__benefit-month" type="text" id="" disabled="">
                                        </div>
                                    </div>
                                    <div class="calculator__row calc_bold">
                                        <div class="calculator__cell" style="font-size: 1.25rem;">Выгода за все время
                                        </div>
                                        <div class="calculator__cell">
                                            <input class="calculator__benefit" type="text" id="" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grve-column wpb_column grve-column-1-2 grve-headings-dark grve-align-center">
                <div class="grve-column-wrapper grve-flex grve-flex-position-middle">
                    <div class="grve-column-content">
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                            <div class="wpb_wrapper">
                                <div class="calculator__item calculator__nedvig">
                                    <div class="calculator__header calc_bold">
                                        <h3 style="text-align: left;" class="calc_bold">Получение ипотеки</h3>
                                    </div>
                                    <div class="calculator__content">
                                        <div class="calculator__row">
                                            <div class="calculator__cell">Сумма кредита</div>
                                            <div class="calculator__cell">
                                                <input type="text" value="<?php print($defGetting->balanceOwed); ?>" name="n_price" id="">
                                            </div>
                                        </div>
                                        <div class="calculator__row">
                                            <div class="calculator__cell">
                                                Срок кредита (лет)
                                            </div>
                                            <div class="calculator__cell">
                                                <input type="text" value="<?php print($defGetting->remainingYears); ?>" name="n_price" id="">
                                            </div>
                                        </div>
                                        <div class="calculator__row">
                                            <div class="calculator__cell">
                                                Процентная ставка
                                            </div>
                                            <div class="calculator__cell">
                                                <input type="text" value="<?php print($defGetting->rate); ?>" name="n_price" id="">
                                            </div>
                                        </div>
                                        <div class="calculator__row">
                                            <div class="calculator__cell">Размер платежа по кредиту</div>
                                            <div class="calculator__cell">
                                                <input class="calculator__credit" type="text" id="" disabled="">
                                            </div>
                                        </div>
                                        <div class="calculator__row">
                                            <div class="calculator__cell">
                                                Размер платежа при обращении через нас
                                            </div>
                                            <div class="calculator__cell">
                                                <input class="calculator__pcredit" type="text" id="" disabled="">
                                            </div>
                                        </div>
                                        <div class="calculator__row benefit-month calc_bold">
                                            <div class="calculator__cell">Выгода в месяц</div>
                                            <div class="calculator__cell">
                                                <input class="calculator__benefit-month" type="text" id="" disabled="">
                                            </div>
                                        </div>
                                        <div class="calculator__row calc_bold">
                                            <div class="calculator__cell" style="font-size: 1.25rem">
                                                Выгода за все время
                                            </div>
                                            <div class="calculator__cell">
                                                <input class="calculator__benefit" type="text" id="" disabled="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grve-column wpb_column grve-column-1">
                <div class="grve-column-wrapper vc_custom_1572447599032">
                    <div class="grve-element grve-text">
                        <p style="text-align: center;">
                            <a class="maxbutton-1 maxbutton maxbutton-zakazat-konsultaciyu ym_consultation"
                               href="#ulp-wwxxhOM6JtVDZgco"><span class='mb-text'>ОФОРМИТЬ ЗАЯВКУ</span></a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>
