<?php

namespace App\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin", name="admin_area")
 * @Security("is_granted('ROLE_USER')")
 */

class AdminController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'email' => $this->getUser() ? $this->getUser()->getUsername() : ''
        ]);
    }
}