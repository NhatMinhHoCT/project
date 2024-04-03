<?php

function getall_sanpham(){
  $conn=connectdb();
  $stmt=$conn->prepare("SELECT * FROM tbl_sach");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}
function getall_sanpham1($iddm,$kyw=""){
  $conn=connectdb();
  $sql="SELECT * FROM tbl_sach WHERE 1";
  if($iddm>0){
    $sql.=" AND id_danhmuc=".$iddm;
  }
  if($kyw!="")$sql.=" AND tensanpham like '%".$kyw."%'";
  $sql.=" order by id_sach DESC"; 
  $stmt=$conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}
function insert_sanpham($iddm,$tensach,$anhsach,$mota,$giaban,$idtg,$idnxb){
  $conn=connectdb();
  $sql="INSERT INTO tbl_sach (id_danhmuc, tensach, anhsach, mota, giaban, id_tacgia, id_nxb) VALUES ('$iddm','$tensach','$anhsach','$mota','$giaban','$idtg','$idnxb')";
  $conn->exec($sql);
}
function delsp($id){
  $conn=connectdb();
  $sql="DELETE FROM tbl_sach WHERE id_sach=".$id;
  $conn->exec($sql);
}
function getonesp($id){
  $conn=connectdb();
  $stmt=$conn->prepare("SELECT * FROM tbl_sach WHERE id_sach=".$id);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}
function updatesp($id,$iddm, $tensach, $anhsach, $mota, $giaban){
  $conn=connectdb();
  if($anhsach==""){
    $sql="UPDATE tbl_sach SET tensach='".$tensach."', id_danhmuc='".$iddm."', mota='".$mota."', giaban='".$giaban."' WHERE id_sach=".$id; 
  }else{
    $sql="UPDATE tbl_sach SET tensach='".$tensach."', id_danhmuc='".$iddm."', anhsach='".$anhsach."', mota='".$mota."', giaban='".$giaban."' WHERE id_sach=".$id; 
 
  }
  $stmt=$conn->prepare($sql);
  $stmt->execute();
}
function showspdetail($id){
  $sql="SELECT * FROM tbl_sach WHERE 1";
  if($id>0) $sql.=" AND id_sach=".$id;
  $conn=connectdb();
  $stmt=$conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetchAll();
  return $kq;
}
?>
