<?php

/* @GoGreen/base.html.twig */
class __TwigTemplate_315957f72ca784d4c3db470cef4d083cba06e71ff60610752a9dfb38f1dc95fb extends Twig_Template
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
        $__internal_401fc3c0fba156df065f0c30d07f823a7e4b3dfe2671f690f720f302110b94df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_401fc3c0fba156df065f0c30d07f823a7e4b3dfe2671f690f720f302110b94df->enter($__internal_401fc3c0fba156df065f0c30d07f823a7e4b3dfe2671f690f720f302110b94df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/base.html.twig"));

        $__internal_4453ccf74aa7b7a5e9a30e2168ff7a3f78909f71cae2692c9086b6c4189fb5f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4453ccf74aa7b7a5e9a30e2168ff7a3f78909f71cae2692c9086b6c4189fb5f6->enter($__internal_4453ccf74aa7b7a5e9a30e2168ff7a3f78909f71cae2692c9086b6c4189fb5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/base.html.twig"));

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
            <a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Go Green", array(), "messages");
        echo "</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Home", array(), "messages");
        echo "</a></li>
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_view", array("slug" => "about-us"));
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("About", array(), "messages");
        echo "</a></li>
                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_view", array("slug" => "contact-us"));
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Contact", array(), "messages");
        echo "</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Login", array(), "messages");
        echo "</a></li>
            </ul>
        </div>
    </div>
</nav>
    ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "        <footer class=\"container-fluid text-center\">
            <p>CopyRight &copy; ";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "Y"), "html", null, true);
        echo " НаЗелено.com</p>
        </footer>
";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "</body>
</html>
";
        
        $__internal_401fc3c0fba156df065f0c30d07f823a7e4b3dfe2671f690f720f302110b94df->leave($__internal_401fc3c0fba156df065f0c30d07f823a7e4b3dfe2671f690f720f302110b94df_prof);

        
        $__internal_4453ccf74aa7b7a5e9a30e2168ff7a3f78909f71cae2692c9086b6c4189fb5f6->leave($__internal_4453ccf74aa7b7a5e9a30e2168ff7a3f78909f71cae2692c9086b6c4189fb5f6_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_68780d7a8bd18165adc4826f5ab048ba8e7aa96c9933670fd9652c6461c51f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68780d7a8bd18165adc4826f5ab048ba8e7aa96c9933670fd9652c6461c51f48->enter($__internal_68780d7a8bd18165adc4826f5ab048ba8e7aa96c9933670fd9652c6461c51f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25b6dd9e298da323cb7187f76c3a1bd4693358703268b4da47fe46d28a570474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b6dd9e298da323cb7187f76c3a1bd4693358703268b4da47fe46d28a570474->enter($__internal_25b6dd9e298da323cb7187f76c3a1bd4693358703268b4da47fe46d28a570474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 40
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 41
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 45
            echo "            <div class=\"alert alert-info\">
                ";
            // line 46
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    <div class=\"jumbotron\">
        <div class=\"container text-center\">
        ";
        // line 51
        $this->loadTemplate("@GoGreen/dam/search.html.twig", "@GoGreen/base.html.twig", 51)->display($context);
        // line 52
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "        </div>
    </div>
    ";
        
        $__internal_25b6dd9e298da323cb7187f76c3a1bd4693358703268b4da47fe46d28a570474->leave($__internal_25b6dd9e298da323cb7187f76c3a1bd4693358703268b4da47fe46d28a570474_prof);

        
        $__internal_68780d7a8bd18165adc4826f5ab048ba8e7aa96c9933670fd9652c6461c51f48->leave($__internal_68780d7a8bd18165adc4826f5ab048ba8e7aa96c9933670fd9652c6461c51f48_prof);

    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        $__internal_94500d27df8858904e894245bd8483cecf806b97b060d5e876fcc952e64d5602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94500d27df8858904e894245bd8483cecf806b97b060d5e876fcc952e64d5602->enter($__internal_94500d27df8858904e894245bd8483cecf806b97b060d5e876fcc952e64d5602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_13b5d8cde7955b343ebb73434f8a5700937326f352df66c70fbde08508377912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b5d8cde7955b343ebb73434f8a5700937326f352df66c70fbde08508377912->enter($__internal_13b5d8cde7955b343ebb73434f8a5700937326f352df66c70fbde08508377912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 53
        echo "            ";
        
        $__internal_13b5d8cde7955b343ebb73434f8a5700937326f352df66c70fbde08508377912->leave($__internal_13b5d8cde7955b343ebb73434f8a5700937326f352df66c70fbde08508377912_prof);

        
        $__internal_94500d27df8858904e894245bd8483cecf806b97b060d5e876fcc952e64d5602->leave($__internal_94500d27df8858904e894245bd8483cecf806b97b060d5e876fcc952e64d5602_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0da455095d6a567915c50892503553c34e6a2cdb68a5936c59fe6d298f05b7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da455095d6a567915c50892503553c34e6a2cdb68a5936c59fe6d298f05b7d7->enter($__internal_0da455095d6a567915c50892503553c34e6a2cdb68a5936c59fe6d298f05b7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_27a3e652b7be2f180afc5010e4b3fe6bd73a69e6d4ebaaa01469691e27c7dca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a3e652b7be2f180afc5010e4b3fe6bd73a69e6d4ebaaa01469691e27c7dca8->enter($__internal_27a3e652b7be2f180afc5010e4b3fe6bd73a69e6d4ebaaa01469691e27c7dca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58ed0a8755491266\"></script>
    <script id=\"dsq-count-scr\" src=\"//ribar-bg.disqus.com/count.js\" async></script>
";
        
        $__internal_27a3e652b7be2f180afc5010e4b3fe6bd73a69e6d4ebaaa01469691e27c7dca8->leave($__internal_27a3e652b7be2f180afc5010e4b3fe6bd73a69e6d4ebaaa01469691e27c7dca8_prof);

        
        $__internal_0da455095d6a567915c50892503553c34e6a2cdb68a5936c59fe6d298f05b7d7->leave($__internal_0da455095d6a567915c50892503553c34e6a2cdb68a5936c59fe6d298f05b7d7_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 65,  240 => 64,  236 => 63,  232 => 62,  227 => 61,  218 => 60,  208 => 53,  199 => 52,  187 => 54,  184 => 52,  182 => 51,  178 => 49,  169 => 46,  166 => 45,  161 => 44,  152 => 41,  149 => 40,  144 => 39,  135 => 38,  123 => 69,  121 => 60,  116 => 58,  113 => 57,  111 => 38,  103 => 33,  95 => 30,  89 => 29,  83 => 28,  74 => 24,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  28 => 1,);
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
            <a class=\"navbar-brand\" href=\"{{ path('dam') }}\">{% trans %}Go Green{% endtrans %}</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"{{ path('dam') }}\">{% trans %}Home{% endtrans %}</a></li>
                <li><a href=\"{{ path('page_view', {'slug': 'about-us'}) }}\">{% trans %}About{% endtrans %}</a></li>
                <li><a href=\"{{ path('page_view', {'slug': 'contact-us'}) }}\">{% trans %}Contact{% endtrans %}</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> {% trans %}Login{% endtrans %}</a></li>
            </ul>
        </div>
    </div>
</nav>
    {% block body %}
        {% for flashMessage in app.session.flashbag.get('error') %}
            <div class=\"alert alert-danger\">
                {{ flashMessage }}
            </div>
        {% endfor %}
        {% for flashMessage in app.session.flashbag.get('notice') %}
            <div class=\"alert alert-info\">
                {{ flashMessage }}
            </div>
        {% endfor %}
    <div class=\"jumbotron\">
        <div class=\"container text-center\">
        {% include '@GoGreen/dam/search.html.twig' %}
            {% block content %}
            {% endblock %}
        </div>
    </div>
    {% endblock %}
        <footer class=\"container-fluid text-center\">
            <p>CopyRight &copy; {{ date() | date('Y') }} НаЗелено.com</p>
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
", "@GoGreen/base.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/base.html.twig");
    }
}
