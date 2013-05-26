[?php

/**
 * <?php echo $this->getModuleName() ?> module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage <?php echo $this->getModuleName()."\n" ?>
 * @author     ##AUTHOR_NAME##
 */
abstract class Base<?php echo ucfirst($this->getModuleName()) ?>GeneratorHelper extends sfTwitterModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? '<?php echo $this->params['route_prefix'] ?>' : '<?php echo $this->params['route_prefix'] ?>_'.$action;
  }

  public function linkToMoveUp($object, $params)
  {
    if ($object->isFirst())
    {
      return '<li><i class="icon-arrow-up"></i> '.__($params['label'], array(), 'sf_admin').'</li>';
    }

    if (empty($params['action']))
    {
      $params['action'] = 'moveUp';
    }

    return '<li><i class="icon-arrow-up"></i>'.link_to(__($params['label'], array(), 'sf_admin'), '<?php echo $this->params['moduleName'] ?>/'.$params['action'].'?<?php echo $this->getPrimaryKeyUrlParams('$object', true); ?>).'</li>';
  }

  public function linkToMoveDown($object, $params)
  {
    if ($object->isLast())
    {
      return '<li><i class="icon-arrow-down"></i> '.__($params['label'], array(), 'sf_admin').'</li>';
    }

    if (empty($params['action']))
    {
      $params['action'] = 'moveDown';
    }

    return '<li><i class="icon-arrow-down"></i> '.link_to(__($params['label'], array(), 'sf_admin'), '<?php echo $this->params['moduleName'] ?>/'.$params['action'].'?<?php echo $this->getPrimaryKeyUrlParams('$object', true); ?>).'</li>';
  }
}
