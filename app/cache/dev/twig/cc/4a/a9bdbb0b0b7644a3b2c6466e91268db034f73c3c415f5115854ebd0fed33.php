<?php

/* questionnaireQuestionnaireBundle:Layout:header.html.twig */
class __TwigTemplate_cc4aa9bdbb0b0b7644a3b2c6466e91268db034f73c3c415f5115854ebd0fed33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"container\">
        <div class=\"raw\">
            <nav class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"navbar-header\">
                    <img class=\"img-responsive\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/questionnairequestionnaire/images/questionnaire_logo.png"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"navbar-collapse collapse navbar-right\" style=\"font-size: 30px;margin-top: 40px;padding-left: 5px;\">
                    <ul class=\"navbar-nav nav\">
                        <li ><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("questionnaire");
        echo "\">Questionnaire</a></li>
                        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("question");
        echo "\">Question</a></li>
                        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("caller");
        echo "\">Participant</a></li>
                        
                    </ul>
                    
                </div>
            
            </nav>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "questionnaireQuestionnaireBundle:Layout:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  37 => 11,  33 => 10,  26 => 6,  19 => 1,);
    }
}
