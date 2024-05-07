<?php /* Smarty version 2.6.18, created on 2022-10-03 00:50:17
         compiled from xataface/actions/list/no_results_found.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'block', 'xataface/actions/list/no_results_found.html', 3, false),array('function', 'actions_menu', 'xataface/actions/list/no_results_found.html', 9, false),array('block', 'define_slot', 'xataface/actions/list/no_results_found.html', 4, false),array('block', 'translate', 'xataface/actions/list/no_results_found.html', 6, false),)), $this); ?>
<?php $this->assign('nonEmpty', $this->_tpl_vars['ENV']['resultSet']->cardinality()); ?>
<div class='no-results-found <?php if (! $this->_tpl_vars['nonEmpty']): ?>table-empty<?php endif; ?>'>
<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_no_results_found'), $this);?>

<?php $this->_tag_stack[] = array('define_slot', array('name' => 'no_results_found')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<p class='no-matches-icon'><i class='material-icons '>warning</i></p>
<p style="clear:both" class='no-matches-text'><?php $this->_tag_stack[] = array('translate', array('id' => 'scripts.GLOBAL.MESSAGE_NO_MATCH')); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No records matched your request<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<div class='no-matches-menu'>
<?php echo $this->_plugins['function']['actions_menu'][0][0]->actions_menu(array('category' => 'no_matches_menu'), $this);?>

</div>
<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_no_results_found'), $this);?>

</div>