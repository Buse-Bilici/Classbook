<?php
session_start();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){  
    $("img").hide();
});
$(document).click(function(){ 
    $("img").fadeIn(2000);  
});
</script>

<html>
<head>
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.table {  
  max-width: fit-content;
  margin-left: auto;
  margin-right: auto; 
}
</style>
</head>
<body>

<div id="image">
    <img src="iaulogo.jpeg" height="500" width="500">
</div>
<br>
<div class="table">
    <table>
        <tr>
            <td colspan="2"><b>enter your information:</b></td>
        </tr>
        <form action="form2.php" method="post">
            <tr>
                <td>User Name:</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Student ID:</td>
                <td><input type="text" name="student_number" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit"></td>
            </tr>
        </form>
    </table>
</div>
</body>
</html>
