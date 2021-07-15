<?php
    if(!isset($_GET['id']))
        return;

    $id = $_GET['id'];
    $article = $data->articles->$id;
?>

<article id="post-1024" class="grve-single-post post-1024 post type-post status-publish format-standard has-post-thumbnail hentry category-stati" itemscope="" itemtype="http://schema.org/BlogPosting">
    <div id="grve-single-media">
        <div class="grve-container">
            <div class="grve-media clearfix">
                    <img
                        width="320"
                        height="183"
                        src="<?php print ($article->src); ?>"
                        class="attachment-medium_large size-medium_large wp-post-image"
                    />
            </div>
        </div>
    </div>

    <div id="grve-single-content">
        <h2 class="grve-hidden" itemprop="name headline">Как снизить платежи по действующей ипотеке?</h2>
        <span class="grve-hidden">
                                                <span class="grve-structured-data entry-title">Как снизить платежи по действующей ипотеке?</span>
                                                <span class="grve-structured-data vcard author" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                                    <span itemprop="name" class="fn">admin</span>
                                                </span>
                                                <span class="grve-structured-data" itemprop="publisher" itemscope="" itemtype="http://schema.org/Organization">
                                                    <span itemprop="name">admin</span>
                                                    <span itemprop="logo" itemscope="" itemtype="http://schema.org/ImageObject">
                                                        <span itemprop="url">https://secure.gravatar.com/avatar/2f9e421882e28b656ea498305d070a4d?s=96&#038;d=mm&#038;r=g</span>
                                                    </span>
                                                </span>
                                                <time class="grve-structured-data date published" itemprop="datePublished" datetime="2019-11-01T05:56:29+00:00">1 ноября, 2019</time>
                                                <time class="grve-structured-data date updated" itemprop="dateModified" datetime="2020-08-17T09:16:19+00:00">17 августа, 2020</time>
                                                <span
                                                    class="grve-structured-data"
                                                    itemprop="mainEntityOfPage"
                                                    itemscope=""
                                                    itemtype="http://schema.org/WebPage"
                                                    itemid="https://proipoteka.ru/kak-snizit-platezhi-po-dejstvujushhej-ipoteke/"
                                                ></span>
                                            </span>
        <div itemprop="articleBody">
            <div class="grve-container">
                <p><?php print ($article->text); ?></p>
            </div>
        </div>
    </div>
</article>
