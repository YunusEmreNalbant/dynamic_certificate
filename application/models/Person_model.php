<?php


class Person_model extends CI_Model{

    public function get_all(){

        $result =  $this->db->get('person')->result();

        return $result;

    }

    public function get($where){

        $result = $this->db->where($where)->get('person')->row();

        return $result;
    }

}


?>