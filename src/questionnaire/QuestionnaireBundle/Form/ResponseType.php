<?php

namespace questionnaire\QuestionnaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResponseType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question',null,array(
                'label'=>'Question',
                'empty_value' => 'Choisissez une question',
                'attr' => array('class' => 'form-control'))
                 
                 )
            ->add('content',null,array(
                'label'=>'Votre réponse',
                'attr' => array('class' => 'form-control')))
            ->add('attachement',null,array(
                'attr' => array('class' => 'form-control')))
           
            ->add('call',null,array(
                'label'=>'Caller',
                'attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'questionnaire\QuestionnaireBundle\Entity\Response'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'questionnaire_questionnairebundle_response';
    }
}
