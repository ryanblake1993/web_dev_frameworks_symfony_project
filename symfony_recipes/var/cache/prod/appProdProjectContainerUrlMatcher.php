<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // admin_index
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_index',);
        }

        if (0 === strpos($pathinfo, '/comment')) {
            // comment_index
            if (rtrim($pathinfo, '/') === '/comment') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_comment_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'comment_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CommentController::indexAction',  '_route' => 'comment_index',);
            }
            not_comment_index:

            // comment_new
            if ($pathinfo === '/comment/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_comment_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CommentController::newAction',  '_route' => 'comment_new',);
            }
            not_comment_new:

            // comment_show
            if (preg_match('#^/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_comment_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_show')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::showAction',));
            }
            not_comment_show:

            // comment_edit
            if (preg_match('#^/comment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_comment_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_edit')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::editAction',));
            }
            not_comment_edit:

            // comment_delete
            if (preg_match('#^/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_comment_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_delete')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::deleteAction',));
            }
            not_comment_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/collection')) {
            // recipe_collection_index
            if (rtrim($pathinfo, '/') === '/collection') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'recipe_collection_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RecipeCollectionController::indexAction',  '_route' => 'recipe_collection_index',);
            }

            // recipe_collection_clear
            if ($pathinfo === '/collection/clear') {
                return array (  '_controller' => 'AppBundle\\Controller\\RecipeCollectionController::recipeSessionClear',  '_route' => 'recipe_collection_clear',);
            }

            // recipe_collection_add
            if (0 === strpos($pathinfo, '/collection/add') && preg_match('#^/collection/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'recipe_collection_add')), array (  '_controller' => 'AppBundle\\Controller\\RecipeCollectionController::addRecipeSession',));
            }

            // recipe_collection_delete
            if (0 === strpos($pathinfo, '/collection/delete') && preg_match('#^/collection/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'recipe_collection_delete')), array (  '_controller' => 'AppBundle\\Controller\\RecipeCollectionController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/recipe')) {
            // recipe_index
            if (rtrim($pathinfo, '/') === '/recipe') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_recipe_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'recipe_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RecipeController::indexAction',  '_route' => 'recipe_index',);
            }
            not_recipe_index:

            // recipe_new
            if ($pathinfo === '/recipe/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_recipe_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RecipeController::newAction',  '_route' => 'recipe_new',);
            }
            not_recipe_new:

            // recipe_show
            if (preg_match('#^/recipe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_recipe_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'recipe_show')), array (  '_controller' => 'AppBundle\\Controller\\RecipeController::showAction',));
            }
            not_recipe_show:

            // recipe_edit
            if (preg_match('#^/recipe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_recipe_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'recipe_edit')), array (  '_controller' => 'AppBundle\\Controller\\RecipeController::editAction',));
            }
            not_recipe_edit:

            // recipe_delete
            if (preg_match('#^/recipe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_recipe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'recipe_delete')), array (  '_controller' => 'AppBundle\\Controller\\RecipeController::deleteAction',));
            }
            not_recipe_delete:

        }

        // login
        if ($pathinfo === '/login') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_login;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginUserAction',  '_route' => 'login',);
        }
        not_login:

        if (0 === strpos($pathinfo, '/tag')) {
            // tag_index
            if (rtrim($pathinfo, '/') === '/tag') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tag_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tag_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TagController::indexAction',  '_route' => 'tag_index',);
            }
            not_tag_index:

            // tag_new
            if ($pathinfo === '/tag/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tag_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TagController::newAction',  '_route' => 'tag_new',);
            }
            not_tag_new:

            // tag_show
            if (preg_match('#^/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tag_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_show')), array (  '_controller' => 'AppBundle\\Controller\\TagController::showAction',));
            }
            not_tag_show:

            // tag_edit
            if (preg_match('#^/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tag_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_edit')), array (  '_controller' => 'AppBundle\\Controller\\TagController::editAction',));
            }
            not_tag_edit:

            // tag_delete
            if (preg_match('#^/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tag_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_delete')), array (  '_controller' => 'AppBundle\\Controller\\TagController::deleteAction',));
            }
            not_tag_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
