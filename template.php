<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

/**
 * Theme function for the compound navigation block parts.
function easylat_bootstrap_theme_preprocess_islandora_compound_prev_next(array &$variables) {
}

 */




/**
 * Implements hook_preprocess().
 * function easylat_bootstrap_theme_preprocess_islandora_compound_collection_wrapper(&$variables) {
function easylat_bootstrap_theme_preprocess_islandora_compound_collection__islandora_sp_basic_image_collection(&$variables) {
}
 */


/**
 * Implements hook_preprocess().
function easylat_bootstrap_theme_preprocess_islandora_basic_collection_wrapper(&$variables){
}
 */

/**
 * Implements hook_form_alter().
 */
function easylat_bootstrap_theme_form_islandora_solr_simple_search_form_alter(&$form, &$form_state, $form_id) {
    $form['simple']['islandora_simple_search_query']['#attributes']['placeholder'] = t("Seweghehe4harch Repository using SOLR");
}

function easylat_bootstrap_theme_menu_local_task($variables) {

    $pattern = 'dashboard/%/';
    $element = &$variables['element'];

    if (strpos($element['#link']['path'], $pattern) !== false) {

        $name = str_replace($pattern, '', $element['#link']['path']);

        $element['#link']['title'] .= '&nbsp<img alt="gwgwg' . '" src="https://lux126.mpi.nl/' . drupal_get_path('module', 'flat_deposit') . '/Images/My_' . $name . '.png' . '"/>';
        $element['#link']['localized_options']['html'] = TRUE;


    }

    return theme_menu_local_task($variables);
}

/*
function easylat_bootstrap_theme_preprocess_page(&$variables){

}
*/