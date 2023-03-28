
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
        
				$data = array(
						
                        'portifolio'=>$user['portifolio'],
                        'user_id'=>$user['id'],
                        'first_name'=>$user['first_name'],
                        'last_name'=>$user['last_name'],
                        'email'=>$user['email']

						
						
					);
                $this->session->set_userdata($data);
				$result['status'] = 'success';
				$result['msg'] = 'Successfully logged in';
       
    }
     else {
    $result['msg']= '
    <div class="alert alert-primary" role="alert">
								<span class="heading_b">Login Failed</span>
								Email/Password is invalid.
                                <a data-target="#adminLogin" data-toggle="modal" >Try Again</a> 
							</div>';
			$result['error'] = 'Email/Password is invalid';
}
return $result;

}
function uploadPortifolio($data, $user_id){
        // Update the database with the file path
     
  $portifolio = array(
    'portifolio' => $data['upload_data']['file_name'],
    'description'=>$this->input->post('description'),
    'creation_date' =>$this->input->post('creation_date'),
    'title'=>$this->input->post('title'),
    'author'=>$this->input->post('author')
 );
 $this->db->insert('portifolio_docs', $portifolio);
 $insert_id = $this->db->insert_id();
 //create a new data set
//  $this->db->where('id', $user_id);
//   $this->db->update('admins', $portifolio);
//   $this->db->where('id', $user_id);
// $query = $this->db->get('admins');
// $row = $query->row_array();
// if($row){
//     $token = $_SESSION['__ci_last_regenerate'];
//             $data = array(
//                     'logged_in' => TRUE,
//                     'user_id' => $row['id'],
//                     'email' => $row['email'],
//                     'firstname' =>$row['first_name'],
//                     'lastname' =>$row['last_name'],
//                     'title' =>$row['title'],
//                     'portifolio'=>$row['portifolio'],
//                     'access' => 1,
//                     'token' => $token
//                 );
// $this->session->set_userdata($row);
// $result['status'] = 'success';
// $result['msg'] = 'Uploaded Successfully';

// }
// else {
// $result['msg']= '
//             <div class="uk-alert uk-alert-danger" data-uk-alert>
//                 <a href="#" class="uk-alert-close uk-close"></a>
//                 <h4 class="heading_b">Upload Failed</h4>
//                 Email/Password is invalid. 
//             </div>';
// $result['error'] = 'Email/Password is invalid';
// }

 return $insert_id;
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
function uploadPreview($new_filename, $doc_Id){
    $data = array(
        'preview'=>$new_filename
    );
    $this->db->where('id', $doc_Id);
    $result = $this->db->update('portifolio', $data);

}
}

