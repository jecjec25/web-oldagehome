<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller {
    public function __construct()
    {
        parent:: __construct();
        $this->call->model('User_model');
    }

    public function get(){
        $data['users'] = $this->User_model->Get_data();
        return $this->call->view('user/login');
    }

	public function login(){
        $username = $this->io->post('username');
        $password = $this->io->post('password');

        $this->User_model->save($username, $password);

    }
}
?>
