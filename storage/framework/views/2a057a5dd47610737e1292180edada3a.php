<?php $__env->startSection('static'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- title -->
    <title>News</title>

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
    <!-- end search area -->

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Organic Information</p>
                        <h1>News Article</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- latest news -->
    <div class="latest-news mt-150 mb-150">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="<?php echo e($article['url']); ?>" target="_blank">
                            <div class="latest-news-bg" style="background-image: url('<?php echo e($article['urlToImage']); ?>');"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="<?php echo e($article['url']); ?>" target="_blank"><?php echo e($article['title']); ?></a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> <?php echo e($article['author'] ?? 'Unknown'); ?></span>
                                <span class="date"><i class="fas fa-calendar"></i> <?php echo e(\Carbon\Carbon::parse($article['publishedAt'])->format('d M, Y')); ?></span>
                            </p>
                            <p class="excerpt"><?php echo e(\Illuminate\Support\Str::limit($article['description'], 150)); ?></p>
                            <a href="<?php echo e($article['url']); ?>" target="_blank" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="pagination-wrap">
                                <ul>
                                    <?php if($currentPage > 1): ?>
                                    <li><a href="<?php echo e(route('news', ['page' => $currentPage - 1])); ?>">Prev</a></li>
                                    <?php endif; ?>
                                    <?php for($i = 1; $i <= $totalPages; $i++): ?>
                                    <li><a class="<?php echo e($i == $currentPage ? 'active' : ''); ?>" href="<?php echo e(route('news', ['page' => $i])); ?>"><?php echo e($i); ?></a></li>
                                    <?php endfor; ?>
                                    <?php if($currentPage < $totalPages): ?>
                                    <li><a href="<?php echo e(route('news', ['page' => $currentPage + 1])); ?>">Next</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end latest news -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MedTech\resources\views\news.blade.php ENDPATH**/ ?>