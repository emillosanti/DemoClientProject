<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Starter\CategoryBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    /**
     * @Route("/category", name="category")
     */
    public function categoryAction(Request $request)
    {
        $category = new Category();
        $category->setName('New Category');
        $category->setDescription('Category description');

        // replace this example code with whatever you need
        return $this->render('default/category.html.twig', [
            'category' => $category,
        ]);
    }
}
