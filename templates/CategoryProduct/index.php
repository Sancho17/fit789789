<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoryProduct[]|\Cake\Collection\CollectionInterface $categoryProduct
 */
echo $this->Html->css('/css/tables.css',['block' => true]);
echo $this->Html->script('/js/scripts.js',['block' => true]);
echo $this->Html->script('/js/bootstrapbundle.js',['block' => true]);
echo $this->Html->script('/js/simple.js',['block' => true]);
echo $this->Html->script('/js/datatables-simple-demo.js',['block' => true]);

?>
<div class="category index content">
<h1 class="mt-4"><?= __('New Category Product') ?></h1>
<a class="btn btn-primary" href="<?= $this->Url->build(['action' => 'add']) ?>">Add</a>



    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categoryProduct as $categoryProduct): ?>
                <tr>
                    <td><?= $this->Number->format($categoryProduct->id) ?></td>
                    <td><?= $categoryProduct->has('product') ? $this->Html->link($categoryProduct->product->name, ['controller' => 'Product', 'action' => 'view', $categoryProduct->product->id]) : '' ?></td>
                    <td><?= $categoryProduct->has('category') ? $this->Html->link($categoryProduct->category->name, ['controller' => 'Category', 'action' => 'view', $categoryProduct->category->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categoryProduct->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoryProduct->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoryProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryProduct->id)]) ?>
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
