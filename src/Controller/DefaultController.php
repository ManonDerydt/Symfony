<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * page/ Action : Acceuil
     */
    public function index()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * Page/ Action : contact
     */
    public function contact()
    {
        return $this->render('default/contact.html.twig');
    }

    /**
     * Page/ Action : categorie
     * Permet d'afficher les articles d'une catégorie
     * @Route("/{alias}", name="default_category", methods={"GET"})
     */
    public function category()
    {
        return $this->render('default/category.html.twig');
    }
    /**
     * Page/ Action : Article
     * Permet d'afficher un aticle du site
     * @Route("/{category}/{alias}_{id}.html", name="default_article", methods={"GET"})
     */

    public function article()
    {
        return $this->render('default/article.html.twig');
    }

}



