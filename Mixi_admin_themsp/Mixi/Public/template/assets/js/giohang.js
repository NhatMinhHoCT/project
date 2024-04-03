function kiemtrasoluong(x) {
  
    var num=parseInt(x.value);
    if((num>0)||(num<11)){
        if(num<0){
            x.value=1;
            alert("Nhập số lượng ít nhất là 1");
        }
        if(num>10){
            x.value=10;
            alert("Nhập số lượng nhiều nhất là 10");
        }
    }else{
        alert("Các bạn chỉ có thể nhập số từ 1 đến 10");
    }
}
function tangsoluong(x){
    var paren=x.parentNode;
    var soluong_old=paren.previousSibling.previousSibling;
    var soluong_new=parseInt(soluong_old.value) + 1;
    if(soluong_new<11){
        soluong_old.value=soluong_new;
    }else{
        alert("Số lượng không thể lớn hơn 10");
        soluong_new=10;
    }
    var idproduct=parseInt(paren.nextSibling.nextSibling.value);

    // alert("ID: "+idproduct+" & Soluong: "+ soluong_new);

    $.post("capnhatsoluong.php", {
        "idproduct":idproduct,
        "soluong_new":soluong_new
    },
        function (data, textStatus, jqXHR) {
            document.getElementById("cart").innerHTML=data;
        }
    );
}
function giamsoluong(x){
    var paren=x.parentNode;
    var soluong_old=paren.nextSibling.nextSibling;
    var soluong_new=parseInt(soluong_old.value) - 1;
    if(soluong_new>0){
        soluong_old.value=soluong_new;
    }else{
        alert("Số lượng không thể nhỏ hơn 1")
        soluong_new=1;
    }
    // alert(soluong_old.value);
    var idproduct=parseInt(paren.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.value);

    // alert("ID: "+idproduct+" & Soluong: "+ soluong_new);

    $.post("capnhatsoluong.php", {
        "idproduct":idproduct,
        "soluong_new":soluong_new
    },
        function (data, textStatus, jqXHR) {
            document.getElementById("cart").innerHTML=data;
        }
    );
}