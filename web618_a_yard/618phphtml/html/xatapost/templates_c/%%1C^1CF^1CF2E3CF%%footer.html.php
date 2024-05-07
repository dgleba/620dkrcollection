<?php /* Smarty version 2.6.18, created on 2022-10-03 00:50:17
         compiled from xataface/mobile/footer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'block', 'xataface/mobile/footer.html', 12, false),array('function', 'actions_menu', 'xataface/mobile/footer.html', 17, false),array('block', 'define_slot', 'xataface/mobile/footer.html', 13, false),array('modifier', 'escape', 'xataface/mobile/footer.html', 33, false),)), $this); ?>
<div class="mobile-footer">
    <?php if ($this->_tpl_vars['ENV']['prefs']['mobile_nav_style'] == 'hamburger'): ?>
            	<?php if ($this->_tpl_vars['ENV']['prefs']['show_table_tabs']): ?> 
       		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_table_tabs_mobile'), $this);?>

    		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'table_tabs_mobile')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    			<div class="tabs_wrapper_mobile" id="table_tabs_wrapper_mobile">

    					<nav role="navigation" class="table_tabs_mobile">
    						<?php echo $this->_plugins['function']['actions_menu'][0][0]->actions_menu(array('class' => 'contentViews','category' => 'table_tabs','selected_action' => $this->_tpl_vars['ENV']['mode']), $this);?>


    					</nav>


    				<div style="height:0px;padding:0;margin:0;clear:both"></div>
    			</div>
			
    		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_table_tabs_mobile'), $this);?>

        <?php endif; ?>
        
    <?php else: ?>
    	<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_table_tabs_mobile'), $this);?>

 		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'table_tabs_mobile')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
 			<div class="tabs_wrapper_mobile" id="table_tabs_wrapper_mobile">
                    <a class='mobile-app-menu-trigger' href="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['APPLICATION_OBJECT']->url('-action=xf_mobile_app_menu'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" data-xf-sheet-position="<?php echo $this->_tpl_vars['ENV']['prefs']['mobile_app_menu_sheet_position']; ?>
"><i class='material-icons'>menu</i></a>
 					<nav role="navigation" class="table_tabs_mobile">
                         <?php if (df_count_actions ( '_tables' ) > 0): ?>
 						    <?php echo $this->_plugins['function']['actions_menu'][0][0]->actions_menu(array('class' => 'contentViews','category' => '_tables','selected_action' => $this->_tpl_vars['ENV']['mode']), $this);?>

                         <?php else: ?>
                             <ul class='contentViews'>
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
                                
                                
                                                          <span><?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
                                
                                                  </a></li>
                                  <?php endif; ?>
                              <?php endforeach; endif; unset($_from); ?>
                          </ul>
                         <?php endif; ?>

 					</nav>


 				<div style="height:0px;padding:0;margin:0;clear:both"></div>
 			</div>
		
 		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_table_tabs_mobile'), $this);?>

    <?php endif; ?>
</div>