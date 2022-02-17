<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SemaineStage ;
use App\Entity\Stage ;
use App\Entity\TacheSemaine ;
use App\Form\SemaineStageType;
use App\Form\TacheSemaineType;

class SemaineStageController extends AbstractController
{

    /*
     * Permet à un étudiant d'ajouter ou de modifier des tâches lors d'une semaine de stage
     */
    public function addEditTache(Request $request, $idStage, $numSemaine): Response
    {
        $user = $this->getUser(); 
        
        
        $repository = $this->getDoctrine()->getRepository(Stage::class);
        $stage = $repository->find($idStage);
        
        if ($stage->getEtudiant()->getid() != $user->getEtudiant()->getId()  ){
            throw $this->createAccessDeniedException();
        }

        $semaineStage = $stage->getSemaineStage($numSemaine);

        // si la semaine de stage est null, c'est qu'elle n'a pas encore été créée, on l'instancie donc
        if ( $semaineStage == null){
            echo ('sem  stage non défini');
            $semaineStage = new SemaineStage();
            $semaineStage->setNumSemaine($numSemaine);
            $tache = new TacheSemaine();
            $semaineStage->addTacheSemaine($tache);
            
        }

        $formSemaineStage = $this->createForm(SemaineStageType::class, $semaineStage);
        $formSemaineStage->handleRequest($request);  

        $tache = new TacheSemaine();
        $formTache = $this->createForm(TacheSemaineType::class);

        if ($formSemaineStage->isSubmitted() && $formSemaineStage->isValid()) 
        {    
            $semaineStage = $formSemaineStage->getData();
            $semaineStage->setStage($stage);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($semaineStage);
            $entityManager->flush();
            $this->addFlash('success', 'Informations enregistrées avec succès !');                      
            return $this->render('semaine_stage/addEdit.html.twig', array('form' => $formSemaineStage->createView(),'formTache' => $formTache->createView(), 'semaineStage'=>$semaineStage, 'stage'=>$stage, 'templateTwigParent' => 'baseEtudiant.html.twig'));   
            //return $this->redirectToRoute('etudiantRps');    
        }
        else
        {
            return $this->render('semaine_stage/addEdit.html.twig', array('form' => $formSemaineStage->createView(),'formTache' => $formTache->createView(),'semaineStage'=>$semaineStage,'stage'=>$stage, 'templateTwigParent' => 'baseEtudiant.html.twig'));   

        }          
    }



    /*
     * consultation par l'enseignant de l'activité d'une semaine de stage d'un étudiant
    */
    public function showSemaine($idStage, $numSemaine)
    {
        $repository = $this->getDoctrine()->getRepository(Stage::class);
        $stage = $repository->find($idStage);

        $repository = $this->getDoctrine()->getRepository(SemaineStage::class);
        $semaineStage = $repository->findOneBy(
            ['stage' => $stage->getid(), 'numSemaine' => $numSemaine]);
            
        

        return $this->render('semaine_stage/show.html.twig', array('semaineStage'=>$semaineStage,'stage'=>$stage, 'templateTwigParent' => 'baseEnseignant.html.twig'));   
    }
}
