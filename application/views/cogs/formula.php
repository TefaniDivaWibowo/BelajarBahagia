<?php
/*echo "COGS<br>";
foreach ($fz2_ytd_cogs as $cogs) {
	$cogsf 	= $cogs->cogs;
	$fcogs 	= number_format($cogsf,2,",",".");
	echo "Area: " . $cogs->area . "<br>";
	echo "COGS: " . $fcogs . "<br>";
	echo "<br>";
}

echo "<hr>";

echo "Revenue<br>";
foreach ($fz2_ytd_rev as $rev) {
		$totalrev 	= $rev->rev;
		$negone 	= -1;
		$finalrev 	= $totalrev * $negone;
		$frev 		= number_format($finalrev,2,",",".");
		echo "Area: " . $rev->area . "<br>";
		echo "Revenue: " . $frev . "<br>";
		echo "<br>";
}

echo "<hr>";*/

/*$net = [];
foreach($fz2_ytd_rev as $key=>$value){
	$totalrev 	= $value->rev;
	$negone 	= -1;
	$finalrev 	= $totalrev * $negone;
	if($value->area == $fz2_ytd_cogs[$key]->area){
		array_push($net,($finalrev-$fz2_ytd_cogs[$key]->cogs));
	}

		$cogs 		= $fz2_ytd_cogs[$key]->cogs;
		$fcogs 		= number_format($cogs,2,",",".");
		$frev 		= number_format($finalrev,2,",",".");
		echo "Area: " . $value->area . "<br>";
		echo "COGS: " . $fcogs . "<br>";
		echo "Revenue: " . $frev . "<br>";

		for ($i=0; $i < count($net); $i++) { 
			echo "Net Income: " . $net[$i] . "<hr>";
		}

}*/	

				$net = [];
				$tambah = 0;
                  foreach($fz2_ytd_rev as $key=>$value){
                    $totalrev   = $value->rev;
                    $negone   = -1;
                    $finalrev   = $totalrev * $negone;
                    if($value->area == $fz2_ytd_cogs[$key]->area){
                      array_push($net,($finalrev-$fz2_ytd_cogs[$key]->cogs));
                    }

                      $cogs     = $fz2_ytd_cogs[$key]->cogs;
                      /*$cogs     += $cogs;
                      $finalrev += $finalrev;*/

                      $fcogs    = number_format($cogs,2,",",".");
                      $frev     = number_format($finalrev,2,",",".");
                      $netin    = number_format($net[$key],2,",",".");

                      //$netin    += $netin;

                      /*echo "<td>" . $fcogs . "</td>";
                      echo "<td>" . $finalrev . "</td>";
                      echo "<td>" . $netin . "</td>";*/

                      $tambah 	+= $cogs;
                  }
                  
                  $fcogs    = number_format($tambah,2,",",".");
                  echo $fcogs;
?>
