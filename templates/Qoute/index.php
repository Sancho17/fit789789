<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Qoute[]|\Cake\Collection\CollectionInterface $qoute
 */

echo $this->Html->css('/css/tables.css',['block' => true]);
echo $this->Html->script('/js/scripts.js',['block' => true]);
echo $this->Html->script('/js/bootstrapbundle.js',['block' => true]);
echo $this->Html->script('/js/simple.js',['block' => true]);
echo $this->Html->script('/js/datatables-simple-demo.js',['block' => true]);
?>
<div class="qoute index content">
<a class="btn btn-primary" href="<?= $this->Url->build(['action' => 'add']) ?>">Add</a>
    <h3><?= __('Qoute') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('prod_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('weight') ?></th>
                    <th><?= $this->Paginator->sort('height') ?></th>
                    <th><?= $this->Paginator->sort('width') ?></th>
                    <th><?= $this->Paginator->sort('length') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('delivery_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($qoute as $qoute): ?>
                <tr>
                    <td><?= $this->Number->format($qoute->id) ?></td>
                    <td><?= $qoute->has('product') ? $this->Html->link($qoute->product->name, ['controller' => 'Product', 'action' => 'view', $qoute->product->id]) : '' ?></td>
                    <td><?= $qoute->has('user') ? $this->Html->link($qoute->user->id, ['controller' => 'Users', 'action' => 'view', $qoute->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($qoute->weight) ?></td>
                    <td><?= $this->Number->format($qoute->height) ?></td>
                    <td><?= $this->Number->format($qoute->width) ?></td>
                    <td><?= $this->Number->format($qoute->length) ?></td>
                    <td><?= $this->Number->format($qoute->amount) ?></td>
                    <td><?= h($qoute->address) ?></td>
                    <td><?= h($qoute->email) ?></td>
                    <td><?= $qoute->has('delivery') ? $this->Html->link($qoute->delivery->name, ['controller' => 'Delivery', 'action' => 'view', $qoute->delivery->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $qoute->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $qoute->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $qoute->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qoute->id)]) ?>
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
