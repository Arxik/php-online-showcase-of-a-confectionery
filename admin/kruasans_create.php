<?  $user="root";
    $password="";
    $host = "localhost";
    $db="practice";
    $dbh ="mysql:host=".$host.";dbname=".$db.";charset=utf8";
    $pdo = new PDO($dbh,$user,$password);



    $title = $_POST["title"];
    $desc = $_POST["desc"];
    $price = $_POST["price"];
    $imgname = $_POST["imgname"];
    $row="UPDATE deserts SET title=:title,desc=:desc,price=:price,imgname=:imgname";
    $query=$pdo->prepare($row);
    $query->execute(["title"=>$title,"desc"=>$desc,"price"=>$price,"imgname"=>$imgname]);
    echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=kruasans.php">';
 
?>