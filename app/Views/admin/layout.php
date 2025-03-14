<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/public/image/logo2.png" type="image/png">
    <title>ADMIN - <?= esc($title) ?></title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template-->
    <link href="/vendor/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" type="text/javascript"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <div class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <ul id="is-sticky" style="position: sticky;top: 0px;list-style: none;padding: 0;z-index:10;">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                    <div class="sidebar-brand-text mx-3">Admin <sup>Manesti.vn</sup></div>
                </a>
    
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
    
                <!-- Nav Item - Dashboard -->
                <li id="home" class="nav-item">
                    <a class="nav-link" href="/admin">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Bảng tin</span></a>
                </li>
    
                <!-- Divider -->
                <hr class="sidebar-divider">
    
                <!-- Heading -->
                <div class="sidebar-heading">
                    Chính
                </div>
    
                <!-- Nav Item - Pages Collapse Menu -->
                <li id="product banner subbanner" class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Sản phẩm & Banner</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Sản phẩm & Banner:</h6>
                            <a class="collapse-item" href="/admin/products">Sản phẩm</a>
                            <a class="collapse-item" href="/admin/banner">Banner</a>
                            <a class="collapse-item" href="/admin/subbanner">Banner phụ</a>
                        </div>
                    </div>
                </li>
    
                <!-- Nav Item - Utilities Collapse Menu -->
                <li id="order" class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Đơn đặt hàng</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Đơn đặt hàng:</h6>
                            <a class="collapse-item" href="/admin/order?tb=all">Tất cả</a>
                            <a class="collapse-item" href="/admin/order?tb=waiting">Chờ xác nhận</a>
                            <a class="collapse-item" href="/admin/order?tb=processed">Chờ lấy hàng</a>
                            <a class="collapse-item" href="/admin/order?tb=shipping">Đang giao</a>
                            <a class="collapse-item" href="/admin/order?tb=delivered">Đã giao</a>
                            <a class="collapse-item" href="/admin/order?tb=cancel">Hủy</a>
                        </div>
                    </div>
                </li>
    
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <div class="sidebar-heading">
                    Cài đặt
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/category">
                        <i class="fas fa-fw fa-list-alt"></i>
                        <span>Danh mục</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/redirect">
                        <i class="fas fa-fw fa-external-link"></i>
                        <span>Chuyển hướng</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/kiotviet">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Kiot Việt</span></a>
                </li>
                <!-- Sidebar Toggler (Sidebar) -->

            <!-- Sidebar Message -->
                <div class="text-center">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
        </div>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
                                <img class="img-profile rounded-circle" src="/vendor/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/admin/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" hidden>
                    <?= view('admin/' . $page, $data) ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Bot 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xác nhận</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Chọn "Đăng xuất" để thoát khỏi tài khoản.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <a class="btn btn-primary" href="/admin/logout">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>

    <div id="loadingPage" style="background-color: rgba(0,0,0,0.4);position: fixed;width: 100%;height: 100%;z-index: 3;top: 0;display: flex;align-items: center;">
            <div class="text-center" style="width:100%">
                <div class="spinner-border text-light" style="width: 4rem; height: 4rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
    </div>
      <div style="position: fixed; top: 28px; right: 28px;z-index: 2;">
    
        <!-- Then put toasts within -->
        <div class="toast su fade hide" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-success">
            <!--<img src="..." class="rounded mr-2" alt="...">-->
            <strong class="mr-auto text-light">Thành Công</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body">
            Cập nhật thành công!
          </div>
        </div>
    
        <div class="toast er fade hide" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-danger">
            <!--<img src="..." class="rounded mr-2" alt="...">-->
            <strong class="mr-auto text-light">Thất Bại</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body">
            Cập nhật không thành công, đã xẩy ra lỗi!
          </div>
        </div>
      </div>
    <!-- Bootstrap core JavaScript-->
    <!-- <script src="/vendor/jquery/jquery.min.js"></script> -->
    
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/vendor/js/sb-admin-2.min.js"></script>


    <!-- Page level custom scripts -->
    <!--<script src="/vendor/datatables/jquery.dataTables.min.js"></script>-->
    <!--<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>-->

    
    <!-- Page level custom scripts -->
    <!--<script src="/vendor/js/demo/datatables-demo.js"></script>-->

    <script>
        $(window).on('load', function () {
            $('#loadingPage').attr('hidden', true)
            $('.container-fluid').attr('hidden', false)
          }) 
    </script>
    <script>
        $('.toast.su,.toast.er').toast({delay:2000});
        var moneyText = document.querySelectorAll('.money');
        Array.from(moneyText).forEach(money => {
            let val = parseInt(money.textContent)
            money.innerText = Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(val);
        })
        $(document).on({
            ajaxStart: function(){
                $('#loadingPage').attr('hidden', false)
                // $('#loadingPage').modal('show');
                // $('#loadingPage').show();
            },
            ajaxStop: function(){
                $('#loadingPage').attr('hidden', true)
            },
            ajaxSuccess: function() {
                $('.toast.su').toast('show');
            },
            ajaxError: function() {
                $('.toast.er').toast('show');
            }
        });
        var url = window.location.pathname.split('/');
        url = ['/' + String(url[1]), (url[2])?`/${url[2] + window.location.search}`:''].join('');
        var tg  = $('.navbar-nav a[href="' + url +'"]');
        tg.addClass('active');
        tg.closest('li').addClass('active');
        var clo = tg.closest('.collapse');
        if (!!clo.length) {
            tg.closest('.nav-link.collapsed').removeClass('collapsed');
            clo.addClass('show')
        }
             
    </script>
    <style>
    </style>
</body>

</html>