<?php


function mm_tp_omega_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
  
    unset($form['search_block_form']['#title']);
	
    $form['search_block_form']['#title_display'] = 'invisible';
	$form_default = t('Search TTM');
    $form['search_block_form']['#default_value'] = $form_default;
    $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/css/images/search-button.png');

 	$form['search_block_form']['#attributes'] = array('onblur' => "if (this.value == '') {this.value = '{$form_default}';}", 'onfocus' => "if (this.value == '{$form_default}') {this.value = '';}" );
  }
}


function mm_tp_omega_preprocess_node(&$vars){
	$node = $vars['node'];
	$vars['date_day'] = format_date($node->created, 'custom', 'j');
	$vars['date_month'] = format_date($node->created, 'custom', 'M');
	$vars['date_year'] = format_date($node->created, 'custom', 'Y');
	$vars['changed_day'] = format_date($node->changed, 'custom', 'j');
	$vars['changed_month'] = format_date($node->changed, 'custom', 'M');
	$vars['changed_year'] = format_date($node->changed, 'custom', 'Y');
}
