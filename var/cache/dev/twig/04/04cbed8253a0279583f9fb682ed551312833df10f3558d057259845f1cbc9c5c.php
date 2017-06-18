<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_64b0d19ec3ff78065f8716ed8160b40057a065482adaf89f7f23ad9da138f919 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_059a2ecd24e066170e0971696eb60d7c80a5b2d86da5c5e02cb1034e55b5e0d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_059a2ecd24e066170e0971696eb60d7c80a5b2d86da5c5e02cb1034e55b5e0d6->enter($__internal_059a2ecd24e066170e0971696eb60d7c80a5b2d86da5c5e02cb1034e55b5e0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_bbbca62e877ba2a71fc98781a7d71723209990349c7b6e9c05eb8eb840551731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbbca62e877ba2a71fc98781a7d71723209990349c7b6e9c05eb8eb840551731->enter($__internal_bbbca62e877ba2a71fc98781a7d71723209990349c7b6e9c05eb8eb840551731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_059a2ecd24e066170e0971696eb60d7c80a5b2d86da5c5e02cb1034e55b5e0d6->leave($__internal_059a2ecd24e066170e0971696eb60d7c80a5b2d86da5c5e02cb1034e55b5e0d6_prof);

        
        $__internal_bbbca62e877ba2a71fc98781a7d71723209990349c7b6e9c05eb8eb840551731->leave($__internal_bbbca62e877ba2a71fc98781a7d71723209990349c7b6e9c05eb8eb840551731_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e310a2b2749e498388e541e9051d6af65a691fbec06ea8e0eec47791990d266a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e310a2b2749e498388e541e9051d6af65a691fbec06ea8e0eec47791990d266a->enter($__internal_e310a2b2749e498388e541e9051d6af65a691fbec06ea8e0eec47791990d266a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_271f98c7d3bdade3c21920b2020bfda2f170e6b02a8d8b4e3f525a4602aec199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271f98c7d3bdade3c21920b2020bfda2f170e6b02a8d8b4e3f525a4602aec199->enter($__internal_271f98c7d3bdade3c21920b2020bfda2f170e6b02a8d8b4e3f525a4602aec199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_271f98c7d3bdade3c21920b2020bfda2f170e6b02a8d8b4e3f525a4602aec199->leave($__internal_271f98c7d3bdade3c21920b2020bfda2f170e6b02a8d8b4e3f525a4602aec199_prof);

        
        $__internal_e310a2b2749e498388e541e9051d6af65a691fbec06ea8e0eec47791990d266a->leave($__internal_e310a2b2749e498388e541e9051d6af65a691fbec06ea8e0eec47791990d266a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
