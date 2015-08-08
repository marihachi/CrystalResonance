<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model
{
	public function Create($screen_name, $password, $name)
	{
		$data = array();
		$data["screen_name"] = $screen_name;
		$data["name"] = $name;
		$data["password_hash"] = password_hash($password, PASSWORD_BCRYPT);

		if(!$this->db->insert('crystal_resonance_account', $data))
			return false;

		$query = $this->db->get_where('crystal_resonance_account', array('screen_name' => $screen_name), 1);
		return (array)$query->result()[0];
	}

	public function Update($screen_name = null, $password = null, $name = null)
	{
		$data = array();
		if ($screen_name !== null)
			$data["screen_Name"] = $screen_name;
		if ($name !== null)
			$data["name"] = $name;
		if ($password !== null)
			$data["password_hash"] = password_hash($password, PASSWORD_BCRYPT);

		if (!$this->db->update('crystal_resonance_account', $data))
			return false;

		return true;
	}

	public function FindByScreenName($screen_name)
	{
		$data = array();
		$data["screen_name"] = $screen_name;

		$query = $this->db->get_where('crystal_resonance_account', $data, 1);
		if ($query->num_rows() > 0)
		{
			$user = (array)$query->result()[0];
			return $user;
		}
		else
		{
			return false;
		}
	}

	public function FindById($id)
	{
		$query = $this->db->get_where('crystal_resonance_account', array('id' => $id), 1);
		if ($query->num_rows() > 0)
		{
			$user = (array)$query->result()[0];
			return $user;
		}
		else
		{
			return false;
		}
	}
}