<?php

namespace questionnaire\QuestionnaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CallerType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text', array(
                'attr' => array('class' => 'form-control')))
            ->add('adress','text', array(
                'attr' => array('class' => 'form-control')))
            ->add('phone','text', array(
                'attr' => array('class' => 'form-control')))
            ->add('mail','text', array(
                'attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'questionnaire\QuestionnaireBundle\Entity\Caller'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'questionnaire_questionnairebundle_caller';
    }
}
