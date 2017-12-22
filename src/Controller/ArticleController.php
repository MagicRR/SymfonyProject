<?php

// src/Controller/ArticleController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller{

    // Routage English
    /**
     * @Route(
     *     "/article/{_locale}/{year}/{slug}.{_format}",
     *     name="articles_en",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "en",
     *         "_format": "html|rss",
     *         "year": "\d+"
     *     }
     * )
     */
    public function showEn($_locale, $year, $slug)
    {
        $varLocale    = "La variable de langue anglaise : " . $_locale . ".";
        $varYear      = "La variable d'année :" . $year . ".";
        $varSlug      = "La variable varSlug :" . $slug . ".";

        return $this->render(
            'article/article.html.twig', array(
            'varLocale' => $varLocale,
            'varYear' => $varYear,
            'varSlug' => $varSlug

        ));
    }

    // Routage Français
    /**
     * @Route(
     *     "/article/{_locale}/{year}/{slug}.{_format}",
     *     name="articles_fr",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "fr",
     *         "_format": "html|rss",
     *         "year": "\d+"
     *     }
     * )
     */
    public function showFr($_locale, $year, $slug)
    {
        $varLocale    = "La variable de langue française : " . $_locale . ".";
        $varYear      = "La variable d'année :" . $year . ".";
        $varSlug      = "La variable varSlug :" . $slug . ".";

        return $this->render(
            'article/article.html.twig', array(
            'varLocale' => $varLocale,
            'varYear' => $varYear,
            'varSlug' => $varSlug

        ));
    }
}

?>
