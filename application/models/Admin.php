
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
                        'firstname' =>$user['first_name'],
                        'firstname' =>$user['first_name'],
                        'title' =>$user['title'],
                        'portifolio'=>$user['portifolio'],
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
     
  $portifolio = array(
    'portifolio' => $data['upload_data']['file_name']
 );
 
 $this->db->where('id', $user_id);
 $result = $this->db->update('admins', $portifolio);
 return $result;
    }

function editUser($user){
    $email = $this->input->post('email');
    $firstname = $this->input->post('firstname');
    $lastname = $this->input->post('lastname');
    $title = $this->input->post('title');
    $data = array(
        'email'=>$email,
        'last_name' => $lastname,
        'first_name' => $first_name,
        'title'=>$title
    );
    $this->db->where('id', user);
    $result = $this->db->update('admins',$data);
}
}

