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
 <center><h1>RISHTON ACADEMY PRIMARY SCHOOL</h1>
<div class="navbar">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="ViewStudent.php">Student</a>
                    <a href="ViewParent.php">Parent</a>
                    <a href="ViewTeacher.php">Teacher</a>
                    <a href="ViewClass.php">Class</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="AddStudent.php">Student</a>
                    <a href="AddParent.php">Parent</a>
                    <a href="AddTeacher.php">Teacher</a>
                    <a href="AddClass.php">Class</a>
                </div>
            </div>
			<div class="dropdown">
              <button class="dropbtn">Delete
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a href="DeleteStudent.php">Student</a>
                  <a href="DeleteParent.php">Parent</a>
                  <a href="DeleteTeacher.php">Teacher</a>
                  <a href="DeleteClass.php">Class</a>
              </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="UpdateStudent.php">Student</a>
                <a href="UpdateParent.php">Parent</a>
                <a href="UpdateTeacher.php">Teacher</a>
                <a href="UpdateClass.php">Class</a>
            </div>
        </div>
            <a href="Contact.html">Contact Us</a>
        </div>
        <br><br><br><br><br><br>

<!-- Code Begins here, front end above was sampled but changed accordingly-->
        <form method="post" action="AddTeacher.php">
          <label>Teacher Full Name:</label>
          <input type="text" name="Tname">
          <br><br>
          <label>Address:</label>
          <input type="text" name="Address">
          <br><br>
          <label>Email:</label>
          <input type="text" name="Email">
          <br><br>
          <label>Phone Number:</label>
          <input type="text" name="Num">
          <br><br>
          <label>Salary:</label>
          <input type="text" name="Sal">
          <br><br>
          <label>Class ID:</label>
          <input type="text" name="Cid">
          <br><br>
          <input type="submit" name="submit">
      </form>

<?php

if (isset($_POST['submit'])) {

    $Tname= $_POST['Tname'];
    $Addr= $_POST['Address'];
    $Email= $_POST['Email'];
    $Num= $_POST['Num'];
    $Sal= $_POST['Sal'];
    $Cid= $_POST['Cid'];

    $sql = "INSERT INTO Teachers (Teacher_name, Teacher_address, Email, `Phone number`, Salary, Class_Id) VALUES ('$Tname', '$Addr', '$Email', '$Num', '$Sal', '$Cid')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}
$link->close();
?>

</body>
<!-- ends here -->
</html>