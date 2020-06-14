<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/lib.js"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/plugins.js"></script>


    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">


    <?php $this->header('wlw=&xmlrpc=&rss2=&atom=&rss1=&template=&pingback=&generator'); ?>
</head>
<body>

<header>
<a id="logo" href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>">
<img src="<?php $this->options->themeUrl(); ?>images/logo.png" alt="<?php $this->options->title() ?>" /></a>
<a id="nav-toggle" href="#"><span></span></a>
<nav>
<div class="menu-top-container">
    <ul id="menu-top" class="menu">
        <div class="menu"><ul>



    <!--循环所有分类-->
    <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
    <?php while ($category->next()): ?>

    <li>
    <a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>">
        <?php $category->name(); ?>
    </a>
    </li>
    <?php endwhile; ?>
    <!--结束显示分类-->

    <!--循环显示页面-->
    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
    <?php while($pages->next()): ?>

    <li>
    <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
        <?php $pages->title(); ?>
    </a>
    </li>
    <?php endwhile; ?>
    <!--结束显示页面-->

</ul></div>
    </ul>
</div>
</nav>
<i class=" js-toggle-search iconfont"></i>
</header><div class="m-header ">
    <section id="hero1" class="hero">
    <div class="inner">
    </div>
    </section>
    <figure class="top-image" style="background-image: url(<?php if ($this->is('single')) : ?><?php if (array_key_exists('img',unserialize($this->___fields()))): ?><?php $this->fields->img(); ?><?php else: ?><?php $this->options->themeUrl(); ?>images/top.jpg<?php endif; ?><?php else: ?><?php $this->options->themeUrl(); ?>images/top.jpg<?php endif; ?>"></figure>
    <canvas height="550" width="1585" id="wave-canvas"></canvas>
    <canvas id="wave-canvas"></canvas>
</div>




<div id="body">
    <div class="container">
        <div class="row">

    
    
