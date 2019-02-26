<?php
class M_order extends CI_Model {
  private $table = "order_";
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }
	public function getOrder($search = null, $search_string = null){
		if($search_string AND $search)
			$this->db->like($search, $search_string);
		return $this->db->get($this->table);
	}
	public function getbyid($id){
		$this->db->where(array("id" => $id));
		return $this->db->get($this->table);
	}
	public function hapus($id){
		$this->db->where(array("id"=>$id));
		$this->db->delete($this->table);
	}
	public function store_order($data){
		$this->db->insert($this->table, $data);
	}
	public function edit_order($id, $data){
		$this->db->where(array("id"=>$id));
		$this->db->update($this->table, $data);		
	}
}