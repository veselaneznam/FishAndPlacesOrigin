<?php

/* @Admin/security/login.html.twig */
class __TwigTemplate_c15f436b89378fb066f485278d8e8f7b3c0a709e166bc4a3988446068a53fb17 extends Twig_Template
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
        $__internal_97c1f21e8c7c9d0cb1559e8ee0fc7409391f2f4fc3d579b1b61f8b8ef48e83a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c1f21e8c7c9d0cb1559e8ee0fc7409391f2f4fc3d579b1b61f8b8ef48e83a5->enter($__internal_97c1f21e8c7c9d0cb1559e8ee0fc7409391f2f4fc3d579b1b61f8b8ef48e83a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/security/login.html.twig"));

        $__internal_6231cedda837f224011e1e4dd9f6ed339a3e43f692b63ea4252ac2a7662f6e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6231cedda837f224011e1e4dd9f6ed339a3e43f692b63ea4252ac2a7662f6e18->enter($__internal_6231cedda837f224011e1e4dd9f6ed339a3e43f692b63ea4252ac2a7662f6e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97c1f21e8c7c9d0cb1559e8ee0fc7409391f2f4fc3d579b1b61f8b8ef48e83a5->leave($__internal_97c1f21e8c7c9d0cb1559e8ee0fc7409391f2f4fc3d579b1b61f8b8ef48e83a5_prof);

        
        $__internal_6231cedda837f224011e1e4dd9f6ed339a3e43f692b63ea4252ac2a7662f6e18->leave($__internal_6231cedda837f224011e1e4dd9f6ed339a3e43f692b63ea4252ac2a7662f6e18_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_363c6a1edbac6af9f00f2aa4a6970ab4cc43d2194cbdfb4e4526454b89e9ec5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363c6a1edbac6af9f00f2aa4a6970ab4cc43d2194cbdfb4e4526454b89e9ec5a->enter($__internal_363c6a1edbac6af9f00f2aa4a6970ab4cc43d2194cbdfb4e4526454b89e9ec5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb15f74e2413fe37d461c21b7f9e859b1f64fb850e3312a0667ecaad4710c3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb15f74e2413fe37d461c21b7f9e859b1f64fb850e3312a0667ecaad4710c3ae->enter($__internal_cb15f74e2413fe37d461c21b7f9e859b1f64fb850e3312a0667ecaad4710c3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_cb15f74e2413fe37d461c21b7f9e859b1f64fb850e3312a0667ecaad4710c3ae->leave($__internal_cb15f74e2413fe37d461c21b7f9e859b1f64fb850e3312a0667ecaad4710c3ae_prof);

        
        $__internal_363c6a1edbac6af9f00f2aa4a6970ab4cc43d2194cbdfb4e4526454b89e9ec5a->leave($__internal_363c6a1edbac6af9f00f2aa4a6970ab4cc43d2194cbdfb4e4526454b89e9ec5a_prof);

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
", "@Admin/security/login.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/security/login.html.twig");
    }
}
