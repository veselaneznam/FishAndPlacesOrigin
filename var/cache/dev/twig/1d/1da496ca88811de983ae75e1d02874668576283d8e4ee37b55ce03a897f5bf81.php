<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4a1eda53d227a3953bc1a8e3f17dc4b378a2510d717726e4154575314baa186b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa5929be374c94a56986ad7c393d78bebf3a86173875b617071cfdf9d56dd5cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5929be374c94a56986ad7c393d78bebf3a86173875b617071cfdf9d56dd5cc->enter($__internal_fa5929be374c94a56986ad7c393d78bebf3a86173875b617071cfdf9d56dd5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_07b031c81cf606794206b88d2ca433ab98d6ec69bd713a238f7d0dc55eeee297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b031c81cf606794206b88d2ca433ab98d6ec69bd713a238f7d0dc55eeee297->enter($__internal_07b031c81cf606794206b88d2ca433ab98d6ec69bd713a238f7d0dc55eeee297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa5929be374c94a56986ad7c393d78bebf3a86173875b617071cfdf9d56dd5cc->leave($__internal_fa5929be374c94a56986ad7c393d78bebf3a86173875b617071cfdf9d56dd5cc_prof);

        
        $__internal_07b031c81cf606794206b88d2ca433ab98d6ec69bd713a238f7d0dc55eeee297->leave($__internal_07b031c81cf606794206b88d2ca433ab98d6ec69bd713a238f7d0dc55eeee297_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1895c84d0295701bd96f07f67765ecc9ed78b4e4c2341037b4adf2d3da0c336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1895c84d0295701bd96f07f67765ecc9ed78b4e4c2341037b4adf2d3da0c336->enter($__internal_c1895c84d0295701bd96f07f67765ecc9ed78b4e4c2341037b4adf2d3da0c336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1d1921319632a61eda8b12db16547f3910ba383af78184dfed0063916fd25a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d1921319632a61eda8b12db16547f3910ba383af78184dfed0063916fd25a2->enter($__internal_f1d1921319632a61eda8b12db16547f3910ba383af78184dfed0063916fd25a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f1d1921319632a61eda8b12db16547f3910ba383af78184dfed0063916fd25a2->leave($__internal_f1d1921319632a61eda8b12db16547f3910ba383af78184dfed0063916fd25a2_prof);

        
        $__internal_c1895c84d0295701bd96f07f67765ecc9ed78b4e4c2341037b4adf2d3da0c336->leave($__internal_c1895c84d0295701bd96f07f67765ecc9ed78b4e4c2341037b4adf2d3da0c336_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_621e2f3a2e5d629a4165d687ffc0519b45bc3915851f9ee472aaa90b6c6dcfd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621e2f3a2e5d629a4165d687ffc0519b45bc3915851f9ee472aaa90b6c6dcfd0->enter($__internal_621e2f3a2e5d629a4165d687ffc0519b45bc3915851f9ee472aaa90b6c6dcfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_393be6a9e374899c07d608f45c8c07ea0f2f1a38e33c057b1edc93ced6e8fe12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393be6a9e374899c07d608f45c8c07ea0f2f1a38e33c057b1edc93ced6e8fe12->enter($__internal_393be6a9e374899c07d608f45c8c07ea0f2f1a38e33c057b1edc93ced6e8fe12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_393be6a9e374899c07d608f45c8c07ea0f2f1a38e33c057b1edc93ced6e8fe12->leave($__internal_393be6a9e374899c07d608f45c8c07ea0f2f1a38e33c057b1edc93ced6e8fe12_prof);

        
        $__internal_621e2f3a2e5d629a4165d687ffc0519b45bc3915851f9ee472aaa90b6c6dcfd0->leave($__internal_621e2f3a2e5d629a4165d687ffc0519b45bc3915851f9ee472aaa90b6c6dcfd0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
