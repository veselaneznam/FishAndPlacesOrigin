<?php

/* @Dam/dam/map_info_window.html.twig */
class __TwigTemplate_4b52e90d27ebd3239a0b0d5c4fa758502ab70fb50c86bc94ac699db0fff2e804 extends Twig_Template
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
        $__internal_e5e07d37f6aaacf3c15372a1608069d0371673199275fe464c5927953cae08e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e07d37f6aaacf3c15372a1608069d0371673199275fe464c5927953cae08e1->enter($__internal_e5e07d37f6aaacf3c15372a1608069d0371673199275fe464c5927953cae08e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/map_info_window.html.twig"));

        $__internal_6bcf7dde7e082dde6a3fa95b49503c85010d157ad4a015c32e5fc33225d41c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bcf7dde7e082dde6a3fa95b49503c85010d157ad4a015c32e5fc33225d41c11->enter($__internal_6bcf7dde7e082dde6a3fa95b49503c85010d157ad4a015c32e5fc33225d41c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/map_info_window.html.twig"));

        // line 1
        echo "<div id=\"content\">
    <div id=\"siteNotice\">
    </div>
    <h3 id=\"firstHeading\" class=\"firstHeading\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h3>
    <div id=\"bodyContent\">
        <p>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["contactInformation"]) ? $context["contactInformation"] : $this->getContext($context, "contactInformation")), "html", null, true);
        echo "
            A;LSDK;ALDK;ALSKD;ASDKA;SLDKA;SLDKA;LDSKA;SLDK;ASLDK;L
        </p>
    </div>
</div>
";
        
        $__internal_e5e07d37f6aaacf3c15372a1608069d0371673199275fe464c5927953cae08e1->leave($__internal_e5e07d37f6aaacf3c15372a1608069d0371673199275fe464c5927953cae08e1_prof);

        
        $__internal_6bcf7dde7e082dde6a3fa95b49503c85010d157ad4a015c32e5fc33225d41c11->leave($__internal_6bcf7dde7e082dde6a3fa95b49503c85010d157ad4a015c32e5fc33225d41c11_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/map_info_window.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"content\">
    <div id=\"siteNotice\">
    </div>
    <h3 id=\"firstHeading\" class=\"firstHeading\">{{ name }}</h3>
    <div id=\"bodyContent\">
        <p>{{ contactInformation }}
            A;LSDK;ALDK;ALSKD;ASDKA;SLDKA;SLDKA;LDSKA;SLDK;ASLDK;L
        </p>
    </div>
</div>
", "@Dam/dam/map_info_window.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/map_info_window.html.twig");
    }
}
