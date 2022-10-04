<?= view('manage/layouts/login/head') ?>
<div class="form-div text-center">
  <form class="form-signin" id="form-forget-password" method="POST" action="<?= current_url() ?>">
    <img class="mb-4" src="<?= base_url() ?>/assets/manage/images/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <?php
      $session = session();
      $dat = $session->getFlashdata("message")??"No message";
      // echo $dat;
      // echo '<pre>';print_r($_SESSION);die();

    ?>
    <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus>

    <input type="hidden" name="form-type" value="forget-password" />
    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
    <div class="other-pages">
      <a href="<?= base_url('manage')?>">Login</a>
      <a href="<?= base_url('manage/signup')?>">Sign Up</a>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
  </form>
</div>

<?= view('manage/layouts/login/footer') ?>