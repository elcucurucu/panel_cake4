<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @method \App\Model\Entity\Usuario newEmptyEntity()
 * @method \App\Model\Entity\Usuario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsuariosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('usuarios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 255)
            ->allowEmptyString('nombres');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 45)
            ->allowEmptyString('apellidos');

        $validator
            ->scalar('tipo_documento')
            ->maxLength('tipo_documento', 45)
            ->allowEmptyString('tipo_documento');

        $validator
            ->scalar('documento')
            ->maxLength('documento', 45)
            ->allowEmptyString('documento');

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

        $validator
            ->boolean('role')
            ->allowEmptyString('role');

        $validator
            ->dateTime('fecha_alta')
            ->allowEmptyDateTime('fecha_alta');

        $validator
            ->dateTime('fecha_pago')
            ->allowEmptyDateTime('fecha_pago');

        $validator
            ->scalar('codigo_referer')
            ->maxLength('codigo_referer', 45)
            ->allowEmptyString('codigo_referer');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 45)
            ->allowEmptyString('telefono');

        $validator
            ->scalar('linea')
            ->maxLength('linea', 45)
            ->allowEmptyString('linea');

        $validator
            ->integer('banco')
            ->allowEmptyString('banco');

        $validator
            ->boolean('estado_comision')
            ->allowEmptyString('estado_comision');

        $validator
            ->integer('nivel')
            ->allowEmptyString('nivel');

        $validator
            ->integer('config_moneda_pago')
            ->allowEmptyString('config_moneda_pago');

        return $validator;
    }
}
