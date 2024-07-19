<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment System: Contact</title>
    <link rel="stylesheet" href="../../css-files/studentpage/student-enrollment.css"/>
    <script src="../../backend-files/studentpage/student-enrollmentpage.js"></script>
</head>
<body>
    <main>
        <nav>
            <img src="../../../Assets/img/logo-ptc.png" alt="error"/>
            <div class="navigation">
                <a href="student-homepage.php">HOME</a>
                <a href="#">ENROLLMENT FORM</a>
                <a href="student-programpage.php">PROGRAMS</a>
                <a href="student-contactpage.php">CONTACT</a>
            </div>
            <aside>
                <img src="../../../Assets/img/usericon.png"/>
                <p id="Navigation-Button" onclick="Show_Navigation()">Welcome Student</p>
                <div class="Navigation" id="Navigation">
                        <a>Settings</a>
                        <a href="../homepage/homepage.php">Log Out</a>
                </div>
            </aside>
        </nav>
        <section>
            <div class="aside1">
                <div class="aside1-top">
                    <img class="school-img" src="../../../Assets/img/School-Image.png">
                    <img class="user-img" src="../../../Assets/img/UserIcon.png">
                </div>
                <div class="aside1-bottom">
                    <h3>Enrollment Steps & Procedures</h3>
                    <section>
                        <div class="top-section">
                            <div class="button1" id="button1">
                                <h4>Step 1</h4>
                                <p>Basic Information</p>
                                <input type="button" value="View" onclick="button_click('button1')"/>
                            </div>
                            <div class="button2" id="button2">
                                <h4>Step 2</h4>
                                <p>Family Background</p>
                                <input type="button" value="View" onclick="button_click('button2')"/>
                            </div>
                        </div>
                        <div class="bottom-section">
                            <div class="button3" id="button3">
                                <h4>Step 3</h4>
                                <p>Application Approval</p>
                                <input type="button" value="View" onclick="button_click('button3')"/>
                            </div>
                            <div class="button4" id="button4">
                                <h4>Step 4</h4>
                                <p>Payments</p>
                                <input type="button" value="View" onclick="button_click('button4')" disabled/>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="Group-Step1">
                <header>
                    <h4>Basic Information</h4>
                    <p>1 of 4</p>
                    <hr>
                </header>
                <form action="../../backend-files/studentpage/student.enrollmentpage.php" method="POST" name="Step1Form" id="Step1Form">
                    <h5>Fields with * are required</h5>
                    <group>
                        <label for="course">Course *</label>
                        <select required id="course" name="course" onclick="course()">
                            <option value="none" disabled selected></option>
                            <optgroup label="4 Year Course">
                            <option value="bsit">(BSIT) Bachelor of Science in Information Technology</option>
                            <option value="bsoa">(BSOA) Bachelor of Science in Office Administration</option>
                            </optgroup>
                            <optgroup label="2 Year Course">
                            <option id="ccs" value="ccs">(CCS) Certificate in Computer Science</option>
                            <option value="coa">(COA) Certificate in Office Administration</option>
                            <option value="chrm">(CHRM) Certificate in Hotel and Restaurant Management</option>
                            </optgroup>
                        </select>
                    </group>
                    <group>
                        <label for="yearlevel">Year Level Applying For *</label>
                        <select name="yearlevel" id="yearlevel" required>
                            <option value="none" disabled selected></option>
                            <optgroup label="Year Level Applying For"/>
                            <option value="firstyear">Freshman Year (1)</option>
                            <option value="secondyear">Somophore Year (2)</option>
                            <option value="thirdyear">Junior Year (3)</option>
                            <option value="fourthyear">Senior Year (4)</option>
                          </select>
                    </group>
                    <group>
                        <label for="LRN">Learner's Reference Number</label>
                        <input type="text" id="lrn" name="lrn" placeholder="Learner's Reference Number" id="LRN" name="LRN"/>
                    </group>
                    <group>
                        <label for="lastname">Last Name *</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Last Name" required/>
                    </group>
                    <group>
                        <label for="firstname">First Name *</label>
                        <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
                    </group>
                    <group>
                        <label for="middlename">Middle Name </label>
                        <input type="text" id="middlename" name="middlename" placeholder="Middle Name">
                    </group>
                    <group>
                        <label for="suffix">Suffix</label>
                        <input type="text" id="suffix" name="suffix" placeholder="Suffix ex. Jr, II, IV">
                    </group>
                    <group>
                        <label for="birthdate">Birth Date *</label>
                        <input type="date" id="birthdate" name="birthdate" max="2024-06-15" required>
                    </group>
                    <group>
                        <label for="birthplace">Birth Place *</label>
                        <input type="text" id="birthplace" name="birthplace" placeholder="Birth Place" id="Birthdate" required/>
                    </group>
                    <group>
                        <label for="sex">Sex *</label>
                        <select id="sex" name="sex" required>
                            <option value="none" disabled selected></option>
                            <optgroup label="Sex"/>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others, Please Specify</option>
                        </select>
                    </group>
                    <group>
                        <label for="marriagestatus">Marriage Status *</label>
                        <select id="marriagestatus" name="marriagestatus" required>
                            <option value="none" disabled selected></option>
                            <optgroup label="Marriage Status"/>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Divorced</option>
                            <option>Separated</option>
                            <option>Widowed</option>
                            <option>Others, Please Specify</option>
                        </select>
                    </group>
                    <h5>Current Address *</h5>
                    <group>
                        <label for="region">Region *</label>
                        <select id="region" name="region" required>
                            <option value="none" disabled selected></option>
                            <optgroup label="Region"/>
                            <option>NCR - National Capital Region</option>
                            <option>Region I - Ilocos Region</option>
                            <option>Region II – Cagayan Valley</option>
                            <option>Region III – Central Luzon</option>
                            <option>Region IV‑A – CALABARZON</option>
                            <option>MIMAROPA Region</option>
                            <option>Region V – Bicol Region</option>
                            <option>Region VI – Western Visayas</option>
                            <option>Region VII – Central Visayas</option>
                            <option>Region VIII – Eastern Visayas</option>
                            <option>Region VIII – Eastern Visayas</option>
                            <option>Region IX – Zamboanga Peninsula</option>
                            <option>Region X – Northern Mindanao</option>
                            <option>Region XI – Davao Region</option>
                            <option>Region XII – SOCCSKSARGEN</option>
                            <option>Region XIII – Caraga</option>
                            <option>CAR – Cordillera Administrative Region</option>
                            <option>BARMM – Bangsamoro Autonomous Region in Muslim Mindanao</option>
                        </select>
                    </group>
                    <group>
                        <label for="province">Province *</label>
                        <input id="province" name="province" type="text" placeholder="Province"/>
                    </group>
                    <group>
                        <label for="city">City *</label>
                        <input id="city" name="city" type="text" placeholder="City" required/>
                    </group>
                    <group>
                        <label for="barangay">Barangay *</label>
                        <input id="barangay" name="barangay" type="text" placeholder="Barangay" required/>
                    </group>
                    <group>
                        <label for="address">Street Address *</label>
                        <input id="address" name="address" type="text" placeholder="Street Address" required>
                    </group>
                    <input type="submit" name="step1button" id="step1button" class="step1button" value="Save and Proceed"/>
                </form>
            </div>
        </section>
        <footer>
            <div class="Footer-Navigation">
                <div class="nav1">
                    <h5>Services</h5>
                    <a href="student-homepage.php">HOME</a>
                    <a href="#">ENROLLMENT FORM</a>
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
        </footer>
    </main>
</body>
</html>