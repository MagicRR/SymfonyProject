<?php

// src/Controller/LuckyController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller{

    /**
    * @Route("/lucky")
    */

    public function number(){

        $number = mt_rand(0,100);
        $number2 = mt_rand(0,100);

        return $this->render(
            'lucky/number.html.twig', array(
            'number' => $number,
            'number2' => $number2
        ));

        // return new Response(
        //     "<html><body>Lucky Number : " .$number. " </body></html>"
        // );

    }

    // public function text(){
    //
    //     return new Response(
    //         "<html><body>Text :  </body></html>"
    //     );
    //
    //     echo "Text";
    // }

}

?>
