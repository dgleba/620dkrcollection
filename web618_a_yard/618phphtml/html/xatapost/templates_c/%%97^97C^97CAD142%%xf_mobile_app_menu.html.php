<?php /* Smarty version 2.6.18, created on 2022-10-03 02:00:28
         compiled from xataface/actions/xf_mobile_app_menu.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'xataface/actions/xf_mobile_app_menu.html', 5, false),array('function', 'block', 'xataface/actions/xf_mobile_app_menu.html', 17, false),array('function', 'actions_menu', 'xataface/actions/xf_mobile_app_menu.html', 20, false),array('block', 'define_slot', 'xataface/actions/xf_mobile_app_menu.html', 18, false),)), $this); ?>
<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/plone.css?v=<?php echo $this->_tpl_vars['ENV']['APPLICATION_VERSION']; ?>
"/>
        <link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/css/xataface/actions/xf_mobile_app_menu.css?v=<?php echo $this->_tpl_vars['ENV']['APPLICATION_VERSION']; ?>
"/>
        <base target="_parent"/>
    </head>
    <body>
        
        <div id="xf-mobile-app-menu" class="xf-mobile-app-menu">
          <h1>Menu</h1>
          <?php if (! $this->_tpl_vars['ENV']['prefs']['hide_user_status']): ?>
          <div id="user-status-mobile">
                  <?php if (! $this->_tpl_vars['ENV']['prefs']['hide_personal_tools']): ?>
                  <?php if ($this->_tpl_vars['ENV']['user']): ?>
                      <?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_personal_tools_mobile'), $this);?>

                      <?php $this->_tag_stack[] = array('define_slot', array('name' => 'personal_tools_mobile')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                          <nav role="navigation" class="personal-tools-menu-mobile">
                          <?php echo $this->_plugins['function']['actions_menu'][0][0]->actions_menu(array('category' => 'personal_tools'), $this);?>

                              </nav>
                          <!--<div id="personal-tools"><a href="<?php echo $this->_tpl_vars['ENV']['user']->getURL(); ?>
">My Profile</a></div>-->
                      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                      <?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_personal_tools'), $this);?>

                  <?php else: ?>
                  
                      <nav role="navigation" class="personal-tools-menu-mobile">
                          <?php echo $this->_plugins['function']['actions_menu'][0][0]->actions_menu(array('category' => 'personal_tools'), $this);?>

                              </nav>
                  <?php endif; ?>
                  <?php endif; ?>
                  
          </div>
          <?php endif; ?>
        </div>
        
    </body>
</html>