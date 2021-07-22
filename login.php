<?php
session_start();
//include('includes/topnav.php');
error_reporting(0);
require('includes/config.php');
if (isset($_POST['login_user'])) {
  $username = $_POST['email'];

  $password = $_POST['password'];

  $query_sel = mysqli_query($con, "SELECT * FROM `users` WHERE `email`= '$username' AND `password`='$password'");
  if (mysqli_num_rows($query_sel) != 0) {
    $select_id = mysqli_query($con, "SELECT id FROM users WHERE `email`='$username'");
    $fetch_id = mysqli_fetch_array($select_id);
    $_SESSION['user_id'] = $fetch_id[0];
    $_SESSION['isLogged'] = true;
    $_SESSION['email'] = $username;
    header("location:index");
  } else {
    $_SESSION['errmsg'] = "Invalid username or password";
?>
    <!-- <script>
      alert('wrong password or username')
    </script> -->

<?php
  }
}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/index.php  -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>xxxxx e-commerce</title>
  <meta name="description" content="description">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <!-- Plugins CSS -->
  <link rel="stylesheet" href="assets/css/plugins.css">
  <!-- Bootstap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Main Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>


<body class="template-index belle template-index-belle">
  <!-- <div id="pre-loader">
        <img src="assets/images/loader.gif" alt="Loading..." />
    </div> -->
  <div class="pageWrapper">
    <!--Search Form Drawer-->
    <div class="search">
      <div class="search__form">
        <form class="search-bar__form" action="#">
          <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
          <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
        </form>
        <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
      </div>
    </div>
    <!--End Search Form Drawer-->
    <!--Top Header-->
    <div class="top-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10 col-sm-8 col-md-5 col-lg-4">
            <!-- <div class="currency-picker">
                            <span class="selected-currency">USD</span>
                            <ul id="currencies">
                                <li data-currency="INR" class="">INR</li>
                                <li data-currency="GBP" class="">GBP</li>
                                <li data-currency="CAD" class="">CAD</li>
                                <li data-currency="USD" class="selected">USD</li>
                                <li data-currency="AUD" class="">AUD</li>
                                <li data-currency="EUR" class="">EUR</li>
                                <li data-currency="JPY" class="">JPY</li>
                            </ul>
                        </div> -->
            <div class="language-dropdown">
              <span class="language-dd">English</span>
              <ul id="language">

                <li class="">French</li>
              </ul>
            </div>
            <p class="phone-no"><i class="anm anm-phone-s"></i> +250 8(888) 88 888</p>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
            <div class="text-center">
              <p class="top-header_middle-text"> xxxxxxx xxxx Shipping</p>
            </div>
          </div>
          <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
            <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
            <ul class="customer-links list-inline">
              <?php
              session_start();
              if (isset($_SESSION['email']) && $_SESSION['isLogged'] == true) {

              ?>

                <li><a style="text-transform:inherit;"><?php echo $_SESSION['email']  ?></a></li>
                <li><a href="logout">Logout</a></li>
              <?php

              } else {
              ?>

                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Create Account</a></li>
              <?php

              }

              ?>

              <!-- <li><a href="wishlist.php">Wishlist</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--Header-->
    <div class="header-wrap classicHeader animated d-flex">
      <div class="container-fluid">
        <div class="row align-items-center">
          <!--Desktop Logo-->
          <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
            <a href="index.php">
              <img src="assets/images/logo.svg" alt="For Logo" title="xxx e-commerce" />
            </a>
          </div>
          <!--End Desktop Logo-->
          <div class="col-2 col-sm-3 col-md-3 col-lg-8">
            <div class="d-block d-lg-none">
              <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                <i class="icon anm anm-times-l"></i>
                <i class="anm anm-bars-r"></i>
              </button>
            </div>
            <!--Desktop Menu-->
            <nav class="grid__item" id="AccessibleNav">
              <!-- for mobile -->
              <ul id="siteNav" class="site-nav medium center hidearrow">
                <li class="lvl1 parent megamenu"><a href="index">Home <i class="anm anm-angle-down-l"></i></a>
                  <!-- <div class="megamenu style1">
                                <ul class="grid mmWrapper">
                                    <li class="grid__item large-up--one-whole">
                                        <ul class="grid">
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Home Group 1</a>
                                            <ul class="subLinks">
                                                    <li class="lvl-2"><a href="index.php" class="site-nav lvl-2">Home 1 - Classic</a></li>
                                                    <li class="lvl-2"><a href="home2-default.php" class="site-nav lvl-2">Home 2 - Default</a></li>
                                                    <li class="lvl-2"><a href="home15-funiture.php" class="site-nav lvl-2">Home 15 - Furniture <span class="lbl nm_label1">New</span></a></li>
                                                    <li class="lvl-2"><a href="home3-boxed.php" class="site-nav lvl-2">Home 3 - Boxed</a></li>
                                                    <li class="lvl-2"><a href="home4-fullwidth.php" class="site-nav lvl-2">Home 4 - Fullwidth</a></li>
                                                    <li class="lvl-2"><a href="home5-cosmetic.php" class="site-nav lvl-2">Home 5 - Cosmetic</a></li>
                                                    <li class="lvl-2"><a href="home6-modern.php" class="site-nav lvl-2">Home 6 - Modern</a></li>
                                                    <li class="lvl-2"><a href="home7-shoes.php" class="site-nav lvl-2">Home 7 - Shoes</a></li>
                                                </ul>
                                            </li>
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Home Group 2</a>
                                                <ul class="subLinks">
                                                    <li class="lvl-2"><a href="home8-jewellery.php" class="site-nav lvl-2">Home 8 - Jewellery</a></li>
                                                    <li class="lvl-2"><a href="home9-parallax.php" class="site-nav lvl-2">Home 9 - Parallax</a></li>
                                                    <li class="lvl-2"><a href="home10-minimal.php" class="site-nav lvl-2">Home 10 - Minimal</a></li>
                                                    <li class="lvl-2"><a href="home11-grid.php" class="site-nav lvl-2">Home 11 - Grid</a></li>
                                                    <li class="lvl-2"><a href="home12-category.php" class="site-nav lvl-2">Home 12 - Category</a></li>
                                                    <li class="lvl-2"><a href="home13-auto-parts.php" class="site-nav lvl-2">Home 13 - Auto Parts</a></li>
                                                    <li class="lvl-2"><a href="home14-bags.php" class="site-nav lvl-2">Home 14 - Bags <span class="lbl nm_label1">New</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">New Sections</a>
                                                <ul class="subLinks">
                                                    <li class="lvl-2"><a href="home11-grid.php" class="site-nav lvl-2">Image Gallery</a></li>
                                                    <li class="lvl-2"><a href="home5-cosmetic.php" class="site-nav lvl-2">Featured Product</a></li>
                                                    <li class="lvl-2"><a href="home7-shoes.php" class="site-nav lvl-2">Columns with Items</a></li>
                                                    <li class="lvl-2"><a href="home6-modern.php" class="site-nav lvl-2">Text columns with images</a>
                                                    </li>
                                                    <li class="lvl-2"><a href="home2-default.php" class="site-nav lvl-2">Products Carousel</a></li>
                                                    <li class="lvl-2"><a href="home9-parallax.php" class="site-nav lvl-2">Parallax Banner</a></li>
                                                </ul>
                                            </li>
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">New Features</a>
                                                <ul class="subLinks">
                                                    <li class="lvl-2"><a href="home13-auto-parts.php" class="site-nav lvl-2">Top Information Bar <span class="lbl nm_label1">New</span></a></li>
                                                    <li class="lvl-2"><a href="#" class="site-nav lvl-2">Age
                                                            Varification <span class="lbl nm_label1">New</span></a></li>
                                                    <li class="lvl-2"><a href="#" class="site-nav lvl-2">Footer
                                                            Blocks</a></li>
                                                    <li class="lvl-2"><a href="#" class="site-nav lvl-2">2 New
                                                            Megamenu style</a></li>
                                                    <li class="lvl-2"><a href="#" class="site-nav lvl-2">Show
                                                            Total Savings <span class="lbl nm_label3">Hot</span></a></li>
                                                    <li class="lvl-2"><a href="#" class="site-nav lvl-2">New
                                                            Custom Icons</a></li>
                                                    <li class="lvl-2"><a href="#" class="site-nav lvl-2">Auto
                                                            Currency</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> -->
                </li>



                <li class="lvl1 parent megamenu"><a href="#">Product <i class="anm anm-angle-down-l"></i></a>
                  <div class="megamenu style2">
                    <ul class="grid mmWrapper">
                      <li class="grid__item one-whole">
                        <ul class="grid">
                          <!-- <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Product Page</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="product-layout-1.php" class="site-nav lvl-2">Product Layout 1</a></li>
                                                            <li class="lvl-2"><a href="product-layout-2.php" class="site-nav lvl-2">Product Layout 2</a></li>
                                                            <li class="lvl-2"><a href="product-layout-3.php" class="site-nav lvl-2">Product Layout 3</a></li>
                                                            <li class="lvl-2"><a href="product-with-left-thumbs.php" class="site-nav lvl-2">Product With Left Thumbs</a>
                                                            </li>
                                                            <li class="lvl-2"><a href="product-with-right-thumbs.php" class="site-nav lvl-2">Product With Right Thumbs</a>
                                                            </li>
                                                            <li class="lvl-2"><a href="product-with-bottom-thumbs.php" class="site-nav lvl-2">Product With Bottom
                                                                    Thumbs</a></li>
                                                        </ul>
                                                    </li> -->
                          <?php

                          $select_pro_cat = mysqli_query($con, 'SELECT * FROM category');

                          while ($row = mysqli_fetch_array($select_pro_cat)) {
                          ?>


                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1"><?php echo $row['categoryName'] ?></a>
                              <ul class="subLinks">
                                <?php
                                $select_pro_cat2 = mysqli_query($con, "SELECT * FROM subcategorY WHERE categoryid='$row[0]'");
                                while ($row1 = mysqli_fetch_array($select_pro_cat2)) {
                                ?>
                                  <li class="lvl-2"><a href="product-with-variant-image.php" class="site-nav lvl-2"><?php echo $row1[2] ?></a></li>
                                <?php  }
                                ?>


                              </ul>
                            </li>

                          <?php
                          }


                          ?>


                        </ul>
                      </li>
                      <li class="grid__item large-up--one-whole imageCol"><a href="#"><img src="assets/images/megamenu-bg2.jpg" alt=""></a></li>
                    </ul>
                  </div>
                </li>

                <li class="lvl1 parent megamenu"><a href="about-us">About <i class="anm anm-angle-down-l"></i></a></li>
                <li class="lvl1 parent megamenu"><a href="contact-us">Contact us <i class="anm anm-angle-down-l"></i></a></li>

                <!-- <li class="lvl1 parent dropdown"><a href="#">Blog <i class="anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="blog-left-sidebar.php" class="site-nav">Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.php" class="site-nav">Right Sidebar</a></li>
                                <li><a href="blog-fullwidth.php" class="site-nav">Fullwidth</a></li>
                                <li><a href="blog-grid-view.php" class="site-nav">Gridview</a></li>
                                <li><a href="blog-article.php" class="site-nav">Article</a></li>
                            </ul>
                        </li> -->
                <!-- <li class="lvl1"><a href="#"><b>Buy Now!</b> <i class="anm anm-angle-down-l"></i></a>
                        </li> -->
              </ul>
            </nav>
            <!--End Desktop Menu-->
          </div>
          <!--Mobile Logo-->
          <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
            <div class="logo">
              <a href="index.php">
                <img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
              </a>
            </div>
          </div>
          <!--Mobile Logo-->
          <div class="col-4 col-sm-3 col-md-3 col-lg-2">
            <div class="site-cart">
              <a href="#;" class="site-header__cart" title="Cart">
                <i class="icon anm anm-bag-l"></i>
                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
              </a>
              <!--Minicart Popup-->
              <div id="header-cart" class="block block-cart">
                <ul class="mini-products-list">
                  <li class="item">
                    <a class="product-image" href="#">
                      <img src="assets/images/product-images/cape-dress-1.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
                    </a>
                    <div class="product-details">
                      <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                      <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                      <a class="pName" href="cart.php">Sleeve Kimono Dress</a>
                      <div class="variant-cart">Black / XL</div>
                      <div class="wrapQtyBtn">
                        <div class="qtyField">
                          <span class="label">Qty:</span>
                          <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                          <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                          <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                        </div>
                      </div>
                      <div class="priceRow">
                        <div class="product-price">
                          <span class="money">$59.00</span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <a class="product-image" href="#">
                      <img src="assets/images/product-images/cape-dress-2.jpg" alt="Elastic Waist Dress - Black / Small" title="" />
                    </a>
                    <div class="product-details">
                      <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                      <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                      <a class="pName" href="cart.php">Elastic Waist Dress</a>
                      <div class="variant-cart">Gray / XXL</div>
                      <div class="wrapQtyBtn">
                        <div class="qtyField">
                          <span class="label">Qty:</span>
                          <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                          <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                          <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                        </div>
                      </div>
                      <div class="priceRow">
                        <div class="product-price">
                          <span class="money">$99.00</span>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="total">
                  <div class="total-in">
                    <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                  </div>
                  <div class="buttonSet text-center">
                    <a href="cart.php" class="btn btn-secondary btn--small">View Cart</a>
                    <a href="checkout.php" class="btn btn-secondary btn--small">Checkout</a>
                  </div>
                </div>
              </div>
              <!--EndMinicart Popup-->
            </div>
            <div class="site-header__search">
              <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
      <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
      <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent megamenu"><a href="index.php">Home <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">Home Group 1<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="index.php" class="site-nav">Home 1 - Classic</a></li>
                <li><a href="home2-default.php" class="site-nav">Home 2 - Default</a></li>
                <li><a href="home15-funiture.php" class="site-nav">Home 15 - Furniture </a></li>
                <li><a href="home3-boxed.php" class="site-nav">Home 3 - Boxed</a></li>
                <li><a href="home4-fullwidth.php" class="site-nav">Home 4 - Fullwidth</a></li>
                <li><a href="home5-cosmetic.php" class="site-nav">Home 5 - Cosmetic</a></li>
                <li><a href="home6-modern.php" class="site-nav">Home 6 - Modern</a></li>
                <li><a href="home7-shoes.php" class="site-nav last">Home 7 - Shoes</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Home Group 2<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home8-jewellery.php" class="site-nav">Home 8 - Jewellery</a></li>
                <li><a href="home9-parallax.php" class="site-nav">Home 9 - Parallax</a></li>
                <li><a href="home10-minimal.php" class="site-nav">Home 10 - Minimal</a></li>
                <li><a href="home11-grid.php" class="site-nav">Home 11 - Grid</a></li>
                <li><a href="home12-category.php" class="site-nav">Home 12 - Category</a></li>
                <li><a href="home13-auto-parts.php" class="site-nav">Home 13 - Auto Parts</a></li>
                <li><a href="home14-bags.php" class="site-nav last">Home 14 - Bags</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">New Sections<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home11-grid.php" class="site-nav">Image Gallery</a></li>
                <li><a href="home5-cosmetic.php" class="site-nav">Featured Product</a></li>
                <li><a href="home7-shoes.php" class="site-nav">Columns with Items</a></li>
                <li><a href="home6-modern.php" class="site-nav">Text columns with images</a></li>
                <li><a href="home2-default.php" class="site-nav">Products Carousel</a></li>
                <li><a href="home9-parallax.php" class="site-nav last">Parallax Banner</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">New Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home13-auto-parts.php" class="site-nav">Top Information Bar </a></li>
                <li><a href="#" class="site-nav">Age Varification </a></li>
                <li><a href="#" class="site-nav">Footer Blocks</a></li>
                <li><a href="#" class="site-nav">2 New Megamenu style</a></li>
                <li><a href="#" class="site-nav">Show Total Savings </a></li>
                <li><a href="#" class="site-nav">New Custom Icons</a></li>
                <li><a href="#" class="site-nav last">Auto Currency</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">Shop Pages<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="shop-left-sidebar.php" class="site-nav">Left Sidebar</a></li>
                <li><a href="shop-right-sidebar.php" class="site-nav">Right Sidebar</a></li>
                <li><a href="shop-fullwidth.php" class="site-nav">Fullwidth</a></li>
                <li><a href="shop-grid-3.php" class="site-nav">3 items per row</a></li>
                <li><a href="shop-grid-4.php" class="site-nav">4 items per row</a></li>
                <li><a href="shop-grid-5.php" class="site-nav">5 items per row</a></li>
                <li><a href="shop-grid-6.php" class="site-nav">6 items per row</a></li>
                <li><a href="shop-grid-7.php" class="site-nav">7 items per row</a></li>
                <li><a href="shop-listview.php" class="site-nav last">Product Listview</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Shop Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="shop-left-sidebar.php" class="site-nav">Product Countdown </a></li>
                <li><a href="shop-right-sidebar.php" class="site-nav">Infinite Scrolling</a></li>

                <li><a href="shop-grid-3.php" class="site-nav">Pagination - Classic</a></li>
                <li><a href="shop-grid-6.php" class="site-nav">Pagination - Load More</a></li>
                <li><a href="product-labels.php" class="site-nav">Dynamic Product Labels</a></li>
                <li><a href="product-swatches-style.php" class="site-nav">Product Swatches </a></li>
                <li><a href="product-hover-info.php" class="site-nav">Product Hover Info</a></li>
                <li><a href="shop-grid-3.php" class="site-nav">Product Reviews</a></li>
                <li><a href="shop-left-sidebar.php" class="site-nav last">Discount Label </a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="product-layout-1.php">Product <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="product-layout-1.php" class="site-nav">Product Page<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-layout-1.php" class="site-nav">Product Layout 1</a></li>
                <li><a href="product-layout-2.php" class="site-nav">Product Layout 2</a></li>
                <li><a href="product-layout-3.php" class="site-nav">Product Layout 3</a></li>
                <li><a href="product-with-left-thumbs.php" class="site-nav">Product With Left Thumbs</a></li>
                <li><a href="product-with-right-thumbs.php" class="site-nav">Product With Right Thumbs</a></li>
                <li><a href="product-with-bottom-thumbs.php" class="site-nav last">Product With Bottom Thumbs</a></li>
              </ul>
            </li>
            <li><a href="short-description.php" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="short-description.php" class="site-nav">Short Description</a></li>
                <li><a href="product-countdown.php" class="site-nav">Product Countdown</a></li>
                <li><a href="product-video.php" class="site-nav">Product Video</a></li>
                <li><a href="product-quantity-message.php" class="site-nav">Product Quantity Message</a></li>
                <li><a href="product-visitor-sold-count.php" class="site-nav">Product Visitor/Sold Count </a></li>
                <li><a href="product-zoom-lightbox.php" class="site-nav last">Product Zoom/Lightbox </a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-with-variant-image.php" class="site-nav">Product with Variant Image</a></li>
                <li><a href="product-with-color-swatch.php" class="site-nav">Product with Color Swatch</a></li>
                <li><a href="product-with-image-swatch.php" class="site-nav">Product with Image Swatch</a></li>
                <li><a href="product-with-dropdown.php" class="site-nav">Product with Dropdown</a></li>
                <li><a href="product-with-rounded-square.php" class="site-nav">Product with Rounded Square</a></li>
                <li><a href="swatches-style.php" class="site-nav last">Product Swatches All Style</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-accordion.php" class="site-nav">Product Accordion</a></li>
                <li><a href="product-pre-orders.php" class="site-nav">Product Pre-orders </a></li>
                <li><a href="product-labels-detail.php" class="site-nav">Product Labels</a></li>
                <li><a href="product-discount.php" class="site-nav">Product Discount In %</a></li>
                <li><a href="product-shipping-message.php" class="site-nav">Product Shipping Message</a></li>
                <li><a href="product-shipping-message.php" class="site-nav last">Size Guide </a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="about-us.php">Pages <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="cart-variant1.php" class="site-nav">Cart Page <i class="anm anm-plus-l"></i></a>
              <ul class="dropdown">
                <li><a href="cart-variant1.php" class="site-nav">Cart Variant1</a></li>
                <li><a href="cart-variant2.php" class="site-nav">Cart Variant2</a></li>
              </ul>
            </li>
            <li><a href="compare-variant1.php" class="site-nav">Compare Product <i class="anm anm-plus-l"></i></a>
              <ul class="dropdown">
                <li><a href="compare-variant1.php" class="site-nav">Compare Variant1</a></li>
                <li><a href="compare-variant2.php" class="site-nav">Compare Variant2</a></li>
              </ul>
            </li>
            <li><a href="checkout.php" class="site-nav">Checkout</a></li>
            <li><a href="about-us.php" class="site-nav">About Us<span class="lbl nm_label1">New</span></a></li>
            <li><a href="contact-us.php" class="site-nav">Contact Us</a></li>
            <li><a href="faqs.php" class="site-nav">FAQs</a></li>
            <li><a href="lookbook1.php" class="site-nav">Lookbook<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="lookbook1.php" class="site-nav">Style 1</a></li>
                <li><a href="lookbook2.php" class="site-nav last">Style 2</a></li>
              </ul>
            </li>
            <li><a href="404.php" class="site-nav">404</a></li>
            <li><a href="coming-soon.php" class="site-nav">Coming soon<span class="lbl nm_label1">New</span></a></li>
          </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.php">Blog <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="blog-left-sidebar.php" class="site-nav">Left Sidebar</a></li>
            <li><a href="blog-right-sidebar.php" class="site-nav">Right Sidebar</a></li>
            <li><a href="blog-fullwidth.php" class="site-nav">Fullwidth</a></li>
            <li><a href="blog-grid-view.php" class="site-nav">Gridview</a></li>
            <li><a href="blog-article.php" class="site-nav">Article</a></li>
          </ul>
        </li>
        <li class="lvl1"><a href="#"><b>Buy Now!</b></a>
        </li>
      </ul>
    </div>
    <!--End Mobile Menu-->
    <br><br><br>
    <!--Body Content-->
    <div id="page-content">
      <!--Page Title-->
      <div class="page section-header text-center">
        <div class="page-title">
          <div class="wrapper">
            <h1 class="page-width">Login</h1>
          </div>
        </div>
      </div>
      <!--End Page Title-->

      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
            <div class="mb-4">

              <form method="post" action="#" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="CustomerEmail">Email</label>
                      <input type="email" name="email" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="">
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="CustomerPassword">Password</label>
                      <input type="password" value="" name="password" placeholder="" id="CustomerPassword" class="">
                    </div>
                  </div>
                </div>
                <div class="row">

                  <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                    <p> <span style="color:red; font-size: 16px;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg'] = ""); ?></span></p>
                    <input type="submit" name='login_user' class="btn mb-3" value="Sign In">
                    <p class="mb-4">
                      <a href="#" id="RecoverPassword">Forgot your password?</a> &nbsp; | &nbsp;
                      <a href="register.php" id="customer_register_link">Create account</a>
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--End Body Content-->
    <?php include('includes/footer.php') ?>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->

    <!-- Including Jquery -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/jquery.cookie.js"></script>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <!-- Including Javascript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/lazysizes.js"></script>
    <script src="assets/js/main.js"></script>
  </div>
</body>

<!-- belle/login.php   11 Nov 2019 12:22:27 GMT -->

</html>