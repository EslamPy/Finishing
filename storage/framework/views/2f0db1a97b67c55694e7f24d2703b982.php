<?php $__env->startSection('dashboard'); ?>
    <!DOCTYPE html>
    <html lang="en">

    <body>

        <body id="reportsPage">
            <div class="" id="home">
                <nav class="navbar navbar-expand-xl">
                    <div class="container h-100">
                        <a class="navbar-brand" href="<?php echo e(route('dash')); ?>">
                            <h1 class="tm-site-title mb-0">Edit Product</h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars tm-nav-icon"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto h-100">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                        <i class="fas fa-tachometer-alt"></i>
                                        Dashboard
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('product')); ?>">
                                        <i class="fas fa-shopping-cart"></i> Products</a>
                                </li>

                            </ul>

                            <ul class="navbar-nav">
                                <li class="nav-item">

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                        style="display: none;">
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
                <div class="container tm-mt-big tm-mb-big">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="tm-block-title d-inline-block">Edit Product</h2>
                                    </div>
                                </div>

                                <div class="row tm-edit-product-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <form id="edit-product-form" action="<?php echo e(route('update', ['id' => $product->id])); ?>"
                                            method="post" enctype="multipart/form-data" class="tm-edit-product-form">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>

                                            
                                            <div class="form-group mb-3">
                                                <label for="name">Product Name</label>
                                                <input id="name" name="name" type="text"
                                                    value="<?php echo e($product->name); ?>" class="form-control validate" required />
                                            </div>

                                            
                                            <div class="form-group mb-3">
                                                <label for="description">Description</label>
                                                <textarea id="description" name="description" class="form-control validate tm-small" rows="5" required><?php echo e($product->description); ?></textarea>
                                            </div>

                                            
                                            <div class="form-group mb-3">
                                                <label for="category">Category</label>
                                                <select id="category" name="category"
                                                    class="custom-select tm-select-accounts" required>
                                                    <option value="">Select category</option>
                                                    <option value="CPU" <?php echo e($product->category == 'CPU' ? 'selected' : ''); ?>>CPU</option>
                                                    <option value="GPU" <?php echo e($product->category == 'GPU' ? 'selected' : ''); ?>>GPU</option>
                                                    <option value="RAM" <?php echo e($product->category == 'RAM' ? 'selected' : ''); ?>>Ram</option>
                                                    <option value="Motherboard" <?php echo e($product->category == 'Motherboard' ? 'selected' : ''); ?>>Motherboard</option>
                                                    <option value="Storage" <?php echo e($product->category == 'Storage' ? 'selected' : ''); ?>>Storage</option>
                                                    <option value="PowerSupply" <?php echo e($product->category == 'PowerSupply' ? 'selected' : ''); ?>>PowerSupply</option>
                                                    <option value="Mouse" <?php echo e($product->category == 'Mouse' ? 'selected' : ''); ?>>Mouse</option>
                                                    <option value="Keyboard" <?php echo e($product->category == 'Keyboard' ? 'selected' : ''); ?>>Keyboard</option>
                                                    <option value="Monitor" <?php echo e($product->category == 'Monitor' ? 'selected' : ''); ?>>Monitor</option>
                                                    <option value="Case" <?php echo e($product->category == 'Case' ? 'selected' : ''); ?>>Case</option>
                                                    <option value="Cooler" <?php echo e($product->category == 'Cooler' ? 'selected' : ''); ?>>Cooler</option>
                                                    <option value="Headset" <?php echo e($product->category == 'Headset' ? 'selected' : ''); ?>>Headset</option>
                                                    <option value="Other" <?php echo e($product->category == 'Other' ? 'selected' : ''); ?>>Other</option>
                                                </select>
                                            </div>

                                            
                                            <div class="form-group mb-3">
                                                <label for="price">Price</label>
                                                <input id="price" name="price" type="text"
                                                    value="<?php echo e($product->price); ?>" class="form-control validate" required />
                                            </div>

                                            
                                            <input type="hidden" name="current_imgpath" value="<?php echo e($product->imgpath); ?>">

                                            
                                            <div class="col-12">
                                                <button type="submit"
                                                    class="btn btn-primary btn-block text-uppercase">Update Now</button>
                                            </div>
                                    </div>

                                    
                                    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                                        <div class="tm-product-img-edit mx-auto">
                                            <img id="imagePreview" src="<?php echo e(asset($product->imgpath)); ?>" alt="Product image"
                                                class="img-fluid d-block mx-auto">
                                            <i class="fas fa-cloud-upload-alt tm-upload-icon"
                                                onclick="document.getElementById('fileInput').click();"></i>

                                            <div class="custom-file mt-3 mb-3">
                                                <input id="fileInput" name="imgpath" type="file" style="display:none;"
                                                    onchange="previewImage(event)" />
                                                <input type="button" class="btn btn-primary btn-block mx-auto"
                                                    value="CHANGE IMAGE NOW"
                                                    onclick="document.getElementById('fileInput').click();" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function previewImage(event) {
                        var reader = new FileReader();
                        reader.onload = function() {
                            var output = document.getElementById('imagePreview');
                            output.src = reader.result;
                        };
                        reader.readAsDataURL(event.target.files[0]);
                    }
                </script>
        </body>

    </html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MedTech\resources\views/Admin/edit-product.blade.php ENDPATH**/ ?>