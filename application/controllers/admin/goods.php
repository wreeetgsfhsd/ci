<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 22:16
 */
class Goods extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('goods_model');
        $this->load->helper('url_helper');
    }

    public function findAll(){
        $num=1;
        $this->load->library('pagination');
        $config['base_url'] = site_url('admin/goods/findAll/');
        $config['total_rows'] =10;
        $config['per_page'] =3;
        $this->pagination->initialize($config);
        $data['goods'] =  $this->goods_model->findAll();
        $this->load->view('goods/list',$data);
    }

    public function add(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('goods/add');
        } else {
            $data = array(
                'name' => $_POST['name'],
                'price'  => $_POST['price'],
                'id'  => $_POST['id']
            );
            $this->goods_model->add($data);
            $this->findAll();
        }
    }

    public function delete($id){
        $this->goods_model->delete($id);
        $this->findAll();
    }

    public function update($id){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        if ($this->form_validation->run() === FALSE) {
            $data['goods'] = $this->goods_model->findById($id);
            $this->load->view('goods/edit', $data);
        } else {
            $data = array(
                'id'   => $_POST['id'],
                'name' => $_POST['name'],
                'price'  => $_POST['price']
            );
            $this->goods_model->update($data);
            $this->findAll();
        }
    }

}