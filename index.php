<?php 
    class Movie {
        public string $name;
        public string $description;
        public int $rating;
        public string $language;
        public string $poster;
        public array $genres;

        public function __construct(
            string $name, 
            string $description, 
            int $rating, 
            string $language, 
            string $poster,
            array $genres,
        ) {
            $this->name = $name;
            $this->description = $description;
            $this->rating = $rating;
            $this->language = $language;
            $this->poster = $poster;
            $this->genres = $genres;
        }

        public function getDetails(): array {
            return [
                'name' => $this->name,
                'description' => $this->description,
                'rating' => $this->rating,
                'language' => $this->language,
                'poster' => $this->poster,
                'genres' => $this->genres,
            ];
        }
    }

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