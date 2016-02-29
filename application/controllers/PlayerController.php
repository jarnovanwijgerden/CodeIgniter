<?php
class PlayerController extends CI_Controller
{


    function __construct()
     {
        parent::__construct();
        $this->load->model("PlayerModel");
        $this->load->helper('form');
        $this->load->helper('url');
    }


	public function index()
	{
		//$data["allplayers"] = $this->PlayerModel->getAllPlayers();
        $this->data['title'] = 'Voeg een speler toe';
		$data['content']        =   $this->load->view('Player/Create',  $this->data, true);
     	$this->load->view('layout', $data);

	}

    public function AddPlayer()
    {
         $data = $this->input->post('name');
         $this->PlayerModel->AddNewPlayer($data);
         redirect('/HomeController');

    }

}



  ?>
