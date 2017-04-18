<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_5713d5dbf52fc02236b9536cdf90c71e0406c887cfd77fa56e148cab86315594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_f90de01dcac96d70eba667092f80d529d9c623f68df1ea1a90d4810932a86379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f90de01dcac96d70eba667092f80d529d9c623f68df1ea1a90d4810932a86379->enter($__internal_f90de01dcac96d70eba667092f80d529d9c623f68df1ea1a90d4810932a86379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_d7673882583c0df70e3b052c317e5e11093f52fc45469150b60669eb1a59cfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7673882583c0df70e3b052c317e5e11093f52fc45469150b60669eb1a59cfb0->enter($__internal_d7673882583c0df70e3b052c317e5e11093f52fc45469150b60669eb1a59cfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f90de01dcac96d70eba667092f80d529d9c623f68df1ea1a90d4810932a86379->leave($__internal_f90de01dcac96d70eba667092f80d529d9c623f68df1ea1a90d4810932a86379_prof);

        
        $__internal_d7673882583c0df70e3b052c317e5e11093f52fc45469150b60669eb1a59cfb0->leave($__internal_d7673882583c0df70e3b052c317e5e11093f52fc45469150b60669eb1a59cfb0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8bca0a6fefc447cd861f56f109833fee570c73be41057175e8480d56464d88ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bca0a6fefc447cd861f56f109833fee570c73be41057175e8480d56464d88ac->enter($__internal_8bca0a6fefc447cd861f56f109833fee570c73be41057175e8480d56464d88ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4f034ea0117ebdefe903645d5c6d137c227494ae7978c6d265081b2bce5b0a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f034ea0117ebdefe903645d5c6d137c227494ae7978c6d265081b2bce5b0a64->enter($__internal_4f034ea0117ebdefe903645d5c6d137c227494ae7978c6d265081b2bce5b0a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4f034ea0117ebdefe903645d5c6d137c227494ae7978c6d265081b2bce5b0a64->leave($__internal_4f034ea0117ebdefe903645d5c6d137c227494ae7978c6d265081b2bce5b0a64_prof);

        
        $__internal_8bca0a6fefc447cd861f56f109833fee570c73be41057175e8480d56464d88ac->leave($__internal_8bca0a6fefc447cd861f56f109833fee570c73be41057175e8480d56464d88ac_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
