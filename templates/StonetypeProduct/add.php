<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StonetypeProduct $stonetypeProduct
 * @var \Cake\Collection\CollectionInterface|string[] $stoneType
 * @var \Cake\Collection\CollectionInterface|string[] $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Stonetype Product'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stonetypeProduct form content">
            <?= $this->Form->create($stonetypeProduct) ?>
            <fieldset>
                <legend><?= __('Add Stonetype Product') ?></legend>
                <?php
                    echo $this->Form->control('stonetype_id', ['options' => $stoneType]);
                    echo $this->Form->control('product_id', ['options' => $product]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
