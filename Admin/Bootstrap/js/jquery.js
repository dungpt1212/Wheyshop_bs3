$(document).ready(function(){
    /*Hiệu ứng menu trái start*/
    $('#icon_menu_left a').click(function(event) {
        $('.menu_left').toggleClass('menu_vao');
        $('.black').toggleClass('op');
        $('.quanlysanpham').toggleClass('scale');
        $('.bill_detail').removeClass('hien');
        return false;
    });
    /* $('.black').click(function(event) {
         $('.black').toggleClass('op');
        $('.menu_left').toggleClass('menu_vao');
        $('.quanlysanpham').toggleClass('scale');
     });*/


    /*Hiệu ứng menu trái end*/

    /*Hiệu ứng hover menu trái start*/
    $('.menu_hover').slideUp();
    $('div.list-group-item').hover(function(event) {
        $(this).find('.menu_hover').slideDown();
    }, function() {
        $(this).find('.menu_hover').slideUp(10);
    });
    /*Hiệu ứng hover menu trái end*/

    /*Validate form update start*/
    $('.lb_error').hide();
    $('button[name="btn_update"]').click(function(event) {
        var name_group = $('input[name="txt_namegroup"]').val();
        var name_groupdetai = $('input[name="txt_namegroupdetail"]').val();
        var namenewsgroup = $('input[name="txt_namenewsgroup"]').val();
        if (name_group == "") {
            $('input[name="txt_namegroup"]').next('.lb_error').show();
            return false;
        }
        if (name_groupdetai == "") {
            $('input[name="txt_namegroupdetail"]').next('.lb_error').show();
            return false;
        }
        if (namenewsgroup == "") {
            $('input[name="txt_namenewsgroup"]').next('.lb_error').show();
            return false;
        }
        return true;
    });
    /*Validate form update end*/

    /*Validate form add start*/
    $('button[name="btn_add"]').click(function(event) {
        var name_product = $('input[name="txt_nameproduct"]').val();
        var newprice = $('input[name="num_newprice"]').val();
        var urlimage = $('input[name="txt_urlimage"]').val();
        var note = $('input[name="txt_note"]').val();
        var amount = $('input[name="num_amount"]').val();
        var namegroup = $('input[name="txt_namegroup"]').val();
        var namegroupdetail = $('input[name="txt_namegroupdetail"]').val();
        var namenewsgroup = $('input[name="txt_namenewsgroup"]').val();
        var urlimage = $('input[name="txt_urlimage"]').val();
        var taikhoan = $('input[name="txt_taikhoan"]').val();
        var matkhau = $('input[name="txt_matkhau"]').val();
        var xacnhanmatkhau = $('input[name="txt_xacnhanmatkhau"]').val();
        if (name_product == "") {
            $('input[name="txt_nameproduct"]').next('.lb_error').show();
            $('input[name="txt_nameproduct"]').focus();
            $('input[name="txt_nameproduct"]').next('.lb_error').hide(5000);
            return false;
        }
        if (newprice == "") {
            $('input[name="num_newprice"]').next('.lb_error').show();
            $('input[name="num_newprice"]').focus();
            $('input[name="num_newprice"]').next('.lb_error').hide(5000);
            return false;
        }
        if (urlimage == "") {
            $('input[name="txt_urlimage"]').next('.lb_error').show();
            $('input[name="txt_urlimage"]').focus();
            $('input[name="txt_urlimage"]').next('.lb_error').hide(5000);
            return false;
        }
        if (note == "") {
            $('input[name="txt_note"]').next('.lb_error').show();
            $('input[name="txt_note"]').focus();
            $('input[name="txt_note"]').next('.lb_error').hide(5000);
            return false;
        }
        if (amount == "") {
            $('input[name="num_amount"]').next('.lb_error').show();
            $('input[name="num_amount"]').focus();
            $('input[name="num_amount"]').next('.lb_error').hide(5000);
            return false;
        }
        if (namegroup == "") {
            $('input[name="txt_namegroup"]').next('.lb_error').show();
            $('input[name="txt_namegroup"]').focus();
            $('input[name="txt_namegroup"]').next('.lb_error').hide(5000);
            return false;
        }
        if (namegroupdetail == "") {
            $('input[name="txt_namegroupdetail"]').next('.lb_error').show();
            $('input[name="txt_namegroupdetail"]').focus();
            $('input[name="txt_namegroupdetail"]').next('.lb_error').hide(5000);
            return false;
        }
        if (urlimage == "") {
            $('input[name="txt_urlimage"]').next('.lb_error').show();
            $('input[name="txt_urlimage"]').focus();
            $('input[name="txt_urlimage"]').next('.lb_error').hide(5000);
            return false;
        }
        if (namenewsgroup == "") {
            $('input[name="txt_namenewsgroup"]').next('.lb_error').show();
            $('input[name="txt_namenewsgroup"]').focus();
            $('input[name="txt_namenewsgroup"]').next('.lb_error').hide(5000);
            return false;
        }
        if (taikhoan == "") {
            $('input[name="txt_taikhoan"]').next('.lb_error').show();
            $('input[name="txt_taikhoan"]').focus();
            $('input[name="txt_taikhoan"]').next('.lb_error').hide(5000);
            return false;
        }
        if (matkhau == "") {
            $('input[name="txt_matkhau"]').next('.lb_error').show();
            $('input[name="txt_matkhau"]').focus();
            $('input[name="txt_matkhau"]').next('.lb_error').hide(5000);
            return false;
        }
        if (xacnhanmatkhau == "") {
            $('input[name="txt_xacnhanmatkhau"]').next('.lb_error').show();
            $('input[name="txt_xacnhanmatkhau"]').focus();
            $('input[name="txt_xacnhanmatkhau"]').next('.lb_error').hide(5000);
            return false;
        }
        if(matkhau != xacnhanmatkhau){
            swal({
              title: "Mật khẩu không trùng khớp",
              icon: "warning",
              button: "OK",
              });
            $('input[name="txt_xacnhanmatkhau"]').focus();
            return false
        }
        return true;
    });

    $('input[name="txt_xacnhanmatkhau"]').keyup(function(event) {
       var matkhau = $('input[name="txt_matkhau"]').val();
       var xacnhanmatkhau = $('input[name="txt_xacnhanmatkhau"]').val();
        if(matkhau != xacnhanmatkhau){
            $('.alert_confirm_pass').html('<span class="glyphicon glyphicon-remove"></span>xác nhận mật khẩu chưa chính xác');
            $('.alert_confirm_pass').show();
            $('.vuong_confirm_pass').show();
        }else{
            $('.alert_confirm_pass').html('Mật khẩu trùng khớp');
             $('.alert_confirm_pass').hide();
             $('.vuong_confirm_pass').hide(0);
        }
    });


    /*Validate form add end*/


    /* Tìm kiếm trong bảng (Danh sách sản phẩm) start*/
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    /* Tìm kiếm trong bảng (Danh sách sản phẩm) end*/

    /*Hiệu ứng xem chi tiết hóa đơn start*/

    $('.xemhoadon').click(function(event) {
        var idbill = $(this).attr("idbill");
        $('.bill_detail').addClass('hien');
        $('.black').addClass('op');
        $.get("View/manage_billdetail.php", { id: idbill }, function(data) {
            $('.bill_detail').html(data);
        });
        return false;
    });

    $('.black').click(function(event) {
        $('.black').removeClass('op');
        $('.menu_left').removeClass('menu_vao');
        $('.quanlysanpham').removeClass('scale');
        $('.bill_detail').removeClass('hien');
    });




    /*Hiệu ứng xem chi tiết hóa đơn end*/
    /* thay đổi trạng thái đơn hàng start*/
    $('.td_status').click(function(event) {
        $('.td_status').find('.nho').hide();
        $('.td_status').find('.to').hide();
        $(this).find('.nho').show();
        $(this).find('.to').show();

    });

    $('.td_status a.fa.fa-check-circle').click(function(event) {
        var trangthai = $('.sl_trangthai').val();
        var thaydoi = $(this).parents('.td_status').find('.btn_trangthai');
        var idbill = $(this).parents('.td_status').find('.btn_trangthai').attr("idbill");
        $.get("View/update_status.php", { trangthai: trangthai, idbill: idbill }, function(data) {
            thaydoi.html(data);
            if (trangthai == "Hoàn tất") {
                thaydoi.css({
                    'background': 'red',
                    'color': 'yellow'

                });
            } else {
                thaydoi.css({
                    'background': '#337ab7',
                    'color': 'white'

                });
            }
        })
        $('.td_status').find('.nho').hide();
        $('.td_status').find('.to').hide();
        return false;
    });
    /* thay đổi trạng thái đơn hàng end*/

    /*Chức năng thống kê start*/

    $('.btn_thongke').click(function(event) {
        var year = $('.sl_year').val();
        var month = $('.sl_month').val();
        $.post('View/data_statistics.php', {year: year, month: month}, function(data) {
            $('.thongke .quanlysanpham').html(data);
        });
    });

    /*Chức năng thống kê end*/
    
});