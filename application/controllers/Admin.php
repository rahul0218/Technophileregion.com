<?php
    class Admin extends CI_Controller{
        public function view($page = 'index'){
            if(!file_exists(APPPATH.'views/admin/apages/'.$page.'.php')){
                show_404();
            }

            $data['title'] = ucfirst($page);


            $this->load->view('admin/atemplates/header');
            //$this->load->view('admin/index');
            $this->load->view('admin/apages/'.$page, $data);
            $this->load->view('admin/atemplates/footer');
        }
    }