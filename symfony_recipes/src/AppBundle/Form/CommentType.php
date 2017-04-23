<?php

namespace AppBundle\Form;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('commenttext', TextareaType::class, array(
            'attr' => array('size' => '25'),
        ));

        $builder->add('date_time');

        /*
        $builder->add('dateTime',DateType::class, array(
            'widget' => 'single_text',
            // this is actually the default format for single_text
            'format' => 'yyyy-MM-dd',
        ));

        */

        $builder->add('recipe', EntityType::class,[

            'class' =>'AppBundle:Recipe',
            'choice_label' =>'comments',
        ]);

            $builder->add('username', EntityType::class,[

            'class' =>'AppBundle:User',
            'choice_label' =>'username',

        ]);

        // smyfony doc widget format doestn work.
      //  http://symfony.com/doc/current/reference/forms/types/date.html#format

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Comment'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_comment';
    }


}
