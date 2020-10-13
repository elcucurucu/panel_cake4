<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Multimedia $multimedia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $multimedia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $multimedia->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Multimedia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="multimedia form content">
            <?= $this->Form->create($multimedia) ?>
            <fieldset>
                <legend><?= __('Edit Multimedia') ?></legend>
                <?php
                    echo $this->Form->control('url');
                    echo $this->Form->control('id_categoria');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
