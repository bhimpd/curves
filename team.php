<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Whoweare</title>

    <!-- linking external css -->
    <link rel="stylesheet" type="text/css" href="team.css">
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

    <!-- starting images header -->
    <div class="container" data-aos="fade-up" id="timages">
        <div class="row d-flex justify-content-center h-100">
            <div class="col-md-4 d-flex flex-column justify-content-between mb-4 mb-md-0">
                <div class="row mb-4 mb-md-0">
                    <div class="col-md-12">
                        <img src="images/it/it2.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="row mb-md-0">
                    <div class="col-md-12">
                        <img src="images/it/t7.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0 d-flex align-items-center justify-content-center">
                <img src="images/it/it1.jpg" class="img-fluid">
            </div>
            <div class="col-md-4 d-flex flex-column justify-content-between mb-4 mb-md-0">
                <div class="row mb-4 mb-md-0">
                    <div class="col-md-12">
                        <img src="images/it/t6.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="row mb-4 mb-md-0">
                    <div class="col-md-12">
                        <img src="images/it/it2.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ends starting images -->


    <!-- who we are text -->

    <div class="container" data-aos="fade-up" id="ttext">
        <p>Who <span>We </span> are? </p>
    </div>
    <!-- ends who we are text -->

    <!-- explaining who we are text -->
    <div class="container" data-aos="fade-up" id="twhoare">
        <div class="row">
            <div class="col-sm-6 text-justify">
                <p>We are a creative collective that thrives on sharing ideas and exploring our artistic and technical boundaries together.</p>
                <p>We are IT teams, who are also responsible for ensuring that employees have the tools, knowledge & ability. </p>
            </div>
            <div class="col-sm-6 d-flex justify-content-center align-items-center flex-column">
                <p> We are also </p>
                <span class="twho"> </span>
            </div>
        </div>
    </div>
    <!-- ending explanation who we are text -->



    <!-- starting our achievement -->
    <div class="container"  data-aos="fade-up" id="center">
        <div class="achievement">
            <p>We develop innovative concepts and experiences for our clients with a design-centric approach. Our team of dedicated creators possess a strong craftsmanship spirit and support every project from pitch phase through to launch.</p>
        </div>
        <div class="row d-flex justify-content-center" data-aos="fade-up">
            <div class="col-lg-3 col-md-3 col-sm-6">

                <div class="number">
                    10+
                </div>
                <div class="experience">
                    Countries
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">

                <div class="number">
                    20+
                </div>
                <div class="experience">
                    Years Of Experience
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">

                <div class="number">
                    1500+
                </div>
                <div class="experience">
                    Projects deliverd
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">

                <div class="number">
                    1000+
                </div>
                <div class="experience">
                    Satisfied Clients
                </div>

            </div>
        </div>
    </div>


    <!-- ended our achievements -->



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
    <!-- back to top ends -->

    <!-- aos started -->
    <script>
        AOS.init();
    </script>
    <!-- aos ends here -->

    <!--  started typing effect -->

    <script>
        var typed = new Typed('.twho', {
            strings: [' IT Experts... ', ' ProblemSolver... ', 'Challenge Overcomer ... '],
            typeSpeed: 150,
            backspeed: 150,
            loop: true, // Default value

        });
    </script>



    <!-- ends typing effect -->


</body>

</html>