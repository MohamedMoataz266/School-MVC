
function homePage(){
    $.get("../app/model/homemenu.php", function(data){
        $(".home").replaceWith('<a href="index.php">Home</a>');
        $(".atr1").replaceWith('<a href="login.php">logIn</a>');
        $(".atr2").replaceWith('<a href="registration.php">signUp</a>');
    });
    }
function studentMenu(){
    $.get("../app/model/homemenu.php", function(data){
        $(".home").replaceWith('<a href="studentFrontEnd.php">Home</a>');
        $(".atr1").replaceWith('<a href="assignments.php">Assignments</a>');
        $(".atr3").replaceWith('<a href="videoStudents.php">See Videos</a>');
        $(".atr4").replaceWith('<a href="sendMessage.php">Send Message</a>');
        $(".atr5").replaceWith('<a href="viewMessagesStudent.php">View Messages</a>');
        $(".atr6").replaceWith('<a href="logout.php">Log Out</a>');
    });
}    
function teacherMenu(){
    $.get("../app/model/homemenu.php", function(data){
        $(".home").replaceWith('<a href="teacherFrontEnd.php">Home</a>');
        $(".atr1").replaceWith('<a href="addQuestions.php">Add Questions</a>');
        $(".atr2").replaceWith('<a href="viewstudents.php">View Students</a>');
        $(".atr4").replaceWith('<a href="addVideo.php">Videos</a>');
        $(".atr5").replaceWith('<a href="viewAnswers.php">View Answers</a>');
        $(".atr6").replaceWith('<a href="teacherMessageFrontEnd.php">Send Message</a>');
        $(".atr7").replaceWith('<a href="viewMessageTeacher.php">View Message</a>');
        $(".atr8").replaceWith('<a href="logout.php">Log Out</a>');
    });
}    
function videoMenu(){
    $.get("../app/model/homemenu.php", function(data){
        $(".home").replaceWith('<a href="teacherFrontEnd.php">Home</a>');
        $(".atr1").replaceWith('<a href="addVideo.php">Add Video</a>');
        $(".atr2").replaceWith('<a href="deleteVideo.php">Delete Video</a>');
        $(".atr3").replaceWith('<a href="updateVideo.php">Update Video</a>');
    });
}
function studentAffairsMenu(){
    $.get("../app/model/homemenu.php", function(data){
        $(".home").replaceWith('<a href="studentAffairesFrontEnd.php">Home</a>');
        $(".atr1").replaceWith('<a href="addStudent.php">Add Student</a>');
        $(".atr2").replaceWith('<a href="removeStudent.php">Remove Student</a>');
        $(".atr3").replaceWith('<a href="viewStudents.php">View Students</a>');
        $(".atr4").replaceWith('<a href="logout.php">Log Out</a>');
    });
}
function personnelMenu(){
    $.get("../app/model/homemenu.php", function(data){
        $(".home").replaceWith('<a href="personnel.php">Home</a>');
        $(".atr1").replaceWith('<a href="AddProfession.php">Add Employee</a>');
        $(".atr2").replaceWith('<a href="removeteacher.php">Remove Employee</a>');
        $(".atr3").replaceWith('<a href="viewteachers.php">View Employee</a>');
        $(".atr4").replaceWith('<a href="logout.php">Log Out</a>');
    });
}

    