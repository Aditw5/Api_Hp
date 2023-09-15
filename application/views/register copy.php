<!DOCTYPE html>
<html>
<head>
	<title>REST API TOKO HANDPHONE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
        }
    </style>
    <link href="<?php echo base_url()?>assets/img/smartphone.png" rel="icon">
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://img.freepik.com/free-vector/flat-design-api-illustration_23-2149380374.jpg?w=900&t=st=1673812914~exp=1673813514~hmac=c315c57eebc551bcb6fa251182a22aa958b8c97546af3ca860d7329b330c42c9"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="<?php echo site_url('Login/reg_save') ?>" method="post"><br><br><br><br>

          <!-- Email input -->
          <div class="form-outline mb-4"> 
            <label class="form-label" for="form3Example3">Nama Lengkap</label>
            <input id="form3Example3" class="form-control form-control-lg" type="text" name="nama_lengkap"
              placeholder="Enter a valid Username" />
           
          </div>
          <div class="form-outline mb-4"> 
            <label class="form-label" for="form3Example3">Username</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg" name="username"
              placeholder="Enter a valid Username" />
           
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3"> 
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg" name="password"
              placeholder="Enter password" />
           
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <!-- <input class="form-check-input me-2" value="" id="form2Example3" /> -->
              <label class="form-check-label text-center" for="form2Example3">
              
              Dengan mengklik tombol daftar, Anda setuju dengan Syarat & Ketentuan, dan Kebijakan Privasi kami.
              </label>
            </div>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Daftar</button>
          </div>

        </form>
      </div>
    </div>
  </div>

    <!-- Right -->
  </div>
</section>
</body>
</html>
