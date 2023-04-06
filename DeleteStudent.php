<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
    </head>

    <?php
        $link = mysqli_connect("sdb-58.hosting.stackcp.net", "student4-353031373e87", "ua92-studentAc", "student4-353031373e87");
        // Check connection
        if ($link === false) {
          die("Connection failed: ");
}


?>

<body> 
<div class="navbar">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="ViewStudent.html">Student</a>
                    <a href="ViewParent.html">Parent</a>
                    <a href="ViewTeacher.html">Teacher</a>
                    <a href="ViewClass.html">Class</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="AddStudent.html">Student</a>
                    <a href="AddParent.html">Parent</a>
                    <a href="AddTeacher.html">Teacher</a>
                    <a href="AddClass.html">Class</a>
                </div>
            </div>
			<div class="dropdown">
              <button class="dropbtn">Delete
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a href="delstudent.php">Student</a>
                  <a href="AddParent.html">Parent</a>
                  <a href="AddTeacher.html">Teacher</a>
                  <a href="AddClass.html">Class</a>
              </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="updatestudent.php">Student</a>
                <a href="AddParent.html">Parent</a>
                <a href="AddTeacher.html">Teacher</a>
                <a href="AddClass.html">Class</a>
            </div>
        </div>
            <a href="Contact.html">Contact Us</a>
        </div>

        <br><br><br><br><br><br>
<!-- Code Begins here, front end above was sampled but changed accordingly-->
        <form method="post" action="">
  <label for="student_id">Enter the ID of the student you want to delete:</label>
  <input type="text" id="student_id" name="student_id">
  <input type="submit" name="submit" value="Delete">
</form>
<?php

if (isset($_POST['submit'])) {
  $Pid = $_POST['student_id'];

  $sql = "DELETE FROM Pupils WHERE Pupil_id = $Pid";
  if (mysqli_query($link, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($link);
  }
}
?>
</body>
<!-- ends here -->
</html>