<?php
App::uses('AppController','Controller','File','Utility');
class ProductsController extends AppController {

    public $components = array(
        'Search.Prg'
    );


	/*public function index() {
        if ($this->Session->read('Auth.User.role')==='admin'){
            $this->set('products', $this->Product->find('all'));
        }else{
            $this->set('products', $this->Product->find('all', array(
                'conditions'=>array('Product.state'=>'1'))));
        }
	}//fin de index*/
	
	public function view($id) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		
		$product = $this->Product->read(null,$id);
		$this->set(compact('product'));
	}
    public function index() {
        if ($this->Session->read('Auth.User.role')==='admin'){
        $this->Prg->commonProcess();
        $this->paginate = array(
            'conditions' => $this->Product->parseCriteria($this->passedArgs));
        $this->set('products', $this->paginate());
        }
        else{

            $this->Prg->commonProcess();
            $this->paginate = array(
                'conditions' => array($this->Product->parseCriteria($this->passedArgs),'Product.state'=>'1'));
            $this->set('products', $this->paginate());
        }
    }//fin de index


    public function busqueda() {
        $this->Prg->commonProcess();
        $this->paginate = array(
            'conditions' => $this->Product->parseCriteria($this->passedArgs));
        $this->set('products', $this->paginate());
    }//fin de index

    function delete(){


        if (!empty($this->data)) {

            $pd = $this->Product->read(null,$this->data['Product']['id']);

            $this->set('product',$pd);

            $this->Product->delete($this->request->data('product.id'));

            $this->flash('Producto eliminado con exito','/products/index');

        }

    }//fin de delete
	function searchInfo($products){

       $this->loadModel('User');
        $this->loadModel('Wish');

        if (!empty($products)) {

            $result = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$products)));

            $result2 = $this->User->find('first', array(
                'conditions'=>array('User.id'=>$this->Auth->user('id'))));

            $result3 = $this->Wish->find('first', array(
                'conditions'=>array('Wish.product_id'=>$products, 'Wish.user_id'=>$this->Auth->user('id'))));


            if(sizeof($result) >= 1){

                $this->set('products', $result);
                $this->set('users', $result2);
                $this->set('wishes', $result3);

            }
            else{

                $this->flash('id producto incorrecto','/products/index');
            }

        }//fin de if

    }//fin de searchUpdate
    function searchDelete($products){

        if (!empty($products)) {

            $result = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$products)));


            if(sizeof($result) >= 1){

                $this->set('products', $result);

            }
            else{

                $this->flash('id producto incorrecto','/products/index');
            }

        }//fin de if

    }//fin de searchUpdate

    function update(){
		
        pr($this->data);
		
        if($this->request->is('post') || $this->request->is('put')) {

            $this->Product->create();

            $result1 = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$this->data['Product']['id'])));

			
            if(empty($this->data['Product']['filename']['name'])){

                $this->Product->id = $this->data['Product']['id'];

                //$this->Product->id ['Product']['id'] = $this->data['Product']['id'];
                $this->Product->savefield ('name',$this->data['Product']['name']);
                //$this->Product->id ['Product']['category'] = $this->data['Product']['category'];
                $this->Product->savefield('category',$this->data['Product']['category']);
                //$this->Product->id ['Product']['subcategory'] = $this->data['Product']['subcategory'];
                $this->Product->savefield('subcategory',$this->data['Product']['subcategory']);
                //$this->Product->id ['Product']['subsubcategory'] = $this->data['Product']['subsubcategory'];
                $this->Product->savefield('subsubcategory',$this->data['Product']['subsubcategory']);
                //$this->Product->id ['Product']['type'] = $this->data['Product']['type'];
                $this->Product->savefield('type',$this->data['Product']['type']);
                //$this->Product->id ['Product']['price'] = $this->data['Product']['price'];
                $this->Product->savefield ('price',$this->data['Product']['price']);
                //$this->Product->id ['Product']['weight'] = $this->data['Product']['weight'];
                $this->Product->savefield ('weight',$this->data['Product']['weight']);
                //$this->Product->id ['Product']['unit'] = $this->data['Product']['unit'];

                //$this->Product->id ['Product']['created'] = $this->data['Product']['created'];
                $this->Product->savefield ('created',$this->data['Product']['created']);
                //$this->Product->id ['Product']['update'] = $this->data['Product']['update'];
                $this->Product->savefield ('update',$this->data['Product']['update']);
                //$this->Product->id ['Product']['keywords'] = $this->data['Product']['keywords'];
                $this->Product->savefield ('keywords',$this->data['Product']['keywords']);
                //$this->Product->id ['Product']['stock'] = $this->data['Product']['stock'];
                $this->Product->savefield ('stock',$this->data['Product']['stock']);
                //$this->Product->id ['Product']['state'] = $this->data['Product']['state'];
                $this->Product->savefield('state',$this->data['Product']['state']);
                //$this->Product->id ['Product']['volumen'] = $this->data['Product']['volumen'];
                $this->Product->savefield ('volumen',$this->data['Product']['volumen']);
				$this->Product->savefield('category_id',$this->data['Product']['category_id']);
				$this->Product->savefield('subcategory_id',$this->data['Product']['subcategory_id']);
				$this->Product->savefield('subsubcategory_id',$this->data['Product']['subsubcategory_id']);
				

            }else{//caso donde debe cambiar la imagen


                $image1 =  $result1['Product']['filename'];

                $this->Product->id = $this->data['Product']['id'];

                //$this->Product->id ['Product']['id'] = $this->data['Product']['id'];
                $this->Product->savefield ('name',$this->data['Product']['name']);
                //$this->Product->id ['Product']['category'] = $this->data['Product']['category'];
                $this->Product->savefield('category',$this->data['Product']['category']);
                //$this->Product->id ['Product']['subcategory'] = $this->data['Product']['subcategory'];
                $this->Product->savefield('subcategory',$this->data['Product']['subcategory']);
                //$this->Product->id ['Product']['subsubcategory'] = $this->data['Product']['subsubcategory'];
                $this->Product->savefield('subsubcategory',$this->data['Product']['subsubcategory']);
                //$this->Product->id ['Product']['type'] = $this->data['Product']['type'];
                $this->Product->savefield('type',$this->data['Product']['type']);
                //$this->Product->id ['Product']['price'] = $this->data['Product']['price'];
                $this->Product->savefield ('price',$this->data['Product']['price']);
                //$this->Product->id ['Product']['weight'] = $this->data['Product']['weight'];
                $this->Product->savefield ('weight',$this->data['Product']['weight']);
                //$this->Product->id ['Product']['unit'] = $this->data['Product']['unit'];
                $this->Product->savefield ('filename',$this->data['Product']['filename']);

                $this->Product->savefield ('unit',$this->data['Product']['unit']);
                //$this->Product->id ['Product']['created'] = $this->data['Product']['created'];
                $this->Product->savefield ('created',$this->data['Product']['created']);
                //$this->Product->id ['Product']['update'] = $this->data['Product']['update'];
                $this->Product->savefield ('update',$this->data['Product']['update']);
                //$this->Product->id ['Product']['keywords'] = $this->data['Product']['keywords'];
                $this->Product->savefield ('keywords',$this->data['Product']['keywords']);
                //$this->Product->id ['Product']['stock'] = $this->data['Product']['stock'];
                $this->Product->savefield ('stock',$this->data['Product']['stock']);
                //$this->Product->id ['Product']['state'] = $this->data['Product']['state'];
                $this->Product->savefield('state',$this->data['Product']['state']);
                //$this->Product->id ['Product']['volumen'] = $this->data['Product']['volumen'];
                $this->Product->savefield ('volumen',$this->data['Product']['volumen']);
				$this->Product->savefield('category_id',$this->data['Product']['category_id']);
				$this->Product->savefield('subcategory_id',$this->data['Product']['subcategory_id']);
				$this->Product->savefield('subsubcategory_id',$this->data['Product']['subsubcategory_id']);

                $result2 = $this->Product->find('first', array(
                    'conditions'=>array('Product.id'=>$this->data['Product']['id'])));


                $file = new File(WWW_ROOT . $result2['Product']['dir'].DS.$image1, false, 0777);


                if($file->delete()) {


                    move_uploaded_file($this->data['Product']['filename']['tmp_name'], WWW_ROOT .DS.$result2['Product']['dir'].DS. $this->data['Product']['filename']['name']);

                }
                else{

                    $this->flash('Producto NO actualizado','/products/index');

                }

            }
			
            $ret = $this->data;
            $result = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$this->data['Product']['id'])));

            if ( $ret ) {


                $this->flash('Producto actualizado con exito','/products/index');
            }
            else{

                $this->flash('Producto NO actualizado','/products/index');

            }
			
        }
		

    }//fin de update


    function searchUpdate($products){
		$categories = $this->Product->Category->find('list');
		$this->set(compact('categories'));
		$subcategories = $this->Product->Subcategory->find('list');
		$this->set(compact('subcategories'));
		$subsubcategories = $this->Product->Subsubcategory->find('list');
		$this->set(compact('subsubcategories'));
		
        if (!empty($products)) {

            $result = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$products)));




            if( sizeof($result) >= 1 ){

                $this->set('products', $result);

            }

        }//fin de if
		

    }//fin de searchUpdate

function add() {
		$categories = $this->Product->Category->find('list');
		$this->set(compact('categories'));
		$subcategories = $this->Product->Subcategory->find('list');
		$this->set(compact('subcategories'));
		$subsubcategories = $this->Product->Subsubcategory->find('list');
		$this->set(compact('subsubcategories'));
        if (!empty($this->data)) {
            if ($this->Product->save($this->request->data)) {
                $this->flash('Producto añadido','/products');
            }
        }
}
	

    function description($products){
        if (!empty($products)) {

            $result = $this->Product->find('first', array(
                'conditions'=>array('Product.id'=>$products)));


            if(sizeof($result) >= 1){

                $this->set('products', $result);

            }
            else{

                $this->flash('id producto incorrecto','/products/index');
            }

        }//fin de if
    }

}