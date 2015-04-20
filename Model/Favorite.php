<?php
App::uses('AppModel', 'Model');
/**
 * Favorite Model
 *
 * @property TbLawdatum $TbLawdatum
 * @property User $User
 */
class Favorite extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'favorite';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'i_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TbLawdatum' => array(
			'className' => 'TbLawdatum',
			'foreignKey' => 'i_deka'
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'i_user_id'
		)
	);

	public function addFavorite($i_deka,$i_user_id){
		if (empty($i_deka) || empty($i_user_id)) {
			return false;
		}
		$data = array(
			'i_deka' => $i_deka,
			'i_user_id' => $i_user_id
		);
		return $this->save($data);
	}
}
