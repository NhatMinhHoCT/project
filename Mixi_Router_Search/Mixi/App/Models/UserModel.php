<?php
namespace App\Models;
class UserModel{
    private $db;
        function __construct(){
            $this->db = new DatabaseModel;
        }

        

        public function userlogin($email, $password){
            $sql = "SELECT * FROM taikhoan WHERE email=? AND password=?";
            return $this->db->get_one($sql, $email, $password);
        }
        
        public function SignIntUser($username, $password, $email, $HinhAnh, $Role)
        {
            $sql = "INSERT INTO taikhoan(Username, password, email, HinhAnh, Role) VALUES (?, ?, ?, ?, ?)";
            $this->db->pdo_execute($sql, $username, $password, $email, $HinhAnh, $Role);
        }

        function user_checkemail($email){
            $sql="select * from taikhoan where email=?";
            return $this->db->get_one($sql, $email);
        }


        function update_user($id, $username, $email, $HinhAnh){
            $sql="update taikhoan set username=?, email=?, HinhAnh=? where id=?";
            $this->db->pdo_execute($sql, $username, $email, $HinhAnh, $id);
        }
}


?>