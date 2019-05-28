<?php


class Person extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('person_model');

    }

    public function index(){


        $list = $this->person_model->get_all();

        $viewData['list']=$list;

        $this->load->view('person_list',$viewData);
    }

    public function pdf_form($id){

        $where = array('id' => $id);

        $person_info = $this->person_model->get($where);
        $viewData['person_info'] = $person_info;


        $this->load->view('person_cert',$viewData);

    }








}


?>