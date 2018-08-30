<?php

/**
 * Implements hook_form_alter().
 * 
 * Modifying the islandora simple search box to look like the bootstrap one
 * 
 */
function bootstrap_tla_form_islandora_solr_simple_search_form_alter(&$form, &$form_state, $form_id) {
  $form['simple'] = array(
    '#type' => 'container',
    '#theme_wrappers' => array(),
    '#attributes' => array(
      'class' => array(
        'container-inline',
      ),
    ),
  );
  $form['simple']['islandora_simple_search_query'] = array(
    '#size' => '15',
    '#type' => 'textfield',
    '#prefix' => '<div class="input-group">',
    '#title' => t(""),
    '#theme_wrappers' => array(),
    '#attributes' => array('placeholder' => t('Search'),
    ),
  );
  $form['simple']['submit'] = array(
    '#type' => 'submit',
    '#prefix' => '<span class="input-group-btn">',
    '#suffix' => '</span></div>',
    '#value' => t('<span aria-hidden="true" class="icon glyphicon glyphicon-search"></span>'),
  );
  return $form;
}
/**
 * Imolements hook_menu_local_task.
 * Adds icons to the tab menu items in flat dashboard
 *
 * @param $variables
 * @return string
 */
function bootstrap_tla_menu_local_task($variables) {

    $pattern = 'dashboard/%/';
    $element = &$variables['element'];

    if (strpos($element['#link']['path'], $pattern) !== false) {

        $name = str_replace($pattern, '', $element['#link']['path']);
        $element['#link']['localized_options']['attributes']['id'] = $name ;
        $element['#link']['localized_options']['html'] = TRUE;


    }

    return theme_menu_local_task($variables);
}



/**
 * Theme function for the compound navigation block parts.
 **/
function bootstrap_tla_preprocess_islandora_compound_prev_next(array &$variables) {

}

function bootstrap_tla_bootstrap_iconize_text_alter(&$texts) {
    $texts['matches'][t('Remove Address')] = 'trash';
}

function bootstrap_tla_bootstrap_colorize_text_alter(&$texts) {
	$texts['matches'][t('Remove Address')] = 'danger';
	$texts['matches'][t('Add Research Discipline')] = 'success';
}



