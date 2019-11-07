<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "student";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
if(isset($_POST['save']))
{
   $checkbox = $_POST['check'];
        for($i=0;$i<count($checkbox);$i++){
        $check_id = $checkbox[$i];
        mysqli_query($conn,"insert into checkbox (category_id,subcategory_id) values ('1','".$check_id."')") or die(mysqli_error());
            echo "Data added success fully!";
       }
}
?>
    <!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
        <form method="post" action="">
        <input type="checkbox" id="checkItem" name="check[]" value="1">
        <input type="checkbox" id="checkItem" name="check[]" value="2">
        <input type="checkbox" id="checkItem" name="check[]" value="3">
        <input type="checkbox" id="checkItem" name="check[]" value="4">
        <button type="submit" class="btn btn-primary" style="width:200px" name="save">Submit</button>
        </form>
    </body>
    </html>
    
