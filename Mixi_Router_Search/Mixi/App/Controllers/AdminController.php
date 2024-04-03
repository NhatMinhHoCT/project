<?php
namespace App\Controllers;

use App\Models\AdminModel;

class AdminController extends AdminBaseController{

        private $AdminModel;

        function __construct(){
            $this->AdminModel= new AdminModel;
        }

        function index(){


            $this->titlepage = 'Home';
            $this->renderView("HomeAdmin", $this->titlepage, $this->data);
        }

        function categoryadmin(){
            $dsdm_admin=$this->AdminModel->category_get_all();
            $this->data["danhmuc_all"]=$dsdm_admin;
            $this->titlepage = 'Quản lý danh mục';
            $this->renderView("CategoryAdmin", $this->titlepage, $this->data);
        }


        function productadmin(){
            $dssp_admin=$this->AdminModel->product_get_all();
            $this->data["sanpham_all"]=$dssp_admin;
            $this->titlepage = 'Quản lý sản phẩm';
            $this->renderView("ProductAdmin", $this->titlepage, $this->data);
        }


        function billadmin(){

            $this->titlepage = 'Quản lý đơn hàng';
            $this->renderView("BillAdmin", $this->titlepage, $this->data);
        }
        
        function addadmin(){

            $this->titlepage = 'Thêm mới ';
            $this->renderView("AddFormAdmin", $this->titlepage, $this->data);
        }

}