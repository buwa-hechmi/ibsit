<?php

/* questionnaireQuestionnaireBundle:Caller:index.html.twig */
class __TwigTemplate_785ff8327be803a8e224f71f913ed7689e04205b10c10c937fab56fe74ed8647 extends Twig_Template
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
    <h1>Liste des participants</h1>
  </div>
  <div class=\"col-md-4 text-right\" style=\"margin-top:10px;\"> 
    
            <a class=\"btn btn-lg btn-success\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("caller_new");
        echo "\">
                S'inscrire
            </a>

   </div>
  </div>
  <div class=\"raw\">
   <div class=\"col-md-12\">        
    <table class=\" table table-responsive\">
        <thead >
            <tr class=\"danger\">
       
                <th>Name</th>
                <th>Adress</th>
                <th>Phone</th>
                <th>Mail</th>
                <th width=\"150\">Choisir actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "            <tr class=\"info\">
                
               <td><a  href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caller_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adress"), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone"), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mail"), "html", null, true);
            echo "</td>
                <td >
                <ul class=\" list-inline\">
                    
                    <li>
                        <a class=\"btn btn-primary\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caller_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Faire un call</a>
                    </li>
                    
                    
                   ";
            // line 49
            echo "                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
  
       
   </div>
 </div>
 </div>
    ";
    }

    public function getTemplateName()
    {
        return "questionnaireQuestionnaireBundle:Caller:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 53,  100 => 49,  93 => 42,  85 => 37,  81 => 36,  77 => 35,  71 => 34,  67 => 32,  63 => 31,  40 => 11,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
