<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


  <!-- Customized Bootstrap Stylesheet -->
  <link href="../include/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="../include/css/style.css" rel="stylesheet">
  <style>
    /* ======= Buttons ======== */



    /* ======= Toast message ======== */

    #toast {
      position: fixed;
      top: 32px;
      right: 32px;
      z-index: 999999;
    }

    .toast {
      display: flex;
      align-items: center;
      background-color: #fff;
      border-radius: 2px;
      padding: 20px 0;
      min-width: 400px;
      max-width: 450px;
      border-left: 4px solid;
      box-shadow: 0 5px 8px rgba(0, 0, 0, 0.08);
      transition: all linear 0.3s;
    }

    @keyframes slideInLeft {
      from {
        opacity: 0;
        transform: translateX(calc(100% + 32px));
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes fadeOut {
      to {
        opacity: 0;
      }
    }

    .toast--success {
      border-color: #47d864;
    }

    .toast--success .toast__icon {
      color: #47d864;
    }

    .toast--info {
      border-color: #2f86eb;
    }

    .toast--info .toast__icon {
      color: #2f86eb;
    }

    .toast--warning {
      border-color: #ffc021;
    }

    .toast--warning .toast__icon {
      color: #ffc021;
    }

    .toast--error {
      border-color: #ff623d;
    }

    .toast--error .toast__icon {
      color: #ff623d;
    }

    .toast+.toast {
      margin-top: 24px;
    }

    .toast__icon {
      font-size: 24px;
    }

    .toast__icon,
    .toast__close {
      padding: 0 16px;
    }

    .toast__body {
      flex-grow: 1;
    }

    .toast__title {
      font-size: 16px;
      font-weight: 600;
      color: #333;
    }

    .toast__msg {
      font-size: 14px;
      color: #888;
      margin-top: 6px;
      line-height: 1.5;
    }

    .toast__close {
      font-size: 20px;
      color: rgba(0, 0, 0, 0.3);
      cursor: pointer;
    }
  </style>
</head>

<body>


  <div id="toast"></div>

  <div>
    <div onclick="showToast('Thành công','Đăng nhập để tiếp tục','success');" class="btn btn--success">Show success toast</div>
    <div onclick="showErrorToast();" class="btn btn--danger">Show error toast</div>
  </div>

  <script>
    function showToast(title1, message1, type1) {
      toast({
        title: title1,
        message: message1,
        type: type1,
        duration: 3000
      });
    }

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
  include "footer.php"
  ?>