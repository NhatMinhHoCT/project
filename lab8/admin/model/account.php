<?php
function getall_acc(){
  $conn=connectdb();
  $stmt=$conn->prepare("SELECT * FROM tbl_admin");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}
function delacc($id){
  $conn=connectdb();
  $sql="DELETE FROM tbl_admin WHERE id_admin=".$id;
  $conn->exec($sql);
}
?>