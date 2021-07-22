<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/checkout.php   11 Nov 2019 12:44:33 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout &ndash; Belle Multipurpose Bootstrap 4 Template</title>
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

<?php
include('includes/topnav.php')
?>
<br><br><br>
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

<!--Body Content-->
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Checkout</h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="customer-box returning-customer">
                    <h3><i class="icon anm anm-user-al"></i> Returning customer? <a href="#customer-login" id="customer" class="text-white text-decoration-underline" data-toggle="collapse">Click here to login</a></h3>
                    <div id="customer-login" class="collapse customer-content">
                        <div class="customer-info">
                            <p class="coupon-text">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                            <form>
                                <div class="row">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <label for="exampleInputEmail1">Email address <span class="required-f">*</span></label>
                                        <input type="email" class="no-margin" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <label for="exampleInputPassword1">Password <span class="required-f">*</span></label>
                                        <input type="password" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-check width-100 margin-20px-bottom">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value=""> Remember me!
                                            </label>
                                            <a href="#" class="float-right">Forgot your password?</a>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="customer-box customer-coupon">
                    <h3 class="font-15 xs-font-13"><i class="icon anm anm-gift-l"></i> Have a coupon? <a href="#have-coupon" class="text-white text-decoration-underline" data-toggle="collapse">Click here to enter your code</a></h3>
                    <div id="have-coupon" class="collapse coupon-checkout-content">
                        <div class="discount-coupon">
                            <div id="coupon" class="coupon-dec tab-pane active">
                                <p class="margin-10px-bottom">Enter your coupon code if you have one.</p>
                                <label class="required get" for="coupon-code"><span class="required-f">*</span> Coupon</label>
                                <input id="coupon-code" required="" type="text" class="mb-3">
                                <button class="coupon-btn btn" type="submit">Apply Coupon</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row billing-fields">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                <div class="create-ac-content bg-light-gray padding-20px-all">
                    <form>
                        <fieldset>
                            <h2 class="login-title mb-3">Billing details</h2>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-firstname">First Name <span class="required-f">*</span></label>
                                    <input name="firstname" value="" id="input-firstname" type="text">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-lastname">Last Name <span class="required-f">*</span></label>
                                    <input name="lastname" value="" id="input-lastname" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                    <input name="email" value="" id="input-email" type="email">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-telephone">Telephone <span class="required-f">*</span></label>
                                    <input name="telephone" value="" id="input-telephone" type="tel">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                    <label for="input-company">Company</label>
                                    <input name="company" value="" id="input-company" type="text">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-address-1">Address <span class="required-f">*</span></label>
                                    <input name="address_1" value="" id="input-address-1" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                    <label for="input-address-2">Apartment <span class="required-f">*</span></label>
                                    <input name="address_2" value="" id="input-address-2" type="text">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-city">City <span class="required-f">*</span></label>
                                    <input name="city" value="" id="input-city" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-postcode">Post Code <span class="required-f">*</span></label>
                                    <input name="postcode" value="" id="input-postcode" type="text">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-country">Country <span class="required-f">*</span></label>
                                    <select name="country_id" id="input-country">
                                        <option value=""> --- Please Select --- </option>
                                        <option value="244">Aaland Islands</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">American Samoa</option>
                                        <option value="5">Andorra</option>
                                        <option value="6">Angola</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-zone">Region / State <span class="required-f">*</span></label>
                                    <select name="zone_id" id="input-zone">
                                        <option value=""> --- Please Select --- </option>
                                        <option value="3513">Aberdeen</option>
                                        <option value="3514">Aberdeenshire</option>
                                        <option value="3515">Anglesey</option>
                                        <option value="3516">Angus</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="form-group form-check col-md-12 col-lg-12 col-xl-12">
                                    <label class="form-check-label padding-15px-left">
                                        <input type="checkbox" class="form-check-input" value=""><strong>Create an account ?</strong>
                                    </label>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                    <label for="input-company">Order Notes <span class="required-f">*</span></label>
                                    <textarea class="form-control resize-both" rows="3"></textarea>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="your-order-payment">
                    <div class="your-order">
                        <h2 class="order-title mb-4">Your Order</h2>

                        <div class="table-responsive-sm order-table">
                            <table class="bg-white table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-left">Product Name</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">Spike Jacket</td>
                                        <td>$99</td>
                                        <td>S</td>
                                        <td>1</td>
                                        <td>$99</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Argon Sweater</td>
                                        <td>$199</td>
                                        <td>M</td>
                                        <td>2</td>
                                        <td>$298</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Babydoll Bow Dress</td>
                                        <td>$299</td>
                                        <td>XL</td>
                                        <td>3</td>
                                        <td>$398</td>
                                    </tr>
                                </tbody>
                                <tfoot class="font-weight-600">
                                    <tr>
                                        <td colspan="4" class="text-right">Shipping </td>
                                        <td>$50.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Total</td>
                                        <td>$845.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <hr />

                    <div class="your-payment">
                        <h2 class="payment-title mb-3">payment method</h2>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion" class="payment-section">
                                    <div class="card mb-2">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseOne">Direct Bank Transfer </a>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <p class="no-margin font-15">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Cheque Payment</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <p class="no-margin font-15">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card margin-15px-bottom border-radius-none">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree"> PayPal </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <p class="no-margin font-15">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour"> Payment Information </a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <label for="input-cardname">Name on Card <span class="required-f">*</span></label>
                                                            <input name="cardname" value="" placeholder="Card Name" id="input-cardname" class="form-control" type="text">
                                                        </div>
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <label for="input-country">Credit Card Type <span class="required-f">*</span></label>
                                                            <select name="country_id" class="form-control">
                                                                <option value=""> --- Please Select --- </option>
                                                                <option value="1">American Express</option>
                                                                <option value="2">Visa Card</option>
                                                                <option value="3">Master Card</option>
                                                                <option value="4">Discover Card</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <label for="input-cardno">Credit Card Number <span class="required-f">*</span></label>
                                                            <input name="cardno" value="" placeholder="Credit Card Number" id="input-cardno" class="form-control" type="text">
                                                        </div>
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <label for="input-cvv">CVV Code <span class="required-f">*</span></label>
                                                            <input name="cvv" value="" placeholder="Card Verification Number" id="input-cvv" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <label>Expiration Date <span class="required-f">*</span></label>
                                                            <input type="date" name="exdate" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <img class="padding-25px-top xs-padding-5px-top" src="assets/images/payment-img.jpg" alt="card" title="card" />
                                                        </div>
                                                    </div>
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="order-button-payment">
                                <button class="btn" value="Place order" type="submit">Place order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--End Body Content-->

<!--Footer-->
<?php
include('includes/footer.php')
?>
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

<!-- belle/checkout.php   11 Nov 2019 12:44:33 GMT -->

</html>