<?php

namespace AztecGameStudios\Controllers;

class MainController extends AbstractController {
    //shows the home page
    public function get(): string {
        $properties = ['Message' => 'Main Page Hello World!'];
        return $this->render('main.twig', $properties);
    }

    //displays the about page
    public function about(): string {
        $properties = ['Message' ];
        return $this->render('about.twig', $properties);
    }

    //displays the Register page
    public function register(): string {
        $properties = ['Message'];
        return $this->render('register.twig', $properties);
    }

    //displays the game release pages
    public function game(): string {
        //gives present tme
        $current_time = time();

        //game release time
        $target_time = mktime(18,30,0,10,31,2018);

        //calculates time until launch
        $days_left = (int)(($target_time - $current_time)/86400);

        $properties = ['Message'=>$days_left. ' days to go!'];
        return $this->render('game.twig', $properties);
    }
}
?>