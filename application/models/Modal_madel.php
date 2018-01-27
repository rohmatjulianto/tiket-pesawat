<?php
 class Modal_madel extends CI_Model{

    function masuk_pesan($data){
         $this->db->insert('pesan',$data);
    }

    function tampil_pesan(){
        return $this->db->get('pesan');
    }
    function hapus_pesan($id){
        $data = array('id' =>$id);
        $this->db->delete('pesan',$data);
    }
    function ganti_pesan(){
        $this->db->select('*');
        $this->db->from('pesan');
        $this->db->where('id');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }
    }
 }
?>