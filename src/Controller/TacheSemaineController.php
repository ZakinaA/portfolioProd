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

    public function removeTache($idTache)
    {
        $tache = $this->getDoctrine()
        ->getRepository(TacheSemaine::class)
        ->find($idTache);

        $idStage = $tache->getSemaineStage()->getStage()->getId();
        $numSemaine= $tache->getSemaineStage()->getNumSemaine();

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($tache);
        $manager->flush();
        return $this->redirectToRoute('showEditSemaineStage', array( 'idStage' => $idStage, 'numSemaine' =>$numSemaine ));
    }

    public function editTache(Request $request, $idTache)
    {
        $tache = $this->getDoctrine()
        ->getRepository(TacheSemaine::class)
        ->find($idTache);

        $idStage = $tache->getSemaineStage()->getStage()->getId();
        $numSemaine= $tache->getSemaineStage()->getNumSemaine();

        $form = $this->createForm(TacheSemaineType::class, $tache);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $tache = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tache);
            $entityManager->flush();

            return $this->redirectToRoute('showEditSemaineStage', array( 'idStage' => $idStage, 'numSemaine' =>$numSemaine ));
        }
        else{  
            return $this->render('stage/editTache.html.twig', array('form' => $form->createView()));
        }
    }


    /*
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
    }*/
}
