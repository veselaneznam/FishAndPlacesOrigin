<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7c2b83a92c41937e16af2007af3a97d4bdd998d52a9d5935cc37c52bbcf53bb4 extends Twig_Template
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
        $__internal_5fe13df4dd11c4ba237c1d0cbc3e828598ca1d8a0d5f0ad82ebf6437cce7193d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe13df4dd11c4ba237c1d0cbc3e828598ca1d8a0d5f0ad82ebf6437cce7193d->enter($__internal_5fe13df4dd11c4ba237c1d0cbc3e828598ca1d8a0d5f0ad82ebf6437cce7193d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_4910192da705869761e25369a890ca50b77a13bf0b03bd880746b387a71e5038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4910192da705869761e25369a890ca50b77a13bf0b03bd880746b387a71e5038->enter($__internal_4910192da705869761e25369a890ca50b77a13bf0b03bd880746b387a71e5038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5fe13df4dd11c4ba237c1d0cbc3e828598ca1d8a0d5f0ad82ebf6437cce7193d->leave($__internal_5fe13df4dd11c4ba237c1d0cbc3e828598ca1d8a0d5f0ad82ebf6437cce7193d_prof);

        
        $__internal_4910192da705869761e25369a890ca50b77a13bf0b03bd880746b387a71e5038->leave($__internal_4910192da705869761e25369a890ca50b77a13bf0b03bd880746b387a71e5038_prof);

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
", "@Framework/Form/money_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
