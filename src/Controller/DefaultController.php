<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * page : Acceuil
     */
    public function index()
    {
        return new Response('<h1>Page Acceuil</h1>');
    }

    /**
     * Page/ Action : contact
     */
    public function contact()
    {
        return new Response('<h1>Page Contact</h1>');
    }

    /**
     * Page/ Action : categorie
     * Permet d'afficher les articles d'une catégorie
     * @Route("/{alias}", name="default_category", methods={"GET"})
     */
    public function category($alias)
    {
        return new Response("<h1>Page $alias</h1>");
    }

    /**
     * Page/ Action : Article
     * Permet d'afficher un aticle du site
     * @Route("/{category}/{alias}_{id}.html", name="default_article", methods={"GET"})
     */
    public function article()
    {
        # URL: https://localhost:8000/politique/couvre-feu-quand-la-situation-sanitaire-s-ameliorera-t-elle_14155614.html
        return new Response("<h1>Page Article</h1>");
    }

}



