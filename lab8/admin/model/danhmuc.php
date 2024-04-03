<?php
function themdm($tendm){
  $conn=connectdb();
  $sql="INSERT INTO tbl_danhmuc (tendanhmuc) VALUES ('".$tendm."')";
  $conn->exec($sql);
}
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
function getall_dm(){
  $conn=connectdb();
  $stmt=$conn->prepare("SELECT * FROM tbl_danhmuc");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}

?>