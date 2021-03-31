<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminProducts extends CI_Controller {
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('ProductsModel');         
   }
   
   public function index()
   {
       $products=new ProductsModel;
       $data['data']=$products->get_products();
       $this->load->view('includes/header');       
       $this->load->view('products/list',$data);
       $this->load->view('includes/footer');
   }
   public function reports()
   {
       $this->load->view('includes/header');       
       $this->load->view('products/admin');
       $this->load->view('includes/footer');
   }
   public function create()
   {
      
    $this->load->view('includes/header');       
    $this->load->view('products/create');
    $this->load->view('includes/footer');
   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
    $this->form_validation->set_rules('name', 'Name' , 'required' );
    $this->form_validation->set_rules('price', 'Price' , 'required' );
    $this->form_validation->set_rules('description', 'Description' , 'required' );
    $this->form_validation->set_rules('status', 'Status' , 'required' );
    if($this->form_validation->run() == FALSE)
    {
     $this->load->view('includes/header');       
     $this->load->view('products/create');
     $this->load->view('includes/footer');
    }
    else
    {
     $products=new ProductsModel;
     $products->insert_product();
     redirect(base_url('AdminProducts'));
       
    }
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $product = $this->db->get_where('products', array('id' => $id))->row();
       $this->load->view('includes/header');
       $this->load->view('products/edit',array('product'=>$product));
       $this->load->view('includes/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
       $products=new ProductsModel;
       $products->update_product($id);
       redirect(base_url('AdminProducts'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   **/
   public function delete($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('products');
       redirect(base_url('AdminProducts'));
   }

   function search_keyword()
   {
    
       $keyword=$this->input->post('keyword');
       $data['results']=$this->ProductsModel->search($keyword);
       $this->load->view('result_view',$data);
   }
}