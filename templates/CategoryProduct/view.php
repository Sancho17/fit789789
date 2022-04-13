<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoryProduct $categoryProduct
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Category Product'), ['action' => 'edit', $categoryProduct->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Category Product'), ['action' => 'delete', $categoryProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryProduct->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Category Product'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Category Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoryProduct view content">
            <h3><?= h($categoryProduct->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $categoryProduct->has('product') ? $this->Html->link($categoryProduct->product->name, ['controller' => 'Product', 'action' => 'view', $categoryProduct->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $categoryProduct->has('category') ? $this->Html->link($categoryProduct->category->name, ['controller' => 'Category', 'action' => 'view', $categoryProduct->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($categoryProduct->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
