<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mechanic_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load database
    }

    public function getCategoryList(){
        //raw sql
        /*$sql = "
            SELECT DISTINCT c1.id, c1.name 
            FROM category c1 
            WHERE c1.id IN (
                SELECT DISTINCT IFNULL(c.parent_id, c.id) 
                FROM category c 
                JOIN package_mst p ON p.category_id = c.id 
                WHERE user_typ = 'Admin'
            )
        ";*/

        // Build the subquery
        $this->db->select('DISTINCT IFNULL(c.parent_id, c.id)', false);
        $this->db->from('category c');
        $this->db->join('package_mst p', 'p.category_id = c.id');
        $this->db->where('user_typ', 'Admin');
        $subquery = $this->db->get_compiled_select(); 

        // Now use the subquery in the main query
        $this->db->distinct();
        $this->db->select('c1.id, c1.name');
        $this->db->from('category c1');
        $this->db->where("c1.id IN ($subquery)", null, false); 

        $query = $this->db->get();
        return $query->result();
    }
}