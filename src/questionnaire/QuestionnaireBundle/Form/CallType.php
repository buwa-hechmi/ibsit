<?php

namespace questionnaire\QuestionnaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CallType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('calldate')
            ->add('assignementdate')
            ->add('duration')
            ->add('status')
            ->add('callnumber')
            ->add('rate')
            ->add('comment')
            ->add('caller')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'questionnaire\QuestionnaireBundle\Entity\Call'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'questionnaire_questionnairebundle_call';
    }
}
