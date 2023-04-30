<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $con = mysqli_connect("localhost","root","","alumni");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    $name = $_POST["name"];
    $number = $_POST["number"];
    $address = $_POST["address"];
    $course = $_POST["course"];
    $batch = $_POST["batch"];
    $designation = $_POST["designation"];
    $feedback = $_POST["feedback"];
    $exists=false;
        $sql = "INSERT INTO `alumni` ( `name`, `number`, `address`, `course`, `batch`, `designation`, `feedback`) VALUES ('$name','$number', '$address', '$course', '$batch', '$designation', '$feedback' )";
        $result = mysqli_query($con, $sql);
        if ($result){
            $showAlert = true;
        }
    
}
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    body {
        margin: 0px;
        padding: 0px;
        background-image: radial-gradient(circle 588px at 31.7% 40.2%, rgba(225, 200, 239, 1) 21.4%, rgba(163, 225, 233, 1) 57.1%);
        /* background-image: url("/images/orgpink.jpg"); */
        /* background-position: center; */
        /* background-size: cover; */
    }
    .changeopen {
        animation: open .7s ease-in-out;
    }

    @keyframes open {
        0% {
            transform: translateX(250px);
        }
    }

    .changeclose {
        animation: close 1s ease-in-out;
    }

    @keyframes close {
        100% {
            transform: translateX(1700px);
        }
    }

    .links a::before {
        content: '\f046';
        color: orange;
        padding: 10px 0px;
    }

    .contact a::before {
        content: '\f046';
        color: orange;
        padding: 10px 0px;
    }


    /* Dropdown */
    .dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;  
  border: none;
  outline: none;
  color: white;
  /* padding: 14px 16px; */
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

 .dropdown:hover .dropbtn {
  /* background-color: red; */
  color: #F97316;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #F97316;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color:white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #16409E;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>
<?php
       if ($showAlert) {
        echo '	<div id="alert-3" class="flex p-4 mb-4 text-white rounded-lg bg-green-50 dark:bg-green-600 dark:text-white" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
          Hey, You got successfully signed up to our website 😍👍.
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-600 dark:text-white dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </div>';
        } 
        ?>
    
    <nav class="navbar text-sm text-white bg-[#01305D]">
        <div class="flex justify-between items-center pt-1 pl-3 md:hidden">
            <div class="logo flex text-lg">
                <img src="/images/logo.png" alt="Logo" class="h-7">
                <div class="font-bold"><a href="index.html">codeGMU</a></div>
            </div>
            <div class="bars block lg:hidden float-right pr-3 z-10 md:hidden" name="manu" id="sideicon">
                <div class="bar h-0.5 w-5 bg-white mt-1"></div>
                <div class="bar h-0.5 w-5 bg-white mt-1"></div>
                <div class="bar h-0.5 w-5 bg-white mt-1"></div>
            </div>
        </div>
        <div class="mainav hidden md:block px-3">
            <ul class="text-white space-x-10 overflow-hidden px-4 bg-opacity-0 font-bold lg:text-lg">
                <div class="float-left text-lg font-bold flex justify-center items-center lg:mt-2 lg:ml-12">
                    <img src="/images/logo.png" alt="logo" class="h-9">
                    <li class="float-left text-lg font-bold">codeGMU</li>

                </div>
                <div class="lis py-2 space-x-7">
                    <li class="float-right hover:cursor-pointer hover:text-orange-500 px-5"><a href="placement.html"> Placement</a></li>
                    <li class="float-right hover:cursor-pointer hover:text-orange-500 px-2"><a href="alumniregistration.php"> Alumni Connect</a></li>
                    <!-- <li class="float-right hover:cursor-pointer hover:text-orange-500 px-2"><a href="outreachactivity.html"> Outreach Activity</a></li> -->
                    <li class="float-right hover:cursor-pointer hover:text-orange-500 px-2">
                        <div class="dropdown">
                            <button class="dropbtn lg:mt-2">Outreach Activity 
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                              <a href="mentormentee.html">Mentor Mentee</a>
                              <a href="seminar.html">Seminar</a>
                              <a href="webinar.html">Webinar</a>
                              <a href="ptm.html">Parent Teacher Meeting</a>
                            </div>
                          </div> 
                    </li>
                    <!-- <li class="float-right hover:cursor-pointer hover:text-orange-500"><a href="studentcorner.html"> Student Corner</a></li> -->
                    <li class="float-right hover:cursor-pointer hover:text-orange-500 px-2"><a href="faculty.html"> Faculty</a></li>
                    <li class="float-right hover:cursor-pointer hover:text-orange-500 px-2"><a href="university.html"> University</a></li>
                    <li class="float-right hover:cursor-pointer hover:text-orange-500 px-2"><a href="index.html"> Home</a></li>
                </div>
            </ul>
        </div>
        <ul class="bg-[#1545B3] font-bold right-1 top-1 w-60 hidden float-right z-40 absolute rounded-md" id="sidebar">
            <div class="flex justify-between">
                <li class="text-xs p-2 "><a href="index.html">Home</a></li>
                <img src="/images/crossicon.png" alt="cross icon" class="h-4 m-2" id="cross">
            </div>
            <hr>
            <li class="text-xs p-2 "><a href="university.html">University</a></li>
            <hr>
            <li class="text-xs p-2 "><a href="faculty.html">Faculty</a></li>
            <hr>
            <li class="text-xs p-2 "><a href="alumniregistration.php">Alumni Connect</a></li>
            <hr>
            <li class="text-xs p-2 text-white"><a href="placement.html">Placement</a></li>
            <hr>
            <li class="text-xs p-2 text-white"><a href="studentcorner.html">Student Corner</a></li>
            <hr>
            <li class="text-xs p-2 text-white"><a href="mentormentee.html">Mentor Mentee</a></li>
            <hr>
            <li class="text-xs p-2 text-white"><a href="seminar.html">Seminars</a></li>
            <hr>
            <li class="text-xs p-2 text-white"><a href="webinar.html">Webinars</a></li>
            <hr>
            <li class="text-xs p-2 text-white"><a href="ptm.html">Parent Teacher Meetings</a></li>

        </ul>
    </nav>
    <div class="w-100% h-[20vh] bg-[#01305D]">
        
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#01305D" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,186.7C384,181,480,139,576,133.3C672,128,768,160,864,144C960,128,1056,64,1152,64C1248,64,1344,128,1392,160L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <div class="ml-24 mt-5 w-80 border-l-[15px] border-l-[#003e78] flex items-start">
                <div class="text-xl font-bold ml-1 text-[#003e78] border-l-8 border-orange-500 sm:text-2xl">
                    <h2 class="ml-2">Alumni Registration</h2>
                </div>
    </div>
    <br>
    <div class="bg-blue-100 h-screen ml-24 mr-24 rounded-md">
        <form action="#" method="post" class="w-[90%] p-5">
        <div>
                        <label class="block" for="Name">Name<label>
                                <input type="text" placeholder="Name" name="name"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div><br>

        <div>
                        <label class="block" for="">Mobile Number<label>
                                <input type="text" placeholder="Mobile No." name="number"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div><br>

        <div>
                        <label class="block" for="">Address<label>
                                <input type="text" placeholder="Address" name="address"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div><br>

        <div>
                        <label class="block" for="">Course studied @GMU<label>
                                <input type="text" placeholder="Computer Science" name="course"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div><br>

        <div>
                        <label class="block" for="">Duration Of Course(Ex-2010-2013)<label>
                                <input type="text" placeholder="2020-2023" name="batch"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div><br>

        <div>
                        <label class="block" for="">Present Designation<label>
                                <input type="text" placeholder="SDE-II" name="designation"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div><br>

        <div>
                        <label class="block" for="">Feedback<label>
                                <input type="text" placeholder="Feedback" name="feedback"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        </div>

        <div class="mt-6 text-white bg-blue-500 rounded-md px-4 py-2 text-center">  
                  <input type="submit" value="Register">
        </div><br>
        </form>
    </div>



    <footer class="h-[410px] mt-5 bg-[#01305d] md:px-36 text-white text-center">
        <div class="foot py-5 px-1">
            Gangadhar Meher University, Amruta Vihar, Sambalpur, Odisha, Pin- 768004
        </div>
        <hr>
        <div class="flex justify-around">
            <div class="logo flex my-5 justify-start">
                <img src="/images/logo.png" alt="Logo" class="h-6 sm:h-10">
                <div class="font-bold text-base sm:text-2xl">codeGMU</div>
            </div>
            <div class="links text-left my-5">
                <h3 class="font-bold underline underline-offset-8 text-base sm:text-lg pb-5 text-orange-500">QUICK LINKS
                </h3>
                <a href="university.html"> University</a><br>
                <!-- <a href=""> Department</a><br> -->
                <a href="faculty.html"> Faculty</a><br>
                <a href="placement.html"> Placement</a><br>
                <a href="alumniregistration.php"> Alumni Registration</a><br>
            </div>
            <div class="contact text-left my-5">
                <h3 class="font-bold underline underline-offset-8 pb-5 text-base sm:text-lg text-orange-500">USEFUL LINKS
                </h3>
                <a href="https://exam.gmuniversity.ac.in/"> Examination Website</a><br>
                <a href="http://result.gmuniversity.ac.in/"> Result Website</a><br>
                <a href="https://www.gmuniversity.ac.in"> Official GMU Website</a><br>
                <a href="mailto: gmuniversitysbp@gmail.com"> Mail to University</a><br>
            </div>
        </div>
        <hr>
        <div class="flex justify-center my-3 space-x-4 sm:space-x-6 md:space-x-12 lg:space-x-32">
            <a href="https://www.facebook.com/gmunivsbp"><img class="h-10" src="/images/facebook.png" alt="facebook icon"></a>
            <a href="https://www.instagram.com/gmunivsbp/"><img class="h-10" src="/images/instagram.png" alt="instagram icon"></a>
            <a href="https://www.youtube.com/channel/UCGlhFlVEvPTcTdc_ipcvKqA"><img class="h-10" src="/images/youtube.png" alt="Youtube icon"></a>
            <a href="https://twitter.com/gmunivsbp"><img class="h-10" src="/images/twitter.png" alt="twitter icon"></a>
        </div>
        <hr>
        <div class="protection py-4 ">
            <a href="">© 2023 GM University, All Rights Reserved</a>
        </div>
    </footer>
    <script>
        document.getElementById("sideicon").addEventListener("click", function () {
            document.getElementById("sidebar").classList.remove("hidden");
            document.getElementById("sidebar").classList.add("changeopen");
            document.getElementById("sideicon").style.display = "none";
        });

        document.getElementById("cross").addEventListener("click", function () {
            //document.getElementById("sidebar").classList.remove("changeopen");
            document.getElementById("sidebar").classList.add("changeclose");
            setTimeout(() => {
                document.getElementById("sidebar").classList.add("hidden");
                document.getElementById("sidebar").classList.remove("changeopen");
                document.getElementById("sidebar").classList.remove("changeclose");
                document.getElementById("sideicon").style.display = "block";
                document.body.style.opacity = "1";
            }, 990);

        });
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>