    <?php
    include_once 'header.php';
 echo '<div class=valik>';
    echo'<div class=valigrupp>';    
         echo '<a href="grupid.php?nadal='.$tana.'&nimekiri=grupp">' .'grupp'. '</a>';
     echo '</div>';    
     echo'<div class=valiopetaja>';    
         echo '<a href="opetajad.php?nadal='.$tana.'&nimekiri=opetaja">' .'õpetaja'. '</a>';
     echo '</div>'; 
          echo'<div class=valiruum>';    
         echo '<a href="ruumid.php?nadal='.$tana.'&nimekiri=ruum">' .'ruum'. '</a>';
     echo '</div>';  
 echo '</div>';      
    include_once 'footer1st.php';
    ?>