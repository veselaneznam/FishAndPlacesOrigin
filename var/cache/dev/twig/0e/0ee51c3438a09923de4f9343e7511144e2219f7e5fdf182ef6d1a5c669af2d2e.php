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
        $__internal_81fb658e998d88bc5cb9d1681d13fafca53385089e5d033aad744da4a506ab31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fb658e998d88bc5cb9d1681d13fafca53385089e5d033aad744da4a506ab31->enter($__internal_81fb658e998d88bc5cb9d1681d13fafca53385089e5d033aad744da4a506ab31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/security/login.html.twig"));

        $__internal_a00788165b090a3d3f48a625b5f50c02484299beffea8bc61bd362114e3e50e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00788165b090a3d3f48a625b5f50c02484299beffea8bc61bd362114e3e50e3->enter($__internal_a00788165b090a3d3f48a625b5f50c02484299beffea8bc61bd362114e3e50e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fb658e998d88bc5cb9d1681d13fafca53385089e5d033aad744da4a506ab31->leave($__internal_81fb658e998d88bc5cb9d1681d13fafca53385089e5d033aad744da4a506ab31_prof);

        
        $__internal_a00788165b090a3d3f48a625b5f50c02484299beffea8bc61bd362114e3e50e3->leave($__internal_a00788165b090a3d3f48a625b5f50c02484299beffea8bc61bd362114e3e50e3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_de1c43302a5c1056d35185901374adb583304c74805963ee21e19a318cce7c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1c43302a5c1056d35185901374adb583304c74805963ee21e19a318cce7c7d->enter($__internal_de1c43302a5c1056d35185901374adb583304c74805963ee21e19a318cce7c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a961ebd7456c5eca75eacea3457d8e103f15344de16f2fa878715148bbcb72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a961ebd7456c5eca75eacea3457d8e103f15344de16f2fa878715148bbcb72b->enter($__internal_7a961ebd7456c5eca75eacea3457d8e103f15344de16f2fa878715148bbcb72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a961ebd7456c5eca75eacea3457d8e103f15344de16f2fa878715148bbcb72b->leave($__internal_7a961ebd7456c5eca75eacea3457d8e103f15344de16f2fa878715148bbcb72b_prof);

        
        $__internal_de1c43302a5c1056d35185901374adb583304c74805963ee21e19a318cce7c7d->leave($__internal_de1c43302a5c1056d35185901374adb583304c74805963ee21e19a318cce7c7d_prof);

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
