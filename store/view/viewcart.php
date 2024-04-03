<?php
   $html_cart=viewcart();
?>
    <section class="containerfull">
        <div class="container">
            <div class="col9 viewcart">
                <h2>ĐƠN HÀNG</h2>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Hình</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
               <?=$html_cart;?>
            </table>
            <a href="index.php?pg=viewcart&del=1">Xóa đơn hàng</a>
        </div>
        <div class="col3">
            <h2>ĐƠN HÀNG</h2>
                
            <div class="total">
                <h3>Tổng đơn hàng: <?=number_format($thanhtoan,0,",",".")?> VNĐ</h3>
            </div>
            <button>Thanh toán</button>
        </div>


        </div>
    </section>