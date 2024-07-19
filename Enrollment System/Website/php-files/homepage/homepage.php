<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment System: Homepage</title>
    <link rel="stylesheet" href="../../css-files/homepage/homepage.css"/>
    <script src="../../backend-files/homepage/homepage.js"></script>
</head>
<body>
    <main>
        <nav>
            <img src="../../../Assets/img/logo-ptc.png" alt="error"/>
            <div class="navigation">
                <a href="#" onclick="BackButton()">HOME</a>
                <a href="aboutpage.php">ABOUT</a>
                <a onclick="RegisterForm()">REGISTRATION</a>
                <a href="programpage.php">PROGRAMS</a>
                <a href="contactpage.php">CONTACT</a>
            </div>
        </nav>
        <div class="Header">
            <div class="aside1">
                <h4>PATEROS TECHNOLOGICAL COLLEGE</h4>
                <h2>ONLINE ENROLLMENT SYSTEM</h2>
                <a onclick="RegisterForm()">ENROLL NOW!</a>
            </div>
            <div class="aside2">
                <div class="aside2-content" id="Login-Selection">
                    <div class="aside2-header">
                        <h4>SIGN IN TO YOUR ACCOUNT</h4>
                        <p>Welcome Back, PTCians!</p>
                    </div>
                    <h3>LOGIN AS</h3>
                    <div class="aside2-login-selection">
                        <a onclick="AdminForm()">
                            <img src="../../../Assets/img/admin-icon.png" width="140px" height="140px" />
                            <p>ADMIN</p>
                        </a>
                        <a onclick="StudentForm()">
                            <img src="../../../Assets/img/student-icon.png" width="140px" height="140px" for="student"/>
                            <p>STUDENT</p>
                        </a>
                    </div>
                    <div class="aside2-footer">
                        <p>Not have an Account?</p><a onclick="RegisterForm()">REGISTER HERE</a>
                    </div>
                </div>
                <!-- FORM -->
                <div class="Form" id="Form">
                    <header>
                        <input type="button" onclick="BackButton()" class="back-button" value="←"/>
                        <img src="../../../Assets/img/logo-ptc.png"/>
                        <h1>PATEROS TECHNOLOGICAL COLLEGE</h1>
                        <p>College St., Sto. Rosario-Kanluran Pateros, Metro Manila</p>
                    </header>
                    <!-- ADMIN FORM -->
                    <form action="../../backend-files/homepage/admin-login-backend.php" method="POST" class="AdminForm" id="AdminForm">
                        <h1>ADMINISTRATOR LOGIN</h1>
                        <div>
                            <label for="username-usernamefield">Username</label>
                            <input type="text" id="admin-usernamefield" name="admin_username" required/>
                        </div>
                        <div>
                            <label for="admin-passwordfield">Password</label>
                            <input type="password" id="admin-passwordfield" name="admin_password" required/>
                        </div>
                        <div class="ShowPassword-Group">
                            <input type="checkbox" id="admin-showpassword" onclick="ShowPassword()"/>
                            <label for="admin-showpassword">Show Password</label>
                        </div>
                        <p class="forgotpass">*Forgot Username or Password? Kindly Contact Administrator.</p>
                        <input type="submit" class="login-button" name="submit" value="LOGIN"/>
                    </form>
                    <!-- STUDENT FORM -->
                    <form action="../../backend-files/homepage/student-login-backend.php" method="POST" class="StudentForm" id="StudentForm">
                        <h1>STUDENT LOGIN</h1>
                        <div>
                            <label for="student-usernamefield">Username</label>
                            <input type="text" id="student-usernamefield" name="student_username" required/>
                        </div>
                        <div>
                            <label for="student-passwordfield">Password</label>
                            <input type="password" id="student-passwordfield" name="student_password" required/>
                        </div>
                        <div class="ShowPassword-Group">
                            <input type="checkbox" id="student-showpassword" onclick="ShowPassword()"/>
                            <label for="student-showpassword">Show Password</label>
                        </div>
                        <p class="forgotpass">*Forgot Username or Password? Kindly Contact Administrator.</p>
                        <input type="submit" class="login-button" name="submit" value="LOGIN"/>
                        <div class="footer">
                            <p>Not have an Account?</p><a onclick="RegisterForm()">REGISTER HERE</a>
                        </div>
                    </form>
                </div>
                <div class="RegisterForm" id="RegisterFormGroup">
                    <header>
                        <input type="button" onclick="BackButton()" class="back-button" value="←"/>
                        <img src="../../../Assets/img/logo-ptc.png"/>
                        <h1>PATEROS TECHNOLOGICAL COLLEGE</h1>
                        <p>College St., Sto. Rosario-Kanluran Pateros, Metro Manila</p>
                    </header>
                    <form action="../../backend-files/homepage/student-register-backend.php" method="POST" id="RegisterForm">
                        <h1>CREATE AN ACCOUNT</h1>
                        <group>
                            <label for="student_firstname">First Name</label>
                            <input type="text" id="firstname" name="student_firstname" placeholder="First Name" required/>
                        </group>
                        <group>
                            <label for="student_middlename">Middle Name</label>
                            <input type="text" id="middlename" name="student_middlename" placeholder="Middle Name" required/>
                        </group>
                        <group>
                            <label for="student_lastname">Last Name</label>
                            <input type="text" id="lastname" name="student_lastname" placeholder ="Last Name" required/>
                        </group>
                        <group>
                            <label for="student_phonenumber">Phone Number</label>
                            <input type="tel" id="phonenumber" name="student_phonenumber" pattern="[0-9]{12}" maxlength="12" placeholder="ex: 639123456789" value="63" required/>
                        </group>
                        <group>
                            <label for="student_email">Email Address</label>
                            <input type="email" id="email" name="student_email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
                        </group>
                        <group>
                            <label for="student_username">Username</label>
                            <input type="text" id="username" name="student_username" placeholder="Create a Username" required/>
                        </group>
                        <group class="passwordfield">
                            <label for="student_password">Password</label>
                            <input type="password" id="password" name="student_password" placeholder="Create a password" required/>
                        </group>
                        <group>
                            <label for="student_confirm-password">Confirm Password</label>
                            <input type="password" id="confirm-password" name="student_confirm-password" placeholder="Confirm your password" required/>
                        </group>
                        <input type="submit" class="submit-btn" id="submit" name="submit" value="Create My Account"/>
                    </form>
                </div>
            </div>
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
                            <a href="programpage.php">Learn More!</a>
                        </div>
                        <div>
                            <img src="../../../Assets/img/community-img.jpg"/>
                            <h5>OUR COMMUNITY</h5>
                            <p>
                                Be part of our learning community. Become a proficient, <br>
                                technologically-competitive, and compassionate individual through <br>
                                the plethora of innovative programs we offer.
                            </p>
                            <a href="aboutpage.php">Learn More!</a>
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
                    <a href="#" onclick="BackButton()">HOME</a>
                    <a href="aboutpage.php">ABOUT</a>
                    <a href="#" onclick="RegisterForm()">REGISTRATION</a>
                    <a href="programpage.php">PROGRAMS</a>
                    <a href="contactpage.php">CONTACT</a>
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