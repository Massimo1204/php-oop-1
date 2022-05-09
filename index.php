<?php
    class Movie {
    protected $title;
    protected $releaseYear;
    protected $rating;
    protected $genre;
    protected $language;
    protected $duration;

        function __construct($title, $releaseYear, $rating, $genre, $language, $duration){
            
            $this->title =  $this->setTitle($title);
            $this->releaseYear =  $this->setReleaseYear($releaseYear);
            $this->rating =  $this->setRating($rating);
            $this->genre =  $this->setGenre($genre);
            $this->language =  $this->setLanguage($language);
            $this->duration =  $this->setDuration($duration);
        }

        public function setTitle($title){
            if(is_string($title)){
                return $title;
            }else{
                return 'error';
            }
        }

        public function setReleaseYear($releaseYear){
            if (is_int($releaseYear)){
                    return $releaseYear;
            }else{
                return 'error';
            }
        }

        public function setRating($rating){
            if(is_numeric($rating) && $rating >= 0 && $rating <= 10){
                return $rating;
            }else{
                return 'error';
            }
        }

        public function setGenre($genre){
            if(is_string($genre)){
                return $genre;
            }else{
                return 'error';
            }
        }

        public function setLanguage($language){
            if(is_string($language)){
                return $language;
            }else{
                return 'error';
            }
        }

        public function setDuration($duration){
            if(is_integer($duration)){
                return $duration;
            }else{
                return 'error';
            }
        }

        public function getTitle(){
            return $this->title;
        }

        public function getReleaseYear(){
            return $this->releaseYear;
        }

        public function getRating(){
            return $this->rating;
        }

        public function getGenre(){
            return $this->genre;
        }

        public function getLanguage(){
            return $this->language;
        }

        public function getDuration(){
            return $this->duration .'minutes';
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 1</title>
</head>
<body>
    <div>
        <h1>Movies</h1>
        <?php
            $inception = new Movie('Inception', 2010, 8.8, 'action, adventure', 'English', 148);
            var_dump($inception);
            echo "Title = " . $inception->getTitle() . ".<br>";
            echo "Release year = " . $inception->getReleaseYear() . "<br>";
            echo "Rating = " . $inception->getRating() . "<br>";
            echo "Genre = " . $inception->getGenre() . ".<br>";
            echo "Language = " . $inception->getLanguage() . ".<br>";
            echo "Duration = " . $inception->getDuration() . ".<br>";
        ?>
    </div>
    <div>
        <?php
            $interstellar = new Movie('Interstellar', 2014, 8.6, 'sci-fi, adventure, dramma', 'English', 169);
            var_dump($interstellar);
            echo "Title = " . $interstellar->getTitle() . ".<br>";
            echo "Release year = " . $interstellar->getReleaseYear() . "<br>";
            echo "Rating = " . $interstellar->getRating() . "<br>";
            echo "Genre = " . $interstellar->getGenre() . ".<br>";
            echo "Language = " . $interstellar->getLanguage() . ".<br>";
            echo "Duration = " . $interstellar->getDuration() . ".<br>";
        ?>
    </div>
</body>
</html>