<?php

/**
 * Implements hook_form_alter().
 */
function bootstrap_tla_form_islandora_solr_simple_search_form_alter(&$form, &$form_state, $form_id) {
  $form['simple'] = array(
    '#type' => 'container',
    '#attributes' => array(
      'class' => array(
        'container-inline',
      ),
    ),
  );
  $form['simple']["islandora_simple_search_query"] = array(
    '#size' => '15',
    '#type' => 'textfield',
    '#title' => t(""),
    '#attributes' => array('placeholder' => t('Search'),
        ),
  );
  $form['simple']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('<span aria-hidden="true" class="icon glyphicon glyphicon-search"></span>'),
  );
  return $form;
}

?>
