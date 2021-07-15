<div class="grve-section grve-row-section grve-fullwidth grve-bg-none grve-headings-light"
     id="s" style="color:#000000;">
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
<p style="text-align: center;"><span style="color: #ffffff;">Статьи</span><br>
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

<div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-2x grve-bg-none grve-headings-dark grve-custom-height grve-middle-content"
     style="color:rgb(0,0,0);color:rgba(0,0,0,0.9);">
    <div class="grve-container">
        <div class="grve-row grve-bookmark grve-columns-gap-30">
            <div class="grve-column wpb_column grve-column-1">
                <div class="grve-column-wrapper">
                    <div class="grve-element grve-blog grve-blog-columns grve-blog-grid grve-isotope grve-with-gap grve-with-shadow"
                         style="" data-columns="4" data-columns-large-screen="4"
                         data-columns-tablet-landscape="2" data-columns-tablet-portrait="2"
                         data-columns-mobile="1" data-layout="fitRows" data-spinner="no"
                         data-gutter-size="40">
                        <div class="grve-isotope-container">

                            <?php
                                $articles = $data->articles;
                                foreach ($articles as $id=>$item){
                            ?>

                            <article
                                class="grve-blog-item grve-isotope-item post-1024 post type-post status-publish format-standard has-post-thumbnail hentry category-stati"
                                itemscope="" itemtype="http://schema.org/BlogPosting">
                                <div class="grve-blog-item-inner grve-isotope-item-inner">
                                    <div class="grve-media">
                                        <a class="grve-item-url"
                                           href="?id=<?php print($id); ?>"></a>
                                        <img width="320" height="183"
                                             src="<?php print($item->src); ?>"
                                             class="attachment-movedo-grve-small-rect-horizontal size-movedo-grve-small-rect-horizontal wp-post-image"
                                             alt="" loading="lazy">
                                        <div class="grve-bg-black grve-hover-overlay grve-opacity-10"></div>
                                    </div>
                                    <div class="grve-post-content-wrapper">
                                        <div class="grve-post-content">
                                            <div class="grve-post-header">
                                                <span class="grve-hidden">
			        <span class="grve-structured-data entry-title"><?php print($item->title); ?></span>

			</span>

                <ul class="grve-post-meta">
                    <li class="grve-post-author"><span><?php print($item->author); ?></span></li>
                    <li class="grve-post-date">
                        <time class="" datetime="<?php print($item->datetime); ?>"><?php print($item->datetime); ?></time>
                    </li>
                    <li class="grve-post-comments">
                        Комментариев: <?php print($item->countComment); ?>
                    </li>
                </ul>
                <a href="../../page.php?id=<?php print($item->id); ?>"
                   rel="bookmark"><h2
                        class="grve-post-title grve-post-title-hover grve-h3"
                        itemprop="name headline"><?php print($item->title); ?></h2></a>
            </div>
            <div itemprop="articleBody"><p><?php print($item->subTitle); ?></p>
            </div>
        </div>
    </div>

</div>
</article>
         <?php } ?>
                        </div>
                        <div class="grve-pagination grve-link-text grve-heading-color">
                            <ul class='page-numbers'>
                                <li><span aria-current="page"
                                          class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="page/2/index.htm">2</a>
                                </li>
                                <li><a class="next page-numbers" href="page/2/index.htm"><i
                                            class="grve-icon-nav-right-small"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grve-background-wrapper"></div>
</div>
