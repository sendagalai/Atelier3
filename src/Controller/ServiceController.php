<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    


    public function showService($name): Response
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => ' William Shakespeare', 'email' =>  ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),
            );
        return $this->render('service/showService.html.twig', [
            'name' => $name,
            'auth'=> $authors,
        ]);
    }





    public function goToIndex(): Response
    {
        
        return $this->redirectToRoute('home_index');
    }

    public function index(): Response
    {
        // Your controller logic here

        // Create a new Response object and set its content
        $response = new Response();
        $response->setContent('Bonjour mes étudiants!');

        // Return the Response object
        return $response;
    }
    

    // Add more methods as needed
}