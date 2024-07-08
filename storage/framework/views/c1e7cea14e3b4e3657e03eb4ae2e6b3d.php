<?php $__env->startSection('static'); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- title -->
        <title>Cart</title>

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
                            <h1>Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        <!-- cart -->
        <div class="cart-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="cart-table-wrap">
                            <table class="cart-table">
                                <thead class="cart-table-head">
                                    <tr class="table-head-row">
                                        <th class="product-remove"></th>
                                        <th class="product-image">Product Image</th>
                                        <th class="product-name">Name</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="table-body-row">

                                            <!-- Delete a Product From the Cart -->
                                            <td class="product-remove">
                                                <a href="#" onclick="removeProduct(<?php echo e($item['id']); ?>)"><i
                                                        class="far fa-window-close"></i></a>
                                            </td>
                                            <!-- Delete a Product From the Cart -->

                                            <td class="product-image"><img src="<?php echo e($item['image']); ?>" alt=""></td>
                                            <td class="product-name"><?php echo e($item['name']); ?></td>
                                            <td class="product-price">$<?php echo e($item['price']); ?></td>
                                            <td class="product-quantity">
                                                <input type="number" value="<?php echo e($item['quantity']); ?>" placeholder="0" class="quantityInput" data-price="<?php echo e($item['price']); ?>" data-item-id="<?php echo e($item['id']); ?>">
                                            </td>
                                            <td class="product-total" id="price-<?php echo e($item['id']); ?>">
                                                $<?php echo e($item['price'] * $item['quantity']); ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="total-section">
                            <table class="total-table">
                                <thead class="total-table-head">
                                    <tr class="table-total-row">
                                        <th>Total</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="total-data">
                                        <td><strong>Subtotal: </strong></td>
                                        <td id="subtotal">$<?php echo e($subtotal); ?></td>
                                    </tr>
                                    <tr class="total-data">
                                        <td><strong>Shipping: </strong></td>
                                        <td id="shipping">$<?php echo e($shipping); ?></td>
                                    </tr>
                                    <tr class="total-data">
                                        <td><strong>Total: </strong></td>
                                        <td id="total">$<?php echo e($total); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="cart-buttons">
                                <a href="<?php echo e(route('cart')); ?>" class="boxed-btn">Update Cart</a>
                                <a href="<?php echo e(route('checkout')); ?>" class="boxed-btn black">Check Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cart -->

        <script>
            // Function to update total price in the summary
            function updateTotal() {
                var subtotal = 0;
                var priceElements = document.querySelectorAll('.product-total[id^="price-"]');
                priceElements.forEach(function(priceElement) {
                    subtotal += parseFloat(priceElement.innerText.replace('$', ''));
                });
                document.getElementById('subtotal').innerText = '$' + subtotal.toFixed(2);

                var shipping = parseFloat(document.getElementById('shipping').innerText.replace('$', ''));
                document.getElementById('total').innerText = '$' + (subtotal + shipping).toFixed(2);
            }

            // Get all input elements with the class 'quantityInput'
            var quantityInputs = document.querySelectorAll('.quantityInput');

            // Loop through each input element
            quantityInputs.forEach(function(input) {
                // Add event listener to each input field
                input.addEventListener('change', function() {
                    // Parse the input value as a number
                    var quantity = parseInt(this.value);

                    // If the quantity is less than 0, set it to 0
                    if (quantity < 0) {
                        this.value = 0;
                        quantity = 0;
                    }

                    // Get the original price from data attribute
                    var price = parseFloat(this.getAttribute('data-price'));

                    // Calculate the new price
                    var newPrice = price * quantity;

                    // Find the corresponding price element and update it
                    var priceElement = document.getElementById('price-' + this.getAttribute('data-item-id'));
                    priceElement.innerText = '$' + newPrice.toFixed(2);

                    // Update the total price
                    updateTotal();
                });
            });
        </script>

        <script>
            // Remove product from cart
            function removeProduct(productId) {
                // Confirm with the user before removing the product
                if (confirm("Are you sure you want to remove this product from your cart?")) {
                    // Send AJAX request to remove the product
                    $.ajax({
                        url: '<?php echo e(route('cart.remove')); ?>',
                        method: 'POST',
                        data: {
                            _token: '<?php echo e(csrf_token()); ?>',
                            product_id: productId
                        },
                        success: function(response) {
                            // If the product is successfully removed, reload the page to update the cart
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            }
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MedTech\resources\views\cart.blade.php ENDPATH**/ ?>