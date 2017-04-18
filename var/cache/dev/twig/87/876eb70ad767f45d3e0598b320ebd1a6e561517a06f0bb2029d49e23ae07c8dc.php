<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_14efcfc11b51acec85bd80e78bb241ee11ba0b1342cef4351565e1c4cfddb35c extends Twig_Template
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
        $__internal_36c3589c547ef697d1e568e852731ad1011c33a44c58e978a08c07caf4248eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c3589c547ef697d1e568e852731ad1011c33a44c58e978a08c07caf4248eb9->enter($__internal_36c3589c547ef697d1e568e852731ad1011c33a44c58e978a08c07caf4248eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ac08e5ba75a4fbb3c04ec01177049c5b36b0fdf84ee72960c95b9fed5ca7c431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac08e5ba75a4fbb3c04ec01177049c5b36b0fdf84ee72960c95b9fed5ca7c431->enter($__internal_ac08e5ba75a4fbb3c04ec01177049c5b36b0fdf84ee72960c95b9fed5ca7c431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_36c3589c547ef697d1e568e852731ad1011c33a44c58e978a08c07caf4248eb9->leave($__internal_36c3589c547ef697d1e568e852731ad1011c33a44c58e978a08c07caf4248eb9_prof);

        
        $__internal_ac08e5ba75a4fbb3c04ec01177049c5b36b0fdf84ee72960c95b9fed5ca7c431->leave($__internal_ac08e5ba75a4fbb3c04ec01177049c5b36b0fdf84ee72960c95b9fed5ca7c431_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
