<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Delivery $delivery
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Delivery'), ['action' => 'edit', $delivery->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Delivery'), ['action' => 'delete', $delivery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $delivery->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Delivery'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Delivery'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="delivery view content">
            <h3><?= h($delivery->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($delivery->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($delivery->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Qoute') ?></h4>
                <?php if (!empty($delivery->qoute)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Prod Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Weight') ?></th>
                            <th><?= __('Height') ?></th>
                            <th><?= __('Width') ?></th>
                            <th><?= __('Length') ?></th>
                            <th><?= __('Amount') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Delivery Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($delivery->qoute as $qoute) : ?>
                        <tr>
                            <td><?= h($qoute->id) ?></td>
                            <td><?= h($qoute->prod_id) ?></td>
                            <td><?= h($qoute->user_id) ?></td>
                            <td><?= h($qoute->weight) ?></td>
                            <td><?= h($qoute->height) ?></td>
                            <td><?= h($qoute->width) ?></td>
                            <td><?= h($qoute->length) ?></td>
                            <td><?= h($qoute->amount) ?></td>
                            <td><?= h($qoute->address) ?></td>
                            <td><?= h($qoute->email) ?></td>
                            <td><?= h($qoute->delivery_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Qoute', 'action' => 'view', $qoute->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Qoute', 'action' => 'edit', $qoute->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Qoute', 'action' => 'delete', $qoute->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qoute->id)]) ?>
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
