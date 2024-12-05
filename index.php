<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">JED</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="banner" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-light">
                    <h1>MY FAVORITE ANIMALS</h1>
                    <p>CAT, KOALA, DOG, CRICKET, MONKEY, EAGLE, SNAKE, AND TIGER</p>
               <a href=""class="btn btn-brand">Please Click</a>
                </div>
            </div>
        </div>
      </div>

     <?php
     include 'about.php';
     ?>

      <!-- SERVICES -->
  <section id="services">
        <div class="container">
          <div class="text-center">
        <h2>SERVICES</h2>
        <p>HELP ANIMALS</p>
      </div>
      <div class="row">
        <div class="col-lg-4 d-flex align-items-center justify-content-center">
          <div class="card text-center p-3" style="width: 22rem;">
            <img src="53775.png" class="card-img-top luh mx-auto" alt="...">
            <div class="card-body">
              <h5 class="card-title">DOG</h5>
              <p class="card-text">DOG DETAILS</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 d-flex align-items-center justify-content-center">
          <div class="card text-center p-3" style="width: 22rem;">
            <img src="53775.png" class="card-img-top luh mx-auto" alt="...">
            <div class="card-body">
              <h5 class="card-title">CRICKET</h5>
              <p class="card-text">CRICKET DETAILS.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-flex align-items-center justify-content-center">
          <div class="card text-center p-3" style="width: 22rem;">
            <img src="53775.png" class="card-img-top luh mx-auto" alt="...">
            <div class="card-body">
              <h5 class="card-title">MONKEY</h5>
              <p class="card-text">MONKEY DETAILS</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        </div>
      </div>
      </section>

      <div id="cta" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-light">
                    <h1>EAGLE</h1>
                    <p>EAGLE DETAILS</p>
               <a href=""class="btn btn-brand">Please Click</a>
                </div>
            </div>
        </div>
      </div>

      <?php
     include 'reviews.php';
     ?>

      
      <!--accordion-->
      <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>


      <!--FAQs-->
      <section id="faq">
        <div class="container">
          <div class="text-center">
            <h2>Frequently Asked Questions</h2>
            <p> FAQ pages are often used in articles, websites, email lists, and online forums to provide information or guidance to new or existing users or customers1. </p>
          </div>
        </div>
      </section>

      <!-- FOOTER -->
    <footer class="footer text-white" id="footer">
      <div class="container">
          <div class="row al">
              <div class="col-md-3 col-sm-6 text-lg-start text-center">
                  <a class="navbar-brand" href="#">
                      <img src="53775.png" alt="Logo" height="60px">
                  </a>
                  <h5 class="mt-4">About Us</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
              </div>
              <div class="col-md-3 col-sm-6 text-lg-start ps-lg-5 ps-0 text-center ">
                  <h5>Services</h5>
                  <ul class="list-unstyled">
                      <li><a href="#">Service 1</a></li>
                      <li><a href="#">Service 2</a></li>
                      <li><a href="#">Service 3</a></li>
                      <li><a href="#">Service 4</a></li>
                      <li><a href="#">Service 5</a></li>
                  </ul>
              </div>
              <div class="col-md-3 col-sm-6 text-lg-start text-center">
                  <h5>Contact Us</h5>
                  <p>123 Street Name,<br>City, Country</p>
                  <p>Email: example@example.com<br>Phone: +1234567890</p>
              </div>
              <div class="col-md-3 col-sm-6 text-lg-start  text-center">
                  <h5>Newsletter</h5>
                  <form>
                      <div class="input-group mb-3">
                          <input type="text" class="form-control" style="border-radius: 1px;" placeholder="Email"
                              aria-label="email" aria-describedby="button-addon2">
                          <button class="btn btn-outline-light" type="button" id="button-addon2">Subscribe</button>
                      </div>
                  </form>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
              </div>
          </div>
      </div>
  </footer>

        </div>
    </div>
  </div>

    
</body>
</html>