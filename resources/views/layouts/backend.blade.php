<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard Admin</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
       />
    <link
      rel="icon"
      href="{{asset('assets/img/smk assalaam.png') }}"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />
    <link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />


    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
  </head>
  <body  style="overflow-x: hidden">
    <div class="wrapper">
      <!-- Sidebar -->
        @include('include.backend.sidebar')
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          @include('include.backend.navbar')
          <!-- End Navbar -->
        </div>

        {{-- main content --}}
            <main class="main-wrapper">
                <div class="main-content">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
                  </div>

                  <div class="row">
                    <div class="col-md-8">
                      <div class="card card-round">
                        <div class="card-header">
                          <div class="card-head-row">
                            <div class="card-title">User Statistics</div>
                            <div class="card-tools">
                              <a
                                href="#"
                                class="btn btn-label-success btn-round btn-sm me-2"
                              >
                                <span class="btn-label">
                                  <i class="fa fa-pencil"></i>
                                </span>
                                Export
                              </a>
                              <a href="#" class="btn btn-label-info btn-round btn-sm">
                                <span class="btn-label">
                                  <i class="fa fa-print"></i>
                                </span>
                                Print
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="chart-container" style="min-height: 375px">
                            <canvas id="statisticsChart"></canvas>
                          </div>
                          <div id="myChartLegend"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card card-primary card-round">
                        <div class="card-header">
                          <div class="card-head-row">
                            <div class="card-title">Daily Sales</div>
                            <div class="card-tools">
                              <div class="dropdown">
                                <button
                                  class="btn btn-sm btn-label-light dropdown-toggle"
                                  type="button"
                                  id="dropdownMenuButton"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  Export
                                </button>
                                <div
                                  class="dropdown-menu"
                                  aria-labelledby="dropdownMenuButton"
                                >
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#"
                                    >Something else here</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-category">March 25 - April 02</div>
                        </div>
                        <div class="card-body pb-0">
                          <div class="mb-4 mt-2">
                            <h1>$4,578.58</h1>
                          </div>
                          <div class="pull-in">
                            <canvas id="dailySalesChart"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="card card-round">
                        <div class="card-body pb-0">
                          <div class="h1 fw-bold float-end text-primary">+5%</div>
                          <h2 class="mb-2">17</h2>
                          <p class="text-muted">Users online</p>
                          <div class="pull-in sparkline-fix">
                            <div id="lineChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

            </main>
        {{-- akhir main content --}}
            {{-- footer --}}

      {{-- footer --}}

      <!-- Custom template | don't include it in your project! -->
      {{-- <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
          <div class="switcher">
            <div class="switch-block">
              <h4>Logo Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="selected changeLogoHeaderColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Navbar Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="selected changeTopBarColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Sidebar</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="white"
                ></button>
                <button
                  type="button"
                  class="selected changeSideBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="dark2"
                ></button>
              </div>
            </div>
          </div>
        </div>
        <div class="custom-toggle">
          <i class="icon-settings"></i>
        </div>
      </div> --}}
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></scri>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jsvectormap/world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>

    <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
     <script>
        $(".data-attributes span").peity("donut")

    </>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

    </script>
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false
                , buttons: [ 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });

    </script>


    // <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    // {{-- <script src="{{ asset('assets/js/setting-demo.js') }}"></script>
    // <script src="{{ asset('assets/js/demo.js') }}"></script>
    // <script>
    //   $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
    //     type: "line",
    //     height: "70",
    //     width: "100%",
    //     lineWidth: "2",
    //     lineColor: "#177dff",
    //     fillColor: "rgba(23, 125, 255, 0.14)",
    //   });

    //   $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
    //     type: "line",
    //     height: "70",
    //     width: "100%",
    //     lineWidth: "2",
    //     lineColor: "#f3545d",
    //     fillColor: "rgba(243, 84, 93, .14)",
    //   });

    //   $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
    //     type: "line",
    //     height: "70",
    //     width: "100%",
    //     lineWidth: "2",
    //     lineColor: "#ffa534",
    //     fillColor: "rgba(255, 165, 52, .14)",
    //   });
    // </script> --}}
  </body>
</html>
