<?php

class CSI_NodeBackground_Option_Nodes extends XenForo_Option_NodeChooser
{
  public static function renderNodeChooser(XenForo_View $view, $fieldPrefix, array $preparedOption, $canEdit)
  {
    $preparedOption['nodeFilter'] = 'Forum';
    return self::_render('csiXF_nodeBg_optionList_optionMultiple', $view, $fieldPrefix, $preparedOption, $canEdit);
  }
  public static function getOption($key)
  {
    return XenForo_Application::getOptions()->get(sprintf('csiXF_%s', $key));
  }
}
