<?php
 class Modal_madel extends CI_Model{

    function hapus_rute($id){
        $data = array('id' =>$id);
        $this->db->delete('rute',$data);
    }
    function ganti_rute($id){
        $this->db->where('id',$id);
        $query = $this->db->get('rute');
        return $query->row();
    }
    function update_rute($id,$data){
        $this->db->update('rute',$data, 'id = '.$id);
    }

    function tampil_rute(){
        return $this->db->get('rute');
    }

    function tambah_rute($data){
        $this->db->insert('rute',$data);
    }
//diatas ini untuk bagian rute
// admin
    function getdatalogin($user,$pass){
        $u = mysql_real_escape_string($user);
        $p = md5(mysql_real_escape_string($pass));
        $kulonuwun = $this->db->get_where('tb_user', array(
            'username' => $u,
            'password' => $p));
            if($kulonuwun->num_rows()> 0){
                $anjay = $kulonuwun->row();
                if ($u == $anjay->username && $p == $anjay->password) {
                    if ($anjay->level == 1) 
                        header('location:'.base_url().'admin');
                    else
                        header('location :'.base_url());
                    
                    }
                }
            }
            
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
    function ganti_pesan($id){
        $this->db->where('id',$id);
        $query = $this->db->get('pesan');
        return $query->row();
    }
    function update($id,$data){
        $this->db->update('pesan',$data, 'id = '.$id);
    }
 }
?>