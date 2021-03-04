<?php

namespace App\Controller;


use App\Repository\PublicationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicationController extends AbstractController
{
    /**
     * @Route("/publication", name="publication")
     */
    public function index(): Response
    {
        return $this->render('publication/index.html.twig', [
            'controller_name' => 'PublicationController',
        ]);
    }

    /**
     * @param PublicationRepository $repo
     * @return Response
     * @Route("/AfficheC",name="affichage")
     */
    public function affiche(PublicationRepository $repos){
        //   $repo=$this->getDoctrine()->getRepository(Publication::class);
        $publication=$repos->findAll();
        return $this->render('publication/index.html.twig',['publication'=>$publication]);
    }
    /**
     * @Route("/delede/{id}", name="delete")
     */
    function delete($id,PublicationRepository $repo){
        $publication=$repo->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($publication);
        $em->flush();
        return $this->redirectToRoute('affichage');

    }
}
