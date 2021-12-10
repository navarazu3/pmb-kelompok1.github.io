<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Mahasiswa</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
</head>

<body>
<?php
    echo form_open('auth/login', ['class' => 'form-signin']);

    echo $error;
    $this->session->unset_userdata('error');
?>
<h2 class="form-signin-heading">PMB</h2>
<table class="table table-bordered">
  <tbody>
      <tr>
          <td>Email</td>
          <td >
            <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
          </td>
      </tr>
      <tr>
          <td>Password</td>
          <td>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </td>
      </tr>
  </tbody>
</table>
<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Login</button> <br />
<?php
    echo form_close();
?>
		<br />
		Belum Punya Akun? <a href="<?php echo site_url('mh/add2');?>">Daftar Disini</a>
</body>

</html>