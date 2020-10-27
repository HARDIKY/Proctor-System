<!DOCTYPE html>
<html lang="en">
<head> 
  <title>Proctor-Login</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="main.css" />
</head>
<style>
  .container {
    margin-left: -180px;
  }
</style>
<body> 
  <!--Alert Messages  -->
<?php 
  if (isset($_GET['signup'])) {
    if ($_GET['signup'] == 'not') {
      echo '<script>alert("Roll no is already registered\nClick ok to re-enter value ")</script>';
    }
    if ($_GET['signup'] == 'success') {
      echo '<script>alert("User Successfully registered !\nClick ok to login with your Id")</script>';
    }
  }
  if (isset($_GET['login'])) {
    if ($_GET['login'] == 'wrongInfo') {
      echo '<script>alert("Wrong Rollno or Password\nClick ok to re-enter value ")</script>';
    }    
  }
    
?>

<!-- FrontEnd Code -->
    <div class="bg">
      <div class="home">
        <div class="wrapper">
          <div class="container" id="container">
            <div class="form-container sign-up-container">
              <!--Student Register-->  
              <form action="studentReg.php" method="POST">
                <h1>Create A Student Account</h1>
                <!--<div class="social-container">
                  <a href="#" class="social"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a href="#" class="social"><i class="fab fa-google"></i></a>
                  <a href="#" class="social"><i class="fab fa-linkedin"></i></a>
                </div>-->
               <!-- <span>or use your email for registration</span>-->
                <input
                  id="rollno"
                  type="text"
                  name="rollno"
                  placeholder="Roll-no"
                  required
                />
                <input
                  id="name"
                  type="name"
                  name="name"
                  placeholder="Name"
                  required
                />
                <input
                  id="email"
                  type="email"
                  name="email"
                  placeholder="Email"
                  required
                />
                <input
                  id="password"
                  type="password"
                  name="password"
                  placeholder="Password"
                  required
                />
                
                <button>SignUp</button>
              </form>
              <!--Student Login-->
            </div>
            <div class="form-container sign-in-container">
              <form action="studentLogin.php" method="POST">
                <h1>Log In As Student</h1>
                <!--<div class="social-container">
                  <a href="#" class="social"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a href="#" class="social"><i class="fab fa-google"></i></a>
                  <a href="#" class="social"><i class="fab fa-linkedin"></i></a>
                </div>
                <span>or use your account</span>-->
                <input id="rollnol" type="text" name="rollnol" placeholder="Rollno" required />
                <input id="name" type="text" name="name" placeholder="Name" required />
                <input id="passwordl" type="password" name="passwordl" placeholder="Password" required />
                <!-- <a href="sendEmail.php">Forgot Your Password</a> -->

                <button>Log In</button>
              </form>
            </div>
            <div class="overlay-container">
              <div class="overlay">
                <div class="overlay-panel overlay-left">
                  <h1>Registered Already? Log In!</h1>
                  <p>
                    To enter the proctor information please login with your
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
            <button class="ghost" type="submit">class</button>
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

          <!-- <div class="sidebar">
           
            <h2>Proctor Information</h2>
            <ul>
              <li>
                <a href="teacherlogin.php"
                  ><i class="fa fa-id-badge"></i> FOR TEACHERS</a
                >
              </li>
              <li>
                <a href="sidenav.php"
                  ><i class="fa fa-book"></i> FOR STUDENTS</a
                >
              </li>
            </ul>
            <div class="social_media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/harrrdikk/"
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
          </div> -->
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
