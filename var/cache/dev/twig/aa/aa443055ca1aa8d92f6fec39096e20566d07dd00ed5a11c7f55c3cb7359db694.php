<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_9540e3b3cfc0e3dd43fabb7c4377bf8a04e8c9eda44916d9ae4e617ae382000d extends Twig_Template
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
        $__internal_17bff3c720c5847e31efd5eade23ce145b5ca93c775b1016f3f86bc6a83cf55d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17bff3c720c5847e31efd5eade23ce145b5ca93c775b1016f3f86bc6a83cf55d->enter($__internal_17bff3c720c5847e31efd5eade23ce145b5ca93c775b1016f3f86bc6a83cf55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_10a9e3911a8829dff051d09b2ce24d9bccbc2b3a6d77b1b440b8a4b036bf8ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a9e3911a8829dff051d09b2ce24d9bccbc2b3a6d77b1b440b8a4b036bf8ab9->enter($__internal_10a9e3911a8829dff051d09b2ce24d9bccbc2b3a6d77b1b440b8a4b036bf8ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_17bff3c720c5847e31efd5eade23ce145b5ca93c775b1016f3f86bc6a83cf55d->leave($__internal_17bff3c720c5847e31efd5eade23ce145b5ca93c775b1016f3f86bc6a83cf55d_prof);

        
        $__internal_10a9e3911a8829dff051d09b2ce24d9bccbc2b3a6d77b1b440b8a4b036bf8ab9->leave($__internal_10a9e3911a8829dff051d09b2ce24d9bccbc2b3a6d77b1b440b8a4b036bf8ab9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
