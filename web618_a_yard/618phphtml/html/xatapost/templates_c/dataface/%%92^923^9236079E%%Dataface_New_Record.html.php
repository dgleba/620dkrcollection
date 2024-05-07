<?php /* Smarty version 2.6.18, created on 2022-10-03 00:50:31
         compiled from Dataface_New_Record.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'use_macro', 'Dataface_New_Record.html', 20, false),array('block', 'fill_slot', 'Dataface_New_Record.html', 22, false),array('block', 'define_slot', 'Dataface_New_Record.html', 23, false),array('modifier', 'escape', 'Dataface_New_Record.html', 29, false),array('function', 'cancel_back_button', 'Dataface_New_Record.html', 45, false),array('function', 'block', 'Dataface_New_Record.html', 47, false),)), $this); ?>
<?php $this->_tag_stack[] = array('use_macro', array('file' => "Dataface_Main_Template.html")); $_block_repeat=true;$this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php if ($this->_tpl_vars['ENV']['action'] == 'new'): ?>
        <?php $this->_tag_stack[] = array('fill_slot', array('name' => 'h1')); $_block_repeat=true;$this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php $this->_tag_stack[] = array('define_slot', array('name' => 'new_record_form_header')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        	<div class="new-record-header">
        		<h1 class="new-record-header-label">
        			<?php if ($this->_tpl_vars['new_record_header_label_html']): ?>
        				<?php echo $this->_tpl_vars['new_record_header_label_html']; ?>

        			<?php else: ?>
        				<?php echo ((is_array($_tmp=$this->_tpl_vars['new_record_header_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

        			<?php endif; ?>
        		</h1>
        		<div class="new-record-header-description formHelp">
        			<?php if ($this->_tpl_vars['new_record_header_description_html']): ?>
        				<?php echo $this->_tpl_vars['new_record_header_description_html']; ?>

        			<?php else: ?>
        				<?php echo ((is_array($_tmp=$this->_tpl_vars['new_record_header_description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

        			<?php endif; ?>
        		</div>
        	</div>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php endif; ?>
	<?php $this->_tag_stack[] = array('fill_slot', array('name' => 'main_section')); $_block_repeat=true;$this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php $this->_tag_stack[] = array('define_slot', array('name' => 'new_record_back_button')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php echo $this->_plugins['function']['cancel_back_button'][0][0]->cancel_back_button(array(), $this);?>

        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_new_record_form'), $this);?>

		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'new_record_form')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Dataface_New_Record_inc.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_new_record_form'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>