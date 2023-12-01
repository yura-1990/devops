<?php
// while( true ) {
//     $myfile = fopen(__DIR__ . "/newfile.txt", "wb");  // file yaratadi va 
//     $text = date("Y-m-d | h:i:s");                 
//     fwrite($myfile, $text);                        // fwrite biror bir fil ichiga yozish uchun ishlatiladi
//     echo $text;
//     echo PHP_EOL;
//     fclose($myfile);
//     sleep(1);                                       // setTimeout
// }
/* Yuqorida ko`rsatilgan codega boshqa code yozamiz */
while( true ) {
    file_put_contents(__DIR__ . "/clock.txt", date("Y-m-d | h:i:s"));
    echo file_get_contents(__DIR__ . "/clock.txt", );
    echo PHP_EOL;
    sleep(1);
}

