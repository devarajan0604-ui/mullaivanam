<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mullaivanam</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    .hero-img {
        height: 500px;
        /* Match your banner height */
        object-fit: cover;
        /* Crop without stretching */
        object-position: center;
        /* Keep focus centered */
    }

    .carousel-caption {
        bottom: 30%;
    }
   .carousel-caption h2 {
    padding-bottom: 20px;
    font-size: 60px;
    font-weight: 400 !important;
}
</style>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


  <?php include 'header.php';?>


    <div class="container-fluid p-0 hero-header">
        <div id="carouselHero" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="img/carousel/1.jpg" class="d-block w-100 hero-img" alt="Dragon Fruits">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-white fw-bold">Fresh Organic Dragon Fruits</h2>
                        <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Shop Now</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/carousel/2.jpg" class="d-block w-100 hero-img" alt="Plants">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-white fw-bold">Organic Plants & Healthy Greens</h2>
                        <a href="#" class="btn btn-success px-4 py-2 rounded-pill">Explore</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/carousel/3.jpg" class="d-block w-100 hero-img" alt="Plants">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-white fw-bold">Organic Plants & Healthy Greens</h2>
                        <a href="#" class="btn btn-success px-4 py-2 rounded-pill">Explore</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel/4.jpg" class="d-block w-100 hero-img" alt="Plants">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-white fw-bold">Organic Plants & Healthy Greens</h2>
                        <a href="#" class="btn btn-success px-4 py-2 rounded-pill">Explore</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel/5.jpg" class="d-block w-100 hero-img" alt="Plants">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-white fw-bold">Organic Plants & Healthy Greens</h2>
                        <a href="#" class="btn btn-success px-4 py-2 rounded-pill">Explore</a>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHero" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHero" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- Fruits Shop Start-->
    <div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3 mb-0">Our Organic Products</h1>
      <div class="filter-bar" role="tablist" aria-label="Product categories">
        <button class="filter-btn active" data-filter="all" role="tab" aria-selected="true">All Products</button>
        <button class="filter-btn" data-filter="Fruits" role="tab" aria-selected="false">Fruits</button>
        <button class="filter-btn" data-filter="Cuttings" role="tab" aria-selected="false">Cuttings</button>
        <button class="filter-btn" data-filter="Plants" role="tab" aria-selected="false">Plants</button>
        <button class="filter-btn" data-filter="Bulk cuttings" role="tab" aria-selected="false">Bulk Cuttings</button>
      </div>
    </div>

    <!-- Single container with all product cards as DIRECT children -->
    <div id="productsGrid" aria-live="polite">
      <!-- Example product card (repeat/duplicate as needed) -->
      <div class="product-card" data-cat="Fruits" data-name="Big" data-price="180">
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

      <div class="product-card" data-cat="Fruits" data-name="Medium" data-price="150">
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

      <div class="product-card" data-cat="Cuttings" data-name="Cutting" data-price="45">
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

      <div class="product-card" data-cat="Plants" data-name="Plant" data-price="120">
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

      <div class="product-card" data-cat="Bulk cuttings" data-name="Bulk 100+" data-price="45">
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

      <!-- Add more product-card elements here (all inside this one #productsGrid) -->
    </div>
  </div>

    <!-- Fruits Shop End-->
    <!-- Fact Start -->
    <!-- ✅ Counter Section Start -->
    <div class="container-fluid py-5" style="background-color:#fff5f8;">
        <div class="container">
            <div>
                <div class="row g-4 justify-content-center text-center">

                    <!-- Satisfied Customers -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5 h-100 shadow-sm">
                            <i class="fa fa-smile-beam fa-3x mb-3" style="color:#e91e63;"></i>
                            <h4 class="text-uppercase fw-bold text-dark">Satisfied Customers</h4>
                            <h1 class="fw-bold text-dark">1,963+</h1>
                        </div>
                    </div>

                    <!-- Quality of Service -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5 h-100 shadow-sm">
                            <i class="fa fa-award fa-3x mb-3" style="color:#e91e63;"></i>
                            <h4 class="text-uppercase fw-bold text-dark">Quality of Service</h4>
                            <h1 class="fw-bold text-dark">99%</h1>
                        </div>
                    </div>

                    <!-- Quality Certificates -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5 h-100 shadow-sm">
                            <i class="fa fa-certificate fa-3x mb-3" style="color:#e91e63;"></i>
                            <h4 class="text-uppercase fw-bold text-dark">Quality Certificates</h4>
                            <h1 class="fw-bold text-dark">33</h1>
                        </div>
                    </div>

                    <!-- 24/7 Support -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5 h-100 shadow-sm">
                            <i class="fa fa-headset fa-3x mb-3" style="color:#e91e63;"></i>
                            <h4 class="text-uppercase fw-bold text-dark">24/7 Fast Support</h4>
                            <h1 class="fw-bold text-dark">24x7</h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ✅ Counter Section End -->

    <!-- Fact Start -->


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
    <script>
    (() => {
  // Find all quantity widgets
  const containers = document.querySelectorAll('.quantity');

  containers.forEach(initQuantityWidget);

  function initQuantityWidget(container) {
    const minusBtn = container.querySelector('.minus');
    const plusBtn  = container.querySelector('.plus');
    const inputBox  = container.querySelector('.input-box');

    if (!inputBox || !minusBtn || !plusBtn) return; // defensive

    // normalize max to a number (if not set, treat as Infinity)
    function getMax() {
      const m = parseInt(inputBox.getAttribute('max'), 10);
      return Number.isFinite(m) ? m : Infinity;
    }

    function parseVal() {
      const v = parseInt(inputBox.value, 10);
      return Number.isFinite(v) ? v : 1;
    }

    function updateButtonStates() {
      const value = parseVal();
      minusBtn.disabled = value <= 1;
      plusBtn.disabled  = value >= getMax();
    }

    function setValue(v) {
      const max = getMax();
      v = Math.max(1, Math.min(v, max));
      inputBox.value = v;
      updateButtonStates();
      // callback / custom event - replace or extend as needed
      onQuantityChange(v, container);
    }

    function decreaseValue() {
      setValue(parseVal() - 1);
    }

    function increaseValue() {
      setValue(parseVal() + 1);
    }

    // handle clicks via event delegation but scoped to this container
    container.addEventListener('click', (event) => {
      // In case the button contains inner elements, use closest
      const btn = event.target.closest('button, .minus, .plus');
      if (!btn || !container.contains(btn)) return;

      if (btn.classList.contains('minus')) {
        decreaseValue();
      } else if (btn.classList.contains('plus')) {
        increaseValue();
      }
    });

    // handle manual edits in input
    inputBox.addEventListener('input', () => {
      // sanitize and clamp on every input (so buttons stay correct)
      let v = parseInt(inputBox.value, 10);
      if (!Number.isFinite(v)) {
        // don't break user typing — keep current text but don't disable logic
        updateButtonStates();
        return;
      }
      setValue(v);
    });

    // initial sync
    updateButtonStates();
  }

  // default on-change handler — change/replace if you need other behavior
  function onQuantityChange(value, container) {
    // container is the .quantity element for this widget
    // Example: log, update price, fire custom event, etc.
    console.log('Quantity changed in widget:', container, '->', value);

    // If you want other code to listen, dispatch a custom event:
    container.dispatchEvent(new CustomEvent('quantitychange', {
      detail: { value },
      bubbles: true
    }));
  }
})();


    </script>
  <script>
    // Filter buttons: show/hide product cards based on data-cat, keep all cards inside #productsGrid
    (function () {
      const filterBar = document.querySelector('.filter-bar');
      const filterButtons = Array.from(document.querySelectorAll('.filter-btn'));
      const productCards = Array.from(document.querySelectorAll('.product-card'));

      function setActiveButton(activeBtn) {
        filterButtons.forEach(btn => {
          const isActive = btn === activeBtn;
          btn.classList.toggle('active', isActive);
          btn.setAttribute('aria-selected', isActive ? 'true' : 'false');
        });
      }

      function applyFilter(category) {
        if (category === 'all') {
          productCards.forEach(card => card.style.display = '');
        } else {
          const catLower = category.toLowerCase();
          productCards.forEach(card => {
            const cardCat = (card.dataset.cat || '').toLowerCase();
            card.style.display = (cardCat === catLower) ? '' : 'none';
          });
        }
      }

      // initial: show all
      applyFilter('all');

      filterBar.addEventListener('click', (e) => {
        const btn = e.target.closest('.filter-btn');
        if (!btn) return;
        const category = btn.dataset.filter || 'all';
        setActiveButton(btn);
        applyFilter(category);
      });

      // keyboard accessibility: allow Enter/Space to activate
      filterBar.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          const btn = e.target.closest('.filter-btn');
          if (!btn) return;
          btn.click();
          e.preventDefault();
        }
      });

      // Quantity buttons (event delegation)
      document.addEventListener('click', function (e) {
        const btn = e.target;
        if (btn.matches('.minus, .plus')) {
          const qtyWrap = btn.closest('.quantity');
          if (!qtyWrap) return;
          const input = qtyWrap.querySelector('.input-box');
          if (!input) return;
          let val = parseInt(input.value || '0', 10);
          const min = parseInt(input.min || '1', 10);
          const max = parseInt(input.max || '9999', 10);

          if (btn.classList.contains('minus')) {
            val = isNaN(val) ? min : Math.max(min, val - 1);
          } else if (btn.classList.contains('plus')) {
            val = isNaN(val) ? min : Math.min(max, val + 1);
          }
          input.value = val;
        }
      });

      // Keep manual numeric inputs in range
      document.addEventListener('input', function (e) {
        const el = e.target;
        if (el.matches('.input-box')) {
          const min = parseInt(el.min || '1', 10);
          const max = parseInt(el.max || '9999', 10);
          let val = parseInt(el.value || '0', 10);
          if (isNaN(val)) val = min;
          if (val < min) el.value = min;
          if (val > max) el.value = max;
        }
      });

      // Add to cart placeholder (replace with your logic)
      document.addEventListener('click', (e) => {
        const btn = e.target.closest('.add-to-cart');
        if (!btn) return;
        e.preventDefault();
        const card = btn.closest('.product-card');
        const name = card?.dataset?.name || 'Product';
        const qty = card.querySelector('.input-box')?.value || 1;
        btn.classList.add('disabled');
        btn.textContent = 'Added';
        setTimeout(() => {
          btn.classList.remove('disabled');
          btn.textContent = 'Add to cart';
        }, 900);
        console.log('Add to cart:', name, 'qty:', qty);
      });
    })();
  </script>
</body>

</html>