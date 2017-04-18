<?php

/* @Dam/dam/list.html.twig */
class __TwigTemplate_dec0a53d66fda41127176093ab31cc81d9b12652f1521e6eecbadb502d113a71 extends Twig_Template
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
        $__internal_c5fb2ad9dea72d974e3bd5a5ff84149751b26f82db48fc839a71bfa3bf8092c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5fb2ad9dea72d974e3bd5a5ff84149751b26f82db48fc839a71bfa3bf8092c4->enter($__internal_c5fb2ad9dea72d974e3bd5a5ff84149751b26f82db48fc839a71bfa3bf8092c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/list.html.twig"));

        $__internal_5104bd6483da50262211d7facf8efa72c5975fbec7013b0977c95511d983b3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5104bd6483da50262211d7facf8efa72c5975fbec7013b0977c95511d983b3fb->enter($__internal_5104bd6483da50262211d7facf8efa72c5975fbec7013b0977c95511d983b3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/list.html.twig"));

        // line 1
        echo "
";
        // line 2
        if (array_key_exists("damCollection", $context)) {
            // line 3
            echo "<div class=\"row text-center\">

    <div class=\"col-lg-10\">
        <h3 class=\"page-header\">";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</h3>
    </div>
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["damCollection"]) ? $context["damCollection"] : $this->getContext($context, "damCollection")));
            foreach ($context['_seq'] as $context["_key"] => $context["dam"]) {
                // line 9
                echo "    <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
        <a class=\"thumbnail\" href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_view", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                echo "\">
            <img class=\"img-responsive\" src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dam"], "mainImage", array()), "webPath", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "name", array()), "html", null, true);
                echo "\">
            <span>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "name", array()), "html", null, true);
                echo "</span>
        </a>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "</div>

";
        }
        
        $__internal_c5fb2ad9dea72d974e3bd5a5ff84149751b26f82db48fc839a71bfa3bf8092c4->leave($__internal_c5fb2ad9dea72d974e3bd5a5ff84149751b26f82db48fc839a71bfa3bf8092c4_prof);

        
        $__internal_5104bd6483da50262211d7facf8efa72c5975fbec7013b0977c95511d983b3fb->leave($__internal_5104bd6483da50262211d7facf8efa72c5975fbec7013b0977c95511d983b3fb_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  57 => 12,  51 => 11,  47 => 10,  44 => 9,  40 => 8,  35 => 6,  30 => 3,  28 => 2,  25 => 1,);
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
{% if damCollection is defined %}
<div class=\"row text-center\">

    <div class=\"col-lg-10\">
        <h3 class=\"page-header\">{{ title }}</h3>
    </div>
    {% for dam in damCollection %}
    <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
        <a class=\"thumbnail\" href=\"{{ path('dam_view', {'id': dam.id}) }}\">
            <img class=\"img-responsive\" src=\"{{  dam.mainImage.webPath }}\" alt=\"{{ dam.name }}\">
            <span>{{ dam.name }}</span>
        </a>
    </div>
    {% endfor %}
</div>

{% endif %}
", "@Dam/dam/list.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/list.html.twig");
    }
}
