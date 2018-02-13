<div class="form text-white p-3">
      <!-- <h3 class="text-white text-center">Welcome back!</h3>
      <hr class="bg-white text-white"> -->
      <ul class="tab-group">
        <li class="tab"><a style="font-size: 30px;" href="#signup">Sign-Up</a></li>
        <li class="tab active"><a style="font-size: 30px;" href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">
          <form action="index-login.php" method="post" autocomplete="off">
          
            <div class="row">
              <div class="field-wrap col-lg-6">
            <label style="font-size: 18px;">
              Email <i class="fa fa-envelope"></i><span class="req"></i></span>
            </label>
            <input style="font-size: 18px;" type="email" required class="form-control green-font p-3" name="email"/>
            </div>
          
          <div class="field-wrap col-lg-6">
            <label style="font-size: 18px;">
              Password <i class="fa fa-key"></i><span class="req"></span>
            </label>
            <input style="font-size: 18px;" type="password" required class="form-control text-muted p-3" name="password"/>
          </div>
            </div>
          <button style="font-size: 18px;" class="btn container-fluid button p-4 m-0  button-block" name="login" />Log In</button>
          
          <p class="text-white"><a style="font-size: 18px;" href="forgot.php" class="mt-2 container-fluid p-3 text-white bg-danger btn">Forgot Password?</a></p>
          </form>

        </div>
          
        <div id="signup">
          <form action="index-login.php" method="post" autocomplete="off">
          
          <div class="row">
            <div class="field-wrap col-lg-6">
              <label style="font-size: 18px;">
                Fullname <i class="fa fa-user"></i><span class="req"></span>
              </label>
              <input style="font-size: 18px;" type="text" required class="form-control text-muted p-3" name='firstname' />
            </div>
        
            <div class="field-wrap col-lg-6">
              <label style="font-size: 18px;">
                Username <i class="fa fa-user-o"></i><span class="req"></span>
              </label>
              <input style="font-size: 18px;" type="text" required class="form-control text-muted p-3" name='lastname' />
            </div>
          </div>

          <div class="row">
            <div class="field-wrap col-lg-6">
              <label style="font-size: 18px;">
                Email <i class="fa fa-envelope"></i><span class="req"></span>
              </label>
              <input style="font-size: 18px;" type="email" required class="form-control text-muted p-3" name='email' />
            </div>
        
            <div class="field-wrap col-lg-6">
              <label style="font-size: 18px;">
                Tel-phone <i class="fa fa-phone"></i><span class="req"></span>
              </label>
              <input style="font-size: 18px;" type="text" required class="form-control text-muted p-3" name='tel' />
            </div>
          </div>
          <div class="row">
            <div class="field-wrap col-lg-6">
            <label style="font-size: 18px;">
              Set Password <i class="fa fa-key"></i><span class="req"></span>
            </label>
            <input style="font-size: 18px;" type="password" required class="form-control text-muted p-3" name='password'/>
            </div>
        
            <div class="field-wrap col-lg-6">
            <label style="font-size: 18px;">
              Confirm Password <i class="fa fa-key"></i><span class="req"></span>
            </label>
            <input style="font-size: 18px;" type="password" required class="form-control text-muted p-3" name='cpassword'/>
            </div>
          </div>
          
          <button style="font-size: 18px;" type="submit" class="btn container-fluid button p-4 mt-2 button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div>