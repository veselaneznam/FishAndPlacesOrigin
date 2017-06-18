<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_fb757036b540ec3e8af2aa0f11662270faeadae34a7294b0b3004500f58766d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_6cc1aa53dff30143382cfd125e9e9be6ddf7f0d303fd8fbcaa179599b1dba3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc1aa53dff30143382cfd125e9e9be6ddf7f0d303fd8fbcaa179599b1dba3ff->enter($__internal_6cc1aa53dff30143382cfd125e9e9be6ddf7f0d303fd8fbcaa179599b1dba3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_cb079938506d5a21f94f092e68d5acb1dd3d4230fd2089596fc5ba2a9e075e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb079938506d5a21f94f092e68d5acb1dd3d4230fd2089596fc5ba2a9e075e50->enter($__internal_cb079938506d5a21f94f092e68d5acb1dd3d4230fd2089596fc5ba2a9e075e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cc1aa53dff30143382cfd125e9e9be6ddf7f0d303fd8fbcaa179599b1dba3ff->leave($__internal_6cc1aa53dff30143382cfd125e9e9be6ddf7f0d303fd8fbcaa179599b1dba3ff_prof);

        
        $__internal_cb079938506d5a21f94f092e68d5acb1dd3d4230fd2089596fc5ba2a9e075e50->leave($__internal_cb079938506d5a21f94f092e68d5acb1dd3d4230fd2089596fc5ba2a9e075e50_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eaa5551b1eb0ce0114fc541639a38ecab339726c05a7b69607a995db801a774b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa5551b1eb0ce0114fc541639a38ecab339726c05a7b69607a995db801a774b->enter($__internal_eaa5551b1eb0ce0114fc541639a38ecab339726c05a7b69607a995db801a774b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ac6c8d9a1ea94bf4068dc0497c21f472e0408b788a73f7b559a715e970150746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6c8d9a1ea94bf4068dc0497c21f472e0408b788a73f7b559a715e970150746->enter($__internal_ac6c8d9a1ea94bf4068dc0497c21f472e0408b788a73f7b559a715e970150746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_ac6c8d9a1ea94bf4068dc0497c21f472e0408b788a73f7b559a715e970150746->leave($__internal_ac6c8d9a1ea94bf4068dc0497c21f472e0408b788a73f7b559a715e970150746_prof);

        
        $__internal_eaa5551b1eb0ce0114fc541639a38ecab339726c05a7b69607a995db801a774b->leave($__internal_eaa5551b1eb0ce0114fc541639a38ecab339726c05a7b69607a995db801a774b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "/var/www/FishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
