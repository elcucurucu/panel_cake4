<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios form content">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <legend><?= __('Add Usuario') ?></legend>
                <?php
                    echo $this->Form->control('nombres');
                    echo $this->Form->control('apellidos');
                    echo $this->Form->control('tipo_documento');
                    echo $this->Form->control('documento');
                    echo $this->Form->control('status');
                    echo $this->Form->control('role');
                    echo $this->Form->control('fecha_alta', ['empty' => true]);
                    echo $this->Form->control('fecha_pago', ['empty' => true]);
                    echo $this->Form->control('codigo_referer');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('linea');
                    echo $this->Form->control('banco');
                    echo $this->Form->control('estado_comision');
                    echo $this->Form->control('nivel');
                    echo $this->Form->control('config_moneda_pago');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
