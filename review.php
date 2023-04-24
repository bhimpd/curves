<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reviews</title>

    <!-- linking external css -->
    <link rel="stylesheet" type="text/css" href="review.css">


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


    <!-- explaining who we do text -->
    <div class="container text-center" data-aos="fade-up" id="review">

        <p id="p1">Reviews </p>

        <p id="p2"> Feedback is the breakfast of champions... </p>

    </div>
    <!-- ending explanation who we are text -->


    <!-- people image and their reviews -->  
    <div class="container" id="timages" data-aos="fade-up">
        <div class="row d-flex justify-content-center h-100">
            <div class="col-md-4 d-flex flex-column justify-content-between mb-4 mb-md-0">
                <div class="row mb-4 mb-md-0">
                    <div class="col-md-12">
                        <img src="images/it/it2.jpg" class="img-fluid">
                        <p>Ranjan and his team are very responsive and nothing seems to be a problem. They have designed a website, book, postcards, business cards and stationery for me and I get wonderful feedback from people.</p>
                        <div class="identity text-center">
                            <div class="name">
                                <strong>Kandel vai</strong>
                            </div>
                            <div class="tag">
                                <p>DevOps Engineer</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-md-0">
                    <div class="col-md-12">
                        <img src="images/it/t7.jpg" class="img-fluid">
                        <p>Dear Ranjan,
                            Thank you so much for the work you put into our site. Big thanks to Kunjan, Saphal and others too! A small token of appreciation from us for this cold weather! hope to see you down at Tiger Tops soon.</p>
                        <div class="identity text-center">
                            <div class="name">
                                <strong>Gowin Dai</strong>
                            </div>
                            <div class="tag">
                                <p>SOftware Engineer</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0 align-items-center justify-content-center">
                <img src="images/it/it1.jpg" class="img-fluid">
                <p>During COVID times in 2019, Tourism in Nepal was badly affected due to global disruption in travel.
                    I decided to train my mind and body though out this time, I started to discover more about myself
                    than I could have ever imagined. In this process I came across Cn’C who have helped me to understand
                    more about who we are, both as individuals and as a brand. To show up to the Cn’C office on a daily
                    basis was indeed fun, I am happy to say that Cn’C is a part of my well-being and will continue for
                    many more years to come. I would like to thank Cn’C for giving me this unique opportunity to know
                    more about myself and the brand legacy that I continue to represent.</p>
                <div class="identity text-center">
                    <div class="name">
                        <strong>Vim Dai</strong>
                    </div>
                    <div class="tag">
                        <p>SOftware Engineer</p>

                    </div>
                </div>

            </div>
            <div class="col-md-4 d-flex flex-column justify-content-between mb-4 mb-md-0">
                <div class="row mb-4 mb-md-0">
                    <div class="col-md-12">
                        <img src="images/it/t6.jpg" class="img-fluid">
                        <p>There are very few companies whom you can call your OWN. OWN in the sense, who will think for you and who will present same kind of passion for your work. Curves n' Colors goes that extra mile with you, not just because of a contract, but because they also believe in your work and your passion.
                            I do with Curves n' Colors all the best.</p>
                        <div class="identity text-center">
                            <div class="name">
                                <strong>Bijay Kandel</strong>
                            </div>
                            <div class="tag">
                                <p>Backend Engineer</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4 mb-md-0">
                    <div class="col-md-12">
                        <img src="images/it/it2.jpg" class="img-fluid">
                        <p>There are very few companies whom you can call your OWN. OWN in the sense, who will think for you and who will present same kind of passion for your work. Curves n' Colors goes that extra mile with you, not just because of a contract, but because they also believe in your work and your passion.
                            I do with Curves n' Colors all the best.</p>
                        <div class="identity text-center">
                            <div class="name">
                                <strong>Robs Neupane</strong>
                            </div>
                            <div class="tag">
                                <p>Socail Media Manager</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ends people images and their reviews -->



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