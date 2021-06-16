
function homePage(){
    $.get("../app/model/homemenu.php", function(data){
        $(".home").replaceWith('<a href="index.php">Home</a>');
        $(".atr1").replaceWith('<a href="login.php">logIn</a>');
        $(".atr2").replaceWith('<a href="Registration.php">signUp</a>');
    });
    }
function studentMenu(){
    $.get("../app/model/homemenu.php", function(data){
        $(".home").replaceWith('<a href="studentFrontEnd.php">Home</a>');
        $(".atr1").replaceWith('<a href="assignments.php">Assignments</a>');
        $(".atr2").replaceWith('<a href=".php">View Grades</a>');
        $(".atr3").replaceWith('<a href="viewvideocourse.php">See Videos</a>');
        $(".atr4").replaceWith('<a href="studentMessageFrontEnd.php">Send Message</a>');
        $(".atr5").replaceWith('<a href="viewMessageStudent.php">View Messages</a>');
        $(".atr6").replaceWith('<a href="logout.php">Log Out</a>');
    });
}    
function teacherMenu(){
    $.get("../app/model/homemenu.php", function(data){
        $(".home").replaceWith('<a href="teacherFrontEnd.php">Home</a>');
        $(".atr1").replaceWith('<a href="addQuestions.php">Add Questions</a>');
        $(".atr2").replaceWith('<a href="viewstudents.php">View Students</a>');
        $(".atr3").replaceWith('<a href="">Add Grades</a>');
        $(".atr4").replaceWith('<a href="addvideo.php">Add Video</a>');
        $(".atr5").replaceWith('<a href="viewAnswers.php">View Answers</a>');
        $(".atr6").replaceWith('<a href="teacherMessageFrontEnd.php">Send Message</a>');
        $(".atr7").replaceWith('<a href="viewMessageTeacher.php">View Message</a>');
        $(".atr8").replaceWith('<a href="logout.php">Log Out</a>');
    });
}    
function videoMenu(){
    $.get("../app/model/homemenu.php", function(data){
        $(".home").replaceWith('<a href="teacherFrontEnd.php">Home</a>');
        $(".atr1").replaceWith('<a href="addvideo.php">Add Video</a>');
        $(".atr2").replaceWith('<a href="deletevideocourse.php">Delete Video</a>');
        $(".atr3").replaceWith('<a href="">Update Video</a>');
    });
}
function studentAffairsMenu(){
    $.get("../app/model/homemenu.php", function(data){
        $(".home").replaceWith('<a href="studentAffairesFrontEnd.php">Home</a>');
        $(".atr1").replaceWith('<a href="AddStudent.php">Add Student</a>');
        $(".atr2").replaceWith('<a href="removestudent.php">Remove Student</a>');
        $(".atr3").replaceWith('<a href="viewStudentsStudentAffairs.php">View Students</a>');
        $(".atr4").replaceWith('<a href="homepage.php">Log Out</a>');
    });
}
function personnelMenu(){
    $.get("../app/model/homemenu.php", function(data){
        $(".home").replaceWith('<a href="personal.php">Home</a>');
        $(".atr1").replaceWith('<a href="AddProfession.php">Add Employee</a>');
        $(".atr2").replaceWith('<a href="removeteacher.php">Remove Employee</a>');
        $(".atr3").replaceWith('<a href="viewteachers.php">View Employee</a>');
        $(".atr4").replaceWith('<a href="homepage.php">Log Out</a>');
    });
}

    