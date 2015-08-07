<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller
{
	public function index()
	{
		if ($data['login'] = $this->session->userdata('login'))
			$data['me'] = $this->session->userdata('me');

		$this->load->view('top', $data);
	}

	public function search()
	{
		echo "search";
		/*if ($data['login'] = $this->session->userdata('login'))
			$data['me'] = $this->session->userdata('me');
		
		$data['search_text'] = $this->input->get('q');
		$this->load->view('search', $data);*/
	}

	public function signup()
	{
		if ($this->session->userdata('login'))
			show_error('既にログイン済みです。', 403);
		else
			$this->load->view('signup');
	}
	
	public function score($scoreId)
	{
		/*$this->load->model('Score_model', 'ScoreModel', TRUE);

		if ($score = $this->ScoreModel->FindById($scoreId))
		{
			$data['score'] = $score;
			if ($data['login'] = $this->session->userdata('login'))
				$data['me'] = $this->session->userdata('me');
			
			$this->load->view('game', $data);
		}
		else
		{
			show_error("Score Page Not Found.", 404);
		}*/
		echo "scoreId: $scoreId";
	}
}