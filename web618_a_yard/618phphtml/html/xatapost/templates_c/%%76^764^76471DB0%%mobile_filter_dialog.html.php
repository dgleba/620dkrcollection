<?php /* Smarty version 2.6.18, created on 2022-10-03 02:00:20
         compiled from xataface/actions/mobile_filter_dialog.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'xataface/actions/mobile_filter_dialog.html', 5, false),)), $this); ?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/plone.css?v=<?php echo $this->_tpl_vars['ENV']['APPLICATION_VERSION']; ?>
"/>
    <link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/css/xataface/actions/mobile_filter_dialog.css?v=<?php echo $this->_tpl_vars['ENV']['APPLICATION_VERSION']; ?>
"/>
</head>
<body class='mobile-sort-dialog'>
    <div class='filter-top-right-buttons'>
        <button class='reset-filter-btn' onclick='resetFilters()'>Reset</button>
    </div>
    <h1>Filter</h1>
    <ul class='xf-filter-form'>
    <li class='xf-filter-field xf-filter-type-keyword'>
        <div class='keyword-search-wrapper'>
            <i class='material-icons'>search</i>
            <i class='clear-btn material-icons'>cancel</i>
            <input type="text" id="keyword-search-field" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['query'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class='keyword-search-field'/>
        </div>
    </li>
    <?php $_from = $this->_tpl_vars['searchFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
    <li class='xf-filter-field xf-filter-type-<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'>
        

        <?php if ($this->_tpl_vars['field']['type'] == 'filter'): ?>
        <a href='javascript:void(0)' onclick='showOptions(this)'>
            <i class='material-icons'>arrow_forward_ios</i>
            <span class='xf-filter-label'><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
            <span class='xf-filter-value'><?php if ($this->_tpl_vars['field']['valueLabel']): ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['field']['valueLabel'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php elseif ($this->_tpl_vars['field']['value']): ?>: : <?php echo ((is_array($_tmp=$this->_tpl_vars['field']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></span>
            
        </a>
        <div class='xf-filter-options' data-field='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
' data-filter-type='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'>
            <div class='dialog-content'>
                <h1><span><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></h1>
                <ul class='xf-filter-options-list'>
                    <?php $_from = $this->_tpl_vars['field']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
                    <li>
                
                        <input 
                            class='filter-box'
                            onclick='updateFilters(this);' 
                            data-key='<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['key'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
' 
                            type='checkbox' 
                            id='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-option-<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['key'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'
                            <?php if ($this->_tpl_vars['option']['selected']): ?>checked<?php endif; ?>/>
                        <label for='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-option-<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['key'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'>
                            <span class='xf-filter-option-value'><?php echo ((is_array($_tmp=$this->_tpl_vars['option']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
                            <?php if ($this->_tpl_vars['option']['count']): ?><span class='xf-filter-option-count'>(<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['count'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</span><?php endif; ?>
                        </labeL>
                    </li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
            </div>
        </div>
        <?php elseif ($this->_tpl_vars['field']['type'] == 'date-range'): ?>
        
        <?php elseif ($this->_tpl_vars['field']['type'] == 'text'): ?>
        <a href='javascript:void(0)' onclick='showOptions(this)'>
            <i class='material-icons'>arrow_forward_ios</i>
            <span class='xf-filter-label'><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
            <span class='xf-filter-value'><?php if ($this->_tpl_vars['field']['valueLabel']): ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['field']['valueLabel'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php elseif ($this->_tpl_vars['field']['value']): ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['field']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></span>
            
        </a>
        <div class='xf-filter-options' data-field='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
' data-filter-type='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'>
            <div class='dialog-content'>
                <h1><span><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></h1>
                <div class='text-filter-input'>
                    <i class='material-icons'>search</i>
                    <?php if ($this->_tpl_vars['field']['inputType'] == 'text'): ?><i class='clear-btn material-icons'>cancel</i><?php endif; ?>
                    <input type='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['inputType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
' 
                        class='search-field' 
                        value='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'
                        <?php if ($this->_tpl_vars['field']['placeholder']): ?>placeholder='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['placeholder'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'<?php endif; ?>
                        <?php $_from = $this->_tpl_vars['field']['inputAttributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attKey'] => $this->_tpl_vars['attVal']):
?>
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['attKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
='<?php echo ((is_array($_tmp=$this->_tpl_vars['attVal'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'
                        <?php endforeach; endif; unset($_from); ?>
                        />
                </div>
                <div class='text-filter-options'>
                    <input type='radio' value='contains' class='text-filter-option' name='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
-text-filter-option' id='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
-text-filter-option-contains' <?php if (! $this->_tpl_vars['field']['searchSuffix'] && ! $this->_tpl_vars['field']['searchPrefix']): ?>checked<?php endif; ?>/>
                    <label for='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
-text-filter-option-contains'>Contains</label>
                    
                    <input type='radio' value='exact' class='text-filter-option' name='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
-text-filter-option' id='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
-text-filter-option-exact' <?php if ($this->_tpl_vars['field']['searchPrefix'] == '='): ?>checked<?php endif; ?>/>
                    <label for='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
-text-filter-option-exact'>Exact</label>
                    
                    <input type='radio' value='startswith' class='text-filter-option' name='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
-text-filter-option' id='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
-text-filter-option-starts-with' <?php if ($this->_tpl_vars['field']['searchPrefix'] == '~' && $this->_tpl_vars['field']['searchSuffix'] == '%'): ?>checked<?php endif; ?>/>
                    <label for='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
-text-filter-option-starts-with'>Starts with</label>
                    
                    <input type='radio' value='endswith' class='text-filter-option' name='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
-text-filter-option' id='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
-text-filter-option-ends-with' <?php if ($this->_tpl_vars['field']['searchPrefix'] == '~%'): ?>checked<?php endif; ?>/>
                    <label for='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
-text-filter-option-ends-with'>Ends with</label>
                </div>
            </div>
        </div>
        <?php elseif ($this->_tpl_vars['field']['type'] == 'checkbox'): ?>
    
        <?php elseif ($this->_tpl_vars['field']['type'] == 'range' || $this->_tpl_vars['field']['type'] == 'min' || $this->_tpl_vars['field']['type'] == 'max'): ?>
        <a href='javascript:void(0)' onclick='showOptions(this)'>
            <i class='material-icons'>arrow_forward_ios</i>
            <span class='xf-filter-label'><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
            <span class='xf-filter-value'><?php if ($this->_tpl_vars['field']['valueLabel']): ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['field']['valueLabel'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php elseif ($this->_tpl_vars['field']['value']): ?>: : <?php echo ((is_array($_tmp=$this->_tpl_vars['field']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></span>
            
        </a>
        <div class='xf-filter-options' data-field='<?php echo $this->_tpl_vars['field']['fieldDef']['name']; ?>
' data-filter-type='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'>
            <div class='dialog-content'>
                <h1><span><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span></h1>
                <?php if ($this->_tpl_vars['field']['filterVocabulary']): ?>
                <ul class='xf-filter-vocabulary-list'>
                    <?php $_from = $this->_tpl_vars['field']['filterValuelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
                    <li>
                
                        <input 
                            class='filter-vocabulary-box'
                            onclick='updateFilters(this);' 
                            data-key='<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['key'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'
                            value='<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['key'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
' 
                            type='radio' 
                            name='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'
                            id='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-option-<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'
                            <?php if ($this->_tpl_vars['option']['selected']): ?>checked<?php endif; ?>
                            data-option-value="<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
                            />
                        <label for='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-option-<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'>
                            <span class='xf-filter-option-value'><?php echo ((is_array($_tmp=$this->_tpl_vars['option']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
                            <?php if ($this->_tpl_vars['option']['count']): ?><span class='xf-filter-option-count'>(<?php echo ((is_array($_tmp=$this->_tpl_vars['option']['count'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</span><?php endif; ?>
                        </labeL>
                    </li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
                <?php endif; ?>
                <div class='range-inputs'>
                    <?php if ($this->_tpl_vars['field']['type'] != 'max'): ?>
                    <div class='min-wrapper'>
                        <?php if ($this->_tpl_vars['field']['minIcon']): ?><i class='material-icons'><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['minIcon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i><?php endif; ?>
                        <?php if ($this->_tpl_vars['field']['inputType'] == 'text'): ?><i class='clear-btn material-icons'>cancel</i><?php endif; ?>
                        <input type='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['inputType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
' 
                            class='range-min <?php if ($this->_tpl_vars['field']['minIcon']): ?>icon-input<?php endif; ?>' 
                            value='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['currentMinValue'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
' 
                            <?php if ($this->_tpl_vars['field']['minPlaceholder']): ?>placeholder='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['minPlaceholder'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'<?php endif; ?>
                            <?php $_from = $this->_tpl_vars['field']['minInputAttributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attKey'] => $this->_tpl_vars['attVal']):
?>
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['attKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
='<?php echo ((is_array($_tmp=$this->_tpl_vars['attVal'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'
                            <?php endforeach; endif; unset($_from); ?>
                            />
                        <span class='min-label'>Min.</span>
                    </div>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['field']['type'] != 'min'): ?>
                    <div class='max-wrapper'>
                        <?php if ($this->_tpl_vars['field']['maxIcon']): ?><i class='material-icons'><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['maxIcon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i><?php endif; ?>
                        <?php if ($this->_tpl_vars['field']['inputType'] == 'text'): ?><i class='clear-btn material-icons'>cancel</i><?php endif; ?>
                        <input type='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['inputType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
' 
                            class='range-max <?php if ($this->_tpl_vars['field']['maxIcon']): ?>icon-input<?php endif; ?>' 
                            value='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['currentMaxValue'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
' 
                            <?php if ($this->_tpl_vars['field']['maxPlaceholder']): ?>placeholder='<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['maxPlaceholder'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'<?php endif; ?>
                            <?php $_from = $this->_tpl_vars['field']['maxInputAttributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attKey'] => $this->_tpl_vars['attVal']):
?>
                                <?php echo ((is_array($_tmp=$this->_tpl_vars['attKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
='<?php echo ((is_array($_tmp=$this->_tpl_vars['attVal'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'
                            <?php endforeach; endif; unset($_from); ?>
                            />
                        <span class='max-label'>Max.</span>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    
    
        <?php elseif ($this->_tpl_vars['field']['type'] == 'checkbox'): ?>
    
        <?php else: ?>
    
    
        <?php endif; ?>

    </li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
    
    <div class='xf-buttons'>
        <button class='xf-apply-btn' onclick='applyFilters()'>Show <span class='num-results'>x</span> Results</button>
    </div>
    <?php if ($this->_tpl_vars['relatedFilter']): ?>
    <script>
        window.relatedFilter=true;    
    </script>
    <?php endif; ?>
    <script src="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/js/xataface/actions/mobile_filter_dialog.js?v=<?php echo $this->_tpl_vars['ENV']['APPLICATION_VERSION']; ?>
"></script>

</body>
    