<?php $__env->startSection('content'); ?>
 <!-- <div class="backgroundImage landingPageImage">
    <div id="landingPage">
      <h1 class="landingPageTitle text-uppercase align-text-bottom">kenya ministry of health</h1>
    </div>
  </div>-->
 <style>
     .active
     {
         background-image: <?php echo e(url('/images/landingPage_background7.jpg')); ?>;
     }
     h5{

     }
 </style>
 <script>
     $('.carousel').carousel({
         interval: 5000
     });
 </script>
  <div id="demo" class="carousel slide" data-ride="carousel">
  <!-- The slideshow -->
 <div class="carousel-inner">
     <?php $__currentLoopData = $allnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="text-center carousel-item <?php if($loop->first): ?>active <?php endif; ?>">
             <a href="<?php echo e($news->link); ?>" target="_blank"><img class="d-block mx-auto img-fluid" src=<?php echo e($news->image); ?>></a>
             <div class="carousel-caption d-none d-md-block">
                 <h5><?php echo e($news->title); ?></h5>
             </div>
         </div>

     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="container">

  <div class="card-deck">
    <div class="card mt">
      <img class="card-img-top" src="<?php echo e(asset('images/landingPage_news3.jpg')); ?>" alt="News Icon">
      <div class="card-body">
          <h3 class="card-title">News</h3>
          <p class="card-text">Condimentum mattis pellentesque id nibh. B
          ibendum enim facilisis gravida neque convallis a cras semper auctor.
          Dictumst vestibulum rhoncus.</p>
      </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="<?php echo e(asset('images/landingPage_guidelines3.png')); ?>"  alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title">Health care guidelines</h3>
      <p class="card-text">Condimentum mattis pellentesque id nibh.
      Bibendum enim facilisis gravida neque convallis a cras semper auctor.
      Dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt.
    Ut faucibus pulvinar elementum integer enim neque</p>
    </div>
    </div>

  <div class="card">
    <img class="card-img-top" src="<?php echo e(asset('images/landingPage_location.png')); ?>"  alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title">Health care locations</h3>
      <p class="card-text">Lorem ipsum dolor sit amet,
      consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
      labore et dolore magna aliqua. Enim lobortis scelerisque fermentum dui faucibus in.
    Et netus et malesuada fames ac turpis egestas integer.</p>
    </div>
    </div>
  </div>

  <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="<?php echo e(asset('images/landingPage_events.png')); ?>"  alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title">Events</h3>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Enim lobortis scelerisque fermentum dui faucibus in.
    Et netus et malesuada fames ac turpis egestas integer.</p>
    </div>
    </div>

  <div class="card">
    <img class="card-img-top" src="<?php echo e(asset('images/landingPage_aboutUs.png')); ?>"  alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title">About us</h3>
      <p class="card-text">Amet mauris commodo quis imperdiet massa.
      Egestas diam in arcu cursus. Mi quis hendrerit dolor magna.
      Lorem ipsum dolor sit amet. Tortor at auctor urna nunc id cursus.
    Est pellentesque elit ullamcorper dignissim cras tincidunt.
    </p>
  </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="<?php echo e(asset('images/landingPage_feedback4.png')); ?>" alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title">Feedback</h3>
      <p class="card-text">Gravida neque convallis a cras semper auctor.
      Dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim
      cras tincidunt. Ut faucibus pulvinar elementum integer enim neque..</p>
    </div>
    </div>
    </div>
  </div>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('includes.navBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/HCI-MinistryOfHealth/resources/views/landingPage.blade.php ENDPATH**/ ?>