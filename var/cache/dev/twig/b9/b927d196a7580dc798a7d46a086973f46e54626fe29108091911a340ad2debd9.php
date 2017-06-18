<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_0612c41c3048c7fb0cde3e711182822029b5aedbf3ef97e1d981dbf19f830264 extends Twig_Template
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
        $__internal_2997ac9b5b24f26d231bd0b2879a988ffe86b8dd039862a19f6e575a59ad7e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2997ac9b5b24f26d231bd0b2879a988ffe86b8dd039862a19f6e575a59ad7e0d->enter($__internal_2997ac9b5b24f26d231bd0b2879a988ffe86b8dd039862a19f6e575a59ad7e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_ecf5ce39f796f5ae2d942c5b82ca4bb252a6f8c14ddc05319521b8cba40a7ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf5ce39f796f5ae2d942c5b82ca4bb252a6f8c14ddc05319521b8cba40a7ed7->enter($__internal_ecf5ce39f796f5ae2d942c5b82ca4bb252a6f8c14ddc05319521b8cba40a7ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2997ac9b5b24f26d231bd0b2879a988ffe86b8dd039862a19f6e575a59ad7e0d->leave($__internal_2997ac9b5b24f26d231bd0b2879a988ffe86b8dd039862a19f6e575a59ad7e0d_prof);

        
        $__internal_ecf5ce39f796f5ae2d942c5b82ca4bb252a6f8c14ddc05319521b8cba40a7ed7->leave($__internal_ecf5ce39f796f5ae2d942c5b82ca4bb252a6f8c14ddc05319521b8cba40a7ed7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
