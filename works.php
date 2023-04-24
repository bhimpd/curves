<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>works</title>

  <!-- linking external css -->
  <link rel="stylesheet" type="text/css" href="workstyle.css">


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

  <!-- starts projecct work and quality text -->
  <div class="container" data-aos="fade-up">
    <div class="worktext">
      <p>Your Project, <span class="quality"> Our Quality </span> Our Work</p>
    </div>
  </div>
  <!-- ends project work and quality text -->

  <!-- starts images filtering  WITH the pagination concept -->
  <div class="container" data-aos="fade-up">
    <div class="filter filter-basic text-center">
      <div class="filter-nav mb-5 mt-5">
        <button class="btn btn-primary active filter-button" data-filter="">All</button>
        <button class="btn btn-primary filter-button" data-filter="laptop" id="laptop-button">Laptops </button>
        <button class="btn btn-primary filter-button" data-filter="mobile" id="mobile-button">Mobiles </button>
        <button class="btn btn-primary filter-button" data-filter="website" id="website-button">Websites</button>
      </div>
      <div class="filter-gallery">
        <div class="row">
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="laptop">
              <div class="item-content">
                <img src="images/laptop/laptop3.png" alt="image" class="img-fluid">
                <p>Laptop</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="website">
              <div class="item-content">
                <img src="images/website/w2.png" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="mobile">
              <div class="item-content">
                <img src="images/mobile/m2.png" alt="image" class="img-fluid">
                <p>Mobile</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="1" data-category="website">
              <div class="item-content">
                <img src="images/website/w1.png" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="laptop">
              <div class="item-content">
                <img src="images/laptop/laptop2.png" alt="image" class="img-fluid">
                <p>Laptop</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="website">
              <div class="item-content">
                <img src="images/website/w2.png" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="website">
              <div class="item-content">
                <img src="images/website/w3.png" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="laptop">
              <div class="item-content">
                <img src="images/laptop/laptop1.png" alt="image" class="img-fluid">
                <p>Laptop</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="mobile">
              <div class="item-content">
                <img src="images/mobile/m1.png" alt="image" class="img-fluid">
                <p>Mobile</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="website">
              <div class="item-content">
                <img src="images/website/w1.png" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="website">
              <div class="item-content">
                <img src="images/website/w2.png" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="mobile">
              <div class="item-content">
                <img src="images/mobile/m2.png" alt="image" class="img-fluid">
                <p>Mobile</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="1" data-category="website">
              <div class="item-content">
                <img src="images/website/w5.png" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="laptop">
              <div class="item-content">
                <img src="images/laptop/laptop5.jpg" alt="image" class="img-fluid">
                <p>Laptop</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="laptop">
              <div class="item-content">
                <img src="images/laptop/laptop3.png" alt="image" class="img-fluid">
                <p>Laptop</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="website">
              <div class="item-content">
                <img src="images/website/w1.png" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="website">
              <div class="item-content">
                <img src="images/website/w5.png" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="website">
              <div class="item-content">
                <img src="images/website/w7.jpg" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="laptop">
              <div class="item-content">
                <img src="images/laptop/laptop6.jpg" alt="image" class="img-fluid">
                <p>Laptop</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="mobile">
              <div class="item-content">
                <img src="images/mobile/m8.jpg" alt="image" class="img-fluid">
                <p>Mobile</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="website">
              <div class="item-content">
                <img src="images/website/w6.jpg" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="mobile">
              <div class="item-content">
                <img src="images/mobile/m2.png" alt="image" class="img-fluid">
                <p>Mobile</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="mobile">
              <div class="item-content">
                <img src="images/mobile/m4.png" alt="image" class="img-fluid">
                <p>Mobile</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="mobile">
              <div class="item-content">
                <img src="images/mobile/m1.png" alt="image" class="img-fluid">
                <p>Mobile</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="laptop">
              <div class="item-content">
                <img src="images/laptop/laptop3.png" alt="image" class="img-fluid">
                <p>Laptop</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="website">
              <div class="item-content">
                <img src="images/website/w1.png" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="laptop">
              <div class="item-content">
                <img src="images/laptop/laptop1.png" alt="image" class="img-fluid">
                <p>Laptop</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="website">
              <div class="item-content">
                <img src="images/website/w5.png" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="website">
              <div class="item-content">
                <img src="images/website/w7.jpg" alt="image" class="img-fluid">
                <p>Website</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="laptop">
              <div class="item-content">
                <img src="images/laptop/laptop6.jpg" alt="image" class="img-fluid">
                <p>Laptop</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-3 py-3 px-3">
            <div class="all" data-category="mobile">
              <div class="item-content">
                <img src="images/mobile/m8.jpg" alt="image" class="img-fluid">
                <p>Mobile</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ends image filtering -->



  <!-- Pagination code -->
  <div id="pagination"></div>
  <!-- ends pagination -->


  <!-- starting our works with background image -->
  <div class="container-fluid" data-aos="fade-up">
    <div class="bgimage">
      <div class="container" id="activity">
        <div class="row">
          <div class="col-md-6" id="inner-work">
            <h1>Our Works</h1>
            <p> Accelerating the path to living incomes.</p>
            <p> Through my work, I aim to make a positive impact on society and contribute to a better, more sustainable future.</p>
            <p> I take pride in delivering high-quality work that exceeds client expectations and drives business growth.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ending our works with background image -->

  <!--  started fact info -->
  <div class="container" data-aos="fade-up">
    <div class="row" id="fact">
      <p><i class="fa-solid fa-quote-left fa-2x"></i></p>
      <span id="percent">64.4 %</span>
      <p>of the world's total population is currently using the internet.
      </p>
    </div>
  </div>
  <!-- ended fact info -->

  <!-- starting projects  -->
  <div class="container justify-content-center" id="projects" data-aos="fade-up">
    <div class="row text-center d-flex justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
        <div class="card h-100">
          <img src="images/projects/p1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Project1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Project</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100">
          <img src="images/projects/p2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Project2</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Project</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100">
          <img src="images/projects/p3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Project3</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Project</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100">
          <img src="images/projects/p4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Project4</h5>
            <p class="card-text">Some quick example text to builProject 3 and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Project</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100">
          <img src="images/projects/p5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Project5</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Project</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card h-100">
          <img src="images/projects/p6.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Project6</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Project</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ending projects -->

  <!-- starting main footer -->
  <?php
  include 'footer.php'
  ?>
  <!-- ending main footer -->



  <!-- starts filtering js  -->
  <script>
    $('.filter-button').on('click', (e) => {
      const filter = $(e.target).attr('data-filter');
      console.log(filter);
      const items = $('.item-content').parent();
      for (item of items) {
        if (filter == '') {

          $(item).addClass('animated zoomIn faster');
          $(item).parent().addClass('animated zoomIn faster');
          $(item).removeClass('d-none');
          $(item).parent().removeClass('d-none');


          console.log('x');
        } else if ($(item).attr('data-category') == filter) {
          $(item).addClass('animated zoomIn faster');
          $(item).parent().addClass('animated zoomIn faster');
          $(item).removeClass('d-none');
          $(item).parent().removeClass('d-none');
        } else {
          $(item).addClass('d-none');
          $(item).parent().addClass('d-none');
          $(item).removeClass('animated zoomIn faster');
          $(item).parent().removeClass('animated zoomIn faster');
        }
      }
    });
  </script>
  <!-- ends filtering using js -->



  <!-- pagination start using javascript -->
  <script>
    $(".filter-gallery .col-md-3").slice(8).hide();
    $('#pagination').pagination({

      // Total number of items present
      // in wrapper class
      items: 32,

      // Items allowed on a single page
      itemsOnPage: 8,
      onPageClick: function(noofele) {
        $(".filter-gallery .col-md-3").hide()
          .slice(8 * (noofele - 1),
            8 + 8 * (noofele - 1)).show();
      }
    });
  </script>
  <!-- pagination ends here -->



  <!-- starts highlight the button on click -->
  <script>
    // Get all the filter buttons
    const filterButtons = document.querySelectorAll('.filter-button');

    // Add an event listener to each button
    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
        // Remove the active class and reset the background color on all buttons
        filterButtons.forEach(button => {
          if (button !== event.target) {
            button.classList.remove('active');
            button.style.backgroundColor = '';
          }
        });

        // Add the active class and set the background color to red on the clicked button
        event.target.classList.add('active');
        event.target.style.backgroundColor = "red";


      });
    });
  </script>

  <!-- ending highlight the button -->







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




</body>

</html>