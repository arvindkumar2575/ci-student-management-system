<?= view('manage/login/head') ?>

<div class="form-div text-center">
  <form class="form-signin" id="form-signup" method="POST" action="<?= current_url() ?>">
    <div class="web-head">
      <img class="web-logo" src="<?= base_url() ?>/assets/manage/images/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <p class="web-heading">Please sign up</p>
    </div>
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
    <select name="gender_id" class="form-control" id="selectGenderId">
      <option value="">Select Gender</option>
      <?php foreach ($gender_details as $key => $value) { ?>
        <option value="<?= $value['id'] ?>"><?= $value['display_name'] ?></option>
      <?php } ?>
    </select>
    <select name="user_type" class="form-control" id="selectUserType">
      <option value="">Select User Type</option>
      <?php foreach ($user_types as $key => $value) { ?>
        <option value="<?= $value['id'] ?>"><?= $value['display_name'] ?></option>
      <?php } ?>
    </select>
    
    <input type="hidden" name="form_type" value="signup" />
    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign Up</button>
    <div class="other-pages">
      <a href="<?= base_url('manage') ?>">Login</a>
      <a href="<?= base_url('manage/forget-password') ?>">Forget Password</a>
    </div>
    <p class="mt-3 mb-3 text-muted">&copy; 2021-2022</p>
  </form>
</div>

<?= view('manage/login/footer') ?>