<?
if($_SERVER['REQUEST_METHOD']=="POST"){


  echo "<b>You selected :</b>";

  for($i=0;$i<=count($_POST['categories']);$i++){

    echo $_POST['categories'][$i]."<br>";

  }


}//request
?>
