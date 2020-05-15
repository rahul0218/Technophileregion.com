<?php
    class Auser extends CI_Controller{
        public function view($page = 'login'){           
            $this->load->view('admin/auser/login');            
        }

        //Login users
        public function login(){
            $data['title'] = 'Sign In'; 
 
            
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
            
             if($this->form_validation->run() === FALSE){
                 
                 $this->load->view('admin/auser/login', $data);
                 
 
            }else{
                // Get username
                $username = $this->input->post('username');
                //get and encrypt password
                $password = $this->input->post('password'); 
                //Login user
                $user_id = $this->auser_model->login($username, $password);
                
                
               
                if($user_id){
                    //create session
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'logged_in' => true
                    );
                    $this->session->set_userdata($user_data);             
                    

                    //Set message
                    $this->session->set_flashdata('user_loggedin','You\'re now loggedin');
 
                 redirect('admin/index');

                }else{
                    //Set message
                 $this->session->set_flashdata('login_failed','Login is invalid');
 
                 redirect('admin/login');

                }
                 
            }
         }

         //Log user out
         public function logout(){
            //Unset user data
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');
            //Set message
            $this->session->set_flashdata('user_loggedout','You\'re now logged out');
            
            redirect('admin');
        }
    }
