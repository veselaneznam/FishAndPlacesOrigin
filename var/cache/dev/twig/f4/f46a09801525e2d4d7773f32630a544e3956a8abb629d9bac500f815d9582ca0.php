<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a1cfa07c9579e527a6b2cb86e51773cf1be9a3dce326a96ab69f3eb45b858d35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_c3ca2d81eca8253495dacd910de5a1649bc30cd5f1b8dc509387c5bafa24a279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ca2d81eca8253495dacd910de5a1649bc30cd5f1b8dc509387c5bafa24a279->enter($__internal_c3ca2d81eca8253495dacd910de5a1649bc30cd5f1b8dc509387c5bafa24a279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_83133d08cf58c1a6a05c33a7d4fd6677a822da77ad7e1e3194d579b510fe5efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83133d08cf58c1a6a05c33a7d4fd6677a822da77ad7e1e3194d579b510fe5efb->enter($__internal_83133d08cf58c1a6a05c33a7d4fd6677a822da77ad7e1e3194d579b510fe5efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3ca2d81eca8253495dacd910de5a1649bc30cd5f1b8dc509387c5bafa24a279->leave($__internal_c3ca2d81eca8253495dacd910de5a1649bc30cd5f1b8dc509387c5bafa24a279_prof);

        
        $__internal_83133d08cf58c1a6a05c33a7d4fd6677a822da77ad7e1e3194d579b510fe5efb->leave($__internal_83133d08cf58c1a6a05c33a7d4fd6677a822da77ad7e1e3194d579b510fe5efb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cc4886b4da7c5279d9e7c35bfda447a77417e738ab2b227b4cdf88abc064b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc4886b4da7c5279d9e7c35bfda447a77417e738ab2b227b4cdf88abc064b7f->enter($__internal_8cc4886b4da7c5279d9e7c35bfda447a77417e738ab2b227b4cdf88abc064b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fe7b298b044e622b731f625dd9e4f3c48ec8ba48b119790fc15daab151346f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7b298b044e622b731f625dd9e4f3c48ec8ba48b119790fc15daab151346f34->enter($__internal_fe7b298b044e622b731f625dd9e4f3c48ec8ba48b119790fc15daab151346f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_fe7b298b044e622b731f625dd9e4f3c48ec8ba48b119790fc15daab151346f34->leave($__internal_fe7b298b044e622b731f625dd9e4f3c48ec8ba48b119790fc15daab151346f34_prof);

        
        $__internal_8cc4886b4da7c5279d9e7c35bfda447a77417e738ab2b227b4cdf88abc064b7f->leave($__internal_8cc4886b4da7c5279d9e7c35bfda447a77417e738ab2b227b4cdf88abc064b7f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
