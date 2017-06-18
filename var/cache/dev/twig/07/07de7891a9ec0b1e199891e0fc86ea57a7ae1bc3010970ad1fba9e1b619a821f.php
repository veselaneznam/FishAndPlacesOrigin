<?php

/* @StarRating/rating.html.twig */
class __TwigTemplate_08a694f3268b7c87c67204d00dc04419d90650436387acb0030f12010e71822b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'rating_widget' => array($this, 'block_rating_widget'),
            'rating_widget_container_attributes' => array($this, 'block_rating_widget_container_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efa996bbac857b3b8746706d22633ecab052db261a9ea57f4e1e28b680ecd483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa996bbac857b3b8746706d22633ecab052db261a9ea57f4e1e28b680ecd483->enter($__internal_efa996bbac857b3b8746706d22633ecab052db261a9ea57f4e1e28b680ecd483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/rating.html.twig"));

        $__internal_27c28c9e264b7f95d997df5444bc3767aade9e52ba94f1ae928bd3fc3f7b5005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c28c9e264b7f95d997df5444bc3767aade9e52ba94f1ae928bd3fc3f7b5005->enter($__internal_27c28c9e264b7f95d997df5444bc3767aade9e52ba94f1ae928bd3fc3f7b5005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/rating.html.twig"));

        // line 2
        $this->displayBlock('rating_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('rating_widget_container_attributes', $context, $blocks);
        
        $__internal_efa996bbac857b3b8746706d22633ecab052db261a9ea57f4e1e28b680ecd483->leave($__internal_efa996bbac857b3b8746706d22633ecab052db261a9ea57f4e1e28b680ecd483_prof);

        
        $__internal_27c28c9e264b7f95d997df5444bc3767aade9e52ba94f1ae928bd3fc3f7b5005->leave($__internal_27c28c9e264b7f95d997df5444bc3767aade9e52ba94f1ae928bd3fc3f7b5005_prof);

    }

    // line 2
    public function block_rating_widget($context, array $blocks = array())
    {
        $__internal_0e859a79edc4ff1831cd04effffc70daf37d52e0d581629680f62537bf59a78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e859a79edc4ff1831cd04effffc70daf37d52e0d581629680f62537bf59a78a->enter($__internal_0e859a79edc4ff1831cd04effffc70daf37d52e0d581629680f62537bf59a78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        $__internal_8ba02df633d98fcc5bb24b546bd8ff2b189560cd7e833f264e8cf6e93ee28e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba02df633d98fcc5bb24b546bd8ff2b189560cd7e833f264e8cf6e93ee28e94->enter($__internal_8ba02df633d98fcc5bb24b546bd8ff2b189560cd7e833f264e8cf6e93ee28e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        // line 3
        echo "  ";
        ob_start();
        // line 4
        echo "    <div ";
        $this->displayBlock("rating_widget_container_attributes", $context, $blocks);
        echo ">
      ";
        // line 6
        echo "      ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 7
        echo "      <div class=\"rating-well\">";
        // line 8
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["stars"] ?? $this->getContext($context, "stars"))));
        foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
            // line 10
            echo "          <div id=\"rating_star_";
            echo twig_escape_filter($this->env, ((($context["stars"] ?? $this->getContext($context, "stars")) - $context["star"]) + 1), "html", null, true);
            echo "\" class=\"star\" data-value=\"";
            echo twig_escape_filter($this->env, ((($context["stars"] ?? $this->getContext($context, "stars")) - $context["star"]) + 1), "html", null, true);
            echo "\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </div>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8ba02df633d98fcc5bb24b546bd8ff2b189560cd7e833f264e8cf6e93ee28e94->leave($__internal_8ba02df633d98fcc5bb24b546bd8ff2b189560cd7e833f264e8cf6e93ee28e94_prof);

        
        $__internal_0e859a79edc4ff1831cd04effffc70daf37d52e0d581629680f62537bf59a78a->leave($__internal_0e859a79edc4ff1831cd04effffc70daf37d52e0d581629680f62537bf59a78a_prof);

    }

    // line 17
    public function block_rating_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_a93d1386f5467727432329078d9ba223e3467a3cafb9d428eacceea895c0cd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93d1386f5467727432329078d9ba223e3467a3cafb9d428eacceea895c0cd27->enter($__internal_a93d1386f5467727432329078d9ba223e3467a3cafb9d428eacceea895c0cd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        $__internal_afb909937f8cb8c301a4fa2f5872e4ea20c5a9b6668fcc06dc5d6cfdd4401906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb909937f8cb8c301a4fa2f5872e4ea20c5a9b6668fcc06dc5d6cfdd4401906->enter($__internal_afb909937f8cb8c301a4fa2f5872e4ea20c5a9b6668fcc06dc5d6cfdd4401906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        // line 18
        ob_start();
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 20
            echo " ";
            // line 21
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 22
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 23
$context["attrvalue"] === true)) {
                // line 24
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 25
$context["attrvalue"] === false)) {
                // line 26
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_afb909937f8cb8c301a4fa2f5872e4ea20c5a9b6668fcc06dc5d6cfdd4401906->leave($__internal_afb909937f8cb8c301a4fa2f5872e4ea20c5a9b6668fcc06dc5d6cfdd4401906_prof);

        
        $__internal_a93d1386f5467727432329078d9ba223e3467a3cafb9d428eacceea895c0cd27->leave($__internal_a93d1386f5467727432329078d9ba223e3467a3cafb9d428eacceea895c0cd27_prof);

    }

    public function getTemplateName()
    {
        return "@StarRating/rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 26,  125 => 25,  120 => 24,  118 => 23,  113 => 22,  111 => 21,  109 => 20,  105 => 19,  103 => 18,  94 => 17,  81 => 12,  70 => 10,  66 => 9,  64 => 8,  62 => 7,  59 => 6,  54 => 4,  51 => 3,  42 => 2,  32 => 17,  29 => 16,  27 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# blackknight467/StarRatingBundle/Resources/views/rating.html.twig #}
{% block rating_widget %}
  {% spaceless %}
    <div {{ block('rating_widget_container_attributes') }}>
      {# type=\"number\" doesn't work with floats #}
      {% set type = type|default('text') %}
      <div class=\"rating-well\">
        {{- block('form_widget_simple') -}}
        {% for star in 1..stars %}
          <div id=\"rating_star_{{ stars - star + 1 }}\" class=\"star\" data-value=\"{{ stars - star + 1 }}\"></div>
        {% endfor %}
      </div>
    </div>
  {% endspaceless %}
{% endblock rating_widget %}

{% block rating_widget_container_attributes %}
{% spaceless %}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{% endspaceless %}
{% endblock rating_widget_container_attributes %}", "@StarRating/rating.html.twig", "/var/www/FishAndPlaces/vendor/blackknight467/star-rating-bundle/blackknight467/StarRatingBundle/Resources/views/rating.html.twig");
    }
}
