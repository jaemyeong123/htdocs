<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_homepage extends CI_Model {  
    //생성자
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    // 전체 게시글 db 조회
	public function boardGetList(){
        return $this->db->get('board')->result_array();
	}
    // 게시글 db 등록
    public function boardRegist(){
        $row = array('title' => $_REQUEST['title'],
            'content' => $_REQUEST['content']
        );
        return $this->db->insert('board', $row);
    }
    public function boardSelectById($board_id){
        return $this->db->get_where('board', array('board_id' => $board_id))->row();
    }
    public function boardUpdate($board_id){
        $row = array('title' => $_REQUEST['title'],
            'content' => $_REQUEST['content']
        );
        return $this->db->update('board', $row, array('board_id' => $board_id));
    }
    public function boardDelete($board_id){
        return $this->db->delete('board', array('board_id' => $board_id));
    }
}
