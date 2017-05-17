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
        $__internal_dc58f281638a1ea56791f7558f026c85cb97e092fd2dc9ae4acc24f590eadeae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc58f281638a1ea56791f7558f026c85cb97e092fd2dc9ae4acc24f590eadeae->enter($__internal_dc58f281638a1ea56791f7558f026c85cb97e092fd2dc9ae4acc24f590eadeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ff6f3de1e6a8d2a892c8b3c56c2a9579df2214269f8f79d9e2ad22c8afd058d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6f3de1e6a8d2a892c8b3c56c2a9579df2214269f8f79d9e2ad22c8afd058d0->enter($__internal_ff6f3de1e6a8d2a892c8b3c56c2a9579df2214269f8f79d9e2ad22c8afd058d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dc58f281638a1ea56791f7558f026c85cb97e092fd2dc9ae4acc24f590eadeae->leave($__internal_dc58f281638a1ea56791f7558f026c85cb97e092fd2dc9ae4acc24f590eadeae_prof);

        
        $__internal_ff6f3de1e6a8d2a892c8b3c56c2a9579df2214269f8f79d9e2ad22c8afd058d0->leave($__internal_ff6f3de1e6a8d2a892c8b3c56c2a9579df2214269f8f79d9e2ad22c8afd058d0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d02604e38dedda22164ddc586f79ed4d359fc92655ec09ca401c2e2ac8086755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02604e38dedda22164ddc586f79ed4d359fc92655ec09ca401c2e2ac8086755->enter($__internal_d02604e38dedda22164ddc586f79ed4d359fc92655ec09ca401c2e2ac8086755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0dc1f846ffb8a5e65ba4fcf72a12f85fd2b3492596ba61dcfea44578624154bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc1f846ffb8a5e65ba4fcf72a12f85fd2b3492596ba61dcfea44578624154bb->enter($__internal_0dc1f846ffb8a5e65ba4fcf72a12f85fd2b3492596ba61dcfea44578624154bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0dc1f846ffb8a5e65ba4fcf72a12f85fd2b3492596ba61dcfea44578624154bb->leave($__internal_0dc1f846ffb8a5e65ba4fcf72a12f85fd2b3492596ba61dcfea44578624154bb_prof);

        
        $__internal_d02604e38dedda22164ddc586f79ed4d359fc92655ec09ca401c2e2ac8086755->leave($__internal_d02604e38dedda22164ddc586f79ed4d359fc92655ec09ca401c2e2ac8086755_prof);

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
