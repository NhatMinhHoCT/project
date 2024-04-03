<?php
function themnxb($tennxb,$diachi){
  $conn=connectdb();
  $sql="INSERT INTO tbl_nxb (tennxb, diachi) VALUES ('$tennxb','$diachi')";
  $conn->exec($sql);
}
function delnxb($id){
  $conn=connectdb();
  $sql="DELETE FROM tbl_nxb WHERE id_nxb=".$id;
  $conn->exec($sql);
}
function updatenxb($id,$tennxb){
  $conn=connectdb();
  $sql="UPDATE tbl_nxb SET tennxb='".$tennxb."' WHERE id_nxb=".$id;
  $stmt=$conn->prepare($sql);
  $stmt->execute();
}
function getonenxb($id){
  $conn=connectdb();
  $stmt=$conn->prepare("SELECT * FROM tbl_nxb WHERE id_nxb=".$id);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}
function getall_nxb(){
  $conn=connectdb();
  $stmt=$conn->prepare("SELECT * FROM tbl_nxb");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}

?>