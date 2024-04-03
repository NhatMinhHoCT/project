<?php
function themtg($tentg,$info){
  $conn=connectdb();
  $sql="INSERT INTO tbl_tacgia (tentacgia, info) VALUES ('$tentg','$info')";
  $conn->exec($sql);
}
function deltg($id){
  $conn=connectdb();
  $sql="DELETE FROM tbl_tacgia WHERE id_tacgia=".$id;
  $conn->exec($sql);
}
function updatetg($id,$tentg){
  $conn=connectdb();
  $sql="UPDATE tbl_tacgia SET tentacgia='".$tentg."' WHERE id_tacgia=".$id;
  $stmt=$conn->prepare($sql);
  $stmt->execute();
}
function getonetg($id){
  $conn=connectdb();
  $stmt=$conn->prepare("SELECT * FROM tbl_tacgia WHERE id_tacgia=".$id);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}
function getall_tg(){
  $conn=connectdb();
  $stmt=$conn->prepare("SELECT * FROM tbl_tacgia");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}

?>