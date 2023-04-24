<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>

    <!-- linking external css -->
    <link rel="stylesheet" type="text/css" href="product.css">

    <!-- typing effect to the text -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="typed.js"></script>

    <!-- including external links -->
  <?php
  include 'links.php';
  ?>
  <!-- external links ends here -->

</head>

<body>

    <!-- header starts -->
    <?php
    include 'header.php';
    ?>
    <!-- header ends -->


    <!-- typing effect for our product -->
    <div class="container" id="producttext">
        <div class="row">
            <p>"Our latest products are <span class="protext"></span></p>
            <p>designed for active lifestyles."</p>
        </div>
    </div>
    <!-- ended typing effect  -->



    <!-- team and service text starts-->
    <div class="pteam" data-aos="fade-up">
        <h1> Our Team <span class="pservice"> Our Services</span></h1>
    </div>
    <!-- team and service text ends -->

    <!-- horizontal line with heart shape -->
    <div class="container" data-aos="fade-up">
        <div class=" hr-theme-slash-2 ">
            <div class="hr-line "></div>
            <div class="hr-icon "><i class="fa-solid fa-heart " style="font-size:30px; "></i>
            </div>
            <div class=" hr-line "></div>
        </div>
    </div>
    <!-- horizontal line with heart shape ends here -->


    <!-- started buttons with the services and internal link given -->
    <div class="container" id="pbuttons" data-aos="fade-up">
        <div class="btn-group " role="group " aria-label="Basic mixed styles example " id="buttons ">
            <a href="#ecommerce" type=" button " class="btn ">E-Commerce and Web Designing</a>
            <a href="#hardware" type=" button " class="btn ">Hardware and Software</a>
            <a href="#mobile" type=" button " class="btn ">Mobile App and Repair</a>
        </div>
    </div>
    <!-- ended buttons with the services and internal link given -->



    <!-- started ecommerce some description and images -->
    <div class="container" id="ecommerce" data-aos="fade-up">
        <h4>
            <span>1. E-Commerce and Web Designing</span>
        </h4>
        <div class="row">
            <div class="col-md-6 col-12 ">
                <ol class="a">
                    <li>Custom website design</li>
                    <li>Role based user access</li>
                    <li>Customized product management</li>
                    <li>Order management</li>
                    <li>Delivery charge management</li>
                </ol>
            </div>
            <div class="col-md-6 col-12 ">
                <ol class="b">
                    <li>Reports</li>
                    <li>Customer reviews and rating mechanism</li>
                    <li>Customer profile</li>
                    <li>Wish list system</li>
                    <li>Cart system</li>
                </ol>
            </div>
        </div>

    </div>
    <!-- ended ecommerce and images here -->


    <!-- ecommerce images started here -->
    <div class="container" id="pecommerce" data-aos="fade-up">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/website/w12.jpg" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/website/w11.jpg" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/website/w10.png" class="img-fluid">
            </div>


            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/website/w11.jpg" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/website/w10.png" class="img-fluid">
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/website/w11.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- ecommerce image ends here -->



    <!-- started hardware and software some description and images -->
    <div class="container" id="hardware" data-aos="fade-up">
        <h4>
            <span>2. Hardware and Software</span>
        </h4>
        <div class="row">
            <div class="col-md-6 col-12">
                <ol class="a">
                    <li>Custom hardware repair</li>
                    <li>Custom Software Management</li>
                    <li>Customized product management</li>
                    <li>Sells and Order management</li>
                    <li>Delivery charge management</li>
                </ol>
            </div>
            <div class="col-md-6 col-12">
                <ol class="b">
                    <li>Reports</li>
                    <li>Customer reviews and rating mechanism</li>
                    <li>Itinerary search module on the website</li>
                    <li>Online payment gateway integration</li>

                </ol>
            </div>
        </div>


    </div>
    <!-- ended hardware software and images here -->


    <!-- hardware images started here -->
    <div class="container" id="phardware" data-aos="fade-up">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/hardware/h1.jpg" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/hardware/h2.jpg" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/hardware/h3.jpg" class="img-fluid">
            </div>


            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/hardware/h2.jpg" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/hardware/h3.jpg" class="img-fluid">
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/hardware/h1.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- hardware image ends here -->




    <!-- started mobile app  and repairement some description and images -->
    <div class="container" id="mobile" data-aos="fade-up">
        <h4>
            <span>3. Mobile App and Repair</span>
        </h4>
        <div class="row">
            <div class="col-md-6 col-12">
                <ol class="a">
                    <li>Custom Moible repair</li>
                    <li>Custom Mobile App Management</li>
                    <li>Customized Mobile App product </li>
                    <li>Sells and Order Mobiles</li>

                </ol>
            </div>
            <div class="col-md-6 col-12">
                <ol class="b">
                    <li>Reports</li>
                    <li>Customer reviews and rating mechanism</li>
                    <li>Itinerary search module on the Mobile</li>
                    <li>Online payment gateway integration</li>

                </ol>
            </div>
        </div>


    </div>

    <!-- ended hardware software and images here -->


    <!-- mobile apps images started here -->
    <div class="container" id="pmobapp" data-aos="fade-up">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/mobapp/ma1.jpg" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/mobapp/ma2.jpg" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/mobapp/ma3.jpg" class="img-fluid">
            </div>


            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/mobapp/ma2.jpg" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/mobapp/ma3.jpg" class="img-fluid">
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <img src="images/mobapp/ma1.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- mobileapps  image ends here -->


    









 <!-- starting main footer -->
 <?php
  include 'footer.php'
  ?>
  <!-- ending main footer -->





    <!--  started typing effect -->

    <script>
        var typed = new Typed('.protext', {
            strings: ['Technology Based', 'Lightweighted', 'efficient, reliable, dynamic'],
            typeSpeed: 150,
            backspeed: 150,
            loop: true, // Default value

        });
    </script>



    <!-- ends typing effect -->



    <!-- collapsing on clicking outside the navabar -->
    <script>
        $(document).on('click', function(event) {
            var $navbar = $('.navbar-collapse');
            if ($navbar.hasClass('show') && !$(event.target).closest('.navbar-collapse').length) {
                $navbar.collapse('hide');
            }
        });
    </script>

    <!-- collapsing ends clicking outside the navbar -->



    <!-- back to top js -->
    <script>
        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- back to top ends -->

<!-- aos started  -->
<script>
  AOS.init();
</script>
<!-- aos ends here -->


</body>

</html>