<?php

/* questionnaireQuestionnaireBundle:Questionnaire:new.html.twig */
class __TwigTemplate_2e9797d5017f74b2b6558406339b9a233a6cfaca09118a5f7a31068f6e93df06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("questionnaireQuestionnaireBundle:Layout:base.html.twig")->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
 <div class=\"raw\">
  <div class=\"col-md-8\" style=\"color:#c12e2a\">
    <h1>Questionnaire creation</h1>
  </div>
  <div class=\"col-md-4 text-right\" style=\"margin-top:35px\"> 
      <a class=\"btn btn-success\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("questionnaire");
        echo "\">
            Retour a la liste
        </a>
  </div>
  </div>
  <div class=\"raw\">
   <div class=\"col-md-12\" >     
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

       
</div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "questionnaireQuestionnaireBundle:Questionnaire:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,  36 => 9,  28 => 3,  22 => 2,  20 => 1,);
    }
}
