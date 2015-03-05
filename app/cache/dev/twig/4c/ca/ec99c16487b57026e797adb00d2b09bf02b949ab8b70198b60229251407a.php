<?php

/* questionnaireQuestionnaireBundle:Questionnaire:edit.html.twig */
class __TwigTemplate_4ccaec99c16487b57026e797adb00d2b09bf02b949ab8b70198b60229251407a extends Twig_Template
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
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
 <div class=\"raw\">
  <div class=\"col-md-9\" style=\"color:#c12e2a\">
    <h1>Questionnaire edit</h1>
  </div>
  <div class=\"col-md-2 text-right\" style=\"margin-top:30px\"> 
      <a class=\"btn btn-warning\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("questionnaire");
        echo "\">
            Retour a la liste
        </a>
  </div>
  <div class=\"col-md-1 text-right\" style=\"margin-top:30px\"> 
      ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
  </div>
 </div>
  <div class=\"raw\">
   <div class=\"col-md-12\" >        
    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
   </div>
</div> 
</div>

";
    }

    public function getTemplateName()
    {
        return "questionnaireQuestionnaireBundle:Questionnaire:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  47 => 15,  39 => 10,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
