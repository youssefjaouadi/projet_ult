<?php
/**
 * Created by PhpStorm.
 * User: djo
 * Date: 07/11/2021
 * Time: 23:45
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/home" ,name="home-route")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/index" ,name="index-route")
     */
    public function index(){

        $list_genre=["rock","rap","pop","metal","arabic"];

        $list_music=[
            ["titre"=>"High Hopes","chanteur"=>"pink floyd","duree"=>"5:00","image"=>"pinkfloyd.jpg","genre"=>"rock"],
            ["titre"=>"Bismarck","chanteur"=>"SABATON","duree"=>"5:14","image"=>"sabaton.jpg","genre"=>"metal"],
            ["titre"=>"Numb","chanteur"=>"Linkin Park","duree"=>"3:07","image"=>"linkinpark.jpg","genre"=>"rock"],
            ["titre"=>"زهرة المدائن","chanteur"=>"fairouz ","duree"=>"7:07","image"=>"fairouz.jpg","genre"=>"arabic"],
            ["titre"=>"Lose Yourself","chanteur"=>"eminem ","duree"=>"4:20","image"=>"eminem.jpg","genre"=>"rap"]
        ];


      return  $this->render("indexpage.html.twig",["list_genre"=>$list_genre,"list_music"=>$list_music]);
    }

    /**
     * @Route("/recherche" ,name="recherche-route")
     */
    public function recherche(Request $request){
        $recherche_query=$request->query->get("recherche");
        return  $this->render("recherche.html.twig",["recherche_qyery"=>$recherche_query]);
    }

    /**
     * @Route("/genre/{genre}" ,name="genre-route")
     */
    public function genre($genre){
        return  $this->render("genre.html.twig",["genre"=>$genre]);
    }

    /**
     * @Route("/music/{music}" ,name="music-route")
     */
    public function music($music){
        return  $this->render("music.html.twig",["music"=>$music]);
    }



}