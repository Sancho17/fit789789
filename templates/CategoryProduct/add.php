<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoryProduct $categoryProduct
 * @var \Cake\Collection\CollectionInterface|string[] $product
 * @var \Cake\Collection\CollectionInterface|string[] $category
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Category Product'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoryProduct form content">
            <?= $this->Form->create($categoryProduct) ?>
            <fieldset>
                <legend><?= __('Add Category Product') ?></legend>
                <?php
                    echo $this->Form->control('product_id', ['options' => $product]);
                    echo $this->Form->control('category_id', ['options' => $category]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
