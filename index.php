<?php 

    $genres = ["Drama", "Crime"];
    $movie = new Movie(
        "The Shawshank Redemption", 
        "Two imprisoned men bond over several years, finding solace and eventual redemption through acts of common decency.", 
        9, 
        "English", 
        "poster.jpg",
        $genres);
    $details = $movie->getDetails();

    echo "Name: " . $details['name'] . "\n";
    echo "Description: " . $details['description'] . "\n";
    echo "Rating: " . $details['rating'] . "\n";
    echo "Language: " . $details['language'] . "\n";
    echo "Poster: " . $details['poster'] . "\n";
    echo "Genres: " . implode(", ", $details['genres']) . "\n";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Oop</title>

    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
</body>
</html>