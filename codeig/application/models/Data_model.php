<?php
class Data_model extends CI_Model{
    function insert_data($table,$data){
        //insert
        $this->db->insert($table,$data);
    }
     function get_table($table){
        //select
        $res=$this->db->get($table);
        return $res->result_array();
    }
     function remove_record($table,$id){
        //delete
        $this->db->where('id',$id);
        $this->db->delete($table);
    }
    function get_modify_data($table,$id){
        $this->db->where('id',$id);
        $res=$this->db->get($table);
        $data=$res->result_array();
        return $data[0];
    }
    function update_data($table,$data,$id){
        $this->db->where('id',$id);
        $this->db->update($table,$data);
    }
}
?>