<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */

echo $this->Html->css('/css/tables.css',['block' => true]);
echo $this->Html->script('/js/scripts.js',['block' => true]);
echo $this->Html->script('/js/bootstrapbundle.js',['block' => true]);
echo $this->Html->script('/js/simple.js',['block' => true]);
echo $this->Html->script('/js/datatables-simple-demo.js',['block' => true]);
?>
<div class="orders index content">
<a class="btn btn-primary" href="<?= $this->Url->build(['action' => 'add']) ?>">Add</a>
    <h3><?= __('Orders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('qoute_id') ?></th>
                    <th><?= $this->Paginator->sort('total_fee') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $this->Number->format($order->id) ?></td>
                    <td><?= $order->has('qoute') ? $this->Html->link($order->qoute->id, ['controller' => 'Qoute', 'action' => 'view', $order->qoute->id]) : '' ?></td>
                    <td><?= $this->Number->format($order->total_fee) ?></td>
                    <td><?= h($order->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
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
