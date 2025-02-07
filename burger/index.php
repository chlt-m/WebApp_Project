<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <?php
    include 'session.php';
    include 'import.php'
    ?>
    <script src="pops.js"></script>
    <div class="container-fluid bg-success" id=container>
        <div class="row">
            <!-- Menu Side -->
            <div class="col-9 bg-body" id="content">
                <br>
                <div>
                    <a href="#" style="font-weight: bold;" onclick="setlangen()">EN</a>
                    <a href="#" style="font-weight: bold;"  onclick="setlangth()">TH</a>
                </div>
                <div class="slideshow" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="image/Banner.png" alt="">
                </div>
                <ul class="nav nav-underline justify-content-around bg-light">
                    <li class="nav-item active">
                        <a class="nav-link" onclick="changeCategory('features')" href="#" id="nav_features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="changeCategory('promotion')" href="#" id="nav_promotion">Promotion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="changeCategory('top-seller')" href="#" id="nav_topsell">Top Seller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="changeCategory('top-rated')" href="#" id="nav_toprate">Top Rated</a>
                        </lis>
                    <li class="nav-item">
                        <a class="nav-link" onclick="changeCategory('all')" href="#" id="nav_all">All</a>
                    </li>
                </ul>
                <div class="container" id="menu">
                    <div class="row row-cols-3">
                        <div class="col features" id="menu1">
                            <div style="width: 100%; height: 100%;">
                                <img src="image/Bacon Cheese Burger.jpg" alt="">
                                <div class="info">
                                    <div class="desc"> Bacon Cheese Burger </div>
                                    <div class="price">$55</div>
                                </div>
                                <form action="insert.php" method="post">
                                    <input type="hidden" name="options-bread" value="bun">
                                    <input type="hidden" name="options-meat" value="pork">
                                    <input type="hidden" name="options-topping[]" value="bacon">
                                    <input type="hidden" name="options-topping[]" value="cheese">
                                    <input type="hidden" name="options-vegetable[]" value="lettuce">
                                    <input type="hidden" name="options-vegetable[]" value="tomato">
                                    <input type="hidden" name="options-sauce[]" value="mustard">
                                    <input type="hidden" name="product-name" value="Bacon Cheese Burger">
                                    <input type="hidden" name="product-img" value="image/Bacon Cheese Burger.jpg">
                                    <button type="submit" name="submit" id="get">GET</button>
                                </form>
                            </div>
                        </div>
                        <div class="col features" id="menu2">
                            <div style="width: 100%; height: 100%;">
                                <img src="image/California burger.jpg" alt="">
                                <div class="info">
                                    <div class="desc">California Burger</div>
                                    <div class="price">$35</div>
                                </div>
                                <form action="insert.php" method="post">
                                    <input type="hidden" name="options-bread" value="bun">
                                    <input type="hidden" name="options-meat" value="pork">
                                    <input type="hidden" name="options-vegetable[]" value="lettuce">
                                    <input type="hidden" name="options-vegetable[]" value="sprouts">
                                    <input type="hidden" name="options-sauce[]" value="mayonnaise">
                                    <input type="hidden" name="product-name" value="California Burger">
                                    <input type="hidden" name="product-img" value="image/California burger.jpg">
                                    <button type="submit" name="submit" id="get2">GET</button>
                                </form>
                            </div>
                        </div>
                        <div class="col features top-seller" id="menu3">
                            <div style="width: 100%; height: 100%;">
                                <img src="image/Cheese Burger.jpg" alt="">
                                <div class="info">
                                    <div class="desc">Cheese Burger</div>
                                    <div class="price">$50</div>
                                </div>
                                <form action="insert.php" method="post">
                                    <input type="hidden" name="options-bread" value="bun">
                                    <input type="hidden" name="options-meat" value="pork">
                                    <input type="hidden" name="options-topping[]" value="cheese">
                                    <input type="hidden" name="options-vegetable[]" value="tomato">
                                    <input type="hidden" name="options-vegetable[]" value="onion">
                                    <input type="hidden" name="options-vegetable[]" value="pickle-cucumbers">
                                    <input type="hidden" name="options-sauce[]" value="mayonnaise">
                                    <input type="hidden" name="product-name" value="Cheese Burger">
                                    <input type="hidden" name="product-img" value="image/Cheese Burger.jpg">
                                    <button type="submit" name="submit" id="get3">GET</button>
                                </form>
                            </div>
                        </div>
                        <div class="col promotion" id="menu4">
                            <div style="width: 100%; height: 100%;">
                                <img src="image/Double Cheese Burger.jpeg" alt="">
                                <div class="info">
                                    <div class="desc">Double Cheese Burger</div>
                                    <div class="price">$55</div>
                                </div>
                                <form action="insert.php" method="post">
                                    <input type="hidden" name="options-bread" value="bun">
                                    <input type="hidden" name="options-meat" value="pork">
                                    <input type="hidden" name="options-topping[]" value="doublecheese">
                                    <input type="hidden" name="options-vegetable[]" value="lettuce">
                                    <input type="hidden" name="options-vegetable[]" value="tomato">
                                    <input type="hidden" name="options-vegetable[]" value="pickle-cucumbers">
                                    <input type="hidden" name="product-name" value="Double Cheese Burger">
                                    <input type="hidden" name="product-img" value="image/Double Cheese Burger.jpeg">
                                    <button type="submit" name="submit" id="get4">GET</button>
                                </form>
                            </div>
                        </div>
                        <div class="col promotion" id="menu5">
                            <div style="width: 100%; height: 100%;">
                                <img src="image/Kimchi burger.jpg" alt="">
                                <div class="info">
                                    <div class="desc">Kimchi Burger</div>
                                    <div class="price">$40</div>
                                </div>
                                <form action="insert.php" method="post">
                                    <input type="hidden" name="options-bread" value="bun">
                                    <input type="hidden" name="options-meat" value="pork">
                                    <input type="hidden" name="options-topping[]" value="kimchi">
                                    <input type="hidden" name="options-vegetable[]" value="lettuce">
                                    <input type="hidden" name="options-sauce[]" value="mayonnaise">
                                    <input type="hidden" name="product-name" value="Kimchi Burger">
                                    <input type="hidden" name="product-img" value="image/Kimchi burger.jpg">
                                    <button type="submit" name="submit" id="get5">GET</button>
                                </form>
                            </div>
                        </div>
                        <div class="col promotion top-rated" id="menu6">
                            <div style="width: 100%; height: 100%;">
                                <img src="image/Luther Burger.jpg" alt="">
                                <div class="info">
                                    <div class="desc">Luther Burger</div>
                                    <div class="price">$70</div>
                                </div>
                                <form action="insert.php" method="post">
                                    <input type="hidden" name="options-bread" value="donut">
                                    <input type="hidden" name="options-meat" value="beef">
                                    <input type="hidden" name="options-topping[]" value="bacon">
                                    <input type="hidden" name="options-vegetable[]" value="lettuce">
                                    <input type="hidden" name="options-vegetable[]" value="tomato">
                                    <input type="hidden" name="product-name" value="Luther Burger">
                                    <input type="hidden" name="product-img" value="image/Luther Burger.jpg">
                                    <button type="submit" name="submit" id="get6">GET</button>
                                </form>
                            </div>
                        </div>
                        <div class="col top-seller top-rated" id="menu7">
                            <div style="width: 100%; height: 100%;">
                                <img src="image/Salmon burger.jpg" alt="">
                                <div class="info">
                                    <div class="desc">Salmon Burger</div>
                                    <div class="price">$50</div>
                                </div>
                                <form action="insert.php" method="post">
                                    <input type="hidden" name="options-bread" value="bun">
                                    <input type="hidden" name="options-meat" value="salmon">
                                    <input type="hidden" name="options-vegetable[]" value="lettuce">
                                    <input type="hidden" name="options-vegetable[]" value="tomato">
                                    <input type="hidden" name="options-vegetable[]" value="sprouts">
                                    <input type="hidden" name="options-sauce[]" value="mayonnaise">
                                    <input type="hidden" name="product-name" value="Salmon Burger">
                                    <input type="hidden" name="product-img" value="image/Salmon burger.jpg">
                                    <button type="submit" name="submit" id="get7">GET</button>
                                </form>
                            </div>
                        </div>
                        <div class="col top-seller top-rated" id="menu8">
                            <div style="width: 100%; height: 100%;">
                                <img src="image/Veggie burger.jpg" alt="">
                                <div class="info">
                                    <div class="desc">Veggie Burger</div>
                                    <div class="price">$50</div>
                                </div>
                                <form action="insert.php" method="post">
                                    <input type="hidden" name="options-bread" value="bun">
                                    <input type="hidden" name="options-meat" value="plant-base">
                                    <input type="hidden" name="options-vegetable[]" value="lettuce">
                                    <input type="hidden" name="options-vegetable[]" value="tomato">
                                    <input type="hidden" name="options-vegetable[]" value="onion">
                                    <input type="hidden" name="options-vegetable[]" value="sprouts">
                                    <input type="hidden" name="product-name" value="Veggie Burger">
                                    <input type="hidden" name="product-img" value="image/Veggie burger.jpg">
                                    <button type="submit" name="submit" id="get8">GET</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Order Side -->
            <div class="col-3 bg-light" id="orders">
                <h3 class="my_order_lang">My Orders</h3>
                <div class="container" id="list-order">
                    <?php
                    if (count($_SESSION['options-bread']) != 0) {
                        for ($i = 0; $i < count($_SESSION['price']); $i++) {
                    ?>
                            <div id="order-1">

                                <img src="<?php echo $_SESSION['product-img'][$i] ?>" alt="" class="img-order">

                                <div id="block-for-text">

                                    <div class="container" id="text-order">
                                        <?php echo $_SESSION['product-name'][$i] ?><br>
                                        $ <?php echo $_SESSION['price'][$i] ?>
                                    </div>
                                    <div id="del-order">
                                        <form action="insert.php" method="post">
                                            <input type="hidden" name="index" value="<?php echo $i ?>">
                                            <button id="del-but" name="del"
                                            class="del-btn">delete</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="clr-bt">
                    <form action="insert.php" method="post">
                        <button id="clear" name="clear">clear</button>
                    </form>
                </div>

                <div class="line"></div>
                <div class="container" id="list-order2">
                    <span class="order_price_lang">order price</span>
                    <?php if (count($_SESSION['options-bread']) != 0) {
                        for ($i = 0; $i < count($_SESSION['price']); $i++) {
                    ?>
                            <?php echo $_SESSION['price'][$i] ?>
                            <?php if ($i + 1 != count($_SESSION['options-bread'])) { ?>
                                <?php echo " + " ?>
                    <?php }
                        }
                    } ?>
                    <br>
                    <span class="discount_lang">discount</span>
                    <?php
                    $dc = 1;
                    if (array_sum($_SESSION['price']) >= 500) {
                        echo " 20%";
                        $dc = 0.8;
                    } elseif (array_sum($_SESSION['price']) >= 200) {
                        echo " 15%";
                        $dc = 0.85;
                    } elseif (array_sum($_SESSION['price']) >= 100) {
                        echo " 10%";
                        $dc = 0.9;
                    }
                    ?>
                    <hr>
                    <h4><span id="total_lang">Total</span> $<?php echo array_sum($_SESSION['price']) * $dc ?></h4>
                    <table>
                        <tr>
                            <td  class="order_price_lang">order price</td>
                            <td class="discount_price_lang">discount</td>
                        </tr>
                        <tr>
                            <td>
                                <?php if (array_sum($_SESSION['price']) > 0) {
                                    echo array_sum($_SESSION['price']);
                                }; ?>
                            </td>
                            <td>
                                <?php
                                echo array_sum($_SESSION['price']) - (array_sum($_SESSION['price']) * $dc);
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="line"></div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" id="openPop">Check Out</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Beef, Pork -->
    <form action="insert.php" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Make Your Own Burger</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6 class="bread_lang">Bread</h6>
                        <div class="form-radio" id="bread">
                            <?php
                            if (count($_SESSION['name']) != 0) {
                                for ($i = 0; $i < count($_SESSION['name']); $i++) {
                                    if ($_SESSION['type'][$i] == 'bread') {
                                        if ($_SESSION['stock'][$i] > 0) { ?>
                                            <input type="radio" class="btn-check" name="options-bread" id="<?php echo $_SESSION['name'][$i] ?>" autocomplete="off" value="<?php echo $_SESSION['name'][$i] ?>">
                                            <label class="btn" for="<?php echo $_SESSION['name'][$i] ?>"><img src="<?php echo $_SESSION['img'][$i] ?>" alt="">
                                                <p><?php echo $_SESSION['name'][$i] ?></p>
                                            </label>
                                        <?php } else { ?>
                                            <input type="radio" class="btn-check" name="options-bread" id="<?php echo $_SESSION['name'][$i] ?>" autocomplete="off" value="<?php echo $_SESSION['name'][$i] ?>" disabled>
                                            <label class="btn" for="<?php echo $_SESSION['name'][$i] ?>"><img src="<?php echo $_SESSION['img'][$i] ?>" alt="">
                                                <p><?php echo $_SESSION['name'][$i] ?></p>
                                            </label>
                                        <?php }
                                        ?>

                            <?php }
                                }
                            }
                            ?>
                        </div>

                        <h6 class="meat_lang">Meat</h6>
                        <div class="form-radio" id="meat">
                            <?php
                            if (count($_SESSION['name']) != 0) {
                                for ($i = 0; $i < count($_SESSION['name']); $i++) {
                                    if ($_SESSION['type'][$i] == 'meat') {
                                        if ($_SESSION['stock'][$i] > 0) { ?>

                                            <input type="radio" class="btn-check" name="options-meat" id="<?php echo $_SESSION['name'][$i] ?>" autocomplete="off" value="<?php echo $_SESSION['name'][$i] ?>">
                                            <label class="btn" for="<?php echo $_SESSION['name'][$i] ?>"><img src="<?php echo $_SESSION['img'][$i] ?>" alt="">
                                                <p><?php echo $_SESSION['name'][$i] ?></p>
                                            </label>

                                        <?php } else { ?>

                                            <input type="radio" class="btn-check" name="options-meat" id="<?php echo $_SESSION['name'][$i] ?>" autocomplete="off" value="<?php echo $_SESSION['name'][$i] ?>" disabled>
                                            <label class="btn" for="<?php echo $_SESSION['name'][$i] ?>"><img src="<?php echo $_SESSION['img'][$i] ?>" alt="">
                                                <p><?php echo $_SESSION['name'][$i] ?></p>
                                            </label>

                                        <?php }
                                        ?>

                            <?php }
                                }
                            }
                            ?>
                        </div>

                        <h6 class="topping_lang">Topping</h6>
                        <div class="form-checkbox" id="topping">
                            <?php
                            if (count($_SESSION['name']) != 0) {
                                for ($i = 0; $i < count($_SESSION['name']); $i++) {
                                    if ($_SESSION['type'][$i] == 'topping') {
                                        if ($_SESSION['stock'][$i] > 0) { ?>

                                            <input type="checkbox" class="btn-check" name="options-topping[]" id="<?php echo $_SESSION['name'][$i] ?>" autocomplete="off" value="<?php echo $_SESSION['name'][$i] ?>">
                                            <label class="btn" for="<?php echo $_SESSION['name'][$i] ?>"><img src="<?php echo $_SESSION['img'][$i] ?>" alt="">
                                                <p><?php echo $_SESSION['name'][$i] ?></p>
                                            </label>
                                        <?php } else { ?>

                                            <input type="checkbox" class="btn-check" name="options-topping[]" id="<?php echo $_SESSION['name'][$i] ?>" autocomplete="off" value="<?php echo $_SESSION['name'][$i] ?>" disabled>
                                            <label class="btn" for="<?php echo $_SESSION['name'][$i] ?>"><img src="<?php echo $_SESSION['img'][$i] ?>" alt="">
                                                <p><?php echo $_SESSION['name'][$i] ?></p>
                                            </label>

                                        <?php }
                                        ?>

                            <?php }
                                }
                            }
                            ?>
                        </div>

                        <h6 class="veg_lang">Vegetable</h6>
                        <div class="form-checkbox" id="vegetable">
                            <?php
                            if (count($_SESSION['name']) != 0) {
                                for ($i = 0; $i < count($_SESSION['name']); $i++) {
                                    if ($_SESSION['type'][$i] == 'vegetable') {
                                        if ($_SESSION['stock'][$i] > 0) { ?>

                                            <input type="checkbox" class="btn-check" name="options-vegetable[]" id="<?php echo $_SESSION['name'][$i] ?>" autocomplete="off" value="<?php echo $_SESSION['name'][$i] ?>">
                                            <label class="btn" for="<?php echo $_SESSION['name'][$i] ?>"><img src="<?php echo $_SESSION['img'][$i] ?>" alt="">
                                                <p><?php echo $_SESSION['name'][$i] ?></p>
                                            </label>
                                        <?php } else { ?>

                                            <input type="checkbox" class="btn-check" name="options-vegetable[]" id="<?php echo $_SESSION['name'][$i] ?>" autocomplete="off" value="<?php echo $_SESSION['name'][$i] ?>" disabled>
                                            <label class="btn" for="<?php echo $_SESSION['name'][$i] ?>"><img src="<?php echo $_SESSION['img'][$i] ?>" alt="">
                                                <p><?php echo $_SESSION['name'][$i] ?></p>
                                            </label>

                                        <?php }
                                        ?>

                            <?php }
                                }
                            }
                            ?>
                        </div>

                        <h6 class="sauce_lang">Sauce</h6>
                        <div class="form-ratio" id="sauce">
                            <?php
                            if (count($_SESSION['name']) != 0) {
                                for ($i = 0; $i < count($_SESSION['name']); $i++) {
                                    if ($_SESSION['type'][$i] == 'sauce') {
                                        if ($_SESSION['stock'][$i] > 0) { ?>
                                            <input type="checkbox" class="btn-check" name="options-sauce[]" id="<?php echo $_SESSION['name'][$i] ?>" autocomplete="off" value="<?php echo $_SESSION['name'][$i] ?>">
                                            <label class="btn" for="<?php echo $_SESSION['name'][$i] ?>"><img src="<?php echo $_SESSION['img'][$i] ?>" alt="">
                                                <p><?php echo $_SESSION['name'][$i] ?></p>
                                            </label>
                                        <?php } else { ?>
                                            <input type="checkbox" class="btn-check" name="options-sauce[]" id="<?php echo $_SESSION['name'][$i] ?>" autocomplete="off" value="<?php echo $_SESSION['name'][$i] ?>" disabled>
                                            <label class="btn" for="<?php echo $_SESSION['name'][$i] ?>"><img src="<?php echo $_SESSION['img'][$i] ?>" alt="">
                                                <p><?php echo $_SESSION['name'][$i] ?></p>
                                            </label>
                                        <?php }
                                        ?>

                            <?php }
                                }
                            }
                            ?>
                            <!-- <input type="checkbox" class="btn-check" name="options-sauce[]" id="ketchup" autocomplete="off" value="ketchup">
                        <label class="btn" for="ketchup"><img src="image/ketchup.jpg" alt=""><p>Ketchup</p></label>
                        <input type="checkbox" class="btn-check" name="options-sauce[]" id="mustard" autocomplete="off" value="mustard">
                        <label class="btn" for="mustard"><img src="image/mustard.avif" alt=""><p>Mustard</p></label>
                        <input type="checkbox" class="btn-check" name="options-sauce[]" id="mayonnaise" autocomplete="off" value="mayonnaise">
                        <label class="btn" for="mayonnaise"><img src="image/mayonnaise.jpg" alt=""><p>Mayonnaise</p></label> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="product-name" value="Custom Burger">
                        <input type="hidden" name="product-img" value="image/custom-burger.png">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="clos_btn" >Close</button>
                        <button type="submit" name="submit" id="order" onclick="" class="btn btn-primary" >GET</button>
                    </div>
                </div>
            </div>
    </form>
    </div>

    <div class="pop" id="pop">
        <div class="popCon">
            <div id="sub-order">
                <?php
                if (count($_SESSION['options-bread']) != 0) {
                    for ($i = 0; $i < count($_SESSION['price']); $i++) {
                ?>

                        <div class="order-sub">
                            <img src="<?php echo $_SESSION['product-img'][$i] ?>" alt="" class="img-sub">

                            <table id="tbs">
                                <tr>
                                    <th class="name_prod_lang">Name</th>
                                    <th class="bread_lang">Bread</th>
                                    <th class="meat_lang">Meat</th>
                                    <th class="veg_lang">Vegetable</th>
                                    <th class="topping_lang">Topping</th>
                                    <th class="sauce_lang">Sauce</th>
                                    <th class="order_price_lang">Price</th>
                                </tr>
                                <tr>
                                    <td><?php echo $_SESSION['product-name'][$i] ?></td>
                                    <td><?php echo $_SESSION['options-bread'][$i] ?></td>
                                    <td><?php echo $_SESSION['options-meat'][$i] ?></td>

                                    <td>
                                        <?php
                                        if ($_SESSION['options-vegetable'][$i] == "") {
                                            echo "-";
                                        } else {
                                            echo $_SESSION['options-vegetable'][$i];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($_SESSION['options-topping'][$i] == "") {
                                            echo "-";
                                        } else {
                                            echo $_SESSION['options-topping'][$i];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($_SESSION['options-sauce'][$i] == "") {
                                            echo "-";
                                        } else {
                                            echo $_SESSION['options-sauce'][$i];
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $_SESSION['price'][$i] ?></td>
                                </tr>
                            </table>

                        </div>
                        <br>
                        <hr>
                <?php
                    }
                }
                ?>
            </div>
            <div id="total-sub">
                <div id="sum-sub">
                    <h5 class="order_price_lang">order price :</h5>
                    <?php if (count($_SESSION['options-bread']) != 0) {
                        for ($i = 0; $i < count($_SESSION['price']); $i++) {
                    ?>
                            <?php echo $_SESSION['price'][$i] ?>
                            <?php if ($i + 1 != count($_SESSION['options-bread'])) { ?>
                                <?php echo " + " ?>
                    <?php }
                        }
                    } ?>
                    <br>
                    <h5><span class="all_order_price_lang">all order price</span> : <?php if (array_sum($_SESSION['price']) > 0) {
                                                echo array_sum($_SESSION['price']);
                                            }; ?></h5> <br>
                    <h5 class="discount_lang">discount</h5>
                    <?php
                    $dc = 1;
                    if (array_sum($_SESSION['price']) >= 500) {
                        echo " 20%";
                        $dc = 0.8;
                    } elseif (array_sum($_SESSION['price']) >= 200) {
                        echo " 15%";
                        $dc = 0.85;
                    } elseif (array_sum($_SESSION['price']) >= 100) {
                        echo " 10%";
                        $dc = 0.9;
                    }
                    ?>
                    <br>
                    <h5 class="discount_price_lang">discount price :</h5> <?php
                                                if ($dc < 1)
                                                    echo array_sum($_SESSION['price']) - (array_sum($_SESSION['price']) * $dc);
                                                ?>
                    <br>
                    <h5 class="total_lang2">total :</h5> <?php if ($dc < 1) {
                                            echo array_sum($_SESSION['price']);
                                        }; ?> <?php
                                                if ($dc < 1) {
                                                    echo "- ";
                                                    echo array_sum($_SESSION['price']) - (array_sum($_SESSION['price']) * $dc);
                                                    echo " =";
                                                }
                                                ?> <?php echo array_sum($_SESSION['price']) * $dc ?>

                </div>
                <div id="tt-sub">
                    <h2 id="totalprice"><span class="total_lang2">Total</span> $<?php echo array_sum($_SESSION['price']) * $dc ?></h2>
                </div>
            </div>
            <div id="bt-total">
                <form action="insertdb.php" method="post">
                    <input type="hidden" name="check" value=" <?php echo array_sum($_SESSION['price']) ?> ">
                    <button type="submit" name="confirm" class="con" id="con">CONFIRM</button>
                </form>
                <button class="can" id="can">cancel</button>
            </div>
        </div>
    </div>


    <script src="lang.js"></script>
</body>

</html>