<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Stage ;
use App\Entity\Etudiant ;
use App\Entity\Enseignant ;
use App\Entity\Promotion ;
use App\Entity\TacheSemaine ;
use App\Form\StageType;
use App\Form\SemaineStageType;
use App\Form\TacheSemaineType;
use App\Entity\SemaineStage ;
use App\Form\StageAffecterEnseignantType;

class StageController extends AbstractController
{
    /*
     * Permet à un étudiant d'ajouter ou de modifier un stage
     */
    public function addEdit(Request $request, $idStage): Response
    {
        $user = $this->getUser();  
        // paramètre par défaut de la route à 0. Si 0, on crée un nouveau stage
        if ($idStage == 0)
        {
            $stage = new Stage();       
        }
        else
        {
           // on est en modification
            $repository = $this->getDoctrine()->getRepository(Stage::class);
            $stage = $repository->find($idStage);
           
            
            if ($stage->getEtudiant()->getid() != $user->getEtudiant()->getId()  ){
                throw $this->createAccessDeniedException();
            }
        }
        $etudiant = $this->getUser()->getEtudiant();

     
        $formStage = $this->createForm(StageType::class, $stage, ['champDesactive' => false,]);
        $formStage->handleRequest($request);  

        if(!$etudiant){
            echo ("etudiant non trouvé");
            throw $this->createNotFoundException('Aucun etudiant connecté !!!');
        }
        else
        {
           
            if ($formStage->isSubmitted() && $formStage->isValid()) 
            {    
                echo ('stage validé');
                $stage = $formStage->getData();
                $stage->setEtudiant($etudiant);

            
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($stage);
                $entityManager->flush();
                $this->addFlash('success', 'Informations enregistrées avec succès !');                      
                return $this->render('stage/showAddEdit.html.twig', array('form' => $formStage->createView(), 'stage'=>$stage, 'templateTwigParent' => 'baseEtudiant.html.twig'));   
                //return $this->redirectToRoute('etudiantRps');    
            }
            else
            { echo ('stage non validé');
                return $this->render('stage/showAddEdit.html.twig', array('form' => $formStage->createView(),'stage'=>$stage, 'templateTwigParent' => 'baseEtudiant.html.twig'));   
   
            }

        }       
    }

    /**
    * Liste les stages  d'un étudiant connecté
    */
    public function getLesStagesByEtudiant(): Response
    {
        $etudiant = $this->getUser()->getEtudiant();
        return $this->render('etudiant/listStagesByEtudiant.html.twig', ['etudiant' => $etudiant]);
    }


    public function showAddSemaineStage(Request $request, $idStage, $numSemaine)
    {
          
        $stage = $this->getDoctrine()
        ->getRepository(Stage::class)
        ->find($idStage);

        $repository = $this->getDoctrine()->getRepository(SemaineStage::class);
        $semaine = $repository->findOneBy(
            ['stage' => $stage->getid(), 'numSemaine' => $numSemaine]);

        if ($semaine==null){
            $semaine = new SemaineStage();
            
        }

        $formSemaine = $this->createForm(SemaineStageType::class, $semaine);
        $formSemaine->handleRequest($request);
        $semaine = $formSemaine->getData();
        $semaine->setNumSemaine($numSemaine);
        $semaine->setStage($stage);

        $tache = new TacheSemaine();
        $formTache = $this->createForm(TacheSemaineType::class, $tache);
        $formTache->handleRequest($request);

        $tache->setSemaineStage($semaine);

        if ($formTache->isSubmitted()) {
            $tache = $formTache->getData();
            $tache->setSemaineStage($semaine);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tache);
            $entityManager->flush();
            return $this->redirectToRoute('semaineStageShowAdd', array( 'idStage' => $idStage, 'numSemaine' =>$numSemaine ));
        }
        elseif ($formSemaine->isSubmitted()){
            $semaine = $formSemaine->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($semaine);
            $entityManager->flush();
            return $this->redirectToRoute('semaineStageShowAdd', array( 'idStage' => $idStage, 'numSemaine' =>$numSemaine ));
        }
        else
        {
            return $this->render('stage/showAddSemaineStage.html.twig', array('formSemaine' => $formSemaine->createView(), 'formTache' => $formTache->createView(), 'stage' => $stage, 'semaine' => $semaine ));     
        }

    }
    
    /**
    * Liste les stages suivis par un enseignant
    */
    public function getLesStagesSuivis(): Response
    {
        $enseignant = $this->getUser()->getEnseignant();
        $stages = $enseignant->getStages();
        return $this->render('enseignant/listStagesSuivis.html.twig', ['stages' => $stages]);
    }

    /**
    * Liste les stages d'un étudiant selectionnée par un enseignant
    */
    public function listStagesByEtudiant($idEtudiant): Response
    {    
        $stages = $this->getDoctrine()
        ->getRepository(Stage::class)
        ->findByEtudiant($idEtudiant);
        return $this->render('enseignant/listStagesSuivis.html.twig', ['stages' => $stages]);
    }


    /**
    * consultation d'un stage par un enseignant
    */
    public function showStage($idStage): Response
    {
       $repository = $this->getDoctrine()->getRepository(Stage::class);
       $stage = $repository->find($idStage);

       $formStage = $this->createForm(StageType::class, $stage,['champDesactive' => true,]);
       return $this->render('stage/showAddEdit.html.twig', array('form' => $formStage->createView(), 'stage'=>$stage, 'templateTwigParent' => 'baseEnseignant.html.twig'));   
      
    }

    /*
    * liste les stages de 1ère et 2ème année pour les affecter à un enseignant
    */
    public function listerStagesAAffecter($idNiveau): Response
    {    
        // on récupère les promos en cours
        $repository = $this->getDoctrine()->getRepository(Promotion::class);
        $promos = $repository->findBy(
            ['statut' => 'AC']);

        // on récupère les étudiant selon le niveau et dont la promo est encore en cours
        $repository = $this->getDoctrine()->getRepository(Etudiant::class);
        $etudiants = $repository->findBy(
            ['niveau' => $idNiveau, 'promotion' => $promos]);

          foreach ($etudiants as $e){
              echo ( $e->getNom() . '  '  . $e->getPrenom() . '</br>');
          }  


        $form = $this->createForm(StageAffecterEnseignantType::class);
   
       //return $this->render('admin/listStagesAAffecter.html.twig', ['etudiants' => $etudiants]);
       return $this->render('admin/listStagesAAffecter.html.twig', array('form' => $form->createView(), 'etudiants'=>$etudiants));   

    }
}
