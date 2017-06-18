<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_3d682f4e627bb1d30281d518beabfdac00becd07eaa1abd8c238a4f218ded373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_1560db7a1e0b770ea3dd0b0275a5257b6725765c544129aecc0d9bfb56c4c11c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1560db7a1e0b770ea3dd0b0275a5257b6725765c544129aecc0d9bfb56c4c11c->enter($__internal_1560db7a1e0b770ea3dd0b0275a5257b6725765c544129aecc0d9bfb56c4c11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_7b7d2c0bdb72471bdef6c5cc9aa8a8447fef33b252e6617321a330d58abd130b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7d2c0bdb72471bdef6c5cc9aa8a8447fef33b252e6617321a330d58abd130b->enter($__internal_7b7d2c0bdb72471bdef6c5cc9aa8a8447fef33b252e6617321a330d58abd130b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1560db7a1e0b770ea3dd0b0275a5257b6725765c544129aecc0d9bfb56c4c11c->leave($__internal_1560db7a1e0b770ea3dd0b0275a5257b6725765c544129aecc0d9bfb56c4c11c_prof);

        
        $__internal_7b7d2c0bdb72471bdef6c5cc9aa8a8447fef33b252e6617321a330d58abd130b->leave($__internal_7b7d2c0bdb72471bdef6c5cc9aa8a8447fef33b252e6617321a330d58abd130b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c41520a7d71ce50efdb238ac4f7b793358e2956d618f1d0dd13bf7a88a54501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c41520a7d71ce50efdb238ac4f7b793358e2956d618f1d0dd13bf7a88a54501->enter($__internal_4c41520a7d71ce50efdb238ac4f7b793358e2956d618f1d0dd13bf7a88a54501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_20de91f8d926a9dd1c803d296009acff734e015699168929342b7c18c5ec6cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20de91f8d926a9dd1c803d296009acff734e015699168929342b7c18c5ec6cbf->enter($__internal_20de91f8d926a9dd1c803d296009acff734e015699168929342b7c18c5ec6cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_20de91f8d926a9dd1c803d296009acff734e015699168929342b7c18c5ec6cbf->leave($__internal_20de91f8d926a9dd1c803d296009acff734e015699168929342b7c18c5ec6cbf_prof);

        
        $__internal_4c41520a7d71ce50efdb238ac4f7b793358e2956d618f1d0dd13bf7a88a54501->leave($__internal_4c41520a7d71ce50efdb238ac4f7b793358e2956d618f1d0dd13bf7a88a54501_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
