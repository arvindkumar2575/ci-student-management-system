<?= view('manage/layouts/login/head') ?>

<div class="form-div text-center">
  <form class="form-signin" id="form-signup" method="POST" action="<?= current_url() ?>">
    <img class="mb-4" src="<?= base_url() ?>/assets/manage/images/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <?php
    $session = session();
    $dat = $session->getFlashdata("message") ?? "No message";
    echo $dat;
    // echo '<pre>';print_r($_SESSION);die();

    ?>
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <div>
      <label for="firstName" class="sr-only">First Name</label>
      <input type="text" name="first_name" id="firstName" class="form-control" placeholder="First Name" autofocus>
      <label for="lastName" class="sr-only">Last Name</label>
      <input type="text" name="last_name" id="lastName" class="form-control" placeholder="Last Name" autofocus>
    </div>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email address">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
    
    <input type="hidden" name="form-type" value="signup" />
    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
    <div class="other-pages">
      <a href="<?= base_url('manage') ?>">Login</a>
      <a href="<?= base_url('manage/forget-password') ?>">Forget Password</a>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
  </form>
</div>

<?= view('manage/layouts/login/footer') ?>