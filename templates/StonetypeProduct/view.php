<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StonetypeProduct $stonetypeProduct
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Stonetype Product'), ['action' => 'edit', $stonetypeProduct->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Stonetype Product'), ['action' => 'delete', $stonetypeProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stonetypeProduct->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Stonetype Product'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Stonetype Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stonetypeProduct view content">
            <h3><?= h($stonetypeProduct->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Stone Type') ?></th>
                    <td><?= $stonetypeProduct->has('stone_type') ? $this->Html->link($stonetypeProduct->stone_type->name, ['controller' => 'StoneType', 'action' => 'view', $stonetypeProduct->stone_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $stonetypeProduct->has('product') ? $this->Html->link($stonetypeProduct->product->name, ['controller' => 'Product', 'action' => 'view', $stonetypeProduct->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stonetypeProduct->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
