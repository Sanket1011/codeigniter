<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
        //Load User model
        $this->load->model('user');

        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 

        //$this->load->library('Pdf');
    }

    function show_cust_table()
    {
        $product=new Product;
        $data['data']=$product->get_customerinfo();   
        //$this->load->view('admin/admin_navbar');
        $this->load->view('includes/header');
        $this->load->view('report/Cpdf', $data);
        $this->load->view('includes/footer');
    }

    function show_user_table()
    {
        $product=new User;
        $data['data']=$product->get_userinfo(); 
        //$this->load->view('admin/admin_navbar');  
        $this->load->view('includes/header');
        $this->load->view('report/Updf', $data);
        $this->load->view('includes/footer');
    }

    function show_sales_table()
    {
        $product=new Product;
        $data['data']=$product->get_salesinfo();   
        //$this->load->view('admin/admin_navbar');
        $this->load->view('includes/header');
        $this->load->view('report/Spdf', $data);
        $this->load->view('includes/footer');
    }

    function show_products_table()
    {
        $product=new Product;
        $data['data']=$product->get_productsinfo();   
        //$this->load->view('admin/admin_navbar');
        $this->load->view('includes/header');
        $this->load->view('report/Ppdf', $data);
        $this->load->view('includes/footer');
    }



    /////////////////////////////////////
    /*
    Function to generate Customer Table report
    */
    public function generate_pdf() {
        //load pdf library
        $this->load->library('CPdf');
        
        $pdf = new CPdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('https://roytuts.com');
        $pdf->SetTitle('Customer Information');
        $pdf->SetSubject('Report generated using Codeigniter and TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');
    
        // set default header data
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
    
        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    
        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    
        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    
        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    
        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    
        // set font
        $pdf->SetFont('times', 'BI', 12);
        
        // ---------------------------------------------------------
        
        
        //Generate HTML table data from MySQL - start
        $template = array(
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
        );
    
        $this->table->set_template($template);
    
        $this->table->set_heading('Id', 'Name', 'Email','Phone','Address');
        
        $customerinfo = $this->product->get_customerinfo();
            
        foreach ($customerinfo as $cf):
            $this->table->add_row($cf->id, $cf->name, $cf->email, $cf->phone, $cf->address);
        endforeach;
        
        $html = $this->table->generate();
        //Generate HTML table data from MySQL - end
        
        // add a page
        $pdf->AddPage();
        
        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');
        
        // reset pointer to the last page
        $pdf->lastPage();
    
    // Debug the content of some variable
var_dump(array(
    "data" => "demo"
));

// Clean any content of the output buffer
ob_end_clean();

// Send the PDF !
$pdf->Output('example_006.pdf', 'I');

    }

    ///////////////////////////////////////////////////////////////////
    /*
    Function to generate OrderItems/Sales Table report
    */
    public function generate_sales_pdf() {
        //load pdf library
        $this->load->library('SPdf');
        
        $pdf = new SPdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('https://roytuts.com');
        $pdf->SetTitle('Sales Information');
        $pdf->SetSubject('Report generated using Codeigniter and TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');
    
        // set default header data
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
    
        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    
        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    
        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    
        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    
        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    
        // set font
        $pdf->SetFont('times', 'BI', 12);
        
        // ---------------------------------------------------------
        
        
        //Generate HTML table data from MySQL - start
        $template = array(
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
        );
    
        $this->table->set_template($template);
    
        $this->table->set_heading('Id', 'OrderID', 'ProductId','Quantity','Total');
        
        $salesinfo = $this->product->get_salesinfo();
            
        foreach ($salesinfo as $sf):
            $this->table->add_row($sf->id, $sf->order_id, $sf->product_id, $sf->quantity, $sf->sub_total);
        endforeach;
        
        $html = $this->table->generate();
        //Generate HTML table data from MySQL - end
        
        // add a page
        $pdf->AddPage();
        
        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');
        
        // reset pointer to the last page
        $pdf->lastPage();
    
     // Debug the content of some variable
var_dump(array(
  "data" => "demo"
));

// // Clean any content of the output buffer
 ob_end_clean();

// // Send the PDF !
 $pdf->Output('example_006.pdf', 'I');
    }

// ///////////////////////////////////////////////////////////////////////////
// /*
//     Function to generate Proucts Table report
//     */
    public function generate_products_pdf() {
        //load pdf library
        $this->load->library('PPdf');
        
        $pdf = new PPdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('https://roytuts.com');
        $pdf->SetTitle('Customer Information');
        $pdf->SetSubject('Report generated using Codeigniter and TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');
    
        // set default header data
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
    
        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    
        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    
        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    
        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    
        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    
        // set font
        $pdf->SetFont('times', 'BI', 12);
        
        // ---------------------------------------------------------
        
        
        //Generate HTML table data from MySQL - start
        $template = array(
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
        );
    
        $this->table->set_template($template);
    
        $this->table->set_heading('Id', 'Name', 'Price','Created Date','Status');
        
        $productsinfo = $this->product->get_productsinfo();
            
        foreach ($productsinfo as $pf):
            $this->table->add_row($pf->id, $pf->name, $pf->price, $pf->created,$pf->status);
        endforeach;
        
        $html = $this->table->generate();
        //Generate HTML table data from MySQL - end
        
        // add a page
        $pdf->AddPage();
        
        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');
        
        // reset pointer to the last page
        $pdf->lastPage();
    
        var_dump(array(
            "data" => "demo"
          ));
          
          // // Clean any content of the output buffer
           ob_end_clean();
          
          // // Send the PDF !
           $pdf->Output('example_006.pdf', 'I');
    }

// ////////////////////////////////////////////////////////////////////////////
// /*
//     Function to generate Users Table report
//     */
public function generate_user_pdf() {
    //load pdf library
    $this->load->library('UPdf');
    
    $pdf = new UPdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('https://roytuts.com');
    $pdf->SetTitle('Sales Information');
    $pdf->SetSubject('Report generated using Codeigniter and TCPDF');
    $pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');

    // set default header data
    //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // set font
    $pdf->SetFont('times', 'BI', 12);
    
    // ---------------------------------------------------------
    
    
    //Generate HTML table data from MySQL - start
    $template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
    );

    $this->table->set_template($template);

    $this->table->set_heading('Id', 'First Name', 'Last NAme','Email ID','Gender','Phone No','Created');
    
    $userinfo = $this->user->get_userinfo();
        
    foreach ($userinfo as $uf):
        $this->table->add_row($uf->id, $uf->first_name, $uf->last_name, $uf->email, $uf->gender,$uf->phone,$uf->created);
    endforeach;
    
    $html = $this->table->generate();
    //Generate HTML table data from MySQL - end
    
    // add a page
    $pdf->AddPage();
    
    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');
    
    // reset pointer to the last page
    $pdf->lastPage();

    var_dump(array(
        "data" => "demo"
      ));
      
      // // Clean any content of the output buffer
       ob_end_clean();
      
      // // Send the PDF !
       $pdf->Output('example_006.pdf', 'I');
}    
}    