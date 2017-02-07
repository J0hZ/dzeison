    <?php
    include_once 'header.php';
    $jargminenadal=date('Y-m-d',strtotime($tana . " +1 week")); //tänasele kuupäevale lisatakse +1 nädal, loendatakse kuupäeva alates tänasest kuupäevast(Ei toimi edukalt kuna uus kuupäev ei muutu uueks "tänaseks")
    $eelminenadal=date('Y-m-d',strtotime($tana . " -1 week")); //tänaselt kuupäevalt võetakse -1 nädal vähemaks. Samuti ei toimi edukalt.
         $URL_g261 = 'https://siseveeb.ee/vikk/veebilehe_andmed/tunniplaan?nadal='.$tana.'&nimekiri=opetaja' ;
      echo'<div class=container>';    

            echo '<div class=Prev>';
				echo  '<a href="opetajad.php?nadal='.$eelminenadal.'&nimekiri=opetaja">' .'Prev'.' </a>' ; //nupp eelmise nädala jaoks
            echo '</div>'; 
            
 			        echo '<h1>'.$arr['nadal'].'</h1>'; // loeb arrayd nädal ning lisab selle headerina leheküljele	

            echo '<div class=Next>';
				echo '<a href="opetajad.php?nadal='.$jargminenadal.'&nimekiri=opetaja">' .'Next'.' </a>' ; // nupp järgmise nädala jaoks
            echo '</div>'; 
    
        ini_set("allow_url_fopen", 1);
                
        $url = $URL_g261; // URL
        $json = file_get_contents($url); // Võtab JSON andmed URLi väärtusest
        $obj = json_decode($json); // Mida teeb JSON andmetega - Objektiseerib
        $arr = json_decode($json, true); // Loob nendest array

      echo '</div>';       
      
            echo'<div class=opetajad>';;
                    foreach ($arr['opetaja'] as $opetajad=>$opetaja){ //võtab arrayst "grupp"i andmed
                        echo '<div class="grupp con_'.$opetajad.'">';//lisab grupid eraldi clssidesse
                        echo '<a href="grupitund.php?tyyp=1&nadal='.$tana.'&grupp='.$opetaja['id'].'">' .$opetaja['nimi'].' </a>' ;
                        echo '</div>';
                    }
            echo '</div>';
    include_once 'footer.php';
    ?>