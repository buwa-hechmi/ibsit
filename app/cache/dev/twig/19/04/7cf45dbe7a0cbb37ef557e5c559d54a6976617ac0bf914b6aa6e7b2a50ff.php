<?php

/* questionnaireQuestionnaireBundle:Caller:show.html.twig */
class __TwigTemplate_19047cf45dbe7a0cbb37ef557e5c559d54a6976617ac0bf914b6aa6e7b2a50ff extends Twig_Template
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
    <h2><span class=\"label label-success\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
        echo "</span></h2>
  </div>
  <div class=\"col-md-2 text-right\" style=\"margin-top:20px\"> 
      <a class=\"btn btn-warning\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("caller");
        echo "\">
            Retour a la liste
        </a>
  </div>
  <div class=\"col-md-1 text-right\" style=\"margin-top:20px\"> 
      <a class=\"btn btn-info\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caller_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
            
            <tr >
                 <th>Adress</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adress"), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"info\">
                <th>Phone</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                 <th>Mail</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mail"), "html", null, true);
        echo "</td>
            </tr>
           
        </tbody>
    </table>   
   </div>
  </div>
  <div class=\"raw text-center\">
     <div class=\"col-md-12\" >
          <a class=\"btn btn-primary\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("response_new");
        echo "\">
            Particper a notre questionnaire
        </a>
     </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "questionnaireQuestionnaireBundle:Caller:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 49,  87 => 40,  80 => 36,  73 => 32,  58 => 20,  50 => 15,  42 => 10,  36 => 7,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
