<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tags form large-9 medium-8 columns content">
    <?= $this->Form->create($tag) ?>
    <fieldset>
        <legend><?= __('Edit Tag') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('notes._ids', ['options' => $notes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
