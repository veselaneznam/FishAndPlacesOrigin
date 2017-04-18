<?php

/* @Dam/base.html.twig */
class __TwigTemplate_64b0e09d262bab54c4242a22a33209e7db8678091344c191c2dc23561ed2d980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e22199806adf7ef8f8d6acb92956c7e870d3a9237f1f32f03cb34f539c07683b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22199806adf7ef8f8d6acb92956c7e870d3a9237f1f32f03cb34f539c07683b->enter($__internal_e22199806adf7ef8f8d6acb92956c7e870d3a9237f1f32f03cb34f539c07683b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/base.html.twig"));

        $__internal_aa2f6b3c0f2584b5392fee726ff630d3717d97da01f98f68d4adf4c4e4602d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2f6b3c0f2584b5392fee726ff630d3717d97da01f98f68d4adf4c4e4602d4e->enter($__internal_aa2f6b3c0f2584b5392fee726ff630d3717d97da01f98f68d4adf4c4e4602d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.structure.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.theme.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/grid.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\"/>

</head>
<body>
<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Bulgarian Fisherman", array(), "messages");
        echo "</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Home", array(), "messages");
        echo "</a></li>
                <li><a href=\"#\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("About", array(), "messages");
        echo "</a></li>
                <li><a href=\"#\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Contact", array(), "messages");
        echo "</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Login", array(), "messages");
        echo "</a></li>
            </ul>
        </div>
    </div>
</nav>
    ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "        <footer class=\"container-fluid text-center\">
            <p>CopyRight &copy; ";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "Y"), "html", null, true);
        echo " ZaRiba.com</p>
        </footer>
";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "</body>
</html>
";
        
        $__internal_e22199806adf7ef8f8d6acb92956c7e870d3a9237f1f32f03cb34f539c07683b->leave($__internal_e22199806adf7ef8f8d6acb92956c7e870d3a9237f1f32f03cb34f539c07683b_prof);

        
        $__internal_aa2f6b3c0f2584b5392fee726ff630d3717d97da01f98f68d4adf4c4e4602d4e->leave($__internal_aa2f6b3c0f2584b5392fee726ff630d3717d97da01f98f68d4adf4c4e4602d4e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd18dbac81ee596a7de84fbcca6bf372eac2c8d7840aded418d0731a41204b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd18dbac81ee596a7de84fbcca6bf372eac2c8d7840aded418d0731a41204b78->enter($__internal_bd18dbac81ee596a7de84fbcca6bf372eac2c8d7840aded418d0731a41204b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6cbd2271ae791a013a60e1826e5973b6af7eec4354146dff6b645ce0ed4b1767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbd2271ae791a013a60e1826e5973b6af7eec4354146dff6b645ce0ed4b1767->enter($__internal_6cbd2271ae791a013a60e1826e5973b6af7eec4354146dff6b645ce0ed4b1767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "    <div class=\"jumbotron\">
        <div class=\"container text-center\">
        ";
        // line 42
        $this->loadTemplate("@Dam/dam/search.html.twig", "@Dam/base.html.twig", 42)->display($context);
        // line 43
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "        </div>
    </div>
    ";
        
        $__internal_6cbd2271ae791a013a60e1826e5973b6af7eec4354146dff6b645ce0ed4b1767->leave($__internal_6cbd2271ae791a013a60e1826e5973b6af7eec4354146dff6b645ce0ed4b1767_prof);

        
        $__internal_bd18dbac81ee596a7de84fbcca6bf372eac2c8d7840aded418d0731a41204b78->leave($__internal_bd18dbac81ee596a7de84fbcca6bf372eac2c8d7840aded418d0731a41204b78_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_ea98018cfe19b791a1df141a845d06ee31cb0da6e16b6db342104134f1faf87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea98018cfe19b791a1df141a845d06ee31cb0da6e16b6db342104134f1faf87b->enter($__internal_ea98018cfe19b791a1df141a845d06ee31cb0da6e16b6db342104134f1faf87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_399622e741dfcfc692ec855fdb23949c336ea5a21099a7352101d385c5f88bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399622e741dfcfc692ec855fdb23949c336ea5a21099a7352101d385c5f88bcf->enter($__internal_399622e741dfcfc692ec855fdb23949c336ea5a21099a7352101d385c5f88bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "            ";
        
        $__internal_399622e741dfcfc692ec855fdb23949c336ea5a21099a7352101d385c5f88bcf->leave($__internal_399622e741dfcfc692ec855fdb23949c336ea5a21099a7352101d385c5f88bcf_prof);

        
        $__internal_ea98018cfe19b791a1df141a845d06ee31cb0da6e16b6db342104134f1faf87b->leave($__internal_ea98018cfe19b791a1df141a845d06ee31cb0da6e16b6db342104134f1faf87b_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a89e4256aa76ae18353dc95d30d28c4326a8bf92cb3c04057182b32cae8bc2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a89e4256aa76ae18353dc95d30d28c4326a8bf92cb3c04057182b32cae8bc2c->enter($__internal_0a89e4256aa76ae18353dc95d30d28c4326a8bf92cb3c04057182b32cae8bc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7f629c6315f462c3693c57571aa921ac4c6f3e4f391cdb819b73efae5810021d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f629c6315f462c3693c57571aa921ac4c6f3e4f391cdb819b73efae5810021d->enter($__internal_7f629c6315f462c3693c57571aa921ac4c6f3e4f391cdb819b73efae5810021d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58ed0a8755491266\"></script>
    <script id=\"dsq-count-scr\" src=\"//ribar-bg.disqus.com/count.js\" async></script>
";
        
        $__internal_7f629c6315f462c3693c57571aa921ac4c6f3e4f391cdb819b73efae5810021d->leave($__internal_7f629c6315f462c3693c57571aa921ac4c6f3e4f391cdb819b73efae5810021d_prof);

        
        $__internal_0a89e4256aa76ae18353dc95d30d28c4326a8bf92cb3c04057182b32cae8bc2c->leave($__internal_0a89e4256aa76ae18353dc95d30d28c4326a8bf92cb3c04057182b32cae8bc2c_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 56,  201 => 55,  197 => 54,  193 => 53,  188 => 52,  179 => 51,  169 => 44,  160 => 43,  148 => 45,  145 => 43,  143 => 42,  139 => 40,  130 => 39,  118 => 60,  116 => 51,  111 => 49,  108 => 48,  106 => 39,  98 => 34,  92 => 31,  88 => 30,  82 => 29,  75 => 25,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.structure.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.theme.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/grid.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\"/>

</head>
<body>
<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">{% trans %} Bulgarian Fisherman {% endtrans %}</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"{{ path('dam') }}\">{% trans %}Home{% endtrans %}</a></li>
                <li><a href=\"#\">{% trans %}About{% endtrans %}</a></li>
                <li><a href=\"#\">{% trans %}Contact{% endtrans %}</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> {% trans %}Login{% endtrans %}</a></li>
            </ul>
        </div>
    </div>
</nav>
    {% block body %}
    <div class=\"jumbotron\">
        <div class=\"container text-center\">
        {% include '@Dam/dam/search.html.twig' %}
            {% block content %}
            {% endblock %}
        </div>
    </div>
    {% endblock %}
        <footer class=\"container-fluid text-center\">
            <p>CopyRight &copy; {{ date() | date('Y') }} ZaRiba.com</p>
        </footer>
{% block javascripts %}
    <script src=\"{{ asset('js/jquery.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-ui.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
    <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/custom.js') }}\"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58ed0a8755491266\"></script>
    <script id=\"dsq-count-scr\" src=\"//ribar-bg.disqus.com/count.js\" async></script>
{% endblock %}
</body>
</html>
", "@Dam/base.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/base.html.twig");
    }
}
