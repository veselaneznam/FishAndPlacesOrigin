<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_cb49853ca5987546862d8f0c4f12703f266852bb0ec72380a04eb5eb984d5eee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_d6d06f0de9032e810ae22526abea0ee7015d988e6589c410ad74716d3c56bdf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d06f0de9032e810ae22526abea0ee7015d988e6589c410ad74716d3c56bdf4->enter($__internal_d6d06f0de9032e810ae22526abea0ee7015d988e6589c410ad74716d3c56bdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_056dc6c6a3bf64078cc7d102439441afb21c6daa0cf617a333bc819769ca84d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056dc6c6a3bf64078cc7d102439441afb21c6daa0cf617a333bc819769ca84d1->enter($__internal_056dc6c6a3bf64078cc7d102439441afb21c6daa0cf617a333bc819769ca84d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6d06f0de9032e810ae22526abea0ee7015d988e6589c410ad74716d3c56bdf4->leave($__internal_d6d06f0de9032e810ae22526abea0ee7015d988e6589c410ad74716d3c56bdf4_prof);

        
        $__internal_056dc6c6a3bf64078cc7d102439441afb21c6daa0cf617a333bc819769ca84d1->leave($__internal_056dc6c6a3bf64078cc7d102439441afb21c6daa0cf617a333bc819769ca84d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96a3bd95d5664eab032c2264a8b9104473e923822a130eee313c8075871dd428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a3bd95d5664eab032c2264a8b9104473e923822a130eee313c8075871dd428->enter($__internal_96a3bd95d5664eab032c2264a8b9104473e923822a130eee313c8075871dd428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_226c9befcda7ff341237d44b521a82706dbf9bdc4cc53d470c9732f7dea232ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226c9befcda7ff341237d44b521a82706dbf9bdc4cc53d470c9732f7dea232ff->enter($__internal_226c9befcda7ff341237d44b521a82706dbf9bdc4cc53d470c9732f7dea232ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_226c9befcda7ff341237d44b521a82706dbf9bdc4cc53d470c9732f7dea232ff->leave($__internal_226c9befcda7ff341237d44b521a82706dbf9bdc4cc53d470c9732f7dea232ff_prof);

        
        $__internal_96a3bd95d5664eab032c2264a8b9104473e923822a130eee313c8075871dd428->leave($__internal_96a3bd95d5664eab032c2264a8b9104473e923822a130eee313c8075871dd428_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
