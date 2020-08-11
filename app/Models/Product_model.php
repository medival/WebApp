<?php
namespace App\Models;
use CodeIgniter\Model;

class Product_model extends Model {

    public function getCategory() {
        $builder =  $this->db->table('tb_category');
        return $builder->get();
    }   

    public function getProduct() {
        $builder = $this->db->table('tb_product');
        $builder->select('*');
        $builder->join('tb_category', 'category_id = product_category_id', 'left');
        return $builder->get();
    }

    public function saveProduct($data) {
        $query = $this->db->table('tb_product')->insert($data);
        return $query;
    }

    public function updateProduct($data, $id){
        $query = $this->db->table('tb_product')->update($data, array('product_id' => $id));
        // var_dump($data);
        return $query;
    }

    public function deleteProduct($id) {
        $query = $this->db->table('tb_product')->delete(array('product_id' => $id));
        return $query;
    }
}

/* End of file: Product_model.php */