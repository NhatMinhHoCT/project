<?php

include "header.php";
include "header_nav.php";

?>

<!-- Featurs Section Start -->
<div class="container-fluid featurs py-5">
  <div class="container py-5">
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="featurs-item text-center rounded bg-light p-4">
          <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
            <i class="fas fa-car-side fa-3x text-white"></i>
          </div>
          <div class="featurs-content text-center">
            <h5>Miễn phí vận chuyển</h5>
            <p class="mb-0">Đơn hàng trên 2 triệu</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="featurs-item text-center rounded bg-light p-4">
          <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
            <i class="fas fa-user-shield fa-3x text-white"></i>
          </div>
          <div class="featurs-content text-center">
            <h5>Thanh toán bảo mật</h5>
            <p class="mb-0">Bảo mật thông tin khách hàng</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="featurs-item text-center rounded bg-light p-4">
          <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
            <i class="fas fa-exchange-alt fa-3x text-white"></i>
          </div>
          <div class="featurs-content text-center">
            <h5>30 ngày đổi trả</h5>
            <p class="mb-0">Hoàn tiền hoặc 1 đổi 1</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="featurs-item text-center rounded bg-light p-4">
          <div class="featurs-icon btn-square rounded-circle bg-primary mb-5 mx-auto">
            <i class="fa fa-phone-alt fa-3x text-white"></i>
          </div>
          <div class="featurs-content text-center">
            <h5>Chăm sóc khách hàng</h5>
            <p class="mb-0">Sẵn sàng phản hồi trong vòng 1h</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Featurs Section End -->
<div id="toast"></div>

<div>
  <div onclick="showSuccessToast();" class="btn btn--success">Show success toast</div>
  <div onclick="showErrorToast();" class="btn btn--danger">Show error toast</div>
</div>

<script>
  function showSuccessToast() {
    toast({
      title: "Thành công!",
      message: "Bạn đã đăng ký thành công tài khoản tại F8.",
      type: "success",
      duration: 5000
    });
  }

  function showErrorToast() {
    toast({
      title: "Thất bại!",
      message: "Có lỗi xảy ra, vui lòng liên hệ quản trị viên.",
      type: "error",
      duration: 5000
    });
  }
  // Toast function
  function toast({
    title = "",
    message = "",
    type = "info",
    duration = 3000
  }) {
    const main = document.getElementById("toast");
    if (main) {
      const toast = document.createElement("div");

      // Auto remove toast
      const autoRemoveId = setTimeout(function() {
        main.removeChild(toast);
      }, duration + 1000);

      // Remove toast when clicked
      toast.onclick = function(e) {
        if (e.target.closest(".toast__close")) {
          main.removeChild(toast);
          clearTimeout(autoRemoveId);
        }
      };

      const icons = {
        success: "fas fa-check-circle",
        info: "fas fa-info-circle",
        warning: "fas fa-exclamation-circle",
        error: "fas fa-exclamation-circle"
      };
      const icon = icons[type];
      const delay = (duration / 1000).toFixed(2);

      toast.classList.add("toast", `toast--${type}`);
      toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;

      toast.innerHTML = `
                    <div class="toast__icon">
                        <i class="${icon}"></i>
                    </div>
                    <div class="toast__body">
                        <h3 class="toast__title">${title}</h3>
                        <p class="toast__msg">${message}</p>
                    </div>
                    <div class="toast__close">
                        <i class="fas fa-times"></i>
                    </div>
                `;
      main.appendChild(toast);
    }
  }
</script>


<?php
include "footer.php";
?>