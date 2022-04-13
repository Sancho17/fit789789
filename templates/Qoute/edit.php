<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Qoute $qoute
 * @var string[]|\Cake\Collection\CollectionInterface $product
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $delivery
 */

echo $this->Html->css('/css/tables.css',['block' => true]);
echo $this->Html->script('/js/scripts.js',['block' => true]);
echo $this->Html->script('/js/bootstrapbundle.js',['block' => true]);
echo $this->Html->script('/js/simple.js',['block' => true]);
echo $this->Html->script('/js/datatables-simple-demo.js',['block' => true]);
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $qoute->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $qoute->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Qoute'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="qoute form content">
            <?= $this->Form->create($qoute) ?>
            <fieldset>
                <legend><?= __('Edit Qoute') ?></legend>
                <?php
                    echo $this->Form->control('prod_id', ['options' => $product]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('weight');
                    echo $this->Form->control('height');
                    echo $this->Form->control('width');
                    echo $this->Form->control('length');
                    echo $this->Form->control('amount');
                    echo $this->Form->control('address');
                    echo $this->Form->control('email');
                    echo $this->Form->control('delivery_id', ['options' => $delivery]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <script> 
    $(document).ready(function() {
  $('#dataTable').DataTable();
});

</script>
</div>
