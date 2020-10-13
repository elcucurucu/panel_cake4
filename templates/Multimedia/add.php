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
            <?= $this->Html->link(__('List Multimedia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="multimedia form content">
            <?= $this->Form->create($multimedia) ?>
            <fieldset>
                <legend><?= __('Add Multimedia') ?></legend>
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
