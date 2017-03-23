<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Slabo+13px" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta property="og:url" content="http://athena.nitc.ac.in/azharullahshariff_b130727cs/ttca/form/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Telugu Cultural Association" />
    <meta property="og:description" content="Alumni and students details form" />
    <meta property="og:image" content="http://athena.nitc.ac.in/azharullahshariff_b130727cs/ttca/form/images/ttca.png" />
    <meta property="og:image:width" content="380" />
    
    <meta name="keywords" content="TTCA, NITC, NITC Telugu Association, NITC Telugu" />
    <meta name="author" content="Azharullah" />

</head>

<body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=402329396807806";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <img src="images/ttca.png" class="responsive-img hide-on-med-and-down" id="ttcalogo">
    <img src="images/nitc.png" class="responsive-img hide-on-med-and-down" id="nitclogo">
    <h3 style="font-family: 'Slabo 13px', serif;" class="center-align red-text text-accent-4"><span style="color: black; font-weight: bolder;">TTCA</span> Alumni - Almamater</h3>
    <h5 style="font-family: 'Slabo 13px', serif;" class="center-align red-text text-accent-4">(The Telugu Cultural Association)</h5>
    <hr style="max-width: 80%;">
    <div class="fb-like" data-href="https://www.facebook.com/ttca.nitc/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
    <div class="fb-share-button" data-href="http://athena.nitc.ac.in/azharullahshariff_b130727cs/ttca/form/" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fathena.nitc.ac.in%2Fazharullahshariff_b130727cs%2Fttca%2Fform%2F&amp;src=sdkpreparse">Share</a></div>
    <hr style="max-width: 80%;">

    <form action="" name="detailsForm" id="detailsForm" method="POST" enctype="multipart/form-data">

        <div class="row imageform center-align">
            <h5 class="center-align padding-top">Profile picture</h5>
            <div id="imagePreview"></div>
            <div class="file-field input-field">
                <div class="btn">
                    <span>Picture</span>
                    <input id="uploadFile" name="uploadFile" type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload your picture">
                </div>
            </div>
        </div>
        <hr class="halfhr">


        <h5 class="center-align padding-top">Personal details</h5>
        <div class="row container">
            <div class="input-field col s6 m6 l4 padding-top">
                <input id="fullName" name="fullName" type="text" required>
                <label for="fullName">Full Name<span class="reqstar">*</span></label>
            </div>
            <div class="input-field col s6 m6 l4">
                <input id="email" name="email" type="email" required>
                <label for="email">Contact Email<span class="reqstar">*</span></label>
            </div>
            <div class="input-field col s6 m6 l4">
                <input id="phno" name="phno" type="number" required>
                <label for="phno">Contact Number<span class="reqstar">*</span></label>
            </div>
            <div class="input-field col s6 m6 l4">
                <select name="branch" id="branch" required>
                    <option value="" disabled selected>Branch (In NITC)</option>
                    <option value="cse">Computer Science</option>
                    <option value="ece">Electronics and Communication</option>
                    <option value="eee">Electrical and Electronics</option>
                    <option value="mech">Mechanical</option>
                    <option value="civ">Civil</option>
                    <option value="che">Chemical</option>
                    <option value="phy">Engineering Physics</option>
                    <option value="bio">Bio Technology</option>
                    <option value="arch">Architechture</option>
                    <option value="math">Mathematics</option>
                    <option value="soms">Management Studies</option>
                    <option value="msc">M.Sc</option>
                </select>
                <label>Branch (In NITC)<span class="reqstar">*</span></label>
            </div>
            <div class="input-field col s6 m6 l4">
                <input id="qual" name="qual" type="text">
                <label for="qual">Qualification</label>
            </div>
            <div class="input-field col s6 m6 l4">
                <select name="passout" id="passout" required>
                    <option value="" disabled selected>Year of Passout (From NITC)</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                </select>
                <label>Year of Passout (From NITC)<span class="reqstar">*</span></label>
            </div>
            <div class="input-field col s6 m6 l4">
                <input id="currentPlace" type="text" name="currentPlace">
                <label for="currentPlace">Current place of residence</label>
            </div>
            <div class="input-field col s6 m6 l4">
                <input id="linkedinProfile" type="text" name="linkedinProfile">
                <label for="linkedinProfile">Link to your LinkedIn Profile</label>
            </div>
        </div>

        <div class="row container">
            <p class="center-align" style="font-size: 1.1rem; color: red;">
                <span>Are you working or studying?</span> <br> 
                <span style="color: black; font-size: smaller;">(Current final year students who are placed can select the first option) </span><br>
                <span style="color: black; font-size: smaller;">(Current final year students going for higher studies can select the second option) </span><br><br>
                <input class="with-gap" name="occupation" type="radio" value="1" id="working" checked />
                <label for="working">Working / Placed</label> &nbsp;&nbsp;&nbsp;&nbsp;
                <input class="with-gap" name="occupation" type="radio" value="2" id="studying" />
                <label for="studying">Studying</label> &nbsp;&nbsp;&nbsp;&nbsp;
                <input class="with-gap" name="occupation" type="radio" value="3" id="nitcstudent" />
                <label for="nitcstudent">Currently a student of NITC</label>
            </p>
        </div>

        <div class="row container company">
            <div class="input-field col s6 m6 l4 padding-top">
                <input id="companyname" type="text" name="companyname">
                <label for="companyname">Current company<span class="reqstar">*</span></label>
            </div>
            <div class="input-field col s6 m6 l4 padding-top">
                <input id="designation" type="text" name="designation">
                <label for="designation">Current Designation<span class="reqstar">*</span></label>
            </div>
            <div class="input-field col s12 m6 l6 padding-top">
                <textarea id="companyAddress" class="materialize-textarea" name="companyAddress"></textarea>
                <label for="companyAddress">Company Address</label>
            </div>
            <div class="input-field col s12 m6 l6 padding-top">
                <textarea id="companyReviews" class="materialize-textarea" name="companyReviews"></textarea>
                <label for="companyReviews">Your reviews about the company (if any)</label>
            </div>
        </div>

        <div class="row container university">
            <div class="input-field col s6 m6 l4 padding-top">
                <input id="course" type="text" name="course">
                <label for="course">Course of Study<span class="reqstar">*</span></label>
            </div>
            <div class="input-field col s6 m6 l4 padding-top">
                <input id="university" type="text" name="university">
                <label for="university">University of Study<span class="reqstar">*</span></label>
            </div>
            <div class="input-field col s12 m6 l6 padding-top">
                <textarea id="universityAddress" name="universityAddress" class="materialize-textarea"></textarea>
                <label for="universityAddress">University Address</label>
            </div>
        </div>

        <a type="submit" onclick="validateForm()" class="waves-effect waves-light btn-large submit btn"><i class="material-icons right">send</i>Submit</a>

    </form>

    <?php
    
        // echo "strindfnfd";

        if (!empty($_POST)){

            require "php/dbconnect.php";
		    // mysql_select_db("azharullah");

            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
            $phno = $_POST['phno'];
            $branch = $_POST['branch'];
            $qual = $_POST['qual'];
            if(empty($qual)){
                $qual = "";
            }
            $passout = $_POST['passout'];
            $currentPlace = $_POST['currentPlace'];
            if(empty($currentPlace)){
                $currentPlace = "";
            }
            $linkedin = $_POST['linkedinProfile'];
            if(empty($linkedin)){
                $linkedin = "";
            }
            $wos = $_POST['occupation'];

            // Personal details upload
            $sql = "SELECT * FROM student_details where email = '$email'";
            $query = mysql_query($sql, $mysql_conn);
            $row = mysql_fetch_assoc($query);
            if(!$row){

                $sql1 = "SELECT id FROM student_details ORDER BY id DESC LIMIT 1;";
                $query1 = mysql_query($sql1, $mysql_conn);
                $row1 = mysql_fetch_assoc($query1);
                $idd = $row1['id'] + 1;

                // Upload profile pictures
                $target_dir = "profile_pictures/";
                $target_file = $target_dir . basename($_FILES["uploadFile"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                // Renaming the file before upload
                $temp = explode(".", $_FILES["uploadFile"]["name"]);
                $newFileName = $target_dir . $idd . '.' . end($temp);
                if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $newFileName)) {
                    // echo "The file ". $newFileName . " has been uploaded.";
                } 
                else {
                    // echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
                    $newFileName = "";
                }

                $sql2 = "INSERT INTO `student_details`(`name`, `branch`, `email`, `phno`, `qualification`, `current_place`, `passout_year`, `photo_name`, `wos`, `linkedin_link`, `referenced_id`) 
                        VALUES ('$fullName', '$branch', '$email', $phno, '$qual', '$currentPlace', $passout, '$newFileName', $wos, '$linkedin', '$idd');";
                $query2 = mysql_query($sql2, $mysql_conn);
                if(!$query2){
                    echo "Cannot upload to db " . mysql_error();
                }

                // Working details upload
                if($wos == 1){
                    $companyname = $_POST['companyname'];
                    $designation = $_POST['designation'];
                    $companyAddress = $_POST['companyAddress'];
                    $companyReviews = $_POST['companyReviews'];
                    $sql3 = "INSERT INTO `students_working_details`(`id`, `current_company`, `designation`, `address`, `reviews`) 
                            VALUES ('$idd', '$companyname', '$designation', '$companyAddress', '$companyReviews');";
                    $query3 = mysql_query($sql3, $mysql_conn);
                    if(!$query3){
                        echo "Cannot upload to db " . mysql_error();
                    }
                }
                if($wos == 2){
                    $course = $_POST['course'];
                    $university = $_POST['university'];
                    $universityAddress = $_POST['universityAddress'];
                    $sql4 = "INSERT INTO `students_studying_details`(`id`, `course`, `university`, `address`) 
                            VALUES ('$idd', '$course', '$university', '$universityAddress');";
                    $query4 = mysql_query($sql4, $mysql_conn);
                    if(!$query4){
                        echo "Cannot upload to db " . mysql_error();
                    }
                }
                echo "<script type='text/javascript'>alert('Thank you for filling the form.');</script>";
            }
            else{
                echo "<script type='text/javascript'>alert('You have already filled in the form with this Email Id');</script>";
            }

        }
        
    ?>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
            <div class="col l6 s12">
                <h5 class="green-text">TTCA, NIT Calicut</h5>
                <p class="grey-text text-lighten-4">For any technical queries, contact:</p>
                <p style="color: #004d40; font-size: 130%;">Azharullah: <span style="color: black">8137905656</span> </p>
                <p class="grey-text text-lighten-4">For all other queries, contact:</p>
                <p style="color: #004d40; font-size: 130%;">Revanth Thangella: <span style="color: black">9037489481</span> </p>
                <p style="color: #004d40; font-size: 130%;">Mail Id: &lt;<a style="color: black;" href="mailto:nitcttca@gmail.com"> nitcttca@gmail.com </a>&gt;</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="green-text">Other Links</h5>
                <ul id="social_links">
                    <li><a class="black-text text-lighten-3" target="_blank" href="https://www.facebook.com/ttca.nitc/"><img style="vertical-align:middle;" src="images/FB.png" height="40px" width="40px"> &nbsp;&nbsp; Facebook</a></li>
                    <li><a class="black-text text-lighten-3" target="_blank" href="https://www.instagram.com/ttca.nitc/"><img style="vertical-align:middle;" src="images/instagram.png" height="40px" width="40px"> &nbsp;&nbsp; Instagram</a></li>
                    <!--<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>-->
                </ul>
            </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center-align" style="color: black;">
            © 2017 TTCA, NIT Calicut
            <!--<a class="grey-text text-lighten-4 right" href="#!">More Links</a>-->
            </div>
        </div>
        </footer>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/home.js"></script>
</body>

</html>