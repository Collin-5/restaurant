<ul>
    <?php
    foreach ($navitems as $navitem){
    
      echo "<li><a href=\"$navitem['slug']\">$navitem['title']</a></li>"; 

    }
      ?>
</ul>