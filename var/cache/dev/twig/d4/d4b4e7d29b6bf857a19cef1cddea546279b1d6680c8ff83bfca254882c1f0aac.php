<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_825f6b14d9c9ab2747a0ce3b7d05df7e9a629f1bd01cba21c0fb1ac26328bed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41cbbc8dd8ecc3a22dc09a7027abd3abd16feccb2899688aa080ff8fd6a7163e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41cbbc8dd8ecc3a22dc09a7027abd3abd16feccb2899688aa080ff8fd6a7163e->enter($__internal_41cbbc8dd8ecc3a22dc09a7027abd3abd16feccb2899688aa080ff8fd6a7163e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_3c2e997c70f31d74b7ed071d8bd3c148fe04b1d5e7a64f4914d748e801026482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2e997c70f31d74b7ed071d8bd3c148fe04b1d5e7a64f4914d748e801026482->enter($__internal_3c2e997c70f31d74b7ed071d8bd3c148fe04b1d5e7a64f4914d748e801026482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_41cbbc8dd8ecc3a22dc09a7027abd3abd16feccb2899688aa080ff8fd6a7163e->leave($__internal_41cbbc8dd8ecc3a22dc09a7027abd3abd16feccb2899688aa080ff8fd6a7163e_prof);

        
        $__internal_3c2e997c70f31d74b7ed071d8bd3c148fe04b1d5e7a64f4914d748e801026482->leave($__internal_3c2e997c70f31d74b7ed071d8bd3c148fe04b1d5e7a64f4914d748e801026482_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9afb31ca8dd62b09f6be41fe76a55456f430aeea839feefdefa1568ec627388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9afb31ca8dd62b09f6be41fe76a55456f430aeea839feefdefa1568ec627388->enter($__internal_c9afb31ca8dd62b09f6be41fe76a55456f430aeea839feefdefa1568ec627388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0bb50f73098d18042c7da9aff0cba903ded2db33ac17d77621dd01f49b826e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bb50f73098d18042c7da9aff0cba903ded2db33ac17d77621dd01f49b826e3->enter($__internal_d0bb50f73098d18042c7da9aff0cba903ded2db33ac17d77621dd01f49b826e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d0bb50f73098d18042c7da9aff0cba903ded2db33ac17d77621dd01f49b826e3->leave($__internal_d0bb50f73098d18042c7da9aff0cba903ded2db33ac17d77621dd01f49b826e3_prof);

        
        $__internal_c9afb31ca8dd62b09f6be41fe76a55456f430aeea839feefdefa1568ec627388->leave($__internal_c9afb31ca8dd62b09f6be41fe76a55456f430aeea839feefdefa1568ec627388_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
