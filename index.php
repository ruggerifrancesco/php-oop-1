<?php 
    class Movie {
        public string $name;
        public string $description;
        public int $rating;
        public string $language;
        public string $poster;

        public function __construct(
            string $name, 
            string $description, 
            int $rating, 
            string $language, 
            string $poster
        ) {
            $this->name = $name;
            $this->description = $description;
            $this->rating = $rating;
            $this->language = $language;
            $this->poster = $poster;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Oop</title>
</head>
<body>
    
</body>
</html>