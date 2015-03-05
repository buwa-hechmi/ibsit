<?php

/* questionnaireQuestionnaireBundle:Question:index.html.twig */
class __TwigTemplate_ec435d3b22ca848808279b377809b8d971301481bf5a27f51704cc1a4da3584c extends Twig_Template
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
    <h1>Liste des questions</h1>
  </div>
  <div class=\"col-md-4 text-right\" style=\"margin-top:10px;\"> 
    
            <a class=\"btn btn-lg btn-warning\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("question_new");
        echo "\">
                Ajouter votre Question
            </a>

   </div>
  </div>
  <div class=\"raw\">
   <div class=\"col-md-12\">        
    <table class=\" table table-responsive\">
        <thead >
            <tr class=\"danger\">
               
                <th >Questiont</th>
                
                <th>Attachement</th>
                <th>Responsetype</th>
                
                 <th >Questionnaire name</th>
                <th width=\"150\">Choisir actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "            <tr class=\"info\">
                
               <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "questiontext"), "html", null, true);
            echo "</td>
                
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "attachement"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "responsetype"), "html", null, true);
            echo "</td>
                
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "questionnaire"), "name"), "html", null, true);
            echo "</td>
                <td >
                <ul class=\" list-inline\">
                    
                    <li>
                        <a class=\"btn btn-success\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    
                    
                    <li>
                        <a class=\"btn btn-primary\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 57
        echo "        </tbody>
    </table>
  
       
   </div>
 </div>
 </div>
    ";
    }

    public function getTemplateName()
    {
        return "questionnaireQuestionnaireBundle:Question:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 57,  103 => 51,  95 => 46,  87 => 41,  82 => 39,  78 => 38,  73 => 36,  69 => 34,  65 => 33,  40 => 11,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
