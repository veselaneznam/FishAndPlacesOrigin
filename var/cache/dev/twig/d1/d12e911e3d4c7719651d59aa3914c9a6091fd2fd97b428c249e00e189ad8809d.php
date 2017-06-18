<?php

/* @GoGreen/dam/search.html.twig */
class __TwigTemplate_937fcb4be34b022bfd882bb6113c3e3bed7b86f9681daa24cd7bfee1c48f47fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed1df0ca10ce6d578d1e427090471050778771a17691451fdbabed07653ae331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1df0ca10ce6d578d1e427090471050778771a17691451fdbabed07653ae331->enter($__internal_ed1df0ca10ce6d578d1e427090471050778771a17691451fdbabed07653ae331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/search.html.twig"));

        $__internal_bdf2b70c7e0fa030e24100ef91c9cfa18182e0c4e19bfbc6c272428930449d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf2b70c7e0fa030e24100ef91c9cfa18182e0c4e19bfbc6c272428930449d6d->enter($__internal_bdf2b70c7e0fa030e24100ef91c9cfa18182e0c4e19bfbc6c272428930449d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/search.html.twig"));

        // line 1
        echo "<form name=\"search_locaitons\" method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_map_view");
        echo "\" data-toggle=\"validator\" role=\"form\">
<div class=\"row\">
    <div class=\"col-md-8\">
        <div id=\"custom-search-input\">
            <div class=\"input-group col-md-12\">
                <span class=\"col-md-4\">
                    <input type=\"text\" class=\"form-control input-group-lg\" name=\"km\" id=\"km\" placeholder=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Radios in km", array(), "messages");
        echo "\" />
                </span>
                <span class=\"col-md-4\">
                <input type=\"text\" class=\"form-control input-group-lg\" required name=\"search\" id=\"search\" placeholder=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Search by Location", array(), "messages");
        echo "\" />
                </span>
                <span class=\"input-group-btn\">
                        <input type =\"submit\" class=\"btn btn-info btn-lg\" id=\"search_button\" type=\"button\">
                        </input>
                    </span>
            </div>
        </div>
    </div>
</div>
</form>

";
        
        $__internal_ed1df0ca10ce6d578d1e427090471050778771a17691451fdbabed07653ae331->leave($__internal_ed1df0ca10ce6d578d1e427090471050778771a17691451fdbabed07653ae331_prof);

        
        $__internal_bdf2b70c7e0fa030e24100ef91c9cfa18182e0c4e19bfbc6c272428930449d6d->leave($__internal_bdf2b70c7e0fa030e24100ef91c9cfa18182e0c4e19bfbc6c272428930449d6d_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/dam/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  35 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form name=\"search_locaitons\" method=\"post\" action=\"{{ path('post_map_view') }}\" data-toggle=\"validator\" role=\"form\">
<div class=\"row\">
    <div class=\"col-md-8\">
        <div id=\"custom-search-input\">
            <div class=\"input-group col-md-12\">
                <span class=\"col-md-4\">
                    <input type=\"text\" class=\"form-control input-group-lg\" name=\"km\" id=\"km\" placeholder=\"{% trans %}Radios in km{% endtrans %}\" />
                </span>
                <span class=\"col-md-4\">
                <input type=\"text\" class=\"form-control input-group-lg\" required name=\"search\" id=\"search\" placeholder=\"{% trans %}Search by Location{% endtrans %}\" />
                </span>
                <span class=\"input-group-btn\">
                        <input type =\"submit\" class=\"btn btn-info btn-lg\" id=\"search_button\" type=\"button\">
                        </input>
                    </span>
            </div>
        </div>
    </div>
</div>
</form>

", "@GoGreen/dam/search.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/dam/search.html.twig");
    }
}
