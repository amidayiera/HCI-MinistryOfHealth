<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" >
        
        <!-- Styles -->
        
    </head>
    <body>
        <div class="container">
            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
                <header class="masthead mb-auto">
                  <div class="inner">
                    <h3 class="masthead-brand">Cover</h3>
                    <nav class="nav nav-masthead justify-content-center">
                      <a class="nav-link active" href="#">Home</a>
                      <a class="nav-link" href="#">Features</a>
                      <a class="nav-link" href="#">Contact</a>
                    </nav>
                  </div>
                </header>
            <nav class="navbar sticky-top navbar-light bg-light">
                <a class="navbar-brand" href="#"> Logo</a>
              </nav>
            <main class="py-4">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/HCI-MinistryOfHealth/resources/views/includes/header.blade.php ENDPATH**/ ?>