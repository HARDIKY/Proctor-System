<?php
    session_start();
    if (!isset($_SESSION['rollnol'])) {
        header("location:student.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <title>Student Form</title>
    <style>
      body {
        background-color: #bebebe;
      }
    </style>
  </head>
  <body>
    <div class="container mt-3">
      <br />
      <h1>Student Form</h1>
      <br />
      <form action="form1Back.php" method="POST">
        <br /><br />
        <h4>Contact Information</h4>
        <div class="forborder" style="border: solid; padding: 10px">
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Name</label>
              <input
                type="text"
                name="rollno"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="First Name"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="rollno"
                class="form-control"
                id="NameInfo2"
                aria-describedby="emailHelp"
                placeholder="Middle Name"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="rollno"
                class="form-control"
                id="NameInfo3"
                aria-describedby="emailHelp"
                placeholder="Last Name"
              />
            </div>
            <div class="form-group col-md-4">
              <label for="inputPassword4">Enter Id Card Number</label>
              <input
                type="number"
                class="form-control"
                id="exampleInputEmail1"
                placeholder="Mentioned On Id Card"
              />
            </div>
            <div class="form-group col-md-4">
              <label for="inputPassword4">Upload The Id card</label>
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 5px"
              /><br /><br />
            </div>
          </div>
     
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="email"
                name="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Email"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">Mobile</label>
              <input
                type="Number"
                name="phone_no"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Mobile Number "
              />
            </div>
            
          
          <div class="form-group col-md-8">
            <label for="inputAddress2">Enter Your Address</label>
            <input
              type="text"
              class="form-control"
              id="inputAddress2"
              placeholder="Enter The Whole Adress"
            />
          </div>
        </div>
        </div>
        <!-- =================================================Admission Information========================================================================================= -->

        <br /><br />
        <h4>Admission Information</h4>
        <div class="forborder" style="border: solid; padding: 10px">
          <div class="form-row">
            <div class="form-group col-md-2" style="padding-top: 17px;">
              <label for="exampleInputEmail1">Admission Date</label>
              <input
                type="date"
                name="bdate"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Birthdate"
              />
            </div>
            <div class="form-group col-3">
              <label for="dept" style="padding-top:17px;">Department:</label>
              <select name="dept">
                <option value="ME">Mechanical Engineering</option>
                <option value="EC">Electronics And TeleCommunication Engineering</option>
                <option value="CO">Computer Engineering</option>

                <option value="IT">Information Technology</option>
                <option value="CO">Computer Engineering</option>
                <option value="CE">Civil Engineering</option>
              </select>
            </div>
          </div>
 

          <div class="form-row">
            <div class="form-group col-md-3" style="padding-top: 17px;">
              <label for="year">Admined To:</label>
              <select name="year">
                <option value="first">First</option>
                <option value="second">Direct Second</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="dept" style="padding-top:17px;">Currently in:</label>
              <select name="currentyear">
                <option value="first">First</option>
                <option value="second">Second</option>
                <option value="third">Third</option>
                <option value="fourth">Fourth</option>
              </select>
            </div>
            <div class="form-group col-md-3">
                <label for="dept" style="padding-top:17px;">Currently in Sem:</label>
                <select name="currentyear">
                    <option value="first">First</option>
                    <option value="second">Second</option>
                    <option value="third">Third</option>
                    <option value="fourth">Fourth</option>
                    <option value="first">Fifth</option>
                    <option value="second">Sixth</option>
                    <option value="third">Seventh</option>
                    <option value="fourth">Eight</option>
                  
                </select>
              </div>
        </div>
    </div>

        <!-- =================================================Personal Information========================================================================================= -->

        <br /><br />
        <h4>Personal Information</h4>
        <div class="forborder" style="border: solid; padding: 10px 10px">
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">Birth Date</label>
              <input
                type="date"
                name="bdate"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Birthdate"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4">Blood Group</label>
              <input
                type="text"
                name="rollno"
                class="form-control"
                id="NameInfo2"
                aria-describedby="emailHelp"
                placeholder="Enter Your Blood Group"
              />
            </div>
         
            <div class="form-group col">
              <label for="inputPassword4">Any Health Problems?</label>
              <input
                type="text"
                class="form-control"
                id="exampleInputEmail1"
                placeholder="Mention if any"
              />
            </div>
            <div class="form-group col-md-4">
              <label for="inputPassword4">Upload Dcotors Documents</label>
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 5px"
              /><br /><br />
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Hobbies?</label>
              <input
                type="text"
                name="rollno"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Hobbie 1"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="rollno"
                class="form-control"
                id="NameInfo2"
                aria-describedby="emailHelp"
                placeholder="Hobbie 2"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="rollno"
                class="form-control"
                id="NameInfo3"
                aria-describedby="emailHelp"
                placeholder="Hobbie 3"
              />
            </div>
          </div>

          
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Any Sport Activites?</label>
              <input
                type="text"
                name="rollno"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Sport 1"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4">Upload Certificate:</label>
              <input
              type="file"
              name="idpdf"
              id="pdf_file"
              accept="application/pdf"
              style="padding-top: 5px"
            />
            </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputEmail4"></label>
                <input
                  type="text"
                  name="rollno"
                  class="form-control"
                  id="NameInfo1"
                  aria-describedby="emailHelp"
                  placeholder="Sport 2"
                />
              </div>
              <div class="form-group col-md-3">
                <label for="inputEmail4">Upload Certificate:</label>
                <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 5px"
              />
              </div>
              </div>

          </div>
        </div>
      </form>
      <br />
      <br />
    </div>
  </body>
</html>
