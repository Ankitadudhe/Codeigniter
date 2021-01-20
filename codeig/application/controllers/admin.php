<?php 
class admin extends CI_Controller
{
 public function login()
 {
     $data['title']='Login Form';
     $this->load->view("login",$data);
 }
   function login_validation()  
      {  
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('customername', 'customername', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $customername = $this->input->post('customername');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('main_model');  
                if($this->main_model->can_login($customername, $password))  
                {  
                     $session_data = array(  
                          'customername' =>$customername  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'main/enter');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid customername and Password');  
                     redirect(base_url() . 'main/login');  
                }  
           }  
           else  
           {  
                //false  
                $this->login();  
           }  
      }  
      function enter(){  
           if($this->session->userdata('customername') != '')  
           {  
                echo '<h2>Welcome - '.$this->session->userdata('customername').'</h2>';  
                echo '<label><a href="'.base_url

().'main/logout">Logout</a></label>';  
           }  
           else  
           {  
                redirect(base_url() . 'main/login');  
           }  
      }  
      function logout()  
      {  
           $this->session->unset_userdata('customername');  
           redirect(base_url() . 'main/login');  
      }  
 }  
?>