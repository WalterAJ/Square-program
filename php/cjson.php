
<?php  
$servername = "localhost";
$username = "root";
$password = "";
$mysqlname = "massage"; 
$json = '';
$data = array();
   session_start();
class User 
{

public $session;
public $type;
public $email;
public $address;
public $length;
};


$conn = mysqli_connect($servername, $username, $password, $mysqlname);
$sql="set names utf8";
    mysqli_query($conn,$sql); 

$sql = "select session,type,email,address,length from booking
       where email='".$_SESSION["email"]."'";
$result = $conn->query($sql);

if($result){
//echo "查询成功";
$row = mysqli_fetch_array($result,MYSQL_ASSOC);

$user = new User();
$user->session = $row["session"];
$user->type = $row["type"];
$user->email = $row["email"];
$user->address = $row["address"];
$user->length = $row["length"];
$data[]=$user;

$json = json_encode($data);//把数据转换为JSON数据.

echo "{".'"user"'.":".$json."}";


}
else{
echo "查询失败";
}

?>  