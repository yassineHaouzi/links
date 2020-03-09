<?php

    require_once "Database.php";

    $db = new Database();

    if (!empty($_POST['sponsor'])) {


        $sponsor  =  $_POST['sponsor'];

        if($sponsor === "idrive"){


            $db->query('select * from accounts where id = 1');

            $spInfo = $db->single();


            $myfile = fopen("../docs/doc.txt", "w") or die("Unable to open file!");
            $txt = $spInfo->login."/".$spInfo->password;
            fwrite($myfile, $txt);
            fclose($myfile);


            if(shell_exec("npm test")){
                echo "success";

            }else{

                echo "error";
            }

        }


    } else {

        echo "nothing her";
    }



