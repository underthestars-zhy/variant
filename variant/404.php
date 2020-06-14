<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="wrapper" style="color: rgba(2, 0, 0, 0.6);">
	<article id="post-404">
	<h1 class="mb-">404 Error</h1>
	<p>
			We haven't found the page you were looking for. Perhaps, you should try the search below, or just			
		<a href="<?php $this->options->siteUrl(); ?>">return to homepage</a>.
	</p>
	<form class="search-form mb+" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
		<div class="search-form__inner">
			<p class="micro mb-">
				Use the field below to search the site...
			</p>
			<div>
				<i class="iconfont"></i>
				<input class="text-input" name="s" placeholder="Enter keyword..." type="search">
			</div>
		</div>
	</form>
	</article>
</div>


<?php $this->need('footer.php'); ?>
