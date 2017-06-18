<?php

/* @GoGreen/dam/detail_view.html.twig */
class __TwigTemplate_23433a0f46b2cbeeffa84144f5276a6cf8d2913fc69de41ddbabd626f2e8b6eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GoGreen/base.html.twig", "@GoGreen/dam/detail_view.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GoGreen/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3e8a38399fcd59a81f63a0dddd10d248611ed1353456cd3d460004c55b9542f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e8a38399fcd59a81f63a0dddd10d248611ed1353456cd3d460004c55b9542f->enter($__internal_b3e8a38399fcd59a81f63a0dddd10d248611ed1353456cd3d460004c55b9542f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/detail_view.html.twig"));

        $__internal_8dca2126d4198721beba987fc3e0c68a95bf53a3db05bb7af627c43a8f080633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dca2126d4198721beba987fc3e0c68a95bf53a3db05bb7af627c43a8f080633->enter($__internal_8dca2126d4198721beba987fc3e0c68a95bf53a3db05bb7af627c43a8f080633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/detail_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3e8a38399fcd59a81f63a0dddd10d248611ed1353456cd3d460004c55b9542f->leave($__internal_b3e8a38399fcd59a81f63a0dddd10d248611ed1353456cd3d460004c55b9542f_prof);

        
        $__internal_8dca2126d4198721beba987fc3e0c68a95bf53a3db05bb7af627c43a8f080633->leave($__internal_8dca2126d4198721beba987fc3e0c68a95bf53a3db05bb7af627c43a8f080633_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5de423132623547998e4c642ec58fffb545c403cc4f9d7b14f280a22b176c840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de423132623547998e4c642ec58fffb545c403cc4f9d7b14f280a22b176c840->enter($__internal_5de423132623547998e4c642ec58fffb545c403cc4f9d7b14f280a22b176c840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_28e8edc64fab4e9fbb0bdc4f3ada6f94c2e3a5f1ebc4d685975eff971d7241b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e8edc64fab4e9fbb0bdc4f3ada6f94c2e3a5f1ebc4d685975eff971d7241b3->enter($__internal_28e8edc64fab4e9fbb0bdc4f3ada6f94c2e3a5f1ebc4d685975eff971d7241b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div class=\"row container_custome\">

            <div class=\"col-lg-6\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "name", array()), "html", null, true);
        echo "</h3>
            </div>
        <br />
        <div class=\"col-lg-12\" >
    ";
        // line 11
        $this->loadTemplate("@GoGreen/dam/galery.html.twig", "@GoGreen/dam/detail_view.html.twig", 11)->display($context);
        // line 12
        echo "            <div class=\"col-lg-6 text-justify\">
                <table class=\"table table-condensed\">
                    <thead>
                    <tr colspan=\"2\">
                        <th><h3>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Info", array(), "messages");
        echo "</h3></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style=\"color: green; font-weight: bold;\">";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Rating", array(), "messages");
        echo "</td> <td>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "rating", array()), "html", null, true);
        echo "</td>
                    </tr>
                        <tr>
                            <td style=\"color: green; font-weight: bold;\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Price", array(), "messages");
        echo "</td> <td>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "priceProPerson", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                        <td style=\"color: green; font-weight: bold;\">";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Address", array(), "messages");
        echo "</td> <td>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "address", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td style=\"color: green; font-weight: bold;\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("See on Map", array(), "messages");
        echo "</td> <td><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_map_direction", array("id" => $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Directions", array(), "messages");
        echo "</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"col-lg-6 text-justify\">
    ";
        // line 36
        $this->loadTemplate("@GoGreen/dam/dam_fish_collection.html.twig", "@GoGreen/dam/detail_view.html.twig", 36)->display($context);
        // line 37
        echo "            </div>
        </div>
        <div class=\"col-lg-12 text-justify\">
            <p>";
        // line 40
        echo $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "description", array());
        echo "</p>
            <div id=\"disqus_thread\"></div>
        </div>
    </div>
    <script>
        //Uncomment when its deployed
         ";
        // line 47
        echo "         ";
        // line 48
        echo "         ";
        // line 49
        echo "         ";
        // line 50
        echo "        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://ribar-bg.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>

";
        
        $__internal_28e8edc64fab4e9fbb0bdc4f3ada6f94c2e3a5f1ebc4d685975eff971d7241b3->leave($__internal_28e8edc64fab4e9fbb0bdc4f3ada6f94c2e3a5f1ebc4d685975eff971d7241b3_prof);

        
        $__internal_5de423132623547998e4c642ec58fffb545c403cc4f9d7b14f280a22b176c840->leave($__internal_5de423132623547998e4c642ec58fffb545c403cc4f9d7b14f280a22b176c840_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/dam/detail_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 50,  137 => 49,  135 => 48,  133 => 47,  124 => 40,  119 => 37,  117 => 36,  104 => 30,  96 => 27,  88 => 24,  80 => 21,  72 => 16,  66 => 12,  64 => 11,  57 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@GoGreen/base.html.twig' %}
{% block content %}
    {{ parent() }}
    <div class=\"row container_custome\">

            <div class=\"col-lg-6\">
                <h3>{{ dam.name }}</h3>
            </div>
        <br />
        <div class=\"col-lg-12\" >
    {% include '@GoGreen/dam/galery.html.twig' %}
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
                        <td style=\"color: green; font-weight: bold;\">{% trans %}See on Map{% endtrans %}</td> <td><a href=\"{{ path('dam_map_direction', {'id': dam.id}) }}\">{% trans %}Directions{% endtrans %}</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"col-lg-6 text-justify\">
    {% include '@GoGreen/dam/dam_fish_collection.html.twig' %}
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
", "@GoGreen/dam/detail_view.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/dam/detail_view.html.twig");
    }
}
