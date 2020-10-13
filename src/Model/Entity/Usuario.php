<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string|null $nombres
 * @property string|null $apellidos
 * @property string|null $tipo_documento
 * @property string|null $documento
 * @property bool|null $status
 * @property bool|null $role
 * @property \Cake\I18n\FrozenTime|null $fecha_alta
 * @property \Cake\I18n\FrozenTime|null $fecha_pago
 * @property string|null $codigo_referer
 * @property string|null $telefono
 * @property string|null $linea
 * @property int|null $banco
 * @property bool|null $estado_comision
 * @property int|null $nivel
 * @property int|null $config_moneda_pago
 */
class Usuario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombres' => true,
        'apellidos' => true,
        'tipo_documento' => true,
        'documento' => true,
        'status' => true,
        'role' => true,
        'fecha_alta' => true,
        'fecha_pago' => true,
        'codigo_referer' => true,
        'telefono' => true,
        'linea' => true,
        'banco' => true,
        'estado_comision' => true,
        'nivel' => true,
        'config_moneda_pago' => true,
    ];
}
