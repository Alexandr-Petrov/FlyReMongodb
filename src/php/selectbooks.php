   <?php


$link = mysqli_connect("localhost", "root", "", "project1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM books";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){
            echo '<div class = "Book">';
            echo '<img src ="' . $row['img'] . '">';
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
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
        
// Close connection
mysqli_close($link);
?> 