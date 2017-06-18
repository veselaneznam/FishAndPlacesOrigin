<?php

/* @GoGreen/dam/google_map.html.twig */
class __TwigTemplate_00f3bea7da90655f1eb8e2c09c01907d9306c0824642e3c055a1080cdf8dae3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GoGreen/base.html.twig", "@GoGreen/dam/google_map.html.twig", 1);
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
        $__internal_448d3e3816ec9511e33f13bd866a829024a2f8ca0b5688231cd3d7411c846f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448d3e3816ec9511e33f13bd866a829024a2f8ca0b5688231cd3d7411c846f3c->enter($__internal_448d3e3816ec9511e33f13bd866a829024a2f8ca0b5688231cd3d7411c846f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/google_map.html.twig"));

        $__internal_8dc56147a37e8c3b993186e0e134c84f26147b183239d89524d1cb5f1e7d0acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc56147a37e8c3b993186e0e134c84f26147b183239d89524d1cb5f1e7d0acd->enter($__internal_8dc56147a37e8c3b993186e0e134c84f26147b183239d89524d1cb5f1e7d0acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/google_map.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_448d3e3816ec9511e33f13bd866a829024a2f8ca0b5688231cd3d7411c846f3c->leave($__internal_448d3e3816ec9511e33f13bd866a829024a2f8ca0b5688231cd3d7411c846f3c_prof);

        
        $__internal_8dc56147a37e8c3b993186e0e134c84f26147b183239d89524d1cb5f1e7d0acd->leave($__internal_8dc56147a37e8c3b993186e0e134c84f26147b183239d89524d1cb5f1e7d0acd_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d3aeff94bffef6da5770242dc5d705602a9c3bec8e20c9d1a242e212d42e2b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3aeff94bffef6da5770242dc5d705602a9c3bec8e20c9d1a242e212d42e2b94->enter($__internal_d3aeff94bffef6da5770242dc5d705602a9c3bec8e20c9d1a242e212d42e2b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_82ba34a5485cad44c2fcf31b81df6ff7f91c5c4b21bb225fc7bf1042cfbf3346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ba34a5485cad44c2fcf31b81df6ff7f91c5c4b21bb225fc7bf1042cfbf3346->enter($__internal_82ba34a5485cad44c2fcf31b81df6ff7f91c5c4b21bb225fc7bf1042cfbf3346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<br />
<div class=\"thumb\">
";
        // line 6
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\MapExtension')->render(($context["map"] ?? $this->getContext($context, "map")));
        echo "
";
        // line 7
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\ApiExtension')->render(array(0 => ($context["map"] ?? $this->getContext($context, "map"))));
        echo "
    </div>
     ";
        // line 9
        $this->loadTemplate("@GoGreen/dam/list.html.twig", "@GoGreen/dam/google_map.html.twig", 9)->display($context);
        
        $__internal_82ba34a5485cad44c2fcf31b81df6ff7f91c5c4b21bb225fc7bf1042cfbf3346->leave($__internal_82ba34a5485cad44c2fcf31b81df6ff7f91c5c4b21bb225fc7bf1042cfbf3346_prof);

        
        $__internal_d3aeff94bffef6da5770242dc5d705602a9c3bec8e20c9d1a242e212d42e2b94->leave($__internal_d3aeff94bffef6da5770242dc5d705602a9c3bec8e20c9d1a242e212d42e2b94_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/dam/google_map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  60 => 7,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
<br />
<div class=\"thumb\">
{{ ivory_google_map(map) }}
{{ ivory_google_api([map]) }}
    </div>
     {% include '@GoGreen/dam/list.html.twig' %}
{% endblock %}
", "@GoGreen/dam/google_map.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/dam/google_map.html.twig");
    }
}
