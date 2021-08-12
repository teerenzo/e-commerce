<?php
session_start();
error_reporting(0);
require 'config.php';
$user_id = $_SESSION['user_id'];
$pro_id=$_POST['prod_id'];
if(isset($_POST['add_to_cart']) AND strlen($_SESSION['email'])!=0){
   
    $check_exist=mysqli_query($con,"SELECT * from cart where p_id='$pro_id'");
    if(mysqli_num_rows($check_exist)!=0){
        $update_prod= mysqli_query($con,"UPDATE `cart` set qty=qty+1");
        if($update_prod){
            ?>
  <script>alert('Product Added to Cart');
        window.history(go(-1));
        </script>
            <?php
        }
    }else{
        $pro_id=$_POST['prod_id'];
        $ip=$_SERVER['REMOTE_ADDR'];
       
        $insert_into_cart=mysqli_query($con,"INSERT INTO cart(p_id,ip_add,user_id,qty) values('$pro_id','$ip','$user_id','1')");
    
        if($insert_into_cart){
            ?>
              <script>alert('Product Added to Cart');
            window.history(go(-1));
            </script>
            <?php
        }
    }
    //echo $_POST['prod_id'];
   

}else{

}


$select_cart_product = mysqli_query($con, "SELECT * FROM `cart` WHERE `user_id`='$user_id'");
?>


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
                                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">
                                    <?php
                                    $count = mysqli_num_rows($select_cart_product);
                                    echo $count;
                                    ?>
                                </span>
                            </a>
                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    <?php
                                    // fetch cart
                                    while ($row = mysqli_fetch_array($select_cart_product)) {
                                        //select product
                                        $pro_id1 = $row['p_id'];
                                        $select_pro2 = mysqli_query($con, "SELECT * FROM `products` WHERE id='$pro_id1'");
                                        if ($select_pro2) {
                                            while ($row1 = mysqli_fetch_array($select_pro2)) {
                                    ?>

                                                <li class="item">
                                                    <a class="product-image" href="#">
                                                        <img src="admin/productimages/<?php echo $row1[0] . "/" . $row1[9]  ?>" alt="<?php echo $row1[3] ?>" title="" />
                                                    </a>
                                                    <div class="product-details">
                                                        <a href="delete.php?id=<?php echo $row[0] ?>" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                                        <a href="update.php?id=<?php echo $row[0] ?>" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                                        <a class="pName" href="cart.php"><?php echo $row1[3]  ?></a>
                                                        <div class="variant-cart">Black / XL</div>
                                                        <div class="wrapQtyBtn">
                                                            <div class="qtyField">
                                                                <span class="label">Qty:</span>
                                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                                <input type="text" id="Quantity" name="quantity" value="<?php echo $row['qty'] ?>" class="product-form__input qty">
                                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="priceRow">
                                                            <div class="product-price">
                                                                <span class="money"><?php echo $row1['productPrice'] * $row['qty']   ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php
                                            }
                                            ?>


                                        <?php
                                        } else { ?>
                                            <li class="item">
                                                <a class="product-image" href="#">
                                                    <img src="admin/productimages/<?php echo $row1[0] . "/" . $row1[9]  ?>" alt="<?php echo $row1[3] ?>" title="" />
                                                </a>
                                                <div class="product-details">
                                                    <a href="" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                                    <a href="<?php echo $row1[0] ?>" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                                    <a class="pName" href="cart.php"><?php echo $row1[3]  ?></a>
                                                    <div class="variant-cart">Black / XL</div>
                                                    <div class="wrapQtyBtn">
                                                        <div class="qtyField">
                                                            <span class="label">Qty:</span>
                                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                            <input type="text" id="Quantity" name="quantity" value="<?php echo $row['qty'] ?>" class="product-form__input qty">
                                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="priceRow">
                                                        <div class="product-price">
                                                            <span class="money"><?php echo $row1['productPrice'] * $row['qty']   ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                    <?php  }
                                    }

                                    ?>
                                    <!-- 
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
                                    </li> -->
                                </ul>
                                <?php
                                if(mysqli_num_rows($select_cart_product)<=0){ ?>
                                    <div class="total">
                                   <p><b>No product in cart</b></p>
                                </div>
                               <?php }else{
                                   ?>
                                     <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                    </div>
                                    <div class="buttonSet text-center">
                                        <a href="cart.php" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="checkout.php" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>


<?php
                               }

                                ?>
                              
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