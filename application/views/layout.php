<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Sạch Sành Xanh - Chuyên Đồ Ăn Vặt Xanh</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/dropzone.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/slick.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/slick-theme.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/tiny-slider.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/nouislider.min.css') ?>">

  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>

  <!-- Datatable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


  <!-- Required meta tags -->

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta content="Codescandy" name="author">

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/favicon/favicon.ico') ?>">

  <!-- Libs CSS -->

  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-icons.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/feather-icons.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/simplebar.min.css') ?>">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/theme.min.css') ?>">


  <style></style>
  <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
</head>

<body>

  <div class="border-bottom ">
    <div class="py-4 pt-lg-3 pb-lg-0">
      <div class="container">
        <div class="row w-100 align-items-center gx-lg-2 gx-0">
          <div class="col-xxl-3 col-lg-3">
            <a class="navbar-brand d-none d-lg-block fs-3 fw-bolder text-dark" href="<?= base_url() ?>">
              <img src="<?= base_url('assets/images/shopping-cart.png') ?>" alt="eCommerce HTML Template" style="height: 50px; object-fit: cover;">
              Fresh Snack
            </a>
            <div class="d-flex justify-content-between w-100 d-lg-none fs-3 fw-bolder text-dark">
              <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/images/logo_snack.png') ?>" alt="eCommerce HTML Template">
                SS Xanh
              </a>
              <div class="d-flex align-items-center lh-1">
                <div class="list-inline me-4">
                  <div class="list-inline-item">
                    <a href="https://freshcart.codescandy.com/index.html#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                    </a>
                  </div>
                  <div class="list-inline-item">

                    <a class="text-muted position-relative " data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" href="https://freshcart.codescandy.com/index.html#offcanvasExample" role="button" aria-controls="offcanvasRight">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                      </svg>
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                        1
                        <span class="visually-hidden">unread messages</span>
                      </span>
                    </a>
                  </div>

                </div>
                <!-- Button -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-text-indent-left text-primary" viewBox="0 0 16 16">
                    <path d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z">
                    </path>
                  </svg>
                </button>

              </div>
            </div>

          </div>
          <div class="col-xxl-5 col-lg-6 d-none d-lg-block">

            <form action="#">
              <div class="input-group ">
                <input class="form-control rounded" type="search" placeholder="Tìm kiếm sản phẩm...">
                <span class="input-group-append">
                  <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                      <circle cx="11" cy="11" r="8"></circle>
                      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                  </button>
                </span>
              </div>

            </form>
          </div>
          <div class="col-md-3 col-xxl-2 text-end d-lg-block">

            <div class="list-inline">
              <div class="list-inline-item">
                <button data-bs-toggle="modal" data-bs-target="#exampleModal-2" class="btn btn-outline-gray-400 text-reset position-relative">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg> Tìm đơn
                </button>
              </div>
              <div class="list-inline-item">

                <a id="number-cart-a-id" class="btn btn-outline-gray-400 text-reset position-relative" data-bs-toggle="offcanvas" <?= count($cart) != 0 ? 'data-bs-target="#offcanvasRight"' : '' ?> href="#" role="button" aria-controls="offcanvasRight">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                  </svg> Giỏ hàng
                  <?php if (count($cart) != 0) { ?>
                    <span id="number-cart-span-id" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                      <?= count($cart) ?>
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  <?php } ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 py-lg-4">
      <div class="container px-0 px-md-3">
        <div class="dropdown me-3 d-none d-lg-block">
          <button class="btn btn-primary px-6 " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="me-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg></span> DANH MỤC SẢN PHẨM
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a href="<?= base_url('collections') ?>" class="dropdown-item d-flex justify-content-between mb-1 py-1">
                <div>
                  <svg fill="#FD7E14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="20" height="20">
                    <path d="M 13 4 C 8.038 4 4 8.037 4 13 L 4 37 C 4 41.963 8.038 46 13 46 L 37 46 C 41.962 46 46 41.963 46 37 L 46 13 C 46 8.037 41.962 4 37 4 L 13 4 z M 13 11 C 15.206 11 17 12.794 17 15 C 17 17.206 15.206 19 13 19 C 10.794 19 9 17.206 9 15 C 9 12.794 10.794 11 13 11 z M 13 12 C 11.346 12 10 13.346 10 15 C 10 16.654 11.346 18 13 18 C 14.654 18 16 16.654 16 15 C 16 13.346 14.654 12 13 12 z M 13 13 C 14.105 13 15 13.895 15 15 C 15 16.105 14.105 17 13 17 C 11.895 17 11 16.105 11 15 C 11 13.895 11.895 13 13 13 z M 21 14 L 39 14 C 39.553 14 40 14.447 40 15 C 40 15.553 39.553 16 39 16 L 21 16 C 20.447 16 20 15.553 20 15 C 20 14.447 20.447 14 21 14 z M 13 21 C 15.206 21 17 22.794 17 25 C 17 27.206 15.206 29 13 29 C 10.794 29 9 27.206 9 25 C 9 22.794 10.794 21 13 21 z M 13 22 C 11.346 22 10 23.346 10 25 C 10 26.654 11.346 28 13 28 C 14.654 28 16 26.654 16 25 C 16 23.346 14.654 22 13 22 z M 13 23 C 14.105 23 15 23.895 15 25 C 15 26.105 14.105 27 13 27 C 11.895 27 11 26.105 11 25 C 11 23.895 11.895 23 13 23 z M 21 24 L 39 24 C 39.553 24 40 24.447 40 25 C 40 25.553 39.553 26 39 26 L 21 26 C 20.447 26 20 25.553 20 25 C 20 24.447 20.447 24 21 24 z M 13 31 C 15.206 31 17 32.794 17 35 C 17 37.206 15.206 39 13 39 C 10.794 39 9 37.206 9 35 C 9 32.794 10.794 31 13 31 z M 13 32 C 11.346 32 10 33.346 10 35 C 10 36.654 11.346 38 13 38 C 14.654 38 16 36.654 16 35 C 16 33.346 14.654 32 13 32 z M 13 33 C 14.105 33 15 33.895 15 35 C 15 36.105 14.105 37 13 37 C 11.895 37 11 36.105 11 35 C 11 33.895 11.895 33 13 33 z M 21 34 L 39 34 C 39.553 34 40 34.447 40 35 C 40 35.553 39.553 36 39 36 L 21 36 C 20.447 36 20 35.553 20 35 C 20 34.447 20.447 34 21 34 z" />
                  </svg>
                  <span class="ms-1">Tất cả sản phẩm</span>
                </div>
              </a>
            </li>
            <?php foreach ($category as $row) { ?>
              <li><a href="<?= base_url('collections/' . $row->id) ?>" class="dropdown-item d-flex justify-content-between mb-1 py-1">
                  <div>
                    <?= $row->icon ?>
                    <span class="ms-1"><?= $row->name ?></span>
                  </div>
                </a>
              </li>
            <?php } ?>
          </ul>
        </div>
        <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">
          <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none fs-3 fw-bolder">
            <a class="text-dark" href="<?= base_url() ?>"><img src="<?= base_url('assets/images/logo_snack.png') ?>" alt="eCommerce HTML Template">
              SS Xanh
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="d-block d-lg-none my-4">
            <form action="https://freshcart.codescandy.com/index.html#">
              <div class="input-group ">
                <input class="form-control rounded" type="search" placeholder="Search for products">
                <span class="input-group-append">
                  <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                      <circle cx="11" cy="11" r="8"></circle>
                      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                  </button>
                </span>
              </div>
            </form>
            <div class="mt-2">
              <button type="button" class="btn  btn-outline-gray-400 text-muted w-100 " data-bs-toggle="modal" data-bs-target="#locationModal">
                <i class="feather-icon icon-map-pin me-2"></i>Pick Location
              </button>
            </div>
          </div>
          <div class="d-block d-lg-none mb-4">
            <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center" data-bs-toggle="collapse" href="https://freshcart.codescandy.com/index.html#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                  <rect x="3" y="3" width="7" height="7"></rect>
                  <rect x="14" y="3" width="7" height="7"></rect>
                  <rect x="14" y="14" width="7" height="7"></rect>
                  <rect x="3" y="14" width="7" height="7"></rect>
                </svg></span> All Departments
            </a>
            <div class="collapse mt-2" id="collapseExample">
              <div class="card card-body">
                <ul class="mb-0 list-unstyled">
                  <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Dairy, Bread
                      &amp; Eggs</a></li>
                  <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Snacks &amp;
                      Munchies</a></li>
                  <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Fruits &amp;
                      Vegetables</a></li>
                  <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Cold Drinks
                      &amp; Juices</a></li>
                  <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Breakfast
                      &amp; Instant Food</a></li>
                  <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Bakery &amp;
                      Biscuits</a></li>
                  <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Chicken,
                      Meat &amp; Fish</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="d-none d-lg-block d-lg-none">
            <ul class="navbar-nav align-items-center justify-content-end gap-2">
              <li class="nav-item">
                <a class="nav-link fw-bold" href="#">VỀ CHÚNG TÔI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold" href="#">LIÊN HỆ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold" href="#">CẨM NANG</a>
              </li>
            </ul>
          </div>
          <div class="d-block d-lg-none h-100" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
              <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
              </div>
              <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                  <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
                    <div class="simplebar-content" style="padding: 0px;">
                      <ul class="navbar-nav ">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="https://freshcart.codescandy.com/index.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Home
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/index.html">Home 1</a>
                            </li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/index-2.html">Home
                                2</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/index-3.html">Home
                                3</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/index-4.html">Home
                                4 <span class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                          </ul>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="https://freshcart.codescandy.com/index.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Shop Grid - Filter</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid-3-column.html">Shop Grid - 3
                                column</a>
                            </li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-list.html">Shop List - Filter</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-filter.html">Shop - Filter</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-fullwidth.html">Shop Wide</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-single.html">Shop Single</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-single-2.html">Shop Single v2<span class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-wishlist.html">Shop Wishlist</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-cart.html">Shop Cart</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-checkout.html">Shop Checkout</a></li>
                          </ul>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="https://freshcart.codescandy.com/index.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Stores
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/store-list.html">Store List</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/store-grid.html">Store Grid</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/store-single.html">Store Single</a></li>
                          </ul>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="https://freshcart.codescandy.com/index.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mega Menu
                          </a>
                          <ul class="dropdown-menu">
                            <li class="dropdown-submenu ">
                              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="https://freshcart.codescandy.com/index.html#">
                                Dairy, Bread &amp; Eggs
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Milk Drinks</a></li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Curd &amp; Yogurt</a>
                                </li>
                                <li> <a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Eggs</a></li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Buns &amp; Bakery</a>
                                </li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Cheese</a></li>
                                <li> <a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Condensed Milk</a></li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Dairy Products</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu ">
                              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="https://freshcart.codescandy.com/index.html#">
                                Vegetables &amp; Fruits
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Vegetables</a></li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Fruits</a></li>
                                <li> <a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Exotics &amp;
                                    Premium</a></li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Fresh Sprouts</a></li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Frozen Veg</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu ">
                              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="https://freshcart.codescandy.com/index.html#">
                                Cold Drinks &amp; Juices
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Soft Drinks</a></li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Fruit Juices</a></li>
                                <li> <a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Coldpress</a></li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Soda &amp; Mixers</a>
                                </li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Milk Drinks</a></li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Health Drinks</a></li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/shop-grid.html">Herbal Drinks</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="https://freshcart.codescandy.com/index.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/blog.html">Blog</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/blog-single.html">Blog Single</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/blog-category.html">Blog Category</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/about.html">About
                                us</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/404error.html">404
                                Error</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/contact.html">Contact</a></li>
                          </ul>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="https://freshcart.codescandy.com/index.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/signin.html">Sign
                                in</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/signup.html">Signup</a></li>
                            <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/forgot-password.html">Forgot Password</a>
                            </li>
                            <li class="dropdown-submenu dropend">
                              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="https://freshcart.codescandy.com/index.html#">
                                My Account
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/account-orders.html">Orders</a></li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/account-settings.html">Settings</a>
                                </li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/account-address.html">Address</a></li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/account-payment-method.html">Payment
                                    Method</a>
                                </li>
                                <li><a class="dropdown-item" href="https://freshcart.codescandy.com/pages/account-notification.html">Notification</a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="https://freshcart.codescandy.com/dashboard/index.html">
                            Dashboard
                          </a>
                        </li>
                        <li class="nav-item dropdown dropdown-flyout">
                          <a class="nav-link" href="https://freshcart.codescandy.com/index.html#" id="navbarDropdownDocs2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Docs
                          </a>
                          <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdownDocs2">
                            <a class="dropdown-item align-items-start" href="https://freshcart.codescandy.com/docs/index.html">
                              <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-text text-primary" viewBox="0 0 16 16">
                                  <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z">
                                  </path>
                                  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z">
                                  </path>
                                </svg>
                              </div>
                              <div class="ms-3 lh-1">
                                <h6 class="mb-1">Documentations</h6>
                                <p class="mb-0 small">
                                  Browse the all documentation
                                </p>
                              </div>
                            </a>
                            <a class="dropdown-item align-items-start" href="https://freshcart.codescandy.com/docs/changelog.html">
                              <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-layers text-primary" viewBox="0 0 16 16">
                                  <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z">
                                  </path>
                                </svg>
                              </div>
                              <div class="ms-3 lh-1">
                                <h6 class="mb-1">
                                  Changelog <span class="text-primary ms-1">v1.1.0</span>
                                </h6>
                                <p class="mb-0 small">See what's new</p>
                              </div>
                            </a>
                          </div>

                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
              <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
              <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
            </div>
          </div>
        </div>
      </div>

    </nav>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-4">
        <div class="modal-header border-0">
          <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign Up</h5>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="fullName" class="form-label">Name</label>
              <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required="">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email address" required="">
            </div>

            <div class="mb-5">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter Password" required="">
              <small class="form-text">By Signup, you agree to our <a href="https://freshcart.codescandy.com/index.html#!">Terms of Service</a> &amp; <a href="https://freshcart.codescandy.com/index.html#!">Privacy Policy</a></small>
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
          </form>
        </div>
        <div class="modal-footer border-0 justify-content-center">

          Already have an account? <a href="https://freshcart.codescandy.com/index.html#">Sign in</a>
        </div>
      </div>
    </div>
  </div>



  <!-- Shop Cart -->

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width: 500px;">
    <div class="offcanvas-header border-bottom">
      <div class="text-start">
        <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Giỏ hàng của bạn</h5>
      </div>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

      <div class="">
        <ul id="cart-layout-id" class="list-group list-group-flush">
          <!-- list group -->
          <?php foreach ($cart as $row) { ?>
            <li class="list-group-item py-3 ps-0 border-bottom">
              <!-- row -->
              <div class="row align-items-center">
                <div class="col-3 col-md-2">
                  <!-- img --> <img src="<?= base_url('assets/images/product/' . $row['cover']) ?>" alt="Ecommerce" class="img-fluid">
                </div>
                <div class="col-4 col-md-6 col-lg-5">
                  <!-- title -->
                  <a href="<?= base_url('product/' . $row['id']) ?>" class="text-inherit">
                    <h6 class="mb-0"><?= $row['name'] ?> </h6>
                  </a>
                  <!-- text -->
                  <div class="mt-2 small lh-1"> <a data-value="<?= $row['id'] ?>" href="#" class="text-decoration-none text-inherit btn-remove-cart"> <span class="me-1 align-text-bottom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-success">
                          <polyline points="3 6 5 6 21 6"></polyline>
                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                          </path>
                          <line x1="10" y1="11" x2="10" y2="17"></line>
                          <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg></span><span class="text-muted">Remove</span></a></div>
                </div>
                <!-- input group -->
                <div class="col-3 col-md-3 col-lg-3">
                  <!-- input -->
                  <!-- input -->
                  <div class="input-group input-spinner  ">
                    <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                    <input data-id="<?= $row['id'] ?>" type="number" step="1" max="<?= $row['max_qty'] ?>" value="<?= $row['qty'] ?>" name="quantity" class="quantity-field form-control-sm form-input input-quantity-layout">
                    <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                  </div>
                </div>
                <!-- price -->
                <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                  <span class="fw-bold"><?= number_format($row['price'] * $row['qty'], 0, ',', '.') ?>đ</span>
                </div>
              </div>
            </li>
          <?php } ?>
        </ul>
        <!-- btn -->
        <div class="mt-4">
          <div id="alert-cart-success" class="alert alert-primary" style="display:none;" role="alert">
            This is a primary alert—check it out!
          </div>
          <div id="alert-cart-danger" class="alert alert-danger" style="display:none;" role="alert">
            This is a danger alert—check it out!
          </div>
        </div>
        <div class="d-flex justify-content-between mt-4">
          <a href="<?= base_url('shop/cart') ?>" class="btn btn-primary">Thanh toán</a>
          <button onclick="updateAll()" class="btn btn-dark">Cập nhật</button>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-body p-6">
          <div class="d-flex justify-content-between align-items-start ">
            <div>
              <h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
              <p class="mb-0 small">Enter your address and we will specify the offer you area. </p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="my-5">
            <input type="search" class="form-control" placeholder="Search your area">
          </div>
          <div class="d-flex justify-content-between align-items-center mb-2">
            <h6 class="mb-0">Select Location</h6>
            <a href="https://freshcart.codescandy.com/index.html#" class="btn btn-outline-gray-400 text-muted btn-sm">Clear All</a>


          </div>
          <div>
            <div data-simplebar="init" style="height:300px;">
              <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                  <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                  <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
                      <div class="simplebar-content" style="padding: 0px;">
                        <div class="list-group list-group-flush">

                          <a href="https://freshcart.codescandy.com/index.html#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active">
                            <span>Alabama</span><span>Min:$20</span></a>
                          <a href="https://freshcart.codescandy.com/index.html#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                            <span>Alaska</span><span>Min:$30</span></a>
                          <a href="https://freshcart.codescandy.com/index.html#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                            <span>Arizona</span><span>Min:$50</span></a>
                          <a href="https://freshcart.codescandy.com/index.html#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                            <span>California</span><span>Min:$29</span></a>
                          <a href="https://freshcart.codescandy.com/index.html#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                            <span>Colorado</span><span>Min:$80</span></a>
                          <a href="https://freshcart.codescandy.com/index.html#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                            <span>Florida</span><span>Min:$90</span></a>
                          <a href="https://freshcart.codescandy.com/index.html#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                            <span>Arizona</span><span>Min:$50</span></a>
                          <a href="https://freshcart.codescandy.com/index.html#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                            <span>California</span><span>Min:$29</span></a>
                          <a href="https://freshcart.codescandy.com/index.html#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                            <span>Colorado</span><span>Min:$80</span></a>
                          <a href="https://freshcart.codescandy.com/index.html#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                            <span>Florida</span><span>Min:$90</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
              </div>
              <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
              </div>
              <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <main>
    <?php $this->load->view($view); ?>
  </main>

  <!-- alertBody -->
  <div id="alertBody" class="position-fixed bottom-0 end-0 p-3" style="z-index: 3000">
  </div>

  <!-- Modal Search Order-->
  <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tìm kiếm đơn hàng</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
              <div class="py-3">
                <h4 class="fs-6 mb-4">Nhập số điện thoại bạn đã mua hàng.</h4>
                <form id="order-detail-form">
                  <div class="input-phone mb-2">
                    <input id="number-detail-input" type="number" maxlength="12" class="form-control" autocomplete="true" required>
                  </div>
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Tìm</button>
                  </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table id="table_order_item" class="table table-striped text-nowrap" style="width: 100%">
              <thead class="table-light">
                <tr>
                  <th>ID</th>
                  <th>Sản phẩm</th>
                  <th>Tổng cộng</th>
                  <th>Trạng thái</th>
                  <th>Ngày tạo</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body p-8">
          <div class="position-absolute top-0 end-0 me-3 mt-3">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <!-- img slide -->
              <div class="product productModal" id="productModal">
                <div class="zoom" onmousemove="zoom(event)" style="
                  background-image: url(<?= base_url('assets/images/product/product-single-img-1.jpg') ?>);
                ">
                  <!-- img -->
                  <img src="<?= base_url('assets/images/product/product-single-img-1.jpg') ?>" alt="">
                </div>
                <div class="zoom" onmousemove="zoom(event)" style="
                    background-image: url(<?= base_url('assets/images/product/product-single-img-2.jpg') ?>);
                  ">
                  <!-- img -->
                  <img src="<?= base_url('assets/images/product/product-single-img-2.jpg') ?>" alt="">
                </div>
              </div>
              <!-- product tools -->
              <div class="product-tools">
                <div class="thumbnails row g-3" id="productModalThumbnails">
                  <div class="col-3" class="tns-nav-active">
                    <div class="thumbnails-img">
                      <!-- img -->
                      <img src="<?= base_url('assets/images/product/product-single-img-1.jpg') ?>" alt="">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="thumbnails-img">
                      <!-- img -->
                      <img src="<?= base_url('assets/images/product/product-single-img-2.jpg') ?>" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="ps-lg-8 mt-6 mt-lg-0">
                <a id="category_quick_modal" href="#!" class="mb-4 d-block">Thông tin không tồn tại</a>
                <h2 id="product_quick_modal" class="mb-1 h1">Tên sản phẩm không tồn tại</h2>
                <div class="mb-4">
                  <small class="text-warning">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></small><a href="#" class="ms-2">(30 reviews)</a>
                </div>
                <div class="fs-4">
                  <span id="price_quick_modal" class="fw-bold text-dark">0.00đ</span>
                </div>
                <hr class="my-6">
                <div>
                  <!-- input -->
                  <!-- input -->
                  <div class="input-group input-spinner  ">
                    <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                    <input id="number_quick_modal" type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input">
                    <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                  </div>
                </div>
                <div class="mt-3 row justify-content-start g-2 align-items-center">

                  <div class="col-lg-4 col-md-5 col-6 d-grid">
                    <!-- button -->
                    <!-- btn -->
                    <button id="add_quick_modal" type="button" class="btn btn-primary">
                      <i class="feather-icon icon-shopping-bag me-2"></i>Thêm sản phẩm
                    </button>
                  </div>
                </div>
                <hr class="my-6">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer class="footer" style="padding: 2rem 0;">
    <div class="container">
      <div class="border-top pb-4">
        <div class="row align-items-center">
          <div class="col-lg-5 text-lg-start text-center mb-2 mb-lg-0">
            <ul class="list-inline mb-0">
              <li class="list-inline-item text-dark">Payment Partners</li>
              <li class="list-inline-item">
                <a href="#"><img src="<?= base_url('assets/images/amazonpay.svg') ?>" alt=""></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><img src="<?= base_url('assets/images/american-express.svg') ?>" alt=""></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><img src="<?= base_url('assets/images/mastercard.svg') ?>" alt=""></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><img src="<?= base_url('assets/images/paypal.svg') ?>" alt=""></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><img src="<?= base_url('assets/images/visa.svg') ?>" alt=""></a>
              </li>
            </ul>
          </div>
          <div class="col-lg-7 mt-4 mt-md-0">
            <ul class="list-inline mb-0 text-lg-end text-center">
              <li class="list-inline-item mb-2 mb-md-0 text-dark">Tải ứng dụng</li>
              <li class="list-inline-item ms-4">
                <a href="#"> <img src="<?= base_url('assets/images/appstore-btn.svg') ?>" alt="" style="width: 140px;"></a>
              </li>
              <li class="list-inline-item">
                <a href="#"> <img src="<?= base_url('assets/images/googleplay-btn.svg') ?>" alt="" style="width: 140px;"></a>
              </li>
            </ul>
          </div>
        </div>

      </div>
      <div class="border-top py-4">
        <div class="row align-items-center">
          <div class="col-md-6"><span class="small text-muted">Copyright 2023 © eCommerce.</span></div>
          <div class="col-md-6">
            <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
              <li class="list-inline-item text-muted">Follow us on</li>
              <li class="list-inline-item me-1">
                <a target="_blank" href="https://www.facebook.com/anvatsachsanhxanh" class="btn btn-xs btn-social btn-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                    </path>
                  </svg></a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="https://www.instagram.com/sachsanhxanh_vn/" class="btn btn-xs btn-social btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                    </path>
                  </svg></a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </footer>

  <!-- Javascript-->
  <script src="<?= base_url('assets/js/index.js') ?>"></script>
  <script src="<?= base_url('assets/js/dropzone.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/nouislider.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/wNumb.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/flatpickr.min.js') ?>"></script>

  <!-- Libs JS -->
  <script type="text/javascript" src="<?= base_url('assets/js/jquery-migrate-1.2.1.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/simplebar.min.js') ?>"></script>

  <!-- Theme JS -->
  <script src="<?= base_url('assets/js/theme.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.countdown.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/countdown.js') ?>"></script>
  <script src="<?= base_url('assets/js/slick.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/slick-slider.js') ?>"></script>
  <script src="<?= base_url('assets/js/tiny-slider.js') ?>"></script>
  <script src="<?= base_url('assets/js/tns-slider.js') ?>"></script>
  <script src="<?= base_url('assets/js/zoom.js') ?>"></script>
  <script src="<?= base_url('assets/js/increment-value.js') ?>"></script>

  <script>
    var tableOrder = false;
    var isRequest = false;
    var myOffcanvas = document.getElementById('offcanvasRight')
    var bsOffcanvas = new bootstrap.Offcanvas(myOffcanvas)

    $('button[data-bs-target="#exampleModal-2"]').on('click', function() {
      $("#number-detail-input").val('');
      if (tableOrder) {
        tableOrder.clear().draw();
      }

    })
    $("#order-detail-form").on('submit', function(e) {
      e.preventDefault();
      var phone = $("#number-detail-input").val();
      if (tableOrder) {
        tableOrder.destroy();
      }
      tableOrder = $("#table_order_item").DataTable({
        ordering: false,
        lengthChange: false,
        info: false,
        paging: false,
        scrollY: 'calc(75vh - 200px)',
        scrollCollapse: true,
        searching: false,
        ajax: {
          url: "<?= base_url('api/ShopApi/orderByPhone') ?>",
          type: "POST",
          dataType: "JSON",
          data: function(data) {
            data.phone = phone;
            return data;
          }
        },
        columns: [{
          data: 'id'
        }, {
          data: 'product_name'
        }, {
          data: 'total',
          render: function(data, type, row) {
            return addCommas(data);
          }
        }, {
          data: 'status_name',
          render: function(data, type, row) {
            return `<span class="badge bg-` + row.status_class + `">` + data + `</span>`;
          }
        }, {
          data: 'date'
        }]
      });
    })

    $('button[data-bs-target="#quickViewModal"]').on('click', function(e) {
      var id = $(this).attr('data-id');
      $("#add_quick_modal").on('click', function() {
        addItem(id, parseInt($("#number_quick_modal").val()));
      });
      var url = '<?= base_url('api/ShopApi/productDe/') ?>' + id;
      $.getJSON(url, function(json) {
        if (json.error) {
          showErrorMessage(json.message);
          setTimeout(function() {
            $("#quickViewModal").modal('hide');
          }, 1200)
          return false;
        } else {
          var data = json.data;
          $("#category_quick_modal").html(data.category_name);
          $("#product_quick_modal").html(data.name);
          $("#price_quick_modal").html(addCommas(data.price) + 'đ');
          var images = JSON.parse(data.images);
          var first = 0;
          $("#productModal").html('');
          $("#productModalThumbnails").html('');
          images.forEach(function(item) {
            $("#productModal").append(
              `<div class="zoom" onmousemove="zoom(event)" style="
                  background-image: url(<?= base_url('assets/images/product/detail/') ?>` + item + `);
                ">
                  <!-- img -->
                  <img src="<?= base_url('assets/images/product/detail/') ?>` + item + `" alt="">
                </div>`
            );
            var active = ''
            if (first == 0) active = `class="tns-nav-active"`;
            var content = `<div class="col-3" ` + active + `>
                    <div class="thumbnails-img">
                      <!-- img -->
                      <img src="<?= base_url('assets/images/product/detail/') ?>` + item + `" alt="">
                    </div>
                  </div>`;
            $("#productModalThumbnails").append(
              content
            );
            first++;
          })
          reload_js("<?= base_url('assets/js/zoom.js') ?>");
          reload_js("<?= base_url('assets/js/tns-slider.js') ?>");
          $("#quickViewModal").modal('show');
        }
      })
      console.log('bat su kien');
    })
    $(document).ready(function() {
      removeItem();
    })

    function updateAll() {
      var arr_id = {}
      arr_id['id[]'] = [];
      $('.input-quantity-layout').each(function() {
        var data_id = $(this).attr('data-id');
        var value = $(this).val()
        if (data_id) {
          arr_id['id[]'].push(data_id);
          var prop = 'val_' + data_id;
          arr_id[prop] = value;
        }
      })
      $("#alert-cart-success").hide();
      $("#alert-cart-danger").hide();
      if (!isRequest) {
        isRequest = true;
        var urlBank = "<?= base_url() . "api/ShopCart/update_all" ?>";
        $.ajax({
          type: 'POST',
          url: urlBank,
          data: arr_id,
          dataType: 'json',
        }).done(function(json1) {
          if (json1.error) {
            $("#alert-cart-danger").html(json1.message);
            $("#alert-cart-danger").show();
            return false;
          } else {
            $("#alert-cart-success").html(json1.message);
            $("#alert-cart-success").show();
            setTimeout(function() {
              bsOffcanvas.hide();
            }, 1500);
            setTimeout(function() {
              location.reload();
            }, 2000);
            return true;
          }
        }).always(function(msg) {
          console.log('always')
          $('#sending').hide();
          isRequest = false;
        })
      }

    }

    function removeItem() {
      $('.btn-remove-cart').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('data-value');
        var url = "<?= base_url('api/ShopCart/remove/') ?>" + id;
        $.getJSON(url, function(json) {
          if (json.error) {
            showErrorMessage(json.message);
            return false;
          } else {
            showOkMessage(json.message);
            $("#cart-layout-id").html('');
            var data = json.data;
            /* change number button */
            if ($('#number-cart-span-id').length != 0) {
              $("#number-cart-span-id").html(Object.keys(data).length);
            } else {
              $("#number-cart-a-id").append(
                `<span id="number-cart-span-id" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">` +
                Object.keys(data).length +
                `<span class="visually-hidden">unread messages</span></span>`);
              $("#number-cart-a-id").attr('data-bs-target', "#offcanvasRight");
            }
            /* change item list */
            Object.keys(data).forEach(function(key) {
              $("#cart-layout-id").append(
                `            <li class="list-group-item py-3 ps-0 border-bottom">
              <!-- row -->
              <div class="row align-items-center">
                <div class="col-3 col-md-2">
                  <!-- img --> <img src="<?= base_url('assets/images/product/') ?>` + data[key].cover + `" alt="Ecommerce" class="img-fluid">
                </div>
                <div class="col-4 col-md-6 col-lg-5">
                  <!-- title -->
                  <a href="https://freshcart.codescandy.com/pages/shop-single.html" class="text-inherit">
                    <h6 class="mb-0">` + data[key].name + `</h6>
                  </a>
                  <!-- text -->
                  <div class="mt-2 small lh-1"> 
                  <a data-value="` + data[key].id + `" href="#" class="text-decoration-none text-inherit btn-remove-cart"> <span class="me-1 align-text-bottom">
                         <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-success">
                          <polyline points="3 6 5 6 21 6"></polyline>
                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                          </path>
                          <line x1="10" y1="11" x2="10" y2="17"></line>
                          <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg></span><span class="text-muted">Remove</span></a></div>
                </div>
                <!-- input group -->
                <div class="col-3 col-md-3 col-lg-3">
                  <!-- input -->
                  <!-- input -->
                  <div class="input-group input-spinner  ">
                    <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                    <input data-id="` + data[key].id + `" type="number" step="1" max="` + data[key].max_qty + `" value="` + data[key].qty + `" name="quantity" class="quantity-field form-control-sm form-input input-quantity-layout">
                    <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                  </div>
                </div>
                <!-- price -->
                <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                  <span class="fw-bold">` + addCommas(data[key].qty * data[key].price) + `đ</span>
                </div>
              </div>
            </li>`
              );
            });
            removeItem();
            reload_js("<?= base_url('assets/js/increment-value.js') ?>");
            return true;
          }
        })
      })
    }

    function addItem(id, qty = 1) {
      var url = "<?= base_url('api/ShopCart/add/') ?>" + id + '?qty=' + qty;
      $.getJSON(url, function(json) {
        if (json.error) {
          showErrorMessage(json.message);
          return false;
        } else {
          showOkMessage(json.message);
          $("#cart-layout-id").html('');
          var data = json.data;
          /* change number button */
          if ($('#number-cart-span-id').length != 0) {
            $("#number-cart-span-id").html(Object.keys(data).length);
          } else {
            $("#number-cart-a-id").append(
              `<span id="number-cart-span-id" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">` +
              Object.keys(data).length +
              `<span class="visually-hidden">unread messages</span></span>`);
            $("#number-cart-a-id").attr('data-bs-target', "#offcanvasRight");
          }
          /* change item list */
          Object.keys(data).forEach(function(key) {
            $("#cart-layout-id").append(
              `            <li class="list-group-item py-3 ps-0 border-bottom">
              <!-- row -->
              <div class="row align-items-center">
                <div class="col-3 col-md-2">
                  <!-- img --> <img src="<?= base_url('assets/images/product/') ?>` + data[key].cover + `" alt="Ecommerce" class="img-fluid">
                </div>
                <div class="col-4 col-md-6 col-lg-5">
                  <!-- title -->
                  <a href="https://freshcart.codescandy.com/pages/shop-single.html" class="text-inherit">
                    <h6 class="mb-0">` + data[key].name + `</h6>
                  </a>
                  <!-- text -->
                  <div class="mt-2 small lh-1"> 
                  <a data-value="` + data[key].id + `" href="#" class="text-decoration-none text-inherit btn-remove-cart"> <span class="me-1 align-text-bottom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-success">
                          <polyline points="3 6 5 6 21 6"></polyline>
                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                          </path>
                          <line x1="10" y1="11" x2="10" y2="17"></line>
                          <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg></span><span class="text-muted">Remove</span></a></div>
                </div>
                <!-- input group -->
                <div class="col-3 col-md-3 col-lg-3">
                  <!-- input -->
                  <!-- input -->
                  <div class="input-group input-spinner  ">
                    <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                    <input data-id="` + data[key].id + `" type="number" step="1" max="` + data[key].max_qty + `" value="` + data[key].qty + `" name="quantity" class="quantity-field form-control-sm form-input input-quantity-layout">
                    <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                  </div>
                </div>
                <!-- price -->
                <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                  <span class="fw-bold">` + addCommas(data[key].qty * data[key].price) + `đ</span>
                </div>
              </div>
            </li>`
            );
          });
          removeItem();
          reload_js("<?= base_url('assets/js/increment-value.js') ?>");
          return true;
        }
      });
    }

    function reload_js(src) {
      var body = document.getElementsByTagName('body')[0];
      $('script[src="' + src + '"]').remove();
      var script = document.createElement('script');
      script.src = src;
      body.appendChild(script);
    }
  </script>


  <input type="file" multiple="multiple" class="dz-hidden-input" tabindex="-1" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">

</body>

</html>