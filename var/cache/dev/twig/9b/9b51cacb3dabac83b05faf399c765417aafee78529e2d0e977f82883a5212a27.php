<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e8070ecfd21cd83e09f6c4a5a7b5f94d8298862e3180d051140753e68789660e extends Twig_Template
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
        $__internal_035634f0201da96726f6bbc37d40dbd8fb5a8690c3870f93b83a619bb1b1bf79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035634f0201da96726f6bbc37d40dbd8fb5a8690c3870f93b83a619bb1b1bf79->enter($__internal_035634f0201da96726f6bbc37d40dbd8fb5a8690c3870f93b83a619bb1b1bf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_afcfbaf9bf23d7e9e125399a09703568b80c4ddc5f914e6fce3b2dfdeef6e939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcfbaf9bf23d7e9e125399a09703568b80c4ddc5f914e6fce3b2dfdeef6e939->enter($__internal_afcfbaf9bf23d7e9e125399a09703568b80c4ddc5f914e6fce3b2dfdeef6e939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_035634f0201da96726f6bbc37d40dbd8fb5a8690c3870f93b83a619bb1b1bf79->leave($__internal_035634f0201da96726f6bbc37d40dbd8fb5a8690c3870f93b83a619bb1b1bf79_prof);

        
        $__internal_afcfbaf9bf23d7e9e125399a09703568b80c4ddc5f914e6fce3b2dfdeef6e939->leave($__internal_afcfbaf9bf23d7e9e125399a09703568b80c4ddc5f914e6fce3b2dfdeef6e939_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
