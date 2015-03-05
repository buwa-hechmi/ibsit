<?php

/* questionnaireQuestionnaireBundle:Layout:stylesheets.html.twig */
class __TwigTemplate_72556c96ba214cd47d163aa6936dffff51090c5122624114cc61af2721a61d1d extends Twig_Template
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
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0c1c55b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c1c55b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0c1c55b_bootstrap_1.css");
            // line 7
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "0c1c55b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c1c55b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0c1c55b_bootstrap-theme_2.css");
            // line 7
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        } else {
            // asset "0c1c55b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c1c55b") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0c1c55b.css");
            // line 7
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "questionnaireQuestionnaireBundle:Layout:stylesheets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  35 => 8,  32 => 7,  26 => 8,  23 => 7,  19 => 1,);
    }
}
