<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_2b9e04335c6b4e56f9afaecff1739343db1c7b09ad65d18e732907ba39c04313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_397fdb6931b443179a8758d9a25cee756eb43860b9d9644d9195b685f68bd906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397fdb6931b443179a8758d9a25cee756eb43860b9d9644d9195b685f68bd906->enter($__internal_397fdb6931b443179a8758d9a25cee756eb43860b9d9644d9195b685f68bd906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_28af124482ffed2d669c400a93b45e197325aeab6a5cc296eb76f05c736c3654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28af124482ffed2d669c400a93b45e197325aeab6a5cc296eb76f05c736c3654->enter($__internal_28af124482ffed2d669c400a93b45e197325aeab6a5cc296eb76f05c736c3654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_397fdb6931b443179a8758d9a25cee756eb43860b9d9644d9195b685f68bd906->leave($__internal_397fdb6931b443179a8758d9a25cee756eb43860b9d9644d9195b685f68bd906_prof);

        
        $__internal_28af124482ffed2d669c400a93b45e197325aeab6a5cc296eb76f05c736c3654->leave($__internal_28af124482ffed2d669c400a93b45e197325aeab6a5cc296eb76f05c736c3654_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc1d78259e1650a85d5f221e04d1b971a765b0dfbde078f7cf5280cda57250d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1d78259e1650a85d5f221e04d1b971a765b0dfbde078f7cf5280cda57250d9->enter($__internal_fc1d78259e1650a85d5f221e04d1b971a765b0dfbde078f7cf5280cda57250d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9acb50114c767695b97b438716711e92fa4270c47f5e8b60562d31946906cdef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acb50114c767695b97b438716711e92fa4270c47f5e8b60562d31946906cdef->enter($__internal_9acb50114c767695b97b438716711e92fa4270c47f5e8b60562d31946906cdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_9acb50114c767695b97b438716711e92fa4270c47f5e8b60562d31946906cdef->leave($__internal_9acb50114c767695b97b438716711e92fa4270c47f5e8b60562d31946906cdef_prof);

        
        $__internal_fc1d78259e1650a85d5f221e04d1b971a765b0dfbde078f7cf5280cda57250d9->leave($__internal_fc1d78259e1650a85d5f221e04d1b971a765b0dfbde078f7cf5280cda57250d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
