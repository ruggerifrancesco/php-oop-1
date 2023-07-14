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
?>