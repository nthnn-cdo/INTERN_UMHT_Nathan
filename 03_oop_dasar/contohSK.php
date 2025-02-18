<?php

// class cthstatic {
//     public static $angka = 1;

//     public static function hi(){
//         return "hi" . self::$angka++ ."kali.";
//     }
// }

// echo cthstatic::$angka;
// echo "<br>";
// echo cthstatic::hi();
// echo "<hr>";
// echo cthstatic::hi();

class contoh {
    public  static $angka =1;

    public function hi(){
        return "hi" . self::$angka++ ."kali. <br>";
    }
}

$obj = new contoh;
echo $obj->hi();
echo $obj->hi();
echo $obj->hi();
echo $obj->hi();
echo $obj->hi();
echo $obj->hi();
echo $obj->hi();

echo "<hr>";

$obj2 = new contoh;
echo $obj2->hi();
echo $obj2->hi();
echo $obj2->hi();
echo $obj2->hi();
echo $obj2->hi();
echo $obj2->hi();
echo $obj2->hi();
echo $obj2->hi();