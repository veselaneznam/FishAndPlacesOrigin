<?php

/* @Dam/dam/search.html.twig */
class __TwigTemplate_79e81e28be81433adfae70ac91c646debe18d26efd72b7dc5f2c903b4b6dc800 extends Twig_Template
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
        $__internal_e3156dd7c6d706f4ff2a02e51d97e3e49ca7931b321031771cfd4b8ec218d06e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3156dd7c6d706f4ff2a02e51d97e3e49ca7931b321031771cfd4b8ec218d06e->enter($__internal_e3156dd7c6d706f4ff2a02e51d97e3e49ca7931b321031771cfd4b8ec218d06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/search.html.twig"));

        $__internal_b2ebbafc7ebad8fde056a38ae3bede0e06fd2cab04aa9008e090674e2500c1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ebbafc7ebad8fde056a38ae3bede0e06fd2cab04aa9008e090674e2500c1a7->enter($__internal_b2ebbafc7ebad8fde056a38ae3bede0e06fd2cab04aa9008e090674e2500c1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/search.html.twig"));

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
        
        $__internal_e3156dd7c6d706f4ff2a02e51d97e3e49ca7931b321031771cfd4b8ec218d06e->leave($__internal_e3156dd7c6d706f4ff2a02e51d97e3e49ca7931b321031771cfd4b8ec218d06e_prof);

        
        $__internal_b2ebbafc7ebad8fde056a38ae3bede0e06fd2cab04aa9008e090674e2500c1a7->leave($__internal_b2ebbafc7ebad8fde056a38ae3bede0e06fd2cab04aa9008e090674e2500c1a7_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04856e5336c6275a8db63dc6242e38395ea2c81627495c59f12be88f342ac08a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04856e5336c6275a8db63dc6242e38395ea2c81627495c59f12be88f342ac08a->enter($__internal_04856e5336c6275a8db63dc6242e38395ea2c81627495c59f12be88f342ac08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_66aa086d710844c7523effee29b1e1e87467d64deed1be3288e0ebb9e0a4b47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66aa086d710844c7523effee29b1e1e87467d64deed1be3288e0ebb9e0a4b47a->enter($__internal_66aa086d710844c7523effee29b1e1e87467d64deed1be3288e0ebb9e0a4b47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "<script>
    document.getElementById(\"search_button\").addEventListener(\"click\", FindCity);

    function FindCity() {
        var param = document.getElementById('search').value;
        window.location.replace('/map/'+ param);
    }
</script>
";
        
        $__internal_66aa086d710844c7523effee29b1e1e87467d64deed1be3288e0ebb9e0a4b47a->leave($__internal_66aa086d710844c7523effee29b1e1e87467d64deed1be3288e0ebb9e0a4b47a_prof);

        
        $__internal_04856e5336c6275a8db63dc6242e38395ea2c81627495c59f12be88f342ac08a->leave($__internal_04856e5336c6275a8db63dc6242e38395ea2c81627495c59f12be88f342ac08a_prof);

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
        return array (  64 => 17,  46 => 16,  33 => 6,  26 => 1,);
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
        window.location.replace('/map/'+ param);
    }
</script>
{% endblock %}
", "@Dam/dam/search.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/search.html.twig");
    }
}
