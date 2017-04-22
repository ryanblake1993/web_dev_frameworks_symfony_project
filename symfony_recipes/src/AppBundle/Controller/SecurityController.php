<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 17/04/2017
 * Time: 16:50
 */

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\Security\Core\User\UserInterface;

class SecurityController extends Controller
{
    /**
     * @Route("/login",name="login")
     * @Method({"GET","POST"})
     */
    public function loginAdminAction(Request $request)
    {

        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $templateName = 'security/login';
        $argsArray = [
            'last_username' => $lastUsername,
            'error' => $error,
        ];

        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $templateName = 'admin/index';
            $argsArray = [
                'last_username' => $lastUsername,
                'error' => $error,
            ];

            return $this->render($templateName . '.html.twig', $argsArray);
        }

        return $this->render($templateName . '.html.twig', $argsArray);
    }


    /**
     * @Route("/login",name="login")
     * @Method({"GET","POST"})
     */
    public function loginUserAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $templateName = 'security/login';
        $argsArray = [
            'last_username' => $lastUsername,
            'error' => $error,
        ];

        if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $templateName = 'user/index';
            $argsArray = [
                'last_username' => $lastUsername,
                'error' => $error,
            ];

            return $this->render($templateName . '.html.twig', $argsArray);
        }

        return $this->render($templateName . '.html.twig', $argsArray);
    }
}