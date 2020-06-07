<?php defined('BASEPATH') OR exit('No direct script access allowed');

class BoardController extends CI_Controller {
	// 기본값
	public function index(){
		$this->load->view('welcome_message');
	}
	// 게시글 리스트 조회
	public function baordGetList(){
		$this->load->model('BoardModel');
		$data['boardList'] = $this->BoardModel->boardGetList();
		$this->load->view('boardView', $data);
	}
	//게시글 등록 양식으로 이동
	public function boardWriteForm(){
		$this->load->view('boardWriteForm');
	}
	// 게시글 등록 후 리스트 조회
	public function boardRegist(){
		$this->load->model('BoardModel');
		$regist_result = $this->BoardModel->boardRegist();
		$data['boardList'] = $this->BoardModel->boardGetList();
		$this->load->view('boardView', $data);
	}
	//게시글 상세 양식으로 이동
	public function boardDetail(){
		$this->load->model('BoardModel');
		$data['boardRow'] = $this->BoardModel->boardSelectById($_REQUEST['board_id']);
		$this->load->view('boardDetail', $data);
	}
	// 게시글 수정 양식으로 이동
	public function boardModifyForm(){
		$this->load->model('BoardModel');
		$data['boardRow'] = $this->BoardModel->boardSelectById($_REQUEST['board_id']);
		$this->load->view('boardModifyForm', $data);
	}
	// 게시글 수정 후 리스트 상세조회
	public function boardModify(){
		$this->load->model('BoardModel');
		$this->BoardModel->boardUpdate($_REQUEST['board_id']);
		$data['boardRow'] = $this->BoardModel->boardSelectById($_REQUEST['board_id']);
		$this->load->view('boardDetail', $data);
	}
	// 게시글 삭제 후 리스트 조회
	public function boardDelete(){
		$this->load->model('BoardModel');
		$this->BoardModel->boardDelete($_REQUEST['board_id']);
		$data['boardList'] = $this->BoardModel->boardGetList();
		$this->load->view('boardView', $data);
	}
}
