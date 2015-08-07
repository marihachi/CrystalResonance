<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountAPIController extends CI_Controller
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

	public function create()
	{
		header("Content-Type: application/json; charset=utf-8");

		if (!$this->_checkReferer())
			return;

		$info = array();
		$post = $this->input->post();
		if (array_key_exists('screen_name', $post) && array_key_exists('password', $post) && array_key_exists('name', $post))
		{
			$this->load->model('Account_model', 'AccountModel', TRUE);

			$screenName = urldecode($post['screen_name']);
			$password = urldecode($post['password']);
			$name = urldecode($post['name']);

			if (preg_match('/^[a-z0-9_]+$/i', $screenName) === 1 && preg_match('/^[a-z0-9_-]+$/i', $password) === 1 && preg_match('/^[^\s　]+$/u', $name) === 1)
			{
				$isValidScreenName = false;
				
				if (strlen($screenName) >= 4 && strlen($screenName) <= 15)
				{
					if ($resUser = $this->AccountModel->Create($screenName, $password, $name))
					{
						$isValidScreenName = true;

						unset($resUser['password_hash']);

						$data = array();
						$data['login'] = true;
						$data['me'] = $resUser;
						$this->session->set_userdata($data);

						$info['user'] = $resUser;
					}
					else
					{
						http_response_code(500);
						$info['error']['code'] = 105;
						$info['error']['message'] = 'Failed to execute.';
					}
				}

				if (!$isValidScreenName)
				{
					// Invalid Screen Name
					http_response_code(400);
					$info['error']['code'] = 104;
					$info['error']['message'] = "Invalid parameter.";
					$info['error']['parameter'] = "screen_name";
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
			$info['error']['code'] = 101;
			$info['error']['message'] = 'Some required parameters.';
		}
		echo json_encode($info);
	}

	public function login()
	{
		header("Content-Type: application/json; charset=utf-8");

		if (!$this->_checkReferer())
			return;

		$info = array();
		$post = $this->input->post();
		if (array_key_exists('screen_name', $post) && array_key_exists('password', $post))
		{
			$this->load->model('Account_model', 'AccountModel', TRUE);

			$screenName = urldecode($post['screen_name']);
			$password = urldecode($post['password']);

			$isSuccess = false;
			if (preg_match('/^[a-z0-9_]+$/i', $screenName) === 1)
			{
				if ($resUser = $this->AccountModel->FindByScreenName($screenName))
				{
					if (password_verify($password, $resUser['password_hash']))
					{
						$isSuccess = true;

						$data = array();
						$data['login'] = true;
						$data['me'] = $resUser;
						$this->session->set_userdata($data);

						$info['message'] = "Login successful.";
					}
				}
			}

			if (!$isSuccess)
			{
				http_response_code(400);
				$info['error']['code'] = 102;
				$info['error']['message'] = "Some invalid parameters.";
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

	public function logout()
	{
		header("Content-Type: application/json; charset=utf-8");

		if (!$this->_checkReferer())
			return;

		$info = array();

		if ($this->session->userdata('login'))
		{
			$this->session->sess_destroy();
			$info['message'] = "Logout successful.";
		}
		else
		{
			http_response_code(400);
			$info['error']['code'] = 106;
			$info['error']['message'] = 'Please request with login.';
		}
		echo json_encode($info);
	}
}