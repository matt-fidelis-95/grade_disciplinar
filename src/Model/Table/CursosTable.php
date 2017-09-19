<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CursosTable extends Table{
	public function initialize(array $config){
		parent::initialize($config);
		
		$this->setTable('cursos');
		$this->setDisplayField('nome');
		$this->setPrimaryKey('id');
		
		$this->addBehavior('Timestamp');
		
		$this->hasMany('Disciplinas', ['foreignKey' => 'curso_id']);
	}
	public function validationDefault(Validator $validator){
		$validator->integer('id')->allowEmpty('id','create');
		$validator->scalar('nome')->requirePresence('nome','create')->notEmpty('nome');
		$validator->email('email')->requirePresence('email','create')->notEmpty('email');
		
		return $validator;
	} 
}
?>