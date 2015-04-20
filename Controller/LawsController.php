<?php
App::uses('AppController', 'Controller');
/**
 * Groups Controller
 *
 * @property Group $Group
 * @property PaginatorComponent $Paginator
 */
class LawsController extends AppController
{
/**
 * Components
 *
 * @var array
 */
    public $components = array('Paginator', 'Condition');
    public $uses = array('TbLawdatum');

/**
 * index method
 *
 * @return void
 */
    public function admin_index()
    {
        $this->TbLawdatum->recursive = 0;
        $this->set('lawdata', $this->Paginator->paginate());
    }


    public function search() 
    {

        $this->set('title_for_layout', 'Search');
        
        $conditions = 
        array( 'OR' => 
        array(
                'TbLawdatum.c_name like ?' => array('TbLawdatum.search'),
                'TbLawdatum.c_desc like ?' => array('TbLawdatum.search'),
                'TbLawdatum.c_comment like ?' => array('TbLawdatum.search'),
        ));

        $this->Paginator->settings = array(
                'paramType' => 'querystring',
                'fields' => array(
                        'TbLawdatum.i_id',
                        'TbLawdatum.c_name',
                        'TbLawdatum.c_desc', 
                        'TbLawdatum.c_comment'
                ),
                'limit' => 10, 
                'order' => array(
                        'TbLawdatum.c_name' => 'DESC'
                ),
                'conditions' => $this->Condition->createConditions($conditions) 
        );
        try {
            $this->set('laws', $this->Paginator->paginate('TbLawdatum'));
        } catch (NotFoundException $e) {
            $this->redirect(array('action' => 'admin_index', 'admin' => true));
        }
    

    }

    public function view($id) {
        if (empty($id)) {
            $this->redirect(array('action' => 'search', 'admin' => false));
        }

        $data = $this->TbLawdatum->find('first',array('conditions' => array('i_id' => $id)));
        if (empty($data)) {
            $this->redirect(array('action' => 'search', 'admin' => false));
        }

        $this->set('law',$data);

    }

    public function bookmarkLaw($id){
        $this->redirect($this->request->referer());
    }

}