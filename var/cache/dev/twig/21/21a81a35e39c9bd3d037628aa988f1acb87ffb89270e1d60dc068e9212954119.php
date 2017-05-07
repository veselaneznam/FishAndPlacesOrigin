<?php

/* @StarRating/rating.html.twig */
class __TwigTemplate_4a212e3274819d6a3cd3579e9da5d3a84151b8900c19d413f00688b119a8ad50 extends Twig_Template
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
        $__internal_239c6dac88f8e7ce91bb7b75141f0d7fffc96a6556bc26d756c4f4b15c62e12a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239c6dac88f8e7ce91bb7b75141f0d7fffc96a6556bc26d756c4f4b15c62e12a->enter($__internal_239c6dac88f8e7ce91bb7b75141f0d7fffc96a6556bc26d756c4f4b15c62e12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/rating.html.twig"));

        $__internal_1f84e1dbd06eae02399891f32ea5f554c8940cdd3f33f3939f1cc2dde961bf43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f84e1dbd06eae02399891f32ea5f554c8940cdd3f33f3939f1cc2dde961bf43->enter($__internal_1f84e1dbd06eae02399891f32ea5f554c8940cdd3f33f3939f1cc2dde961bf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StarRating/rating.html.twig"));

        // line 2
        $this->displayBlock('rating_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('rating_widget_container_attributes', $context, $blocks);
        
        $__internal_239c6dac88f8e7ce91bb7b75141f0d7fffc96a6556bc26d756c4f4b15c62e12a->leave($__internal_239c6dac88f8e7ce91bb7b75141f0d7fffc96a6556bc26d756c4f4b15c62e12a_prof);

        
        $__internal_1f84e1dbd06eae02399891f32ea5f554c8940cdd3f33f3939f1cc2dde961bf43->leave($__internal_1f84e1dbd06eae02399891f32ea5f554c8940cdd3f33f3939f1cc2dde961bf43_prof);

    }

    // line 2
    public function block_rating_widget($context, array $blocks = array())
    {
        $__internal_6de1f8a10bb13abb173a848e45b13e1066210f70c6ff48056a2927e5d4182aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de1f8a10bb13abb173a848e45b13e1066210f70c6ff48056a2927e5d4182aff->enter($__internal_6de1f8a10bb13abb173a848e45b13e1066210f70c6ff48056a2927e5d4182aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        $__internal_8e942502081e577e987066c6a30b21ecc50535c79494b04f7b1fd8038d98fe79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e942502081e577e987066c6a30b21ecc50535c79494b04f7b1fd8038d98fe79->enter($__internal_8e942502081e577e987066c6a30b21ecc50535c79494b04f7b1fd8038d98fe79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

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
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 7
        echo "      <div class=\"rating-well\">";
        // line 8
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars"))));
        foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
            // line 10
            echo "          <div id=\"rating_star_";
            echo twig_escape_filter($this->env, (((isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")) - $context["star"]) + 1), "html", null, true);
            echo "\" class=\"star\" data-value=\"";
            echo twig_escape_filter($this->env, (((isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")) - $context["star"]) + 1), "html", null, true);
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
        
        $__internal_8e942502081e577e987066c6a30b21ecc50535c79494b04f7b1fd8038d98fe79->leave($__internal_8e942502081e577e987066c6a30b21ecc50535c79494b04f7b1fd8038d98fe79_prof);

        
        $__internal_6de1f8a10bb13abb173a848e45b13e1066210f70c6ff48056a2927e5d4182aff->leave($__internal_6de1f8a10bb13abb173a848e45b13e1066210f70c6ff48056a2927e5d4182aff_prof);

    }

    // line 17
    public function block_rating_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_d8971caea2cd71467c2edba7f2e524afda701b2a29f7e7827b2e8a79ca520cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8971caea2cd71467c2edba7f2e524afda701b2a29f7e7827b2e8a79ca520cf0->enter($__internal_d8971caea2cd71467c2edba7f2e524afda701b2a29f7e7827b2e8a79ca520cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        $__internal_6e0b79128f05dc0b1392a9d49e831708f84c65ec5a52f806b1fd048c41f60c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0b79128f05dc0b1392a9d49e831708f84c65ec5a52f806b1fd048c41f60c37->enter($__internal_6e0b79128f05dc0b1392a9d49e831708f84c65ec5a52f806b1fd048c41f60c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        // line 18
        ob_start();
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 20
            echo " ";
            // line 21
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 22
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
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
        
        $__internal_6e0b79128f05dc0b1392a9d49e831708f84c65ec5a52f806b1fd048c41f60c37->leave($__internal_6e0b79128f05dc0b1392a9d49e831708f84c65ec5a52f806b1fd048c41f60c37_prof);

        
        $__internal_d8971caea2cd71467c2edba7f2e524afda701b2a29f7e7827b2e8a79ca520cf0->leave($__internal_d8971caea2cd71467c2edba7f2e524afda701b2a29f7e7827b2e8a79ca520cf0_prof);

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
{% endblock rating_widget_container_attributes %}", "@StarRating/rating.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/blackknight467/star-rating-bundle/blackknight467/StarRatingBundle/Resources/views/rating.html.twig");
    }
}
