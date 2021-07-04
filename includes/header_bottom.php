<div class="header-bottom biolife-sticky-object">
    <div class="container md-possition-relative">
        <div class="row">
            <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
                <?php include_once('vertical_menu.php'); ?>

            </div>
            <div class="col-lg-6 col-md-6 hidden-sm hidden-xs md-possition-initial">
                <div class="primary-menu">
                    <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
                    <li class="menu-item"><a href="">Home</a></li>

<?php 
foreach($ctgDatas as $ctgData){
?>
                        
                        <li class="menu-item"><a href=""><?php echo $ctgData['ctg_name'];?></a></li>


                        <!-- <li class="menu-item menu-item-has-children has-megamenu">
                            <a href="" class="menu-name" data-title="Shop">Shop</a>
                            <div class="wrap-megamenu lg-width-900 md-full-width">
                                <div class="mega-content">
                                    <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                        <div class="wrap-custom-menu vertical-menu">
                                            <h4 class="menu-title">Fresh Berries</h4>
                                            <ul class="menu">
                                                <li><a href="#">Fruit & Nut Gifts</a></li>
                                                <li><a href="#">Mixed Fruits</a></li>
                                                <li><a href="#">Oranges</a></li>
                                                <li><a href="#">Bananas & Plantains</a></li>
                                                <li><a href="#">Fresh Gala Apples</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                        <div class="wrap-custom-menu vertical-menu">
                                            <h4 class="menu-title">Vegetables</h4>
                                            <ul class="menu">
                                                <li><a href="#">Berries</a></li>
                                                <li><a href="#">Pears</a></li>
                                                <li><a href="#">Chili Peppers</a></li>
                                                <li><a href="#">Fresh Avocado</a></li>
                                                <li><a href="#">Grapes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                        <div class="wrap-custom-menu vertical-menu ">
                                            <h4 class="menu-title">Fresh Fruits</h4>
                                            <ul class="menu">
                                                <li><a href="#">Basket of apples</a></li>
                                                <li><a href="#">Strawberry</a></li>
                                                <li><a href="#">Blueberry</a></li>
                                                <li><a href="#">Orange</a></li>
                                                <li><a href="#">Pineapple</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                        <div class="wrap-custom-menu vertical-menu">
                                            <h4 class="menu-title">Featured Products</h4>
                                            <ul class="menu">
                                                <li><a href="#">Coffee Creamers</a></li>
                                                <li><a href="#">Mayonnaise</a></li>
                                                <li><a href="#">Almond Milk</a></li>
                                                <li><a href="#">Fruit Jam</a></li>
                                                <li><a href="#">Beverages</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> 
                    


                        <li class="menu-item menu-item-has-children has-child">
                            <a href="#" class="menu-name" data-title="Product"></a>
                            
                        </li>
                      
                      
                      <li class="menu-item menu-item-has-children has-megamenu">
                            <a href="#" class="menu-name" data-title="Blog">Blog</a>
                            <div class="wrap-megamenu lg-width-800 md-full-width">
                                <div class="mega-content">
                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                        <div class="wrap-custom-menu vertical-menu">
                                            <h4 class="menu-title">Blog Categories</h4>
                                            <ul class="menu">
                                                <li><a href="#">Beauty (30)</a></li>
                                                <li><a href="#">Fashion (50)</a></li>
                                                <li><a href="#">Food (10)</a></li>
                                                <li><a href="#">Life Style (60)</a></li>
                                                <li><a href="#">Travel (10)</a></li>
                                                <li><a href="#">Nutrition (35)</a></li>
                                                <li><a href="#">Food Decoration (45)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                        <div class="wrap-custom-menu vertical-menu">
                                            <h4 class="menu-title">Featured Posts</h4>
                                            <ul class="menu">
                                                <li><a href="#">Post example<sup>#1</sup></a></li>
                                                <li><a href="#">Post example<sup>#2</sup></a></li>
                                                <li><a href="#">Post example<sup>#3</sup></a></li>
                                                <li><a href="#">Post example<sup>#4</sup></a></li>
                                                <li><a href="#">Post example<sup>#5</sup></a></li>
                                                <li><a href="#">Post example<sup>#6</sup></a></li>
                                                <li><a href="#">Post example<sup>#7</sup></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-xs-12 md-margin-top-0 xs-margin-top-25px">
                                        <div class="block-posts">
                                            <h4 class="menu-title">Recent Posts</h4>
                                            <ul class="posts">
                                                <li>
                                                    <div class="block-post-item">
                                                        <div class="thumb"><a href="#"><img src="assets/images/megamenu/thumb-05.jpg" width="100" height="73" alt=""></a></div>
                                                        <div class="left-info">
                                                            <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                                            <span class="p-date">Jan 05, 2019</span>
                                                            <span class="p-comment">2 Comments</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-post-item">
                                                        <div class="thumb"><a href="#"><img src="assets/images/megamenu/thumb-06.jpg" width="100" height="73" alt=""></a></div>
                                                        <div class="left-info">
                                                            <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                                            <span class="p-date">May 15, 2019</span>
                                                            <span class="p-comment">8 Comments</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-post-item">
                                                        <div class="thumb"><a href="#"><img src="assets/images/megamenu/thumb-07.jpg" width="100" height="73" alt=""></a></div>
                                                        <div class="left-info">
                                                            <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                                            <span class="p-date">Apr 26, 2019</span>
                                                            <span class="p-comment">10 Comments</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>  -->

<?php } ?>

                        <li class="menu-item"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
                <div class="logo-for-mobile hidden-lg hidden-md">
                    <a href="index.php" class="biolife-logo"><img src="assets/images/logo-biolife-1.png" alt="biolife logo" width="135" height="36"></a>
                </div>
                <div class="biolife-cart-info center-align-mobile">
                    <div class="mobile-search">
                        <a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
                        <div class="mobile-search-content">
                            <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                <a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
                                <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                                <select name="category">
                                    <option value="-1" selected>All Categories</option>
                                    <option value="vegetables">Vegetables</option>
                                    <option value="fresh_berries">Fresh Berries</option>
                                    <option value="ocean_foods">Ocean Foods</option>
                                    <option value="butter_eggs">Butter & Eggs</option>
                                    <option value="fastfood">Fastfood</option>
                                    <option value="fresh_meat">Fresh Meat</option>
                                    <option value="fresh_onion">Fresh Onion</option>
                                    <option value="papaya_crisps">Papaya & Crisps</option>
                                    <option value="oatmeal">Oatmeal</option>
                                </select>
                                <button type="submit" class="btn-submit">go</button>
                            </form>
                        </div>
                    </div>
                    <div class="minicart-block layout-02">
                        <div class="minicart-contain">
                            <div class="icon-contain">
                                <div class="span-index">
                                    <i class="icon-cart-mini biolife-icon"></i>
                                    <span class="qty">8</span>
                                    <span class="sub-total">0 items - $0.00</span>
                                </div>
                                <a href="#" class="btn-to-cart">Go</a>
                            </div>
                            <div class="cart-content">
                                <div class="cart-inner">
                                    <ul class="products">
                                        <li>
                                            <div class="minicart-item">
                                                <div class="thumb">
                                                    <a href="#"><img src="assets/images/minicart/pr-01.jpg" width="90" height="90" alt="National Fresh"></a>
                                                </div>
                                                <div class="left-info">
                                                    <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                    <div class="price">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                    <div class="qty">
                                                        <label for="cart[id123][qty]">Qty:</label>
                                                        <input type="number" class="input-qty" name="cart[id123][qty]" id="cart[id123][qty]" value="1" disabled>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="minicart-item">
                                                <div class="thumb">
                                                    <a href="#"><img src="assets/images/minicart/pr-02.jpg" width="90" height="90" alt="National Fresh"></a>
                                                </div>
                                                <div class="left-info">
                                                    <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                    <div class="price">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                    <div class="qty">
                                                        <label for="cart[id124][qty]">Qty:</label>
                                                        <input type="number" class="input-qty" name="cart[id124][qty]" id="cart[id124][qty]" value="1" disabled>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="minicart-item">
                                                <div class="thumb">
                                                    <a href="#"><img src="assets/images/minicart/pr-03.jpg" width="90" height="90" alt="National Fresh"></a>
                                                </div>
                                                <div class="left-info">
                                                    <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                    <div class="price">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                    <div class="qty">
                                                        <label for="cart[id125][qty]">Qty:</label>
                                                        <input type="number" class="input-qty" name="cart[id125][qty]" id="cart[id125][qty]" value="1" disabled>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="minicart-item">
                                                <div class="thumb">
                                                    <a href="#"><img src="assets/images/minicart/pr-04.jpg" width="90" height="90" alt="National Fresh"></a>
                                                </div>
                                                <div class="left-info">
                                                    <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                    <div class="price">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                    <div class="qty">
                                                        <label for="cart[id126][qty]">Qty:</label>
                                                        <input type="number" class="input-qty" name="cart[id126][qty]" id="cart[id126][qty]" value="1" disabled>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="minicart-item">
                                                <div class="thumb">
                                                    <a href="#"><img src="assets/images/minicart/pr-05.jpg" width="90" height="90" alt="National Fresh"></a>
                                                </div>
                                                <div class="left-info">
                                                    <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                    <div class="price">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                    <div class="qty">
                                                        <label for="cart[id127][qty]">Qty:</label>
                                                        <input type="number" class="input-qty" name="cart[id127][qty]" id="cart[id127][qty]" value="1" disabled>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="btn-control">
                                        <a href="#" class="btn view-cart">view cart</a>
                                        <a href="#" class="btn">checkout</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-toggle">
                        <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>