<?php
      include_once '../lib/database.php';
      include '../helpers/format.php';  

?>

<?php
  
    class category 
    {
        public $db;
        public $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function insert_category($catName){ 
            $catName = $this->fm->validation($catName);
            $catName = mysqli_real_escape_string($this->db->link, $catName);
            if(empty($catName)){
                $alert = "<span style='color: #ff0000cc'; > Không được để trống !</span>";
                return $alert;
            }else{
                $query = "INSERT INTO `tbl_category`(`catName`) VALUES ('$catName')";
                $result = $this->db->insert($query);
                if($result){
                    $alert = "<span class='success'>Thao tác thành công !</span>";
                    return $alert;
                }else {
                    $alert = "<span style='color: #ff0000cc'; class='error'>Thao tác thất bai</span>";
                    return $alert;
                }

            }
        }
        public function show_category(){
            $query = "SELECT * FROM `tbl_category` ORDER BY catId desc ";
            $result = $this->db->select($query);
            return $result;
        }
        public function update_category($catName, $id){
            $catName = $this->fm->validation($catName);
            // $id = $this->fm->validation($id);
            $catName = mysqli_real_escape_string($this->db->link, $catName);
            $id = mysqli_real_escape_string($this->db->link, $id);
            if(empty($catName)){
                $alert = "<span style='color: #ff0000cc'; > Không được để trống !</span>";
                return $alert;
            }else{
                $query = "UPDATE tbl_category SET catName = '$catName' WHERE catId = '$id'";
                // UPDATE `tbl_category` SET `catId`='[value-1]',`catName`='[value-2]' WHERE 1
                $result = $this->db->update($query);
                if($result){
                    $alert = "<span class='success'>Thao tác thành công !</span>";
                    return $alert;
                }else {
                    $alert = "<span style='color: #ff0000cc'; class='error'>Thao tác thất bai</span>";
                    return $alert;
                }

            }
        }
        public function get_category($id){
            $query = "SELECT * FROM `tbl_category` WHERE catId = '$id'";
            $result = $this->db->select($query);
            return $result;

        }
    }
    
    

?>