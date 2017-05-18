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
        $__internal_47cd28622c3a81de7ff26c8ac5b5286185c24eb8a5af3d75b5244cae7228934b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47cd28622c3a81de7ff26c8ac5b5286185c24eb8a5af3d75b5244cae7228934b->enter($__internal_47cd28622c3a81de7ff26c8ac5b5286185c24eb8a5af3d75b5244cae7228934b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_f5ce314b9bbff0b9bf13d6ed35c15a20aa798948adc68adbf9be34a45fe972c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ce314b9bbff0b9bf13d6ed35c15a20aa798948adc68adbf9be34a45fe972c2->enter($__internal_f5ce314b9bbff0b9bf13d6ed35c15a20aa798948adc68adbf9be34a45fe972c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_47cd28622c3a81de7ff26c8ac5b5286185c24eb8a5af3d75b5244cae7228934b->leave($__internal_47cd28622c3a81de7ff26c8ac5b5286185c24eb8a5af3d75b5244cae7228934b_prof);

        
        $__internal_f5ce314b9bbff0b9bf13d6ed35c15a20aa798948adc68adbf9be34a45fe972c2->leave($__internal_f5ce314b9bbff0b9bf13d6ed35c15a20aa798948adc68adbf9be34a45fe972c2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a63e241e62bc09f207141ae60e554681fbbbaa1b14295c5b6696a2024922102c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63e241e62bc09f207141ae60e554681fbbbaa1b14295c5b6696a2024922102c->enter($__internal_a63e241e62bc09f207141ae60e554681fbbbaa1b14295c5b6696a2024922102c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a0147eae4bdcd8405375bb743c71e2667c9d10f1db89b585dacb48e270a7577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0147eae4bdcd8405375bb743c71e2667c9d10f1db89b585dacb48e270a7577->enter($__internal_6a0147eae4bdcd8405375bb743c71e2667c9d10f1db89b585dacb48e270a7577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6a0147eae4bdcd8405375bb743c71e2667c9d10f1db89b585dacb48e270a7577->leave($__internal_6a0147eae4bdcd8405375bb743c71e2667c9d10f1db89b585dacb48e270a7577_prof);

        
        $__internal_a63e241e62bc09f207141ae60e554681fbbbaa1b14295c5b6696a2024922102c->leave($__internal_a63e241e62bc09f207141ae60e554681fbbbaa1b14295c5b6696a2024922102c_prof);

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
