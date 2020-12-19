<div class="form-center fade-in">
  <form class="form-regis" method="post" action="./controllers/change_pass.controller.php">
    <h3 class="mb-4 text-primary text-center">Change Password</h3>
    <hr>
    <div class="form-group">
      <label for="oldpass" class="text-info">Old Password</label>
      <input type="password" class="form-control" id="oldpass" name="oldpass" placeholder="Old Password" autofocus
        required>
    </div>

    <div class="form-group">
      <label for="newpass" class="text-info">New Password</label>
      <input type="password" class="form-control" id="newpass" name="newpass" placeholder="New Password" required>
    </div>

    <div class="form-group">
      <label for="repass" class="text-info">Confirm Passord</label>
      <input type="password" class="form-control" id="repass" name="repass" placeholder="Confirm Password" required>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">
      Submit
    </button>
    <p class="mt-5 mb-3 text-muted text-center">© 2020 Cat Shop. All Rights Reserved.</p>
  </form>
</div>