<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StonetypeProduct[]|\Cake\Collection\CollectionInterface $stonetypeProduct
 */
echo $this->Html->css('/css/tables.css',['block' => true]);
echo $this->Html->script('/js/scripts.js',['block' => true]);
echo $this->Html->script('/js/bootstrapbundle.js',['block' => true]);
echo $this->Html->script('/js/simple.js',['block' => true]);
echo $this->Html->script('/js/datatables-simple-demo.js',['block' => true]);
?>
<div class="stonetypeProduct index content">
<a class="btn btn-primary" href="<?= $this->Url->build(['action' => 'add']) ?>">Add</a>
    <h3><?= __('Stonetype Product') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('stonetype_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stonetypeProduct as $stonetypeProduct): ?>
                <tr>
                    <td><?= $this->Number->format($stonetypeProduct->id) ?></td>
                    <td><?= $stonetypeProduct->has('stone_type') ? $this->Html->link($stonetypeProduct->stone_type->name, ['controller' => 'StoneType', 'action' => 'view', $stonetypeProduct->stone_type->id]) : '' ?></td>
                    <td><?= $stonetypeProduct->has('product') ? $this->Html->link($stonetypeProduct->product->name, ['controller' => 'Product', 'action' => 'view', $stonetypeProduct->product->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stonetypeProduct->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stonetypeProduct->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stonetypeProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stonetypeProduct->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
    <script> 
    $(document).ready(function() {
  $('#dataTable').DataTable();
});

</script>
</div>
