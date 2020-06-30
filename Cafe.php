<?php


class Cafe
{
    public $visitors = [
        'V1' => [0, 5],
        'V2' => [1, 2],
        'V3' => [0],
        'V4' => [3, 4],
        'V5' => [5],
        'V6' => [6, 2],
        'V7' => [0, 1],
        'V8' => [0,1,2,3,4,5,6],
    ];

    public $genres = [
        0 => 'Jazz',
        1 => 'Rhythm',
        2 => 'Rock',
        3 => 'Country',
        4 => 'Soul',
        5 => 'Dance',
        6 => 'Blues',
    ];

    public $songNowKey = 0;

    public function __construct()
    {
        $this->songNowKey = $keyGenre = array_rand($this->genres);
        print_r('Playing song - '. $this->genres[$keyGenre]."\n");
        print_r("----------------------------\n");
        foreach ($this->visitors as $visitor => $genres) {
            $this->came($visitor, $genres);
        }
    }

    public function came($visitor, $genres){
        $keyGenre = $this->songNowKey;
        if(in_array($keyGenre, $genres)){
            print_r('Visitor - ' . $visitor . " - going to dance\n");
        }else{
            print_r('Visitor - ' . $visitor . " - going to eat\n");
        }
    }
}