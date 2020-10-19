<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;



class PageContact
{
    /**
     * Page/ Action : Contact
     */
    public function contact()
    {
        return new Response('<h1>Page contact</h1>');
    }
}
