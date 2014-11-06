<?php
App::uses('AppController','Controller','File','Utility');
class SubsubcategoriesController extends AppController {


    function delete_subsubcategory(){
		$subsubcategories = $this->Subsubcategory->find('list');
		$this->set(compact('subsubcategories'));
		if (isset($this->request->data['submit1'])) {
			$this->Subsubcategory->delete($this->data['Subsubcategory']['subsubcategory_id']);
			$this->flash('Subsubcategoria eliminado con exito','/Products/index');
		}
    }//fin de delete
	
    function add_subsubcategory() {

        if (isset($this->request->data['submit1'])) {
            if (!empty($this->data)) {
                if ($this->Subsubcategory->save($this->request->data)) {
                    $this->flash('Subsubcategoria añadida','/products/add');
                }
            }
        }

    }//fin de add

}