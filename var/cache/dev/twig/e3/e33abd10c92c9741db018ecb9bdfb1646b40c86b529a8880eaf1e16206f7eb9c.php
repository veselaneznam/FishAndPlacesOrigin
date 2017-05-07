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
        $__internal_2aa3c9a62dc62c29af0b71a44cc5fce5e3749fd1a3266e6211f0a55c5b00682d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa3c9a62dc62c29af0b71a44cc5fce5e3749fd1a3266e6211f0a55c5b00682d->enter($__internal_2aa3c9a62dc62c29af0b71a44cc5fce5e3749fd1a3266e6211f0a55c5b00682d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/activate.html.twig"));

        $__internal_3e41e8255743312ede66b473a4cf8d2c84859331453c4afd5cdc6431fde74d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e41e8255743312ede66b473a4cf8d2c84859331453c4afd5cdc6431fde74d53->enter($__internal_3e41e8255743312ede66b473a4cf8d2c84859331453c4afd5cdc6431fde74d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/activate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aa3c9a62dc62c29af0b71a44cc5fce5e3749fd1a3266e6211f0a55c5b00682d->leave($__internal_2aa3c9a62dc62c29af0b71a44cc5fce5e3749fd1a3266e6211f0a55c5b00682d_prof);

        
        $__internal_3e41e8255743312ede66b473a4cf8d2c84859331453c4afd5cdc6431fde74d53->leave($__internal_3e41e8255743312ede66b473a4cf8d2c84859331453c4afd5cdc6431fde74d53_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f2f7dedda8389dbef6737cf1247ae7bb8f555904529a0a9d4f9dfbceb0534ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2f7dedda8389dbef6737cf1247ae7bb8f555904529a0a9d4f9dfbceb0534ae->enter($__internal_4f2f7dedda8389dbef6737cf1247ae7bb8f555904529a0a9d4f9dfbceb0534ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db06bf3f0991a1041cbfb07e4f061578ee278e30185357b56fcc133fc2b73a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db06bf3f0991a1041cbfb07e4f061578ee278e30185357b56fcc133fc2b73a88->enter($__internal_db06bf3f0991a1041cbfb07e4f061578ee278e30185357b56fcc133fc2b73a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db06bf3f0991a1041cbfb07e4f061578ee278e30185357b56fcc133fc2b73a88->leave($__internal_db06bf3f0991a1041cbfb07e4f061578ee278e30185357b56fcc133fc2b73a88_prof);

        
        $__internal_4f2f7dedda8389dbef6737cf1247ae7bb8f555904529a0a9d4f9dfbceb0534ae->leave($__internal_4f2f7dedda8389dbef6737cf1247ae7bb8f555904529a0a9d4f9dfbceb0534ae_prof);

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
