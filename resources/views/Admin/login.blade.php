
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đăng nhập </title>

    <!-- Bootstrap -->
    <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="http://127.0.0.1:8000/layout_admin/admin/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://127.0.0.1:8000/layout_admin/admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <?php

use Illuminate\Support\Facades\Session;

        $message=Session::get('message');
        if($message){
          echo '<div style="
          color: red;
          text-align: center;
      ">'.$message.'</div>';
          Session::put('message',null);
        }
      ?>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
                <form action="{{ route('get-login') }}" method="post">
                @csrf
              <h1>Login Form</h1>
              
              <div>
                <!-- <input type="text" class="form-control" placeholder="Username" required="" /> -->
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" required="required" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div>
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" required="required" class="form-control" placeholder="Enter Your Password">
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Log in</button>
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="http://127.0.0.1:8000/register" method="post" >
              <input type="hidden" name="_token" value="JxV0ESBwHRJBpRzPPvJoHvm99SjN6FHr8w3l8MfH">              <h1>Create Account</h1>
                                                    <div>
                <!-- <input type="text" class="form-control" placeholder="Username" required="" /> -->
                <label for="exampleInputEmail1">Name</label>
                <input  type="text"  name="name" class="form-control" required="required" placeholder="Enter Name">
              </div>
              <div>
                <label for="exampleInputEmail1">Email address</label>
                <input  type="email" name="email"  class="form-control" required="required" placeholder="Enter email">
              </div>
              <div>
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input  type="text" name="phone"  class="form-control" required="required" placeholder="Enter phone">
              </div>
              <div>
                <label for="exampleInputEmail1">Password</label>
                <input  type="password" name="password" name="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
              </div>
              
              <div>
                <button type="submit" class="btn btn-default submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
