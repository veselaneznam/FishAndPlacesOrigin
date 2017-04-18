<?php

/* @Dam/security/login.html.twig */
class __TwigTemplate_8e685cbce8279d68823c0178470805646a96472e73c7f564e953b55bf7c827c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Shop/base.html.twig", "@Dam/security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Shop/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c215dcea24cc81e9795827f06edb5e80db53e92b5e1d1017fa7dbaf87645f590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c215dcea24cc81e9795827f06edb5e80db53e92b5e1d1017fa7dbaf87645f590->enter($__internal_c215dcea24cc81e9795827f06edb5e80db53e92b5e1d1017fa7dbaf87645f590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/security/login.html.twig"));

        $__internal_0513eb20555c864979d3046a3e8a41fb12e010f899b6b1236650c0131341a21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0513eb20555c864979d3046a3e8a41fb12e010f899b6b1236650c0131341a21c->enter($__internal_0513eb20555c864979d3046a3e8a41fb12e010f899b6b1236650c0131341a21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c215dcea24cc81e9795827f06edb5e80db53e92b5e1d1017fa7dbaf87645f590->leave($__internal_c215dcea24cc81e9795827f06edb5e80db53e92b5e1d1017fa7dbaf87645f590_prof);

        
        $__internal_0513eb20555c864979d3046a3e8a41fb12e010f899b6b1236650c0131341a21c->leave($__internal_0513eb20555c864979d3046a3e8a41fb12e010f899b6b1236650c0131341a21c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_629c6df7a30c756ee2c7a5b50257a24a7c45e18c14029cd92c44e9957d86df7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629c6df7a30c756ee2c7a5b50257a24a7c45e18c14029cd92c44e9957d86df7a->enter($__internal_629c6df7a30c756ee2c7a5b50257a24a7c45e18c14029cd92c44e9957d86df7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1672a1763a3ac6e8eda3aeb2d11835f7dda34ff5104d23bf4bdd42ddd1fb8718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1672a1763a3ac6e8eda3aeb2d11835f7dda34ff5104d23bf4bdd42ddd1fb8718->enter($__internal_1672a1763a3ac6e8eda3aeb2d11835f7dda34ff5104d23bf4bdd42ddd1fb8718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1672a1763a3ac6e8eda3aeb2d11835f7dda34ff5104d23bf4bdd42ddd1fb8718->leave($__internal_1672a1763a3ac6e8eda3aeb2d11835f7dda34ff5104d23bf4bdd42ddd1fb8718_prof);

        
        $__internal_629c6df7a30c756ee2c7a5b50257a24a7c45e18c14029cd92c44e9957d86df7a->leave($__internal_629c6df7a30c756ee2c7a5b50257a24a7c45e18c14029cd92c44e9957d86df7a_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/security/login.html.twig";
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
        return new Twig_Source("{% extends '@Shop/base.html.twig' %}
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
", "@Dam/security/login.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/security/login.html.twig");
    }
}
