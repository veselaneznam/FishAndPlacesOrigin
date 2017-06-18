<?php

/* @User/entity.html.twig */
class __TwigTemplate_1051e4ce4c90ccc83da9757b85fbd8df30ac1b7f9b26b67017dd29ada0a29a91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Shop/base.html.twig", "@User/entity.html.twig", 1);
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
        $__internal_02b525ab189cf9bd885eddd432d75c65d58701f25bcf3fdd7df0e3ba2fc6006e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b525ab189cf9bd885eddd432d75c65d58701f25bcf3fdd7df0e3ba2fc6006e->enter($__internal_02b525ab189cf9bd885eddd432d75c65d58701f25bcf3fdd7df0e3ba2fc6006e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/entity.html.twig"));

        $__internal_686cb03d169605d192d96bf32e28f75d1f68bc386cd714ba787be7650e3e64da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686cb03d169605d192d96bf32e28f75d1f68bc386cd714ba787be7650e3e64da->enter($__internal_686cb03d169605d192d96bf32e28f75d1f68bc386cd714ba787be7650e3e64da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/entity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02b525ab189cf9bd885eddd432d75c65d58701f25bcf3fdd7df0e3ba2fc6006e->leave($__internal_02b525ab189cf9bd885eddd432d75c65d58701f25bcf3fdd7df0e3ba2fc6006e_prof);

        
        $__internal_686cb03d169605d192d96bf32e28f75d1f68bc386cd714ba787be7650e3e64da->leave($__internal_686cb03d169605d192d96bf32e28f75d1f68bc386cd714ba787be7650e3e64da_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_89635802ebd0be194edbfa9799891988cc6264dd9a1b17a9ae23680ea75ef46e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89635802ebd0be194edbfa9799891988cc6264dd9a1b17a9ae23680ea75ef46e->enter($__internal_89635802ebd0be194edbfa9799891988cc6264dd9a1b17a9ae23680ea75ef46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89a78ce7a722d632cb7e252a8a5a297460fe768f1d09805bd452fbf39dae07aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a78ce7a722d632cb7e252a8a5a297460fe768f1d09805bd452fbf39dae07aa->enter($__internal_89a78ce7a722d632cb7e252a8a5a297460fe768f1d09805bd452fbf39dae07aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h3>
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                <button type=\"reset\" class=\"btn btn-danger\">Cancel</button>
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["backUrl"] ?? $this->getContext($context, "backUrl")), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Back</a>
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div></div></div>
";
        
        $__internal_89a78ce7a722d632cb7e252a8a5a297460fe768f1d09805bd452fbf39dae07aa->leave($__internal_89a78ce7a722d632cb7e252a8a5a297460fe768f1d09805bd452fbf39dae07aa_prof);

        
        $__internal_89635802ebd0be194edbfa9799891988cc6264dd9a1b17a9ae23680ea75ef46e->leave($__internal_89635802ebd0be194edbfa9799891988cc6264dd9a1b17a9ae23680ea75ef46e_prof);

    }

    public function getTemplateName()
    {
        return "@User/entity.html.twig";
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
", "@User/entity.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/UserBundle/Resources/views/entity.html.twig");
    }
}
