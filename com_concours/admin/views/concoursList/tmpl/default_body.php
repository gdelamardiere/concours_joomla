<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');?>
<?php 
foreach($this->items as $i => $item): ?>
        <tr class="row<?php echo $i % 2; ?>">
                <td>
                        <?php echo $item->id; ?>
                </td>
                <td>
                        <?php echo JHtml::_('grid.id', $i, $item->id); ?>
                </td>
                <td>
                        <a href="<?php echo JRoute::_('index.php?option=com_concours&task=concours.edit&id=' . $item->id); ?>">
                                <?php echo $item->libelle; ?>
                        </a>
                </td>
        </tr>
<?php endforeach; ?>