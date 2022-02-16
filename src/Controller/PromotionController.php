<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Specialite ;
use App\Entity\Niveau ;
use App\Entity\Etudiant ;

class PromotionController extends AbstractController
{
    /*
     * liste les promotions en cours
     */
    public function list(): Response
    {    
        
        return $this->render('promotion/listPromos.html.twig');
    }

     /*
      * Liste les étudiants des promos non archivées par spécialité, par niveau
      * La variable $source permet de savoir sur quel lien on a cliqué déclencher cette fonction
      * si $source=menu, on vient du menu de gauche et on affiche la liste de toutes les rp des etudiants de la spé et du niveau
      * si $source=tb, on affiche le tableau de bord (home enseignant) et on affiche les étudiant avec la liste des etudiants, le nb de rp, le nb de stage
     */
    public function listEtudiantsParPromo($idSpecialite, $idNiveau, $source): Response
    {
        $repository = $this->getDoctrine()->getRepository(Specialite::class);
        $specialite =  $repository->find($idSpecialite);

        $repository = $this->getDoctrine()->getRepository(Niveau::class);
        $niveau =  $repository->find($idNiveau);

        $repository = $this->getDoctrine()->getRepository(Etudiant::class);
        $etudiants = $repository->listParSpecialiteParNiveau($specialite,$niveau);

        if ($source == 'tb'){
            return $this->render('promotion/listEtudiants.html.twig', [ 'etudiants' => $etudiants]);  
        }
        if ($source == 'menu'){
            return $this->render('rp/listParSpecialiteEtNiveau.html.twig', [ 'etudiants' => $etudiants]);  
        }

      
        
    }




    
}
