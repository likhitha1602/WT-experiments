<?php 
session_start();

if($_SESSION["uname"]){
    ?>
    <p>
    <h1 style="color:lightseagreen;font-style:'cursive';">Welcome <?php echo $_SESSION["uname"];?>,</h1>
    </p>
<?php
}
else{
    echo "<h1>Please Login first. </h1>";
}
?>
<style> 
body{
    background-color:lightseagreen;
    background-image:url('db.jpg');
  background-repeat: no-repeat;
  background-size: cover;

}
</style>
<html>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;

}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a  href='profile.php'>PROFILE</a></li>
  <li><a href='try.php'>FEED</a></li>
  <li><a href='friends.php'>FRIENDS</a></li>
  <li><a href='logout.php'>LOGOUT</a></li>
</ul>

</body>
</html>
<?php
$n=$_SESSION["uname"];
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'user';
$con = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);
$query = " SELECT * from image where user_name='$n' ";
$result = mysqli_query($con, $query);

while ($data = mysqli_fetch_assoc($result)) {
?>
<style>
            .box {
                height:500;
                width: 500;
                background-color: independenceblue;
                display:inline-block;
            }
        </style>
<div class='box'>
<br>
    <img src="./uploads/<?=$data['image_name']; ?>"  width="500" height="500">
</div>
<?php
}     
        ?>

        
 