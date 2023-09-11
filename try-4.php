<?php 
$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Licorice','Bubble gum', 'Toffe', 'Jelly beans'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Indexed arrays</title>

    <h1>
        The Candy Store
    </h1>
    <h2>
Best Sellers

    </h2>

    <ul>
 <li>
    <?php  echo $best_sellers[0]?>
 </li>
 <li>
    <?php  echo $best_sellers[1]?>
 </li>
 <li>
    <?php  echo $best_sellers[2]?>
 </li>
 <li>
    <?php  echo $best_sellers[3]?>
 </li>
 <li>
    <?php  echo $best_sellers[4]?>
 </li>

    </ul>
</head>
<body>
    
</body>
</html>