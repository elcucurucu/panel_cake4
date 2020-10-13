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
            <?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios view content">
            <h3><?= h($usuario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombres') ?></th>
                    <td><?= h($usuario->nombres) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($usuario->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Documento') ?></th>
                    <td><?= h($usuario->tipo_documento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Documento') ?></th>
                    <td><?= h($usuario->documento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo Referer') ?></th>
                    <td><?= h($usuario->codigo_referer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($usuario->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Linea') ?></th>
                    <td><?= h($usuario->linea) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Banco') ?></th>
                    <td><?= $this->Number->format($usuario->banco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nivel') ?></th>
                    <td><?= $this->Number->format($usuario->nivel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Config Moneda Pago') ?></th>
                    <td><?= $this->Number->format($usuario->config_moneda_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Alta') ?></th>
                    <td><?= h($usuario->fecha_alta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Pago') ?></th>
                    <td><?= h($usuario->fecha_pago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $usuario->status ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $usuario->role ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado Comision') ?></th>
                    <td><?= $usuario->estado_comision ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
