<?php

/* questionnaireQuestionnaireBundle:Response:index.html.twig */
class __TwigTemplate_c5c74a10a0deb4f013c213112c14a2a64447b39db1e47bc4cac75709a1aaad0d extends Twig_Template
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
    <h1>Messages</h1>
  </div>
 
  </div>
  <div class=\"raw\">
   <div class=\"col-md-12\">        
    <table class=\" table table-responsive\">
        <thead >
            <tr class=\"danger\">
               <th>Question</th>
               <th>Caller</th>
                <th>call</th>
               <th>Reponse</th>
                <th>Attachement</th>
                <th width=\"150\">Choisir actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <tr class=\"info\">
                <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "question"), "html", null, true);
            echo "</th>
                <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "call"), "caller"), "html", null, true);
            echo "</th>
                <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "call"), "id"), "html", null, true);
            echo "</th>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "attachement"), "html", null, true);
            echo "</td>
                <td >
                <ul class=\" list-inline\">
                    
                    <li>
                        <a class=\"btn btn-primary\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("response_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    
                    
                    <li>
                        <a class=\"btn btn-primary\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("response_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 47
        echo "        </tbody>
    </table>
  
       
   </div>
 </div>
 </div>
    ";
    }

    public function getTemplateName()
    {
        return "questionnaireQuestionnaireBundle:Response:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 47,  93 => 41,  85 => 36,  77 => 31,  73 => 30,  69 => 29,  65 => 28,  61 => 27,  58 => 26,  54 => 25,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
