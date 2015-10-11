<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= $this->Number->format($user->password) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('First Name') ?></h4>
        <?= $this->Text->autoParagraph(h($user->first_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Last Name') ?></h4>
        <?= $this->Text->autoParagraph(h($user->last_name)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Notes') ?></h4>
        <?php if (!empty($user->notes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Note') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->notes as $notes): ?>
            <tr>
                <td><?= h($notes->id) ?></td>
                <td><?= h($notes->user_id) ?></td>
                <td><?= h($notes->note) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Notes', 'action' => 'view', $notes->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Notes', 'action' => 'edit', $notes->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notes', 'action' => 'delete', $notes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notes->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
