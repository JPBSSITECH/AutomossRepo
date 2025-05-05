<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load database
    }

    // Fetch cart quantity for a specific customer (optional: for a specific product)
    public function get_product_quantity_incart($product_id = '') {
        if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
            return ["status" => "error", "message" => "User not logged in"];
        }

        $cid = $_SESSION['id'];  // Get customer ID
        $pid = spl_decode($product_id); // Decode product ID if needed
        $sql = "SELECT product_id, quantity FROM add_to_cart WHERE customer_id = ?";
        $params = [$cid];

        if (!empty($pid)) {
            $sql .= " AND product_id = ?";
            $params[] = $pid;
        }

        $query = $this->db->query($sql, $params);
        $cart_items = $query->result_array();

        // Convert array into [product_id => quantity] format
        $cart_quantities = [];
        foreach ($cart_items as $item) {
            $cart_quantities[$item['product_id']] = $item['quantity'];
        }

        return ["status" => "success", "cart_quantities" => $cart_quantities];
    }
}
