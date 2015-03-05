<?php

/* questionnaireQuestionnaireBundle:Questionnaire:index.html.twig */
class __TwigTemplate_e3bf2944e9a7c2e64f647d961493fdaa67b1394cd8158df10df3527780734a50 extends Twig_Template
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
  <div class=\"col-md-8\" style=\"color:#eb9316\"> 
    <h1>Liste des questionnaires</h1>
  </div>
  <div class=\"col-md-4 text-right\" style=\"margin-top:10px;\"> 
    
            <a class=\"btn btn-lg btn-warning\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("questionnaire_new");
        echo "\">
                Ajouter votre Questionnaire
            </a>

   </div>
  </div>
  <div class=\"raw\">
   <div class=\"col-md-12\">        
    <table class=\" table table-responsive\">
        <thead >
            <tr class=\"danger\">
              
                <th>Name</th>
                <th >Welcomemessage</th>
                <th width=\"150\">type</th>
                <th width=\"150\">Choisir actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "            <tr class=\"info\">
                ";
            // line 34
            echo "                <td ><b>";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, strip_tags($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"))), "html", null, true);
            echo "</b></td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "welcomemessage"), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
            echo "</td>
                <td >
                <ul class=\" list-inline\">
                    
                    <li>
                        <a class=\"btn btn-success\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionnaire_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    
                    
                    <li>
                        <a class=\"btn btn-primary\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionnaire_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>
  
       
   </div>
 </div>
 </div>
    ";
    }

    public function getTemplateName()
    {
        return "questionnaireQuestionnaireBundle:Questionnaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 52,  94 => 46,  86 => 41,  78 => 36,  74 => 35,  69 => 34,  66 => 31,  62 => 30,  40 => 11,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
