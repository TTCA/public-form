<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>

    <h3 class="center-align red-text text-accent-4">TTCA student details</h3>
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
                Are you working or studying? &nbsp;&nbsp;&nbsp;&nbsp;
                <input class="with-gap" name="occupation" type="radio" value="1" id="working" checked />
                <label for="working">Working</label> &nbsp;&nbsp;
                <input class="with-gap" name="occupation" type="radio" value="2" id="studying" />
                <label for="studying">Studying</label> &nbsp;&nbsp;
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

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/home.js"></script>
</body>

</html>