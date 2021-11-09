<?php
/**
 * Created by PhpStorm.
 * User: djo
 * Date: 08/11/2021
 * Time: 21:56
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user", name="user-route")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/inscription" ,name="user-inscription")
     */
    public function inscription(){

        return $this->render("inscription.html.twig");
    }


    /**
     * @Route("/nouveauinscri" ,name="user-nouveauinscri")
     */
    public function nouveauinscri(Request $request){
        $nom=$request->request->get("nom");
        $prenom=$request->request->get("prenom");
        $mdp=$request->request->get("mdp");
        return $this->render("nouveauinscri.html.twig",["nom"=>$nom,"prenom"=>$prenom,"mdp"=>$mdp]);
    }

    /**
     * @Route("/login" ,name="user-login")
     */
    public function login(){

        return $this->render("login.html.twig");
    }

    /**
     * @Route("/nouveaulogin" ,name="user-nouveaulogin")
     */
    public function nouveaulogin(Request $request,SessionInterface $session){
        $nom=$request->request->get("nom");
        $session->set("nom",$nom);
        return $this->redirectToRoute('home-routeindex-route');
    }

    /**
     * @Route("/deconnexion" ,name="user-deconnexions")
     */
    public function deconnexions(SessionInterface $session){
        $session->clear();
        return $this->redirectToRoute('home-routeindex-route');
    }

}