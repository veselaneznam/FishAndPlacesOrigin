<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b286ba8e723e0a25005e660bfbddf6937f82159f1b8208a1a1a9fb5cef90b325 extends Twig_Template
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
        $__internal_feb2d8d3ae65c1f59788616dcc4ccef66535ca097133fd6e056abe77290b2b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb2d8d3ae65c1f59788616dcc4ccef66535ca097133fd6e056abe77290b2b74->enter($__internal_feb2d8d3ae65c1f59788616dcc4ccef66535ca097133fd6e056abe77290b2b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6fe3c97bb8c1e1ca090347ce59f274caf1cf3a503220808cb85b31dd5fb5e38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe3c97bb8c1e1ca090347ce59f274caf1cf3a503220808cb85b31dd5fb5e38b->enter($__internal_6fe3c97bb8c1e1ca090347ce59f274caf1cf3a503220808cb85b31dd5fb5e38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_feb2d8d3ae65c1f59788616dcc4ccef66535ca097133fd6e056abe77290b2b74->leave($__internal_feb2d8d3ae65c1f59788616dcc4ccef66535ca097133fd6e056abe77290b2b74_prof);

        
        $__internal_6fe3c97bb8c1e1ca090347ce59f274caf1cf3a503220808cb85b31dd5fb5e38b->leave($__internal_6fe3c97bb8c1e1ca090347ce59f274caf1cf3a503220808cb85b31dd5fb5e38b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
