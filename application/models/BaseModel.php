<?php
class BaseModel extends CI_model{

  public function admin_login($data,$table){
    $this->db->where($data);
    $rs = $rs = $this->db->get($table);
    $count = $rs->num_rows();
      if($count == 1){
        return $rs;
      }
  }
   public function common_insert($data,$table){
     $insert=$this->db->insert($table,$data);
     if($insert){
       return true;
     }
   }

   public function common_select($cond,$table){
     if(!empty($cond)){
       $this->db->where($cond);
       }
     $rs=$this->db->get($table);
     return $rs;
   }


//pagination

   public function count_all($table){
     $count = $this->db->count_all($table);
     return $count;
   }


   public function limited_records($per_page,$si,$table){

      $this->db->from($table);
      $this->db->limit($per_page,$si);
      $res = $this->db->get();
      return $res;
    }


    public function max_id($id,$table){
      $this->db->select($id);

       $this->db->order_by($id, 'DESC');
       $this->db->limit(1);
       $query = $this->db->get($table);
       return $query;
    }


   public function related_contents($id,$order_by,$asc_dsc,$table){
     $this->db->where_not_in($id,'blog_id');
      $this->db->order_by($order_by,$asc_dsc);
      $rs=$this->db->get($table,3,0);
       return $rs;
   }

   public function common_update($data,$table){
     $update=$this->db->update($table,$data);
     return $update;
   }

   public function delete_records($cond,$table)
   {
   $delete = $this->db->delete($table,$cond);
   return $delete;
    }

}


?>
