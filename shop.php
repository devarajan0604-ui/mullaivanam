<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Mullaivanam - Shop</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


      <?php include 'header.php';?>


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Shop</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active text-white">Shop</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <h1 class="mb-4">Fresh fruits shop</h1>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-xl-3">
                                <div class="input-group w-100 mx-auto d-flex">
                                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-xl-3">
                                <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                                    <label for="fruits">Default Sorting:</label>
                                    <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3" form="fruitform">
                                        <option value="volvo">Nothing</option>
                                        <option value="saab">Popularity</option>
                                        <option value="opel">Organic</option>
                                        <option value="audi">Fantastic</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-3">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4>Categories</h4>
                                            <ul class="list-unstyled fruite-categorie">
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="#">Fruits</a>
                                                        <span>(3)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="#">Cuttings</a>
                                                        <span>(5)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="#">Plants</a>
                                                        <span>(2)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="#">Bulk Cuttings</a>
                                                        <span>(8)</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                         <div class="fruite-item">
          <div class="fruite-img">
            <img src="img/fruits1.jpg" alt="Big" loading="lazy">
          </div>
          <div class="position-absolute" style="top:10px; left:10px;">
            <span class="badge bg-secondary">Fruits</span>
          </div>
          <div class="product-content">
            <h4 class="product-name">Big</h4>
            <p class="product-desc">Big size 180 per kg (2-3 fruits)</p>
            <div class="d-flex justify-content-between align-items-center mb-2">
              <p class="price text-dark fs-5 fw-bold mb-0">₹180 / kg</p>
              <div class="quantity" data-product-id="big">
                <button class="minus" aria-label="Decrease quantity">−</button>
                <input type="number" class="input-box" value="1" min="1" max="10" aria-label="Quantity for Big">
                <button class="plus" aria-label="Increase quantity">+</button>
              </div>
            </div>
            <a href="#" class="btn btn-primary rounded-pill add-to-cart">Add to cart</a>
          </div>
        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                         <div class="fruite-item">
          <div class="fruite-img">
            <img src="img/fruits2.jpg" alt="Medium" loading="lazy">
          </div>
          <div class="position-absolute" style="top:10px; left:10px;">
            <span class="badge bg-secondary">Fruits</span>
          </div>
          <div class="product-content">
            <h4 class="product-name">Medium</h4>
            <p class="product-desc">Medium size 150 per kg (4 fruits)</p>
            <div class="d-flex justify-content-between align-items-center mb-2">
              <p class="price text-dark fs-5 fw-bold mb-0">₹150 / kg</p>
              <div class="quantity" data-product-id="medium">
                <button class="minus" aria-label="Decrease quantity">−</button>
                <input type="number" class="input-box" value="1" min="1" max="10" aria-label="Quantity for Medium">
                <button class="plus" aria-label="Increase quantity">+</button>
              </div>
            </div>
            <a href="#" class="btn btn-primary rounded-pill add-to-cart">Add to cart</a>
          </div>
        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="fruite-item">
          <div class="fruite-img">
            <img src="img/cuttings1.jpg" alt="Cutting" loading="lazy">
          </div>
          <div class="position-absolute" style="top:10px; left:10px;">
            <span class="badge bg-secondary">Cuttings</span>
          </div>
          <div class="product-content">
            <h4 class="product-name">Cutting</h4>
            <p class="product-desc">Minimum order 5 (qty) + ₹30 courier</p>
            <div class="d-flex justify-content-between align-items-center mb-2">
              <p class="price text-dark fs-5 fw-bold mb-0">₹45 / pc</p>
              <div class="quantity" data-product-id="cutting">
                <button class="minus" aria-label="Decrease quantity">−</button>
                <input type="number" class="input-box" value="1" min="1" max="1000" aria-label="Quantity for Cutting">
                <button class="plus" aria-label="Increase quantity">+</button>
              </div>
            </div>
            <a href="#" class="btn btn-primary rounded-pill add-to-cart">Add to cart</a>
          </div>
        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="fruite-item">
          <div class="fruite-img">
            <img src="img/plants1.jpg" alt="Plant" loading="lazy">
          </div>
          <div class="position-absolute" style="top:10px; left:10px;">
            <span class="badge bg-secondary">Plants</span>
          </div>
          <div class="product-content">
            <h4 class="product-name">Plant</h4>
            <p class="product-desc">₹120 per plant + ₹40 courier (min order 3)</p>
            <div class="d-flex justify-content-between align-items-center mb-2">
              <p class="price text-dark fs-5 fw-bold mb-0">₹120 / pc</p>
              <div class="quantity" data-product-id="plant">
                <button class="minus" aria-label="Decrease quantity">−</button>
                <input type="number" class="input-box" value="1" min="1" max="100" aria-label="Quantity for Plant">
                <button class="plus" aria-label="Increase quantity">+</button>
              </div>
            </div>
            <a href="#" class="btn btn-primary rounded-pill add-to-cart">Add to cart</a>
          </div>
        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                         <div class="fruite-item">
          <div class="fruite-img">
            <img src="img/bulk-cuttings.jpg" alt="Bulk 100+" loading="lazy">
          </div>
          <div class="position-absolute" style="top:10px; left:10px;">
            <span class="badge bg-secondary">Bulk cuttings</span>
          </div>
          <div class="product-content">
            <h4 class="product-name">Bulk 100+</h4>
            <p class="product-desc">100+ cuttings ₹45 + courier</p>
            <div class="d-flex justify-content-between align-items-center mb-2">
              <p class="price text-dark fs-5 fw-bold mb-0">₹45 / pc</p>
              <div class="quantity" data-product-id="bulk100">
                <button class="minus" aria-label="Decrease quantity">−</button>
                <input type="number" class="input-box" value="1" min="1" max="10000" aria-label="Quantity for Bulk 100+">
                <button class="plus" aria-label="Increase quantity">+</button>
              </div>
            </div>
            <a href="#" class="btn btn-primary rounded-pill add-to-cart">Add to cart</a>
          </div>
        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fruits Shop End-->


       <?php include 'footer.php';?> 

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>