<?php $__env->startSection('static'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- title -->
    <title>Check Out</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">

</head>
    <body>
        <!-- search area -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="close-btn"><i class="fas fa-window-close"></i></span>
                        <div class="search-bar">
                            <div class="search-bar-tablecell">
                                <h3>Search For:</h3>
                                <input type="text" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search arewa -->

        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>TECHNICAL AND EFFICIENT</p>
                            <h1>Check Out Product</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        <!-- check out section -->
        <div class="checkout-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-accordion-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="card single-accordion">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Billing Address
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="billing-address-form">
                                                <form action="index.html">
                                                    <p><input type="text" placeholder="Name"></p>
                                                    <p><input type="email" placeholder="Email"></p>
                                                    <p><input type="text" placeholder="Address"></p>
                                                    <p><input type="tel" placeholder="Phone"></p>
                                                    <p>
                                                        <textarea name="bill" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-accordion">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Shipping Address
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shipping-address-form">
                                                <p>Your shipping address form is here.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card single-accordion">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Card Details
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="card-details">
                                                <p>Your card details goes here.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="order-details-wrap">
                            <table class="order-details">
                                <thead>
                                    <tr>
                                        <th>Your order Details</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody class="order-details-body">
                                    <tr>
                                        <td>Product</td>
                                        <td>Total</td>
                                    </tr>
                                    <tr>
                                        <td>Strawberry</td>
                                        <td>$85.00</td>
                                    </tr>
                                    <tr>
                                        <td>Berry</td>
                                        <td>$70.00</td>
                                    </tr>
                                    <tr>
                                        <td>Lemon</td>
                                        <td>$35.00</td>
                                    </tr>
                                </tbody>
                                <tbody class="checkout-details">
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>$190</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>$240</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="boxed-btn">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end check out section -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MedTech\resources\views\checkout.blade.php ENDPATH**/ ?>