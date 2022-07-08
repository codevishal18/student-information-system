<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style.css">
     <style>
        .container{
            width:50%;
            margin:auto;
            position:relative;
        }
        .img{
          height: 300px;
          width: 30%;
        }
      </style>
</head>
<body>

<center>
      <h2>STUDENT INFORMATION SYSTEM</h2>
      <div class="image">
        <img class="img" src="stu.png" alt="student">
      </div>
      <div class="container">
        <form action="" method="post">
           <button type="submit" name="admin_login" class="btn btn-dark">Admin Login</button>
           <button type="submit" name="teacher_login" class="btn btn-dark">Teacher Login</button>
           <button type="submit" name="student_login" class="btn btn-dark">Student Login</button>
         </form>
      </div>
      <?php
            if(isset($_POST['admin_login']))
            {
                header("Location: admin_login.php");
            }
            if(isset($_POST['teacher_login']))
            {
                header("Location: teacher_login.php");
            }
            if(isset($_POST['student_login']))
            {
                header("Location: student_login.php");
            }
      ?>
  </center>
</body>
</html>
