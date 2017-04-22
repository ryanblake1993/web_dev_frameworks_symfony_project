<?php

namespace AppBundle\Form;

use AppBundle\AppBundle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\TagType;

class RecipeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $session = new Session();
        $username = '';

        if($session->has('user'))
        {
            $username = $session->get('user');
    //        settype($username,'string');
        }

      //  printf('***************'.$username);

        $builder->add('title')->add('summary')->add('steps')->add('ingredients')->add('headshot');

        $builder->add('username', EntityType::class,[

            'class' =>'AppBundle:User',
            'choice_label' =>'username',

        ]);

        $builder->add('tag', EntityType::class,[

           'class' =>'AppBundle:Tag',
            'choice_label' =>'name',

        ]);

        $builder->add('date', DateType::class, array(
            'widget'=>'single_text',
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Recipe'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_recipe';
    }


}
