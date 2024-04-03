<?php
require_once 'pdo.php';

function hien_thi_so_trang($dssp,$soluongsp){
    $tongsanpham=count($dssp);
    $sotrang=ceil($tongsanpham/$soluongsp);
    $html_sotrang="";
    for ($i=1; $i <=$sotrang ; $i++) { 
        $html_sotrang.='<a href="index.php?pg=products&page='.$i.'">'.$i.'</a> ';
    }
    return $html_sotrang;
}

function get_dssp_all(){
    $sql = "SELECT * FROM sanpham ORDER BY id DESC";
    return pdo_query($sql);
}
function get_dssp_admin($kyw,$page,$soluongsp){
    
    $batdau=($page-1)*$soluongsp;
    $sql = "SELECT * FROM sanpham WHERE 1";
    if($kyw!=""){
        $sql .= " AND name like ?";
        $sql .= " ORDER BY id DESC";
        $sql .= " LIMIT ".$batdau.",".$soluongsp;
        return pdo_query($sql,"%".$kyw."%");
    }else{
        $sql .= " ORDER BY id DESC";
        $sql .= " LIMIT ".$batdau.",".$soluongsp;
        return pdo_query($sql);
    }

    
}
function get_dssp_new($limi){
    $sql = "SELECT * FROM sanpham ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}
function get_dssp_best($limi){
    $sql = "SELECT * FROM sanpham WHERE dacbiet=1 ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}

function get_dssp($kyw,$iddm,$limi){
    $sql = "SELECT * FROM sanpham WHERE 1";
    if($iddm>0){
        $sql .=" AND iddm=".$iddm;
    }
    if($kyw!=""){
        $sql .=" AND name like '%".$kyw."%'";
    }

    $sql .= " ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}

function get_sanphamchitiet($id){
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query_one($sql,$id);
}

function get_dssp_lienquan($iddm,$id,$limi){
    $sql = "SELECT * FROM sanpham WHERE iddm=? AND id<>? ORDER BY id DESC limit ".$limi;
    return pdo_query($sql,$iddm,$id);
}

function get_iddm($id){
    $sql = "SELECT iddm FROM sanpham WHERE id=?";
    return pdo_query_value($sql,$id);
}

function showsp($dssp){
    $html_dssp='';
    foreach ($dssp as $sp) {
        extract($sp);
        if($dacbiet==1){
            $best='<div class="best"></div>';
        }else{
            $best='';
        }
        $html_dssp.='
            <div class="box25 mr15">
                '.$best.'
                <a href="index.php?pg=sanphamchitiet&id='.$id.'">
                    <img src="layout/images/'.$img.'" alt="">
                </a>
                <span class="namesp">'.$name.' </span>
                <span class="price">'.number_format($price,0,",",".").' đ</span>
                <form action="index.php?pg=addcart" method="post">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="img" value="'.$img.'">
                    <input type="hidden" name="price" value="'.$price.'">
                    <input type="hidden" name="soluong" value="1">
                    <button type="submit" name="addcart">Đặt hàng</button>
                </form>
            </div>';
    }
    return $html_dssp;
}
//sanpham
function sanpham_delete($id){
    $sql = "DELETE FROM sanpham WHERE id=?";
        pdo_execute($sql, $id);
}

function sanpham_insert($iddm,$name, $img, $price,$dacbiet,$tacgia){
    $sql = "INSERT INTO sanpham(iddm, name, img, price, tacgia,dacbiet) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $iddm,$name, $img, $price,$tacgia, $dacbiet);    
}

function sanpham_update($name, $img, $price,$iddm,$tacgia,$dacbiet,$id){
    if($img!==""){
        $sql = "UPDATE sanpham SET name=?,img=?, price=?,iddm=?,tacgia=?,dacbiet=? WHERE id=?";
        pdo_execute($sql, $name, $img, $price,$iddm,$tacgia,$dacbiet,$id);
    }  
    else {
        $sql = "UPDATE sanpham SET name=?,price=?,iddm=?,tacgia=?,dacbiet=? WHERE id=?";
        pdo_execute($sql, $name, $price,$iddm,$tacgia,$dacbiet,$id);
    }
}