<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment System: Home</title>
    <link rel="stylesheet" href="../../css-files/studentpage/student-homepage.css"/>
    <script src="../../backend-files/studentpage/student-homepage.js"></script>
</head>
<body>
    <main>
        <nav>
            <img src="../../../Assets/img/logo-ptc.png" alt="error"/>
            <div class="navigation">
                <a href="#">HOME</a>
                <a href="student-enrollmentpage.php">ENROLLMENT FORM</a>
                <a href="student-programpage.php">PROGRAMS</a>
                <a href="student-contactpage.php">CONTACT</a>
            </div>
            <aside>
                <img src="../../../Assets/img/usericon.png" onclick="UserIcon_Click()"/>
                <p id="Navigation-Button" onclick="Show_Navigation()">Welcome Student</p>
                <div class="Navigation" id="Navigation">
                        <a>Settings</a>
                        <a href="../homepage/homepage.php">Log Out</a>
                </div>
            </aside>
        </nav>
        <div class="Header">
            <h4>Welcome To</h4>
            <h1>PATEROS TECHNOLOGICAL COLLEGE</h1>
            <h2>ONLINE ENROLLMENT SYSTEM</h2>
            <a href="student-enrollmentpage.php">ENROLL NOW!</a>
        </div>
        <div class="Center">
            <div class="Center-Header">
                <h3>Welcome to the Enrollment System at Pateros Technological College</h3>
                <p>
                    Are you ready to embark on your educational journey? Look no further! Our user-friendly platform streamlines the enrollment process, making it hassle-free for students like you. Create your account seamlessly. Just fill in your details, and you’re all set to explore the available courses. Secure Database: Rest assured that your information is in safe hands. Our robust database ensures the confidentiality and integrity of your personal data. Say goodbye to long queues and paperwork! With our system, you can enroll in your desired courses with just a few clicks. Whether you’re a new student or transferring from another institution, we’ve got you covered.
                </p>
            </div>
            <div class="Center-Content">
                <div class="Content-Information">
                    <div class="Information">
                        <h5>Pateros Technological College at A Glance</h5>
                        <p>Great Performance is never luck. It takes a lot of focus, <br> heart, and hard work.</p>
                        <video width="600px" height="350px" autoplay="1" muted="1" controls>
                        <source src="../../../Assets/vid/PATEROS TECHNOLOGICAL COLLEGE (AVP).mp4"/>
                    </video>
                    </div>
                    <img src="../../../Assets/img/School-Image.png" width="600px" height="500"/>
                </div>
                <hr/>
                <div class="Center-Footer">  
                    <div class="Footer-Choices">
                        <div>
                            <img src="../../../Assets/img/program-img.jpg"/>
                            <h5>PROGRAMS</h5>
                            <p>
                                Get a headstart with your careeer. Join us at Pateros technological <br>
                                College. We will help you explore your potentials in your field of <br>
                                interest through our programs.
                            </p>
                            <a href="#">Learn More!</a>
                        </div>
                        <div>
                            <img src="../../../Assets/img/community-img.jpg"/>
                            <h5>OUR COMMUNITY</h5>
                            <p>
                                Be part of our learning community. Become a proficient, <br>
                                technologically-competitive, and compassionate individual through <br>
                                the plethora of innovative programs we offer.
                            </p>
                            <a href="#">Learn More!</a>
                        </div>
                    </div>
                </div>
                <hr/>
            </div>
        </div>
        <div class="Footer">
            <div class="Quotes">
                <h4>LIBRARY</h4>
                <p>
                   <quote>"</quote>There's no word such as 'failure', you're just delayed-So keep on <br>
                    going and don't fade.<quote>"</quote>
                </p>
                <p class="author">- Lorenzo L.</p>
            </div>
            <div class="Footer-Navigation">
                <div class="nav1">
                    <h5>Services</h5>
                    <a href="#">HOME</a>
                    <a href="student-enrollmentpage.php">ENROLLMENT FORM</a>
                    <a href="student-programpage.php">PROGRAMS</a>
                    <a href="student-contactpage.php">CONTACT</a>
                </div>
                <div class="nav2">
                    <img src="../../../Assets/img/logo-ptc.png"/>
                    <h4>PATEROS TECHNOLOGICAL COLLEGE</h4>
                    <p>205 College Street, Sto. Rosario-Kanluran, Pateros, Metro Manila</p>
                    <a href="https://www.paterostechnologicalcollege.edu.ph/">Visit Our Official Page</a>
                    <p class="rights">©2024 Online Enrollment System in Pateros Technological College, All Rights Reserved.</p>
                </div>
                <div class="nav3">
                    <div>
                        <h5>Follow Us</h5>
                        <a href="https://web.facebook.com/ptc1993">
                            <img src="../../../Assets/img/fb icon.png"/>
                            <label>Facebook Page</label>
                        </a>
                        <a href="https://pateroscity.net/">
                            <img src="../../../Assets/img/paterosicon.png"/>
                            <label>Pateros Official Page</label>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>