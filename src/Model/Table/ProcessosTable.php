<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;
 
class ProcessosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->addBehavior('Search.Search');
        
        $this->searchManager()
        
            // Pesquisar pelo nome

        /* ->add('nome_processo', 'Search.Like', [
            'before' => 'true',
            'after' => 'true',
            'fieldMode' => 'OR',
            'comparison' => 'LIKE',            
            'wildcardAny' => '*',
            'wildCardOne' => '?',
            'field' => ['nome_processo']
            ])
        ->add('foo', 'Search.Callback', [
            'callback' => function ($query, $args, $filter){
                    // modificar a query }
            ]);*/

            // Pesquisar pelo ano

            ->add('created', 'Search.Like', [
            'before' => 'true',
            'after' => 'true',
            'fieldMode' => 'OR',
            'comparison' => 'LIKE',            
            'wildcardAny' => '*',
            'wildCardOne' => '?',
            'field' => ['created']
            ])
        ->add('foo', 'Search.Callback', [
            'callback' => function ($query, $args, $filter){
                    // modificar a query            
                }
            ]);
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
        ->integer('id_processo')
        ->allowEmpty('id_processo', 'create');

        $validator
        ->requirePresence('nome_processo', 'create')
        ->notEmpty('nome_processo');

        return $validator;
    }
}
