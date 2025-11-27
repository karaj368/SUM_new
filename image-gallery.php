<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Image Gallery | Shobhit University</title>

<link href="https://unpkg.com/nanogallery2@2.4.1/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
  <?php include 'header.php';?>
  <!-- Start Section Banner Area -->
  <section class="section-banner bg-1">
    <div class="container">
      <div class="banner-spacing">
        <div class="section-info">
          <h1 data-aos="fade-up" data-aos-delay="100"> Image Gallery </h1>
               <nav class="breadcrumb" id="breadcrumb">
            <!-- Breadcrumb links will be inserted here dynamically -->
            </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Banner Area -->

  <!-- Start About Us Area -->
  <section class="academics-section ptb-100">
    <div class="container">
      <div class="row">

        <div class="col-lg-9">
          <div class="ac-overview">
            <div class="pera-dec">
               <div id="nanogallery2" data-nanogallery2='{
                            "kind": "flickr",
                            "userID": "146666627@N05",
                            "thumbnailHeight": 300, 
                            "thumbnailWidth": 300,
                            "galleryDisplayMode":"pagination",
                            "galleryMaxRows": 4,
                            "galleryPaginationMode": "numbers"
                          }'>
                        </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="academics-left">
            <div class="ac-category">
              <div class="ac-contact">
                <span class="text-black">Get to Know Shobhit</span>
              </div>
              <ul>
                <li><a href="vc-meerut.php"
                    title="Vice Chancellor">Vice Chancellor</a></li>
                <li><a  href="univ-erp.php" title="University ERP">University ERP</a>
                </li>
                <li><a class="active" href="image-gallery.php" title="Image Gallery">Image
                    Gallery</a></li>
                <li><a href="media-coverage.php" title="Media Coverage">Media
                    Coverage</a></li>
                <li><a href="https://www.shobhituniversity.ac.in/virtual/index.html" title="Take a Virtual Tour"
                    target="_blank">Take a Virtual Tour</a></li>
                <li><a href="https://www.shobhituniversity.ac.in/Inspirer_Day_2025/" target="_blank">Inspirer Day
                    Celebrations 2025</a></li>
              </ul>

            </div>
            <div class="ac-contact">
              <span class="text-black">Quick Links</span>
              <a href="https://admission.shobhituniversity.ac.in/" target="_blank">Apply Now</a>
              <a class="darkbtn" href="contact-us.php">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Us Area -->

   <!-- Start Campus Area -->
     <?php include 'include/placeses-slider.php';?>
    <!-- End Campus Area -->

  <?php include 'footer.php';?>
   <script type="text/javascript" src="https://unpkg.com/nanogallery2@2.4.1/dist/jquery.nanogallery2.min.js"></script>
  </body>

</html>