<!doctype html>
<head>
    <title><?php print $head_title ?></title>
  	<?php print $head ?>
  	<?php print $styles ?>
  	<?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>
<body>

    <div id="header">  
      <?php if ($logo) { ?><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>
      <?php if ($site_name) { ?><h1 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
      <?php if ($site_slogan) { ?><div class='site-slogan'><?php print $site_slogan ?></div><?php } ?>    
      <?php if (isset($secondary_links)) { ?><?php print theme('links', $secondary_links, array('class' => 'links', 'id' => 'subnavlist')) ?><?php } ?>
      <?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?><?php } ?>
      <?php print $search_box ?>   
  		<?php print $header ?>
		</div>
		
		
		<?php if ($left) { ?>
    <div id="sidebar-left" class="sidebar">
      <?php print $left ?>
    </div><?php } ?>
      
     
    <div id="arena">
      <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
      <div >
        <?php //print $breadcrumb ?>
        <h2 class="title"><?php print $title ?></h2>       
       	<?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
        <?php print $help ?>
        <?php if ($show_messages) { print $messages; } ?>
        <?php print $content; ?>
        <?php print $feed_icons; ?>
      </div>
    </div>
    
    
    <?php if ($right) { ?>
    <div id="sidebar-right" class="sidebar">	
    	<?php print $right ?>    	
    </div>
    <?php } ?>  
    
    
    <div id="footer">
  		<?php print $footer_message ?>
  		<?php print $footer ?>
		</div>
    
</body>