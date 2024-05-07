<?php /* Smarty version 2.6.18, created on 2022-10-03 02:00:24
         compiled from xataface/actions/mobile_sort_dialog.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'xataface/actions/mobile_sort_dialog.html', 5, false),)), $this); ?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/plone.css?v=<?php echo $this->_tpl_vars['ENV']['APPLICATION_VERSION']; ?>
"/>
    <link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/css/xataface/actions/mobile_sort_dialog.css?v=<?php echo $this->_tpl_vars['ENV']['APPLICATION_VERSION']; ?>
"/>
</head>
<body class='mobile-sort-dialog'>
    <h1>Sort</h1>
    
    
    <ul class='sort-actions'>
    <?php $_from = $this->_tpl_vars['sort_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
        <li>
            <input 
                name="sort" 
                type="radio" 
                id="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
                <?php if ($this->_tpl_vars['action']['selected']): ?>checked<?php endif; ?> 
                onclick="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['onclick'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
            
            />
            <label for="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['action']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
                <?php if ($this->_tpl_vars['action']['materialIcon']): ?><i class='material-icons'><?php echo ((is_array($_tmp=$this->_tpl_vars['action']['materialIcon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i><?php endif; ?>
            </label>
        </li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
    <script><?php echo '
        
        var win = window.parent;
        var search = win.location.search;
        
        function setSort(sortVal) {
            if (win.activeSheet) {
                win.activeSheet.close();
            }
            search = search.replace(/&-sort=[^&]*/, \'\');
            search = search.replace(/\\?-sort=[^&]*/, \'?\');
            search += \'&-sort=\'+encodeURIComponent(sortVal);
            
            win.jQuery(\'<div class="spin fillscreen"></div>\').appendTo(win.document.body);
            win.location.replace(search);
            
            
        }
        
        function sortAscending(fieldName) {
            setSort(fieldName+\' asc\');
        }    
        
        function sortDescending(fieldName) {
            setSort(fieldName+" desc");
        }
    '; ?>
</script>
    
</body>
</html>