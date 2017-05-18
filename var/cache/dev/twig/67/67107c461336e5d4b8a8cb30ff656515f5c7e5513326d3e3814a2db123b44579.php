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
        $__internal_919a30426127144bead124f35aea859680c8117e0e0213173ab92d1fdb28a66f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919a30426127144bead124f35aea859680c8117e0e0213173ab92d1fdb28a66f->enter($__internal_919a30426127144bead124f35aea859680c8117e0e0213173ab92d1fdb28a66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_e47c23b85bb6fba29213c2d0739eaba2d153e8ba193f955d87cf2b886487c755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47c23b85bb6fba29213c2d0739eaba2d153e8ba193f955d87cf2b886487c755->enter($__internal_e47c23b85bb6fba29213c2d0739eaba2d153e8ba193f955d87cf2b886487c755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_919a30426127144bead124f35aea859680c8117e0e0213173ab92d1fdb28a66f->leave($__internal_919a30426127144bead124f35aea859680c8117e0e0213173ab92d1fdb28a66f_prof);

        
        $__internal_e47c23b85bb6fba29213c2d0739eaba2d153e8ba193f955d87cf2b886487c755->leave($__internal_e47c23b85bb6fba29213c2d0739eaba2d153e8ba193f955d87cf2b886487c755_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5111f4fb66dde1d481a997dcf5942313474c25fc34ae152823fd07707154bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5111f4fb66dde1d481a997dcf5942313474c25fc34ae152823fd07707154bf9->enter($__internal_a5111f4fb66dde1d481a997dcf5942313474c25fc34ae152823fd07707154bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_46e1e26ea23f711939abd375df72dcd67483cf571fb2dd93fd56e10a9a34f895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e1e26ea23f711939abd375df72dcd67483cf571fb2dd93fd56e10a9a34f895->enter($__internal_46e1e26ea23f711939abd375df72dcd67483cf571fb2dd93fd56e10a9a34f895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_46e1e26ea23f711939abd375df72dcd67483cf571fb2dd93fd56e10a9a34f895->leave($__internal_46e1e26ea23f711939abd375df72dcd67483cf571fb2dd93fd56e10a9a34f895_prof);

        
        $__internal_a5111f4fb66dde1d481a997dcf5942313474c25fc34ae152823fd07707154bf9->leave($__internal_a5111f4fb66dde1d481a997dcf5942313474c25fc34ae152823fd07707154bf9_prof);

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
