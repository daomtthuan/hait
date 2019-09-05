<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Form_model
 */
class Form_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
        $this->load->library('ion_auth');
	}
	/*
	 * Chức năng: Thêm form mới
	 * Tham số: $user_create: người khởi tạo
	 * 			$room_name: tên phòng
	 * 			$room_id: mã phòng
	 * 			$ type: loại form
	 * Form khi được tạo mới sẽ có trạng thái là unfinished
	 *
	 * */
	function insert_new_form($user_create, $room_name, $room_id, $type)
	{
		$data = array(
			'loai_form' => $type,
			'user_create' => $user_create,
			'user_check' => "",
			'status' => "unfinished",
			'infection' => "0",
			'room_name' => $room_name,
			'room_id' => $room_id,
		);
		$this->db->insert('form', $data);
		$lastid = $this->db->insert_id();
		return $lastid;
	}
	/*
	 * Chức năng: Cập nhật trạng thái form
	 * Tham số: $form_id: mã form
	 * 			$status_id: trạng thái của form
	 * */
	public function update_status($form_id, $status_id)
	{
		$data = array(
			'form_id' => $form_id,
			'status' => $status_id,
		);
		$this->db->where('form_id', $data['form_id']);
		$this->db->update('form', $data);
	}
	/*
	 * Hàm cập nhật content của form
	 * */
	public function update_content($form_id,$content){
		$data = array(
			'form_id' => $form_id,
			'content' => $content,
		);
		$this->db->where('form_id', $data['form_id']);
		$this->db->update('form', $data);
	}
	/*
	 * Lấy mảng json
	 * */
	public function get_json($form_id){
		$this->db->select('content');
		$this->db->where('form_id', $form_id);
		$query = $this->db->get('form');
		$row = $query->row();
		$content= $row->content;
		return $content;
	}
	/*
	 * Hàm lấy danh sách form
	 * Tham số: $staus: all (tất cả form),unfinished, finnished;
	 * */
	public function get_form($status)
	{
        $user = $this->ion_auth->user()->row();
        $id=$user->id;
		switch ($status) {
            case 'nkbv':
                $query = $this->db->query("call pivot_gridview_nkbv");
                $data = $query->result_array();
                return $data;
                break;
			case 'all':
			    $data = array();
                if($this->ion_auth->is_admin()){
                    $query = $this->db->query("call pivot_gridview");
                    $data = $query->result_array();
                } else{
                    log_message("debug","get user pivot");
                    $proc = "CALL pivot_view_user(?)";
                    $data = array('user' => $id);
                    $result = $this->db->query($proc, $data);
                    $data = $result->result_array();
                }
				return $data;
				break;
			default:
                $data = array();
                if($this->ion_auth->is_admin()){
                    $get_form = "CALL get_form(?)";
                    $data = array('para' => $status);
                    $result = $this->db->query($get_form, $data);
                    //$query=$this->db->query("call get_form(".$status.")");
                    $data = $result->result_array();
                } else{
                    $get_form = "CALL get_form_user(?,?)";
                    $data = array('para' => $status,'user'=>$id);
                    $result = $this->db->query($get_form, $data);
                    //$query=$this->db->query("call get_form(".$status.")");
                    $data = $result->result_array();
                }
				return $data;
		}
	}
		public function add($data)
		{
			$this->db->insert('form', $data);
			$lastid = $this->db->insert_id();
			return $lastid;
		}
		public function update($data)
		{
			$this->db->where('form_id', $data['form_id']);
			$this->db->update('form', $data);
		}

		public function delete($id)
		{
			$this->db->where('form_id', $id);
			$this->db->delete('form');
		}
}

/* End of file Form_model.php */



