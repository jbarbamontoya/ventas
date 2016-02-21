<?php
class Cliente extends AppModel
{
	public $validate = array(

			'codigo' => array(
			'notEmpty' => array(
							'rule' => 'notEmpty'
						),
			),

			'documento' => array(
					'notEmpty' => array(
							'rule' => 'notEmpty'
						),
					'numeric' => array(
							'rule' => 'numeric',
							'message' => 'Solo números'
						),
					'unique' => array(
							'rule' => 'isUnique',
							'message' => 'El DNI ya se encuentra en nuestra base de datos'
						),
				),

			'nombre' => array(
					'rule' => 'notEmpty'
				),

			'categoria' =>array(
					'rule' => 'notEmpty'
				),


			'tarifa' => array(
					'rule' => 'notEmpty'
				),

			'codigosbs' => array(
					'notEmpty' => array(
							'rule' => 'notEmpty'
						),
					'numeric' => array(
							'rule' => 'numeric',
							'message' => 'Solo números'
						),
					'unique' => array(
							'rule' => 'isUnique',
							'message' => 'El codigo sbs ya se encuentra registrado'
						),
				),

			'direccion' => array(
					'rule' => 'notEmpty'
				),

			'codpostal' => array(
					'rule' => 'notEmpty'
				),
			
			'telefono' => array(
					'notEmpty' => array(
							'rule' => 'notEmpty'
						),
					'numeric' => array(
							'rule' => 'numeric',
							'message' => 'Solo números'
						)
				),
		);


}
?>