<?= view('manage/layouts/login/header') ?>


<div class="form-div text-center">

  <form class="form-signin" id="form-login" method="GET" action="<?= current_url() ?>">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
    <img class="mb-4" src="<?= base_url() ?>/assets/manage/images/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" id="inputRemember" name="remember"> Remember me
      </label>
    </div>
    <input type="hidden" name="form-type" value="login" />
    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
    <div class="other-pages">
      <a href="<?= base_url('manage/signup')?>">Sign Up</a>
      <a href="<?= base_url('manage/forget-password')?>">Forget Password</a>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
  </form>
</div>

<?= view('manage/layouts/login/footer') ?>