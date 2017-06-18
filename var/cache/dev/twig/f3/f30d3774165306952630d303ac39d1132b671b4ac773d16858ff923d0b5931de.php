<?php

/* @Admin/security/login.html.twig */
class __TwigTemplate_11d828a4d2e742d13660806eedb1a36c43b502d91dbb73584ad6dc95f8b4f217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Admin/base.html.twig", "@Admin/security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44a5b1ed461ab06bb6f96d632b4b023a576930808fc34f626f9d2a60df3425e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a5b1ed461ab06bb6f96d632b4b023a576930808fc34f626f9d2a60df3425e9->enter($__internal_44a5b1ed461ab06bb6f96d632b4b023a576930808fc34f626f9d2a60df3425e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/security/login.html.twig"));

        $__internal_0a06197e630a07e6947aa7d0aa28e6d2ec02aab4ccee61a82d8dfadda1383e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a06197e630a07e6947aa7d0aa28e6d2ec02aab4ccee61a82d8dfadda1383e07->enter($__internal_0a06197e630a07e6947aa7d0aa28e6d2ec02aab4ccee61a82d8dfadda1383e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a5b1ed461ab06bb6f96d632b4b023a576930808fc34f626f9d2a60df3425e9->leave($__internal_44a5b1ed461ab06bb6f96d632b4b023a576930808fc34f626f9d2a60df3425e9_prof);

        
        $__internal_0a06197e630a07e6947aa7d0aa28e6d2ec02aab4ccee61a82d8dfadda1383e07->leave($__internal_0a06197e630a07e6947aa7d0aa28e6d2ec02aab4ccee61a82d8dfadda1383e07_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fcc585518a1501e06782bb1cdf129338a599e2cef1dceecf12f2fdd3e955e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcc585518a1501e06782bb1cdf129338a599e2cef1dceecf12f2fdd3e955e8b->enter($__internal_7fcc585518a1501e06782bb1cdf129338a599e2cef1dceecf12f2fdd3e955e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8f0f1e4fdc3a942226cee6401956f4b3d1ea144839c254054c9ecaf6690267f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f0f1e4fdc3a942226cee6401956f4b3d1ea144839c254054c9ecaf6690267f->enter($__internal_a8f0f1e4fdc3a942226cee6401956f4b3d1ea144839c254054c9ecaf6690267f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 4
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
<form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_list");
        echo "\" />
    <button type=\"submit\" class=\"btn btn-primary\">login</button>
</form>
        </div></div></div>
";
        
        $__internal_a8f0f1e4fdc3a942226cee6401956f4b3d1ea144839c254054c9ecaf6690267f->leave($__internal_a8f0f1e4fdc3a942226cee6401956f4b3d1ea144839c254054c9ecaf6690267f_prof);

        
        $__internal_7fcc585518a1501e06782bb1cdf129338a599e2cef1dceecf12f2fdd3e955e8b->leave($__internal_7fcc585518a1501e06782bb1cdf129338a599e2cef1dceecf12f2fdd3e955e8b_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  72 => 12,  67 => 10,  62 => 7,  56 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Admin/base.html.twig' %}
{% block body %}
    {{ parent() }}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <input type=\"hidden\" name=\"_target_path\" value=\"{{ path('dam_list') }}\" />
    <button type=\"submit\" class=\"btn btn-primary\">login</button>
</form>
        </div></div></div>
{% endblock %}
", "@Admin/security/login.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/security/login.html.twig");
    }
}
