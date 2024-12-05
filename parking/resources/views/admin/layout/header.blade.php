<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Parking Dashbord</title>
    <link rel="stylesheet" href="{{asset('admin-style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="container-scroller">
   
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white mr-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <a class="navbar-brand brand-logo" href="/admin"><img src="{{ $logo }}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          
    
      
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                 <img src="data:image/png;base64,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" alt="" />
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"> test</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
           
           
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <!-- <i class="fa fa-bell" aria-hidden="true"></i> -->
                <span class="count-symbol bg-warning"><i class="fa-solid fa-message"></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"><i class="fa fa-bell" aria-hidden="true"></i></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-cog"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
    
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
     
      
            <li class="nav-item nav-profile">
              <a href="" class="nav-link">
                <div class="nav-profile-image">
                  <img src="data:image/png;base64,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" alt="" />
                  <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">test</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="/admin">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/user">
                <span class="menu-title">Users</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
           
          </ul>
        </nav>