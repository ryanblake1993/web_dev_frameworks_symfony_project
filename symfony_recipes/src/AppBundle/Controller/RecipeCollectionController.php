<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 20/04/2017
 * Time: 13:37
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Recipe;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Elective controller
 * @Route("/collection")
 */
class RecipeCollectionController extends Controller
{


    /**
     * @Route("/",name="recipe_collection_index")
     */
    public function indexAction()
    {
        // no need to put elective in a TWIG array, twig can get data directly from it

        $argsArray = [

        ];

        $templateName = 'collection/index';

        return $this->render($templateName . '.html.twig',$argsArray);
    }


    /**
     *@Route("/clear",name="recipe_collection_clear")
     */
    public function recipeSessionClear()
    {
        $session = new Session();
        $session->remove('collection');

        return $this->redirectToRoute('user_index');

    }

    /**
     * @Route("/add/{id}", name="recipe_collection_add")
     */
    public function addRecipeSession(Recipe $recipe)
    {
        $recipes = [];

        $session = new Session();

        if ($session->has('collection'))
        {
            $recipes = $session->get('collection');
        }


        // get ID of recipe
        $id = $recipe->getId();

        // only try to add to array if not already in the array
        if(!array_key_exists($id, $recipes)){
            // append $recipe to our list
            $recipes[$id] = $recipe;

            // store updated array back into the session
            $session->set('collection', $recipes);
        }
        $argsArray = [

        ];

        $templateName = 'collection/index';

        return $this->render($templateName . '.html.twig',$argsArray);
    }



    /**
     * @Route("/delete/{id}", name="recipe_collection_delete")
     */
    public function deleteAction($id)
    {
        // defaul - new empty array
        $recipes = [];

        //if session has no recipes in the session array add an empty array
        $session = new Session();
        if($session->has('collection'))
        {
            $recipes = $session->get('collection');
        }

        //only try to remove if its in the array
        if(array_key_exists($id, $recipes))
        {
            //remove entry with the $id
            unset($recipes[$id]);
        }

        if(sizeof($recipes) <1)
        {
            return $this->redirectToRoute('recipes_bsket_clear');
        }

        $session->set('collection',$recipes);

        $argsArray = [

        ];

        $templateName = 'collection/index';

        return $this->render($templateName . '.html.twig',$argsArray);
    }

}