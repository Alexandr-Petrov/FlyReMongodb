 <?php



$link = mysqli_connect("localhost", "root", "", "project1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM e_books";

$name = strtolower($_POST["name"]);
$author = strtolower($_POST["author"]);
$genre = strtolower($_POST["genre"]);
$len1=strlen($name);
$len2=strlen($author);
$len3=strlen($genre);

$sql = "SELECT * FROM e_books";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){
            if ($len1 == 0 || stristr($name, substr(strtolower($row['name']), 0, $len1))) {
                if ($len2 == 0 || stristr($author, substr(strtolower($row['author']), 0, $len2))) {
                    if ($len3 == 0 ||stristr($genre, substr(strtolower($row['genre']), 0, $len3))) {
            echo '<div class = "Book">';
            echo '<img src ="' . $row['img'] . '">';
            echo "<ul>";
                echo "<li> ID:  " . $row['id'] . " </li> ";
                echo "<li> Name:  " . $row['name'] . " </li> ";
                echo "<li> Author:  " . $row['author'] . " </li> ";
                echo "<li> Price:  " . $row['price'] . "$ </li> ";
                echo "<li> Genre:  " . $row['genre'] . " </li> ";
                echo "<li> Format:  " . $row['format'] . " </li> ";
        echo '</ul>';
                       echo ' <input  class = "shopcart" type="image" src="https://cdn4.iconfinder.com/data/icons/shopping-and-commerce-20/50/40-512.png" data-toggle="modal" data-target="#AnmeldenModal3" /><br>';
        echo '</div>';
        }}}}
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