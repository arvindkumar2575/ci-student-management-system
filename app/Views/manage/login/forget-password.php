<?= view('manage/login/head') ?>
<div class="form-div text-center">
  <form class="form-signin" id="form-forget-password" method="POST" action="<?= current_url() ?>">
    <div class="web-head">
      <img class="web-logo" src="<?= base_url() ?>/assets/manage/images/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <p class="web-heading">Forget password</p>
    </div>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus>

    <input type="hidden" name="form_type" value="forget-password" />
    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Send Link</button>
    <div class="other-pages">
      <a href="<?= base_url('manage')?>">Login</a>
      <a href="<?= base_url('manage/signup')?>">Sign Up</a>
    </div>
    <p class="mt-3 mb-3 text-muted">&copy; 2021-2022</p>
  </form>
</div>

<?= view('manage/login/footer') ?>