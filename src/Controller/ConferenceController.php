<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/{hello}', name: 'homepage')]
    public function index(string $hello = 'word'): Response
    {
/*        return $this->render('conference/index.html.twig', [
            'controller_name' => 'ConferenceController',
        ]);*/

        $greet = '';
        if($hello){
            $greet = sprintf('<h1>Hello %s !</h1>', htmlspecialchars($hello));
        }

        return new Response(<<<EOF
            <html>
                <body>
                    {$greet}
                    <img src="/images/under-construction.gif" />
                </body>
            </html>
            EOF
        );  
    }


/*    #[Route('/', name: 'homepage')]
    #[Template('conference/index.html.twig')]
    public function index(): array
    {
        return [
            'controller_name' => 'ConferenceController',
        ];
    }*/





}
