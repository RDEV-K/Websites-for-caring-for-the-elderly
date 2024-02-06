<?php $page_on="Testimonials"?>
<?php include 'header.php';
include_once "db.php";
?>

<div class="breadcromb-wrapper">
    <div class="breadcromb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="breadcromb-left sc-content">
                    <h3>
                        Testimonials
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service-details-wrapper" style="min-height: 400px;">
    <div class="container">
        <div class="service-details-tabs">
            <div class="">
                <div id="menu1" class="tab-pane fade active in carousel-div-c-width">
                    <div id="amnities_carousel_" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner" role="listbox">
                            <?php
									$i=0;
									$sql = "select * from  testimonials where active='1' order by id desc";
									$result = mysqli_query($conn, $sql);
									if (mysqli_num_rows($result) > 0) {
									  while($row = mysqli_fetch_assoc($result)) {
										// echo "id: " . $row["f_name"]. " - Name: " . $row["l_name"]. " " . $row["email"]. "<br>";
									echo '<div class="'. ($i==0?"item active":"item").'">
										  <div class="carousel-caption txt-set-cls">
										  <p>
										  <i class="fa fa-star"></i>
										  <i class="fa fa-star"></i>
										  <i class="fa fa-star"></i>
										  <i class="fa fa-star"></i>
										  <i class="fa fa-star"></i> | 
										  <b>'.$row["f_name"].' '.$row["l_name"].'</b> 
										  </p>
										  <p>'.$row["date"].'</p>
										  <p>
										'.$row['msg'].'
										  </p></div></div>' ;
										$i++;
									}
									} else {
									  echo "0 results";
									}
									mysqli_close($conn);
									?>
                        </div>
                        <a class="left carousel-control testimo" href="#amnities_carousel_" role="button"
                            data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control testimo" href="#amnities_carousel_" role="button"
                            data-slide="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center">
            <a href="submit-testimonials.php" class="contact-sb-btn-cls">
                Submit Testimonial
            </a>
        </p>
    </div>
</div>
<?php include 'footer.php'?>
</body>

</html>