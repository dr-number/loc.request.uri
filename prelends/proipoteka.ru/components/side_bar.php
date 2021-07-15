<aside id="grve-sidebar" class="grve-sidebar">
    <div class="grve-wrapper clearfix">
        <div id="search-2" class="grve-widget widget widget_search">
            <form class="grve-search" method="get" action="/">
                <button type="submit" class="grve-search-btn grve-custom-btn"><i class="grve-icon-search"></i></button>
                <input type="text" class="grve-search-textfield" value="" name="s" placeholder="Ищем ...">
            </form>
        </div>
        <div id="recent-posts-2" class="grve-widget widget widget_recent_entries">
            <div class="grve-widget-title">Свежие записи</div>
            <ul>
                <?php
                    $articles = $data->articles;
                    $i = 0;

                    foreach ($articles as $id=>$item){
                        if((int) $data->countArticlesSideBar == $i) {
                            break;
                        }
                        ++$i;
                ?>
                <li>
                    <a href="?id=<?php print($id); ?>" aria-current="page"><?php print($item->title); ?></a>
                </li>
                <?php } ?>
            </ul>
        </div>

        <!--
        <div id="archives-2" class="grve-widget widget widget_archive">
            <div class="grve-widget-title">Архивы</div>
            <ul>
                <li><a href="../index.php">Ноябрь 2019</a></li>
                <li><a href="../index.php">Октябрь 2019</a></li>
                <li><a href="../index.php">Сентябрь 2019</a></li>
                <li><a href="../index.php">Март 2019</a></li>
                <li><a href="../index.php">Февраль 2019</a></li>
                <li><a href="../index.php">Январь 2019</a></li>
            </ul>
        </div>
        -->

        <div id="categories-2" class="grve-widget widget widget_categories">
            <div class="grve-widget-title">Рубрики</div>
            <ul>
                <!-- <li class="cat-item cat-item-24"><a href="../category/voprosy/index.htm">Вопросы</a></li> -->
                <li class="cat-item cat-item-21"><a href="?allArticles=1">Статьи</a></li>
            </ul>
        </div>

        <!--
        <div id="meta-2" class="grve-widget widget widget_meta">
            <div class="grve-widget-title">Мета</div>
            <ul>
                <li><a rel="nofollow" href="../wp-login.php.html">Войти</a></li>
                <li><a href="../index.php">Лента записей</a></li>
                <li><a href="../index.php">Лента комментариев</a></li>

                <li><a href="../index-2.htm">WordPress.org</a></li>
            </ul>
        </div>
        -->
    </div>
</aside>