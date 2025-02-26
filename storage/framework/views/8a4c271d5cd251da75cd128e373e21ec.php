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
                            <a class="nav-link active" href="<?php echo e(route('add')); ?>">
                                <i class="fas fa-shopping-cart"></i> Products
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <div class="container mt-5">
            <div class="row tm-content-row">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-products">
                        <div class="tm-product-table-container">
                            <table class="table table-hover tm-table-small tm-product-table">
                                <thead>
                                    <tr>
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">PRODUCT NAME</th>
                                        <th scope="col">UNIT SOLD</th>
                                        <th scope="col">IN STOCK</th>
                                        <th scope="col">ADDED DATE</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td class="tm-product-name"><a href="<?php echo e(route('edit')); ?>"
                                                style="text-decoration: none; color: inherit;">Lorem Ipsum Product 1</a>
                                        </td>
                                        <td>1,450</td>
                                        <td>550</td>
                                        <td>28 March 2019</td>
                                        <td>
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td class="tm-product-name"><a href="<?php echo e(route('edit')); ?>"
                                                style="text-decoration: none; color: inherit;">Lorem Ipsum Product 1</a>
                                        </td>
                                        <td>1,250</td>
                                        <td>750</td>
                                        <td>21 March 2019</td>
                                        <td>
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td class="tm-product-name"><a href="<?php echo e(route('edit')); ?>"
                                                style="text-decoration: none; color: inherit;">Lorem Ipsum Product 1</a>
                                        </td>
                                        <td>1,100</td>
                                        <td>900</td>
                                        <td>18 Feb 2019</td>
                                        <td>
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td class="tm-product-name"><a href="<?php echo e(route('edit')); ?>"
                                                style="text-decoration: none; color: inherit;">Lorem Ipsum Product 1</a>
                                        </td>
                                        <td>1,400</td>
                                        <td>600</td>
                                        <td>24 Feb 2019</td>
                                        <td>
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td class="tm-product-name"><a href="<?php echo e(route('edit')); ?>"
                                                style="text-decoration: none; color: inherit;">Lorem Ipsum Product 1</a>
                                        </td>
                                        <td>1,800</td>
                                        <td>200</td>
                                        <td>22 Feb 2019</td>
                                        <td>
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td class="tm-product-name"><a href="<?php echo e(route('edit')); ?>"
                                                style="text-decoration: none; color: inherit;">Lorem Ipsum Product 1</a>
                                        </td>
                                        <td>1,000</td>
                                        <td>1,000</td>
                                        <td>20 Feb 2019</td>
                                        <td>
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td class="tm-product-name"><a href="<?php echo e(route('edit')); ?>"
                                                style="text-decoration: none; color: inherit;">Lorem Ipsum Product 1</a>
                                        </td>
                                        <td>500</td>
                                        <td>100</td>
                                        <td>10 Feb 2019</td>
                                        <td>
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td class="tm-product-name"><a href="<?php echo e(route('edit')); ?>" style="text-decoration: none; color: inherit;">Lorem Ipsum Product 1</a>
                                        </td>
                                        <td>1,000</td>
                                        <td>600</td>
                                        <td>08 Feb 2019</td>
                                        <td>
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td class="tm-product-name"><a href="<?php echo e(route('edit')); ?>" style="text-decoration: none; color: inherit;">Lorem Ipsum Product 1</a>
                                        </td>
                                        <td>1,200</td>
                                        <td>800</td>
                                        <td>24 Jan 2019</td>
                                        <td>
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td class="tm-product-name"><a href="<?php echo e(route('edit')); ?>" style="text-decoration: none; color: inherit;">Lorem Ipsum Product 1</a>
                                        </td>
                                        <td>1,600</td>
                                        <td>400</td>
                                        <td>22 Jan 2019</td>
                                        <td>
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td class="tm-product-name"><a href="<?php echo e(route('edit')); ?>" style="text-decoration: none; color: inherit;">Lorem Ipsum Product 1</a>
                                        </td>
                                        <td>2,000</td>
                                        <td>400</td>
                                        <td>21 Jan 2019</td>
                                        <td>
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table container -->
                        <a href="<?php echo e(route('add')); ?>" class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
                        <button class="btn btn-primary btn-block text-uppercase"> Delete selected products </button>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                        <h2 class="tm-block-title">Product Categories</h2>
                        <div class="tm-product-table-container">
                            <table class="table tm-table-small tm-product-table">
                                <tbody>
                                    <tr>
                                        <td class="tm-product-name">Product Category 1</td>
                                        <td class="text-center">
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tm-product-name">Product Category 2</td>
                                        <td class="text-center">
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tm-product-name">Product Category 3</td>
                                        <td class="text-center">
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tm-product-name">Product Category 4</td>
                                        <td class="text-center">
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tm-product-name">Product Category 5</td>
                                        <td class="text-center">
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tm-product-name">Product Category 6</td>
                                        <td class="text-center">
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tm-product-name">Product Category 7</td>
                                        <td class="text-center">
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tm-product-name">Product Category 8</td>
                                        <td class="text-center">
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tm-product-name">Product Category 9</td>
                                        <td class="text-center">
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tm-product-name">Product Category 10</td>
                                        <td class="text-center">
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tm-product-name">Product Category 11</td>
                                        <td class="text-center">
                                            <a href="#" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table container -->
                        <button class="btn btn-primary btn-block text-uppercase mb-3">
                            Add new category
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MedTech\resources\views\Admin\products.blade.php ENDPATH**/ ?>