<?php 
require_once('connection.php');
session_start();

date_default_timezone_set('Asia/Jakarta');

$date = date("Y-m-d H:i:s");

    if(isset($_POST['log_in']))
    {
       if(empty($_POST['user_id']) || empty($_POST['password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else if($_POST['user_id'] == 'admin' && $_POST['password'] == 'admin')
       {
            $_SESSION['admin']=$_POST['user_id'];
            header("location:admin_home.php");
       }
       else
       {
            $query="SELECT * from user_data where username='".$_POST['user_id']."' and password='".$_POST['password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $sql = "INSERT INTO login_info (id, username, login_time)
                VALUES ('', '$_POST[user_id]', '$date')";
                $temp = $conn->query($sql);
                var_dump($temp);


                $_SESSION['User']=$_POST['user_id'];      
                header("location:user_home.php");
            }     
            else
            {
                header("location:login.php?Invalid= Please Enter the correct Username and Password ");
            }
       }
    }
    else
    {
        echo 'Error';
    }

?>