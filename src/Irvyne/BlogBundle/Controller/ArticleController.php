<?php

namespace Irvyne\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Irvyne\BlogBundle\Entity\Article;

/**
 * Article controller.
 *
 */
class ArticleController extends Controller
{

    /**
     * Lists all Article entities.
     *
     * @return array
     *
     * @Template
     */
    public function indexAction()
    {
        $articles = $this->getArticleRepository()->findAll();

        return [
            'articles' => $articles,
        ];
    }


    /**
     * Finds and displays an Article entity.
     *
     * @param Article $article
     * @return array
     *
     * @ParamConverter("article", class="IrvyneBlogBundle:Article")
     * @Template
     */
    public function showAction(Article $article)
    {
        return [
            'article' => $article,
        ];
    }

    /**
     * @return \Irvyne\BlogBundle\Entity\ArticleRepository
     * @throws \LogicException
     */
    public function getArticleRepository()
    {
        return $this->getDoctrine()->getManager()->getRepository('IrvyneBlogBundle:Article');
    }
}