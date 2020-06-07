/*
|------------------------------------------------------------------------
| Author : 최재명(작성자)
| Create-Date : 2020-04-07 (작성일)
| Memo : 유저 정보 관리 (작성내용)
|------------------------------------------------------------------------
*/

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
	// 기본값
	public function index(){
		$this->load->view('welcome_message');
	}
	// 회원가입 페이지로 이동
	public function UserController_reg(){
		// $this->load->model('BoardModel');
		// $data['boardList'] = $this->BoardModel->boardGetList();
		// $this->load->view('boardView', $data);
	}
	// 회원가입 기능 실행
	public function UserController_reg_in(){
		// $this->load->model('BoardModel');
		// $data['boardList'] = $this->BoardModel->boardGetList();
		// $this->load->view('boardView', $data);
	}




}
