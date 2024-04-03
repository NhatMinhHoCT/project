<section class="category">

    <div class="container">
      <div class="row">
        <div class="category-left">
          <ul>
            <?php
              foreach ($dsdm as $dm){
                echo '<li class="category-left-li"><a href="index.php?act=sanpham&iddm='.$dm['id_danhmuc'].'">'.$dm['tendanhmuc'].'</a></li>';
              }
            ?>
          </ul>
        </div>
        <div class="category-right row">
          <div class="category-right-top-item">
          </div>
          <div class="category-right-top-item">
            <button><span>Bộ lọc</span><i class="fas fa-sort-down"></i></button>
          </div>
          <div class="category-right-top-item">
            <select name=""id ="">
              <option value="">Sắp xếp</option>
              <option value="">Giá cao đến thấp</option>
              <option value="">Giá thấp đến cao</option>
            </select>
          </div>
          <div class="category-right-content row">
            <?php 
                  // foreach($dssp as $sp){
                  // echo '<div class="featured_book_card">
                  //           <div class="featured_book_img">
                  //             <img src="admin/'.$sp['anhsach'].'" alt="">
                  //           </div>
                  //           <div class="featured_book_tag">
                  //             <h2></h2>
                  //             <p class="writer">'.$sp['tensach'].'</p>
                  //             <p class="book_price">'.$sp['giaban'].'<sup>đ</sup></p>
                  //             <br>
                  //             <a href="#" class="f_btn">Tìm hiểu thêm</a>
                  //           </div>
                  //       </div>';
                  // }
              foreach($dssp as $sp){
                echo '<div class="category-right-content-item">
                        <div class="book_card">
                          <div class="book_img">
                            <img src="admin/'.$sp['anhsach'].'" alt="">
                          </div>
                          <div class="book_tag">
                            <p class="writer">'.$sp['tensach'].'</p>
                            <p class="book_price">'.$sp['giaban'].'<sup>đ</sup></p>
                            <br>
                            <a href="index.php?act=product&id='.$sp['id_sach'].'"" class="f_btn">Đặt mua</a>
                          </div>
                        </div>
                      </div>';
                    }
              // foreach($dssp as $sp){
              //   echo '<div class="category-right-content-item">
              //         <img src="admin/'.$sp['anhsach'].'" alt="">
              //         <h1>'.$sp['tensach'].'</h1>
              //         <p>'.$sp['giaban'].'<sup>đ</sup></p>
              //         <button type="button"><a href="" style="text-decoration:none">Mua</a></button>
              //       </div>';
              // }
            ?>      
          </div>
          <div class="category-right-bottom row">
            <div class="category-right-bottom-items">
              <p></p>
            </div>
            <div class="category-right-bottom-items">
              <p><span>&#171;</span>1 2 3 4 5<span>&#187;</span>Trang cuối</p>
            </div>
          </div>
        </div>
      </div>      
  </section>