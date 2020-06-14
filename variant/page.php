<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="wrapper">
    <article class="post type-post">
    <h1 class="post-title">
        <?php $this->title() ?>
    </h1>
    <div class="post-body js-gallery mb">
            <?php $this->content(); ?>
        </div>
    <div class="meta split split--responsive cf">
        <div class="split__title">
            <time datetime="<?php $this->date(); ?>">
            <?php $this->date(); ?></time>
        </div>
        <div class="slide">
            <a class="btn-slide" title="Comments"><i class="iconfont"></i>展开评论</a>
        </div>
    </div>
    </article>
</div>

<svg id="bigTriangleColor" width="100%" height="40" viewBox="0 0 100 102" preserveAspectRatio="none"><path d="M0 0 L50 100 L100 0 Z"></path></svg>

<div style="display: none;" id="panel">
	<div class="comment-area comments clearfix"><div class="comments clearfix"><div class="wrapper">
		<?php $this->need('comments.php'); ?>
    </div></div></div>  
</div>


<?php $this->need('footer.php'); ?>
