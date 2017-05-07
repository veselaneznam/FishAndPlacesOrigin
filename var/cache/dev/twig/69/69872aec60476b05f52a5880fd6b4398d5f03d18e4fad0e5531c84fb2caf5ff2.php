<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_6bbdfce8627581eff229299924d0770294b6d07583b2eefef8565bffb38d41a7 extends Twig_Template
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
        $__internal_f6338e15e8a93d2e8c913d9d2575a3ffd4e4bc07e0b000659ecb81ac88beb0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6338e15e8a93d2e8c913d9d2575a3ffd4e4bc07e0b000659ecb81ac88beb0fe->enter($__internal_f6338e15e8a93d2e8c913d9d2575a3ffd4e4bc07e0b000659ecb81ac88beb0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_e70c405dd6adfe47dc9dc440b434e635a5da0c310e65b50a46b3f7fd2073a7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70c405dd6adfe47dc9dc440b434e635a5da0c310e65b50a46b3f7fd2073a7cd->enter($__internal_e70c405dd6adfe47dc9dc440b434e635a5da0c310e65b50a46b3f7fd2073a7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f6338e15e8a93d2e8c913d9d2575a3ffd4e4bc07e0b000659ecb81ac88beb0fe->leave($__internal_f6338e15e8a93d2e8c913d9d2575a3ffd4e4bc07e0b000659ecb81ac88beb0fe_prof);

        
        $__internal_e70c405dd6adfe47dc9dc440b434e635a5da0c310e65b50a46b3f7fd2073a7cd->leave($__internal_e70c405dd6adfe47dc9dc440b434e635a5da0c310e65b50a46b3f7fd2073a7cd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b7fd1be34a9c3d4781c976711501cf82c0fb800257216fba3298c2b022473a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7fd1be34a9c3d4781c976711501cf82c0fb800257216fba3298c2b022473a5->enter($__internal_0b7fd1be34a9c3d4781c976711501cf82c0fb800257216fba3298c2b022473a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b45125acc84e45e669229296c286db217ff636e8b2803caa66849c9aec927daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45125acc84e45e669229296c286db217ff636e8b2803caa66849c9aec927daf->enter($__internal_b45125acc84e45e669229296c286db217ff636e8b2803caa66849c9aec927daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b45125acc84e45e669229296c286db217ff636e8b2803caa66849c9aec927daf->leave($__internal_b45125acc84e45e669229296c286db217ff636e8b2803caa66849c9aec927daf_prof);

        
        $__internal_0b7fd1be34a9c3d4781c976711501cf82c0fb800257216fba3298c2b022473a5->leave($__internal_0b7fd1be34a9c3d4781c976711501cf82c0fb800257216fba3298c2b022473a5_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
