<?php

/* questionnaireQuestionnaireBundle:Layout:javascripts.html.twig */
class __TwigTemplate_3d09ab5a1ac0ee0d39a8552fa73989cd3e999d4551758b757eb7687d95ceb5c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('javascript', $context, $blocks);
        // line 14
        echo "
";
    }

    // line 1
    public function block_javascript($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3295e18_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3295e18_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3295e18_bootstrap_1.js");
            // line 10
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "3295e18_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3295e18_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3295e18_myjs_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "3295e18_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3295e18_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3295e18_jquery.bpopup.min_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "3295e18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3295e18") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3295e18.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "questionnaireQuestionnaireBundle:Layout:javascripts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  35 => 10,  30 => 2,  27 => 1,  22 => 14,  20 => 1,);
    }
}
