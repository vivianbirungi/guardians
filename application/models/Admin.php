
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Portifolio extends CI_Model {
    public $table;
    public $primary_key;
    public $order_by;

    function __construct(){
        parent::__construct();
        $this->table = "portifolio";
        $this->primary_key = "portifolio_id";
        $this->order_by = "date_joined";
    }

    function adminLogin(){
        $email = $this->input->post('email');
        $password = hash('SHA1', $this->input->post('password') . config_item('mkd'));
        $search = array('email'=>$email, 'password'=>$password);
		$query = $this->db->get_where('admins', $search);
        $user = $query->row_array();

    }
    function upload_portifolio(){
        if(!$this->settings->logged_in()) redirect('login');
        $input = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png]',
                'max_size[file,1024]',]]);
                if (!$input) {
                    print_r('Choose a valid file');
                } else {
                    $img = $this->request->getFile('file');
                    $img->move(WRITEPATH . 'uploads');
            
                    $data = [
                       'name' =>  $img->getName(),
                       'type'  => $img->getClientMimeType()
                    ];
            
                    $save = $db->insert($data);
                    print_r('File has successfully uploaded');        
                }
    }
}

