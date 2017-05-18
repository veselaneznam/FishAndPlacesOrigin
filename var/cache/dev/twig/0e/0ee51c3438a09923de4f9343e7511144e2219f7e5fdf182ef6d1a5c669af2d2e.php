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
        $__internal_9e60b761761e4f8e916bbdb9a4c0ab291b226b7a54efd5dd682191ec5878553f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e60b761761e4f8e916bbdb9a4c0ab291b226b7a54efd5dd682191ec5878553f->enter($__internal_9e60b761761e4f8e916bbdb9a4c0ab291b226b7a54efd5dd682191ec5878553f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/security/login.html.twig"));

        $__internal_d71fec3134cb48b243b6cc2519356cbdaab462eab86bc9c252f157852bf16369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71fec3134cb48b243b6cc2519356cbdaab462eab86bc9c252f157852bf16369->enter($__internal_d71fec3134cb48b243b6cc2519356cbdaab462eab86bc9c252f157852bf16369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e60b761761e4f8e916bbdb9a4c0ab291b226b7a54efd5dd682191ec5878553f->leave($__internal_9e60b761761e4f8e916bbdb9a4c0ab291b226b7a54efd5dd682191ec5878553f_prof);

        
        $__internal_d71fec3134cb48b243b6cc2519356cbdaab462eab86bc9c252f157852bf16369->leave($__internal_d71fec3134cb48b243b6cc2519356cbdaab462eab86bc9c252f157852bf16369_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8ee0853104bd9a3f13b4ba1605413863a798cd72a49065425796be3e291b0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ee0853104bd9a3f13b4ba1605413863a798cd72a49065425796be3e291b0e2->enter($__internal_f8ee0853104bd9a3f13b4ba1605413863a798cd72a49065425796be3e291b0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a96bf44b7a5f89500cc8078090cf504d49ff508b903b6767a697132a2f41c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a96bf44b7a5f89500cc8078090cf504d49ff508b903b6767a697132a2f41c0a->enter($__internal_6a96bf44b7a5f89500cc8078090cf504d49ff508b903b6767a697132a2f41c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a96bf44b7a5f89500cc8078090cf504d49ff508b903b6767a697132a2f41c0a->leave($__internal_6a96bf44b7a5f89500cc8078090cf504d49ff508b903b6767a697132a2f41c0a_prof);

        
        $__internal_f8ee0853104bd9a3f13b4ba1605413863a798cd72a49065425796be3e291b0e2->leave($__internal_f8ee0853104bd9a3f13b4ba1605413863a798cd72a49065425796be3e291b0e2_prof);

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
