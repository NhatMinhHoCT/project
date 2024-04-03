<?php
function checkuser($user,$pass){
  $conn=connectdb();
  $stmt=$conn->prepare("SELECT * FROM tbl_admin WHERE user='".$user."' AND pass='".$pass."'");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  if(count($kq)>0) return $kq[0]['Access_authority'];
  else return 0;
}
function getuserinfo($user,$pass){
  $conn=connectdb();
  $stmt=$conn->prepare("SELECT * FROM tbl_admin WHERE user='".$user."' AND pass='".$pass."'");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}
function insert_user($user,$pass,$email,$address){
  $conn=connectdb();
  $sql="INSERT INTO tbl_admin (user, pass, email, address,Access_authority) VALUES ('$user','$pass','$email','$address','0')";
  $conn->exec($sql);
}


/*
function deldm($id){
  $conn=connectdb();
  $sql="DELETE FROM tbl_danhmuc WHERE id_danhmuc=".$id;
  $conn->exec($sql);
}
function updatedm($id,$tendm){
  $conn=connectdb();
  $sql="UPDATE tbl_danhmuc SET tendanhmuc='".$tendm."' WHERE id_danhmuc=".$id;
  $stmt=$conn->prepare($sql);
  $stmt->execute();
}
function getonedm($id){
  $conn=connectdb();
  $stmt=$conn->prepare("SELECT * FROM tbl_danhmuc WHERE id_danhmuc=".$id);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}


?>*/