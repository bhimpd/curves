<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>

    <!-- linking external css -->
    <link rel="stylesheet" type="text/css" href="contact.css">


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



    <!-- explaining contact us text -->
    <div class="container text-center" id="contact" data-aos="fade-up">
        <p id="p1">Get in touch with us. </p>
        <p id="p2">We can set up a virtual or in person meeting to discuss your interests and where we can add value. </p>
        <strong>General Enquiry : <span><a href="">info@curvesncolors.com</a></span></strong><br>

        <strong style="margin:20px auto;">Business Enquiry : <span><a href="">business@curvesncolors.com</a></span></strong>

    </div>
    <!-- ending contact us we are text -->


    <!-- personal details started -->
    <div class="container text-center  text-center justify-center align-items-center" id="details">
        <div class="rows" data-aos="fade-up">
            <div class="purpose">For New
                Projects / Business
            </div>
            <div class="image">
                <img src="images/it/it1.jpg" alt="">
            </div>
            <div class="detail">
                <h5>Bijay kandel</h5>
                <p><a href="">bijaykandel@gmail.com</a></p>
                <p>Phone : 98144*****</p>
            </div>
        </div>
        <div class="rows" data-aos="fade-up">
            <div class="purpose">Server & Support
                Management
            </div>
            <div class="image">
                <img src="images/it/t6.jpg" alt="">
            </div>
            <div class="detail">
                <h5>Krishna Chaudhary</h5>
                <p><a href="">krishchaud@gmail.com</a></p>
                <p>Phone : 98144*****</p>
            </div>
        </div>
        <div class="rows" data-aos="fade-up">
            <div class="purpose">Finance and Account
            </div>
            <div class="image">
                <img src="images/it/it3.jpg" alt="">
            </div>
            <div class="detail">
                <h5>Umesh Rana</h5>
                <p><a href="">umeshrana@gmail.com</a></p>
                <p>Phone : 98144*****</p>
            </div>
        </div>
        <div class="rows" data-aos="fade-up">
            <div class="purpose">Assisant Manager
            </div>
            <div class="image">
                <img src="images/it/it2.jpg" alt="">
            </div>
            <div class="detail">
                <h5>Bishwa Thapa</h5>
                <p><a href="">Bissovai@gmail.com</a></p>
                <p>Phone : 98144*****</p>
            </div>
        </div>
    </div>

    <!-- personal details ended -->


    <!-- starting main footer -->
    <?php
    include 'footer.php'
    ?>
    <!-- ending main footer -->




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
    <!-- back to top ends here -->


    <!-- aos effect js link -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <!-- aos ends here -->




</body>

</html>