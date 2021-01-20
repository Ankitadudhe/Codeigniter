<?php 
class Bill extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Data_model','data');
    }
    public function index()
    {
        $info['bill']=$this->data->get_table('bill_detail');
        $this->load->view('bill',$info);
    }
    public function add_bill(){
        $data=array(
            'customer_name'=>$this->input->post('custName'),
            'customer_no'=>$this->input->post('custNumber'),
            'mobile'=>$this->input->post('custMobile'),
            'amount'=>$this->input->post('billAmount'),
            'date'=>$this->input->post('billDate'),

        );
        $this->data->insert_data('bill_detail',$data);
        header('location:' .base_url().'bill');
    }
    public function update_bill(){
        $id=$this->input->post('hid');
          $data=array(
            'customer_name'=>$this->input->post('custName'),
            'customer_no'=>$this->input->post('custNumber'),
            'mobile'=>$this->input->post('custMobile'),
            'amount'=>$this->input->post('billAmount'),
            'date'=>$this->input->post('billDate'),

        );
        $this->data->update_data('bill_detail',$data,$id);
        header('location:' .base_url().'bill');
    }
    public function modify(){
        $id=$this->uri->segment(3);
        $info['modify']=$this->data->get_modify_data('bill_detail',$id);
         $info['bill']=$this->data->get_table('bill_detail');
         $this->load->view('bill',$info);
    }
    public function remove(){
       $id=$this->uri->segment(3);
       $this->data->remove_record('bill_detail',$id);
       header('location:' .base_url().'bill');

    }
}
?>

