<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="wrapper">
    <ul class="posts-list mb+ js-posts">
<?php while($this->next()): ?>
        <li class="post">
        <div class="type">
            <div class="mask">
                <?php if (array_key_exists('note',unserialize($this->___fields()))): ?>
                <i class="iconfont"></i>
                <?php else: ?>
                <?php if (array_key_exists('music',unserialize($this->___fields()))): ?>
                <i class="iconfont"></i>
                <?php else: ?>
                <i class="iconfont"></i><?php endif; ?><?php endif; ?>
            </div>
        </div>
        <h2 class="no-background">
        <span>
        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
        </span>
        <div class="post-time">
            <?php $this->date(); ?>
        </div>
        </h2>
        <div class="post-category">
            <?php $this->category(' '); ?>
        </div>
        </li>
<?php endwhile; ?>
    </ul>
    <div class="pagination mb+ js-pagination">
        <div class="js-next pagination__load">
            <?php $this->pageLink('下一页','next'); ?>
        </div>
    </div>
</div>


	<?php $this->need('footer.php'); ?>
