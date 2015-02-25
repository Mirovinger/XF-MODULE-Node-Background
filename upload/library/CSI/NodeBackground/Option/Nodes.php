<?php

class CSI_NodeBackground_Option_Nodes
{
  public static function renderOption(XenForo_View $view, $fieldPrefix, array $preparedOption, $canEdit)
  {
    $nodeModel = XenForo_Model::create('CSI_NodeBackground_Model_GetNodes');
    $preparedOption['formatParams'] = $nodeModel->getNodesOptions(
      $preparedOption['option_value']
    );
    return XenForo_ViewAdmin_Helper_Option::renderOptionTemplateInternal(
      'option_list_option_checkbox',
      $view, $fieldPrefix, $preparedOption, $canEdit
    );
  }

  public static function renderMultiple(XenForo_View $view, $fieldPrefix, array $preparedOption, $canEdit)
  {
    $value = $preparedOption['option_value'];
    $editLink = $view->createTemplateObject('option_list_option_editlink', array(
      'preparedOption' => $preparedOption,
      'canEditOptionDefinition' => $canEdit
    ));

    $nodeModel = XenForo_Model::create('CSI_NodeBackground_Model_GetNodes');
    $forumOptions = $nodeModel->getNodesOptions(
      $preparedOption['option_value'],
      '(unspecified)'
    );
    return $view->createTemplateObject('csiXF_nodeBg_optionList_optionMultiple', array(
      'fieldPrefix' => $fieldPrefix,
      'listedFieldName' => $fieldPrefix . '_listed[]',
      'preparedOption' => $preparedOption,
      'formatParams' => $forumOptions,
      'editLink' => $editLink
    ));
  }
}
