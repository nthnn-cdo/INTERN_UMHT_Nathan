<!-- 
Tugas 3
Buatlah program yang dapat memeriksa apakah suatu angka adalah bilangan prima atau bukan
note : angka prima hanya dapat dibagi oleh 1 dan dirinya sendiri
contoh :
7 adalah bilangan prima
8 bukan bilangan prima 
-->

<?php
  function isPrime($number) {
      // if ($number < 2) {
      //     return false;
      // }
  
      
      for ($i = 2; $i <= sqrt($number); $i++) {
          if ($number % $i == 0) {
              return false;
          }
      }
  
      return true;
  }
  
  $numberToCheck = 2;
  
  if (isPrime($numberToCheck)) {
      echo "$numberToCheck adalah bilangan prima.";
  } else {
      echo "$numberToCheck bukan bilangan prima.";
  }
  
?>