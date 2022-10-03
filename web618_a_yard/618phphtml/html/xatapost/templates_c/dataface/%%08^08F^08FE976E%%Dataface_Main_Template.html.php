<?php /* Smarty version 2.6.18, created on 2022-10-03 00:50:17
         compiled from Dataface_Main_Template.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'define_slot', 'Dataface_Main_Template.html', 19, false),array('block', 'translate', 'Dataface_Main_Template.html', 189, false),array('modifier', 'escape', 'Dataface_Main_Template.html', 21, false),array('modifier', 'addslashes', 'Dataface_Main_Template.html', 63, false),array('modifier', 'count', 'Dataface_Main_Template.html', 164, false),array('modifier', 'nl2br', 'Dataface_Main_Template.html', 305, false),array('function', 'block', 'Dataface_Main_Template.html', 56, false),array('function', 'language_selector', 'Dataface_Main_Template.html', 132, false),array('function', 'actions_menu', 'Dataface_Main_Template.html', 140, false),array('function', 'actions', 'Dataface_Main_Template.html', 163, false),array('function', 'bread_crumbs', 'Dataface_Main_Template.html', 210, false),array('function', 'script', 'Dataface_Main_Template.html', 399, false),)), $this); ?>
<?php if (! $this->_tpl_vars['ENV']['APPLICATION_OBJECT']->main_content_only): ?><?php $this->_tag_stack[] = array('define_slot', array('name' => 'doctype_tag')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd"><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_tag_stack[] = array('define_slot', array('name' => 'html_tag')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['language'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['language'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<head>
	<?php if (! $this->_tpl_vars['ENV']['prefs']['no_history']): ?>
		<?php 
			$app =& Dataface_Application::getInstance();
			$_SESSION['--redirect'] = $app->url('');
		 ?>
	<?php endif; ?>
	
	<?php $this->_tag_stack[] = array('define_slot', array('name' => 'html_head')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['APPLICATION']['oe'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" /> 
        <title><?php $this->_tag_stack[] = array('define_slot', array('name' => 'html_title')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['APPLICATION_OBJECT']->getPageTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></title>
        <meta name="xataface-back-link" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['BACK_LINK'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
        <?php $this->_tag_stack[] = array('define_slot', array('name' => 'apple_mobile_web_app_meta_tags')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['APPLICATION_OBJECT']->getSiteTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('define_slot', array('name' => 'favicon')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        
		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'dataface_stylesheets')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/plone.css?v=<?php echo $this->_tpl_vars['ENV']['APPLICATION_VERSION']; ?>
"/>
		<!--<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/css/xataface/sidemenu.css?v=<?php echo $this->_tpl_vars['ENV']['APPLICATION_VERSION']; ?>
"/>-->
        <link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/css/xataface/fab.css?v=<?php echo $this->_tpl_vars['ENV']['APPLICATION_VERSION']; ?>
"/>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('define_slot', array('name' => 'dataface_rss_links')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<link rel="alternate" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['APPLICATION_OBJECT']->url('-action=feed&--format=RSS2.0'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
          title="RSS 2.0" type="application/rss+xml" />
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'custom_stylesheets')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><!-- Stylesheets go here --><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'custom_stylesheets2'), $this);?>

		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'dataface_javascripts')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<!-- Common Plone ECMAScripts -->
	
		
		
		<script type="text/javascript" language="javascript"><!--
		DATAFACE_URL = '<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
';
		DATAFACE_SITE_URL = '<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_SITE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
';
		DATAFACE_SITE_HREF = '<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_SITE_HREF'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
';
		
		//--></script>
        <script src="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/js/jquery.packed.js?v=<?php echo $this->_tpl_vars['ENV']['APPLICATION_VERSION']; ?>
"></script>
		<script type="text/javascript"
				src="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/plone_javascripts.js?v=<?php echo $this->_tpl_vars['ENV']['APPLICATION_VERSION']; ?>
">
		</script>
		<?php if ($this->_tpl_vars['ENV']['APPLICATION']['usage_mode'] == 'edit'): ?>
		<script type="text/javascript"
				src="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/js/editable.js?v=<?php echo $this->_tpl_vars['ENV']['APPLICATION_VERSION']; ?>
">
		</script>
		<?php endif; ?>
		
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php $_from = $this->_tpl_vars['ENV']['APPLICATION_OBJECT']->headContent; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['headContent']):
?>
			<?php echo $this->_tpl_vars['headContent']; ?>

		<?php endforeach; endif; unset($_from); ?>
		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'custom_javascripts')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<!-- custom javascripts can go in slot "custom_javascripts" -->
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		
		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'head_slot')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<!-- Place any other items in the head of the document by filling the "head_slot" slot -->
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head_slot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'head'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>


	</head>
	<body onload="bodyOnload()" class="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['APPLICATION_OBJECT']->getBodyCSSClasses())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 mobile-nav-style-<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['prefs']['mobile_nav_style'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'body_atts'), $this);?>
<?php if ($this->_tpl_vars['ENV']['record']): ?> xf-record-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['record']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>>

        
		

	<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_body'), $this);?>

	<?php $this->_tag_stack[] = array('define_slot', array('name' => 'html_body')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><!-- Replace the entire HTML Body with the "html_body" slot -->
        
    
    <div id="mobile-top-section" class="small">
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_header'), $this);?>

		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'global_header')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "global_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_header'), $this);?>

        <div class='site-title'>
        <div class='h1-wrapper'>
        <?php $this->_tag_stack[] = array('define_slot', array('name' => 'h1')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <h1><?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['APPLICATION_OBJECT']->getPageTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h1>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        </div>
        
        
    </div>
    
	<div id="top-section">
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_header'), $this);?>

		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'global_header')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "global_header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_header'), $this);?>

			
		<?php if (! $this->_tpl_vars['ENV']['prefs']['hide_user_status']): ?>
		<div id="user-status">
				<?php if (! $this->_tpl_vars['ENV']['prefs']['hide_language_selector']): ?>
					<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_language_selector'), $this);?>

					<?php $this->_tag_stack[] = array('define_slot', array('name' => 'language_selector')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div id="language_selector"><?php echo $this->_plugins['function']['language_selector'][0][0]->language_selector(array('autosubmit' => 'true','type' => 'select','use_flags' => false), $this);?>
</div><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_language_selector'), $this);?>

				<?php endif; ?>
				<?php if (! $this->_tpl_vars['ENV']['prefs']['hide_personal_tools']): ?>
				<?php if ($this->_tpl_vars['ENV']['user']): ?>
					<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_personal_tools'), $this);?>

					<?php $this->_tag_stack[] = array('define_slot', array('name' => 'personal_tools')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<nav role="navigation" class="personal-tools-menu">
						<?php echo $this->_plugins['function']['actions_menu'][0][0]->actions_menu(array('category' => 'status_bar_right'), $this);?>

							</nav>
						<!--<div id="personal-tools"><a href="<?php echo $this->_tpl_vars['ENV']['user']->getURL(); ?>
">My Profile</a></div>-->
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_personal_tools'), $this);?>

				<?php else: ?>
				
					<nav role="navigation" class="personal-tools-menu">
						<?php echo $this->_plugins['function']['actions_menu'][0][0]->actions_menu(array('category' => 'status_bar_right'), $this);?>

					</nav>
				<?php endif; ?>
				<?php endif; ?>
				
		</div>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['ENV']['prefs']['show_search']): ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_search'), $this);?>

		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'search_form')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<div class="search_form" style="float: right; white-space: nowrap" id="top-search-form">
			<form method="GET" action="<?php echo ((is_array($_tmp=$_SERVER['HOST_URI'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_SITE_HREF'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
			<label><i class='material-icons'>search</i></label>
			<input type="hidden" name="-table" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['APPLICATION_OBJECT']->_currentTable)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
			<input type="text" name="-search" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['search'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
			<?php echo $this->_plugins['function']['actions'][0][0]->actions(array('category' => 'find_actions','var' => 'find_actions'), $this);?>

			<?php if (count($this->_tpl_vars['find_actions']) > 1): ?>
			<select name="-action">
			<?php $_from = $this->_tpl_vars['find_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['find_action']):
?>
				<?php $this->assign('option_label', $this->_tpl_vars['find_action']['label']); ?>
				<?php if (! $this->_tpl_vars['option_label']): ?>
					<?php $this->assign('option_label', $this->_tpl_vars['ENV']['table_object']->getLabel()); ?>
				<?php endif; ?>
				<?php $this->assign('option_value', $this->_tpl_vars['find_action']['action']); ?>
				<?php if (! $this->_tpl_vars['option_value']): ?>
					<?php $this->assign('option_value', $this->_tpl_vars['find_action']['name']); ?>
				<?php endif; ?>
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['option_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['option_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			</select>
			<?php else: ?>
			<?php $_from = $this->_tpl_vars['find_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['find_action']):
?>
				
				<?php $this->assign('option_value', $this->_tpl_vars['find_action']['action']); ?>
				<?php if (! $this->_tpl_vars['option_value']): ?>
					<?php $this->assign('option_value', $this->_tpl_vars['find_action']['name']); ?>
				<?php endif; ?>
				<input type="hidden" name="-action" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['option_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
			<?php endforeach; endif; unset($_from); ?>
				
			<?php endif; ?>
			<input type="submit" name="-submit" value="<?php $this->_tag_stack[] = array('translate', array('id' => "scripts.GLOBAL.LABEL_SEARCH")); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" id="search_submit_button" />
			<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_search_form_submit'), $this);?>

			</form>
		
		</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_search'), $this);?>


		<?php endif; ?>
		<?php if ($this->_tpl_vars['ENV']['prefs']['horizontal_tables_menu'] && $this->_tpl_vars['ENV']['prefs']['show_tables_menu']): ?>
			<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_nav_menu'), $this);?>

			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Dataface_NavMenu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_nav_menu'), $this);?>


		<?php endif; ?>
        
		
        
		<div id="status-bar">
			<?php if ($this->_tpl_vars['ENV']['prefs']['show_bread_crumbs']): ?>
				<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_bread_crumbs'), $this);?>

				<?php $this->_tag_stack[] = array('define_slot', array('name' => 'bread_crumbs')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="bread-crumbs"><?php echo $this->_plugins['function']['bread_crumbs'][0][0]->bread_crumbs(array(), $this);?>
</div><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_bread_crumbs'), $this);?>

			<?php endif; ?>
			<div class="responsive-content">
                <div class='site-title'>
                    <div class='h1-wrapper'>
                <?php $this->_tag_stack[] = array('define_slot', array('name' => 'h1')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <h1><?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['APPLICATION_OBJECT']->getPageTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h1>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div>
                </div>
				
				<div class='page-actions'>
					<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_menus'), $this);?>

					
					<?php $this->_tag_stack[] = array('define_slot', array('name' => 'menus')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Dataface_TableView_menus.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_menus'), $this);?>

                </div>
				
				
			</div>
			<div style="clear:both; height: 1px; padding:0; margin:0"></div>
		</div>
		
		
        
		
	
	</div>
    
	<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_main_table'), $this);?>

	<?php $this->_tag_stack[] = array('define_slot', array('name' => 'main_table')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<table width="100%"  id="main_table">
	<tr>
	<td valign="top" id="left_column">
	<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_left_column'), $this);?>

	<?php $this->_tag_stack[] = array('define_slot', array('name' => 'left_column')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		
		<?php if (! $this->_tpl_vars['ENV']['prefs']['horizontal_tables_menu'] && $this->_tpl_vars['ENV']['prefs']['show_tables_menu']): ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_nav_menu'), $this);?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Dataface_NavMenu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_nav_menu'), $this);?>

		<?php endif; ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_application_menu'), $this);?>

		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'application_menu')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Dataface_Application_Menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_application_menu'), $this);?>

		
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_left_column'), $this);?>

	
	</td>
	<td valign="top" id="main_column">
			<script>
					<?php echo '
					var leftCol = document.getElementById(\'left_column\');
					var leftColumnContent = leftCol ? leftCol.textContent : \'\';
					//console.log(leftColumnContent);
					//console.log(\'len=\'+leftColumnContent.trim().length);
					if (leftCol && leftColumnContent.trim().length == 0) {
						leftCol.style.width="0";
						leftCol.style.padding="0";
						leftCol.style.margin="0";
						leftCol.style.display="none";
						document.querySelector(\'body\').classList.add(\'one-col\');
					} else {
						document.querySelector(\'body\').classList.add(\'two-col\');
					}

					'; ?>

				</script>
	
	<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_main_column'), $this);?>

	<?php $this->_tag_stack[] = array('define_slot', array('name' => 'main_column')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	
		<?php if ($this->_tpl_vars['back'] && ! $this->_tpl_vars['ENV']['APPLICATION']['hide_back']): ?>
		<div class="responsive-content">
			<div class="browser_nav_bar">
				<a href="<?php echo $this->_tpl_vars['back']['link']; ?>
" title="<?php $this->_tag_stack[] = array('translate', array('id' => "scripts.GLOBAL.LABEL_BACK")); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Back<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">&lt;&lt; <?php $this->_tag_stack[] = array('translate', array('id' => "scripts.GLOBAL.LABEL_GO_BACK")); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Go Back<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
			</div>
		</div>
		<?php endif; ?>
		

		
		
		<?php if ($this->_tpl_vars['ENV']['APPLICATION_OBJECT']->numMessages() > 0): ?>

		<div class="portalMessageWrapper">
			<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_message'), $this);?>


			<div class="responsive-content">
				<div class="portalMessage">
					<ul>
					<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'message'), $this);?>

					<?php $_from = $this->_tpl_vars['ENV']['APPLICATION_OBJECT']->getMessages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['msg']):
?>
						<li><?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</li>
					<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
			</div>

			<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_message'), $this);?>

		</div>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['ENV']['APPLICATION_OBJECT']->numErrors() > 0): ?>
			<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_errors'), $this);?>

			<div class="responsive-content">
				<div class="portalMessage">
					<h5><?php $this->_tag_stack[] = array('translate', array('id' => "scripts.GLOBAL.HEADING_ERRORS")); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Errors<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h5>
					<ul>
						<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'error'), $this);?>

						<?php $_from = $this->_tpl_vars['ENV']['APPLICATION_OBJECT']->getErrors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
							<li><?php echo ((is_array($_tmp=$this->_tpl_vars['error']->getMessage())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
			</div>
			<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_errors'), $this);?>

		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['ENV']['prefs']['show_table_tabs']): ?> 
	   		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_table_tabs'), $this);?>

			<?php $this->_tag_stack[] = array('define_slot', array('name' => 'table_tabs')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<div class="tabs_wrapper" id="table_tabs_wrapper">
					<div class="responsive-content">
						<nav role="navigation" class="table_tabs">
							<?php echo $this->_plugins['function']['actions_menu'][0][0]->actions_menu(array('class' => 'contentViews','category' => 'table_tabs','selected_action' => $this->_tpl_vars['ENV']['mode']), $this);?>


						</nav>
						
					</div>
					<div style="height:0px;padding:0;margin:0;clear:both"></div>
				</div>
				
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['ENV']['prefs']['show_table_tabs']): ?> 
		<div class="documentContent" id="region-content" >
		<?php endif; ?>
			<div class="responsive-content">
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_main_section'), $this);?>

		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'main_section')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['history'] && ! $this->_tpl_vars['ENV']['APPLICATION']['hide_history']): ?>
			<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_recently_viewed'), $this);?>

			<div id="recentlyViewed">
				<b><?php $this->_tag_stack[] = array('translate', array('id' => "scripts.GLOBAL.LABEL_RECENT_RECORDS")); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recent Records<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</b><select name="recentRecords" onchange="javascript:window.location=this.options[this.selectedIndex].value;" >
					<?php unset($this->_sections['i']);
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['history']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
					<option value="<?php echo $this->_tpl_vars['history'][$this->_sections['i']['index']]['link']; ?>
" <?php if ($this->_tpl_vars['title'] == $this->_tpl_vars['history'][$this->_sections['i']['index']]['recordTitle']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['history'][$this->_sections['i']['index']]['recordTitle']; ?>
</option>
					<?php endfor; endif; ?>
					</select>
			</div>
			<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_recently_viewed'), $this);?>

			<?php endif; ?>
			<div style="clear:both">
				<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_record_content'), $this);?>

				<?php $this->_tag_stack[] = array('define_slot', array('name' => 'record_content')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_tpl_vars['body']; ?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_record_content'), $this);?>

		
			</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_main_section'), $this);?>

		</div>

		<?php if ($this->_tpl_vars['ENV']['prefs']['show_table_tabs']): ?>
		</div>
		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</td>
	</tr>
	</table>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    
    <?php $this->_tag_stack[] = array('define_slot', array('name' => 'fab')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                 
             <?php echo $this->_plugins['function']['script'][0][0]->script(array('src' => "xataface/fab.js"), $this);?>

             <div class="zoom mobile" style="display:none">
                 <a class="zoom-fab zoom-btn-large" id="zoomBtn"><i class="material-icons">menu</i></a>
                 
               </div>
         
        
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    
	<?php $this->_tag_stack[] = array('define_slot', array('name' => 'fineprint')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_fineprint'), $this);?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Dataface_Fineprint.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_fineprint'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_mobile_footer'), $this);?>

	    <?php $this->_tag_stack[] = array('define_slot', array('name' => 'mobile_footer')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "xataface/mobile/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_mobile_footer'), $this);?>

	<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_global_footer'), $this);?>

	<?php $this->_tag_stack[] = array('define_slot', array('name' => 'global_footer')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "global_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_global_footer'), $this);?>

    
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'javascript_tool_includes'), $this);?>

	</body>
</html>
<?php else: ?>
					<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_main_section'), $this);?>

				<?php $this->_tag_stack[] = array('define_slot', array('name' => 'main_section')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['history'] && ! $this->_tpl_vars['ENV']['APPLICATION']['hide_history']): ?>
						<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_recently_viewed'), $this);?>

			<div id="recentlyViewed">
				<b><?php $this->_tag_stack[] = array('translate', array('id' => "scripts.GLOBAL.LABEL_RECENT_RECORDS")); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recent Records:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></b><select name="recentRecords" onchange="javascript:window.location=this.options[this.selectedIndex].value;" >
					<?php unset($this->_sections['i']);
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['history']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
					<option value="<?php echo $this->_tpl_vars['history'][$this->_sections['i']['index']]['link']; ?>
" <?php if ($this->_tpl_vars['title'] == $this->_tpl_vars['history'][$this->_sections['i']['index']]['recordTitle']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['history'][$this->_sections['i']['index']]['recordTitle']; ?>
</option>
					<?php endfor; endif; ?>
					</select>
			</div>
						<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_recently_viewed'), $this);?>

			<?php endif; ?>
			<div style="clear:both">
								<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_record_content'), $this);?>

								<?php $this->_tag_stack[] = array('define_slot', array('name' => 'record_content')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_tpl_vars['body']; ?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
								<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_record_content'), $this);?>

		
			</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_main_section'), $this);?>

<?php endif; ?> 