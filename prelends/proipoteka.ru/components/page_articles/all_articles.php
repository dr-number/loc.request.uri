<?php
    if(!isset($_GET['allArticles']))
        return;
?>


<div class="grve-section" style="margin-bottom: 0px;">
    <div class="grve-container">
        <!-- ROW -->
        <div class="grve-row">
            <!-- COLUMN 1 -->
            <div class="wpb_column grve-column grve-column-1">
                <div class="grve-column-wrapper">
                    <!-- Blog FitRows -->
                    <div class="grve-blog grve-blog-large grve-non-isotope">
                        <div class="grve-standard-container">
                            <!-- Article -->

                            <?php
                                $articles = $data->articles;
                                foreach ($articles as $id=>$item){
                            ?>

                            <article
                                id="post-<?php print($id); ?>"
                                class="grve-blog-item grve-big-post grve-non-isotope-item post-1024 post type-post status-publish format-standard has-post-thumbnail hentry category-stati"
                                itemscope=""
                                itemtype="http://schema.org/BlogPosting"
                            >
                                <div class="grve-blog-item-inner grve-isotope-item-inner">
                                    <div class="grve-media clearfix">
                                        <a href="?id=<?php print($id); ?>">
                                                <img
                                                    width="320"
                                                    height="183"
                                                    src="<?php print($item->src); ?>"
                                                    class="attachment-movedo-grve-large-rect-horizontal size-movedo-grve-large-rect-horizontal wp-post-image"
                                                    alt=""
                                                    loading="lazy"
                                                />
                                        </a>
                                    </div>
                                    <div class="grve-post-content-wrapper">
                                        <div class="grve-post-content">
                                            <div class="grve-post-header">
                                                <ul class="grve-post-meta">
                                                    <li class="grve-post-author"><span><?php print($item->author); ?></span></li>
                                                    <li class="grve-post-date"><time class="" datetime="<?php print($item->datetime); ?>"><?php print($item->datetime); ?></time></li>
                                                    <li class="grve-post-comments"><span>Комментариев <?php print($item->countComment); ?></span></li>
                                                </ul>
                                                <a href="?id=<?php print($id); ?>" rel="bookmark">
                                                    <h2 class="grve-post-title grve-post-title-hover grve-h2" itemprop="name headline"><?php print($item->title); ?></h2>
                                                </a>
                                            </div>
                                            <span class="grve-hidden">
                                                <span class="grve-structured-data entry-title"><?php print($item->title); ?></span>
                                                <span class="grve-structured-data vcard author" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                                    <span itemprop="name" class="fn"><?php print($item->author); ?></span>
                                                </span>
                                                <time class="grve-structured-data date published" itemprop="datePublished" datetime="<?php print($item->datetime); ?>"><?php print($item->datetime); ?></time>
                                                <time class="grve-structured-data date updated" itemprop="dateModified" datetime="<?php print($item->datetime); ?>"><?php print($item->datetime); ?></time>

                                            </span>
                                            <div itemprop="articleBody">
                                                <p><?php print($item->text); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- End Article -->
                            <?php } ?>


                        </div>
                        <div class="grve-pagination grve-link-text grve-heading-color">
                            <ul class="page-numbers">
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="page/2/index.htm">2</a></li>
                                <li>
                                    <a class="next page-numbers" href="page/2/index.htm"><i class="grve-icon-nav-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Element Blog -->
                </div>
            </div>
            <!-- END COLUMN 1 -->
        </div>
        <!-- END ROW -->
    </div>
</div>
