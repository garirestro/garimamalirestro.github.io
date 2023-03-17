   <?php
   $con = mysqli_connect('localhost','root');

     if($con){
        echo "connection successful";
     }
     else{
        echo "no connection";
     }

     mysqli_select_db($con, 'garimadata');

     $user = $_POST['user'];
     $email= $_POST['email'];
     $mobile= $_POST['mobile'];
     $pata = $_POST['pata'];
     $comment = $_POST['comment'];

     $query =  " INSERT INTO userinfodata (user, email, mobile, pata, comment)
      VALUES ('$user', '$email', '$mobile', '$pata', '$comment')";

    #INSERT INTO `userinfodata`(`ID`, `user`, `email`, `Mobile`, `address`) VALUES ('[ID]','[$user]','[$email]','[$mobile]','[$address]')

     echo "$query";

     mysqli_query($con,$query);

   

     
 ?>

 

 <!--$user = $_POST['user'];
 $email = $_POST['email'];
 $Mobile = $_POST['Mobile'];
 $address = $_POST['address'];

 $con = new mysqli("localhost","root","","youtubeuserdata");
 if($con->connect_error){
   die("failed to connect : " .$con->connection_error);
 }else{
   $stmt = $con->prepare("insert into userinfodata(user, email, Mobile, address, comment) values()");
   $stmt->bind_param("ssssi",$user, $email, $Mobile, $address);
   $stmt->execute();
   echo "userinfodata sucess";
   $stmt->close();
   $con->close();

 }-->


