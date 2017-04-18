<?php

/* @Dam/dam/dam_fish_collection.html.twig */
class __TwigTemplate_f34f9ee7b43a8665a004ef268bfb4c4ed24d51fc74fe2ef73744cd310082001c extends Twig_Template
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
        $__internal_181b2928fafdd1d8acdd7151d625b79726d9c56d6d8dd12f7a7e4611acbca9cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181b2928fafdd1d8acdd7151d625b79726d9c56d6d8dd12f7a7e4611acbca9cd->enter($__internal_181b2928fafdd1d8acdd7151d625b79726d9c56d6d8dd12f7a7e4611acbca9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/dam_fish_collection.html.twig"));

        $__internal_099c04b5e320d5b464f8aca20524b62936d3fef14c01b365f72a16520d1a6c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099c04b5e320d5b464f8aca20524b62936d3fef14c01b365f72a16520d1a6c8a->enter($__internal_099c04b5e320d5b464f8aca20524b62936d3fef14c01b365f72a16520d1a6c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/dam_fish_collection.html.twig"));

        // line 1
        echo "
<table class=\"table table-condensed\">
    <thead>
    <tr colspan=\"2\">
        <th><h3>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Fish in", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "name", array()), "html", null, true);
        echo "</h3></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "fishCollection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fish"]) {
            // line 10
            echo "    <tr>
        <td><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fish_view", array("id" => $this->getAttribute($context["fish"], "id", array()))), "html", null, true);
            echo "\"><img src= \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fish"], "image", array()), "webPath", array()), "html", null, true);
            echo "\" width=\"100px\" height=\"40px\">
                <span>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["fish"], "name", array()), "html", null, true);
            echo "</span></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fish'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
        
        $__internal_181b2928fafdd1d8acdd7151d625b79726d9c56d6d8dd12f7a7e4611acbca9cd->leave($__internal_181b2928fafdd1d8acdd7151d625b79726d9c56d6d8dd12f7a7e4611acbca9cd_prof);

        
        $__internal_099c04b5e320d5b464f8aca20524b62936d3fef14c01b365f72a16520d1a6c8a->leave($__internal_099c04b5e320d5b464f8aca20524b62936d3fef14c01b365f72a16520d1a6c8a_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/dam_fish_collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  53 => 12,  47 => 11,  44 => 10,  40 => 9,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<table class=\"table table-condensed\">
    <thead>
    <tr colspan=\"2\">
        <th><h3>{% trans %}Fish in {% endtrans %} {{ dam.name }}</h3></th>
    </tr>
    </thead>
    <tbody>
    {% for fish in dam.fishCollection %}
    <tr>
        <td><a href=\"{{ path('fish_view', {'id': fish.id}) }}\"><img src= \"{{ fish.image.webPath}}\" width=\"100px\" height=\"40px\">
                <span>{{ fish.name }}</span></a></td>
    </tr>
    {% endfor %}
    </tbody>
</table>
", "@Dam/dam/dam_fish_collection.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/dam_fish_collection.html.twig");
    }
}
