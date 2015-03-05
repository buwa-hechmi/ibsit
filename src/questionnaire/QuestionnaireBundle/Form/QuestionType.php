<?php

namespace questionnaire\QuestionnaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuestionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('questiontext','text', array(
                'attr' => array('class' => 'form-control')))
            ->add('questiontexten','text', array(
                'attr' => array('class' => 'form-control')))
            ->add('attachement','text', array(
                'attr' => array('class' => 'form-control')))
            ->add('responsetype',null, array(
                'attr' => array('class' => 'form-control')))
            ->add('position',null, array(
                'attr' => array('class' => 'form-control')))
            ->add('mode',null, array(
                'attr' => array('class' => 'form-control')))
            ->add('questionnaire',null,array(
                'attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'questionnaire\QuestionnaireBundle\Entity\Question'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'questionnaire_questionnairebundle_question';
    }
}
