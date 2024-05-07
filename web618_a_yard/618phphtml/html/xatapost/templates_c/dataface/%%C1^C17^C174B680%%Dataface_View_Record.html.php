<?php /* Smarty version 2.6.18, created on 2022-10-03 00:51:00
         compiled from Dataface_View_Record.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_record', 'Dataface_View_Record.html', 21, false),array('function', 'block', 'Dataface_View_Record.html', 26, false),array('function', 'record_view', 'Dataface_View_Record.html', 28, false),array('function', 'glance_list', 'Dataface_View_Record.html', 63, false),array('function', 'actions_menu', 'Dataface_View_Record.html', 74, false),array('function', 'record_actions', 'Dataface_View_Record.html', 124, false),array('block', 'use_macro', 'Dataface_View_Record.html', 22, false),array('block', 'fill_slot', 'Dataface_View_Record.html', 25, false),array('block', 'define_slot', 'Dataface_View_Record.html', 27, false),array('block', 'collapsible_sidebar', 'Dataface_View_Record.html', 139, false),array('block', 'translate', 'Dataface_View_Record.html', 419, false),array('modifier', 'escape', 'Dataface_View_Record.html', 52, false),array('modifier', 'count', 'Dataface_View_Record.html', 107, false),)), $this); ?>
<?php if ($this->_tpl_vars['ENV']['resultSet']->found() > 0): ?>
	<?php echo $this->_plugins['function']['load_record'][0][0]->load_record(array('var' => 'record'), $this);?>

	<?php $this->_tag_stack[] = array('use_macro', array('file' => "Dataface_Record_Template.html")); $_block_repeat=true;$this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		
	
		<?php $this->_tag_stack[] = array('fill_slot', array('name' => 'record_content')); $_block_repeat=true;$this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_view_tab_content'), $this);?>

		<?php $this->_tag_stack[] = array('define_slot', array('name' => 'view_tab_content')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['record_view'][0][0]->record_view(array('var' => 'rv','record' => $this->_tpl_vars['record']), $this);?>

		
		<?php xf_script('jquery-ui.min.js'); ?>
		<?php $_from = $this->_tpl_vars['rv']->sections; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
			<?php if ($this->_tpl_vars['section']['class'] == 'override'): ?>
			    <?php $this->assign('contentOverridden', 1); ?>
				<?php $this->_tag_stack[] = array('define_slot', array('name' => ($this->_tpl_vars['section']['name'])."_section_content")); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php if ($this->_tpl_vars['section']['content']): ?>
					<div class="dataface-view-section">
					<?php echo $this->_tpl_vars['section']['content']; ?>

					</div>
				<?php elseif ($this->_tpl_vars['section']['fields']): ?>
					<table class="record-view-table">
					<tbody>
					<?php $_from = $this->_tpl_vars['section']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldname'] => $this->_tpl_vars['field']):
?>
						<?php if ($this->_tpl_vars['field']['visibility']['browse'] != 'hidden'): ?>
							<?php if ($this->_tpl_vars['section']['record']): ?>
								<?php $this->assign('field_value', $this->_tpl_vars['section']['record']->htmlValue($this->_tpl_vars['field']['name'])); ?>
							<?php else: ?>
								<?php $this->assign('field_value', $this->_tpl_vars['record']->htmlValue($this->_tpl_vars['field']['name'])); ?>
							
							<?php endif; ?>
							<?php if (! empty ( $this->_tpl_vars['field_value'] )): ?>
								<tr><th class="record-view-label">
										<?php if ($this->_tpl_vars['field']['label_link']): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['label_link'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank" class="field-label-link no-link-icon"><?php endif; ?>
											<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['widget']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

										<?php if ($this->_tpl_vars['field']['label_link']): ?></a><?php endif; ?>
									</th>
									<td class="record-view-value"><?php echo $this->_tpl_vars['field_value']; ?>
</td></tr>
							<?php endif; ?>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					</tbody>
					</table>
				<?php elseif ($this->_tpl_vars['section']['records']): ?>
					<?php echo $this->_plugins['function']['glance_list'][0][0]->glance_list(array('records' => $this->_tpl_vars['section']['records']), $this);?>

				<?php endif; ?>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php endif; ?>
		
		<?php endforeach; endif; unset($_from); ?>
        
		<?php if ($this->_tpl_vars['contentOverridden']): ?>		
			
            <div class="mobile mobile-record-relationships">
                <?php echo $this->_plugins['function']['actions_menu'][0][0]->actions_menu(array('category' => '__relationships__','navicon' => 'arrow_forward_ios'), $this);?>

            </div>
        <?php else: ?>
		<table width="100%">
			<?php if (! $this->_tpl_vars['rv']->showLogo): ?>
			<tr>
				
				<td colspan="2" id="dataface-sections-top-column">
					<?php if (false): ?>
					<div class="dataface-sections-top <?php if ($this->_tpl_vars['ENV']['prefs']['hide_record_view_logo']): ?>dataface-sections-top-no-logo<?php endif; ?>">
						<h3 class="dataface-record-view-title"><?php echo ((is_array($_tmp=$this->_tpl_vars['record']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h3>
						<script><?php echo '
							if (document.querySelector(\'.dataface-record-title\') !== null) {
								document.querySelector(\'.dataface-record-view-title\').style.display = \'none\';
							}
						'; ?>
</script>
						<?php if ($this->_tpl_vars['record']->getTitle() != $this->_tpl_vars['rv']->description): ?>
							<div class="dataface-view-description"><?php echo $this->_tpl_vars['rv']->description; ?>
</div>
						<?php endif; ?>
						<div class="dataface-view-status"><?php echo ((is_array($_tmp=$this->_tpl_vars['rv']->status)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</div>
						

						
					</div>
                    <?php endif; ?>
				</td>
			</tr>
			<?php endif; ?>
			<tr>
                <?php if (! $this->_tpl_vars['ENV']['prefs']['hide_view_tab_left_column']): ?>
				<td id="dataface-sections-left-column" valign="top">
					<div class="dataface-sections-left<?php if ($this->_tpl_vars['rv']->showLogo): ?> dataface-sections-left-with-logo<?php endif; ?>" id="dataface-sections-left">
						<?php if ($this->_tpl_vars['rv']->showLogo): ?>
							<?php if (count($this->_tpl_vars['rv']->logos) > 0): ?>
								<?php $_from = $this->_tpl_vars['rv']->logos; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['logo']):
?>
									<div class="dataface-view-logo">
									<?php echo $this->_tpl_vars['record']->htmlValue($this->_tpl_vars['logo']['name']); ?>

									</div>
								<?php endforeach; endif; unset($_from); ?>
							<?php else: ?>
								<div class="dataface-view-logo">
								<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/images/missing_logo.gif" alt="Missing Logo"/>
								</div>
							<?php endif; ?>
							
						<?php endif; ?>
						<?php if ($this->_tpl_vars['ENV']['prefs']['show_record_actions_inside_content']): ?>
							<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_record_actions'), $this);?>

							<?php $this->_tag_stack[] = array('define_slot', array('name' => 'record_actions')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<div class="dataface-view-record-actions">
								<?php echo $this->_plugins['function']['record_actions'][0][0]->record_actions(array('record' => $this->_tpl_vars['record']), $this);?>

							</div>
							<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_record_actions'), $this);?>

						<?php endif; ?>
						<?php if ($this->_tpl_vars['ENV']['prefs']['show_record_tree']): ?>
							<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'before_record_tree'), $this);?>

							<?php echo $this->_plugins['function']['load_record'][0][0]->load_record(array('var' => 'record'), $this);?>

							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "RecordNavMenu.html", 'smarty_include_vars' => array('record' => $this->_tpl_vars['record'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_record_tree'), $this);?>

						<?php endif; ?>
						<?php if (count($this->_tpl_vars['record']->_table->relationships()) > 0): ?>
							<?php $this->_tag_stack[] = array('define_slot', array('name' => 'record_search')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<?php if (! $this->_tpl_vars['ENV']['prefs']['hide_record_search']): ?>
							<div class="sidebox">
							<?php $this->_tag_stack[] = array('collapsible_sidebar', array('heading' => 'Find in Record')); $_block_repeat=true;smarty_block_collapsible_sidebar($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<div id="record-search">
								
								<input type="text" name="--subsearch" id="--subsearch" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['APPLICATION_OBJECT']->getQueryParam('-subsearch'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" onchange="doSubSearch();" />
								<?php echo '
								<script language="javascript">
								<!--

								function doSubSearch(){
									var qstr = window.location.search;
									var fld = document.getElementById(\'--subsearch\');
									if ( fld.value ){
										if ( qstr.indexOf(\'?--subsearch=\') >=0 || qstr.indexOf(\'&--subsearch=\') >= 0 ){
											qstr = qstr.replace(/([?&])--subsearch=([^&]*)/, \'$1--subsearch=\'+escape(fld.value));
											
											
										} else {
											qstr += \'&--subsearch=\'+escape(fld.value);
										}
										
										if ( qstr.indexOf(\'?-action=\') >= 0 || qstr.indexOf(\'&-action=\') >=0 ){
											qstr = qstr.replace(/([?&])-action=([^&]*)/, \'$1-action=single_record_search\');
										} else {
											qstr += \'&-action=single_record_search\';
										}
										
										window.location.search = qstr;
									}
									return false;
								}
								
								//--></script>
								'; ?>

								<button onclick="doSubSearch();"><i class="material-icons">search</i></button>
							
							</div>
							<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_collapsible_sidebar($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</div>
							<?php endif; ?>
							<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						<?php endif; ?>
						
						<?php $_from = $this->_tpl_vars['rv']->sections; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
							<?php if ($this->_tpl_vars['section']['class'] == 'left'): ?>
							<?php $this->_tag_stack[] = array('collapsible_sidebar', array('heading' => $this->_tpl_vars['section']['label'],'see_all' => $this->_tpl_vars['section']['url'],'edit_url' => $this->_tpl_vars['section']['edit_url'],'movable' => 1,'id' => $this->_tpl_vars['section']['name'],'prefix' => 'leftsidebar','oncollapse' => "DatafaceSections.oncollapse(this)",'onexpand' => "DatafaceSections.onexpand(this)",'display' => $this->_tpl_vars['section']['display'])); $_block_repeat=true;smarty_block_collapsible_sidebar($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
								<?php $this->_tag_stack[] = array('define_slot', array('name' => ($this->_tpl_vars['section']['name'])."_section_content")); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
								<?php if ($this->_tpl_vars['section']['content']): ?>
									<div class="dataface-view-section">
									<?php echo $this->_tpl_vars['section']['content']; ?>

									</div>
								<?php elseif ($this->_tpl_vars['section']['fields']): ?>
									<table class="record-view-table">
									<tbody>
									<?php $_from = $this->_tpl_vars['section']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldname'] => $this->_tpl_vars['field']):
?>
										<?php if ($this->_tpl_vars['field']['visibility']['browse'] != 'hidden' && $this->_tpl_vars['record']->htmlValue($this->_tpl_vars['field']['name'])): ?>
											<tr><th class="record-view-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['widget']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</th><td class="record-view-value"><?php echo $this->_tpl_vars['record']->htmlValue($this->_tpl_vars['field']['name']); ?>
</td></tr>
										<?php endif; ?>
									<?php endforeach; endif; unset($_from); ?>
									</tbody>
									</table>
								<?php elseif ($this->_tpl_vars['section']['records']): ?>
									<?php echo $this->_plugins['function']['glance_list'][0][0]->glance_list(array('records' => $this->_tpl_vars['section']['records']), $this);?>

								<?php endif; ?>
								<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_collapsible_sidebar($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php endif; ?>
						
						<?php endforeach; endif; unset($_from); ?>
						
					</div>
					
				</td>
                <?php endif; ?>
				<td id="dataface-sections-main-column" valign="top">
						<script>
								<?php echo '
								var leftCol = document.getElementById(\'dataface-sections-left-column\');
								var body = document.querySelector(\'body\');
								var isTwoCol = body.classList.contains(\'two-col\');
								if (isTwoCol) {
									console.log(\'two cols\');
									var outerLeft = document.getElementById(\'left_column\');
									var children = leftCol.childNodes;
									while (leftCol.hasChildNodes()) outerLeft.appendChild(leftCol.firstChild);
								}
								var leftColumnContent = leftCol ? leftCol.textContent : \'\';
								if (leftCol && leftColumnContent.trim().length == 0) {
									leftCol.style.width="0";
									leftCol.style.padding="0";
									leftCol.style.margin="0";
									leftCol.style.display="none"
								}
								'; ?>

						</script>
		
		
		
					<div class="dataface-sections-main" id="dataface-sections-main"> 
						<?php if ($this->_tpl_vars['rv']->showLogo): ?>
						<div class="dataface-sections-top <?php if ($this->_tpl_vars['ENV']['prefs']['hide_record_view_logo']): ?>dataface-sections-top-no-logo<?php endif; ?>">
							<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['record']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h3>
							<div class="dataface-view-description"><?php echo $this->_tpl_vars['rv']->description; ?>
</div>
							<div class="dataface-view-status"><?php echo ((is_array($_tmp=$this->_tpl_vars['rv']->status)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</div>
                            
    						
                            <div class="mobile mobile-record-relationships">
                                <?php echo $this->_plugins['function']['actions_menu'][0][0]->actions_menu(array('category' => '__relationships__','navicon' => 'arrow_forward_ios'), $this);?>

                            </div>
                            
                            
						</div>
						<?php endif; ?>
						
						<?php $this->_tag_stack[] = array('define_slot', array('name' => 'record_view_main_section')); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<?php if ($this->_tpl_vars['ENV']['prefs']['collapse_all_sections_enabled']): ?>
							<div class="section-tools">
								<a href="javascript:DatafaceSections.collapseAll()"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/images/treeExpanded.gif">Collapse All Sections</a> &nbsp; &nbsp;
							<a href="javascript:DatafaceSections.expandAll()"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['ENV']['DATAFACE_URL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/images/treeCollapsed.gif">Expand All Sections</a>
							</div>
							<?php endif; ?>
							
							<?php $_from = $this->_tpl_vars['rv']->sections; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?>
								<?php if ($this->_tpl_vars['section']['class'] == 'main'): ?>
								<?php $this->_tag_stack[] = array('collapsible_sidebar', array('heading' => $this->_tpl_vars['section']['label'],'edit_url' => $this->_tpl_vars['section']['edit_url'],'movable' => 1,'prefix' => 'mainsidebar','id' => $this->_tpl_vars['section']['name'],'onexpand' => "DatafaceSections.onexpand(this)",'oncollapse' => "DatafaceSections.oncollapse(this)",'display' => $this->_tpl_vars['section']['display'])); $_block_repeat=true;smarty_block_collapsible_sidebar($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                <!-- Section name is <?php echo ((is_array($_tmp=$this->_tpl_vars['section']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 -->
									<?php $this->_tag_stack[] = array('define_slot', array('name' => ($this->_tpl_vars['section']['name'])."_section_content")); $_block_repeat=true;$this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                    
									<?php if ($this->_tpl_vars['section']['content']): ?>
										<div class="dataface-view-section">
                                        
										<?php echo $this->_tpl_vars['section']['content']; ?>

										</div>
									<?php elseif ($this->_tpl_vars['section']['fields']): ?>
										<table class="record-view-table">
										<tbody>
										<?php $_from = $this->_tpl_vars['section']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldname'] => $this->_tpl_vars['field']):
?>
											<?php if ($this->_tpl_vars['field']['visibility']['browse'] != 'hidden'): ?>
												
												<?php if ($this->_tpl_vars['section']['record']): ?>
													<?php $this->assign('field_value', $this->_tpl_vars['section']['record']->htmlValue($this->_tpl_vars['field']['name'])); ?>
													
												<?php else: ?>
													<?php $this->assign('field_value', $this->_tpl_vars['record']->htmlValue($this->_tpl_vars['field']['name'])); ?>
			
												<?php endif; ?>

												<?php if (! empty ( $this->_tpl_vars['field_value'] )): ?>
													<tr><th class="record-view-label">
															<?php if ($this->_tpl_vars['field']['label_link']): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['label_link'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank" class="field-label-link no-link-icon"><?php endif; ?>
																<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['widget']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

															<?php if ($this->_tpl_vars['field']['label_link']): ?></a><?php endif; ?>
														</th>
														<td class="record-view-value">
														<?php if ($this->_tpl_vars['field']['Type'] == 'container'): ?>
															
																<?php $this->assign('view_thumb', $this->_tpl_vars['record']->getViewThumbnail($this->_tpl_vars['field']['name'])); ?>
																<?php if ($this->_tpl_vars['view_thumb']): ?>
																	<img class='xf-container-field xf-thumbnail' data-xf-full-size-image='<?php echo ((is_array($_tmp=$this->_tpl_vars['record']->display($this->_tpl_vars['field']['name']))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'
																		src='<?php echo ((is_array($_tmp=$this->_tpl_vars['view_thumb'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'
																	/>
																<?php else: ?>
																	<?php echo $this->_tpl_vars['field_value']; ?>

																<?php endif; ?>
															
														<?php else: ?>
															<?php echo $this->_tpl_vars['field_value']; ?>

														<?php endif; ?>
														</td></tr>
												<?php endif; ?>
											<?php endif; ?>
										<?php endforeach; endif; unset($_from); ?>
										</tbody>
										</table>
									<?php elseif ($this->_tpl_vars['section']['records']): ?>
										<?php echo $this->_plugins['function']['glance_list'][0][0]->glance_list(array('records' => $this->_tpl_vars['section']['records']), $this);?>

									<?php endif; ?>
									<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
								<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_collapsible_sidebar($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
								<?php endif; ?>
							
							<?php endforeach; endif; unset($_from); ?>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						<div style="clear:both"></div>
						
					</div>
					<?php echo '

					 <script type="text/javascript">
					// <![CDATA[
						require(DATAFACE_URL+\'/js/ajaxgold.js\');
                        jQuery(document).ready(function($) {
    						window.DatafaceSections = {
							
    							\'setDisplay\': function(el,disp){
    								var params = \'--record_id=*&--name=\'+encodeURIComponent(\'tables.'; ?>
<?php echo $this->_tpl_vars['record']->_table->tablename; ?>
<?php echo '.sections.\'+el.getAttribute(\'df:section_name\')+\'.display\')+\'&--value=\'+disp;
    								var query = window.location.search;
    								if ( query.indexOf(\'-action=\') >= 0 ){
    									query = query.replace(/([?&])-action=[^&]+/g, \'$1-action=ajax_set_preference\');
    								} else {
    									query = \'-action=ajax_set_preference\';
    								}
    								query = query.replace(/^[?]/, \'\');
    								var url = DATAFACE_SITE_HREF;
    								//alert(url + " : " + params);
    								postDataReturnText(url, params + \'&\' + query, function(text){});
									
    							},
							
    							\'oncollapse\': function(el){
    								return this.setDisplay(el, \'collapsed\');
							
    							},
							
    							\'onexpand\': function(el){
    								return this.setDisplay(el, \'expanded\');
    							},
    							\'collapseAll\': function(){
							
    								var handles = getElementsByClassName(document,\'*\',\'expansion-handle\');
    								for ( var i=0; i<handles.length; i++){
    									if ( !jQuery(handles[i].parentNode.nextSibling).hasClass(\'closed\') ){
    										jQuery(handles[i].parentNode.nextSibling).slideToggle("slow", Xataface.blocks.collapsible_sidebar.toggleCallback);
    										//cd.collapseElement(handles[i]);
    									}
    								}
    							},
    							\'expandAll\': function(){
    								var handles = getElementsByClassName(document,\'*\',\'expansion-handle\');
    								for ( var i=0; i<handles.length; i++){
    									if ( jQuery(handles[i].parentNode.nextSibling).hasClass(\'closed\') ){
    										jQuery(handles[i].parentNode.nextSibling).slideToggle("slow", Xataface.blocks.collapsible_sidebar.toggleCallback);
    										//cd.collapseElement(handles[i]);
    									}
    								}
    							}
						
						
    						};
						
    						window.updateSections = function(container){
    									//alert(\'here\');
									
    									var params = window.location.search;//+\'&\'+Sortable.serialize("dataface-sections-left");
    									params = params.replace(/([?&])-action=[^&]+/g, \'$1-action=ajax_sort_sections\');
									
									
    									var movables = jQuery(container).find(\'.movable\');
    									var movables_str = \'\';
    									for ( var i=0; i<movables.length; i++){
    										movables_str += \',\'+movables[i].getAttribute(\'df:section_name\');
    									}
    									params += \'&--\'+encodeURIComponent(container.getAttribute(\'id\'))+\'=\'+encodeURIComponent(movables_str);
    									params = params.substring(1);
    									//alert(params);
    									postDataReturnText(DATAFACE_SITE_HREF, params, function(data){document.getElementById(\'terminal\').innerHTML=data;});
    									//alert(Sortable.serialize("dataface-sections-left"));
    								}
								
    						jQuery(\'#dataface-sections-left\').sortable({\'handle\': \'.movable-handle\', \'update\': function(){updateSections(jQuery(\'#dataface-sections-left\').get(0));}});
    						jQuery(\'#dataface-sections-main\').sortable({\'handle\': \'.movable-handle\', \'update\': function(){updateSections(jQuery(\'#dataface-sections-main\').get(0));}});
                        });
						
						
					// ]]>
					 </script>
					 '; ?>

					<div id="terminal"/>
				</td>
			</tr>
		</table>
		<?php endif; ?> 			
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['define_slot'][0][0]->define_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	
		
		<?php echo $this->_plugins['function']['block'][0][0]->block(array('name' => 'after_view_tab_content'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php else: ?>
	<?php $this->_tag_stack[] = array('use_macro', array('file' => "Dataface_Main_Template.html")); $_block_repeat=true;$this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fill_slot', array('name' => 'record_content')); $_block_repeat=true;$this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('translate', array('id' => "scripts.GLOBAL.NO_RECORDS_MATCHED_REQUEST")); $_block_repeat=true;$this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No records matched your request.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['translate'][0][0]->translate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fill_slot'][0][0]->fill_slot($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['use_macro'][0][0]->use_macro($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php endif; ?>