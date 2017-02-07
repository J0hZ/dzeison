    <?php
    include_once 'header.php';
    $jargminenadal=date('Y-m-d',strtotime($tana . " +1 week")); //tänasele kuupäevale lisatakse +1 nädal, loendatakse kuupäeva alates tänasest kuupäevast(Ei toimi edukalt kuna uus kuupäev ei muutu uueks "tänaseks")
    $eelminenadal=date('Y-m-d',strtotime($tana . " -1 week")); //tänaselt kuupäevalt võetakse -1 nädal vähemaks. Samuti ei toimi edukalt.
         $URL_g261 = 'https://siseveeb.ee/vikk/veebilehe_andmed/tunniplaan?nadal='.$tana.'&nimekiri=ruum' ;
      echo'<div class=container>';    

            echo '<div class=Prev>';
				echo  '<a href="ruumid.php?nadal='.$eelminenadal.'&nimekiri=ruum">' .'Prev'.' </a>' ; //nupp eelmise nädala jaoks
            echo '</div>'; 
            
 			        echo '<h1>'.$_GET['nadal'].'</h1>'; // loeb arrayd nädal ning lisab selle headerina leheküljele	

            echo '<div class=Next>';
				echo '<a href="ruumid.php?nadal='.$jargminenadal.'&nimekiri=ruum">' .'Next'.' </a>' ; // nupp järgmise nädala jaoks
            echo '</div>'; 
    
        ini_set("allow_url_fopen", 1);
                
        $url = $URL_g261; // URL
        $json = file_get_contents($url); // Võtab JSON andmed URLi väärtusest
        $obj = json_decode($json); // Mida teeb JSON andmetega - Objektiseerib
        $arr = json_decode($json, true); // Loob nendest array

      echo '</div>';       
      
            echo'<div class=ruumid>';;
                    foreach ($arr['ruum'] as $ruumd=>$ruum){
                        echo '<div class="ruum '.$ruum['nimi'].'">';
                        echo '<a href="ruumitund.php?nadal='.$tana.'&ruum='.$ruum['id'].'">' .$ruum['nimi'].' </a>' ;
                        echo '</div>';
                    }
            echo '</div>';
    include_once 'footer.php';
    ?>