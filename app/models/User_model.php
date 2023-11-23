<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
	public function Get_data(){
        return $this->db->table('admintbl')->get-All();
    }
    public function Store($username, $password){
        $data= array(
            'username'=> $username,
            'password'=> $password,
        );
        return $this->db->table('admintbl')->get_all();
    }
}
?>
