<?php /* Smarty version 2.6.18, created on 2022-10-03 00:50:31
         compiled from Dataface_Form_Template.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'block', 'Dataface_Form_Template.html', 97, false),array('modifier', 'escape', 'Dataface_Form_Template.html', 98, false),array('modifier', 'count', 'Dataface_Form_Template.html', 155, false),array('block', 'abs', 'Dataface_Form_Template.html', 157, false),array('block', 'collapsible_sidebar', 'Dataface_Form_Template.html', 196, false),array('block', 'define_slot', 'Dataface_Form_Template.html', 208, false),array('block', 'translate', 'Dataface_Form_Template.html', 208, false),)), $this); ?>

<!-- Display the fields -->
 
<?php echo '
<script language="javascript" type="text/javascript"><!--
	function Dataface_QuickForm(){
		
	}
	Dataface_QuickForm.prototype.setFocus = function(element_name){
		document.'; ?>
<?php echo $this->_tpl_vars['form_data']['name']; ?>
<?php echo '.elements[element_name].focus();
		document.'; ?>
<?php echo $this->_tpl_vars['form_data']['name']; ?>
<?php echo '.elements[element_name].select();
	}
	var quickForm = new Dataface_QuickForm();
//--></script>
'; ?>

<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_form','form' => $this->_tpl_vars['form_data']), $this);?>

<form<?php echo $this->_tpl_vars['form_data']['attributes']; ?>
 class="xf-form-group" data-xf-record-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['form_record_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">

<?php echo '
<script>
	if ( typeof(jQuery) == \'undefined\' ){
		document.writeln(\'<\'+\'script src="\'+DATAFACE_URL+\'/js/jquery.packed.js"><\'+\'/script>\');		
	}
</script>
<script>
jQuery(document).ready(function($){
	$(\'input.passwordTwice\').each(function(){
		$(this).after(\'<div class="retypePassword" style="display:none;"><label>Retype Password</label>: <input type="password" class="passwordCheck"/></div>\');
		
		var retypePasswordSection = $(\'.retypePassword\', $(this).parent());
		var retypePasswordField = $(\'input.passwordCheck\', retypePasswordSection);
		if ( $(this).val() ){
			retypePasswordField.show();
			retypePasswordField.val($(this).val());
		}
		var form = $(retypePasswordSection).parents(\'form\');
		var self = this;
		
		$(this).change(function(){
			$(retypePasswordSection).show();
			$(retypePasswordSection).css(\'display\',\'inline\');
			$(retypePasswordField).focus();
		});
		
		$(form).submit(function(){
			if ( $(self).val() != retypePasswordField.val() ){
				alert(\'Your passwords don\\\'t match.  Please enter your passwords again.\');
				$(self).focus();
				return false;
			} else {
				return true;
			}
		});
		
	});
});
</script>
'; ?>

<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_form_open_tag','form' => $this->_tpl_vars['form_data']), $this);?>

<?php $_from = $this->_tpl_vars['form_data']['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['error']):
?>
	<div class="portalMessage"><?php echo $this->_tpl_vars['error']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
<?php echo $this->_tpl_vars['form_data']['hidden']; ?>

<?php echo $this->_tpl_vars['form_data']['javascript']; ?>

 


<?php if ($this->_tpl_vars['form_data']['tabs'] && count($this->_tpl_vars['form_data']['tabs']) > 1): ?>
	
	<script type="text/javascript" src="<?php $this->_tag_stack[] = array('abs', array()); $_block_repeat=true;$this->_plugins['block']['abs'][0][0]->abs($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/js/jquery-ui-1.7.2.custom.min.js<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['abs'][0][0]->abs($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"></script>
	<script type="text/javascript">
	<?php echo '
		jQuery(document).ready(function(){
			jQuery(\'head\').append(\'<link rel="stylesheet" type="text/css" href="'; ?>
<?php $this->_tag_stack[] = array('abs', array()); $_block_repeat=true;$this->_plugins['block']['abs'][0][0]->abs($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
/css/smoothness/jquery-ui-1.7.2.custom.css<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['abs'][0][0]->abs($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" />\');
			jQuery(\'#Dataface-Form-Tab-Controller\').tabs();
			
		});
	'; ?>

	</script>
	<div id="Dataface-Form-Tab-Controller">
		<ul>
			<?php $_from = $this->_tpl_vars['form_data']['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tabname'] => $this->_tpl_vars['tab_data']):
?>
				<li><a href="#tab-<?php echo $this->_tpl_vars['tabname']; ?>
"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['tab_data']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	
	
	<?php $_from = $this->_tpl_vars['form_data']['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tabname'] => $this->_tpl_vars['tab_data']):
?>
	<div class="Dataface-Form-Tab Dataface-Form-Tab-<?php echo ((is_array($_tmp=$this->_tpl_vars['tabname'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" id="tab-<?php echo ((is_array($_tmp=$this->_tpl_vars['tabname'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Dataface_Form_Section_Template.html", 'smarty_include_vars' => array('elements' => $this->_tpl_vars['tab_data']['elements'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_from = $this->_tpl_vars['tab_data']['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
			<?php if ($this->_tpl_vars['section']['elements']): ?>
		
								<?php if ($this->_tpl_vars['section']['field']['collapsed']): ?><?php $this->assign('display', 'collapsed'); ?><?php else: ?><?php $this->assign('display', 'expanded'); ?><?php endif; ?>
				<?php if ($this->_tpl_vars['section']['name'] == '__submit__' || count($this->_tpl_vars['tab_data']['sections']) < 2 || count($this->_tpl_vars['form_data']['sections']) <= 2): ?>
					<?php $this->assign('hide_heading', '1'); ?>
									<?php else: ?>
					<?php $this->assign('hide_heading', '0'); ?>
				<?php endif; ?>
				
				<?php $this->_tag_stack[] = array('collapsible_sidebar', array('heading' => $this->_tpl_vars['section']['header'],'display' => $this->_tpl_vars['display'],'hide_heading' => $this->_tpl_vars['hide_heading'])); $_block_repeat=true;smarty_block_collapsible_sidebar($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php if ($this->_tpl_vars['section']['field']['template']): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['section']['field']['template'], 'smarty_include_vars' => array('elements' => $this->_tpl_vars['section']['elements'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php else: ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Dataface_Form_Section_Template.html", 'smarty_include_vars' => array('elements' => $this->_tpl_vars['section']['elements'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_collapsible_sidebar($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</div>
	<?php endforeach; endif; unset($_from); ?>
	</div>
	<center><input type="submit" value="<?php if ($this->_tpl_vars['form_data']['submit_label']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form_data']['submit_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php $this->_tag_stack[] = array('define_slot', array('name' => 'save_button_label')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('translate', array('id' => 'save_button_label')); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Save<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>"></center>
<?php else: ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Dataface_Form_Section_Template.html", 'smarty_include_vars' => array('elements' => $this->_tpl_vars['form_data']['elements'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('hasSubmitSection', false); ?>
<?php $this->assign('showHeadingThreshold', 1); ?>
<?php $_from = $this->_tpl_vars['form_data']['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
    <?php if ($this->_tpl_vars['section']['name'] == '__submit__'): ?>
        <?php $this->assign('hasSubmitSection', true); ?>
        <?php $this->assign('showHeadingThreshold', 2); ?>
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['form_data']['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
	<?php if ($this->_tpl_vars['section']['elements']): ?>
	    <div class="xf-form-group-wrapper <?php if ($this->_tpl_vars['section']['field']['noheader']): ?>noheader<?php endif; ?> <?php if ($this->_tpl_vars['section']['field']['hidden']): ?>hidden<?php endif; ?> <?php if ($this->_tpl_vars['section']['name'] == '__submit__'): ?>button-section<?php endif; ?>" data-form-group="<?php echo ((is_array($_tmp=$this->_tpl_vars['section']['field']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
            <?php if ($this->_tpl_vars['section']['name'] == '__submit__'): ?>
            <?php $this->_tag_stack[] = array('define_slot', array('name' => 'fieldgroup_menu')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <ul class="xf-fieldgroup-menu">
                <?php $_from = $this->_tpl_vars['form_data']['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
                <?php if ($this->_tpl_vars['section']['field']['materialIcon'] && $this->_tpl_vars['section']['field']['hidden']): ?><li class="xf-fieldgroup-menuitem" data-xf-fieldgroup-name="<?php echo ((is_array($_tmp=$this->_tpl_vars['section']['field']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><a href="#" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['section']['header'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><i class="material-icons"><?php echo ((is_array($_tmp=$this->_tpl_vars['section']['field']['materialIcon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i></a></li><?php endif; ?>
    
                <?php endforeach; endif; unset($_from); ?>
            </ul>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
				<?php if ($this->_tpl_vars['section']['field']['collapsed']): ?><?php $this->assign('display', 'collapsed'); ?><?php else: ?><?php $this->assign('display', 'expanded'); ?><?php endif; ?>
		<?php if ($this->_tpl_vars['section']['name'] == '__submit__' || count($this->_tpl_vars['form_data']['sections']) <= $this->_tpl_vars['showHeadingThreshold']): ?>
			<?php $this->assign('hide_heading', '1'); ?>
					<?php else: ?>
			
			<?php $this->assign('hide_heading', '0'); ?>
		<?php endif; ?>
		
		<?php $this->_tag_stack[] = array('collapsible_sidebar', array('heading' => $this->_tpl_vars['section']['header'],'display' => $this->_tpl_vars['display'],'hide_heading' => $this->_tpl_vars['hide_heading'])); $_block_repeat=true;smarty_block_collapsible_sidebar($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['section']['field']['template']): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['section']['field']['template'], 'smarty_include_vars' => array('elements' => $this->_tpl_vars['section']['elements'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php else: ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Dataface_Form_Section_Template.html", 'smarty_include_vars' => array('elements' => $this->_tpl_vars['section']['elements'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_collapsible_sidebar($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</div>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php endif; ?>
<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_form_close_tag','form' => $this->_tpl_vars['form_data']), $this);?>

</form>

<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_form','form' => $this->_tpl_vars['form_data']), $this);?>


 