<?php
class PlayerModel extends CI_Model
{

	public function getAllPlayers()
	{
		$queri = $this->db->get("players");
		return $queri->result();

	}

	public function AddNewPlayer($name)
	{
		$this->db->set('name', $name); 
		$this->db->insert('players');  

	}
}



  ?>