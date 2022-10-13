<h3 class="add-heading">Add Users</h3>
<form class="add-form" id="user-add">
  <div class="row">
    <div class="form-group col-sm-6">
      <label for="first_name">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
    </div>
    <div class="form-group col-sm-6">
      <label for="last_name">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-sm-6">
      <label for="email">Email Id</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Email Id">
    </div>
    <div class="form-group col-sm-6">
      <label for="password">Password</label>
      <input type="text" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-sm-4">
      <label for="user_type">User Type</label>
      <select class="form-control" name="user_type" id="user_type">
        <option>Select User Type</option>
        <?php foreach ($user_types as $key => $value) { ?>
          <option value="<?= $value['id'] ?>"><?= $value['display_name'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group col-sm-4">
      <label for="gender_id">Gender</label>
      <select class="form-control" name="gender_id" id="gender_id">
        <option>Select Gender</option>
        <?php foreach ($gender_details as $key => $value) { ?>
          <option value="<?= $value['id'] ?>"><?= $value['display_name'] ?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-sm-3 for-student">
      <label for="class">Class</label>
      <select class="form-control" name="class" id="class">
        <option>Select Class</option>
        <?php foreach ($class_details as $key => $value) { ?>
          <option value="<?= $value['id'] ?>"><?= $value['display_name'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group col-sm-3 for-student">
      <label for="section">Section</label>
      <select class="form-control" name="section" id="section">
        <option>Select Section</option>
        <?php foreach ($section_details as $key => $value) { ?>
          <option value="<?= $value['id'] ?>"><?= $value['display_name'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group col-sm-3 for-staff">
      <label for="mobile_no">Mobile No</label>
      <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile No">
    </div>
    <div class="form-group col-sm-3 for-staff">
      <label for="telephone_no">Telephone No</label>
      <input type="text" class="form-control" id="telephone_no" name="telephone_no" placeholder="Telephone No">
    </div>
    <div class="form-group col-sm-3 for-all">
      <label for="dob">DOB</label>
      <input type="text" class="form-control" id="dob" name="dob" placeholder="DOB">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-sm-12">
      <button type="submit" class="btn btn-primary add-form-submit-btn">Save</button>
      <button type="button" class="btn btn-danger add-form-reset-btn">Reset</button>
    </div>

  </div>
</form>