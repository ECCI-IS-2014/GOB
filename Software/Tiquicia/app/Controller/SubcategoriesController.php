<?php
App::uses('AppController','Controller','File','Utility');
class SubcategoriesController extends AppController {


    function delete_subcategory(){
		$subcategories = $this->Subcategory->find('list');
		$this->set(compact('subcategories'));
		if (isset($this->request->data['submit1'])) {
			$this->Subcategory->delete($this->data['Subcategory']['subcategory_id']);
			$this->flash('Subcategoria eliminado con exito','/Products/index');
		}
    }//fin de delete
	
    function add_subcategory() {

        if (isset($this->request->data['submit1'])) {
            if (!empty($this->data)) {
                if ($this->Subcategory->save($this->request->data)) {
                    $this->flash('Subcategoria añadida','/products/add');
                }
            }
        }

    }//fin de add

}