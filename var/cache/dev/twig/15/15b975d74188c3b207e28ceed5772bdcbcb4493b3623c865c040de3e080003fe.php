<?php

/* @GoGreen/security/login.html.twig */
class __TwigTemplate_bca651cf093a0eef054f6d2091374e76e52f89859a29bff9711cc8b1985ac57c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Shop/base.html.twig", "@GoGreen/security/login.html.twig", 1);
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
        $__internal_a96e83ba94f1082c48d4e07549b6a2e18749a93572c3362e7438f850f99cc8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96e83ba94f1082c48d4e07549b6a2e18749a93572c3362e7438f850f99cc8f3->enter($__internal_a96e83ba94f1082c48d4e07549b6a2e18749a93572c3362e7438f850f99cc8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/security/login.html.twig"));

        $__internal_3d157278dd4fdbfe51968681567d017fe2be5c9d4e0520b7413e9a15e7ac18d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d157278dd4fdbfe51968681567d017fe2be5c9d4e0520b7413e9a15e7ac18d8->enter($__internal_3d157278dd4fdbfe51968681567d017fe2be5c9d4e0520b7413e9a15e7ac18d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a96e83ba94f1082c48d4e07549b6a2e18749a93572c3362e7438f850f99cc8f3->leave($__internal_a96e83ba94f1082c48d4e07549b6a2e18749a93572c3362e7438f850f99cc8f3_prof);

        
        $__internal_3d157278dd4fdbfe51968681567d017fe2be5c9d4e0520b7413e9a15e7ac18d8->leave($__internal_3d157278dd4fdbfe51968681567d017fe2be5c9d4e0520b7413e9a15e7ac18d8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7292ce81d2261fd342e83e1b1b845252cab26ae2d609c18d60224797b797902b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7292ce81d2261fd342e83e1b1b845252cab26ae2d609c18d60224797b797902b->enter($__internal_7292ce81d2261fd342e83e1b1b845252cab26ae2d609c18d60224797b797902b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b77e0344edbc32df663342d360715b30c65a3f8582c443e6f206f678b91941a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b77e0344edbc32df663342d360715b30c65a3f8582c443e6f206f678b91941a->enter($__internal_4b77e0344edbc32df663342d360715b30c65a3f8582c443e6f206f678b91941a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4b77e0344edbc32df663342d360715b30c65a3f8582c443e6f206f678b91941a->leave($__internal_4b77e0344edbc32df663342d360715b30c65a3f8582c443e6f206f678b91941a_prof);

        
        $__internal_7292ce81d2261fd342e83e1b1b845252cab26ae2d609c18d60224797b797902b->leave($__internal_7292ce81d2261fd342e83e1b1b845252cab26ae2d609c18d60224797b797902b_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/security/login.html.twig";
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
", "@GoGreen/security/login.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/security/login.html.twig");
    }
}
