<?php
App::uses('AppModel', 'Model');
class Product extends AppModel {
	public $belongsTo = array(
        'Category' => array(
            'counterCache' => true,
        ),
		'Subcategory' => array(
            'counterCache' => true,
        ),
		'Subsubcategory' => array(
            'counterCache' => true,
        )
    );
    var $name = 'Product';
    var $validate = array(
        'name' => array(
            'rule' => array('maxLength', '40'),
            'allowEmpty' => false,
            'message' => 'Nombre no válido'
        ),
        'category' => array(
            'valid' => array(
                'rule' => array('inList', array('Futbol','Balonces','Tenis de Mesa','Volleyball')),
                'message' => 'Please enter a valid category',
                'allowEmpty' => false
            )
        ),
        'subcategory' => array(
            'valid' => array(
                'rule' => array('inList', array('Balones','Tacos','Tenis','Raquetas','Raquetas','Vestimenta','Mesas')),
                'message' => 'Please enter a valid category',
                'allowEmpty' => false
            )
        ),
        'subsubcategory' => array(
            'valid' => array(
                'rule' => array('inList', array('Barcelona','Adidas','Umbro','Mikasa','Tibhar','Donic',
                    'New Balance','Air Jordan','Pioner','Nike','Butterfly')),
                'message' => 'Please enter a valid category',
                'allowEmpty' => false
            )
        ),
        'type' => array(
            'rule' => array('maxLength', '20000'),
            'required' => true,
            'allowEmpty' => true,
            'message' => 'Máximo alcanzado'
        ),
        'price' => array(
            'rule' => array('double'),
            'allowEmpty' => true,
            'message' => 'Precio incorrecto'
        ),
        'weight' => array(
            'rule' => array('double'),
            'allowEmpty' => true,
            'message' => 'Digite un peso correcto'
        ),
        'unit' => array(
            'valid' => array(
                'rule' => array('inList', array('gramos', 'Kilogramos','Otros')),
                'message' => 'Please enter a valid unit',
                'allowEmpty' => false
            )
        ),
        'volumen' => array(
            'rule' => array('maxLength', '20000'),
            'allowEmpty' => false,
            'message' => 'Digite un volumen correcto'
        ),
        'stock' => array(
            'rule' =>array('int'),
            'allowEmpty' => false,
            'message' => 'Digite la cantidad en stock correcta'
        ),
        'keywords' => array(
            'rule' => array('maxLength', '2000'),
            'required' => true,
            'allowEmpty' => true,
            'message' => 'Max 2000 caracteres'
        ),
        'state' => array(
            'rule' => array('alphaNumeric'),
            'allowEmpty' => false,
        )

    );
    var $actsAs = array(
        'MeioUpload' => array('filename'),
        'Search.Searchable'
    );

    public $filterArgs = array(
        'Search' => array(
            'type' => 'like',
            'field' => array('category','name','keywords')
        ),
        'category' => array(
            'type' => 'like',
            'field' => array('category')
        ),
        'subcategory' => array(
            'type' => 'like',
            'field' => array('subcategory')
        ),
        'subsubcategory' => array(
            'type' => 'like',
            'field' => array('subsubcategory')
        )
    );


    //Funciones para pruebas unitarias

    //Probando:Obtener todo de la base de datos.
    public function getAllProducts() {
        return $this->find('all', array(
            'fields' => array('id', 'name',
                'category','type','price', 'stock',
                'weight','filename','dir',
                'created','keywords','volumen')
        ));
    }


    //Probando:Obtener todo de la base de datos según Id.
    public function getProductsFiltrados($id = null) {
        return $this->find('first', array(
            'conditions' => array('id' => $id)
        ));
    }
}