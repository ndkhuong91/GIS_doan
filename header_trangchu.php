<!DOCTYPE html>
<html lang="en">
<?php   session_start(); ?>
   <?php   
   // if(isset($_SESSION['user'])==false){
   //  header("Location: http://125.234.104.228:90/thucpham/NiceAdmin/login.php");
   
  ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
  <!-- Bootstrap CSS -->
  <link href="Niceadmin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="Niceadmin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="Niceadmin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="Niceadmin/css/font-awesome.min.css" rel="stylesheet" />

  <!-- full calendar css-->
  <link href="Niceadmin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="Niceadmin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="Niceadmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="Niceadmin/css/owl.carousel.css" type="text/css">
  <link href="Niceadmin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="Niceadmin/css/fullcalendar.css">
  <link href="Niceadmin/css/widgets.css" rel="stylesheet">
  <link href="Niceadmin/css/style.css" rel="stylesheet">
  <link href="Niceadmin/css/style-responsive.css" rel="stylesheet" />
  <link href="Niceadmin/css/xcharts.min.css" rel=" stylesheet">
  <link href="Niceadmin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  
  <script src="Niceadmin/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="Niceadmin/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="Niceadmin/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="Niceadmin/js/jquery.scrollTo.min.js"></script>
  <script src="Niceadmin/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="Niceadmin/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="Niceadmin/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="Niceadmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="Niceadmin/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <script src="Niceadmin/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="Niceadmin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="Niceadmin/js/calendar-custom.js"></script>
    <script src="Niceadmin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="Niceadmin/js/jquery.customSelect.min.js"></script>
    <script src="Niceadmin/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="Niceadmin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="Niceadmin/js/sparkline-chart.js"></script>
    <script src="Niceadmin/js/easy-pie-chart.js"></script>
    <script src="Niceadmin/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="Niceadmin/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="Niceadmin/js/xcharts.min.js"></script>
    <script src="Niceadmin/js/jquery.autosize.min.js"></script>
    <script src="Niceadmin/js/jquery.placeholder.min.js"></script>
    <script src="Niceadmin/js/gdp-data.js"></script>
    <script src="Niceadmin/js/morris.min.js"></script>
    <script src="Niceadmin/js/sparklines.js"></script>
    <script src="Niceadmin/js/charts.js"></script>
    <script src="Niceadmin/js/jquery.slimscroll.min.js"></script>
    <script src="http://d3js.org/d3.v3.min.js"></script>
   

    
    <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
    
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{latest-api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  
</script>


  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">Quản lý Nhà  <span class="lite">Trọ</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li> 
              <select name="selectOp" id="mySelect" onchange="selectChange()" >
                <option value="9">Chọn quận/huyện</option>
                <option value="0">Bình Thuỷ</option>
                <option value="1">Cờ Đỏ</option>
                <option value="2">Ninh Kiều</option>
                <option value="3">Cái Răng</option>
                <option value="4">Ô Môn</option>
                <option value="5">Phong Điền</option>
                <option value="6">Thới Lai</option>
                <option value="7">Thốt Nốt</option>
                <option value="8">Vĩnh Thạnh</option>
              </select>
          </li>
          <li>
            <input class="form-control" style="height: 50px; margin-top:3px;" id="truongcantim" placeholder="Nhập tên trường" type="text">
          </li>
          <li>
            <input class="form-control" id="kmcantim" style="height: 50px; margin-top:3px;" placeholder="Nhập số km" type="text">
          </li>
          <li><button type="button" onclick="tim()">Tìm</button></li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
        
          <!-- task notificatoin start -->
          <!--
          <li id="task_notificatoin_bar" class="dropdown">
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 6 pending letter</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
      -->
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
         <!--
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
      -->
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          
              
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <!-- <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo '../showimg.php?id='.$_SESSION["img"];  ?>" style="width: 50px; height: 50px;">
                            </span>
                            <span class="username"><?php echo $_SESSION["ten"]; ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
          
          	  <li>
                <a href="login.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              
            </ul>
          </li> -->
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Trang chủ</span>
                      </a>
          </li>

          <li class="active">
            <a class="" href="NiceAdmin/truong.php">
                        <i class="icon_document_alt"></i>
                          <span>Trường</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Nhà trọ</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="NiceAdmin/nguoidung.php">Danh sách nhà trọ</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Phòng trọ</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="NiceAdmin/phong.php">Danh sách phòng trọ</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="#" onclick="addLegend();" class="">
                          <i class="icon_document_alt"></i>
                          <span>Thống kê số lượng</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="#"  onclick="hideMap();" class="">
                          <i class="icon_document_alt"></i>
                          <span>Vẽ biểu đồ</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
          </li>
          <!-- <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Tài khoản</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="nguoidung.php">Thông tin tài khoản</a></li>
            </ul>
          </li> -->
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->