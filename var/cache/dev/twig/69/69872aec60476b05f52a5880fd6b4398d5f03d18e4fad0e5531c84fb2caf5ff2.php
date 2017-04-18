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
        $__internal_8ecb0a2d76eac700faedab10c6ed1b215b3737acabd1b0b0baf887187bba60b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ecb0a2d76eac700faedab10c6ed1b215b3737acabd1b0b0baf887187bba60b3->enter($__internal_8ecb0a2d76eac700faedab10c6ed1b215b3737acabd1b0b0baf887187bba60b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_5a10b0faf69f25f64c313b8685152905273df65d43605d7c61789636ef4eee9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a10b0faf69f25f64c313b8685152905273df65d43605d7c61789636ef4eee9e->enter($__internal_5a10b0faf69f25f64c313b8685152905273df65d43605d7c61789636ef4eee9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8ecb0a2d76eac700faedab10c6ed1b215b3737acabd1b0b0baf887187bba60b3->leave($__internal_8ecb0a2d76eac700faedab10c6ed1b215b3737acabd1b0b0baf887187bba60b3_prof);

        
        $__internal_5a10b0faf69f25f64c313b8685152905273df65d43605d7c61789636ef4eee9e->leave($__internal_5a10b0faf69f25f64c313b8685152905273df65d43605d7c61789636ef4eee9e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_abc1134f72ab9e4f9de5d53a8e7883ca2775a50b937d54d6788d908c6ddd0153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc1134f72ab9e4f9de5d53a8e7883ca2775a50b937d54d6788d908c6ddd0153->enter($__internal_abc1134f72ab9e4f9de5d53a8e7883ca2775a50b937d54d6788d908c6ddd0153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0e51bc65c2b656789e0050699993eb9ca2b477586978b8b8e4f94b8816a926d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e51bc65c2b656789e0050699993eb9ca2b477586978b8b8e4f94b8816a926d0->enter($__internal_0e51bc65c2b656789e0050699993eb9ca2b477586978b8b8e4f94b8816a926d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0e51bc65c2b656789e0050699993eb9ca2b477586978b8b8e4f94b8816a926d0->leave($__internal_0e51bc65c2b656789e0050699993eb9ca2b477586978b8b8e4f94b8816a926d0_prof);

        
        $__internal_abc1134f72ab9e4f9de5d53a8e7883ca2775a50b937d54d6788d908c6ddd0153->leave($__internal_abc1134f72ab9e4f9de5d53a8e7883ca2775a50b937d54d6788d908c6ddd0153_prof);

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
