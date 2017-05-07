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
        $__internal_438e7446c936a06239549a1d8982fc1d02fc6769d2adcd5a1ab57a695b6b488f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438e7446c936a06239549a1d8982fc1d02fc6769d2adcd5a1ab57a695b6b488f->enter($__internal_438e7446c936a06239549a1d8982fc1d02fc6769d2adcd5a1ab57a695b6b488f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/entity.html.twig"));

        $__internal_a39f64d526ea6abdb39c730057504d8fd6deacb8a0ebe34687e89229bbfa6e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39f64d526ea6abdb39c730057504d8fd6deacb8a0ebe34687e89229bbfa6e64->enter($__internal_a39f64d526ea6abdb39c730057504d8fd6deacb8a0ebe34687e89229bbfa6e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/entity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_438e7446c936a06239549a1d8982fc1d02fc6769d2adcd5a1ab57a695b6b488f->leave($__internal_438e7446c936a06239549a1d8982fc1d02fc6769d2adcd5a1ab57a695b6b488f_prof);

        
        $__internal_a39f64d526ea6abdb39c730057504d8fd6deacb8a0ebe34687e89229bbfa6e64->leave($__internal_a39f64d526ea6abdb39c730057504d8fd6deacb8a0ebe34687e89229bbfa6e64_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfa0a2f3897e3e73a0b64e42eec277359146f338d37c59da24c4cff0cd16671f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa0a2f3897e3e73a0b64e42eec277359146f338d37c59da24c4cff0cd16671f->enter($__internal_bfa0a2f3897e3e73a0b64e42eec277359146f338d37c59da24c4cff0cd16671f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d9914cb892d87b2db35c089d04f769c10b8599ebec0a678713ea858748a8879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9914cb892d87b2db35c089d04f769c10b8599ebec0a678713ea858748a8879->enter($__internal_5d9914cb892d87b2db35c089d04f769c10b8599ebec0a678713ea858748a8879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5d9914cb892d87b2db35c089d04f769c10b8599ebec0a678713ea858748a8879->leave($__internal_5d9914cb892d87b2db35c089d04f769c10b8599ebec0a678713ea858748a8879_prof);

        
        $__internal_bfa0a2f3897e3e73a0b64e42eec277359146f338d37c59da24c4cff0cd16671f->leave($__internal_bfa0a2f3897e3e73a0b64e42eec277359146f338d37c59da24c4cff0cd16671f_prof);

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
