<!DOCTYPE html>
<html>
    <head>
    
        <title>Jzon</title>
        
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        
        
<script type="text/javascript">
tday=new Array("Pühapäev","Esmaspäev","Teisipäev","Kolmapäev","Neljapäev","Reede","Laupäev");
tmonth=new Array("Jaanuar","Veebruar","Märts","Aprill","Mai","Juuni","Juuli","August","September","Oktoober","November","Detsember");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
if(nyear<1000) nyear+=1900;
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
if(nmin<=9) nmin="0"+nmin
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>

<script>
function goBack() {
    window.history.back();
}
</script>

<script>
function myFunction(x) {
    x.classList.toggle("change");
}
</script>


<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
    var x = document.getElementById("sisu");
    var y = document.getElementById("jalus");
    x.style.filter = "blur(6px)";
    x.style.transition = "0.3s";
    y.style.filter = "blur(6px)";
    y.style.transition = "0.3s";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
    var x = document.getElementById("sisu");
    var y = document.getElementById("jalus");
    x.style.filter = "blur(0px)";
    x.style.transition = "0.3s";
    y.style.filter = "blur(0px)";
    y.style.transition = "0.3s";
    y.style.clear = "both";
}
</script>    


    </head>
    
    <body>
        

        <?php 
            $tana = (isset($_GET['nadal']) ? date($_GET['nadal']) : date('Y-m-d', time() - ((date('w') - 1) * 86400))); 
        $paevaNr = array (
        'esmaspaev' => 0,
        'teisipaev' => 1,
        'kolmapaev' => 2,
        'neljapaev' => 3,
        'reede' => 4,
        'laupaev' => 5,
        'puhapaev' => 6);
        $paevaNimed = array (
        'esmaspaev' => 'Esmaspäev',
        'teisipaev' => 'Teisipäev',
        'kolmapaev' => 'Kolmapäev',
        'neljapaev' => 'Neljapäev',
        'reede' => 'Reede',
        'laupaev' => 'Laupäev',
        'puhapaev' => 'Pühapäev');
        ?>
        
