<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RankingAPIController extends CI_Controller
{
	private function _checkReferer()
	{
		$this->load->library('user_agent');

		if ($this->agent->is_referral() || $this->agent->referrer() === "")
		{
			http_response_code(403);
			$info['error']['code'] = 107;
			$info['error']['message'] = "Invalid referer.";
			echo json_encode($info);
			return false;
		}
		return true;
	}

	// ランキング
	public function index()
	{
		header("Content-Type: application/json; charset=utf-8");
		
		if (!$this->_checkReferer())
			return;
		
		$info = array();
		
		if ($this->session->userdata('login'))
		{
			$get = $this->input->get();
			if (array_key_exists('score_id', $post))
			{
				$this->load->model('Ranking_model', 'RankingModel', TRUE);

				if ($records = $this->RankingModel->GetRankingScore($scoreId))
				{
					$info['records'] = $records;
				}
				else
				{
					$info['records'] = array();
				}
			}
			else
			{
				http_response_code(400);
				$info['error']['code'] = 101;
				$info['error']['message'] = 'Some required parameters.';
			}
		}
		else
		{
			http_response_code(400);
			$info['error']['code'] = 106;
			$info['error']['message'] = 'Please request with login.';
		}
		echo json_encode($info);
	}

	// ランキングレコードを更新する
	public function update()
	{
		header("Content-Type: application/json; charset=utf-8");

		if (!$this->_checkReferer())
			return;

		$info = array();
		$post = $this->input->post();
		if (array_key_exists('score_id', $post) && array_key_exists('record_value', $post))
		{
			$this->load->model('Ranking_model', 'RankingModel', TRUE);

			if ($this->session->userdata('login'))
			{
				$me = $this->session->userdata('me');
				$accountId = $me['account_id'];
				$scoreId = urldecode($post['score_id']);
				$recordValue = urldecode($post['record_value']);
				
				if (preg_match('/^[0-9]+$/i', $scoreId) === 1 && preg_match('/^[0-9]+$/i', $recordValue) === 1)
				{
					if ($this->RankingModel->FindWithId($accountId, $scoreId))
					{
						if ($this->RankingModel->Update($accountId, $scoreId, $recordValue))
						{
							$info['user'] = "Update Successful.";
						}
						else
						{
							http_response_code(500);
							$info['error']['code'] = 105;
							$info['error']['message'] = 'Failed to execute.';
						}
					}
					else
					{
						if ($this->RankingModel->Create($accountId, $scoreId, $recordValue))
						{
							$info['user'] = "Create Successful.";
						}
						else
						{
							http_response_code(500);
							$info['error']['code'] = 105;
							$info['error']['message'] = 'Failed to execute.';
						}
					}
				}
				else
				{
					http_response_code(400);
					$info['error']['code'] = 102;
					$info['error']['message'] = "Some invalid parameters.";
				}
			}
			else
			{
				http_response_code(400);
				$info['error']['code'] = 106;
				$info['error']['message'] = 'Please request with login.';
			}
		}
		else
		{
			http_response_code(400);
			$info['error']['code'] = 101;
			$info['error']['message'] = 'Some required parameters.';
		}
		echo json_encode($info);
	}
}