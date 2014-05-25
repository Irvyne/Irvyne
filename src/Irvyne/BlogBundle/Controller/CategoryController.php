<?php

namespace Irvyne\BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Irvyne\BlogBundle\Entity\Category;

/**
 * Category controller.
 *
 */
class CategoryController extends Controller
{

    /**
     * Lists all Category entities.
     *
     * @return array
     *
     * @Template
     */
    public function indexAction()
    {
        $categories = $this->getCategoryRepository()->findAll();

        return [
            'categories' => $categories,
        ];
    }

    /**
     * Finds and displays a Category entity.
     *
     * @param Category $category
     * @return array
     *
     * @ParamConverter("article", class="IrvyneBlogBundle:Category")
     * @Template
     */
    public function showAction(Category $category)
    {
        return [
            'category' => $category,
        ];
    }

    /**
     * @return \Irvyne\BlogBundle\Entity\CategoryRepository
     * @throws \LogicException
     */
    public function getCategoryRepository()
    {
        return $this->getDoctrine()->getRepository('IrvyneBlogBundle:Category');
    }
}
