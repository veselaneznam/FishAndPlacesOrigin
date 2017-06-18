<?php

/* @GoGreen/dam/index.html.twig */
class __TwigTemplate_a1fc2519448abb499aa2afb44336a2339dae952e40e598cb82fc87b1065e4f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GoGreen/base.html.twig", "@GoGreen/dam/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GoGreen/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d466be31ae58018695a496933427bb9e855757f5427e6efcbcd8e759a6b4b186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d466be31ae58018695a496933427bb9e855757f5427e6efcbcd8e759a6b4b186->enter($__internal_d466be31ae58018695a496933427bb9e855757f5427e6efcbcd8e759a6b4b186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/index.html.twig"));

        $__internal_dadacf8b79fd4ed3d0fc59b072ef892419cdf299df3bcb11a8e1980470327b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadacf8b79fd4ed3d0fc59b072ef892419cdf299df3bcb11a8e1980470327b73->enter($__internal_dadacf8b79fd4ed3d0fc59b072ef892419cdf299df3bcb11a8e1980470327b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d466be31ae58018695a496933427bb9e855757f5427e6efcbcd8e759a6b4b186->leave($__internal_d466be31ae58018695a496933427bb9e855757f5427e6efcbcd8e759a6b4b186_prof);

        
        $__internal_dadacf8b79fd4ed3d0fc59b072ef892419cdf299df3bcb11a8e1980470327b73->leave($__internal_dadacf8b79fd4ed3d0fc59b072ef892419cdf299df3bcb11a8e1980470327b73_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ff697f536306e6ff0ebfa269ee449b9b3312b49d2f5760f16de820a4958c3d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff697f536306e6ff0ebfa269ee449b9b3312b49d2f5760f16de820a4958c3d90->enter($__internal_ff697f536306e6ff0ebfa269ee449b9b3312b49d2f5760f16de820a4958c3d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bd156b2fd608354b88fa79d031d59fd5cc6fb069d9d5c0b04653922d01d9237e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd156b2fd608354b88fa79d031d59fd5cc6fb069d9d5c0b04653922d01d9237e->enter($__internal_bd156b2fd608354b88fa79d031d59fd5cc6fb069d9d5c0b04653922d01d9237e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
        // line 4
        $this->loadTemplate("@GoGreen/dam/list.html.twig", "@GoGreen/dam/index.html.twig", 4)->display($context);
        
        $__internal_bd156b2fd608354b88fa79d031d59fd5cc6fb069d9d5c0b04653922d01d9237e->leave($__internal_bd156b2fd608354b88fa79d031d59fd5cc6fb069d9d5c0b04653922d01d9237e_prof);

        
        $__internal_ff697f536306e6ff0ebfa269ee449b9b3312b49d2f5760f16de820a4958c3d90->leave($__internal_ff697f536306e6ff0ebfa269ee449b9b3312b49d2f5760f16de820a4958c3d90_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/dam/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@GoGreen/base.html.twig' %}
{% block content %}
    {{ parent() }}
    {% include '@GoGreen/dam/list.html.twig' %}
{% endblock %}
", "@GoGreen/dam/index.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/dam/index.html.twig");
    }
}
