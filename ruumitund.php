 <?php
    include_once 'header.php';
    $jargminenadal=date('Y-m-d',strtotime($tana . " +1 week"));
    $eelminenadal=date('Y-m-d',strtotime($tana . " -1 week"));
	$ruumID = $ruum['id'];	
    $tuba = $_GET['ruum'];
    $URL_g261 = 'https://siseveeb.ee/vikk/veebilehe_andmed/tunniplaan?nadal='.$_GET['nadal'].'&ruum='.$_GET['ruum'] ;
    $url = $URL_g261; 
    $json = file_get_contents($url);
    $obj = json_decode($json);
    $arr = json_decode($json, true);



        
    echo'<div class=container>';        
    

            echo '<div class=Prev>';
				echo  '<a href="ruumitund.php?nadal='.$eelminenadal.'&ruum='.$tuba.'">' .'Prev'.' </a>' ; //nupp eelmise nädala jaoks
            echo '</div>'; 
            
 			        echo '<h1>'.$_GET['nadal'].'</h1>'; // loeb arrayd nädal ning lisab selle headerina leheküljele	

            echo '<div class=Next>';
				echo '<a href="ruumitund.php?nadal='.$jargminenadal.'&ruum='.$tuba.'">' .'Next'.' </a>' ; // nupp järgmise nädala jaoks
            echo '</div>'; 
    

      echo '</div>';  

        ini_set("allow_url_fopen", 1);
                echo'<div class=tunniplaan>';
                    foreach ($arr['tunnid'] as $paevNimi=>$paev){
                        echo '<div class="'.$paevNimi.'">';
                        echo '<h2>'.$paevaNimed[$paevNimi].' </h2>';
                        echo '<h3>' . date('Y-m-d', strtotime($tana) + ($paevaNr[$paevNimi] * 86400)) . '</h3>';
                        foreach ($paev as $tundNum=>$tund){
                                echo '<div class="tund '. $tundNum.'">
                                <br>'. $tund['aine'].'
                                <br>'. $tund['grupp'].'
                                <br>'. $tund['opetaja'].'
                                <br>'.$tund['algus'].'-'.$tund['lopp'].
                                '</div>';
                }
                         echo '</div>';
                    }
            echo '</div>';

    include_once 'footer.php';
    ?>
