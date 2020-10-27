<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Proctor Information</title>
    <link rel="stylesheet" href="main.css" />
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  </head>
  <body>
  <?php 
  if (isset($_GET['signup'])) {
    if ($_GET['signup'] == 'not') {
      echo '<script>alert("Email is already registered\nClick ok to re-enter value ")</script>';
    }
    if ($_GET['signup'] == 'success') {
      echo '<script>alert("Email Successfully registered !\nClick ok to login with your Id")</script>';
    }
  }
  if (isset($_GET['login'])) {
    if ($_GET['login'] == 'wrongInfo') {
      echo '<script>alert("Wrong Email or Password\nClick ok to re-enter value ")</script>';
    }    
  }
  ?>
    <div class="bg">
      <div class="home">
        <div class="wrapper">
          <div class="container" id="container">
            <div class="form-container sign-up-container">
              <!--Teacher Register-->
              <form action="teacherReg.php" method="POST">
                <h1>Create A Teacher Account</h1>
                <input id="t_name" type="text" name="t_name" placeholder="Name" />
                <input id="t_email" type="email" name="t_email" placeholder="Email" />
                <input id="t_password" type="password" name="t_password" placeholder="Password" />
                <button>SignUp</button>
              </form>
            </div>
            <div class="form-container sign-in-container">
              <!--Teacher Login-->
              <form action="teacherLogin.php" method="POST">
                <h1>Log In As Teacher</h1>
                <input id="t_emaill" type="email" name="t_emaill" placeholder="Email" />
                <input id="t_namel" type="text" name="t_namel" placeholder="Name" />
                <input id="t_passwordl" type="password" name="t_passwordl" placeholder="Password" />
                <!--<a href="#">Forgot Your Password</a>-->

                <button>Log In</button>
              </form>
            </div>
            <div class="overlay-container">
              <div class="overlay">
                <div class="overlay-panel overlay-left">
                  <h1>Registered Already? Log In!</h1>
                  <p>
                    To see the students information please login with your
                    personal info
                  </p>
                  <button class="ghost" id="signIn">Log In</button>
                </div>
                <div class="overlay-panel overlay-right">
                  <h1>Dont Have an Account? Make one!</h1>
                  <p>Enter your details and make your account!</p>
                  <button class="ghost" id="signUp">Sign Up</button>
                </div>
              </div>
            </div>
          </div>

          <script type="text/javascript">
            const signUpButton = document.getElementById("signUp");
            const signInButton = document.getElementById("signIn");
            const container = document.getElementById("container");

            signUpButton.addEventListener("click", () => {
              container.classList.add("right-panel-active");
            });
            signInButton.addEventListener("click", () => {
              container.classList.remove("right-panel-active");
            });
          </script>

          
          <div class="main_content">
            <div class="info">
              <!----<div><h1>Idhar Login and Sign up page aayega</h1></div>
     
          <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos perferendis eos? Consequuntur!</div>
          <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos perferendis eos? Consequuntur!</div>--->
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
