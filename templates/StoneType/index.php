<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StoneType[]|\Cake\Collection\CollectionInterface $stoneType
 */
echo $this->Html->css('/css/tables.css',['block' => true]);
echo $this->Html->script('/js/scripts.js',['block' => true]);
echo $this->Html->script('/js/bootstrapbundle.js',['block' => true]);
echo $this->Html->script('/js/simple.js',['block' => true]);
echo $this->Html->script('/js/datatables-simple-demo.js',['block' => true]);
?>
<div class="stoneType index content">
<a class="btn btn-primary" href="<?= $this->Url->build(['action' => 'add']) ?>">Add</a>
    <h3><?= __('Stone Type') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stoneType as $stoneType): ?>
                <tr>
                    <td><?= $this->Number->format($stoneType->id) ?></td>
                    <td><?= h($stoneType->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stoneType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stoneType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stoneType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stoneType->id)]) ?>
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
