<?php
error_reporting(0);
include_once 'dbcon.php';

if(isset($_POST['save_mul']))
{   
    $kap = $_POST["kapostolhs$i"];
    $pap = $_POST["papostolhs$i"];
    $kpa = $_POST["kparalabhs$i"];
    $ppa = $_POST["pparalabhs$i"];
    $sp = $_POST["spd$i"];
    $cost = 0; //allazei mesa ston algorithmo
    $costtime = 0; //allazei mesa ston algorithmo
    $flag = 0 ; //to flag tha ginei 1 an oi poleis paralavis kai apostolis einai swsta
	if($ppa == 'Αλεξανδρούπολη'){
		$ppa = 'Alexandroupoli';
	}
	else if($pap == 'Αλεξανδρούπολη'){
		$pap = 'Alexandroupoli';
		$pap2 = 'Αλεξανδρούπολη';
	}
	
	if($ppa == 'Ηράκλειο'){
		$ppa = 'Heraklion';
		$ppa2 = 'Ηράκλειο';
	}
	else if($pap == 'Ηράκλειο'){
		$pap = 'Heraklion';
	}
	if($ppa == 'Ασπρόπυργος'){
		$ppa = 'Aspropyrgos';
	}
	else if($pap == 'Ασπρόπυργος'){
		$pap = 'Aspropyrgos';
	}
	
	if($ppa == 'Πάτρα'){
		$ppa = 'Patra';
	}
	else if($pap == 'Πάτρα'){
		$pap = 'Patra';
	}
	if($ppa == 'Ιωάννινα'){
		$ppa = 'Ioannina';
	}
	else if($pap == 'Ιωάννινα'){
		$pap = 'Ioannina';
	}
	
	if($ppa == 'Θεσσαλονίκη'){
		$ppa = 'Thessalonikh';
	}
	else if($pap == 'Θεσσαλονίκη'){
		$pap = 'Thessalonikh';
	}
	
	if($ppa == 'Λάρισα'){
		$ppa = 'Larisa';
	}
	else if($pap == 'Λάρισα'){
		$pap = 'Larisa';
	}
	if($ppa == 'Καλαμάτα'){
		$ppa = 'Kalamata';
	}
	else if($pap == 'Καλαμάτα'){
		$pap = 'Kalamata';
	}
	if($ppa == 'Μυτιλήνη'){
		$ppa = 'Mytilini';
	}
	else if($pap == 'Μυτιλήνη'){
		$pap = 'Mytilini';
	}
	
    if ($pap == 'Alexandroupoli') {
     $flag = 1 ;

    }elseif ($pap == 'Heraklion') {
    $flag = 1 ;

    }elseif ($pap == 'Aspropyrgos') {
    $flag = 1 ;

    }elseif ($pap == 'Patra') {
    $flag = 1 ;

    }elseif ($pap == 'Ioannina') {
    $flag = 1 ;

    }elseif ($pap == 'Thessalonikh') {
    $flag = 1 ;

    }elseif ($pap == 'Larisa') {
    $flag = 1 ;

    }elseif ($pap == 'Kalamata') {
    $flag = 1 ;

    }elseif ($pap == 'Mytilini') {
    $flag = 1 ;
    }

    if ($ppa == 'Alexandroupoli') {
    $flag = $flag+1 ;

    }elseif ($ppa == 'Heraklion') {
    $flag = $flag+1 ;

    }elseif ($ppa == 'Aspropyrgos') {
    $flag = $flag+1 ;

    }elseif ($ppa == 'Patra') {
    $flag = $flag+1 ;

    }elseif ($ppa == 'Ioannina') {
    $flag = $flag+1 ;

    }elseif ($ppa == 'Thessalonikh') {
    $flag = $flag+1 ;

    }elseif ($ppa == 'Larisa') {
    $flag = $flag+1 ;

    }elseif ($ppa == 'Kalamata') {
    $flag = $flag+1 ;

    }elseif ($ppa == 'Mytilini') {
    $flag = $flag+1 ;
  }

  if (!($flag == 2)){
    ?>
        <script>
    alert('τα ονόματα των πόλεων δεν είναι δεκτά  , ΠΡΟΣΠΑΘΗΣΕ ΞΑΝΑ');
    window.location.href='index.php';
    

    </script>
        <?php 
  exit();

  }


    //υπολογισμος track id
    date_default_timezone_set("Europe/Athens");
    $timeid=date("h:i:sa");
    $timestamp = strtotime($timeid);
    $firstl = substr($pap, 0, 2);
    $lastl=substr($ppa, 0, 2);
    $trackid=strtoupper($firstl)."$timestamp".strtoupper($lastl);


        /*
ANTISTIXOISI POLWEN ME ARITHMOUS/KOMVOUS
Alexandroupoli     -> 1
Heraklion          -> 2
Aspropyrgos -> 3
Patra              -> 4
Ioannina           -> 5   
Thessalonikh       -> 6
Larisa             -> 7 
Kalamata           -> 8 
Mytilini           -> 9
*/
//set the distance array
$_distArr = array();
$_distArr[1][6] = 3;
$_distArr[1][3] = 10;
$_distArr[1][2] = 15;

$_distArr[2][1] = 15;
$_distArr[2][3] = 10;
$_distArr[2][8] = 4;

$_distArr[3][9] = 8;
$_distArr[3][1] = 10;
$_distArr[3][6] = 5;
$_distArr[3][7] = 2;
$_distArr[3][4] = 2;
$_distArr[3][8] = 3;
$_distArr[3][2] = 10;

$_distArr[4][5] = 3;
$_distArr[4][3] = 2;
$_distArr[4][8] = 2;

$_distArr[5][6] = 1;
$_distArr[5][4] = 3;

$_distArr[6][1] = 3;
$_distArr[6][3] = 5;
$_distArr[6][7] = 1;
$_distArr[6][5] = 1;

$_distArr[7][6] = 1;
$_distArr[7][3] = 2;

$_distArr[8][4] = 2;
$_distArr[8][3] = 3;
$_distArr[8][2] = 4;

$_distArr[9][3] = 8;
//graph for time
$_disttimeArr = array();
$_disttimeArr[1][6] = 1;
$_disttimeArr[1][3] = 1;
$_disttimeArr[1][2] = 1;

$_disttimeArr[2][1] = 1;
$_disttimeArr[2][3] = 1;
$_disttimeArr[2][8] = 2;

$_disttimeArr[3][9] = 1;
$_disttimeArr[3][1] = 1;
$_disttimeArr[3][6] = 1;
$_disttimeArr[3][7] = 1;
$_disttimeArr[3][4] = 1;
$_disttimeArr[3][8] = 1;
$_disttimeArr[3][2] = 1;

$_disttimeArr[4][5] = 1;
$_disttimeArr[4][3] = 1;
$_disttimeArr[4][8] = 1;

$_disttimeArr[5][6] = 1;
$_disttimeArr[5][4] = 1;

$_disttimeArr[6][1] = 1;
$_disttimeArr[6][3] = 1;
$_disttimeArr[6][7] = 1;
$_disttimeArr[6][5] = 1;

$_disttimeArr[7][6] = 1;
$_disttimeArr[7][3] = 1;

$_disttimeArr[8][4] = 1;
$_disttimeArr[8][3] = 1;
$_disttimeArr[8][2] = 2;

$_disttimeArr[9][3] = 1;

$typosapostolis = $sp ;

$costarray = array(50);
$lengtharray = array();
//the start and the end
$a = 4;
$b = 6;

echo "The City ap is:";
echo '<br/>';
echo $row['city_ap'];
print_r($pap);


if ($pap == 'Alexandroupoli') {
  $a = 1;

}elseif ($pap == 'Heraklion') {
  $a = 2;

}elseif ($pap == 'Aspropyrgos') {
  $a = 3;

}elseif ($pap == 'Patra') {
  $a = 4;

}elseif ($pap == 'Ioannina') {
  $a = 5;

}elseif ($pap == 'Thessalonikh') {
  $a = 6;

}elseif ($pap == 'Larisa') {
  $a = 7;

}elseif ($pap == 'Kalamata') {
  $a = 8;

}elseif ($pap == 'Mytilini') {
  $a = 9;
}

if ($ppa == 'Alexandroupoli') {
  $b = 1;

}elseif ($ppa == 'Heraklion') {
  $b = 2;

}elseif ($ppa == 'Aspropyrgos') {
  $b = 3;

}elseif ($ppa == 'Patra') {
  $b = 4;

}elseif ($ppa == 'Ioannina') {
  $b = 5;

}elseif ($ppa == 'Thessalonikh') {
  $b = 6;

}elseif ($ppa == 'Larisa') {
  $b = 7;

}elseif ($ppa == 'Kalamata') {
  $b = 8;

}elseif ($ppa == 'Mytilini') {
  $b = 9;
}


$atime = $a;
$btime = $b;
$mincost = 100000;
$mintime = 100000;
$telos = 0;

if ($a == 1) {
  $telos = 3;

}elseif ($a == 2) {
  $telos = 3;

}elseif ($a == 3) {
  $telos = 7;

}elseif ($a == 4) {
  $telos = 3;

}elseif ($a == 5) {
  $telos = 2;

}elseif ($a == 6) {
  $telos = 4;

}elseif ($a == 7) {
  $telos = 2;

}elseif ($a == 8) {
  $telos = 3;

}elseif ($a == 9) {
  $telos = 1;
}



$i = 0;
$time = 0 ;
settype($i, "integer");


if ($typosapostolis == 'απλή') {

 do {
  
    $length = 0;
  //initialize the array for storing
  $S = array();//the nearest path with its parent and weight
  $Q = array();//the left nodes without the nearest path
  foreach(array_keys($_distArr) as $val) $Q[$val] = 99999;
  $Q[$a] = 0;

  //start calculating
  while(!empty($Q)){
      $min = array_search(min($Q), $Q);//the most min weight
      if($min == $b) break;
      foreach($_distArr[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {
          $Q[$key] = $Q[$min] + $val;
          $S[$key] = array($min, $Q[$key]);
      }
      unset($Q[$min]);
  }

  //list the path
  $path = array();
  $pos = $b;
  while($pos != $a){
      $path[] = $pos;
      $pos = $S[$pos][0];

  }
  $path[] = $a;
  $path = array_reverse($path);
  $length = ($S[$b][1]);
  $pathname = (implode('->', $path));
  //$pathteliko = (implode('->', $pathtime));


  if ($a == 1 ) {
    $start = 'Alexandroupoli';
  
  }elseif ($a == 2) {
    $start = 'Heraklion';
  }elseif ($a == 3) {
    $start = 'Aspropyrgos';
  }elseif ($a == 4) {
    $start = 'Patra';
  }elseif ($a == 5) {
    $start = 'Ioannina';
  }elseif ($a == 6) {
    $start = 'Thessalonikh';
  }elseif ($a == 7) {
    $start = 'Larisa';
  }elseif ($a == 8) {
    $start = 'Kalamata';
  }elseif ($a == 9) {
    $start = 'Mytilini';
  }
  if ($b == 1 ) {
    $dest = 'Alexandroupoli'; 
  }elseif ($b == 2) {
    $dest = 'Heraklion';
  }elseif ($b == 3) {
    $dest = 'Aspropyrgos';
  }elseif ($b == 4) {
    $dest = 'Patra';
  }elseif ($b == 5) {
    $dest = 'Ioannina';
  }elseif ($b == 6) {
    $dest = 'Thessalonikh';
  }elseif ($b == 7) {
    $dest = 'Larisa';
  }elseif ($b == 8) {
    $dest = 'Kalamata';
  }elseif ($b == 9) {
    $dest = 'Mytilini';
  }


  echo "From ";  
  print_r($start);
  echo " to ";
  print_r($dest);
  echo "<br />The cost is ";
  print_r($length);
  echo '<br/>';
  echo"The " ;
  print_r($i+1);
   echo" Path is :" ;
  echo '<br/>';

  while (( strpos($pathname, '1') !== false) || (strpos($pathname, '2') !== false) || (strpos($pathname, '3') !== false) || (strpos($pathname,   '4') !== false) || (strpos($pathname, '5') !== false) || (strpos($pathname, '6') !== false) || (strpos($pathname, '7') !== false) || (   strpos($pathname, '8') !== false) || (strpos($pathname, '9') !== false)) {
    if (strpos($pathname, '1') !== false)  {
  $pathname = (str_replace("1","Alexandroupoli",$pathname));
  } elseif (strpos($pathname, '2') !== false) {
    $pathname = (str_replace("2","Heraklion",$pathname));
  } elseif (strpos($pathname, '3') !== false) {
    $pathname = (str_replace("3","Aspropyrgos",$pathname));
  }elseif (strpos($pathname, '4') !== false) {
    $pathname = (str_replace("4","Patra",$pathname));
  }elseif (strpos($pathname, '5') !== false) {
    $pathname = (str_replace("5","Ioannina",$pathname));
  }elseif (strpos($pathname, '6') !== false) {
    $pathname = (str_replace("6","Thessalonikh",$pathname));
  }elseif (strpos($pathname, '7') !== false) {
    $pathname = (str_replace("7","Larisa",$pathname));
  }elseif (strpos($pathname, '8') !== false) {
    $pathname = (str_replace("8","Kalamata",$pathname));
  }elseif (strpos($pathname, '9') !== false) {
    $pathname = (str_replace("9","Mytilini",$pathname));
  }
  }

 

 print_r($pathname);
  echo '<br/>';

    echo "the counter i variable is ";
    print_r($i);
    echo '<br/>';
    

    $j = $i;
    $size = sizeof($path);
    $time = 0;
    for ($j = 0; $j < sizeof($path) - 1; $j++) {
    $time = $_disttimeArr[$path[$j]] [$path[$j +1]] + $time;
    $timearray [$i] = $time;
    } 
    $lengtharray [$i] = $length;

    if (($mincost > $timearray [$i]) && ($length == $lengtharray [0]) ) {
      $mincost = $timearray [$i];
      $bestpath = $pathname;
    }
    

    echo "the time needed for this path is  ";
    print_r($time);
    echo '<br/>';
    print_r(array_values($path));
    echo '<br/>';
    echo '<br/>';
    echo '<br/>';

    unset($_distArr[4][$path[1]]);
   

    $i = $i + 1;

 } while ($i < $telos);


   echo "the best path with απλή xrewsi is : ";
   print_r($bestpath);
   echo " with cost ";
   print_r($lengtharray [0]);
   $cost = $lengtharray [0];
   echo " and waiting time ";
   print_r($mincost);
   $costtime = $mincost;
   


} elseif ($typosapostolis == 'express') {


  do {
  
  $lengthtime = 0;
  //initialize the array for storing
  $Stime = array();//the nearest path with its parent and weight
  $Qtime = array();//the left nodes without the nearest path
  foreach(array_keys($_disttimeArr) as $valtime) $Qtime[$valtime] = 99999;
  $Qtime[$atime] = 0;

  //start calculating
  while(!empty($Qtime)){
      $mintime = array_search(min($Qtime), $Qtime);//the most min weight
      if($mintime == $btime) break;
      foreach($_disttimeArr[$mintime] as $keytime=>$valtime) if(!empty($Qtime[$keytime]) && $Qtime[$mintime] + $valtime < $Qtime[$keytime]) {
          $Qtime[$keytime] = $Qtime[$mintime] + $valtime;
          $Stime[$keytime] = array($mintime, $Qtime[$keytime]);
      }
      unset($Qtime[$mintime]);
    }

  //list the path
  $pathtime = array();
  $postime = $btime;
  while($postime != $atime){
      $pathtime[] = $postime;
      $postime = $Stime[$postime][0];

  }
  $pathtime[] = $atime;
  $pathtime = array_reverse($pathtime);
  $lengthtime = ($Stime[$btime][1]);
  $pathnametime = (implode('->', $pathtime));

  if ($atime == 1 ) {
    $starttime = 'Alexandroupoli';
  
  }elseif ($atime == 2) {
    $starttime = 'Heraklion';
  }elseif ($atime == 3) {
    $starttime = 'Aspropyrgos';
  }elseif ($atime == 4) {
    $starttime = 'Patra';
  }elseif ($atime == 5) {
    $starttime = 'Ioannina';
  }elseif ($atime == 6) {
    $starttime = 'Thessalonikh';
  }elseif ($atime == 7) {
    $starttime = 'Larisa';
  }elseif ($atime == 8) {
    $starttime = 'Kalamata';
  }elseif ($atime == 9) {
    $starttime = 'Mytilini';
  }
  if ($btime == 1 ) {
    $desttime = 'Alexandroupoli'; 
  }elseif ($btime == 2) {
    $desttime = 'Heraklion';
  }elseif ($btime == 3) {
    $desttime = 'Aspropyrgos';
  }elseif ($btime == 4) {
    $desttime = 'Patra';
  }elseif ($btime == 5) {
    $desttime = 'Ioannina';
  }elseif ($btime == 6) {
    $desttime = 'Thessalonikh';
  }elseif ($btime == 7) {
    $desttime = 'Larisa';
  }elseif ($btime == 8) {
    $desttime = 'Kalamata';
  }elseif ($btime == 9) {
    $desttime = 'Mytilini';
  }


  echo "From ";  
  print_r($starttime);
  echo " to ";
  print_r($desttime);
  echo "<br />The time is ";
  print_r($lengthtime);
  echo '<br/>';
  echo"The " ;
  print_r($i+1);
   echo" Path is :" ;
  echo '<br/>';

  while (( strpos($pathnametime, '1') !== false) || (strpos($pathnametime, '2') !== false) || (strpos($pathnametime, '3') !== false) || (strpos($pathnametime, '4') !== false) || (strpos($pathnametime, '5') !== false) || (strpos($pathnametime, '6') !== false) || (strpos($pathnametime, '7') !== false) || (strpos($pathnametime, '8') !== false) || (strpos($pathnametime, '9') !== false)) {
  if (strpos($pathnametime, '1') !== false)  {
  $pathnametime = (str_replace("1","Alexandroupoli",$pathnametime));
  } elseif (strpos($pathnametime, '2') !== false) {
    $pathnametime = (str_replace("2","Heraklion",$pathnametime));
  } elseif (strpos($pathnametime, '3') !== false) {
    $pathnametime = (str_replace("3","Aspropyrgos",$pathnametime));
  }elseif (strpos($pathnametime, '4') !== false) {
    $pathnametime = (str_replace("4","Patra",$pathnametime));
  }elseif (strpos($pathnametime, '5') !== false) {
    $pathnametime = (str_replace("5","Ioannina",$pathnametime));
  }elseif (strpos($pathnametime, '6') !== false) {
    $pathnametime = (str_replace("6","Thessalonikh",$pathnametime));
  }elseif (strpos($pathnametime, '7') !== false) {
    $pathnametime = (str_replace("7","Larisa",$pathnametime));
  }elseif (strpos($pathnametime, '8') !== false) {
    $pathnametime = (str_replace("8","Kalamata",$pathnametime));
  }elseif (strpos($pathnametime, '9') !== false) {
    $pathnametime = (str_replace("9","Mytilini",$pathnametime));
  }
  }

  print_r($pathnametime);
    echo '<br/>';

    echo "the counter i variable is ";
    print_r($i);
    echo '<br/>';
    

    $j = $i;
    $size = sizeof($pathtime);
    $cost = 0;
    
    for ($j = 0; $j < sizeof($pathtime) - 1; $j++) {
    $cost = $_distArr[$pathtime[$j]] [$pathtime[$j +1]] + $cost;
    $costarray [$i] = $cost;
    } 

    $lengtharray [$i] = $lengthtime;

    
    if (($mincost > $costarray [$i]) && ($lengthtime == $lengtharray [0] ) ) {
      $mincost = $costarray [$i];
      $bestpath = $pathnametime;
    }

    
   

    echo "the cost needed for this path is  ";
    print_r($cost);
    echo '<br/>';
    print_r(array_values($pathtime));
    echo '<br/>';
    echo '<br/>';
    echo '<br/>';

    unset($_disttimeArr[4][$pathtime[1]]);
    
    $i = $i + 1;

 } while ($i < $telos);

   echo "the best path with express xrewsi is : ";
   print_r($bestpath);
   echo " with cost ";
   print_r($mincost);
   $cost = $mincost;
   echo " and waiting time ";
   print_r($lengtharray [0]);
   $costtime = $lengtharray [0];
 
}

    //$server="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$trackid&choe=UTF-8";
    $qr="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$trackid&choe=UTF-8";
    $sql="INSERT INTO orders (katasthma_ap,city_ap,time,katasthma_pa,city_pa,track_id,speed,cost,qr_code,wait,locations) VALUES('".$kap."','".$pap2."','".$timeid."','".$kpa."','".$ppa2."','".$trackid."','".$sp."','".$cost."','".$qr."','".$costtime."','".$pap2."')";
    $sql = $MySQLiconn->query($sql);
    

  if($sql)
  {
    ?>
        <script>
    alert('<?php echo "η προσθήκη έγινε"; ?>');
    window.location.href='index.php';
    </script>
        <?php
  }
  else
  {
    ?>
        <script>
    alert('σφάλμα κατά την εισαγωγή των στοιχείων , ΠΡΟΣΠΑΘΗΣΕ ΞΑΝΑ');
    </script>
        <?php
  }


}

    
      
  
  

?>
<!DOCTYPE html PUBLIC>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<br/>
<br/>
<br/>
<br/>
<title>Προσθήκη Παραγγελίας</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
</head>
<body>
<style>
body {
    background-color: #ccc
}
</style>
<body>
<div class="clearfix"></div>
<div class="clearfix"></div><br />

<div class="container">

    <form method="post">
    <table class='table table-bordered' style=" background: #A9A9A9;">
    <tr bgcolor="#008080">
    <th>#</th>
    <th>Κατάστημα Αποστολής</th>
    <th>Πόλη Αποστολής</th>
  <th>Κατάστημα Παραλαβής</th>
  <th>Πόλη Παραλαβής</th>
  <th>Απλή/Express</th>
    </tr>
        <tr>
        <td><?php echo $i; ?></td>
        <td><input type="text" name="kapostolhs<?php echo $i; ?>" placeholder="κατάστημα αποστολής" class='form-control' /></td>
        <td><input type="text" name="papostolhs<?php echo $i; ?>" placeholder="πόλη αποστολής" class='form-control' /></td>
    <td><input type="text" name="kparalabhs<?php echo $i; ?>" placeholder="κατάστημα παραλαβής" class='form-control' /></td>
    <td><input type="text" name="pparalabhs<?php echo $i; ?>" placeholder="πόλη παραλαβής" class='form-control' /></td>
    <td><input type="text" name="spd<?php echo $i; ?>" placeholder="απλή/express" class='form-control' /></td>
        
    <tr>
    <td colspan="6">    
    <button type="submit" name="save_mul" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Εισαγωγή της Παραγγελίας</button> 
    <a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Πίσω στην αρχική</a>
    
</div>
</body>
</html>