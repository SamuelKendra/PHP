<?php
    if (isset($gender) && $gender=="female") echo "checked";
    if (isset($gender) && $gender=="male") echo "checked";
    if (isset($gender) && $gender=="other") echo "checked";


    extract($_REQUEST);
    $file=fopen("form-save.txt","wb");
    //ak chcem pridat dalsieho dam mode:"a"

    fwrite($file,"Pohlavie : ");
    fwrite($file, $gender ."\n");

    fwrite($file,"Meno : ");
    fwrite($file, $firstName ."\n");

    fwrite($file,"Priezvisko : ");
    fwrite($file, $lastName ."\n");

    fwrite($file,"Tel.Cislo : ");
    fwrite($file, $phoneNumber ."\n");

    fwrite($file,"Email : ");
    fwrite($file, $email ."\n");

    fwrite($file,"Sprava : ");
    fwrite($file, $message ."\n");

    fwrite($file,"-----------------------\n");

    fclose($file);
    header("location: index.php");
 ?>
