<?php /* Smarty version 2.6.18, created on 2022-10-03 00:50:17
         compiled from Dataface_ActionsMenu.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'define_slot', 'Dataface_ActionsMenu.html', 20, false),array('modifier', 'count', 'Dataface_ActionsMenu.html', 21, false),array('modifier', 'escape', 'Dataface_ActionsMenu.html', 22, false),array('function', 'block', 'Dataface_ActionsMenu.html', 24, false),)), $this); ?>
<?php $this->_tag_stack[] = array('define_slot', array('name' => 'actions_menu')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if (count($this->_tpl_vars['actions']) > 0): ?>
<ul <?php if ($this->_tpl_vars['class']): ?>class="<?php echo ((is_array($_tmp=$this->_tpl_vars['class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['id']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?> data-actions-count="<?php echo count($this->_tpl_vars['actions']); ?>
"
    <?php if ($this->_tpl_vars['actionsRecordId']): ?>xf-record-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['actionsRecordId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>>
	<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'actions_menu_head'), $this);?>

<?php $_from = $this->_tpl_vars['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['action']):
?>
            <?php if ($this->_tpl_vars['action']['subcategory'] && ! $this->_tpl_vars['action']['subactions']): ?>
            	<!-- Omit action because it has no subactions -->
            <?php else: ?>
              <li tabindex="0" id="<?php echo $this->_tpl_vars['id_prefix']; ?>
<?php echo $this->_tpl_vars['action']['id']; ?>
"
              	  class="
              	  <?php if ($this->_tpl_vars['action']['name'] == $this->_tpl_vars['selected_action'] || $this->_tpl_vars['action']['selected']): ?>selected <?php echo ((is_array($_tmp=$this->_tpl_vars['action']['class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?>plain <?php echo ((is_array($_tmp=$this->_tpl_vars['action']['class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>
              	  <?php if ($this->_tpl_vars['action']['subactions']): ?>xf-dropdown<?php endif; ?><?php if ($this->_tpl_vars['action']['visible_status']): ?> xf-record-visible-status-<?php echo $this->_tpl_vars['action']['visible_status']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['action']['hidden_status']): ?> xf-record-hidden-status-<?php echo $this->_tpl_vars['action']['hidden_status']; ?>
<?php endif; ?>"
              	  <?php $_from = $this->_tpl_vars['action']['atts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['actionAttName'] => $this->_tpl_vars['actionAttValue']):
?><?php echo ((is_array($_tmp=$this->_tpl_vars['actionAttName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
="<?php echo ((is_array($_tmp=$this->_tpl_vars['actionAttValue'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php endforeach; endif; unset($_from); ?>
              	  >
                
                <a <?php if ($this->_tpl_vars['action']['rel']): ?>rel="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['rel'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['action']['subactions']): ?>onclick="return false;" <?php endif; ?>class="<?php if ($this->_tpl_vars['action']['subactions']): ?>trigger<?php endif; ?>" id="<?php echo $this->_tpl_vars['id_prefix']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-link" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['action']['onclick']): ?> onclick="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['onclick'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['action']['target']): ?> target="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['target'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>
                   accesskey="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['accessKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" data-xf-permission="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['permission'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
                   <?php if ($this->_tpl_vars['action']['confirm']): ?>data-xf-confirm-message="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['confirm'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>
                   >
				   <?php if ($this->_tpl_vars['action']['icon']): ?><img id="<?php echo $this->_tpl_vars['id_prefix']; ?>
<?php echo $this->_tpl_vars['action']['id']; ?>
-icon" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['icon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['action']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/><?php endif; ?>
				   <?php if ($this->_tpl_vars['action']['materialIcon']): ?><i class="material-icons <?php echo ((is_array($_tmp=$this->_tpl_vars['action']['materialIconStyle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['action']['materialIcon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i><?php endif; ?>
				   <?php if (! $this->_tpl_vars['action']['icon'] && ! $this->_tpl_vars['action']['materialIcon'] && $this->_tpl_vars['action']['subactions']): ?><i class="material-icons <?php echo ((is_array($_tmp=$this->_tpl_vars['action']['materialIconStyle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">arrow_drop_down</i><?php endif; ?>
                   <span class="action-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['action']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
                   <?php if ($this->_tpl_vars['action']['navicon']): ?>
                       <i class="material-icons navicon"><?php echo ((is_array($_tmp=$this->_tpl_vars['action']['navicon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i>
                   <?php endif; ?>
                </a>
                
                 <?php if ($this->_tpl_vars['action']['subactions']): ?>
											
					<ul class="action-sub-menu">
						<?php $_from = $this->_tpl_vars['action']['subactions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subname'] => $this->_tpl_vars['subaction']):
?>
							<li tabindex="0" id="<?php echo $this->_tpl_vars['id_prefix']; ?>
<?php echo $this->_tpl_vars['subaction']['id']; ?>
"
							  class="
							  <?php if ($this->_tpl_vars['subaction']['name'] == $this->_tpl_vars['selected_action'] || $this->_tpl_vars['subaction']['selected']): ?>selected <?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?>plain <?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>
							  <?php if ($this->_tpl_vars['subaction']['subactions']): ?>xf-dropdown<?php endif; ?><?php if ($this->_tpl_vars['subaction']['visible_status']): ?> xf-record-visible-status-<?php echo $this->_tpl_vars['subaction']['visible_status']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['subaction']['hidden_status']): ?> xf-record-hidden-status-<?php echo $this->_tpl_vars['subaction']['hidden_status']; ?>
<?php endif; ?>"
							  <?php $_from = $this->_tpl_vars['subaction']['atts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subactionAttName'] => $this->_tpl_vars['subactionAttValue']):
?><?php echo ((is_array($_tmp=$this->_tpl_vars['subactionAttName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
="<?php echo ((is_array($_tmp=$this->_tpl_vars['subactionAttValue'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php endforeach; endif; unset($_from); ?>
							  >
								<a <?php if ($this->_tpl_vars['subaction']['rel']): ?>rel="<?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['rel'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['subaction']['subactions']): ?>onclick="return false;" <?php endif; ?>class="<?php if ($this->_tpl_vars['subaction']['subactions']): ?>trigger horizontal-trigger<?php endif; ?>" id="<?php echo $this->_tpl_vars['id_prefix']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-link" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['subaction']['onclick']): ?> onclick="<?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['onclick'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['subaction']['target']): ?> target="<?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['target'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>
								   accesskey="<?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['accessKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" data-xf-permission="<?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['permission'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
								   <?php if ($this->_tpl_vars['subaction']['confirm']): ?>data-xf-confirm-message="<?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['confirm'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>
								   >
								   <?php if ($this->_tpl_vars['subaction']['icon']): ?><img id="<?php echo $this->_tpl_vars['id_prefix']; ?>
<?php echo $this->_tpl_vars['subaction']['id']; ?>
-icon" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['icon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/><?php endif; ?>
								   <?php if ($this->_tpl_vars['subaction']['materialIcon']): ?><i class="material-icons <?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['materialIconStyle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['materialIcon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i><?php endif; ?>  
								   <span class="action-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['subaction']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
								   
								</a>
								
								<?php if ($this->_tpl_vars['subaction']['subactions']): ?>
									<ul class="action-sub-sub-menu">
										<?php $_from = $this->_tpl_vars['subaction']['subactions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subsubname'] => $this->_tpl_vars['subsubaction']):
?>
											<li tabindex="0" id="<?php echo $this->_tpl_vars['id_prefix']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-link" 
												 class="<?php if ($this->_tpl_vars['subsubaction']['name'] == $this->_tpl_vars['selected_action'] || $this->_tpl_vars['subsubaction']['selected']): ?>selected <?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?>plain <?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['subsubaction']['visible_status']): ?> xf-record-visible-status-<?php echo $this->_tpl_vars['subsubaction']['visible_status']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['subsubaction']['hidden_status']): ?> xf-record-hidden-status-<?php echo $this->_tpl_vars['subsubaction']['hidden_status']; ?>
<?php endif; ?>"
												 <?php $_from = $this->_tpl_vars['subsubaction']['atts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subsubactionAttName'] => $this->_tpl_vars['subsubactionAttValue']):
?><?php echo ((is_array($_tmp=$this->_tpl_vars['subsubactionAttName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
="<?php echo ((is_array($_tmp=$this->_tpl_vars['subsubactionAttValue'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php endforeach; endif; unset($_from); ?>
												 >
												<a <?php if ($this->_tpl_vars['subsubaction']['rel']): ?>rel="<?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['rel'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?> id="<?php echo $this->_tpl_vars['id_prefix']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-link" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['subsubaction']['onclick']): ?> onclick="<?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['onclick'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['subsubaction']['target']): ?> target="<?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['target'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>
												   accesskey="<?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['accessKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" data-xf-permission="<?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['permission'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
												   <?php if ($this->_tpl_vars['subsubaction']['confirm']): ?>data-xf-confirm-message="<?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['confirm'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>
												   
												   >
												   <?php if ($this->_tpl_vars['subsubaction']['icon']): ?><img id="<?php echo $this->_tpl_vars['id_prefix']; ?>
<?php echo $this->_tpl_vars['subsubaction']['id']; ?>
-icon" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['icon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/><?php endif; ?>
												   <?php if ($this->_tpl_vars['subsubaction']['materialIcon']): ?><i class="material-icons <?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['materialIconStyle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['materialIcon'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</i><?php endif; ?>  
												   
												   <span class="action-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['subsubaction']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
												   
												</a>
											</li>
										<?php endforeach; endif; unset($_from); ?>
									
									</ul>
								
								<?php endif; ?>
							
						  </li>
						
						<?php endforeach; endif; unset($_from); ?>
					</ul>

			   <?php endif; ?>
                
              </li>
            <?php endif; ?>
            
            
<?php endforeach; endif; unset($_from); ?>
            
     <?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'actions_menu_tail'), $this);?>
       
</ul>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>