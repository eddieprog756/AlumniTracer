<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

?>

<?php include('dbcon.php');
 session_start();
if (isset($_POST['submit'])){	
$user = $_POST['user'];
$password = sha1($_POST['password']);

        $sql = "select * from adminuser where user = '$user' and password = '$password'";
        $result = mysqli_query($conn,$sql);
                        if ($result->num_rows> 0){
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION['id'] = $row['id'];
                        header("Location:homead.php");
      }else{
                            echo "<script>alert('Passwordor Email incorrect, please check again')</script>";
                        }

}?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
     body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url('../admin/image//mustbg.jpg'); /* Replace 'your-image.jpg' with your actual image path */
        background-size: cover;
        background-position: center;
        background-color: rgba(0, 0, 0, 0.5);
    }
    
    .container {
        max-width: 500px;
        margin: 100px auto;
        background-color:#10274A;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0px 0px 10px rgba(0, 4, 0, 10);
    }
    
    .logo {
        text-align: center;
        margin-bottom: 20px;
    }
    
    .logo img {
        width: 130px;
        border-radius: 5%;
    }
    
    h1, h2 {
        text-align: center;
        color: #fff;
    }
    
    input[type="text"], input[type="password"], input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    
    input[type="submit"] {
        background-color: #28a745 ;
        border-color: #28a745;
        color: #fff;
        font-size: 16px;
        transition: background-color 0.3s;
    }
    
    input[type="submit"]:hover {
        background-color:seagreen;
        border-color: seagreen;
    }
    
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: center;
    }
    
    ul li {
        display: inline-block;
        margin: 0 10px;
    }
    
    ul li a {
        text-decoration: none;
        color: #fefefe;
        font-weight: bold;
        transition: color 0.2s;
    }
    
    ul li a:hover {
        color: #3ff3;
    }

    #labels {
        color: #fefefe;
        font-weight: 600;
    }
    .links{
        color:#28a745;
        text-decoration: underline;
    }
    
</style>
</head>

<body>


    <div class="container">
        <div class="logo">
            <img src="../admin/image/must.png" alt="Logo">
        </div>
        <h1>Alumni Tracer System</h1>
        <!-- <h2>MUST</h2> -->
        <form action="#" method="POST">
            <h2>Please Enter Details</h2>
            <label id="labels" for="user">Username:</label>
            <input type="text" id="user" name="user" placeholder="Enter Username" required>
            <label id="labels" for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login" style="width: 80px; ">
            <a href="#" class="links" style="text-decoration: none; justify-content:flex-end; color:#fff; margin-left: 270px;">Forgot Password</a>
        </form>
        <ul>
            <li><a href="../index.php">Back To Home</a></li>
        </ul>
    </div>
</body>
</html>
