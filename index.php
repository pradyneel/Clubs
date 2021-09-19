<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <!--***BOOTSTRAP FOR NAVIGATION***-->
            <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
    <!--**HEADER PART  START (HOME SECTION)**-->
    <div class="Header" id="tophearder">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container text-uppercase p-2">
            <a class="navbar-brand font-weight-bold text-white" href="#">COLLEGEvillage</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>

            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto text-uppercase">
                <li class="nav-item active">
                  <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#eventid"> Events </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#clubsdiv"> Clubs </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contactid"> Contact Us </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#footerid"> About Us </a>
                  </li>
                
              </ul>
             </div>
            </div>
          </nav>

          <section class="hearder-section">
              <div class="center-div">
                  <h1 class="font-weight-bold">Find the data you need.</h1>
                  <p>Whether you're a research analyst, policy advisor, school staff,</p>
                <p>interested in learning more about college access, affordability, and success, we can help.</p>
                  <div class="header-buttons">
                 
                  <a href="#contactid">Contact</a>
                  <a href="#footerid">About Us</a>
                </div>
              </div>
          </section>
         
    </div>
    <!--****************HEADER PARTS END (HOME SECTION)***************************-->



    
    <section class="EVENTHEAD" id="eventid">
        <h1 class="eventhead">EVENTS</h1>
        <DIV class="slider2" >
            <?php 
            // Connceting to the DB
            $con = mysqli_connect('localhost', 'root');
            mysqli_select_db($con, 'addevent');

            // Submitting to the DB
            if(isset($_POST['submit'])){
                $eventname = $_POST['eventname'];
                $eventteam = $_POST['eventteam'];
                $regform = $_POST['regform'];
                $files = $_FILES['file'];

                // File name
                $filename = $files['name'];
                $fileerror = $files['error'];
                $filetmp = $files['tmp_name'];

                $fileext = explode('.', $filename);
                $filecheck = strtolower(end($fileext));

                // Check the files in 'png' 'jpg' 'jpeg' format
                $fileextstored = array('png', 'jpg', 'jpeg');
                $querydisplay;


                if(in_array($filecheck, $fileextstored)){
                   //File location of image to be stored 
                    $destinationFile = 'upload/'.$filename;
                    move_uploaded_file($filetmp, $destinationFile);

                    // Storing the values in Database
                    $q = "INSERT INTO `add_event`(`eventname`, `eventteam`, `regform`, `image_path`)
                        VALUES ('$eventname','$eventteam', '$regform', '$destinationFile')";
                    
                    $query = mysqli_query($con, $q);

                }
                
                
            }

            // Display in Slide
            $displayquery = "SELECT * FROM add_event ";
            $querydisplay = mysqli_query($con, $displayquery);

            while($result = mysqli_fetch_array($querydisplay)){

              ?>
                  <div class="row">
                      <input type="radio" name="slider2" checked="checked">
                      <div class="imgBx">
                          <img src="<?php echo $result['image_path']; ?>" alt="img1.jpg">
                          <div class="content2">
                              <h2 style="Background: red;"> <?php echo $result['eventname']; ?></h2>
                              <p>By <?php echo $result['eventteam']; ?></p>
                              <a href="<?php echo $result['regform']; ?>" style="border-style: solid;">Register Here</a>
                          </div>
                      </div>
                  </div>
              <?php
          }
        ?>
        </DIV>
    </section>

 <!--****************START(clubs SECTION)***************************-->
 <section class="clubs" id="clubsdiv">
      <div class="container heading text-center">
        <h1 class="text-center font-weight-bold text-white club">OUR CLUBS</h1>
        <p>YOU CAN APPLY FOR CLUBS BY CLICKING ON APPLY BUTTON</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-12 club2">
            <div class="card text-center">
              <div class="card-header">ECO CLUB</div>
              <div class="card-body">
                <li>Aim to Promote,Monitor</li>
                <li>And Operate The Enviromental</li>
                <li> Activities Of The college</li>
                <li>And Neighborhood Communities For</li>
                <li>The Sound Enviromental Activities.</li>
              </div>
              <div class="card-footer">
                <a href="https://srmrmp.edu.in/students-life/clubs/chapter-club/">READ MORE</a>
              </div>
            </div>

          </div>



          <div class="col-lg-4 col-12 club2">
            <div class="card text-center">
              <div class="card-header">TECH CLUB</div>
              <div class="card-body">
                <li>Tech Club provides</li>
                <li>personal growth,leadership </li>
                <li>and learning opportunities in engineering,</li>
                <li>opportunities in engineering,</li>
                <li>technology, innovation, and design.</li>
                
                
              </div>
              <div class="card-footer">
                <a href="https://srmrmp.edu.in/students-life/clubs/tech-club/">READ MORE</a>
              </div>
            </div>

          </div>


          <div class="col-lg-4 col-12 club2">
            <div class="card text-center">
              <div class="card-header">MUN CLUB</div>
              <div class="card-body">
                <li>MUN is a conference which involves</li>
                <li>extra-curricular activities in which students</li>
                <li>typically role-play delegates</li>
                <li>to the United Nations </li>
                <li>and simulate UN committees.</li>
              </div>
              <div class="card-footer">
                <a href="https://srmrmp.edu.in/students-life/clubs/mun/">READ MORE</a>
              </div>
            </div>

          </div>

          <div class="col-lg-4 col-12 club1">
            <div class="card text-center">
              <div class="card-header">JOURNAL CLUB</div>
              <div class="card-body">
                <li>This club provides a forum</li>
                <li>for the faculty members and the students</li>
                <li>to discuss and interact with</li>
                <li>each other on the published articles</li>
                <li>in their field of interest.</li>
              </div>
              <div class="card-footer">
                <a href="https://srmrmp.edu.in/students-life/clubs/journal-club/">READ MORE</a>
              </div>
            </div>

          </div>

          <div class="col-lg-4 col-12 club1">
            <div class="card text-center">
              <div class="card-header">CAMOGENICS CLUB</div>
              <div class="card-body">
                <li>This club was initiated with the interest</li>
                <li>of students with the motive of tapping</li>
                <li>their hidden imagination and creativity</li>
                <li>through photography and film making,</li>
                <li>by providing them a common work platform.</li>
              </div>
              <div class="card-footer">
                <a href="https://srmrmp.edu.in/students-life/clubs/camogenics-club/">READ MORE</a>
              </div>
            </div>

          </div>

          <div class="col-lg-4 col-12 club1">
            <div class="card text-center">
              <div class="card-header">Club 6</div>
              <div class="card-body">
                <li>----------</li>
                <li>----------</li>
                <li>----------</li>
                <li>----------</li>
                <li>----------</li>
              </div>
              <div class="card-footer">
                <a href="#">Apply</a>
              </div>
            </div>

          </div>


        </div>
      </div>

    </section>
    <!--*****************END(clubs SECTION)***************************-->
    <!--********CONTACT us start********-->
    <section class="contactus" id="contactid">
      <div class="container heading text-center">
        <h1 class="text-center font-weight-bold">CONTACT US</h1>
        <P class="text-capitalize pt-1">We're Here To Help And Answer Any Question You Might Have . We Look Forwar To Hearing From You.. </P>

      </div>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1 formss text-center">
            
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="form-group text-center">
                <input type="text" class="form-control" name="name" placeholder="Enter UserName" id="UserName" required autocomplete="off">
              </div>
              
              <div class="form-group text-center">
                <input type="email" class="form-control" name="mail" placeholder="Enter Email" id="email" required autocomplete="off">
              </div>

              <div class="form-group center">
                <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number" id="mobile" required autocomplete="off">
              </div>

              <div class="Comment text-center ">
                <textarea class="form-control" rows="5" name="message"  placeholder="Enter Your Message" id="comment"></textarea>
              </div>

              <div class="d-flex justify-content-center contactbtn text-center">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </section>

    <?php
      if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $mailTo = "pradyneel@gmail.com";
        $subject = "Contact Request From ".$name;
        $body = '<h2>Contact Request</h2>
          <h4>Name</h4><p>'.$name.'</p>
          <h4>Email</h4><p>'.$email.'</p>
          <h4>Phone</h4><p>'.$phone.'</p>
          <h4>Message</h4><p>'.$name.'</p>
        ';

        $headers = "MIME-Version: 1.0"."\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";

        $header .= "From: ".$name."<".$email.">"."\r\n";

        mail($mailTo, $subject, $body, $headers);
      }
    ?>
    <!--***********Contact us end*************-->
     <!--footer start-->
      <footer class="footersection" id="footerid">
        <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12 footerdiv text-center">
            <div>
              <h3>About Collegevillage</h3>
              <p>CollegeVillage is a unique resource for anyone interested in college affordability, student college life, economic and  diversity, student success, and other characteristics of College students culbs and the colleges events they attend.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12 footerdiv text-center">
            <div>
              <h3>NAVIGATION LINK</h3>
              <li><a href="#tophearder">Home</a></li>
              <li><a href="#eventid">Events</a></li>
              <li><a href="#clubsdiv">Clubs</a></li>
              <li><a href="#contactid">Contact Us</a></li>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 col-12 footerdiv text-center">
            <div>
              <h3>Contact Information</h3>
              <li>College Majors 101
                524 Datura St #207
                West Palm Beach, FL 33401</li>
                <li>  </li>
                
                <li>E: info@collegemajors101.com</li>
                
                <li>P: 561.877.9070</li>
            </div>
          </div>

          <div>
            
        </div>
      </footer>
     <!--footer end-->
    <footer class="footersection" id="footerdiv">
      <div class="container">
        <div class="row">

        </div>
        <div class="mt-5 text-center">
          <p>©2021 CollegeVillage LLC. – All Rights Reserved</p>
        </div>
      </div>
    </footer>
    <!--footer end-->
    <a href="#tophearder"><button onclick="topFunction()" id="myBtn" title="Go to top">&#11165;</button></a>
    </body>
</html>