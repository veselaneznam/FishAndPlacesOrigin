<?php

/* @Dam/dam/detail_view.html.twig */
class __TwigTemplate_d60e74f937cc8be6ebdff1245c9569191bbace597a4987a7dc9e25376bdbf952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Dam/base.html.twig", "@Dam/dam/detail_view.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Dam/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42b725dea212332e49cfcf6576b10fc722ee89febd2e94c9c4cd434f0fe146e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b725dea212332e49cfcf6576b10fc722ee89febd2e94c9c4cd434f0fe146e0->enter($__internal_42b725dea212332e49cfcf6576b10fc722ee89febd2e94c9c4cd434f0fe146e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/detail_view.html.twig"));

        $__internal_84ae622b5026de7e429b80f6e3e6a271b6e613609de2a19d30a752843697ce1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ae622b5026de7e429b80f6e3e6a271b6e613609de2a19d30a752843697ce1a->enter($__internal_84ae622b5026de7e429b80f6e3e6a271b6e613609de2a19d30a752843697ce1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/detail_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42b725dea212332e49cfcf6576b10fc722ee89febd2e94c9c4cd434f0fe146e0->leave($__internal_42b725dea212332e49cfcf6576b10fc722ee89febd2e94c9c4cd434f0fe146e0_prof);

        
        $__internal_84ae622b5026de7e429b80f6e3e6a271b6e613609de2a19d30a752843697ce1a->leave($__internal_84ae622b5026de7e429b80f6e3e6a271b6e613609de2a19d30a752843697ce1a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7c00554aa9121f0b810cdda39d6a305693d74e05d73b6ed7995eebefc4c1b7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c00554aa9121f0b810cdda39d6a305693d74e05d73b6ed7995eebefc4c1b7cc->enter($__internal_7c00554aa9121f0b810cdda39d6a305693d74e05d73b6ed7995eebefc4c1b7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7d3bc896f8ad1d9e297b9b89029d74d3ee79704b8a7d110ac683ff71cfdd0f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3bc896f8ad1d9e297b9b89029d74d3ee79704b8a7d110ac683ff71cfdd0f10->enter($__internal_7d3bc896f8ad1d9e297b9b89029d74d3ee79704b8a7d110ac683ff71cfdd0f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div class=\"row container_custome\">

            <div class=\"col-lg-6\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "name", array()), "html", null, true);
        echo "</h3></div>
        <div class=\"col-lg-12\" >
    ";
        // line 9
        $this->loadTemplate("@Dam/dam/galery.html.twig", "@Dam/dam/detail_view.html.twig", 9)->display($context);
        // line 10
        echo "            <div class=\"col-lg-6 text-justify\">
                <table class=\"table table-condensed\">
                    <thead>
                    <tr colspan=\"2\">
                        <th><h3>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Info", array(), "messages");
        echo "</h3></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style=\"color: green; font-weight: bold;\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Rating", array(), "messages");
        echo "</td> <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "rating", array()), "html", null, true);
        echo "</td>
                    </tr>
                        <tr>
                            <td style=\"color: green; font-weight: bold;\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Price", array(), "messages");
        echo "</td> <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "priceProPerson", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                        <td style=\"color: green; font-weight: bold;\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Address", array(), "messages");
        echo "</td> <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "address", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td style=\"color: green; font-weight: bold;\">";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("See on Map", array(), "messages");
        echo "</td> <td><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_map_direction", array("id" => $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "id", array()))), "html", null, true);
        echo "\">Map</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"col-lg-6 text-justify\">
    ";
        // line 34
        $this->loadTemplate("@Dam/dam/dam_fish_collection.html.twig", "@Dam/dam/detail_view.html.twig", 34)->display($context);
        // line 35
        echo "            </div>
        </div>
        <div class=\"col-lg-12 text-justify\">
            <p>";
        // line 38
        echo $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "description", array());
        echo "</p>
            <div id=\"disqus_thread\"></div>
        </div>
    </div>
    <script>
        //Uncomment when its deployed
         ";
        // line 45
        echo "         ";
        // line 46
        echo "         ";
        // line 47
        echo "         ";
        // line 48
        echo "        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://ribar-bg.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>

";
        
        $__internal_7d3bc896f8ad1d9e297b9b89029d74d3ee79704b8a7d110ac683ff71cfdd0f10->leave($__internal_7d3bc896f8ad1d9e297b9b89029d74d3ee79704b8a7d110ac683ff71cfdd0f10_prof);

        
        $__internal_7c00554aa9121f0b810cdda39d6a305693d74e05d73b6ed7995eebefc4c1b7cc->leave($__internal_7c00554aa9121f0b810cdda39d6a305693d74e05d73b6ed7995eebefc4c1b7cc_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/detail_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 48,  133 => 47,  131 => 46,  129 => 45,  120 => 38,  115 => 35,  113 => 34,  102 => 28,  94 => 25,  86 => 22,  78 => 19,  70 => 14,  64 => 10,  62 => 9,  57 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Dam/base.html.twig' %}
{% block content %}
    {{ parent() }}
    <div class=\"row container_custome\">

            <div class=\"col-lg-6\">
                <h3>{{ dam.name }}</h3></div>
        <div class=\"col-lg-12\" >
    {% include '@Dam/dam/galery.html.twig' %}
            <div class=\"col-lg-6 text-justify\">
                <table class=\"table table-condensed\">
                    <thead>
                    <tr colspan=\"2\">
                        <th><h3>{% trans %}Info{% endtrans %}</h3></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style=\"color: green; font-weight: bold;\">{% trans %}Rating{% endtrans %}</td> <td>{{ dam.rating }}</td>
                    </tr>
                        <tr>
                            <td style=\"color: green; font-weight: bold;\">{% trans %}Price{% endtrans %}</td> <td>{{ dam.priceProPerson }}</td>
                        </tr>
                        <tr>
                        <td style=\"color: green; font-weight: bold;\">{% trans %}Address{% endtrans %}</td> <td>{{ dam.address }}</td>
                    </tr>
                    <tr>
                        <td style=\"color: green; font-weight: bold;\">{% trans %}See on Map{% endtrans %}</td> <td><a href=\"{{ path('dam_map_direction', {'id': dam.id}) }}\">Map</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"col-lg-6 text-justify\">
    {% include '@Dam/dam/dam_fish_collection.html.twig' %}
            </div>
        </div>
        <div class=\"col-lg-12 text-justify\">
            <p>{{ dam.description | raw }}</p>
            <div id=\"disqus_thread\"></div>
        </div>
    </div>
    <script>
        //Uncomment when its deployed
         {#var disqus_config = function () {#}
         {#this.page.url = {{ path('dam_view', {'id': dam.id}) }};  // Replace PAGE_URL with your page's canonical URL variable#}
         {#this.page.identifier = {{ path(dam.id) }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable#}
         {#};#}
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://ribar-bg.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>

{% endblock %}
", "@Dam/dam/detail_view.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/detail_view.html.twig");
    }
}
