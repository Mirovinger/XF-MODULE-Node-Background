<?php

class CSI_NodeBackground_Option_UserGroups
{
  public static function renderOption(XenForo_View $view, $fieldPrefix, array $preparedOption, $canEdit)
  {
    $userGroupModel = XenForo_Model::create('CSI_NodeBackground_Model_GetUserGroups');
    $preparedOption['formatParams'] = $userGroupModel->getUserGroupOptions(
      $preparedOption['option_value']
    );
    return XenForo_ViewAdmin_Helper_Option::renderOptionTemplateInternal(
      'option_list_option_checkbox',
      $view, $fieldPrefix, $preparedOption, $canEdit
    );
  }
}
