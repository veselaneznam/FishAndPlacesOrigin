<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_293bda954fb58093a3fd2285dbc7b8fa5ff21e28fa643ce020edaaad3f217121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_932506f4071970a12a2388ef763267e70fb3a31a75ebc2047d6d255b782b526b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932506f4071970a12a2388ef763267e70fb3a31a75ebc2047d6d255b782b526b->enter($__internal_932506f4071970a12a2388ef763267e70fb3a31a75ebc2047d6d255b782b526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_fef60c0ba0600fb1dee7732ca41ad2eaa0db62dbc9bda68f479cc559b3b1546e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef60c0ba0600fb1dee7732ca41ad2eaa0db62dbc9bda68f479cc559b3b1546e->enter($__internal_fef60c0ba0600fb1dee7732ca41ad2eaa0db62dbc9bda68f479cc559b3b1546e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_932506f4071970a12a2388ef763267e70fb3a31a75ebc2047d6d255b782b526b->leave($__internal_932506f4071970a12a2388ef763267e70fb3a31a75ebc2047d6d255b782b526b_prof);

        
        $__internal_fef60c0ba0600fb1dee7732ca41ad2eaa0db62dbc9bda68f479cc559b3b1546e->leave($__internal_fef60c0ba0600fb1dee7732ca41ad2eaa0db62dbc9bda68f479cc559b3b1546e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a01764961f7b8518e7d8e91e08f3d22ba5f93cc61cd3f7a00a87dcd9cecd34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a01764961f7b8518e7d8e91e08f3d22ba5f93cc61cd3f7a00a87dcd9cecd34c->enter($__internal_8a01764961f7b8518e7d8e91e08f3d22ba5f93cc61cd3f7a00a87dcd9cecd34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_136965201dc56abe5083fee023602ed0f1ddcdbee214313aa8be81950fbf34d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136965201dc56abe5083fee023602ed0f1ddcdbee214313aa8be81950fbf34d7->enter($__internal_136965201dc56abe5083fee023602ed0f1ddcdbee214313aa8be81950fbf34d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_136965201dc56abe5083fee023602ed0f1ddcdbee214313aa8be81950fbf34d7->leave($__internal_136965201dc56abe5083fee023602ed0f1ddcdbee214313aa8be81950fbf34d7_prof);

        
        $__internal_8a01764961f7b8518e7d8e91e08f3d22ba5f93cc61cd3f7a00a87dcd9cecd34c->leave($__internal_8a01764961f7b8518e7d8e91e08f3d22ba5f93cc61cd3f7a00a87dcd9cecd34c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
