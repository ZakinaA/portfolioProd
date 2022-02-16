<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\TacheSemaine ;
use App\Entity\Stage ;
use App\Entity\SemaineStage ;
use App\Form\TacheSemaineType;

class TacheSemaineController extends AbstractController
{
    public function add(Request $request, $idStage, $numSemaine) : Response
    {
        
        $repository = $this->getDoctrine()->getRepository(Stage::class);
        $stage = $repository->find($idStage);

        $semaineStage = $stage->getSemaineStage($numSemaine);
        $semaineStage->setStage($stage);

        $tacheSemaine = new TacheSemaine();
       

        $form = $this->createForm(TacheSemaineType::class);
        $form->handleRequest($request);  

        if ($form->isSubmitted() && $form->isValid()) 
        {
                $tacheSemaine = $form->getData();
                $tacheSemaine->setSemaineStage($semaineStage);
                $entityManager = $this->getDoctrine()->getManager();
    
                $entityManager->persist($tacheSemaine);
                $entityManager->flush();

                $this->addFlash('success', 'Informations modifiées avec succès !');
                return $this->redirectToRoute('stageAddEdit', array('idStage' => $idStage));
               
          }
            else
            {
               
                return $this->render('tache_semaine/add.html.twig', array('form' => $form->createView(),  'templateTwigParent' => 'baseEtudiant.html.twig'));
   
            }

        
    }
}
