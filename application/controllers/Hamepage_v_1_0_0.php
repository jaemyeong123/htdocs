<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hamepage_v_1_0_0 extends CI_Controller {

	/* 생성자 영역 */
	function __construct(){
		parent::__construct();

		// $this->load->model(mapping('notice').'/model_notice');
	}

	/* Index */
	public function index(){
		$this->homepage_main();
	}

	// 게시글 리스트 조회
	public function homepage_main(){
		$this->load->view('view_homepage_main');
	}

	public function homepage_corp_info(){
		$this->load->view('view_homepage_corp_info');
	}

}
