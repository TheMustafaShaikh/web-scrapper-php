<?php 

    include "myparser.php";


    $html = file_get_html("https://thepakistanpost.net/episodes/page/1");
    $getContent = $html->find('div[class="animation-2 items"]',0);


        //pictures    

        // foreach($getContent->find("article") as $element){
        //     $someData = $element->find('div[class="poster"]',0);
        //     foreach($someData->find('img') as $element1)
        //       echo $element1->src . '<br>';
        // }

            //href url

    // foreach($getContent->find("article") as $element){
    //     $someData = $element->find('div[class="poster"]',0);
    //     foreach($someData->find('div[class="season_m animation-1"]') as $element1){
    //         foreach($element->find('a') as $element2){
    //             echo $element2->href . '<br>';
    //         }
                
    //     }
           
    // }



        //data title;

        // foreach($getContent->find("article") as $element){
        //     $someData = $element->find('div[class="data"]',0);

        //     foreach($someData->find('span') as $element1)
        //         echo $element1->plaintext.' ';

        //     foreach($someData->find('span[class="serie"]') as $element1)
        //       echo $element1->plaintext . '<br>';
        // }
        


        //fetching video src


        $html2 = file_get_html("http://thepakistanpost.net/episodes/marasli-1x1/");
        echo $html2;
        // $getDiv = $html2->find('video');
        // echo count($getDiv);
        // echo $getDiv;
        // foreach($getDiv as $element){
        //     echo $element->src.'<br/>';
        // }


    






    

?>