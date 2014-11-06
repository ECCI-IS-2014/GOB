<?php
App::uses('AppController','Controller','File','Utility');
class CategoriesController extends AppController
{
    var $name = 'categories';

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

    public function index()
    {
        if ($this->Session->read('Auth.User.role') === 'admin') {
            $this->Prg->commonProcess();
            $this->paginate = array(
                'conditions' => $this->Product->parseCriteria($this->passedArgs));
            $this->set('products', $this->paginate());
        } else {

            $this->Prg->commonProcess();
            $this->paginate = array(
                'conditions' => array($this->Product->parseCriteria($this->passedArgs), 'Product.state' => '1'));
            $this->set('products', $this->paginate());
        }

    }//fin de index


    function delete()
    {


        if (!empty($this->data)) {

            $pd = $this->category->read(null, $this->data['Category']['id']);

            $this->set('category', $pd);

            $this->category->delete($this->request->data('category.id'));

            $this->flash('Categoria eliminada con exito', '/products/index');

        }

    }//fin de delete

    function add_category()
    {

        if (isset($this->request->data['submit1'])) {
            if (!empty($this->data)) {
                if ($this->Category->save($this->request->data)) {
                    $this->flash('Categoria añadida', '/products/add');
                }
            }
        } else {
            $selectsData['select_a'] = $this->selectorDependiente('ops');
            $this->set('selector', $selectsData);
        }

    }//fin de add

    function delete_category()
    {

        if (isset($this->request->data['submit1'])) {
            $this->delete('category_id');
        } else {
            $selectsData['select_a'] = $this->selectorDependiente('ops');
            $this->set('selector', $selectsData);
        }

    }//fin de add

    function description($categories)
    {
        if (!empty($categories)) {

            $result = $this->Product->find('first', array(
                'conditions' => array('Category.id' => $products)));


            if (sizeof($result) >= 1) {

                $this->set('categories', $result);

            } else {

                $this->flash('id categoria incorrecta', '/products/index');
            }

        }//fin de if
    }



}