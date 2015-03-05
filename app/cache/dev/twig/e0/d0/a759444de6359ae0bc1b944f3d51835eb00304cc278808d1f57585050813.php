<?php

/* questionnaireQuestionnaireBundle:Response:show.html.twig */
class __TwigTemplate_e0d0a759444de6359ae0bc1b944f3d51835eb00304cc278808d1f57585050813 extends Twig_Template
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
  <div class=\"col-md-10\" style=\"color:#c12e2a\"> 
    <h1><span class=\"label label-primary\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content"), "html", null, true);
        echo "</span></h1>
  </div>
  <div class=\"col-md-2 text-right\" style=\"margin-top:30px\"> 
      <a class=\"btn btn-warning\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("response");
        echo "\">
            Retour a la liste
        </a>
  </div>
  
  
         
 </div>     
 <div class=\"raw\">
  <div class=\"col-md-12\" >
  
    <table class=\"record_properties table table-responsive\">
        <tbody>
            <tr class=\"success\" >
                <th>Question</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "question"), "html", null, true);
        echo "</td>
            </tr>
            <tr >
                <th>Réponse</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content"), "html", null, true);
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
        return "questionnaireQuestionnaireBundle:Response:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 29,  60 => 25,  42 => 10,  36 => 7,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
