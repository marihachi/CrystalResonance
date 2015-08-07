<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ranking_model extends CI_Model
{
	public function Create($account_id, $score_id, $record_value)
	{
		$data = array();
		$data["account_id"] = $account_id;
		$data["score_id"] = $score_id;
		$data["record_value"] = $record_value;

		if(!$this->db->insert('crystal_resonance_ranking', $data))
			return false;

		return $data;
	}

	public function Destroy($account_id, $score_id)
	{
		$data = array();
		$data["account_id"] = $account_id;
		$data["score_id"] = $score_id;

		if(!$this->db->delete('crystal_resonance_ranking', $data))
			return false;

		return true;
	}

	public function Update($account_id, $score_id, $record_value)
	{
		$data = array();
		$data["account_id"] = $account_id;
		$data["score_id"] = $score_id;
		$data["record_value"] = $record_value;

		if(!$this->db->update('crystal_resonance_ranking', $data))
			return false;

		return $data;
	}

	public function FindWithId($account_id, $score_id)
	{
		$data = array();
		$data["account_id"] = $account_id;
		$data["score_id"] = $score_id;

		$query = $this->db->get_where('crystal_resonance_ranking', $data);
		if ($query->num_rows() > 0)
		{
			$rec = (array)$query->result()[0];
			return $rec;
		}
		else
		{
			return false;
		}
	}

	// スコア毎のランキングを取得
	public function GetRankingScore($score_id)
	{
		$data = array();
		$data["score_id"] = $score_id;

		$query = $this->db->get_where('crystal_resonance_ranking', $data);
		if ($query->num_rows() > 0)
		{
			$recs = (array)$query->result();
			return $recs;
		}
		else
		{
			return false;
		}
	}
}