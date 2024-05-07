<?php /* Smarty version 2.6.18, created on 2022-10-03 00:50:17
         compiled from Dataface_List_View.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'use_macro', 'Dataface_List_View.html', 20, false),array('block', 'fill_slot', 'Dataface_List_View.html', 21, false),array('block', 'translate', 'Dataface_List_View.html', 28, false),array('block', 'define_slot', 'Dataface_List_View.html', 31, false),array('modifier', 'escape', 'Dataface_List_View.html', 22, false),array('function', 'block', 'Dataface_List_View.html', 30, false),array('function', 'actions_menu', 'Dataface_List_View.html', 34, false),array('function', 'result_controller', 'Dataface_List_View.html', 42, false),array('function', 'result_list', 'Dataface_List_View.html', 50, false),)), $this); ?>
<?php $this->_tag_stack[] = array('use_macro', array('file' => "Dataface_Main_Template.html")); $_block_repeat=true;$this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('fill_slot', array('name' => 'h1')); $_block_repeat=true;$this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
         <h1><?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['APPLICATION_OBJECT']->getPageTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h1>
         <?php if ($this->_tpl_vars['ENV']['table_object']->getAttribute('description')): ?>
             <div class='record-heading-description'><?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['table_object']->getAttribute('description'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</div>
         <?php endif; ?>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_tag_stack[] = array('fill_slot', array('name' => 'main_section')); $_block_repeat=true;$this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if ($this->_tpl_vars['error']): ?><div id="error"><?php $this->_tag_stack[] = array('translate', array('id' => $this->_tpl_vars['error_i18n'])); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['error']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div><?php endif; ?>
		
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_result_list'), $this);?>

		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'result_list')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if (! $this->_tpl_vars['ENV']['prefs']['use_old_resultlist_controller']): ?>
			<div class="result-list-actions">
				<?php echo $this->_plugins['function']['actions_menu'][0][0]->actions_menu(array('id' => "result-list-actions",'id_prefix' => "result-list-actions-",'class' => "icon-only",'category' => 'result_list_actions'), $this);?>

			</div>
		<?php endif; ?>
		<div id="list-window">
		<?php if (! $this->_tpl_vars['ENV']['prefs']['use_old_resultlist_controller']): ?>
            <?php if ($this->_tpl_vars['ENV']['resultSet']->found() > 0): ?>
			<?php if (! $this->_tpl_vars['ENV']['prefs']['hide_resultlist_controller']): ?>
			<?php if ($this->_tpl_vars['ENV']['resultSet']->found() > $this->_tpl_vars['ENV']['resultSet']->limit() || ! $this->_tpl_vars['ENV']['APPLICATION_OBJECT']->prefs['show_resultlist_controller_only_when_needed']): ?>
				<?php echo $this->_plugins['function']['result_controller'][0][0]->result_controller(array(), $this);?>

			<?php endif; ?>
			<?php endif; ?>
            <?php endif; ?>
		<?php endif; ?>
		<div style="clear:both">
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_result_list_content'), $this);?>

		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'result_list_content')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['result_list'][0][0]->result_list(array(), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_result_list_content'), $this);?>

		</div>
		<?php if (! $this->_tpl_vars['ENV']['prefs']['use_old_resultlist_controller']): ?>
            <?php if ($this->_tpl_vars['ENV']['resultSet']->found() > 0): ?>
			<?php if (! $this->_tpl_vars['ENV']['prefs']['hide_resultlist_controller']): ?>
			<?php if (( $this->_tpl_vars['ENV']['resultSet']->found() > $this->_tpl_vars['ENV']['resultSet']->limit() ) || ! $this->_tpl_vars['ENV']['APPLICATION_OBJECT']->prefs['show_resultlist_controller_only_when_needed']): ?>
				<?php echo $this->_plugins['function']['result_controller'][0][0]->result_controller(array(), $this);?>

			<?php endif; ?>
			<?php endif; ?>
            <?php endif; ?>
		<?php endif; ?>
		</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_result_list'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>