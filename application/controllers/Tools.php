<?php
class Tools extends CI_Controller
{
    
  public function index()
  {
  
    $this->load->helper('url');
    $this->load->helper('file');
    $this->load->helper('download');
    $this->load->library('zip');
    $this->load->dbutil();
    $db_format=array('format'=>'zip','filename'=>'ci_series_backup.sql');
    $backup=& $this->dbutil->backup($db_format);
    $dbname='backup-on-'.date('Y-m-d').'.zip';
    $save='assets/db_backup/'.$dbname;
    write_file($save,$backup);
    force_download($dbname,$backup);
  }
  
}