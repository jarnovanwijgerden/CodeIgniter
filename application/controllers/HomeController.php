<?php
class HomeController extends CI_Controller
{


    function __construct()
     {
        parent::__construct();
        $this->load->model("PlayerModel");
    }


	public function index()
	{
		$data["allplayers"] = $this->PlayerModel->getAllPlayers();
		$data['content']        =   $this->load->view('HomeView', $data, true);
     	$this->load->view('layout', $data);
	}

}



  ?>
