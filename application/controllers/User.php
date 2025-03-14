<?php
class User extends CI_Controller
{
    function  __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

    }


    function delete($id)
    {
        if(is_numeric($id))
        {
            $status = $this->user_model->deleteUser($id);
           if ($status == true) {
            $this->session->set_flashdata('deleted', 'successfully Deleted');
            redirect(base_url('user/index/'));
        }
        else
        {
            $this->session->set_flashdata('error', 'Error');
            redirect(base_url('user/index/'));
        }   
        }
    
    
    }

    function edit($id)
    {
        $data['user'] = $this->user_model->getUser($id);
        $data['id'] = $id;
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $address = $this->input->post('address');
            $data =array(
                'username'=>$username, 
                'email'=>$email,
                'mobile'=>$mobile,
                'address'=>$address,
            );

            $status = $this->user_model->updateUser($data, $id);
            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Updated');
                redirect(base_url('user/edit/'.$id));
            }
            else
            {
                $this->session->set_flashdata('error', 'Error');
                $this->load->view('user/edit_user');
            }   
    }
    
    $this->load->view('user/edit_user',$data);
    
}



    function index()
    {
        $data['users'] = $this->user_model->getUsers();
        $this->load->view('user/index',$data);
    }

    

    function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        
            $username = trim($this->input->post('username'));
            $email = trim($this->input->post('email'));
            $mobile = trim($this->input->post('mobile'));
            $address = trim($this->input->post('address'));
    
            if (empty($username) || empty($email) || empty($mobile) || empty($address)) {
                $this->session->set_flashdata('error', 'All fields are required.');
                redirect(base_url('user/add'));
            }
    
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->session->set_flashdata('error', 'Invalid email format.');
                redirect(base_url('user/add'));
            }
    
            if (!ctype_digit($mobile)) {
                $this->session->set_flashdata('error', 'Mobile number must contain only numbers.');
                redirect(base_url('user/add'));
            }
    
            $data = array(
                'username' => $username,
                'email'    => $email,
                'mobile'   => $mobile,
                'address'  => $address,
            );
    
            $status = $this->user_model->insertUser($data);
            if ($status == true) {
                $this->session->set_flashdata('success', 'User successfully added.');
                redirect(base_url('user/add'));
            } else {
                $this->session->set_flashdata('error', 'Error adding user.');
                $this->load->view('user/add_user');
            }
        } else {
            $this->load->view('user/add_user');
        }
    }
    
    

}
