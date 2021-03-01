<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php $this->beginBody() ?>

<div class="wrapper">
   <nav class="main-header navbar navbar-expand navbar-dark navbar-secondary" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a style="margin-top:-10px;" class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="site/index" class="nav-link">Home</a> -->
         <?= Html::a('<span class="nav-link" >HOME</span>', ['/site/index']) ?>
      </li>
 
    </ul>

    <!-- SEARCH FORM -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto mr-4">
        <li class="nav-item d-none d-sm-inline-block">
        <?= Html::a('<span class="nav-link" >Murid</span>', ['/murid/index']) ?>            
      </li>
        <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="site/index" class="nav-link">Home</a> -->
         <?= Html::a('<span class="nav-link" >Kelas</span>', ['/kelas/index']) ?>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <?= Html::a('<span class="nav-link" >Guru</span>', ['/guru/index']) ?>            
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <?= Html::a('<span class="nav-link" >Jadwal</span>', ['/jadwal/index']) ?>            
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <?= Html::a('<span class="nav-link" >Materi</span>', ['/materi/index']) ?>            
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <?= Html::a('<span class="nav-link" >Tugas</span>', ['/tugas/index']) ?>            
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <?= Html::a('<span class="nav-link" >Nilai</span>', ['/nilai/index']) ?>            
      </li> 

    </ul>
   </nav>


  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index.html" class="brand-link">
        <img src="../adminLTE/dist/img/mj bulat.jpg" alt="course" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Dreamy Course</span>
        </a> -->
        <a href="index.html" class="brand-link" >
      <img src="dist/img/Mj.jpeg"  alt="course" class="brand-image img-circle elevation-3"
           style=" height : 25px;">
      <span class="brand-text font-weight-light">Dreamy Course</span>
    </a>


      <!-- <span class="brand-text font-weight-light brand-link ml-5"><b>DREAMY COURSE</b></span> -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
  
        <div class="info">
                    <?= nav::widget([
        'options' => ['class' => "nav-item"],
        'items' => [
           Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li class="nav-item">'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);

    ?>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="index.html" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                MENU UTAMA
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            
            <?= Html::a('<i class="nav-icon fas fa-th"></i><span class="hide-menu">Murid</span>', ['/murid/index']) ?>
        </li>
           <li class="nav-item">
            <?= Html::a('<i class="nav-icon fas fa-th"></i><span class="hide-menu">Kelas</span>', ['/kelas/index']) ?></li>
           <li class="nav-item">
            <?= Html::a('<i class="nav-icon fas fa-th"></i><span class="hide-menu">Guru</span>', ['/guru/index']) ?></li>
           <li class="nav-item"> 
            <?= Html::a('<i class="nav-icon fas fa-th"></i><span class="hide-menu">Jadwal</span>', ['/jadwal/index']) ?></li>
           <li class="nav-item">
            <?= Html::a('<i class="nav-icon fas fa-th"></i><span class="hide-menu">Materi</span>', ['/materi/index']) ?>
          </li>
          <li class="nav-item">
            <?= Html::a('<i class="nav-icon fas fa-th"></i><span class="hide-menu">Tugas</span>', ['/tugas/index']) ?>
          </li>
          <li class="nav-item">
            <?= Html::a('<i class="nav-icon fas fa-th"></i><span class="hide-menu">Nilai</span>', ['/nilai/index']) ?>
          </li>


         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper" style="background-color:LavenderBlush;">

    <div class="content ml-2">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
</div>
<footer class="main-footer">

    <div class="container">
        <p class="pull-left">Dreamy Course <?= date('Y') ?></p>
        <p class="pull-right">jemidamanik@gmail.com</p> 
     
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
