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
            <?= $this->Html->link(__('Edit Multimedia'), ['action' => 'edit', $multimedia->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Multimedia'), ['action' => 'delete', $multimedia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $multimedia->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Multimedia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Multimedia'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="multimedia view content">
            <h3><?= h($multimedia->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($multimedia->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($multimedia->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Categoria') ?></th>
                    <td><?= $this->Number->format($multimedia->id_categoria) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
