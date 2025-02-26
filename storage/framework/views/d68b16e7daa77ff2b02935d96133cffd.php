<?php $__env->startSection('dashboard'); ?>

    <body>
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="<?php echo e(route('dash')); ?>">
                    <h1 class="tm-site-title mb-0">Edit Product</h1>
                </a>

                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo e(route('product')); ?>">
                                <i class="fas fa-shopping-cart"></i> Products
                            </a>
                        </li>

                        </li>

                    </ul>

                    <ul class="navbar-nav">
                      <li class="nav-item">

                          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                              <?php echo csrf_field(); ?>
                          </form>
                          
                          <a class="nav-link d-block" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
                                <form action="" method="post" class="tm-edit-product-form">
                                    <div class="form-group mb-3">
                                        <label for="name">Product Name
                                        </label>
                                        <input id="name" name="name" type="text" value="Lorem Ipsum Product"
                                            class="form-control validate" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="description">Description</label>
                                        <textarea class="form-control validate tm-small" rows="5" required>Lorem ipsum dolor amet gentrify glossier locavore messenger bag chillwave hashtag irony migas wolf kale chips small batch kogi direct trade shaman.</textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="category">Category</label>
                                        <select class="custom-select tm-select-accounts" id="category">
                                            <option>Select category</option>
                                            <option value="1" selected>CPU</option>
                                            <option value="2">GPU</option>
                                            <option value="3">Ram</option>
                                            <option value="3">Case</option>
                                            <option value="3">Motherboard</option>
                                        </select>
                                    </div>


                                    <div class="row">
                                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                                            <label for="stock">Prodcut Price</label>
                                            <input id="stock" name="stock" type="text" placeholder="19,765 $"
                                                class="form-control validate" />
                                        </div>
                                    </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                                <div class="tm-product-img-edit mx-auto">
                                    <img src="<?php echo e(asset('assets/img/Project-images/CPU.jpg')); ?>" alt="Product image" class="img-fluid d-block mx-auto">
                                    <i class="fas fa-cloud-upload-alt tm-upload-icon"onclick="document.getElementById('fileInput').click();"></i>
                                </div>
                                <div class="custom-file mt-3 mb-3">
                                    <input id="fileInput" type="file" style="display:none;" />
                                    <input type="button" class="btn btn-primary btn-block mx-auto"value="CHANGE IMAGE NOW"onclick="document.getElementById('fileInput').click();" />
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block text-uppercase">Update Now</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MedTech\resources\views\Admin\edit-product.blade.php ENDPATH**/ ?>