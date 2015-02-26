<?php

class CSI_NodeBackground_Option_UserGroups extends XenForo_Option_UserGroupChooser
{
  public static function renderUserGroupChooser(XenForo_View $view, $fieldPrefix, array $preparedOption, $canEdit)
  {
    return self::_render('csiXF_nodeBg_optionList_optionUserGroups', $view, $fieldPrefix, $preparedOption, $canEdit);
  }
  public static function getOption($key)
  {
    return XenForo_Application::getOptions()->get(sprintf('csiXF_%s', $key));
  }
}
