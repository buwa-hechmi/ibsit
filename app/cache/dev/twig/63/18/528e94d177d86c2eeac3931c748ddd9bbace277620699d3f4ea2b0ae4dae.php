<?php

/* questionnaireQuestionnaireBundle:Questionnaire:show.html.twig */
class __TwigTemplate_6318528e94d177d86c2eeac3931c748ddd9bbace277620699d3f4ea2b0ae4dae extends Twig_Template
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
  <div class=\"col-md-8\" style=\"color:#c12e2a\"> 
    <h1><span class=\"label label-primary\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</span></h1>
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
      <a class=\"btn btn-info\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionnaire_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Modifier
        </a>
  </div>
  <div class=\"col-md-1 text-right\" style=\"margin-top:30px\"> 
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
                <th>Name</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</td>
            </tr>
            <tr >
                <th>Description</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"info\">
                <th>Welcomemessage</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "welcomemessage"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Attachement</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "attachement"), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"warning\">
                <th>Isgenerated</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isgenerated"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"danger\">
                <th>Confirmationsms</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "confirmationsms"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Finalmessage</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "finalmessage"), "html", null, true);
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
        return "questionnaireQuestionnaireBundle:Questionnaire:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 59,  114 => 55,  107 => 51,  100 => 47,  93 => 43,  86 => 39,  79 => 35,  72 => 31,  58 => 20,  50 => 15,  42 => 10,  36 => 7,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
