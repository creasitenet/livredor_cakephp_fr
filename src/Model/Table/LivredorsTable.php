<?php
namespace App\Model\Table;

use App\Model\Entity\Bookmark;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class LivredorsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('livredors');
        $this->displayField('text');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }
		
    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            //->allowEmpty('pseudo')
            //->allowEmpty('text')
            //->allowEmpty('description')
            //->allowEmpty('url');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        //$rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }

}
