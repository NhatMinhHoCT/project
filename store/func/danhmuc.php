<?php
require_once 'pdo.php';


function danhmuc_insert($ten_danhmuc){
    $sql = "INSERT INTO danhmuc(name) VALUES(?)";
    pdo_execute($sql, $ten_danhmuc);
}

function danhmuc_delete($id){
    $sql = "DELETE FROM danhmuc WHERE id=?";
        pdo_execute($sql, $id);
    }
function danhmuc_all(){
    $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
    return pdo_query($sql);
}

function danhmuc_alldm($kyw){
    $sql = "SELECT * FROM danhmuc WHERE 1";
    if($kyw!=""){
        $sql .= " AND name like ?";
        return pdo_query($sql, "%".$kyw."%");
    }
    else{
        $sql .= " ORDER BY id DESC";
        return pdo_query($sql);
    }
    
}
function get_dsdm_all(){
    $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
    return pdo_query($sql);
}
function showdm($dsdm){
    $html_dm='';
    foreach ($dsdm as $dm) {
        extract($dm);
        $link='index.php?pg=sanpham&iddm='.$id;
        $html_dm.='<a href="'.$link.'">'.$name.'</a>';
    }
    return $html_dm;
}
function get_name_dm($id){
    $sql = "SELECT name FROM danhmuc WHERE id=".$id;
    $kq=pdo_query_one($sql);
    return $kq["name"];
}
function showdm_edit($dsdm,$iddm){
    $html_dm='';
    foreach ($dsdm as $dm) {
        extract($dm);
       if($id===$iddm){
        $se="selected";
       }
       else{
        $se="";
       }
       $html_dm.='<option value="'.$id.'"'.$se.'>'.$name.'</option>';
    }
    return $html_dm;
}
