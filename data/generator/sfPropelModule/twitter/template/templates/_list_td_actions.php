<td>
  <ul class="table-action">
<?php foreach ($this->configuration->getValue('list.object_actions') as $name => $params): ?>
<?php if ('_delete' == $name): ?>
    <?php echo $this->addCredentialCondition('[?php echo $helper->linkToDelete($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params) ?>

<?php elseif ('_edit' == $name): ?>
    <?php echo $this->addCredentialCondition('[?php echo $helper->linkToEdit($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params) ?>

<?php elseif ('_show' == $name): ?>
    <?php echo $this->addCredentialCondition('[?php echo $helper->linkToShow($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params) ?>

<?php elseif ('_move_up' == $name): ?>
    <?php echo $this->addCredentialCondition('[?php echo $helper->linkToMoveUp($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params) ?>

<?php elseif ('_move_down' == $name): ?>
    <?php echo $this->addCredentialCondition('[?php echo $helper->linkToMoveDown($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params) ?>

<?php else: ?>
    <li class="sf_admin_action_<?php echo $params['class_suffix'] ?>">
      <?php
        $icon= '';
        if (sfTwitterBootstrap::getProperty('use_icons_in_button', false)) {
          $icon = isset($params['icon']) ? '<i class="'.$params['icon'].'"></i> ' : '';
        }
        echo $this->addCredentialCondition($icon . $this->getLinkToAction($name, $params, true), $params)
      ?>

    </li>
<?php endif; ?>
<?php endforeach; ?>
  </ul>
</td>