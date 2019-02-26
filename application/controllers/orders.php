<?php
class Orders extends CI_Controller {

    /**
    * name of the folder responsible for the views 
    * which are manipulated by this controller
    * @constant string
    */
    const VIEW_FOLDER = 'admin/manufacturers';
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
       $this->load->model("m_order");
    }
	public function index(){
		$search = $search_string = null;
		if(null != $this->input->post("search_string"))
			$search_string = $this->input->post("search_string");
		if(null != $this->input->post("search_by"))
			$search = $this->input->post("search_by");
			
			$data['orders'] = $this->m_order->getOrder($search, $search_string)->result();
		$data['main_content'] = 'v_orders';
        $this->load->view('includes/template', $data); 
		//print_r($this->m_order->getOrder()->result());
	}
	public function hapus($id){
		$this->m_order->hapus($id);
		header('location:'.base_url().'index.php/orders');
	}
	public function edit($id){
		$data['order'] = $this->m_order->getbyid($id)->row();
		$data['main_content'] = 'edit_order';
        $this->load->view('includes/template', $data); 
	}
	public function tambah(){
		$data['main_content'] = 'add_order';
        $this->load->view('includes/template', $data); 
	}
	public function add_proses(){
		$this->m_order->store_order($_POST);
		header('location:'.base_url().'index.php/orders');
	}
	public function edit_proses(){
		$id = $this->input->post("id");
		
		$this->m_order->edit_order($id, $this->input->post());
		header('location:'.base_url().'index.php/orders');
	}
}
 ?>