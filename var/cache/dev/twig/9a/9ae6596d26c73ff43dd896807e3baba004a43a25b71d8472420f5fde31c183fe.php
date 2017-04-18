<?php

/* @Dam/dam/search.html.twig */
class __TwigTemplate_b39592365ea859e1016a5cc818622da084ed4f9957b70303a65494fd764332c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcf969d4aaaca9740cf132c5cd2e3bdb745a3cbbb57dc2b37c254b71c2644ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf969d4aaaca9740cf132c5cd2e3bdb745a3cbbb57dc2b37c254b71c2644ee7->enter($__internal_fcf969d4aaaca9740cf132c5cd2e3bdb745a3cbbb57dc2b37c254b71c2644ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/search.html.twig"));

        $__internal_1b233047f052d1902e86acd78b48b9b5ae27e9df1ecc2150d77c620a02fc18e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b233047f052d1902e86acd78b48b9b5ae27e9df1ecc2150d77c620a02fc18e6->enter($__internal_1b233047f052d1902e86acd78b48b9b5ae27e9df1ecc2150d77c620a02fc18e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/search.html.twig"));

        // line 1
        echo "
<div class=\"row\">
    <div class=\"col-md-6\">
        <div id=\"custom-search-input\">
            <div class=\"input-group col-md-12\">
                <input type=\"text\" class=\"form-control input-lg\" name=\"search\" id=\"search\" placeholder=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Search by Location", array(), "messages");
        echo "\" />
                <span class=\"input-group-btn\">
                        <button class=\"btn btn-info btn-lg\" id=\"search_button\" type=\"button\">
                            <i class=\"glyphicon glyphicon-search\"></i>
                        </button>
                    </span>
            </div>
        </div>
    </div>
</div>
";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_fcf969d4aaaca9740cf132c5cd2e3bdb745a3cbbb57dc2b37c254b71c2644ee7->leave($__internal_fcf969d4aaaca9740cf132c5cd2e3bdb745a3cbbb57dc2b37c254b71c2644ee7_prof);

        
        $__internal_1b233047f052d1902e86acd78b48b9b5ae27e9df1ecc2150d77c620a02fc18e6->leave($__internal_1b233047f052d1902e86acd78b48b9b5ae27e9df1ecc2150d77c620a02fc18e6_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_37512e59da1df0d83a1dd5e0e3fe23a474a718dc6486c0eaf15c8e88130bff68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37512e59da1df0d83a1dd5e0e3fe23a474a718dc6486c0eaf15c8e88130bff68->enter($__internal_37512e59da1df0d83a1dd5e0e3fe23a474a718dc6486c0eaf15c8e88130bff68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_efd881fbe21a3171d4460cc36b8615e9bd8b1bcecd797cd39b2fcce530a440d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd881fbe21a3171d4460cc36b8615e9bd8b1bcecd797cd39b2fcce530a440d8->enter($__internal_efd881fbe21a3171d4460cc36b8615e9bd8b1bcecd797cd39b2fcce530a440d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "<script>
    document.getElementById(\"search_button\").addEventListener(\"click\", FindCity);

    function FindCity() {
        var param = document.getElementById('search').value;
        if(param) {
            window.location.replace('/map/'+ param);
        } else {
            alert(";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("\"Enter Location\"", array(), "messages");
        echo ");
        }
    }
</script>
";
        
        $__internal_efd881fbe21a3171d4460cc36b8615e9bd8b1bcecd797cd39b2fcce530a440d8->leave($__internal_efd881fbe21a3171d4460cc36b8615e9bd8b1bcecd797cd39b2fcce530a440d8_prof);

        
        $__internal_37512e59da1df0d83a1dd5e0e3fe23a474a718dc6486c0eaf15c8e88130bff68->leave($__internal_37512e59da1df0d83a1dd5e0e3fe23a474a718dc6486c0eaf15c8e88130bff68_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  64 => 17,  46 => 16,  33 => 6,  26 => 1,);
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
<div class=\"row\">
    <div class=\"col-md-6\">
        <div id=\"custom-search-input\">
            <div class=\"input-group col-md-12\">
                <input type=\"text\" class=\"form-control input-lg\" name=\"search\" id=\"search\" placeholder=\"{% trans %}Search by Location{% endtrans %}\" />
                <span class=\"input-group-btn\">
                        <button class=\"btn btn-info btn-lg\" id=\"search_button\" type=\"button\">
                            <i class=\"glyphicon glyphicon-search\"></i>
                        </button>
                    </span>
            </div>
        </div>
    </div>
</div>
{% block javascripts %}
<script>
    document.getElementById(\"search_button\").addEventListener(\"click\", FindCity);

    function FindCity() {
        var param = document.getElementById('search').value;
        if(param) {
            window.location.replace('/map/'+ param);
        } else {
            alert({% trans %}\"Enter Location\"{% endtrans %});
        }
    }
</script>
{% endblock %}
", "@Dam/dam/search.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/search.html.twig");
    }
}
