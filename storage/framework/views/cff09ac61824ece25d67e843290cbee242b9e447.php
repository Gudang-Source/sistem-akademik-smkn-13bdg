<?php if(Auth()->user()->role != '4'): ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php if(Auth()->user()->unreadNotifications->count()): ?>
  <title>(<?php echo e(Auth()->user()->unreadNotifications->count()); ?>) Akademik SMKN 13 Bandung</title>
  <?php else: ?>
  <title>Akademik SMKN 13 Bandung</title>
  <?php endif; ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
  <style>
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
  </style>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('/css/font-awesome.min.css')); ?>">
  <!-- my css -->
  <link rel="stylesheet" href="<?php echo e(asset('/css/mycss.css')); ?>">
  <link rel="stylesheet" href="/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('/css/AdminLTE.min.css')); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  
  <link rel="stylesheet" href="<?php echo e(asset('/css/skins/_all-skins.min.css')); ?>">
  <!-- Pace style -->
  <link rel="stylesheet" href="<?php echo e(asset('/css/pace.css')); ?>">
  <!-- loading style 
  <link rel="stylesheet" href="/css/loading.css">
  -->
  <!-- sweet alert -->
  <link rel="stylesheet" href="<?php echo e(asset('/css/sweetalert.css')); ?>">
  <!-- select 2 -->
  <link rel="stylesheet" href="<?php echo e(asset('/css/select2.min.css')); ?>">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Morris chart 
  <link rel="stylesheet" href="/js/morris.js/morris.css"> -->
  <!-- jvectormap
  <link rel="stylesheet" href="/js/jquery-jvectormap.min.css"> -->
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-datepicker.min.css')); ?>">
  <!-- Daterange picker 
  <link rel="stylesheet" href="/css/daterangepicker.min.css">
  -->
  <!-- bootstrap wysihtml5 - text editor -->
  <!-- <link rel="stylesheet" href="/css/bootstrap3-wysihtml5.min.css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body <?php if(Auth::user()->role =='2'): ?> class="hold-transition fixed skin-red sidebar-mini" <?php elseif(Auth::user()->role == '3'): ?> class="hold-transition skin-green fixed sidebar-mini" <?php else: ?> class="hold-transition skin-purple layout-boxed sidebar-mini" <?php endif; ?>>
<div class="wrapper">

  <?php if(session()->has('notification')): ?>

      <!-- sweet alert -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/sweetalert.css')); ?>">
    <!-- sweet alert -->
    <script src="<?php echo e(asset('/js/sweetalert.js')); ?>"></script>
    <script>
        swal("<?php echo session('notification'); ?>");
    </script>
  <?php endif; ?>

	<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<?php echo $__env->make('layouts.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<?php echo $__env->yieldContent('content'); ?>

	<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('layouts.control-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php if(session()->has('message')): ?>
  <?php echo $__env->make('layouts.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>
      <div class="ajax-content"></div>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->  
</div>
<!-- ./wrapper -->
<?php echo $__env->make('layouts.javascript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
<?php else: ?>
<?php echo $__env->make('errors.banned', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
