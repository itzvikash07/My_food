
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome|| Foods</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="form">
            <h1>Welcome our website</h1>
            <h3>Please enter detail for delivery</h3>
            <form action="index.php" method="POST" id="form">
               <span>Name:</span>  <input type="text" name="name" class="input" placeholder="Enter your Name ">
               <span>Email:</span>  <input type="email" name="email" class="input" placeholder="Enter your email ">
                
         <span>Phone:</span><input type="number" name="phone" class="input" placeholder="Enter your phone ">
                <span>Age:</span>  <input type="number" name="age" class="input" placeholder="Enter your age">
               <div class="gender"> <span>Gender:</span> <input type="radio" id="male" name="gender" value="male">
                 <label for="male">Male</label><br>
                 <input type="radio" id="female" name="gender" value="female">
                 <label for="female">Female</label><br>
                 <input type="radio" id="other" name="gender" value="other">
                 <label for="other">Other</label></div>
                 <label for="menu" id="input"><span> Menu:</span></label>
                 <select id="order" class="input" name="menu">
                     <option value="pizza" class="input">pizza</option>
                     <option value="burger" class="input">burger</option>
                     <option value="france_fries" class="input">france fries</option>
                     <option value="paneer masala" class="input">paneer masala</option>
                     <option value="momos" selected class="input">momos</option>
                     <option value="butter chicken" class="input">butter chicken</option>
                     <option value="kadai panner" class="input">kadai panner</option>
                     <option value="veg rolls" class="input">veg rolls</option>
                     <option value="cream rolls" class="input">cream rolls</option>
                     <option value="pestries" class="input">pestries</option>
                     <option value="coffee" class="input">coffee</option>
                     <option value="cold coffee" class="input">cold coffee</option>
                     <option value="Veg thikka" class="input">Veg thikka</option>
                   </select>
                 <textarea name="address" class="input" cols="30" rows="10" placeholder="Enter the address"></textarea>
                 <input type="submit" value="submit" id="submit">
             </form>
        </div>
    </div>
</body>
</html><?php
if(isset($_POST['name'])){   
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server , $username , $password);
if(!$con){
    die("Connetion not establised due to " . mysqli_connect_error());
}
// echo"Successfully connect to the databse";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$menu = $_POST['menu'];
$address = $_POST['address'];
 
$sql = "INSERT INTO `order`.`menu` ( `name`, `email`, `phone`, `age`, `gender`, `menu`, `address`, `date`) VALUES ( '$name', '$email', '$phone', '$age', '$gender', '$menu', '$address', current_timestamp());";

if($con->query($sql) == true){
    echo "successfully inserted";
}

$con->close();



}
?>