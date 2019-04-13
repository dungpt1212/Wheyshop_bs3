$(document).ready(function() {
    //slide bottom start

    var stt1 = 0;
    var begin_img_1 = $('.ul_bottom_first:last').attr('stt');
    $('.ul_bottom_first').each(function() {
        if ($(this).is(':visible')) {
            stt1 = $(this).attr('stt');
        }
    });

    $('#bottom_first').click(function() {
        if (stt1 == begin_img_1) {
            stt1 = 0;
        }
        next = stt1++;
        $('.ul_bottom_first').hide(700);
        //alert(stt);
        $('.ul_bottom_first').eq(next).show(700);
    });
    setInterval(function() {
        $('#bottom_first').click();
    }, 7000);
    //slide bottom end



    // Hiệu ứng form đăng nhập đăng ký start
    $('#click_dangnhap').click(function() {
        $('#cover').addClass('op');
        $('.form_dangnhap').addClass('xuong');
        $('.thoat').addClass('xuong1');
    });
    $('.thoat').click(function() {
        $('#cover').removeClass('op');
        $('.form_dangnhap').removeClass('xuong');
        $('.form_dangky').removeClass('xuong');
        $('.thoat').removeClass('xuong1');
    });

    $('#click_dangky').click(function() {
        $('.form_dangnhap').removeClass('xuong');
        $('.form_dangky').addClass('xuong');
    })
    $('#click_dangnhap2').click(function() {
        $('#cover').addClass('op');
        $('.form_dangnhap').addClass('xuong');
        $('.thoat').addClass('xuong1');
        $('.form_dangnhap h2').html('<span class="glyphicon glyphicon-remove" style="margin-right: 5px;font-size: 24px;"></span>Bạn vui lòng đăng nhập để tiến hành thanh toán');
        $('.form_dangky h2').html("Đăng ký");
        $('.form_dangnhap h2').css({
            'color': 'White',
        });
        return false;
    });

    // Hiệu ứng form đăng nhập đăng ký end


    //Click ra ngoài vùng div đăng kí thì div đăng kí biến mất start
    $("#cover").mouseup(function(e) {
        var id = "form"
        if (e.target.id != id) //event.target.id: xác định thực hiện sự kiện tại thành phần nào
        // 
        {
            $('#cover').removeClass('op');
            $('.form_dangnhap').removeClass('xuong');
            $('.form_dangky').removeClass('xuong');
            $('.thoat').removeClass('xuong1');
        }
    });
    //Click ra ngoài vùng div đăng kí thì div đăng kí biến mất end

    //Hiệu ứng menu thụt lên thụt xuông start
    $(window).scroll(function() {
        var width = $(window).width();
        if(width >= 768 ){
            vitri = $(this).scrollTop();
            if (vitri > 300 && vitri < 600) {
                $('.menu').addClass('thutvao');
            } else if (vitri >= 600) {
                $('.menu').removeClass('thutvao');
                $('.menu').addClass('xuong2');
                $('#menu_duoi .navbar-inverse').css({
                    'background-color': '#003E52',
                });
                $('#menu_duoi .navbar-inverse').addClass('animated zoomInUp');
                $('#menu_duoi .dropdown a').css({
                    "color": 'White',
                });
                $('#a11').css({
                    'color': 'White',
                });
            } else {
                $('.menu').removeClass('xuong2');
                $('.menu').removeClass('thutvao');
                $('#menu_duoi .navbar-inverse').css({
                    'background-color': '#c7dcef',
                });
                $('#menu_duoi .dropdown a').css({
                    "color": '#AA0F11',
                });
                $('#a11').css({
                    'color': '#AA0F11',

                });

        }
    }
    });
    //Hiệu ứng menu thụt lên thụt xuông end


    /*Hiệu ứng bàn tay lên đầu trang start*/
    $(window).scroll(function() {
        vt_bantay = $(this).scrollTop();
        /*console.log(vt_bantay);*/
        if (vt_bantay >= 1000) {
            $('.nutdautrang .glyphicon').addClass('r');
        } else $('.nutdautrang .glyphicon').removeClass('r');
    });
    $('#bantay').click(function() {
        $('html,body').animate({
            scrollTop: 0
        }, 1000);
    });



    /*Hiệu ứng bàn tay lên đầu trang end*/


    /*tooltip start*/
    $('[hu="tooltip"]').tooltip();
    /*tooltip end*/
   

    /*Hiệu ứng ở menu top start*/
    $('#whey_menutop').click(function() {
        kc = $('.h3_whey').offset().top - 269;
        $('html,body').animate({ scrollTop: kc }, 1000);
        $('#main h3').addClass('h3_main_center');
        return false;
    });
    $('#sua_menutop').click(function() {
        kc = $('.h3_sua').offset().top - 269;
        $('html,body').animate({ scrollTop: kc }, 1000);
        return false;
    });
    $('#tin_menutop').click(function() {
        kc = $('.h3_tin').offset().top - 269;
        $('html,body').animate({ scrollTop: kc }, 1000);
        return false;
    });

    /*Hiệu ứng ở menu top end*/

    /*validate form đăng ký start*/
    $('button[name="bt_dangky"]').click(function(event) {
        var user = $('input[name="txt_user_dk"]').val();
        var pass = $('input[name="txt_pass_dk"]').val();
        var email = $('input[name="txt_email"]').val();
        var name = $('input[name="txt_name"]').val();
        var phone = $('input[name="txt_phone"]').val();
        if (user == "") {
            $('#lb_user').html('<span class="glyphicon glyphicon-remove" style="margin-right: 5px;font-size: 11px;"></span>Tên đăng nhập không được để trống');
            $('input[name="txt_user_dk"]').focus();
            return false;
        }
        if (pass == "") {
            $('#lb_pass').html('<span class="glyphicon glyphicon-remove" style="margin-right: 5px;font-size: 11px;"></span>Mật khẩu không được để trống');
            $('input[name="txt_pass_dk"]').focus();
            return false;
        }
        if (email == "") {
            $('#lb_email').html('<span class="glyphicon glyphicon-remove" style="margin-right: 5px;font-size: 11px;"></span>Email không được để trống');
            $('input[name="txt_email"]').focus();
            return false;
        }
        if (name == "") {
            $('#lb_name').html('<span class="glyphicon glyphicon-remove" style="margin-right: 5px;font-size: 11px;"></span>Tên không được để trống');
            $('input[name="txt_name"]').focus();
            return false;
        }
        if (phone == "") {
            $('#lb_phone').html('<span class="glyphicon glyphicon-remove" style="margin-right: 5px;font-size: 11px;"></span>SDT không được để trống');
            $('input[name="txt_phone"]').focus();
            return false;
        }
        return true;

    });

    /*validate form đăng ký end*/

    // Hiệu ứng form xác nhận thanh toán start
    $('#click_confirm_pay').click(function() {
        $('.confirm_pay').addClass('confirm_pay_show');
        // alert("oooo");
        $('.grey_cart').addClass('grey_cart_show');
        return false;
    })


    $('.grey_cart').click(function() {
            $(this).removeClass('grey_cart_show');
            $('.confirm_pay').removeClass('confirm_pay_show');
            $('.div_history_cart').removeClass('confirm_pay_show');
    })
        // Hiệu ứng form xác nhận thanh toán end

    // Tạo select địa chỉ start
    if ($('.quanhuyen').val() == "") {
        $('.quanhuyen').css({ 'cursor': 'not-allowed', 'background': '#bfbfbf' });
    }
    if ($('.xaphuong').val() == "") {
        $('.xaphuong').css({ 'cursor': 'not-allowed', 'background': '#bfbfbf' });
    }
    $('.tinhthanhpho').change(function() {
        var id = $('.tinhthanhpho').val();
        $('.quanhuyen').css({ 'cursor': 'pointer', 'background': 'none' });
        // alert(id);
        $.post("View/data.php", { id: id }, function(data) {
            $('.quanhuyen').html(data);
        })
    })

    $('.quanhuyen').change(function() {
            var id = $('.quanhuyen').val();
            $('.xaphuong').css({ 'cursor': 'pointer', 'background': 'none' });
            $.post("View/data.php", { id_quanhuyen: id }, function(data) {
                $('.xaphuong').html(data);
            })

        })
        // Tạo select địa chỉ end
    



  /* hiệu ứng lịch sử đơn hàng start*/
   $('.a_history_cart').click(function() {
        $('.div_history_cart').addClass('confirm_pay_show');
        // alert("oooo");
        $('.grey_cart').addClass('grey_cart_show');
        return false;
    })


   /* hiệu ứng lịch sử đơn hàng end*/


  /* hiêu ứng tìm kiếm ở thanh menu start*/
   $('#input_menu .form-control').keyup(function(event) {
      var result = $(this).val();
      $('.result_search').show();
      $('.vuong').show();
      if(result == " "){
        $('.result_search').html("<p>Không tìm thấy sản phẩm nào</p>");
      }else{
         /* $.post("View/data_result_search.php", {result: result}, function(data){
             $('.result_search').html(data);
          })*/

         
          $.ajax({
            type: 'POST',
            url: 'View/data_result_search.php',
            data: {
                result: result,
            },
            dataType: 'html',
            success: function(data) {
                $(".result_search").html(data);
            },
            error: function() {
                alert('Có lỗi trong quá trình xử lý');
            }
        });
      }
    });

   
    $("#cover").mouseup(function(e) {
        var id = "result_search"
        if (e.target.id != id) //event.target.id: xác định thực hiện sự kiện tại thành phần nào
        // 
        {
           $('.result_search').hide();
            $('.vuong').hide();
        }
    });


    /* hiêu ứng tìm kiếm ở thanh menu end*/


/* validate form confirm_pay start*/
   $('button[name="btn_luu"]').click(function(event) {
      var name = $('input[name="txt_name1"]').val();
      var phone = $('input[name="txt_phone1"]').val();
      var addr = $('input[name="txt_addr1"]').val();
      var tinhthanhpho = $('select[name="sl_tinhthanhpho"]').val();
      var quanhuyen = $('select[name="sl_quanhuyen"]').val();
      if(name =="" || phone =="" || addr =="" || tinhthanhpho =="" || quanhuyen ==""){
        $('input[name="txt_name"]').focus();
    
       swal({
              title: "Vui lòng nhập đầy đủ thông tin vào ô có dấu (*)",
              icon: "warning",
              button: "OK",
            });
     
       return false;
      }
      return true;
   });

   


   /* validate form confirm_pay end*/

});