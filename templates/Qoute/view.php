<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Qoute $qoute
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Qoute'), ['action' => 'edit', $qoute->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Qoute'), ['action' => 'delete', $qoute->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qoute->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Qoute'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Qoute'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="qoute view content">
            <h3><?= h($qoute->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $qoute->has('product') ? $this->Html->link($qoute->product->name, ['controller' => 'Product', 'action' => 'view', $qoute->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $qoute->has('user') ? $this->Html->link($qoute->user->id, ['controller' => 'Users', 'action' => 'view', $qoute->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($qoute->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($qoute->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Delivery') ?></th>
                    <td><?= $qoute->has('delivery') ? $this->Html->link($qoute->delivery->name, ['controller' => 'Delivery', 'action' => 'view', $qoute->delivery->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($qoute->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weight') ?></th>
                    <td><?= $this->Number->format($qoute->weight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Height') ?></th>
                    <td><?= $this->Number->format($qoute->height) ?></td>
                </tr>
                <tr>
                    <th><?= __('Width') ?></th>
                    <td><?= $this->Number->format($qoute->width) ?></td>
                </tr>
                <tr>
                    <th><?= __('Length') ?></th>
                    <td><?= $this->Number->format($qoute->length) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($qoute->amount) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Orders') ?></h4>
                <?php if (!empty($qoute->orders)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Qoute Id') ?></th>
                            <th><?= __('Total Fee') ?></th>
                            <th><?= __('Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($qoute->orders as $orders) : ?>
                        <tr>
                            <td><?= h($orders->id) ?></td>
                            <td><?= h($orders->qoute_id) ?></td>
                            <td><?= h($orders->total_fee) ?></td>
                            <td><?= h($orders->date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
