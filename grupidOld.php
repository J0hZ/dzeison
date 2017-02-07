<html>
<head>

<title>Jzon</title>

<meta charset="UTF-8"/>
<link rel="stylesheet" href="styles.css">


    <button id="myButton" class="float-left submit-button" >Home</button>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "https://dzeison-johzenna.c9users.io/";
    };
</script>

</head>


<body>
    <button onclick="location.href = 'https://dzeison-johzenna.c9users.io/grupid.php';" id="myButton" class="float-left submit-button" >Nupp2</button>

<body>
    

    <?php
    $tana = date('Y-m-d');
    $jargminenadal=date('Y-m-d',strtotime("+1 week"));
    $eelminenadal=date('Y-m-d',strtotime("-1 week"));
        echo '<a href="https://siseveeb.ee/vikk/veebilehe_andmed/tunniplaan?nadal='.$eelminenadal.'&grupp=261">eelminenadal</a>';
        echo '<a href="https://siseveeb.ee/vikk/veebilehe_andmed/tunniplaan?nadal='.$jargminenadal.'&grupp=261">jargminenadal</a>';
        
        

    
    echo'<div class=container>';
        ini_set("allow_url_fopen", 1);
            
            
        echo "<h1>TP</h1>";
             
        $url = 'https://siseveeb.ee/vikk/veebilehe_andmed/tunniplaan?nadal='.$tana.'&grupp=261';
        $json = file_get_contents($url);
        $obj = json_decode($json);
        $arr = json_decode($json, true);
        echo '<h1>'.'Vaatad nädalat '.$arr['nadal'].'</h1>';
            echo'<div class=tunniplaan>';
                    foreach ($arr['tunnid'] as $paevNimi=>$paev){
                        echo '<div class="con_'.$paevNimi.'">';
                        foreach ($paev as $tundNum=>$tund){
                                echo '<div class="tund ' .$paevNimi .' '. $tundNum.'">
                                <p>'. $tund['aine'].'</p>'.
                                $tund['algus'].'-'.$tund['lopp'].
                                '</div>';
                }
                         echo '</div>';
                    }
            echo '</div>';
    echo '</div>';
    ?>
   </body>
</html>