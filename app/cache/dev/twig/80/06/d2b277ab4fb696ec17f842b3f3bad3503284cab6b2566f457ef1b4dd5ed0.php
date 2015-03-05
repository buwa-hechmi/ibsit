<?php

/* questionnaireQuestionnaireBundle:Caller:new.html.twig */
class __TwigTemplate_8006d2b277ab4fb696ec17f842b3f3bad3503284cab6b2566f457ef1b4dd5ed0 extends Twig_Template
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
    <h1>S'inscrire pour participer a note questionnaire</h1>
  </div>
  
  </div>
  <div class=\"raw\">
   <div class=\"col-md-12\" >     
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

       
</div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "questionnaireQuestionnaireBundle:Caller:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  28 => 3,  22 => 2,  20 => 1,);
    }
}
