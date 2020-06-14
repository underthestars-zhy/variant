<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<div class="fat-footer">
	<div class="wrapper">
		<div class="layout layout--center">
			<div class="layout__item palm-mb">
				<div class="media">
					<img class="media__img avatar" src="https://img.vpsmm.com/avatar/avatar/robot.png" alt="" height="50" width="50">
					<div class="media__body">
						<h4>小夜</h4>
						<p>
							相关模板说明，请参考菜单栏，关于页面！
						</p>
					</div>
				</div>
			</div>
			<div class="layout__item yc">
				<div class="fat-footer__social">
					<ul class="list-bare list-inline">
						<li><a href="http://weibo.com/123108800" target="_blank" rel="nofollow"><i class="iconfont" aria-hidden="true"></i></a></li>
						<li><a href="http://qq.com/123108800" target="_blank" rel="nofollow"><img class="qq" src="<?php $this->options->themeUrl(); ?>images/qq.png"></a></li>
						<li><a href="https://www.vpsmm.com/" target="_blank" rel="nofollow"><i class="iconfont" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<footer class="footer" role="contentinfo">
<div class="wrapper wrapper--wide split split--responsive">
	<div class="split__title">
			&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. All rights reserved.
	</div>
		Typecho 因你而荣耀
</div>
</footer>

<form class="js-search search-form search-form--modal" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
	<div class="search-form__inner">
		<div>
			<i class="iconfont"></i>
			<input class="text-input" name="s" placeholder="关键词搜索" type="search">
		</div>
	</div>
</form>
<script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/module.js"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/script.js"></script>
<?php $this->footer(); ?>
</body>
</html>
