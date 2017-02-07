    <?php
    include_once 'header.php';
    $jargminenadal=date('Y-m-d',strtotime($tana . " +1 week")); //tänasele kuupäevale lisatakse +1 nädal, loendatakse kuupäeva alates tänasest kuupäevast(Ei toimi edukalt kuna uus kuupäev ei muutu uueks "tänaseks")
    $eelminenadal=date('Y-m-d',strtotime($tana . " -1 week")); //tänaselt kuupäevalt võetakse -1 nädal vähemaks. Samuti ei toimi edukalt.
         $URL_g261 = 'https://siseveeb.ee/vikk/veebilehe_andmed/tunniplaan?nadal='.$tana.'&nimekiri=grupp' ;
echo '<div class=leht id=sisu>';
    echo'<div class=container>';  
                echo '<div class=Prev>';
				echo  '<a href="grupid.php?nadal='.$eelminenadal.'&nimekiri=grupp">' .'Prev'.' </a>' ; //nupp eelmise nädala jaoks
            echo '</div>'; 
 			        echo '<h1>'.$_GET['nadal'].'</h1>'; // loeb arrayd nädal ning lisab selle headerina leheküljele	
            echo '<div class=Next>';
				echo '<a href="grupid.php?nadal='.$jargminenadal.'&nimekiri=grupp">' .'Next'.' </a>' ; // nupp järgmise nädala jaoks
            echo '</div>'; 
    echo '</div>';  
        ini_set("allow_url_fopen", 1);
        $url = $URL_g261; // URL
        $json = file_get_contents($url); // Võtab JSON andmed URLi väärtusest
        $obj = json_decode($json); // Mida teeb JSON andmetega - Objektiseerib
        $arr = json_decode($json, true); // Loob nendest array
     
            echo'<div class=grupid>';
                    //var_dump($arr['grupp']);
                    foreach ($arr['grupp'] as $grupid=>$grupp){ //võtab arrayst "grupp"i andmed
                        echo '<div class="grupp '.$grupp['nimi'].'">';//lisab grupid eraldi clssidesse
                        echo '<a href="grupitund.php?nadal='.$tana.'&grupp='.$grupp['id'].'">' .$grupp['nimi'].' </a>';
                        echo '</div>';
                    }
            echo '</div>';
echo '</div>';
    include_once 'footer.php';
    ?>