<html lang="en" class=" ">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico">

  <title>Trang Quản trị </title>

  <!-- Bootstrap -->
  <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta name="csrf-token" content="FZVBKJNg0GQqhyYZAdZOmPJLFYJN0v2wsy5o5ue0">
  <!-- Font Awesome -->
  <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet"> -->
  <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/animate.css/animate.min.css" rel="stylesheet">


  <!-- Custom Theme Style -->
  <link href="http://127.0.0.1:8000/layout_admin/admin/build/css/custom.min.css" rel="stylesheet">
  <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">




  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!--     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css"> -->






  <!-- jQuery -->

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">


  <!-- <link rel="stylesheet" href="http://127.0.0.1:8000/layout_admin/css/jquery-ui.css"> -->

  <!-- <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet"> -->


  <style>
    .cke {
      visibility: hidden;
    }
  </style>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="http://127.0.0.1:8000/trangchu" class="site_title"><i class="fa fa-paw"></i> <span>Quản lý !</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="http://127.0.0.1:8000/layout_admin/admin/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php

                  use Illuminate\Support\Facades\Session;

                  $name = Session::get('name');
                  if ($name) {
                    echo $name ;
                  }
                  ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br>

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section active">
              <h3>General</h3>
              <ul class="nav side-menu" style="">
                <li class="current-page"><a href="http://127.0.0.1:8000/trangchu"><i class="fa fa-home"></i> Quản lý </a>

                </li>
                <li><a href="http://127.0.0.1:8000/pagination"><i class="fa fa-edit"></i> Sản phẩm</a>

                </li>
                <li><a href="http://127.0.0.1:8000/category/index"><i class="fa fa-desktop"></i> Loại sản phẩm </a>
                </li>
                <li><a href="http://127.0.0.1:8000/users"><i class="fa fa-table"></i> User</a>
                </li>
                <li><a href="http://127.0.0.1:8000/manage-order"><i class="fa fa-bar-chart-o"></i> Đơn hàng <span class="badge badge-success">0</span></a>
                </li>
                <li><a href="http://127.0.0.1:8000/attr"><i class="fa fa-clone"></i>Thuộc tính</a>

                </li>
                <li><a href="http://127.0.0.1:8000/list-coupon"><i class="fa fa-clone"></i>Mã giảm giá</a>

                </li>
                <li><a href="http://127.0.0.1:8000/manage-slider"><i class="fa fa-clone"></i>Slideshow</a>

                </li>
                <li><a href="http://127.0.0.1:8000/all-post"><i class="fa fa-clone"></i>Bài viết</a>

                </li>
                <li><a href="http://127.0.0.1:8000/information"><i class="fa fa-clone"></i>Thông tin website</a>

                </li>

                <li><a href="http://127.0.0.1:8000/all-category-post"><i class="fa fa-bar-chart-o"></i> Danh mục bài viết </a>
                </li>
                <li><a href="http://127.0.0.1:8000/quangcao"><i class="fa fa-edit"></i> Banner quảng cáo</a></li>
                <li><a href=" http://127.0.0.1:8000/introduce"><i class="fa fa-clone"></i>Giới thiệu</a>

                </li>
                <li><a href="http://127.0.0.1:8000/chinhsach"><i class="fa fa-clone"></i>Chính sách</a>

                </li>
                <!--  <li><a href="http://127.0.0.1:8000/comment"><i class="fa fa-clone"></i>Bình luận</a>
                    
                  </li> -->


              </ul>
            </div>


          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="" href="login.html" data-original-title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>
      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">

              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="http://127.0.0.1:8000/layout_admin/admin/images/img.jpg" alt="">
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <!-- <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a> -->
                  <!--  <a class="dropdown-item"  href="javascript:;">Help</a> -->
                  <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>


              <!--  <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->
              <li class="mr-4">


              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="right_col" role="main" style="min-height: 1487.74px;">
        @yield('main')
      </div>


      <footer>
        <div class="pull-right">
          Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/fastclick/lib/fastclick.js"></script>
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/select2/dist/js/select2.full.min.js"></script>
  <!-- NProgress -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/Flot/jquery.flot.js"></script>
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/Flot/jquery.flot.pie.js"></script>
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/Flot/jquery.flot.time.js"></script>
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/Flot/jquery.flot.stack.js"></script>
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/DateJS/build/date.js"></script>



  <!-- JQVMap -->
  <!--     <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script> -->
  <!-- bootstrap-daterangepicker -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/moment/min/moment.min.js"></script>
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/build/js/custom.min.js"></script>

  <script src="http://127.0.0.1:8000/layout_admin/ckeditor/ckeditor.js"></script>
  <!--     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
  <script src="http://127.0.0.1:8000/layout_admin/js/simple.money.format.js"></script>
  <!-- <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/morris.js/morris.min.js"></script>
    <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/raphael/raphael.min.js"></script> -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

  <!--     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> -->




  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/jszip/dist/jszip.min.js"></script>
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/pdfmake/build/vfs_fonts.js"></script>
  <!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/validator/multifield.js"></script>
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/validator/validator.js"></script>




  <!--     <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script> -->





  <!-- <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/jquery/dist/jquery.min.js"></script> -->
  <!-- Bootstrap -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="http://127.0.0.1:8000/layout_admin/admin/vendors/nprogress/nprogress.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <script src="http://127.0.0.1:8000/layout_admin/admin/build/js/custom.min.js"></script>
  <script src="http://127.0.0.1:8000/layout_admin/js/jquery.min.js"></script>
  <!-- Custom Theme Scripts -->

  <!--  -->



  <!--   <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async="" defer=""></script>


  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script type="text/javascript">
    chart60daysorder();
    var chart = new Morris.Bar({

      element: 'chart1',
      //option chart
      lineColors: ['#819C79', '#fc8710', '#FF6541', '#A4ADD3', '#766B56'],
      parseTime: false,
      hideHover: 'auto',
      xkey: 'period',
      ykeys: ['order', 'sales', 'profit', 'quantity'],
      labels: ['đơn hàng', 'doanh số', 'lợi nhuận', 'số lượng']

    });

    function chart60daysorder() {
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url: "http://127.0.0.1:8000/days-order",
        method: "POST",
        dataType: "JSON",
        data: {
          _token: _token
        },
        success: function(data) {
          chart.setData(data);
        }
      });
    }

    $('.dashboard-filter').change(function() {
      var dashboard_value = $(this).val();
      var _token = $('input[name="_token"]').val();
      // alert(dashboard_value);
      $.ajax({
        url: "http://127.0.0.1:8000/dashboard-filter",
        method: "POST",
        dataType: "JSON",
        data: {
          dashboard_value: dashboard_value,
          _token: _token
        },

        success: function(data) {
          chart.setData(data);
        }

      });

    });

    $('#btn-dashboard-filter').click(function() {

      var _token = $('input[name="_token"]').val();

      var from_date = $('#datepicker').val();
      var to_date = $('#datepicker2').val();
      if (from_date > to_date) {
        toastr.warning('ngày không hợp lệ, bạn hãy chọn ngày phù hợp');
      } else {
        $.ajax({
          url: "http://127.0.0.1:8000/filter-by-date",
          method: "POST",
          dataType: "JSON",
          data: {
            from_date: from_date,
            to_date: to_date,
            _token: _token
          },
          error: function(data) {
            toastr.warning('không có dữ liệu');
          },
          success: function(data) {
            chart.setData(data);
          }
        });
      }



    });
  </script>

  <script type="text/javascript">
    $(function() {
      $("#datepicker").datepicker({
        prevText: "Tháng trước",
        nextText: "Tháng sau",
        dateFormat: "yy-mm-dd",
        dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
        duration: "slow"
      });
      $("#datepicker2").datepicker({
        prevText: "Tháng trước",
        nextText: "Tháng sau",
        dateFormat: "yy-mm-dd",
        dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
        duration: "slow"
      });
    });
  </script>




  <script>
    $('.chitiet').click(function() {
      var id = $(this).data("id");
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url: "view-order/" + id,
        method: "POST",
        dataType: "JSON",
        data: {
          id: id,
          _token: _token
        },
        success: function(data) {
          $('#kh').html(data.kh);
          $('#ship').html(data.ship);
          $('#detail').html(data.detail);
          $('#in').html(data.in);
          $('#print').html(data.print);
        }
      });
    });
  </script>





  <!--      -->


  <script>
    $('.nhan').on('click', function() {
      var value = $('input:checkbox:checked').map(function() {
        return this.value;
      }).get().join(",");

      var _token = $('input[name="_token"]').val();
      if (value == '') {
        toastr.warning('chọn sản phẩm cần xóa');
      } else {
        $.ajax({
          url: "http://127.0.0.1:8000/xoanhieu",
          method: "POST",
          data: {
            value: value,
            _token: _token
          },
          success: function(data) {
            window.location.reload();
          }
        });
      }

    });
  </script>



  <script>
    function hideshow() {
      var password = document.getElementById("password1");
      var slash = document.getElementById("slash");
      var eye = document.getElementById("eye");

      if (password.type === 'password') {
        password.type = "text";
        slash.style.display = "block";
        eye.style.display = "none";
      } else {
        password.type = "password";
        slash.style.display = "none";
        eye.style.display = "block";
      }

    }
  </script>

  <script>
    // initialize a validator instance from the "FormValidator" constructor.
    // A "<form>" element is optionally passed as an argument, but is not a must
    var validator = new FormValidator({
      "events": ['blur', 'input', 'change']
    }, document.forms[0]);
    // on form "submit" event
    document.forms[0].onsubmit = function(e) {
      var submit = true,
        validatorResult = validator.checkAll(this);
      console.log(validatorResult);
      return !!validatorResult.valid;
    };
    // on form "reset" event
    document.forms[0].onreset = function(e) {
      validator.reset();
    };
    // stuff related ONLY for this demo page:
    $('.toggleValidationTooltips').change(function() {
      validator.settings.alerts = !this.checked;
      if (this.checked)
        $('form .alert').remove();
    }).prop('checked', false);
  </script>









  <script type="text/javascript">
    $('#search').on('keyup', function() {
      var value = $(this).val();
      $.ajax({
        type: 'get',
        url: 'http://127.0.0.1:8000/product/search',
        data: {
          search: value
        },
        success: function(data) {
          $('#list').html(data);
        }
      });
    })
    $.ajaxSetup({
      headers: {
        'csrftoken': 'FZVBKJNg0GQqhyYZAdZOmPJLFYJN0v2wsy5o5ue0'
      }
    });
  </script>

  <!-- coupon -->
  <script type="text/javascript">
    $(function() {
      $("#start_coupon").datepicker({
        prevText: "Tháng trước",
        nextText: "Tháng sau",
        dateFormat: "yy/mm/dd",
        dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
        duration: "slow"
      });
      $("#end_coupon").datepicker({
        prevText: "Tháng trước",
        nextText: "Tháng sau",
        dateFormat: "yy/mm/dd",
        dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
        duration: "slow"
      });
    });
  </script>
  <!-- end coupon  -->
  <script type="text/javascript">
    function ChangeToSlug() {
      var slug;

      //Lấy text từ thẻ input title 
      slug = document.getElementById("slug").value;
      slug = slug.toLowerCase();
      //Đổi ký tự có dấu thành không dấu
      slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
      slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
      slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
      slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
      slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
      slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
      slug = slug.replace(/đ/gi, 'd');
      //Xóa các ký tự đặt biệt
      slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
      //Đổi khoảng trắng thành ký tự gạch ngang
      slug = slug.replace(/ /gi, "-");
      //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
      //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
      slug = slug.replace(/\-\-\-\-\-/gi, '-');
      slug = slug.replace(/\-\-\-\-/gi, '-');
      slug = slug.replace(/\-\-\-/gi, '-');
      slug = slug.replace(/\-\-/gi, '-');
      //Xóa các ký tự gạch ngang ở đầu và cuối
      slug = '@' + slug + '@';
      slug = slug.replace(/\@\-|\-\@|\@/gi, '');
      //In slug ra textbox có id “slug”
      document.getElementById('convert_slug').value = slug;
    }
  </script>
  <script src="http://127.0.0.1:8000/layout_admin/js/bootstrap.min.js"></script>




  <script type="text/javascript">
    $(document).ready(function() {

      //     });
      var donut = Morris.Donut({
        element: 'donut',
        resize: true,
        colors: [
          '#2A3F54',
          '#20c997',
          '#17a2b8',
          '#dc3545',
          '#dc3545'

        ],
        //labelColor:"#cccccc", // text color
        //backgroundColor: '#333333', // border color
        data: [{
            label: "Đơn hàng mới",
            value: 0
          },
          {
            label: "Đơn hàng đã bị hủy",
            value: 0
          },
          {
            label: "Đang vận chuyển",
            value: 0
          },

          {
            label: "Đơn hàng đã xử lý",
            value: 0
          }
        ]
      });

    });
  </script>





  <script src="http://127.0.0.1:8000/layout_admin/js/validate.js"></script>
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script> -->
  <script type="text/javascript">
    $.validate({

    });
  </script>

  <script type="text/javascript">
    $(function() {
      $("#datepicker").datepicker({
        prevText: "Tháng trước",
        nextText: "Tháng sau",
        dateFormat: "yy-mm-dd",
        dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
        duration: "slow"
      });
      $("#datepicker2").datepicker({
        prevText: "Tháng trước",
        nextText: "Tháng sau",
        dateFormat: "yy-mm-dd",
        dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
        duration: "slow"
      });
    });
  </script>


  <script type="text/javascript">
    $('.update_quantity_order').click(function() {
      var order_product_id = $(this).data('product_id');
      var order_qty = $('.order_qty_' + order_product_id).val();
      var order_code = $('.order_code').val();
      var _token = $('input[name="_token"]').val();
      // alert(order_product_id);
      // alert(order_qty);
      // alert(order_code);
      $.ajax({
        url: 'http://127.0.0.1:8000/update-qty',

        method: 'POST',

        data: {
          _token: _token,
          order_product_id: order_product_id,
          order_qty: order_qty,
          order_code: order_code
        },
        // dataType:"JSON",
        success: function(data) {

          alert('Cập nhật số lượng thành công');

          location.reload();




        }
      });

    });
  </script>
  <script type="text/javascript">
    $('.order_details').change(function() {
      var order_status = $(this).val();
      var order_id = $(this).children(":selected").attr("id");
      var _token = $('input[name="_token"]').val();

      //lay ra so luong
      quantity = [];
      $("input[name='product_sales_quantity']").each(function() {
        quantity.push($(this).val());
      });
      //lay ra product id
      order_product_id = [];
      $("input[name='order_product_id']").each(function() {
        order_product_id.push($(this).val());
      });
      j = 0;
      for (i = 0; i < order_product_id.length; i++) {
        //so luong khach dat
        var order_qty = $('.order_qty_' + order_product_id[i]).val();
        //so luong ton kho
        var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();

        if (parseInt(order_qty) > parseInt(order_qty_storage)) {
          j = j + 1;
          if (j == 1) {
            alert('Số lượng bán trong kho không đủ');
          }
          $('.color_qty_' + order_product_id[i]).css('background', '#000');
        }
      }

      if (j == 0) {

        $.ajax({
          url: 'http://127.0.0.1:8000/update-order-qty',
          method: 'POST',
          data: {
            _token: _token,
            order_status: order_status,
            order_id: order_id,
            quantity: quantity,
            order_product_id: order_product_id
          },
          success: function(data) {
            alert('đơn hàng đã được xử lý');
            location.reload();
          }
        });

      }

    });
  </script>

  <script type="text/javascript">
    $('.comment_duyet_btn').click(function() {
      var comment_status = $(this).data('comment_status');

      var comment_id = $(this).data('comment_id');
      var comment_product_id = $(this).attr('id');
      if (comment_status == 0) {
        var alert = 'Thay đổi thành duyệt thành công';
      } else {
        var alert = 'Thay đổi thành không duyệt thành công';
      }
      $.ajax({
        url: "http://127.0.0.1:8000/allow-comment",
        method: "POST",

        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
          comment_status: comment_status,
          comment_id: comment_id,
          comment_product_id: comment_product_id
        },
        success: function(data) {
          location.reload();
          $('#notify_comment').html('<span class="text text-alert">' + alert + '</span>');

        }
      });


    });
    $('.btn-reply-comment').click(function() {
      var comment_id = $(this).data('comment_id');

      var comment = $('.reply_comment_' + comment_id).val();



      var comment_product_id = $(this).data('product_id');


      // alert(comment);
      // alert(comment_id);
      // alert(comment_product_id);

      $.ajax({
        url: "http://127.0.0.1:8000/reply-comment",
        method: "POST",

        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
          comment: comment,
          comment_id: comment_id,
          comment_product_id: comment_product_id
        },
        success: function(data) {
          $('.reply_comment_' + comment_id).val('');
          $('#notify_comment').html('<span class="text text-alert">Trả lời bình luận thành công</span>');

        }
      });


    });
  </script>
  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $(imgPre).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $('#ful').change(function() {
      readURL(this, '#imgPre');
    });
  </script>



  <script type="text/javascript">
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    // CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor', {

      filebrowserImageUploadUrl: "http://127.0.0.1:8000/uploads-ckeditor?_token=FZVBKJNg0GQqhyYZAdZOmPJLFYJN0v2wsy5o5ue0",
      filebrowserBrowseUrl: "http://127.0.0.1:8000/file-browser?_token=FZVBKJNg0GQqhyYZAdZOmPJLFYJN0v2wsy5o5ue0",
      filebrowserUploadMethod: 'form'

    });
    CKEDITOR.replace('ckeditor1', {

      filebrowserImageUploadUrl: "http://127.0.0.1:8000/uploads-ckeditor?_token=FZVBKJNg0GQqhyYZAdZOmPJLFYJN0v2wsy5o5ue0",
      filebrowserBrowseUrl: "http://127.0.0.1:8000/file-browser?_token=FZVBKJNg0GQqhyYZAdZOmPJLFYJN0v2wsy5o5ue0",
      filebrowserUploadMethod: 'form'

    });
  </script>