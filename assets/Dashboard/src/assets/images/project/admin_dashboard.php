<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link rel="website Icon" type="png" href="../assets/images/logos/web.png">
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between" >
          <a href="./index.php" class="text-nowrap logo-img">
              <img src="../assets/images/logos/web.png" width="80" alt="" style="margin-left: 50px; margin-top: 10px; height:100px; "/>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
              <li class="nav-small-cap">
                  <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                  <span class="hide-menu">Home</span>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="index.php" >
                      <span>
                          <i class="ti ti-layout-dashboard"></i>
                      </span>
                      <span class="hide-menu">Dashboard</span>
                  </a>
              </li>
              <li class="nav-small-cap">
                  <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                  <span class="hide-menu">Functionalty</span>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="manage_donation_type.php" aria-expanded="false">
                      <span>
                          <i class="fa-solid fa-square-poll-vertical"></i>
                      </span>
                      <span class="hide-menu">Manage donation type   </span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="#" aria-expanded="false">
                      <span>
                          <i class="fa-solid fa-list"></i>
                      </span>
                      <span class="hide-menu">View donor list   </span>
                  </a>
                  
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="#" aria-expanded="false">
                      <span>
                          <i class="fa-solid fa-tag"></i>
                      </span>
                      <span class="hide-menu">View organization  </span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="#" aria-expanded="false">
                      <span>
                          <i class="fa-regular fa-newspaper"></i>
                      </span>
                      <span class="hide-menu">Manage news and events   </span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="#" aria-expanded="false">
                      <span>
                          <i class="fa-brands fa-get-pocket"></i>
                      </span>
                      <span class="hide-menu">Receive donation   </span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="#" aria-expanded="false">
                      <span>
                          <i class="fa-solid fa-bars"></i>
                      </span>
                      <span class="hide-menu">View reports    </span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="#" aria-expanded="false">
                      <span>
                          <i class="fa-solid fa-arrow-right-from-bracket"></i>
                      </span>
                      <span class="hide-menu">Logout   </span>
                  </a>
                  
              </li>


              </div>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">

      </header>
      <!--  Header End -->
      <div class="container-fluid" style="margin-left: 360px">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-18">
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Donation -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Yearly Donation</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3">5000+ Books</h4>
                        <h4 class="fw-semibold mb-3">3000+ Clothes</h4>
                        <div class="d-flex align-items-center mb-3">
                    
                        </div>
                        <div class="d-flex align-items-center">
                         
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id="breakup"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <!-- Monthly Earnings -->
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold">Monthly Donation </h5>
                        <h4 class="fw-semibold mb-3">1000+ Books</h4>
                        <h4 class="fw-semibold mb-3">2000+ Clothes</h4>
                        <div class="d-flex align-items-center pb-1">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="earning"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="mb-4">
                  <h5 class="card-title fw-semibold">Recent pickup</h5>
                </div>
                <ul class="timeline-widget mb-0 position-relative mb-n5">
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1">Donate received from dhrumil busa of 40 books and 45 clothes</div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New donation recorded <a
                        href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                    </div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1">Donate received from hastika sojitra of 50 books and 50 clothes</div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New donation recorded <a
                        href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                    </div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New donation recorded 
                    </div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1">Donation Done</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Donation</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Donor name</h6>
                        </th>
                        
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">books</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">clothes</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Dhrumil Busa</h6>
                            <span class="fw-normal">Donor</span>                          
                        </td>
                       
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <h6 class="fw-semibold mb-0 fs-4">40</h6>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">45</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Hastika Sojitra</h6>
                            <span class="fw-normal">Donor</span>                          
                        </td>
                        
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <h6 class="fw-semibold mb-0 fs-4">50</h6>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">50</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">3</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Shrutirupa movaliya</h6>
                            <span class="fw-normal">Donor</span>                          
                        </td>
                       
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <h6 class="fw-semibold mb-0 fs-4">60</h6>  
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">45</h6>
                        </td>
                      </tr>      
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">4</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Aniket kachhadiya</h6>
                            <span class="fw-normal">Donor</span>                          
                        </td>
                       
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <h6 class="fw-semibold mb-0 fs-4">45</h6>
                           </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">60</h6>
                        </td>
                      </tr>                       
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>