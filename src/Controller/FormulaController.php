<?php

namespace App\Controller;

use ContainerJJFDEkr\getHttpClientService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Config\Framework\HttpClientConfig;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\HttpClient;

class FormulaController extends AbstractController
{  

    #[Route('/formula', name: 'app_formula', )]
    public function getData(): Response
    {
        $url='https://ergast.com/api/f1/2022.json';



        // $curl=curl_init();
        // curl_setopt_array($curl, [
        //     CURLOPT_URL => $url,
        //     CURLOPT_CUSTOMREQUEST => 'GET',
        //     CURLOPT_RETURNTRANSFER => true,
        // ]);
        // $rawResponse = curl_exec($curl);
        // $info = curl_getinfo($curl);
        // curl_close($curl);

        // if ($info['http_code'] === 200) {
        //     $response = json_decode($rawResponse, true);
        //    $schedule = $response['value'];
        //  }
        //  dd($schedule);
        //  return $this->render('jokes.html.twig', [
        //     'schedule' => $schedule ?? [],
        // ]);


            
        // I still couldnt get the http thing to work... This is just a straight copy from the second link you sent to me.

        $schedule=["Bahrain Grand Prix", "Bahrain International Circuit", "Saudi Arabian Grand Prix", "Australian Grand Prix", "Emilia Romagna Grand Prix", "Miami Grand Prix", "Spanish Grand Prix", "	Monaco Grand Prix","Azerbaijan Grand Prix", "Canadian Grand Prix", "British Grand Prix", "Austrian Grand Prix","French Grand Prix","Hungarian Grand Prix","Belgian Grand Prix","Dutch Grand Prix","Italian Grand Prix","Singapore Grand Prix","Japanese Grand Prix", "United States Grand Prix","Mexico City Grand Prix","Brazilian Grand Prix","Abu Dhabi Grand Prix"];

        return $this->render('formula/index.html.twig', [
            'schedule'=>$schedule,      
        ]);
    }
}
