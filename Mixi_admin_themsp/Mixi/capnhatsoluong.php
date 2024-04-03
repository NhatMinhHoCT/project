<?php
    session_start();
    require_once "App\Config\DatabaseConfig.php";
    $soluong_new=$_POST["soluong_new"];
    $idproduct=$_POST["idproduct"];
    if(count($_SESSION["giohang"])>0){
        $_SESSION["giohang"][$idproduct]["Soluong"]=$soluong_new;
    }
    $html_cart='<div class="row mb-5">
                    <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                        <table class="table" >
                        <thead >
                            <tr>
                            <th class="product-thumbnail">Sản Phẩm</th>
                            <th class="product-name">Tên Sản Phẩm</th>
                            <th class="product-price">Giá</th>
                            <th class="product-quantity">Số Lượng</th>
                            <th class="product-total">Tổng </th>
                            <th class="product-remove">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody >';

                        $tongtien=0;
                        if(count($_SESSION["giohang"])>0){
                          foreach ($_SESSION["giohang"] as $item) {
                            $tt=$item["Soluong"]*$item["GiaSP"];
                            $tongtien+=$tt;
                            $html_cart.='<tr >
                                    <td class="product-thumbnail">
                                      <img src="Public/template/assets/images/'.$item["HinhAnhSP"].'" alt="Image" class="img-fluid" style="max-width: 200px;">
                                    </td>
                                    <td class="product-name">
                                      <h2 class="h5 text-black">'.$item["TenSP"].'</h2>
                                    </td>
                                    <td>'.number_format($item["GiaSP"],0,",",".").' VNĐ</td>
                                    <td>
                                      <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                        <div class="input-group-prepend">
                                          <button onclick="giamsoluong(this)" class="btn btn-outline-black decrease" type="button">−</button>
                                        </div>
                                        <input type="text" onkeyup="kiemtrasoluong(this)" class="form-control text-center quantity-amount" value="'.$item["Soluong"].'" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                        <div class="input-group-append">
                                          <button onclick="tangsoluong(this)" class="btn btn-outline-black increase" type="button">+</button>
                                        </div>
                                        <input type="hidden" value="'.$item["IDSP"].'">
                                      </div>
                      
                                    </td>
                                    <td>'.number_format($tt,0,",",".").' VNĐ</td>
                                    <td><a href="'.BASE_PATH.'deleteproduct/'.$item["IDSP"].'" class="btn btn-black btn-sm"><i class="fa fa-trash"></i></a></td>
                                  </tr>';
                          }
                          
                        }
                            
    $html_cart.='       </tbody>
                        </table>
                    </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-6 mb-3 mb-md-0">
                        <div class="main-button">
                            <a href="'.BASE_PATH.'deletecart">Xóa giỏ hàng</a>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="main-button">
                            <a href="'.BASE_PATH.'product">Tiếp tục mua sắm</a>
                        </div>                
                        </div>
                    </div>
                    
                    </div>
                    <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                            <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                            <span class="text-black">TỔNG TIỀN</span>
                            </div>
                            <div class="col-md-6 text-right">
                            <strong class="text-black">'.number_format($tongtien,0,",",".").' VNĐ</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="'.BASE_PATH.'checkout">
                            <button class="btn btn-black btn-lg py-3 btn-block"><strong>THANH TOÁN</strong></button>
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>';
    echo $html_cart;
?>