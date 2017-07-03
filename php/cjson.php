
<?php  
$servername = "localhost";
$username = "root";
$password = "";
$mysqlname = "massage"; 
$json = '';
$data = array();
class User 
{

public $fname;
public $lname;
/*public $email;
public $number;
public $password;*/
};


$conn = mysqli_connect($servername, $username, $password, $mysqlname);
$sql="set names utf8";
    mysqli_query($conn,$sql); 

$sql = "select first_name,last_name from user";
$result = $conn->query($sql);

if($result){
//echo "查询成功";
$row = mysqli_fetch_array($result,MYSQL_ASSOC);

$user = new User();
$user->fname = $row["first_name"];
$user->lname = $row["last_name"];
$data[]=$user;

$json = json_encode($data);//把数据转换为JSON数据.

echo "{".'"user"'.":".$json."}";


}
else{
echo "查询失败";
}

?>  