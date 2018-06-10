<!DOCTYPE html>
<html lang="en">
<?php
$seo=$seo->row();
 ?>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $seo->description;?>">
        <meta name="keywords" content="<?php echo $seo->keywords;?>">
        <meta name="author" content="<?php echo $seo->author;?>">
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">
        <title>Monetimes | Time To Code.</title>


        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,600,700" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- MENU CSS -->
        <link href="<?php echo base_url();?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />

        <!-- MATERIALDESIGN ICON -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/materialdesignicons.min.css">

        <!-- CUSTOM STYLESHEET -->
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/default.css" rel="stylesheet" type="text/css" />


<style media="screen">
      .videoWrapper {
      position: relative;
      padding-bottom: 56.25%; /* 16:9 */
      padding-top: 25px;
      height: 0;
      }
      .videoWrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      }
      pre{
        border-radius:10px;
        background:#f0f4f7;
        border:none;
        padding:10px;
      }




.plinks{
  color:#000000;
  text-decoration:none;
  background:lightgrey;
  padding:10px 20px;
  border:1px solid grey;
  border-radius: 3px;
  font-weight:bold;
  margin:2px;
  border:1px solid grey;
}
.plinks:hover{
  text-decoration:none;
  color:#000000;
  background:#777777;

}
.curpage{
  background:#777777;
  color:#fff;
  padding:0px 6px;
  border:1px solid grey;
  padding:10px 20px;
  border-radius: 3px;
  font-weight:bold;
  border:1px solid grey;
}
.curpage:hover{
  /* background:lightgrey; */
}

</style>

    </head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar-mobile">
                <div class="logo">
                    <a href="<?php echo base_url()?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt="" class="" style="height: 44px;"></a>
                    <button class="button-menu-mobile">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
            </div>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <div class="logo">
                        <a href="<?php echo base_url()?>"><h3 style="color:#0db3e3;">Monetimes</h3></a>
                        <p class="text-muted" style="font-size:15px;">
                          You can find all kind of technolgy, educations tutorials,programming languages from here.
                          We accept paid works.We will happy to help you out if you have any business goals related
                          to information technology. Contact us to make your dream success. monetimes will be always with you.
                         </p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <script async="async" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <script>
                             (adsbygoogle = window.adsbygoogle || []).push({
                                  google_ad_client: "ca-pub-4268105315820811",
                                  enable_page_level_ads: true
                             });
                        </script>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <div class="page-wrapper">
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="page-title">
                                    <div class="row">
                                        <div class="col-md-9 col-xs-12">
                                            <h2><span>Our Service</span></h2>

                                            <p class="subtitle text-muted">
                                              You can find all kind of technolgy, educations tutorials,programming languages from here.
                                              We accept paid works.We will happy to help you out if you have any business goals related
                                              to information technology. Contact us to make your dream success. monetimes will be always with you.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mt-5 pb-5">
                    <div class="container">

                        <div class="row">
                            <!-- Content-->
                            <div class="col-xl-8">

                                <!-- Post-->
                                <?php

                                foreach($data->result() as $d){ ?>
                                <article class="post">

                                    <div class="post-header">
                                        <h2 class="post-title"><a href="<?php echo base_url();?>index.php/Base_controller/single_content/<?php echo $d->blog_id;?>"><?php echo $d->blog_title;?></a></h2>
                                        <ul class="post-meta">
                                            <li><i class="mdi mdi-calendar"></i> <?php echo $d->blog_added;?></li>
                                            <li><i class="mdi mdi-tag-text-outline"></i> <?php echo $d->blog_type;?></li>
                                            <li><i class="mdi mdi-comment-multiple-outline"></i> <a href="<?php echo base_url();?>index.php/Base_controller/single_content/<?php echo $d->blog_id;?>">3 Comments</a></li>
                                        </ul>
                                    </div>

                                    <?php
                                    $youtube_link=$d->youtube_link;
                                    if(empty($youtube_link)){
                                     ?>
                                   <div class="post-preview">
                                        <a href="<?php echo base_url();?>index.php/Base_controller/single_content/<?php echo $d->blog_id;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $d->blog_file;?>" alt="" class="img-fluid rounded"></a>
                                    </div>
                                    <?php
                                  }else{
                                    ?>
                                    <div class="videoWrapper">
                                      <iframe style="border-radius:5px;" src="<?php echo $youtube_link."?showinfo=0&?modestbranding=1&rel=0";?>" frameborder="0" allowfullscreen></iframe>
                                      <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Z6ytvzNlmRo?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=0" frameborder="0"></iframe> -->
                                    </div>
                                    <br>
                                    <?php
                                  }
                                  ?>




                                    <!-- <div class="post-content">
                                        <p><?php echo $d->blog_content;?></p>
                                    </div> -->

                                    <div><a href="<?php echo base_url();?>index.php/Base_controller/single_content/<?php echo $d->blog_id;?>" class="btn float-right btn-outline-custom">Read Me <i class="mdi mdi-arrow-right"></i></a></div>
                                    <br>
                                </article>
                                <?php
                                }
                                 ?>
                                 <!-- Post end-->

                                <!-- Pagination-->
                                <div class="row">
                            <center>
                <?php
                echo $paginations;
                 ?>
               </center>
                                </div>
                                <!-- Pagination end-->
                            </div>
                            <!-- Content end-->

                            <!-- Sidebar-->
                            <div class="col-xl-4">
                                <div class="sidebar">

                                    <!-- Search widget-->
                                    <aside class="widget widget_search">
                                        <form>
                                            <input class="form-control pr-5" type="search" placeholder="Search...">
                                            <button class="search-button" type="submit"><span class="mdi mdi-magnify"></span></button>
                                        </form>
                                    </aside>

                                    <aside class="widget about-widget">
                                        <div class="widget-title">About Me</div>

                                        <div class="text-center">
                                            <img src="<?php echo base_url();?>assets/images/srk.jpg" alt="About Me" class="rounded-circle">
                                            <h6><a href="https://www.facebook.com/kiransyoutubechannel/" style="color:#0db3e3;">Sobhagya Kumar - FullStack Developer</a></h6>
                                            <p>I am a Professional Developer,freelancer, <a href="https://www.youtube.com/channel/UCT6wywQKNrfR-H1wwWzMrUA" style="color:red;">Youtuber.</a> <span style="color:#0db3e3;">I accept Paid works. </span> For any Kind Of Development(web,apps) Please contact Us. We are Working On All Trending Technologies.</p>
                                        </div>

                                    </aside>

                                    <aside class="widget about-widget">
                                        <div class="widget-title">Subscribe & Follow</div>

                                        <ul class="socials">
                                            <li><a href="http://facebook.com/"><i class="mdi mdi-facebook"></i></a></li>
                                            <li><a href="http://twitter.com/"><i class="mdi mdi-twitter"></i></a></li>
                                            <li><a href="http://instagram.com/"><i class="mdi mdi-instagram"></i></a></li>
                                            <li><a href="http://pinterest.com/"><i class="mdi mdi-pinterest"></i></a></li>
                                        </ul>

                                    </aside>

                                    <!-- Categories widget-->
                                    <aside class="widget widget_categories">
                                        <div class="widget-title">Categories</div>
                                        <ul>
                                            <li><a href="#">Journey</a> (40)</li>
                                            <li><a href="#">Photography</a> (08)</li>
                                            <li><a href="#">Lifestyle</a> (11)</li>
                                            <li><a href="#">Food & Drinks</a> (21)</li>
                                        </ul>
                                    </aside>

                                    <!-- Recent entries widget-->
                                    <aside class="widget widget_recent_entries_custom">
                                        <div class="widget-title">Popular Posts</div>
                                        <ul>
                                          <?php
                                          foreach($related->result() as $rel){
                                           ?>
                                            <li class="clearfix">
                                                <div class="wi">
                                                    <a href="<?php echo $rel->blog_id;?>"><img src="<?php echo base_url();?>assets/images/works/img1.jpg" alt="" class="img-fluid"></a>
                                                </div>
                                                <div class="wb"><a href="<?php echo $rel->blog_id;?>"><?php echo $rel->blog_title;?></a> <span class="post-date"><?php echo $rel->blog_added;?></span></div>
                                            </li>
                                            <?php
                                          }
                                            ?>
                                        </ul>
                                    </aside>

                                    <!-- Text widget-->
                                    <aside class="widget">
                                        <div class="widget-title">Text Widget</div>

                                        <p class="text-muted text-widget-des">Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. </p>

                                    </aside>

                                    <!-- Archives widget-->
                                    <aside class="widget">
                                        <div class="widget-title">Archives</div>

                                        <ul>
                                            <li><a href="#">March 2018</a> (40)</li>
                                            <li><a href="#">April 2018</a> (08)</li>
                                            <li><a href="#">May 2018</a> (11)</li>
                                            <li><a href="#">Jun 2018</a> (21)</li>
                                        </ul>

                                    </aside>

                                    <!-- Tags widget-->

                                    <aside class="widget widget_tag_cloud">
                                        <div class="widget-title">Tags</div>
                                        <div class="tagcloud">
                                            <a href="#">logo</a>
                                            <a href="#">business</a>
                                            <a href="#">corporate</a>
                                            <a href="#">e-commerce</a>
                                            <a href="#">agency</a>
                                            <a href="#">responsive</a>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                            <!-- Sidebar end-->
                        </div>

                    </div>
                    <!-- end container -->
                </section>
            </div>
        </div>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/metisMenu.min.js"></script>
        <!--common script for all pages-->
        <script src="<?php echo base_url();?>assets/js/jquery.app.js"></script>
    </body>



</html>
