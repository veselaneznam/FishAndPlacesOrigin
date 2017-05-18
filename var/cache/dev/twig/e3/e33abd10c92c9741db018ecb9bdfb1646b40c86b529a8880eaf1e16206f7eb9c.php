<?php

/* @Admin/dam/activate.html.twig */
class __TwigTemplate_ab75502e7f176559cb229e32a67542626dbf81d11da61cd44c00985ca0e8745d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Admin/base.html.twig", "@Admin/dam/activate.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9152202c6f72f3ba60028590ba62a4a2d552623203e11face832d7c337bffe80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9152202c6f72f3ba60028590ba62a4a2d552623203e11face832d7c337bffe80->enter($__internal_9152202c6f72f3ba60028590ba62a4a2d552623203e11face832d7c337bffe80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/activate.html.twig"));

        $__internal_78d44c8080562ebc911d065f360f7e38ea60932315f2ce941bbabf1ced538aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d44c8080562ebc911d065f360f7e38ea60932315f2ce941bbabf1ced538aa0->enter($__internal_78d44c8080562ebc911d065f360f7e38ea60932315f2ce941bbabf1ced538aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/activate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9152202c6f72f3ba60028590ba62a4a2d552623203e11face832d7c337bffe80->leave($__internal_9152202c6f72f3ba60028590ba62a4a2d552623203e11face832d7c337bffe80_prof);

        
        $__internal_78d44c8080562ebc911d065f360f7e38ea60932315f2ce941bbabf1ced538aa0->leave($__internal_78d44c8080562ebc911d065f360f7e38ea60932315f2ce941bbabf1ced538aa0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a69422ef1fd8d2b708af6cc2041a55f2491e258fcef8417d165f3b1ad201f56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69422ef1fd8d2b708af6cc2041a55f2491e258fcef8417d165f3b1ad201f56b->enter($__internal_a69422ef1fd8d2b708af6cc2041a55f2491e258fcef8417d165f3b1ad201f56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb2165b769eb961ce65ec4fd031bbb56767c93fd43f4e716bd6609c783a12f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2165b769eb961ce65ec4fd031bbb56767c93fd43f4e716bd6609c783a12f83->enter($__internal_cb2165b769eb961ce65ec4fd031bbb56767c93fd43f4e716bd6609c783a12f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["activate_form"]) ? $context["activate_form"] : $this->getContext($context, "activate_form")), 'form_start');
        echo "
<div class=\"uk-modal-header\">
    <h3 class=\"uk-modal-title\">Activate this Dam?</h3>
</div>
<p>
    Are you sure you want to activate '";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "name", array()), "html", null, true);
        echo "'?<br/>
</p>
<div class=\"uk-modal-footer uk-text-right\">
    <div>
        <button type=\"submit\" class=\"md-btn md-btn-danger\" title=\"Click to proceed!\">
            <i class=\"uk-icon-trash\"></i> Activate
        </button>
        <button type=\"reset\" class=\"md-btn md-btn-warning uk-modal-close\">Cancel</button>
    </div>
</div>
";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["activate_form"]) ? $context["activate_form"] : $this->getContext($context, "activate_form")), 'form_end');
        echo "
";
        
        $__internal_cb2165b769eb961ce65ec4fd031bbb56767c93fd43f4e716bd6609c783a12f83->leave($__internal_cb2165b769eb961ce65ec4fd031bbb56767c93fd43f4e716bd6609c783a12f83_prof);

        
        $__internal_a69422ef1fd8d2b708af6cc2041a55f2491e258fcef8417d165f3b1ad201f56b->leave($__internal_a69422ef1fd8d2b708af6cc2041a55f2491e258fcef8417d165f3b1ad201f56b_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/dam/activate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  62 => 9,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Admin/base.html.twig' %}
{% block body %}
    {{ parent() }}
{{ form_start(activate_form) }}
<div class=\"uk-modal-header\">
    <h3 class=\"uk-modal-title\">Activate this Dam?</h3>
</div>
<p>
    Are you sure you want to activate '{{ dam.name }}'?<br/>
</p>
<div class=\"uk-modal-footer uk-text-right\">
    <div>
        <button type=\"submit\" class=\"md-btn md-btn-danger\" title=\"Click to proceed!\">
            <i class=\"uk-icon-trash\"></i> Activate
        </button>
        <button type=\"reset\" class=\"md-btn md-btn-warning uk-modal-close\">Cancel</button>
    </div>
</div>
{{ form_end(activate_form) }}
{% endblock %}
", "@Admin/dam/activate.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/dam/activate.html.twig");
    }
}
