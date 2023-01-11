<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="display: flex;">
  <div style="width: 55%; display: flex; align-items: center; justify-content: space-around;">
    <img style="width: 50%;" src="<?= base_url('assets/img/2.png') ?>" alt="..." />
  </div>
  <div style="width: 45%; display: flex; justify-content:center;">
    <div style="border: solid 1px black; border-radius: 10px; margin-top: 5%; margin-bottom: 10%; padding: 5%; width: 70%;">
    <?php
    echo form_open(base_url('index.php/login/authentikasi'));
    ?>
      <div class="form-group row">
        <label for="username" class="col-4 col-form-label">Username</label>
        <div class="col-8">
          <input id="email" name="email" placeholder="Email/Username" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-4 col-form-label">Password</label>
        <div class="col-8">
          <input id="password" name="password" placeholder="Password" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-12">
          <button name="submit" type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-12">
          <a href="<?= base_url('index.php/login/create')?>" class="btn btn-primary" style="width: 100%;">Register</a>
        </div>
      </div>
      <div style="text-align: center; margin-bottom: 8%; margin-top: 8%;">
        -- Or Login with --
      </div>
      <div style="display: flex; justify-content: space-between; width: 100%; margin-bottom: 5%;">
        <div style="width: 50%; display: flex;">
          <div style="width: 20%;"><i class="fa fa-facebook-square"></i></div>
          <div style="width: 80%;">Facebook</div>
        </div>
        <div style="width: 50%; display: flex;">
          <div style="width: 20%;"><i class="fa fa-google-plus"></i></div>
          <div style="width: 80%;">Gmail</div>
        </div>
      </div>
      <div style="display: flex; justify-content: space-between; width: 100% ;">
        <div style="width: 50%; display: flex;">
          <div style="width: 20%;"><i class="fa fa-yahoo"></i></div>
          <div style="width: 80%;">Yahoo</div>
        </div>
        <div style="width: 50%; display: flex;">
          <div style="width: 20%;"><i class="fa fa-phone"></i></div>
          <div style="width: 80%;">Phone Number</div>
        </div>
      </div>
      <?php
      form_close();
      ?>
    </div>
  </div>
</div>