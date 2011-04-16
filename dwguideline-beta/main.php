<?php
/**
* DokuWiki Guideline template.
*
* This template is base on the DokuWiki default template by Andreas Gohr but 
* adds WAI ARIA landmark roles and other minor tweaks. 
*
* @author E-delegationen <info@edelegationen.se>
*/

if (!defined('DOKU_INC')) die();
?><!doctype html>
<html lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
<meta charset="utf-8">
<title><?php tpl_pagetitle()?></title>
<?php tpl_metaheaders()?>
<link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" />
<?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>
</head>

<body>
<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>
<div class="dokuwiki">
    <?php html_msgarea()?>
    <div class="stylehead">
        <div class="header" role="banner">
            <div class="logo">
                <a href="/"><img src="<?php echo DOKU_TPL?><?php echo $conf['logo_img']; ?>" alt="<?php echo $conf['logo_alt']; ?>"></a>
            </div>
            <div class="logotext">
                <?php echo $conf['title']?> <br>
                <div class="logosubtext">E-delegationen</div>
            </div>
            <div id="searchform" role="search"><?php tpl_searchform()?></div> 
        </div>

        <?php /*old includehook*/ @include(dirname(__FILE__).'/header.html')?>

    </div>
    <?php tpl_flush()?>

    <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>

    <div class="page" role="main">
        <div class="container content">
            <div class="bar-right"><?php tpl_button('edit')?></div>
            <?php if($conf['breadcrumbs']){?>
            <div class="breadcrumbs">
                <?php tpl_breadcrumbs()?>
            </div>
            <?php }?>

            <?php if($conf['youarehere']){?>
            <div class="breadcrumbs">
                <?php tpl_youarehere() ?>
            </div>
            <?php }?>
            <!-- wikipage start -->
            <?php tpl_content()?>
            <!-- wikipage stop -->
        </div>
        <div class="sidebar">
        <?php if($INFO["namespace"]=="vl2011") { ?>
            <?php @include(dirname(__FILE__).'/commentsystem.html')?>
        <?php } else { ?>
            <?php @include(dirname(__FILE__).'/startpage_sidebar.html')?>
        <?php } ?>
        </div>
    </div>

    <?php tpl_flush()?>

    <div class="stylefoot">

        <div class="meta container" role="contentinfo">
            <div class="user"><?php tpl_userinfo()?></div>
            <div class="doc"><?php tpl_pageinfo()?></div>
        </div>

        <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>

        <div class="bar" id="bar__bottom">
            <div class="bar-left" id="bar__bottomleft">
                <?php tpl_button('edit')?>
                <?php tpl_button('history')?>
                <?php tpl_button('revert')?>
            </div>
            <div class="bar-right" id="bar__bottomright">
                <?php tpl_button('subscribe')?>
                <?php tpl_button('admin')?>
                <?php tpl_button('profile')?>
                <?php tpl_button('login')?>
                <?php tpl_button('index')?>
            </div>
        </div>
    </div>

    <?php tpl_license(false);?>

</div>
<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
<?php /*old includehook*/ @include(dirname(__FILE__).'/footer.html')?>
</body>
</html>
