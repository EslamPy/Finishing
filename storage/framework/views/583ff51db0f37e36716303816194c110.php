<?php $__env->startSection('dashboard'); ?>

<body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
        <!-- Your navigation code -->
    </nav>
    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add Product</h2>
                        </div>
                    </div>

                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <form action="<?php echo e(route('store')); ?>" method="POST" enctype="multipart/form-data"
                                class="tm-edit-product-form">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mb-3">
                                    <label for="name">Product Name</label>
                                    <input id="name" name="name" type="text" class="form-control validate" required />
                                </div>

                                <div class="form-group mb-3">
                                    <label for="description">Description</label>
                                    <textarea id="description" name="description" class="form-control validate" rows="3" required></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="category">Category</label>
                                    <select class="custom-select tm-select-accounts" id="category" name="category" required>
                                        <option value="">Select category</option>
                                        <option value="CPU">CPU</option>
                                        <option value="GPU">GPU</option>
                                        <option value="RAM">Ram</option>
                                        <option value="Motherboard">Motherboard</option>
                                        <option value="Storage">Storage</option>
                                        <option value="PowerSupply">PowerSupply</option>
                                        <option value="Mouse">Mouse</option>
                                        <option value="Keyboard">Keyboard</option>
                                        <option value="Monitor">Monitor</option>
                                        <option value="Case">Case</option>
                                        <option value="Cooler">Cooler</option>
                                        <option value="Headset">Headset</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                        <label for="expire_date">Date</label>
                                        <input id="expire_date" name="expire_date" type="date"
                                            class="form-control validate" />
                                    </div>

                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                        <label for="price">Price</label>
                                        <input id="price" name="price" type="text"
                                            class="form-control validate" required placeholder="1500 $" />
                                    </div>
                                </div>
                        </div>

                        
                        <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                            <div class="tm-product-img-edit mx-auto">
                                <img id="imagePreview" class="img-fluid d-block mx-auto">
                                <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>

                                <div class="custom-file mt-3 mb-3">
                                    <input id="fileInput" name="imgpath" type="file" style="display:none;" onchange="previewImage(event)" />
                                    <input type="button" class="btn btn-primary btn-block mx-auto" value="CHANGE IMAGE NOW" onclick="document.getElementById('fileInput').click();" />
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product
                                Now</button>
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
            reader.onload = function () {
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.style.display = 'block'; // Display the uploaded image
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MedTech\resources\views/Admin/add-product.blade.php ENDPATH**/ ?>