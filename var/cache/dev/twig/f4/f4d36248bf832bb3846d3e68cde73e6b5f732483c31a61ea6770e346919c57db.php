<?php

/* @Admin/dam/activate.html.twig */
class __TwigTemplate_ef87c684c2ea7ecbb1142a6bec4730eba866724930c0ddc5d031f1f9375ceb99 extends Twig_Template
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
        $__internal_e0a4b32b681ecd43054dbe57d5efc75f4033e6523e9ef7272eff29debffd45ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a4b32b681ecd43054dbe57d5efc75f4033e6523e9ef7272eff29debffd45ef->enter($__internal_e0a4b32b681ecd43054dbe57d5efc75f4033e6523e9ef7272eff29debffd45ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/activate.html.twig"));

        $__internal_e5cddadaa63859d4164e862066300ade54c359d04b2e2731b32c56042b7ec72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5cddadaa63859d4164e862066300ade54c359d04b2e2731b32c56042b7ec72d->enter($__internal_e5cddadaa63859d4164e862066300ade54c359d04b2e2731b32c56042b7ec72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/activate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0a4b32b681ecd43054dbe57d5efc75f4033e6523e9ef7272eff29debffd45ef->leave($__internal_e0a4b32b681ecd43054dbe57d5efc75f4033e6523e9ef7272eff29debffd45ef_prof);

        
        $__internal_e5cddadaa63859d4164e862066300ade54c359d04b2e2731b32c56042b7ec72d->leave($__internal_e5cddadaa63859d4164e862066300ade54c359d04b2e2731b32c56042b7ec72d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e32e1bb50a736bc84ebecdbc1cb788e4e139144a989e4f83654635f6b579d4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32e1bb50a736bc84ebecdbc1cb788e4e139144a989e4f83654635f6b579d4ce->enter($__internal_e32e1bb50a736bc84ebecdbc1cb788e4e139144a989e4f83654635f6b579d4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aded7bb29984e649d0c38c14d7bc35d21ce19a25044fb53722ab85bd40cac8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aded7bb29984e649d0c38c14d7bc35d21ce19a25044fb53722ab85bd40cac8a9->enter($__internal_aded7bb29984e649d0c38c14d7bc35d21ce19a25044fb53722ab85bd40cac8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["activate_form"] ?? $this->getContext($context, "activate_form")), 'form_start');
        echo "
<div class=\"uk-modal-header\">
    <h3 class=\"uk-modal-title\">Activate this Dam?</h3>
</div>
<p>
    Are you sure you want to activate '";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "name", array()), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["activate_form"] ?? $this->getContext($context, "activate_form")), 'form_end');
        echo "
";
        
        $__internal_aded7bb29984e649d0c38c14d7bc35d21ce19a25044fb53722ab85bd40cac8a9->leave($__internal_aded7bb29984e649d0c38c14d7bc35d21ce19a25044fb53722ab85bd40cac8a9_prof);

        
        $__internal_e32e1bb50a736bc84ebecdbc1cb788e4e139144a989e4f83654635f6b579d4ce->leave($__internal_e32e1bb50a736bc84ebecdbc1cb788e4e139144a989e4f83654635f6b579d4ce_prof);

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
", "@Admin/dam/activate.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/dam/activate.html.twig");
    }
}
