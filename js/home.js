$(document).ready(function () {

    $(".company").css("display", "block");
    $(".university").css("display", "none");

    $("#uploadFile").on("change", function () {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test(files[0].type)) { // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            reader.onloadend = function () { // set image data as background of div
                $("#imagePreview").css("background-image", "url(" + this.result + ")");
            }
        }
    });

    $('.materialboxed').materialbox();
    $('select').material_select();

    $('input[type=radio][name=occupation]').change(function () {
        var checked = $('input[name=occupation]:checked', '#detailsForm').val();
        if (checked == 1) {
            $(".company").css("display", "block");
            $(".university").css("display", "none");
        }
        if (checked == 2) {
            $(".company").css("display", "none");
            $(".university").css("display", "block");
        }
        if (checked == 3) {
            $(".company").css("display", "none");
            $(".university").css("display", "none");
        }
    });

    validateForm = function () {
        var picture = $("#image").val();
        var fullName = $("#fullName").val();
        var email = $("#email").val();
        var phno = $("#phno").val();
        var branch = $("#branch :selected").val();
        var qual = $("#qual").val();
        var passout = $("#passout :selected").val();
        var currentPlace = $("#currentPlace").val();
        var companyname = $("#companyname").val();
        var designation = $("#designation").val();
        var companyAddress = $("#companyAddress").val();
        var companyReviews = $("#companyReviews").val();
        var course = $("#course").val();
        var university = $("#university").val();
        var universityAddress = $("#universityAddress").val();
        var checked = $('input[name=occupation]:checked', '#detailsForm').val();

        // alert(branch)

        function isValidEmailAddress(emailAddress) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
        };

        var error = "The form has the following errors: \n";
        if (fullName.length == 0) {
            error += "The name entered is invalid \n";
        }
        if (!isValidEmailAddress(email)) {
            error += "The email entered is invalid \n";
        }
        if (phno.length == 0) {
            error += "The phone number entered is invalid \n";
        }
        if (branch == "") {
            error += "The branch selected is invalid \n";
        }
        if (passout == "") {
            error += "The passout year selected is invalid \n";
        }
        if (checked == 1) {
            if (companyname.length == 0) {
                error += "The company name entered is invalid \n";
            }
            if (designation.length == 0) {
                error += "The designation entered is invalid \n";
            }
        }
        if (checked == 2) {
            if (course.length == 0) {
                error += "The course name entered is invalid \n";
            }
            if (university.length == 0) {
                error += "The university name entered is invalid \n";
            }
        }

        if (error == "The form has the following errors: \n") {
            // alert("Success");
            $("#detailsForm")[0].submit();
        }
        else {
            alert(error);
        }
    }

});