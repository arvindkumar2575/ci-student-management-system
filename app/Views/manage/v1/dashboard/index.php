<?= view('manage/v1/dashboard/head') ?>

<body>
  <?php
  $sesssion = session();
  // echo '<pre>';print_r($_SESSION);die();
  ?>
  <?= view('manage/v1/dashboard/top_nav') ?>

  <div class="container-fluid main-container">
    <div class="row">
      <?= view('manage/v1/dashboard/sidebar_nav') ?>
      
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <?= view('manage/v1/dashboard/main-section/view_page_logics') ?>
      </main>
    </div>
  </div>

  <?= view('manage/v1/dashboard/footer') ?>