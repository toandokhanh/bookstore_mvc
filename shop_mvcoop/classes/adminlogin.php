<?php
      include '../lib/session.php';
      Session::checkLogin();
      include '../lib/database.php';
      include '../helpers/format.php';  

?>
<?php
  
    class adminlogin 
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function login_admin($adminUser, $adminPass){
            // kiểm tra xem dữ liệu có hợp lệ hay không
            $adminUser = $this->fm->validation($adminUser);
            $adminPass = $this->fm->validation($adminPass);
            //mysqli_real_escape_string nhận vào 1 biến là dữ liệu 1 biến là csdl
            //kết nối database
            $adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
            $adminPass = mysqli_real_escape_string($this->db->link, $adminPass);
            //check empty
            if(empty($adminUser) || empty($adminPass)){
                $alert = "User and Pass must be not empty";
                return $alert;
            }else{
                $query = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' AND adminPass = '$adminPass' LIMIT 1 ";
                $result = $this->db->select($query);
                
                if ($result != false){
                    $value = $result->fetch_assoc();
                    Session::set('adminlogin', true);
                    Session::set('adminId', $value['adminId']);
                    Session::set('adminUser', $value['adminUser']);
                    Session::set('adminName', $value['adminName']);


                    header('Location:index.php');                
                }else {
                    $alert = "User and Pass not match";
                    return $alert;
                }
            }
        }
    }
    
    

?>