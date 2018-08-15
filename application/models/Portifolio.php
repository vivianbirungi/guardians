<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portifolio extends CI_Model {
    public $table;
    public $primary_key;
    public $order_by;

    function __construct(){
        parent::__construct();
        $this->table = "portifolio";
        $this->primary_key = "portifolio_id";
        $this->order_by = "date_joined";
    }

    function upload_portifolio($portifolio){
       $result  = $this->db->insert($this->table, $portifolio); 
       if( $result) {
            return array( "flag"=>true, "msg"=>"Portifolio upload");
       } else{
            return array( "flag"=>false, "msg"=>"upload failed, try again please");           
       }    
    }

    function get_portifolios(){
        $this->db->order_by($this->order_by, 'DESC');        
        $result  = $this->db->get($this->table);
        return $result->result();
    }

    function get_portifolios_category(){
        $this->db->group_by("category");        
        $result  = $this->db->get($this->table);
        return $result->result();
        
    }


    function get_portifolio($id){
        $this->db->where("portifolio_id", $id);      
        $result  = $this->db->get($this->table);
        return $result->row();
    }

}