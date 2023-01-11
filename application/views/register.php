<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="display: flex;">
  <div style="width: 55%; display: flex; align-items: center; justify-content: space-around;">
    <img style="width: 50%;" src="<?= base_url('assets/img/2.png') ?>" alt="..." />
  </div>
  <div style="width: 45%; display: flex; justify-content:center;">
    <div style="border: solid 1px black; border-radius: 10px; margin-top: 5%; margin-bottom: 10%; padding: 5%; width: 70%;">
      <?php
      echo form_open(base_url('index.php/login/save'));?>
      <div class="form-group row">
        <label for="username" class="col-4 col-form-label">Full Name</label>
        <div class="col-8">
          <input id="username" name="username" placeholder="Full Name" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label for="username" class="col-4 col-form-label">Email</label>
        <div class="col-8">
          <input id="email" name="email" placeholder="example@gmail.com" type="email" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-4 col-form-label">Password</label>
        <div class="col-8">
          <input id="password" name="password" placeholder="Password" type="password" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label for="username" class="col-4 col-form-label">No Hp</label>
        <div class="col-8">
          <input id="nohp" name="nohp" placeholder="08XX-XXX-XXXX" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-12">
          <button name="submit" type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
        </div>
      </div>
      <?php form_close(); ?>
    </div>
  </div>
</div>