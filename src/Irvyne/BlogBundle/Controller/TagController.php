<?php

namespace Irvyne\BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Irvyne\BlogBundle\Entity\Tag;

/**
 * Tag controller.
 *
 */
class TagController extends Controller
{
    /**
     * Lists all Tag entities.
     *
     * @return array
     *
     * @Template
     */
    public function indexAction()
    {
        $tags = $this->getTagRepository()->findAll();

        return [
            'tags' => $tags,
        ];
    }

    /**
     * Finds and displays a Tag entity.
     *
     * @param Tag $tag
     * @return array
     *
     * @ParamConverter("article", class="IrvyneBlogBundle:Tag")
     * @Template
     */
    public function showAction(Tag $tag)
    {
        return [
            'tag' => $tag,
        ];
    }

    /**
     * @return \Irvyne\BlogBundle\Entity\TagRepository
     * @throws \LogicException
     */
    public function getTagRepository()
    {
        return $this->getDoctrine()->getRepository('IrvyneBlogBundle:Tag');
    }
}
