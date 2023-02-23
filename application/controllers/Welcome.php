<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Portifolio");
		$this->load->model("Admin");
	}
	public function index()
	{
		$data = array("portifolios"=>$this->Portifolio->get_portifolios(), "categories"=>$this->Portifolio->get_portifolios_category());
		$this->load->view('home', $data);
	}


	public function single( $id )
	{
		$data = array("portifolio"=>$this->Portifolio->get_portifolio($id), "portifolios"=>$this->Portifolio->get_portifolios());		
		$this->load->view('single', $data);
	}
	public function tryPage( $id )
	{
		$data = array("portifolio"=>$this->Portifolio->get_portifolio($id), "portifolios"=>$this->Portifolio->get_portifolios());
		$this->load->view('try', $data);
	}

	public function send_email(){
		$phone = $this->input->post("phone");
		$department = $this->input->post("department");
		$subject = $this->input->post("subject");
		$message = $this->input->post("message");
		$name = $this->input->post("name");
		$this->load->library('email');

		$this->email->from('info@guardiansofnature.com', 'Guardians Of Nature');
		$this->email->to('info@guardiansofnature.com');
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();

	}
	public function admin_login(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$login_status = $this->Admin->adminLogin();
		$data['user'] = $this->session->userdata();
		if(isset($login_status['status'])){
                if($login_status['status'] == 'success') $this->load->view('admin',$data);

                else
				{
					$data['errors'] = $login_status['msg'];
				}
			}

		

	}
	
	public function upload_pdf()
{
    $user_id = $this->session->userdata('user_id');

	if(!is_dir('./uploads/'.$user_id.'/'))mkdir('./uploads/'.$user_id.'/', 0777);
    $config['upload_path'] = './uploads/'.$user_id.'/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 1024000;
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('pdf_file')) {
        $error = array('error' => $this->upload->display_errors());
        print_r($error);
    } else {
        $data = array('upload_data' => $this->upload->data());
        $result = $this->Admin->uploadPortifolio($data, $user_id);
        
    }
	if($result == 1) $this->load->view('admin');
}
 public function edit_user(){
	$data = $this->session->userdata();
	$result = $this->Admin->editUser($data['user_id']);

   if(isset($result)){
	if($result == 1) $this->load->view('admin',$data);

	else
	{
		$data['errors'] = $result['msg'];
	}
	}

 }
 public function view_pdf() {
	$data = $this->session->userdata();

    $pdf_file = './uploads/'.$data['$user_id'].'/'.$data['portifolio'];
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $pdf_file . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    readfile($pdf_file);
  }

}

	
	// 	public function __construct(){
	// 		$this->db = db_connect();
	// 		$this->model= new File;
	// 		$this->session = session();
	// 		$this->request =  \Config\Services::request();
	// 		$this->data['session']= $this->session ;
	// 		$this->data['request'] = $this->request ;
	// 		$this->data['uploads']= $this->model->findAll();
	// 	}
	// 	public function index(){
	// 		return view('home', $this->data);
	// 	}
	 
	// 	public function upload(){
	// 		if(!is_dir('./uploads/'))
	// 		mkdir('./uploads/');
	// 		$label = $this->request->getPost('label');
	// 		$file = $this->request->getFile('file');
	// 		$fname = $file->getRandomName();
	// 		while(true){
	// 			$check = $this->model->where("path", "uploads/{$fname}")->countAllResults();
	// 			if($check > 0){
	// 				$fname = $file->getRandomName();
	// 			}else{
	// 				break;
	// 			}
	// 		}
	// 		if($file->move("uploads/", $fname)){
	// 			$this->model->save([
	// 				"label" =>$this->db->escapeString($label),
	// 				"path" => "uploads/".$fname
	// 			]);
	// 			$this->session->setFlashdata('main_success',"New File Uploaded successfully.");
	// 			return redirect()->to('/');
	// 		}else{
	// 			$this->session->setFlashdata('main_success',"File Upload failed.");
	// 		}
	// 			return view('home', $this->data);
	// 	}
	// }


