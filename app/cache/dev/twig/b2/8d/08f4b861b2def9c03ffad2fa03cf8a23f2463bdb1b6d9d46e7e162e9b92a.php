<?php

/* questionnaireQuestionnaireBundle:Question:show.html.twig */
class __TwigTemplate_b28d08f4b861b2def9c03ffad2fa03cf8a23f2463bdb1b6d9d46e7e162e9b92a extends Twig_Template
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
  <div class=\"col-md-8\" style=\"color:#2aabd2\"> 
    <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "questionnaire"), "name"), "html", null, true);
        echo "<span class=\"label label-success\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "questiontext"), "html", null, true);
        echo "</span></h2>
  </div>
  <div class=\"col-md-2 text-right\" style=\"margin-top:20px\"> 
      <a class=\"btn btn-warning\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("question");
        echo "\">
            Retour a la liste
        </a>
  </div>
  <div class=\"col-md-1 text-right\" style=\"margin-top:20px\"> 
      <a class=\"btn btn-info\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Modifier
        </a>
  </div>
  <div class=\"col-md-1 text-right\" style=\"margin-top:20px\"> 
      ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
  </div>
         
 </div>     
 <div class=\"raw\">
  <div class=\"col-md-12\" >
  
    <table class=\"record_properties table table-responsive\">
        <tbody>
            <tr class=\"success\" >
                <th>Question</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "questiontext"), "html", null, true);
        echo "</td>
            </tr>
            <tr >
                 <th>Questiontexten</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "questiontexten"), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"info\">
                <th>Attachement</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "attachement"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Responsetype</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "responsetype"), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"warning\">
                <th>Position</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mode</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mode"), "html", null, true);
        echo "</td>
            </tr>
            
            
        </tbody>
    </table>

   
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "questionnaireQuestionnaireBundle:Question:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 51,  102 => 47,  95 => 43,  88 => 39,  81 => 35,  74 => 31,  60 => 20,  52 => 15,  44 => 10,  36 => 7,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
