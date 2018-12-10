 <?php
$primeNumberArray = array();
$isPrime = false;
$totlaSumOfPrime =0;
$grandTotalSUm = 0;
for ($i = 2; $i<1000000; $i++) {
     $isPrime = true; 
        for ($k = 2; $k<=($i/2); $k++) {
                if ($i%$k==0) {
                          $isPrime = false;
                                  break;
                                }
                   }
        if ($isPrime) {
               $totlaSumOfPrime+=$i;
            if($totlaSumOfPrime<1000000)
            {
               $grandTotalSUm = $totlaSumOfPrime;
            }
            else{
                break;
            }
               
           }
}

print_r($grandTotalSUm);
        ?>
