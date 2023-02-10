<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    #[Route('/list', name: 'app_list')]
    public function index(): Response
    {
        return $this->render('list/index.html.twig', [
            'controller_name' => 'ListController',
        ]);
    }

    #[Route('/listFormation', name: 'list_formation')]
    public function list(): Response
    {
        $formations = array(
            array('ref' => 'form147', 'Titre' => 'Formation Symfony 4',
                  'Description'=>'formation pratique',
                  'date_debut'=>'12/06/2020', 'date_fin'=>'19/06/2020',
                  'nb_participants'=>19) ,
            array('ref'=>'form177','Titre'=>'Formation SOA' ,
                  'Description'=>'formation theorique',
                  'date_debut'=>'03/12/2020','date_fin'=>'10/12/2020',
                  'nb_participants'=>0),
            array('ref'=>'form178','Titre'=>'Formation Angular' ,
                  'Description'=>'formation theorique',
                  'date_debut'=>'10/06/2020','date_fin'=>'14/06/2020',
                  'nb_participants'=>12)
        );

        return $this->render('list/list.html.twig', [
            'formations' => $formations,
        ]);
    }

    #[Route('/formation/{id}', name: 'formation')]
    public function participer($id) : Response
    {
        $formations = array(
            array('ref' => 'form147', 'Titre' => 'Formation Symfony 4',
                  'Description'=>'formation pratique',
                  'date_debut'=>'12/06/2020', 'date_fin'=>'19/06/2020',
                  'nb_participants'=>19) ,
            array('ref'=>'form177','Titre'=>'Formation SOA' ,
                  'Description'=>'formation theorique',
                  'date_debut'=>'03/12/2020','date_fin'=>'10/12/2020',
                  'nb_participants'=>0),
            array('ref'=>'form178','Titre'=>'Formation Angular' ,
                  'Description'=>'formation theorique',
                  'date_debut'=>'10/06/2020','date_fin'=>'14/06/2020',
                  'nb_participants'=>12)
        );

        return $this->render('list/detail.html.twig', [
            'formations' => $formations,
            'id' => $id,
        ]);
    }
}
