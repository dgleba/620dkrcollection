<?php /* Smarty version 2.6.18, created on 2022-10-03 00:50:17
         compiled from Dataface_Logo.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'Dataface_Logo.html', 6, false),array('modifier', 'default', 'Dataface_Logo.html', 9, false),array('function', 'html_attributes', 'Dataface_Logo.html', 6, false),)), $this); ?>

<?php $this->assign('xataface_logo_url', ($this->_tpl_vars['ENV']['DATAFACE_URL'])."/images/logo-square.svg"); ?>
<picture>
    <?php if ($this->_tpl_vars['ENV']['APPLICATION']['alt_logos']): ?>
        <?php $_from = $this->_tpl_vars['ENV']['APPLICATION']['alt_logos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sourcesrc'] => $this->_tpl_vars['atts']):
?>
        <source srcset="<?php echo ((is_array($_tmp=$this->_tpl_vars['sourcesrc'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php echo $this->_plugins['function']['html_attributes'][0][0]->html_attributes(array('atts' => $this->_tpl_vars['atts']), $this);?>
>
        <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
    <img src="<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['ENV']['APPLICATION']['site_logo'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['xataface_logo_url']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['xataface_logo_url'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['APPLICATION_OBJECT']->getSiteTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
</picture>