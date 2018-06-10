<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Purple Admin</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/vendors/css/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- inject:css -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/style.css">
      <!-- endinject -->
      <link rel="shortcut icon" href="<?php echo base_url();?>assets/admin/images/favicon.png" />
   </head>
   <body>
      <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
         <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="<?php echo base_url();?>index.php/dashboard"><img src="<?php echo base_url();?>assets/admin/images/logo.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="<?php echo base_url();?>index.php/dashboard"><img src="<?php echo base_url();?>assets/admin/images/logo-mini.svg" alt="logo"/></a>
         </div>
         <div class="navbar-menu-wrapper d-flex align-items-stretch">
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
                  <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                     <div class="nav-profile-img">
                        <img src="<?php echo base_url();?>assets/admin/images/faces/face1.jpg" alt="image">
                        <span class="availability-status online"></span>
                     </div>
                     <div class="nav-profile-text">
                        <p class="mb-1 text-black">Sobhagya Kumar</p>
                     </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                     <a class="dropdown-item" href="#">
                     <i class="mdi mdi-cached mr-2 text-success"></i>
                     Activity Log
                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">
                     <i class="mdi mdi-logout mr-2 text-primary"></i>
                     Signout
                     </a>
                  </div>
               </li>
               <li class="nav-item d-none d-lg-block full-screen-link">
                  <a class="nav-link">
                  <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                  </a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email-outline"></i>
                  <span class="count-symbol bg-warning"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                     <h6 class="p-3 mb-0">Messages</h6>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                           <img src="<?php echo base_url();?>assets/admin/images/faces/face4.jpg" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                           <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                           <p class="text-gray mb-0">
                              1 Minutes ago
                           </p>
                        </div>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                           <img src="<?php echo base_url();?>assets/admin/images/faces/face2.jpg" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                           <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                           <p class="text-gray mb-0">
                              15 Minutes ago
                           </p>
                        </div>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                           <img src="<?php echo base_url();?>assets/admin/images/faces/face3.jpg" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                           <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                           <p class="text-gray mb-0">
                              18 Minutes ago
                           </p>
                        </div>
                     </a>
                     <div class="dropdown-divider"></div>
                     <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                  <span class="count-symbol bg-danger"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
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
                           <p class="text-gray ellipsis mb-0">
                              Just a reminder that you have an event today
                           </p>
                        </div>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                           <div class="preview-icon bg-warning">
                              <i class="mdi mdi-settings"></i>
                           </div>
                        </div>
                        <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                           <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                           <p class="text-gray ellipsis mb-0">
                              Update dashboard
                           </p>
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
                           <p class="text-gray ellipsis mb-0">
                              New admin wow!
                           </p>
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
         <!-- partial -->
         <div class="main-panel">
            <div class="content-wrapper">
               <div class="page-header">
                  <h3 class="page-title">
                     <span class="page-title-icon bg-gradient-primary text-white mr-2">
                     <i class="mdi mdi-home"></i>
                     </span>
                     Dashboard
                  </h3>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                           <span></span>Overview
                           <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                     </ul>
                  </nav>
               </div>
               <div class="row">
                  <div class="col-md-3 stretch-card grid-margin">
                     <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                           <img src="<?php echo base_url();?>assets/admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                           <h4 class="font-weight-normal mb-3">Weekly Sales
                              <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                           </h4>
                           <h2 class="mb-5">$ 15,0000</h2>
                           <h6 class="card-text">Increased by 60%</h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 stretch-card grid-margin">
                     <div class="card bg-gradient-info card-img-holder text-white">
                        <div class="card-body">
                           <img src="<?php echo base_url();?>assets/admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                           <h4 class="font-weight-normal mb-3">Weekly Orders
                              <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                           </h4>
                           <h2 class="mb-5">45,6334</h2>
                           <h6 class="card-text">Decreased by 10%</h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 stretch-card grid-margin">
                     <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body">
                           <img src="<?php echo base_url();?>assets/admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                           <h4 class="font-weight-normal mb-3">Visitors Online
                              <i class="mdi mdi-diamond mdi-24px float-right"></i>
                           </h4>
                           <h2 class="mb-5">95,5741</h2>
                           <h6 class="card-text">Increased by 5%</h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 stretch-card grid-margin">
                     <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                           <img src="<?php echo base_url();?>assets/admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                           <h4 class="font-weight-normal mb-3">Weekly Sales
                              <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                           </h4>
                           <h2 class="mb-5">$ 15,0000</h2>
                           <h6 class="card-text">Increased by 60%</h6>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-7 grid-margin stretch-card">
                     <div class="card">
                        <div class="card-body">
                           <div class="clearfix">
                              <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                              <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                           </div>
                           <canvas id="visit-sale-chart" class="mt-4"></canvas>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-5 grid-margin stretch-card">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title">Traffic Sources</h4>
                           <canvas id="traffic-chart"></canvas>
                           <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                      <div class="col-4 grid-margin stretch-card">
                         <div class="card">
                            <div class="card-body">

    <!-- form start here -->
                               <form class="forms-sample" action="<?php echo base_url()?>index.php/Base_controller/admin_dashboard" method="post" enctype="multipart/form-data">
                               <div class="form-group">
                                  <input type="text" class="form-control" name="blog_title" value="" placeholder="BlogTitle">
                               </div>
                               <div class="form-group">
                                  <input type="text" class="form-control" name="blog_type" placeholder="BlogType">
                               </div>
                               <div class="form-group">
                                  <input type="text" class="form-control" name="blog_cat_name" placeholder="BlogCatName">
                               </div>
                               <div class="form-group">
                                  <input type="text" class="form-control" name="tag_name" placeholder="BlogTagName">
                               </div>


                      <div class="row">

                      <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                               <div class="form-check">
                                     <label class="form-check-label">
                                       <input type="radio" class="form-check-input" name="file" id="file1" value="" checked>
                                       Image
                                     </label>
                                   </div>
                                 </div>

                                  <div class="col-sm-5">

                                   <div class="form-check">
                                     <label class="form-check-label">
                                       <input type="radio" class="form-check-input" name="file" id="file2" value="">
                                       Video
                                     </label>
                                   </div>
                  </div>
                  <div class="col-sm-1"></div>
                  </div>



                    <label id="blog_file" style="padding:18px;border:2px solid purple;width:320px;border-radius:5px;">Upload Image
                     <input type="file" class="form-control" name="blog_file" style="display:none;">
                     </label>



                  <div class="form-group">
                     <input type="text" style="display:none;" class="form-control" name="youtube_link" id="youtube_link" placeholder="youtube link">
                  </div>


                            </div>
                         </div>
                      </div>
                      <div class="col-5 grid-margin stretch-card">
                         <div class="card">
                            <div class="card-body">
                               <div class="form-group">
                                  <textarea class="form-control" id="exampleTextarea1" name="blog_content" rows="30">Enter contents..</textarea>
                               </div>
                            </div>
                         </div>

                      </div>



                      <div class="col-3 grid-margin stretch-card">
                         <div class="card">
                            <div class="card-body">

                      <div class="form-group">
                         <textarea class="form-control" id="exampleTextarea1" name="meta_description" rows="10">Seo description</textarea>
                      </div>
                      <div class="form-group">
                         <textarea class="form-control" id="exampleTextarea1" name="meta_keywords" rows="10">Seo Keywords</textarea>
                      </div>
                      <div class="form-group">
                         <input type="text" class="form-control" name="meta_author" placeholder="" value="Sobhagya Kumar">
                      </div>
                    </div>
                  <button type="submit" name="blog_submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    </div>
                    </div>

    </form>
    <!-- form end here -->

                      <div class="col-lg-8 grid-margin stretch-card">
                         <div class="card">
                            <div class="card-body">

                              <form class="forms-sample" action="<?php echo base_url()?>index.php/Base_controller/admin_dashboard" method="post" enctype="multipart/form-data">
                               <div class="form-group">
                                  <textarea name="seo_description" class="form-control"<?php echo $seo->row()->description;?> id="exampleTextarea1" rows="5" style="font-size:20px;"><?php echo $seo->row()->description;?></textarea>
                               </div>
                               <div class="form-group">
                                  <textarea name="seo_keywords" class="form-control" id="exampleTextarea1" rows="5" style="line-height:20px;"><?php echo $seo->row()->keywords;?></textarea>
                               </div>
                               <div class="form-group">
                                  <input type="text" name="seo_author" class="form-control" value="<?php echo $seo->row()->author;?>" placeholder="Author">
                               </div>
                              </div>
                              <button type="submit" name="update_seo" class="btn btn-gradient-primary mr-2">Update</button>
                              <button type="reset" class="btn btn-light">Cancel</button>
                            </form>

                         </div>
                      </div>


                      <div class="col-lg-4 grid-margin stretch-card">

                           <div class="card">

                             <div class="row">
                               <div class="col-sm-2"></div>
                               <div class="col-sm-4">
                             <div class="form-check">
                                   <label class="form-check-label">
                                     <input type="radio" class="form-check-input" name="rec" id="rec_show" value="" checked>
                                     Records
                                   </label>
                                 </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4">
                                 <div class="form-check">
                                   <label class="form-check-label">
                                     <input type="radio" class="form-check-input" name="rec" id="rec_delete" value="">
                                     Delete
                                   </label>
                                 </div>

                                    </div>
                                       </div>


                             <div class="card-body" id="recordToDisplay">
                               <table class="table table-hover">
                                 <thead>
                                   <tr>
                                     <th>Slno</th>
                                     <th>Id</th>
                                     <th>Title</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php
                              $i=1;
                              foreach($data->result() as $d){
                               ?>
                                   <tr>
                                     <td><?php echo $i;?> </td>
                                     <td><?php echo $d->blog_id;?></td>
                                     <td><?php echo $d->blog_title;?></td>
                                   </tr>
                                     <?php
                              $i++;
                              }

                               ?>

                                 </tbody>
                               </table>
                             </div>

    <form class="forms-sample" action="<?php echo base_url()?>index.php/Base_controller/admin_dashboard" method="post" enctype="multipart/form-data">
        <div class="card-body" style="display:none;" id="recordToDelete">
          <div class="form-group">
             <input type="text" class="form-control" name="blog_title" placeholder="" value="EnterTitle">
          </div>
        <button type="submit" name="blog_delete" class="btn btn-gradient-primary mr-2">Delete</button>
        </div>
    </form>

                           </div>
                           </div>
                           </div>
                      </div>

                    </div>

                   </div>
                   <!-- content-wrapper ends -->
                   <!-- partial:partials/_footer.html -->
                   <!-- partial -->
                </div>
                <!-- main-panel ends -->
             </div>
             <!-- page-body-wrapper ends -->
          </div>
          <!-- container-scroller -->
          <!-- plugins:js -->
          <script src="<?php echo base_url();?>assets/admin/vendors/js/vendor.bundle.base.js"></script>
          <script src="<?php echo base_url();?>assets/admin/vendors/js/vendor.bundle.addons.js"></script>
          <script src="<?php echo base_url();?>assets/admin/js/off-canvas.js"></script>
          <script src="<?php echo base_url();?>assets/admin/js/misc.js"></script>
          <script src="<?php echo base_url();?>assets/admin/js/dashboard.js"></script>
          <!-- End custom js for this page-->

    <script type="text/javascript">
        file1=document.getElementById('file1');
        file2=document.getElementById('file2');
        blog_file=document.getElementById('blog_file');
        youtube_link=document.getElementById('youtube_link');
        file1.onclick=function() {image()};
        file2.onclick=function() {video()};
        function image(){
          blog_file.style.display = "block";
          youtube_link.style.display = "none";
        }
        function video(){
          youtube_link.style.display = "block";
          blog_file.style.display = "none";
        }

        rec_show =document.getElementById('rec_show');
        rec_delete =document.getElementById('rec_delete');
        recordToDisplay =document.getElementById('recordToDisplay');
        recordToDelete =document.getElementById('recordToDelete');
        rec_show.onclick=function() {displayRecords()};
        rec_delete.onclick=function() {deleteRecords()};
        function displayRecords(){
          recordToDisplay.style.display = "block";
          recordToDelete.style.display = "none";
        }
        function deleteRecords(){
          recordToDelete.style.display = "block";
          recordToDisplay.style.display = "none";
        }

    </script>
       </body>
    </html>
