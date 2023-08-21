<?php 
$pageTitle = 'Track Order';
include 'includes/head-vars.php';
include 'includes/navbar.php';
?>
    <?php include_once 'navbar.php'?>

    <div class="offcanvas-overlay"></div>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="https://htmldemo.net/learts/learts/assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Order Tracking</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Order Tracking</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Order Tracking Section Start -->
    <div class="section section-padding">
        <div class="container">

            <div class="order-tracking">
                <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                <form action="#">
                    <div class="row learts-mb-n30">
                        <div class="col-12 learts-mb-30">
                            <label for="orderID">Order ID</label>
                            <input id="orderID" type="text" placeholder="Found in your order confirmation email.">
                        </div>
                        <div class="col-12 learts-mb-30">
                            <label for="billingEmail">Billing email</label>
                            <input id="billingEmail" type="text" placeholder="Email you used during checkout.">
                        </div>
                        <div class="col-12 text-center learts-mb-30">
                            <button class="btn btn-dark btn-outline-hover-dark">Track</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <!-- Order Tracking Section End -->
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>