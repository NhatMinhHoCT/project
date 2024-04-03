<?php
   function viewcart(){
      $html_cart='';
      $i=1;
      foreach ($_SESSION['giohang'] as $sp) {
         extract($sp);
         $tt=(Int)$price*(Int)$soluong;
         // $del='index.php?pg=viewcart&del='.$sp["id"];
      
         $html_cart.='
                        <tr>
                        <td>'.$i.'</td>
                        <td><img src="layout/images/'.$img.'" alt="" style="width:100px"></td>
                        <td>'.$name.'</td>
                        <td>'.number_format($price,0,",",".").'</td>
                        <td>'.$soluong.'</td>
                        <td>'.number_format($tt,0,",",".").'</td>
                        <td><a href="">Xóa</a></td>
                  </tr>
                        ';
         $i++;
      }
      return $html_cart;
   }
   function get_tongdonhang(){
      $tong=0;
      foreach ($_SESSION['giohang'] as $sp) {
         extract($sp);
         $tt=(Int)$price*(Int)$soluong;
         $tong+=$tt;
      }
      return $tong;
   }
?>