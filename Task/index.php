<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aster CMI Hospital</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row" style="color: #FFFFFF;">
            <div class="col-md-1" style="background-color:#FFFFFF;">
                
            </div>
            <div class="col-md-2 pt-3 pb-3" style="background-color:#FFFFFF;">
                <img src="img/logo.png">
            </div>
            <div class="col-md-6 pt-3 pb-3" style="background-color:#FFFFFF;">
                
            </div>
            <div class="col-md-2 pt-3 pb-3" style="background-color:#FFFFFF;">
                <img src="img/slogan.png"> Location<br>
            </div>
            <div class="col-md-1" style="background-color:#FFFFFF;">
                
            </div>
        </div>
    </div>  
    <div class="container-fluid g-0">
        <div class="card bg-dark text-white">
            <img src="img/Group 5.png" class="card-img" alt="...">
            <div class="card-img-overlay">
                <div class="row" style="color: #FFFFFF;">
                    <!-- <div class="col-md-12 g-0 bg-image" style="background-image: url('img/Group\ 5.png');"> -->
                        <div class="col-md-1" >
                            
                        </div>
                        <div class="col-md-6" style="padding: 130px; font-size: 23px;">
                            <b>Aster CMI Academy,<br>
                            Bangalore In Association with<br>
                            George Washington University, USA</b>
                            <p>Announces 2019 Admission, 13th Batch</p>
                        </div>
                        <div class="col-md-1" >
                            
                        </div>
                        <div class="col-md-3 pt-3 pb-0" style="background-color:#FFFFFF; color: #000000;">
                            <h2><p style="color: #174C91;"><b>Contact Us</b></p></h2>
                            <hr width="65px" style="height: 4px; border: none; background: #174C91; opacity: 1;">
                            <form action="contact.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name*</label>
                                    <input type="text" name="name" class="form-control" id="Name1" aria-describedby="emailHelp" placeholder="Your Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPhnumber1" class="form-label">Phone Number*</label>
                                    <input type="tel" name="mobilenum" class="form-control" id="exampleInputPhnumber1" placeholder="Ex: 8511294805" pattern="[0-9]{10}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputemail1" class="form-label">Email Id*</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputPhnumber1" placeholder="Email Id" required>               
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <?php 
                                if(isset($_SESSION['ins'])){ 
                                    unset($_SESSION['ins']);
                                ?>
                                    <p style="color:green;"><b>New record created successfully</b></p>
                                <?php } ?>
                                <?php 
                                if(isset($_SESSION['error'])){ 
                                    unset($_SESSION['error']);
                                ?>
                                    <p style="color:red;"><b>Something wrong, Please try again</b></p>
                                <?php } ?>
                            </form>
                        </div>
                        <div class="col-md-1" >
                            
                        </div>
                    <!-- </div> -->
                    <!-- <div class="bg-image" 
                        style="background-image: url('img/Group\ 5.png');
                        height: 100vh"> -->
                        <!-- <div class="col-md-1" style="background-color:#FFFFFF;">
                            
                        </div>
                        <div class="col-md-6" style="padding: 130px;">
                            <b>Aster CMI Academy,<br>
                            Bangalore In Association with<br>
                            George Washington University, USA</b>
                            <p>Announces 2019 Admission, 13th Batch</p>
                        </div>
                        <div class="col-md-1" style="background-color:#FFFFFF;">
                            
                        </div>
                        <div class="col-md-3 pt-3 pb-3" style="background-color:#FFFFFF; color: #000000;">
                            <h2><p style="color: #174C91;"><b>Contact Us</b></p></h2>
                            <hr width="65px" style="height: 4px; border: none; background: #174C91; opacity: 1;">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name*</label>
                                    <input type="email" class="form-control" id="Name1" aria-describedby="emailHelp" placeholder="Your Name">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPhnumber1" class="form-label">Phone Number*</label>
                                    <input type="tel" class="form-control" id="exampleInputPhnumber1" placeholder="Phone Number">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputemail1" class="form-label">Email Id*</label>
                                    <input type="email" class="form-control" id="exampleInputPhnumber1" placeholder="Email Id">               
                                </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="col-md-1" style="background-color:#FFFFFF;">
                            
                        </div> -->
                    
                    <!-- </div> -->
                </div>

            </div>
          </div>

        <div class="row" style="color: #FFFFFF; font-size: 17px;">
            <div class="col-md-4 px-4 py-5" style="background-color:#55A9E7;">
                3 Years Masters Program in <br><b>Emergency Medicine (MEM) (International)</b>
            </div>
            <div class="col-md-4 px-4 py-5" style="background-color:#2E97DE;">
                Last date of application: <b>10th June 2019</b><br>
                Interview on <b>17th June 2019</b><br>
                Eligibility: <b>MBBS with MCI Registration</b>
            </div>
            <div class="col-md-4 px-4 py-5" style="background-color:#4EB2DD;">
                <b>Last few seats remaining.<br>
                Hurry up</b>
            </div>
        </div>

    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6" style="font-size: 17px;">
                <h2><p style="color: #03465B;"><b>Emergency Medicine (MEM) (International)</b></p></h2>
                <hr width="65px" style="height: 4px; border: none; background: #174C91; opacity: 1;">    
                <p>MEM program partnerships with RRIEM/GWU have been in existence since 2006, and since that time there have been 377 graduates and 305 current residents in training. There is still vast ongoing need for education and training in Emergency Medicine in India.</p> 
                <p>There is no doubt that the MEM partnership programs hold the highest standard of education and training of all EM programs in India, with a strict curriculum, formative and summative assessment, ongoing faculty visits, concurrent local faculty development, weekly evaluation processes, and more</p>
            </div>
            <div class="col-md-6 g-0">
                <img src="img/Bitmap.png" class="img-fluid" alt="...">
            </div>
        </div> 
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6" style="font-size: 17px;">
                <h2><p style="color: #03465B;"><b>Highlights</b></p></h2>
                <hr width="65px" style="height: 4px; border: none; background: #174C91; opacity: 1;">   
                <p><img src="img/checked (5).png" width="21px" Height="21px">   First GWU International Academic Centre in India at Aster MIMS</p>

                <p><img src="img/checked (5).png" width="21px" Height="21px">   Selection through written, attitude and aptitude tests</p>
                    
                <p><img src="img/checked (5).png" width="21px" Height="21px">   MRCEM training opportunities</p>
                    
                <p><img src="img/checked (5).png" width="21px" Height="21px">   Observership in RRIEM GWU, USA</p>
            </div>

            <div class="col-md-6">
            <br><br><br>
            <p><img src="img/checked (5).png" width="21px" Height="21px">   Regular & monthly international faculty support</p>

            <p><img src="img/checked (5).png" width="21px" Height="21px">   Opportunity to get trained under highly skilled emergency  physicians and faculty throughout Aster DM Emergency Network</p>

            </div>
        </div> 
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4" style="font-size: 17px;">
                <h2><p style="color: #03465B;"><b>Contact Information</b></p></h2>
                <hr width="65px" style="height: 4px; border: none; background: #174C91; opacity: 1;">
            </div>
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <div class="d-grid pe-0" style="float: right;">
                    <a href="docs/test.pdf" download>
                        <button class="btn" type="button" style="width: 279px; height: 59px; background-color: #174C91; color: #FFFFFF;">
                            Download Aster Application <img  width="16px" src="img/download.png">
                        </button>
                    </a>                    
                </div>
            </div>
        </div>
        <br> 
    </div>

    <div class="container">
        <div class="row" style="color: #FFFFFF; font-size: 17px;">
            <div class="col-md-3 me-2 px-4 py-5" style="background-color:#55A9E7;">
                <b>
                    Course Director<br>
                    <hr width="65px" style="height: 3px; border: none; background: #FFFFFF; opacity: 1;">
                    <p>Dr. Venugopalan P P</p>
                </b>
                Director & Lead Consultant, Emergency Medicine
            </div>
            <div class="col-md-6">
                <div class="row" style="color: black;">
                    <div class="col-md-5 m-3 p-3 ps-4 shadow-lg bg-body rounded" style="border-color: #D9DEFF;"> 
                        <p>Dr. Jinesh<br>
                        <b>+91 9495411702</b><br></p>
                        <hr width="140px" style="height: 0 px; border: none; background: #C6C6FF; opacity: 1;">
                        <p><img src="img/facebook-placeholder-for-locate-places-on-maps.png"> Aster Kannur</p>
                    </div>
                    <div class="col-md-5 m-3 p-3 ps-4 shadow-lg bg-body rounded" style="border-color: #D9DEFF;"> 
                        <p>Dr. Shailesh Shetty S<br>
                        <b>+91 8123485059</b><br></p>
                        <hr width="140px" style="height: 0 px; border: none; background: #C6C6FF; opacity: 1;">
                        <p><img src="img/facebook-placeholder-for-locate-places-on-maps.png"> Aster CMI Bangalore</p>
                    </div>
                    <div class="col-md-5 m-3 p-3 ps-4 shadow-lg bg-body rounded" style="border-color: #D9DEFF;"> 
                        <p>Dr. Ravi Ranjan<br>
                        <b>+91 9562811926</b><br></p>
                        <hr width="140px" style="height: 0 px; border: none; background: #C6C6FF; opacity: 1;">
                        <p><img src="img/facebook-placeholder-for-locate-places-on-maps.png"> Aster Medcity Kochi</p>
                    </div>
                    <div class="col-md-5 m-3 p-3 ps-4 shadow-lg bg-body rounded" style="border-color: #D9DEFF;"> 
                        <p>Dr. Imran<br>
                        <b>+91 9731681984</b><br></p>
                        <hr width="140px" style="height: 0 px; border: none; background: #C6C6FF; opacity: 1;">
                        <p><img src="img/facebook-placeholder-for-locate-places-on-maps.png"> Aster RV Bangalore</p>
                    </div>
                  </div>
                <!-- <div class="row g-3">
                    <div class="col-md-5 shadow-lg bg-body rounded" style="color: black;">Hello main hu don</div>
                    <div class="col-md-5 shadow-lg bg-body rounded" style="color: black;">Hello main hu don</div>
                </div>
                <div class="row">
                    <div class="col-md-5 shadow-lg bg-body rounded" style="color: black;">Hello main hu don</div>
                    <div class="col-md-5 shadow-lg bg-body rounded" style="color: black;">Hello main hu don</div>
                </div> -->
            </div>
            <div class="col-md-2 px-4 py-5" style="background-color:#00B28C;">
                <b><img src="img/info.png"><br> *COURSE IS NOT RECOGNISED BY MCI</b>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-4" style="background-color: #2E97DE;">
                <p>Course Director</p>
                <hr>
                Dr. Venugopalan P P<br>
                Director & Lead Consultant, Emergency Medicine
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="row row-cols-2">
                        <div class="col">Dr. Jinesh<br>+91 9495411702<br>Aster Kannur</div>
                        <div class="col">Dr. Shailesh Shetty S<br>+91 8123485059<br>Aster CMI Bangalore</div>
                        <div class="col">Dr. Ravi Ranjan<br>+91 9562811926<br>Aster Medcity Kochi</div>
                        <div class="col">Dr. Imran<br>+91 9731681984<br>Aster RV Bangalore</div>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="background-color:#00B28C">
                *THIS COURSE IS NOT RECOGNISED BY MCI 
            </div>
        </div>  -->
    </div>
    <br>
    <div class="container-fluid">
        <div class="row" style="color: #FFFFFF;">
            <div class="col-md-1" style="background-color:#0E233F;">
                
            </div>
            <div class="col-md-3 pt-5 pb-5" style="background-color:#0E233F;">
                <img src="img/Path.png"> Phone<br>
                +91 80 4342 0100 | 2214 7147
            </div>
            <div class="col-md-3 pt-5 pb-5" style="background-color:#0E233F;">
                <img src="img/close-envelope.png"> Email ID<br>
                academics.blr@asterhospital.com
            </div>
            <div class="col-md-1" style="background-color:#0E233F;">
                
            </div>
            <div class="col-md-3 pt-5 pb-5" style="background-color:#0E233F;">
                <img src="img/locate-places-on-maps.png"> Location<br>
                Aster CMI Hospital<br>
                #43/2, New Airport Road, NH 7, Sahakara Nagar, Hebbal, Bangalore-560092, India
            </div>
            <div class="col-md-1" style="background-color:#0E233F;">
                
            </div>
        </div>
        <div class="row" style="color: #FFFFFF;">
            <div class="col-md-1" style="background-color:#0E233F; text-align:center;">
                
            </div>
            <div class="col-md-10" style="background-color:#0E233F; text-align:center;">
                <hr style="height: 0 px; border: none; background: #C6C6FF; opacity: 1;">
                <p>Copyright © 2019 AsterCMI. All Rights Reserved.</p> 
            </div>
            <div class="col-md-1" style="background-color:#0E233F; text-align:center;">
                
            </div>
        </div>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>