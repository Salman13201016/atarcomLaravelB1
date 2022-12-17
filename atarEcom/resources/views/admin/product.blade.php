


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Majestic Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/base/vendor.bundle.base.css')}}" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="{{asset('admin_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}"
    />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin_assets/css/style.css')}}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.png')}}" />
  </head>

  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
          <div
            class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100"
          >
            <a class="navbar-brand brand-logo" href="index.blade.php"
              ><img src="{{asset('admin_assets/images/logo.svg')}}" alt="logo"
            /></a>
            <a class="navbar-brand brand-logo-mini" href="../../index.html"
              ><img src="{{asset('admin_assets/images/logo-mini.svg')}}" alt="logo"
            /></a>
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-toggle="minimize"
            >
              <span class="mdi mdi-sort-variant"></span>
            </button>
          </div>
        </div>
        <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
        >
          <ul class="navbar-nav mr-lg-4 w-100">
            <li class="nav-item nav-search d-none d-lg-block w-100">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="search">
                    <i class="mdi mdi-magnify"></i>
                  </span>
                </div>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search now"
                  aria-label="search"
                  aria-describedby="search"
                />
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown me-1">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                id="messageDropdown"
                href="#"
                data-bs-toggle="dropdown"
              >
                <i class="mdi mdi-message-text mx-0"></i>
                <span class="count"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="messageDropdown"
              >
                <p class="mb-0 font-weight-normal float-left dropdown-header">
                  Messages
                </p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="../../images/faces/face4.jpg"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">David Grey</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="../../images/faces/face2.jpg"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">Tim Cook</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <img
                      src="../../images/faces/face3.jpg"
                      alt="image"
                      class="profile-pic"
                    />
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">Johnson</h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown me-4">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
                id="notificationDropdown"
                href="#"
                data-bs-toggle="dropdown"
              >
                <i class="mdi mdi-bell mx-0"></i>
                <span class="count"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="notificationDropdown"
              >
                <p class="mb-0 font-weight-normal float-left dropdown-header">
                  Notifications
                </p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
                id="profileDropdown"
              >
                <img src="../../images/faces/face5.jpg" alt="profile" />
                <span class="nav-profile-name">Louis Barnett</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="../../index.html">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('add_cat_show/')}}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Category</span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="collapse"
                href="#ui-basic"
                aria-expanded="false"
                aria-controls="ui-basic"
              >
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="../../pages/ui-features/buttons.html"
                      >Buttons</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="../../pages/ui-features/typography.html"
                      >Typography</a
                    >
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 mx-auto grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Main Category form</h4>
                    <form class="forms-sample" method="post" action="#" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Select Category</label>
                        <select
                         
                          class="form-control"
                          id="sel_cat"
                          name ="cat_id"
                          
                        >
                            <option value="zero">Select Category</option>
                            @foreach($cat_data as $d)
                            <option value="{{$d->id}}">{{$d->cat_name}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Select Sub Category</label>
                        <select
                         
                          class="form-control enable_tag"
                          id="select_sub"
                          name ="sub_cat_id"
                          disabled
                          
                        >
                            <option>Select Sub Category</option>
                            @foreach($cat_data as $d)
                            <option value="{{$d->id}}">{{$d->cat_name}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Product Name</label>
                        <input
                          type="text"
                          class="form-control enable_tag"
                          id="prod_name"
                          name ="prod_name"
                          placeholder="Enter Product Name"
                          disabled
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Product Description</label>
                        <input
                          type="text"
                          class="form-control enable_tag"
                          id="prod_desc"
                          name ="prod_description"
                          placeholder="Enter Product Description"
                          disabled
                        />
                      </div>

                      <div class="form-group">
                        <label for="exampleInputUsername1">Product Image</label>
                        <input
                          type="file"
                          class="form-control enable_tag"
                          id="prod_image"
                          name ="prod_image"
                          disabled
                         
                        />
                </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Add Weight 1</label>
                        <div class="d-flex">
                        <input
                          type="text"
                          class="form-control enable_tag"
                          id="exampleInputUsername1"
                          name ="weight[]"
                          placeholder="Enter Product Weight (E.g, 3ML, 6ML)"
                          disabled
                        />
                        <a href="#" id ="add_more_weight" class="enable_tag btn btn-primary me-2" >
                        <buttton disabled>Add More</button>
                        </a>
                        </div>
                        <div class="form-group weight_div">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Add Price for Weight 1</label>
                        <div class="d-flex">
                        <input
                          type="text"
                          class="form-control enable_tag"
                          id="exampleInputUsername1"
                          name ="prod_price[]"
                          placeholder="Enter Product Price (E.g, 3ML, 6ML)"
                          disabled
                        />
                        </div>
</div>
                        <div class="form-group weight_price_div ">
                        </div>
                      <button type="button" class="btn btn-primary me-2" id="sub_prod">
                        Submit
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 mx-auto grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Show Category</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>Sub Category Name</th>
                            <th>Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @if(isset($subcats))
                            @foreach($subcats as $d)
                            <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$d->cat_name}}</td>
                              <td>{{$d->sub_cat_name}}</td>
                              <td><a href="{{url('update_id/'.$d->id)}}">Edit</a> Delete</td>
                            </tr>
                            @endforeach
                          
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                >Copyright ©
                <a href="https://www.bootstrapdash.com/" target="_blank"
                  >bootstrapdash.com </a
                >2021</span
              >
              <span
                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                >Only the best
                <a href="https://www.bootstrapdash.com/" target="_blank">
                  Bootstrap dashboard
                </a>
                templates</span
              >
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
        <!-- <div class="main-panel">
          <div class="content-wrapper">
            
          </div>
      </div> -->

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admin_assets/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset('admin_assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('admin_assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin_assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin_assets/js/template.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('admin_assets/js/dashboard.js')}}"></script>
    <script src="{{asset('admin_assets/js/data-table.js')}}"></script>
    <script src="{{asset('admin_assets/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin_assets/js/dataTables.bootstrap4.js')}}"></script>
    <!-- End custom js for this page-->

    <script src="{{asset('admin_assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- endinject -->
    <!-- inject:js -->

    <!-- Custom js for this page-->
    <script src="{{asset('admin_assets/js/file-upload.js')}}"></script>
    <script src="{{asset('admin_assets/js/product.js')}}"></script>
    <!-- End custom js for this page-->
  </body>
</html>

