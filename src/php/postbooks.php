 <?php
require 'vendor/autoload.php';
$m= new MongoDB\Client("mongodb://127.0.0.1/");
$db = $m->project1;
// connect to mongodb
   $collection = $db->books;

   $cursor = $collection->find();
	
   foreach ($cursor as $row) {
       echo '<div class = "Book">';
            echo '<img src ="' . $row['link'] . '">';
            echo "<ul>";
                echo "<li> ID:  " . $row['id'] . " </li> ";
                echo "<li> Name:  " . $row['name'] . " </li> ";
                echo "<li> Author:  " . $row['author'] . " </li> ";
                echo "<li> Price:  " . $row['price'] . "$ </li> ";
                echo "<li> Genre:  " . $row['genre'] . " </li> ";
                echo "<li> Cover:  " . $row['cover'] . " </li> ";
        echo '</ul>';
                       echo ' <input  class = "shopcart" type="image" src="https://cdn4.iconfinder.com/data/icons/shopping-and-commerce-20/50/40-512.png" data-toggle="modal" data-target="#AnmeldenModal2" /><br>';
        echo '</div>';
   }
?> 