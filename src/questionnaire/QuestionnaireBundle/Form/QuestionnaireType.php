<?php

namespace questionnaire\QuestionnaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuestionnaireType extends AbstractType
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
            ->add('language',null,array(
                'attr' => array('class' => 'form-control')))
            ->add('description','text', array(
                'attr' => array('class' => 'form-control')))
                
            ->add('welcomemessage','text', array(
                'attr' => array('class' => 'form-control')))
            ->add('attachement','text', array(
                'attr' => array('class' => 'form-control')))
            ->add('isgenerated',null,array(
                'attr' => array('class' => 'form-control')))
            ->add('type','choice',array(
                'attr' => array('class' => 'form-control'),
                 'choices'=> array('text'=>'texte','voice'=>'voice'))
                    )
            ->add('confirmationsms','text', array(
                'attr' => array('class' => 'form-control')))
            ->add('finalmessage','text', array(
                'attr' => array('class' => 'form-control')))
                
            
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'questionnaire\QuestionnaireBundle\Entity\Questionnaire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'questionnaire_questionnairebundle_questionnaire';
    }
}
