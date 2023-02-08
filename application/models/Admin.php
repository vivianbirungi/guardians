
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Model {
    public $table;
    public $primary_key;
    public $order_by;

    function __construct(){
        parent::__construct();
        $this->table = "admins";
        $this->primary_key = "id";
    }

    function adminLogin(){
        $email = $this->input->post('email');
        $password = hash('SHA1', $this->input->post('password') . config_item('mkd'));
        $search = array('email'=>$email, 'password'=>$password);
		$query = $this->db->get_where('admins', $search);
        $user = $query->row_array();
        if($user){
        $token = $_SESSION['__ci_last_regenerate'];
				$data = array(
						'logged_in' => TRUE,
						'user_id' => $user['id'],
						'email' => $user['email'],
						'access' => 1,
						'token' => $token
					);
                $this->session->set_userdata($data);
				$result['status'] = 'success';
				$result['msg'] = 'Successfully logged in';
       
    }
     else {
    $result['msg']= '
							<div class="uk-alert uk-alert-danger" data-uk-alert>
								<a href="#" class="uk-alert-close uk-close"></a>
								<h4 class="heading_b">Login Failed</h4>
								Email/Password is invalid. 
							</div>';
			$result['error'] = 'Email/Password is invalid';
}
return $result;

}
    function uploadPortifolio($data, $user_id){
        // Update the database with the file path
  $data = array(
    'portifolio' => $data['full_path']
 );
 
 $this->db->where('user_id', $user_id);
 $this->db->update($table, $data);

    }
}

