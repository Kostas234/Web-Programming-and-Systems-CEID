<?php
include_once 'dbcon.php';
$order_id = $_POST['order_id'];
$kap = $_POST['kap'];
$pap = $_POST['pap'];
$kpa = $_POST['kpa'];
$ppa = $_POST['ppa'];
$sp = $_POST['sp'];
$costmoney = array();
$costtime = array();



             echo '<br/>';
             echo 'Oi poleis apostoleis einai:  ';
             print_r($pap);

             echo '<br/>';
             echo '<br/>';
             echo 'Oi poleis paralavis einai:  ';
             print_r($ppa);

             echo '<br/>';
             echo '<br/>';
             echo '<br/>';
             echo '<br/>';
             echo '<br/>';

            $chkcount = count($order_id);
            print_r($chkcount);
            echo '<br/>';
             echo '<br/>';
             echo '<br/>';
             echo '<br/>';
 $k=0;
for($k=0; $k<$chkcount; $k++)


{



     echo '<br/>';
     print_r($k);
echo '<br/>';

	


             $flag = 0 ;

    if($ppa == 'Alexandroupoli'){
	$ppa = 'Αλεξανδρούπολη';
	}
	else if($pap == 'Alexandroupoli'){
		$pap = 'Αλεξανδρούπολη';
	}
	
	if($ppa == 'Heraklion'){
		$ppa = 'Ηράκλειο';
	}
	else if($pap == 'Heraklion'){
		$pap = 'Ηράκλειο';
	}
	if($ppa == 'Aspropyrgos'){
		$ppa = 'Ασπρόπυργος';
	}
	else if($pap == 'Aspropyrgos'){
		$pap = 'Ασπρόπυργος';
	}
	
	if($ppa == 'Patra'){
		$ppa = 'Πάτρα';
	}
	else if($pap == 'Patra'){
		$pap = 'Πάτρα';
	}
	if($ppa == 'Ioannina'){
		$ppa = 'Ιωάννινα';
	}
	else if($pap == 'Ioannina'){
		$pap = 'Ιωάννινα';
	}
	
	if($ppa == 'Thessalonikh'){
		$ppa = 'Θεσσαλονίκη';
	}
	else if($pap == 'Thessalonikh'){
		$pap = 'Θεσσαλονίκη';
	}
	
	if($ppa == 'Larisa'){
		$ppa = 'Λάρισα';
	}
	else if($pap == 'Larisa'){
		$pap = 'Λάρισα';
	}
	if($ppa[$k] == 'Kalamata'){
		$ppa[$k] = 'Καλαμάτα';
	}
	else if($pap[$k] == 'Kalamata'){
		$pap[$k] = 'Καλαμάτα';
	}
	if($ppa[$k]== 'Mytilini'){
		$ppa[$k]= 'Μυτιλήνη';
	}
	else if($pap[$k] == 'Mytilini'){
		$pap[$k] = 'Μυτιλήνη';
	}
	 


             if ($pap[$k] == 'Αλεξανδρούπολη') {
              $flag = 1 ;

             }elseif ($pap[$k] == 'Ηράκλειο') {
              $flag = 1 ;

             }elseif ($pap[$k] == 'Ασπρόπυργος') {
              $flag = 1 ;

             }elseif ($pap[$k] == 'Πάτρα') {
              $flag = 1 ;

             }elseif ($pap[$k] == 'Ιωάννινα') {
              $flag = 1 ;

             }elseif ($pap[$k] == 'Θεσσαλονίκη') {
              $flag = 1 ;

             }elseif ($pap[$k] == 'Λάρισα') {
              $flag = 1 ;

             }elseif ($pap[$k] == 'Καλαμάτα') {
              $flag = 1 ;

             }elseif ($pap[$k] == 'Μυτιλήνη') {
              $flag = 1 ;
             }

             if ($ppa[$k] == 'Αλεξανδρούπολη') {
               $flag = $flag+1 ;
 
             }elseif ($ppa[$k] == 'Ηράκλειο') {
               $flag = $flag+1 ;

             }elseif ($ppa[$k] == 'Ασπρόπυργος') {
              $flag = $flag+1 ;

             }elseif ($ppa[$k] == 'Πάτρα') {
               $flag = $flag+1 ;

             }elseif ($ppa[$k] == 'Ιωάννινα') {
               $flag = $flag+1 ;

             }elseif ($ppa[$k] == 'Θεσσαλονίκη') {
               $flag = $flag+1 ;

             }elseif ($ppa[$k] == 'Λάρισα') {
               $flag = $flag+1 ;

             }elseif ($ppa[$k] == 'Καλαμάτα') {
               $flag = $flag+1 ;

             }elseif ($ppa[$k] == 'Μυτιλήνη') {
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
                                      /*
                              ANTISTIXOISI POLWEN ME ARITHMOUS/KOMVOUS
                              Αλεξανδρούπολη     -> 1
                              Ηράκλειο          -> 2
                              Ασπρόπυργος -> 3
                              Πάτρα              -> 4
                              Ιωάννινα           -> 5   
                              Θεσσαλονίκη       -> 6
                              Λάρισα             -> 7 
                              Καλαμάτα           -> 8 
                              Μυτιλήνη           -> 9
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

 $typosapostolis = $sp[$k] ;

 $costarray = array(50);
 $lengtharray = array();
 //the start and the end
 $a = 4;
 $b = 6;

 echo "The City apostolis is:";
 echo '<br/>';
 print_r($pap[$k]);
 echo '<br/>';
 echo "The City paralavis is:";
 echo '<br/>';
 print_r($ppa[$k]);
 echo '<br/>';
 echo '<br/>';


 if ($pap[$k] == 'Αλεξανδρούπολη') {
  $a = 1;

 }elseif ($pap[$k] == 'Ηράκλειο') {
  $a = 2;

 }elseif ($pap[$k] == 'Ασπρόπυργος') {
  $a = 3;

 }elseif ($pap[$k] == 'Πάτρα') {
  $a = 4;

 }elseif ($pap[$k] == 'Ιωάννινα') {
  $a = 5;

 }elseif ($pap[$k] == 'Θεσσαλονίκη') {
  $a = 6;

 }elseif ($pap[$k] == 'Λάρισα') {
  $a = 7;

 }elseif ($pap[$k] == 'Καλαμάτα') {
  $a = 8;

 }elseif ($pap[$k] == 'Μυτιλήνη') {
  $a = 9;
 }

 if ($ppa[$k] == 'Αλεξανδρούπολη') {
  $b = 1;

 }elseif ($ppa[$k] == 'Ηράκλειο') {
  $b = 2;

 }elseif ($ppa[$k] == 'Ασπρόπυργος') {
  $b = 3;

 }elseif ($ppa[$k] == 'Πάτρα') {
  $b = 4;

 }elseif ($ppa[$k] == 'Ιωάννινα') {
  $b = 5;

 }elseif ($ppa[$k] == 'Θεσσαλονίκη') {
  $b = 6;

 }elseif ($ppa[$k] == 'Λάρισα') {
  $b = 7;

 }elseif ($ppa[$k] == 'Καλαμάτα') {
  $b = 8;

 }elseif ($ppa[$k] == 'Μυτιλήνη') {
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


 if ($typosapostolis == 'apli') {

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
    $start = 'Αλεξανδρούπολη';
  
  }elseif ($a == 2) {
    $start = 'Ηράκλειο';
  }elseif ($a == 3) {
    $start = 'Athina';
  }elseif ($a == 4) {
    $start = 'Πάτρα';
  }elseif ($a == 5) {
    $start = 'Ιωάννινα';
  }elseif ($a == 6) {
    $start = 'Θεσσαλονίκη';
  }elseif ($a == 7) {
    $start = 'Λάρισα';
  }elseif ($a == 8) {
    $start = 'Καλαμάτα';
  }elseif ($a == 9) {
    $start = 'Μυτιλήνη';
  }
  if ($b == 1 ) {
    $dest = 'Αλεξανδρούπολη'; 
  }elseif ($b == 2) {
    $dest = 'Ηράκλειο';
  }elseif ($b == 3) {
    $dest = 'Athina';
  }elseif ($b == 4) {
    $dest = 'Πάτρα';
  }elseif ($b == 5) {
    $dest = 'Ιωάννινα';
  }elseif ($b == 6) {
    $dest = 'Θεσσαλονίκη';
  }elseif ($b == 7) {
    $dest = 'Λάρισα';
  }elseif ($b == 8) {
    $dest = 'Καλαμάτα';
  }elseif ($b == 9) {
    $dest = 'Μυτιλήνη';
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
  $pathname = (str_replace("1","Αλεξανδρούπολη",$pathname));
  } elseif (strpos($pathname, '2') !== false) {
    $pathname = (str_replace("2","Ηράκλειο",$pathname));
  } elseif (strpos($pathname, '3') !== false) {
    $pathname = (str_replace("3","Athina",$pathname));
  }elseif (strpos($pathname, '4') !== false) {
    $pathname = (str_replace("4","Πάτρα",$pathname));
  }elseif (strpos($pathname, '5') !== false) {
    $pathname = (str_replace("5","Ιωάννινα",$pathname));
  }elseif (strpos($pathname, '6') !== false) {
    $pathname = (str_replace("6","Θεσσαλονίκη",$pathname));
  }elseif (strpos($pathname, '7') !== false) {
    $pathname = (str_replace("7","Λάρισα",$pathname));
  }elseif (strpos($pathname, '8') !== false) {
    $pathname = (str_replace("8","Καλαμάτα",$pathname));
  }elseif (strpos($pathname, '9') !== false) {
    $pathname = (str_replace("9","Μυτιλήνη",$pathname));
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


   echo "the best path with apli xrewsi is : ";
   print_r($bestpath);
   echo " with cost ";
   print_r($lengtharray [0]);
   $costmoney[$k] = $lengtharray [0];
   echo " and waiting time ";
   print_r($mincost);
   $costtime[$k] = $mincost;
   


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
    $starttime = 'Αλεξανδρούπολη';
  
  }elseif ($atime == 2) {
    $starttime = 'Ηράκλειο';
  }elseif ($atime == 3) {
    $starttime = 'Athina';
  }elseif ($atime == 4) {
    $starttime = 'Πάτρα';
  }elseif ($atime == 5) {
    $starttime = 'Ιωάννινα';
  }elseif ($atime == 6) {
    $starttime = 'Θεσσαλονίκη';
  }elseif ($atime == 7) {
    $starttime = 'Λάρισα';
  }elseif ($atime == 8) {
    $starttime = 'Καλαμάτα';
  }elseif ($atime == 9) {
    $starttime = 'Μυτιλήνη';
  }
  if ($btime == 1 ) {
    $desttime = 'Αλεξανδρούπολη'; 
  }elseif ($btime == 2) {
    $desttime = 'Ηράκλειο';
  }elseif ($btime == 3) {
    $desttime = 'Athina';
  }elseif ($btime == 4) {
    $desttime = 'Πάτρα';
  }elseif ($btime == 5) {
    $desttime = 'Ιωάννινα';
  }elseif ($btime == 6) {
    $desttime = 'Θεσσαλονίκη';
  }elseif ($btime == 7) {
    $desttime = 'Λάρισα';
  }elseif ($btime == 8) {
    $desttime = 'Καλαμάτα';
  }elseif ($btime == 9) {
    $desttime = 'Μυτιλήνη';
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
  $pathnametime = (str_replace("1","Αλεξανδρούπολη",$pathnametime));
  } elseif (strpos($pathnametime, '2') !== false) {
    $pathnametime = (str_replace("2","Ηράκλειο",$pathnametime));
  } elseif (strpos($pathnametime, '3') !== false) {
    $pathnametime = (str_replace("3","Athina",$pathnametime));
  }elseif (strpos($pathnametime, '4') !== false) {
    $pathnametime = (str_replace("4","Πάτρα",$pathnametime));
  }elseif (strpos($pathnametime, '5') !== false) {
    $pathnametime = (str_replace("5","Ιωάννινα",$pathnametime));
  }elseif (strpos($pathnametime, '6') !== false) {
    $pathnametime = (str_replace("6","Θεσσαλονίκη",$pathnametime));
  }elseif (strpos($pathnametime, '7') !== false) {
    $pathnametime = (str_replace("7","Λάρισα",$pathnametime));
  }elseif (strpos($pathnametime, '8') !== false) {
    $pathnametime = (str_replace("8","Καλαμάτα",$pathnametime));
  }elseif (strpos($pathnametime, '9') !== false) {
    $pathnametime = (str_replace("9","Μυτιλήνη",$pathnametime));
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
   $costmoney[$k] = $mincost;
   echo " and waiting time ";
   print_r($lengtharray [0]);
   $costtime[$k] = $lengtharray [0];
 
  }
   $costmoney[$k] = $costmoney[$k] +1;//to kostos gia metavasi apo to kontino katastima stin apothiki
   echo '<br/>';
    echo '<br/>';
    echo '<br/>';

   print_r($costtime[$k]);
   echo '<br/>';
    echo '<br/>';
    echo '<br/>';

    print_r($costmoney);

$MySQLiconn->query("UPDATE orders SET katasthma_ap='$kap[$k]', city_ap='$pap[$k]', katasthma_pa='$kpa[$k]', city_pa='$ppa[$k]', speed='$sp[$k]' , cost= '$costmoney[$k]'  , wait= '$costtime[$k]'  WHERE order_id=".$order_id[$k]);

date_default_timezone_set("Europe/Athens");
$time=date("h:i:sa");
$timestamp = strtotime($time);
if($ppa[$k] == 'Αλεξανδρούπολη'){
$ppa[$k] = 'Alexandroupoli';}
if($pap[$k] == 'Αλεξανδρούπολη'){
$pap[$k] = 'Alexandroupoli';}
if($ppa[$k] == 'Ηράκλειο'){
$ppa[$k] = 'Heraklion';}
if($pap[$k] == 'Ηράκλειο'){
$pap[$k] = 'Heraklion';}
if($ppa[$k] == 'Ασπρόπυργος'){
$ppa[$k] = 'Aspropyrgos';}
if($pap[$k] == 'Ασπρόπυργος'){
$pap[$k] = 'Aspropyrgos';}
if($ppa[$k] == 'Πάτρα'){
$ppa[$k] = 'Patra';}
if($pap[$k] == 'Πάτρα'){
$pap[$k] = 'Patra';}
if($ppa[$k] == 'Ιωάννινα'){
$ppa[$k] = 'Ioannina';}
if($pap[$k] == 'Ιωάννινα'){
$pap[$k] = 'Ioannina';}
if($ppa[$k] == 'Θεσσαλονίκη'){
$ppa[$k] = 'Thessalonikh';}
if($pap[$k] == 'Θεσσαλονίκη'){
$pap[$k] = 'Thessalonikh';}
if($ppa[$k] == 'Λάρισα'){
$ppa[$k] = 'Larisa';}
if($pap[$k] == 'Λάρισα'){
$pap[$k] = 'Larisa';}
if($ppa[$k] == 'Καλαμάτα'){
$ppa[$k] = 'Kalamata';}
if($pap[$k] == 'Καλαμάτα'){
$pap[$k] = 'Kalamata';}
if($ppa[$k] == 'Μυτιλήνη'){
$ppa[$k] = 'Mytilini';}
if($pap[$k] == 'Μυτιλήνη'){
$pap[$k] = 'Mytilini';}
$firstl = substr($pap[$k], 0, 2);
$lastl=substr($ppa[$k], 0, 2);
$trackid=strtoupper($firstl)."$timestamp".strtoupper($lastl);


//$chk = $_POST['chk'];



$MySQLiconn->query("UPDATE orders SET time='$time', track_id='$trackid' WHERE order_id=".$order_id[$k]);

}

    print_r($costmoney);
echo '<br/>';
    echo '<br/>';
    echo '<br/>';
echo 'to poses fores tha ektelestei einai:';
print_r($chkcount);


header("Location: index.php");
?>