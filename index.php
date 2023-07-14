<?php 
    require_once __DIR__ . '/classes/movie.php';

    $movielist = [
        new Movie(
            "The Shawshank Redemption",
            "Two imprisoned men bond over several years, finding solace and eventual redemption through acts of common decency.",
            9,
            "English",
            "poster.jpg",
            ["Drama", "Crime"]
        ),
        new Movie(
            "The Lord of the Rings: The Fellowship of the Ring",
            "A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.",
            8,
            "English",
            "poster.jpg",
            ["Adventure", "Fantasy"]
        )
    ];
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
    <ul>
        <?php foreach ($movielist as $movie) : ?>
            <?php $details = $movie->getDetails(); ?>
            <li>
                <strong>Name:</strong> <?php echo $details['name']; ?><br>
                <strong>Description:</strong> <?php echo $details['description']; ?><br>
                <strong>Rating:</strong> <?php echo $details['rating']; ?><br>
                <strong>Language:</strong> <?php echo $details['language']; ?><br>
                <strong>Poster:</strong> <img src="<?php echo $details['poster']; ?>" alt="Movie Poster"><br>
                <strong>Genres:</strong> <?php echo implode(", ", $details['genres']); ?><br>
                <br>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>