<?php
App::uses('AppController','Controller','File','Utility');
class CardsController extends AppController {

    function delete_category(){
		$categories = $this->Category->find('list');
		$this->set(compact('categories'));
		if (isset($this->request->data['submit1'])) {
			$this->Category->delete($this->data['Category']['category_id']);
			$this->flash('Categoria eliminado con exito','/Products/index');
		}
    }//fin de delete

    function add_card() {

        if (isset($this->request->data['submit1'])) {
            if (!empty($this->data)) {
                if ($this->Card->save($this->request->data)) {
					$this->Card->savefield ('user_id',$this->Session->read('Auth.User.id'));
                    $this->flash('Tarjeta añadida','/products/add');
                }
            }
        }

    }//fin de add

}