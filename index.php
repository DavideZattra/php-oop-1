<?php

class Movie{

    // public $id;
    public $title;
    public $genre;
    public $overview;
    public $vote = 0;
    public $original_language = 'it_IT';
    public $release_date;

    public function get_genre(){
        return $this->genre; 
    }


    public function set_release_date($release_date){
        if($release_date = 'today'){
            $this->release_date = date("d/m/Y");
        }else{
            $this->release_date = $release_date;
        }
    }


    function __construct($_title, $_genre) {
        $this->title = $_title;
        $this->genre = $_genre;

    }

}


$film_1 = new Movie('Pippo e pluto vanno in città', 'Animazione');
$film_2 = new Movie('Storie di una vita vissuta', 'Tragicomico');


$film_1->set_release_date('today');
$film_2->set_release_date("31/12/2012");

echo var_dump($film_1);
echo var_dump($film_2);

$film_1_genre = $film_1->get_genre();


echo $film_1_genre;
?>
<ul>

    <?php foreach ($film_1 as $category => $value) {?>
        
        
        <li><?php echo $category . ': ' .  $value ?></li>
        
        
    <?php } ?>
        
</ul>

<ul>

    <?php foreach ($film_2 as $category => $value) {?>
        
        
        <li><?php echo $category . ': ' .  $value ?></li>
        
        
    <?php } ?>
        
</ul>