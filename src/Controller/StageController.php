<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Stage ;
use App\Entity\TacheSemaine ;
use App\Form\StageType;
use App\Form\SemaineStageType;
use App\Form\TacheSemaineType;
use App\Entity\SemaineStage ;

class StageController extends AbstractController
{


    public function showEditSemaineStage(Request $request, $idStage, $numSemaine)
    {
          
        $stage = $this->getDoctrine()
        ->getRepository(Stage::class)
        ->find($idStage);

        //$semaine = $stage->getSemaineParNumero($numSemaine);
        $repository = $this->getDoctrine()->getRepository(SemaineStage::class);
        $semaine = $repository->findOneBy(
            ['stage' => $stage->getid(), 'numSemaine' => $numSemaine]);

        if ($semaine==null){
            $semaine = new SemaineStage();
            
        }
       
        $semaines = $this->getDoctrine()
        ->getRepository(SemaineStage::class)
        ->findByStage($idStage);

        $formSemaine = $this->createForm(SemaineStageType::class, $semaine);
        $formSemaine->handleRequest($request);
        $semaine = $formSemaine->getData();
        $semaine->setNumSemaine($numSemaine);
        $semaine->setStage($stage);

        $tache = new TacheSemaine();
        //$tache->setSemaineStage($semaine);
        $formTache = $this->createForm(TacheSemaineType::class, $tache);
        $formTache->handleRequest($request);

        /*$semaine = $this->getDoctrine()
        ->getRepository(SemaineStage::class)
        ->find($semaine->getId());*/

        $tache->setSemaineStage($semaine);

        if ($formTache->isSubmitted()) {
            $tache = $formTache->getData();
            $tache->setSemaineStage($semaine);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tache);
            $entityManager->flush();
            return $this->redirectToRoute('showEditSemaineStage', array( 'idStage' => $idStage, 'numSemaine' =>$numSemaine ));
        }
        elseif ($formSemaine->isSubmitted()){
            $semaine = $formSemaine->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($semaine);
            $entityManager->flush();
            return $this->redirectToRoute('showEditSemaineStage', array( 'idStage' => $idStage, 'numSemaine' =>$numSemaine ));
        }
        else
        {
            //return $this->render('stage/semaine.html.twig', array('formSemaine' => $formSemaine->createView(),'pEtudiant' => $etudiant, 'formTache' => $formTache->createView(), 'pStage' => $stage, 'pSemaine' => $semaine, 'pSemaines' => $semaines, 'pTaches' => $allTaches)); 
            return $this->render('stage/showEditSemaineStage.html.twig', array('formSemaine' => $formSemaine->createView(), 'formTache' => $formTache->createView(), 'stage' => $stage, 'semaine' => $semaine ));     
        }

    }
    /**
    * Liste les stages  d'un étudiant connecté
    */
    public function getLesStagesByEtudiant(): Response
    {
        $etudiant = $this->getUser()->getEtudiant();
        return $this->render('etudiant/listeStagesByEtudiant.html.twig', ['etudiant' => $etudiant]);
    }


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
            {
                return $this->render('stage/showAddEdit.html.twig', array('form' => $formStage->createView(),'stage'=>$stage, 'templateTwigParent' => 'baseEtudiant.html.twig'));   
   
            }

        }       
    }

   
    /**
    * Liste les stages suivis par un enseignant
    */
    public function getLesStagesSuivis(): Response
    {
        $enseignant = $this->getUser()->getEnseignant();
        return $this->render('enseignant/stage/listeStagesSuivis.html.twig', ['enseignant' => $enseignant]);
    }

    /**
    * consultation d'un stage par un enseignant
    */
    public function showStage($idStage): Response
    {
        $enseignant = $this->getUser()->getEnseignant();
       $repository = $this->getDoctrine()->getRepository(Stage::class);
       $stage = $repository->find($idStage);

       $formStage = $this->createForm(StageType::class, $stage,['champDesactive' => true,]);
       return $this->render('stage/showAddEdit.html.twig', array('form' => $formStage->createView(), 'stage'=>$stage, 'templateTwigParent' => 'baseEnseignant.html.twig'));   
      
       //$formStage->handleRequest($request); 
          
        //return $this->render('enseignant/stage/show.html.twig', ['stage' => $stage]);
    }



}
