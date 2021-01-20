<?php
class Users extends CI_COntroller
{
    public function create(){
        $this->load->model('User_model');
  $this->form_validation->set_rules('username','username','required');
  $this->form_validation->set_rules('password','password','required');

  if($this->form_validation->run()==false){
 $this->load->view('views/create');
  }else{
      //save record to database
      $formArray=array();
      $formArray['username']=$this->input->post('username');
      $formArray['password']=$this->input->post('password');
      $this->User_model->create($formArray);
      $this->session->set_flashdata('success','Record added successfully');
    //    redirect(base_url().'codeig/users/create');
    }


   
    }
}

?>