<?php $__env->startSection('dashboard'); ?>

<body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
            <a class="navbar-brand" href="<?php echo e(route('dash')); ?>">
                <h1 class="tm-site-title mb-0">Product Admin</h1>
            </a>
            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars tm-nav-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('dash')); ?>">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(route('product')); ?>">
                            <i class="fas fa-shopping-cart"></i> Products
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                        <a class="nav-link d-block" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <?php echo e(session('userName')); ?>, <b>Logout</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5" style="max-width: 1365px;">
        <div class="row tm-content-row">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col" style="margin-left: 220px">
                <div class="tm-bg-primary-dark tm-block tm-block-products">
                    <div class="tm-product-table-container">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>
                        <form id="delete-form" action="<?php echo e(route('products.delete')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <table class="table table-hover tm-table-small tm-product-table">
                                <thead>
                                    <tr>
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">PRODUCT NAME</th>
                                        <th scope="col">PRODUCT PRICE</th>
                                        <th scope="col">ADDED DATE</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row">
                                                <input type="checkbox" name="product_ids[]" value="<?php echo e($product->id); ?>" />
                                            </th>
                                            <td class="tm-product-name">
                                                <a href="<?php echo e(route('edit', ['id' => $product->id])); ?>" style="text-decoration: none; color: inherit;">
                                                    <?php echo e($product->name); ?>

                                                </a>
                                            </td>
                                            <td><?php echo e($product->price); ?></td>
                                            <td><?php echo e(\Carbon\Carbon::parse($product->created_at)->format('d M Y')); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('products.delete.single', ['id' => $product->id])); ?>" class="tm-product-delete-link"
                                                   onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this product?')) document.getElementById('delete-form-<?php echo e($product->id); ?>').submit();">
                                                    <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                                </a>
                                                <form id="delete-form-<?php echo e($product->id); ?>" action="<?php echo e(route('products.delete.single', ['id' => $product->id])); ?>" method="POST" style="display: none;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>

                        </form>
                    </div>
                    <!-- table container -->
                    <a href="<?php echo e(route('add')); ?>" class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
                    <button type="button" class="btn btn-primary btn-block text-uppercase" onclick="submitDeleteForm()">Delete selected products</button>
                    
                </div>
            </div>
        </div>
    </div>

    <script>
        function submitDeleteForm() {
            if (confirm('Are you sure you want to delete selected products?')) {
                document.getElementById('delete-form').submit();
            }
        }
    </script>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MedTech\resources\views/Admin/products.blade.php ENDPATH**/ ?>