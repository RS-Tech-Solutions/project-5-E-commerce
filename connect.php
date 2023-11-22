<?
   $FullName = $post['FullName'];
   $email = $post['email'];

   $conn = new mysqli('localhost','root','','','log');
   if($conn -> connect_error)
   {
       die('Connection Failed : ' .$conn -> connect_error);
   }
   else
   {
       $stmt = $conn -> prepare("insert into login(FullName, email) values(?,?)");
       $stmt -> bind_param("ss", $FullName, $email);
       $stmt -> execute();
       echo "Submited...";
       $stmt -> close(); 
       $stmt -> close();
   }
?>