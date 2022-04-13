<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StonetypeProduct Model
 *
 * @property \App\Model\Table\StoneTypeTable&\Cake\ORM\Association\BelongsTo $StoneType
 * @property \App\Model\Table\ProductTable&\Cake\ORM\Association\BelongsTo $Product
 *
 * @method \App\Model\Entity\StonetypeProduct newEmptyEntity()
 * @method \App\Model\Entity\StonetypeProduct newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\StonetypeProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StonetypeProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\StonetypeProduct findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\StonetypeProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StonetypeProduct[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StonetypeProduct|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StonetypeProduct saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StonetypeProduct[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StonetypeProduct[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\StonetypeProduct[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StonetypeProduct[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class StonetypeProductTable extends Table
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

        $this->setTable('stonetype_product');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('StoneType', [
            'foreignKey' => 'stonetype_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Product', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('stonetype_id', 'StoneType'), ['errorField' => 'stonetype_id']);
        $rules->add($rules->existsIn('product_id', 'Product'), ['errorField' => 'product_id']);

        return $rules;
    }
}
