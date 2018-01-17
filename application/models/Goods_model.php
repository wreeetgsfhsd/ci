<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:18
 */


class Goods_model extends CI_Model{
    public $id;
    public $name;
    public $price;
    public function __construct() {
        $this->load->database();
    }

    /**
     * @return mixed
     */
    public function findAll(){
        $query = $this->db->get('goods');
        return $query->result_array();
    }
    public function add($data){
        $this->db->insert('goods',$data);
    }
    public function delete($id){
       $this->db->delete('goods',array('id'=>$id));
    }
    public function findById($id){
        $query = $this->db->get_where('goods', array('id' => $id));
        return $query->row_array();
    }
    public function update($data){
        $this->db->update('goods',$data ,array('id' => $data['id']));
    }
    function  gettotal()
    {
        $query=$this->db->query("SELECT count(*) total FROM goods");
        return $query->result();
    }

}