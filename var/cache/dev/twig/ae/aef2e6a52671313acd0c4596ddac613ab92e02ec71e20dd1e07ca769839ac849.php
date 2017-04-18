<?php

/* @Shop/entity.html.twig */
class __TwigTemplate_99898daf56ac53cabe4b6bd5e6454143d6a8dbe5a937c233c715c8cdc5ca3b3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Shop/base.html.twig", "@Shop/entity.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Shop/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f355504aef54c0b37cfd827995086a43497d8e49f01376d3995995f70f42b536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f355504aef54c0b37cfd827995086a43497d8e49f01376d3995995f70f42b536->enter($__internal_f355504aef54c0b37cfd827995086a43497d8e49f01376d3995995f70f42b536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/entity.html.twig"));

        $__internal_b15500e0856e041b6096848b21df39c2ab8df2a96558fda995524f788a0eb0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15500e0856e041b6096848b21df39c2ab8df2a96558fda995524f788a0eb0cc->enter($__internal_b15500e0856e041b6096848b21df39c2ab8df2a96558fda995524f788a0eb0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/entity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f355504aef54c0b37cfd827995086a43497d8e49f01376d3995995f70f42b536->leave($__internal_f355504aef54c0b37cfd827995086a43497d8e49f01376d3995995f70f42b536_prof);

        
        $__internal_b15500e0856e041b6096848b21df39c2ab8df2a96558fda995524f788a0eb0cc->leave($__internal_b15500e0856e041b6096848b21df39c2ab8df2a96558fda995524f788a0eb0cc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b220785f303f656994a107ff0a3409f0e1ce647393cb3b7de4708d112dcefa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b220785f303f656994a107ff0a3409f0e1ce647393cb3b7de4708d112dcefa2->enter($__internal_0b220785f303f656994a107ff0a3409f0e1ce647393cb3b7de4708d112dcefa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd918ecd9a62c8708868b796900e16b114d6a39a3a10d685eaca0a49842315ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd918ecd9a62c8708868b796900e16b114d6a39a3a10d685eaca0a49842315ee->enter($__internal_dd918ecd9a62c8708868b796900e16b114d6a39a3a10d685eaca0a49842315ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h3>
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                <button type=\"reset\" class=\"btn btn-danger\">Cancel</button>
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["backUrl"]) ? $context["backUrl"] : $this->getContext($context, "backUrl")), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Back</a>
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div></div></div>
";
        
        $__internal_dd918ecd9a62c8708868b796900e16b114d6a39a3a10d685eaca0a49842315ee->leave($__internal_dd918ecd9a62c8708868b796900e16b114d6a39a3a10d685eaca0a49842315ee_prof);

        
        $__internal_0b220785f303f656994a107ff0a3409f0e1ce647393cb3b7de4708d112dcefa2->leave($__internal_0b220785f303f656994a107ff0a3409f0e1ce647393cb3b7de4708d112dcefa2_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  72 => 13,  66 => 10,  61 => 8,  57 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Shop/base.html.twig' %}
{% block body %}
    {{ parent() }}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>{{ title }}</h3>
                {{ form_start(form) }}

                {{ form_widget(form) }}
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                <button type=\"reset\" class=\"btn btn-danger\">Cancel</button>
                <a href=\"{{ backUrl }}\" class=\"btn btn-info\" role=\"button\">Back</a>
                {{ form_end(form) }}
            </div></div></div>
{% endblock %}
", "@Shop/entity.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/ShopBundle/Resources/views/entity.html.twig");
    }
}
