 
             
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
      <div class="navigrupp">
   <?php echo '<a href="grupid.php?nadal='.$tana.'&nimekiri=grupp"><img src="image/grupp.png">' .'grupp'. '</a>'; ?>
   </div>
   <div class="naviopetaja">
    <?php echo '<a href="opetajad.php?nadal='.$tana.'&nimekiri=opetaja"><img src="image/opetaja.png">' .'õpetaja'. '</a>'; ?>
    </div>
    <div class="naviruum">
    <?php echo '<a href="ruumid.php?nadal='.$tana.'&nimekiri=ruum"><img src="image/ruum.png">' .'ruum'. '</a>'; ?>
    </div>
  </div>
</div>

 
 
 <div class="fuuter" id="jalus">
  
  <div class="Quick" id="quikk">
    <span style="cursor:pointer" onclick="openNav()" class="fa fa-table fa-3x"></span>
</div>
  
    <div class="Home">
           <a href="index.php" class="fa fa-home fa-3x" aria-hidden="true"></a>
    </div>
 </div>   
 
 
<?php include_once 'header.php'; ?>
<div class="clockbox">
    <div id="clockbox"></div>
</div>
    <div class="Back">
        <a href="javascript:history.back()"class="fa fa-arrow-left fa-3x" aria-hidden="true"></a>
    </div>
       
       
          
   </body>
</html>