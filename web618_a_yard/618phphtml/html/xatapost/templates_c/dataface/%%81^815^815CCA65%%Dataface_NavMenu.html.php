<?php /* Smarty version 2.6.18, created on 2022-10-03 00:50:17
         compiled from Dataface_NavMenu.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'actions_menu', 'Dataface_NavMenu.html', 22, false),array('function', 'block', 'Dataface_NavMenu.html', 28, false),array('block', 'define_slot', 'Dataface_NavMenu.html', 29, false),array('modifier', 'escape', 'Dataface_NavMenu.html', 34, false),)), $this); ?>
 <?php if (df_count_actions ( '_tables' ) > 0): ?>
    <nav class="tables" role="navigation">
        <?php echo $this->_plugins['function']['actions_menu'][0][0]->actions_menu(array('category' => '_tables'), $this);?>

    </nav>
 <?php else: ?>
    <?php if ($this->_tpl_vars['ENV']['prefs']['horizontal_tables_menu']): ?>
    <nav class="tables" role="navigation">
    <ul id="table_selection_tabs">
        <?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'tables_menu_head'), $this);?>

        <?php $this->_tag_stack[] = array('define_slot', array('name' => 'tables_menu_options')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

        <?php $_from = $this->_tpl_vars['ENV']['APPLICATION']['_tables']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['table'] => $this->_tpl_vars['label']):
?>
            <?php $this->assign('nav', $this->_tpl_vars['ENV']['APPLICATION_OBJECT']->getNavItem($this->_tpl_vars['table'],$this->_tpl_vars['label'])); ?>
            <?php if ($this->_tpl_vars['nav']): ?>
        <li <?php if ($this->_tpl_vars['nav']['selected']): ?>class="selected"<?php endif; ?>><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['href'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
                            accesskey="accesskeys-navigation"
                            class="table-selection-tab <?php if ($this->_tpl_vars['nav']['selected']): ?>selected<?php endif; ?>"
                            title="<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
                            id="TableLink_<?php echo ((is_array($_tmp=$this->_tpl_vars['table'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
                                
                                
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                                
                            </a></li>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'tables_menu_tail'), $this);?>

    </ul>
    </nav>
    <?php else: ?>
    <div class="portlet" id="portlet-navigation-tree">
        <div>
            <h5>Navigation</h5>
            <div class="portletBody">
            <?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'tables_menu_head'), $this);?>

            <?php $this->_tag_stack[] = array('define_slot', array('name' => 'tables_menu_options')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <?php $_from = $this->_tpl_vars['ENV']['APPLICATION']['_tables']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['table'] => $this->_tpl_vars['label']):
?>
                <?php $this->assign('nav', $this->_tpl_vars['ENV']['APPLICATION_OBJECT']->getNavItem($this->_tpl_vars['table'],$this->_tpl_vars['label'])); ?>
                <?php if ($this->_tpl_vars['nav']): ?>
                
                <div class="portletContent">
                <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['href'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
                            accesskey="accesskeys-navigation"
                            class="navItem <?php if ($this->_tpl_vars['nav']['selected']): ?>currentNavItem<?php endif; ?>"
                            title="<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
                            id="TableLink_<?php echo ((is_array($_tmp=$this->_tpl_vars['table'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
                                <img
        src="<?php echo $this->_tpl_vars['ENV']['DATAFACE_URL']; ?>
/images/folder_icon.gif" alt="" class="navIconRoot" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
                                <span class="navItemText">
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                                </span>
                            </a>
            </div>
            <?php endif; ?>
            
        <?php endforeach; endif; unset($_from); ?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'tables_menu_tail'), $this);?>

        </div>
    </div>
    </div>
    <?php endif; ?>
<?php endif; ?>