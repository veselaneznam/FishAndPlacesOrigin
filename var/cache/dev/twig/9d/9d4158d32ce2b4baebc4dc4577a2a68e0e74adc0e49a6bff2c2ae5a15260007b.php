<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5e07ffe1a1a710b23f44ba8bf9e972ad6f685d4bff7e58219435d5f82a81e828 extends Twig_Template
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
        $__internal_1b1997e8aa9973bd6be5ad3c85038f7dbca853920bf38bb0dff4ebaae48b2ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1997e8aa9973bd6be5ad3c85038f7dbca853920bf38bb0dff4ebaae48b2ddf->enter($__internal_1b1997e8aa9973bd6be5ad3c85038f7dbca853920bf38bb0dff4ebaae48b2ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_66c620e8d995601eb6c9fcaebf52546af83bee4e59f6840076ceea15c4b160dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c620e8d995601eb6c9fcaebf52546af83bee4e59f6840076ceea15c4b160dc->enter($__internal_66c620e8d995601eb6c9fcaebf52546af83bee4e59f6840076ceea15c4b160dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1b1997e8aa9973bd6be5ad3c85038f7dbca853920bf38bb0dff4ebaae48b2ddf->leave($__internal_1b1997e8aa9973bd6be5ad3c85038f7dbca853920bf38bb0dff4ebaae48b2ddf_prof);

        
        $__internal_66c620e8d995601eb6c9fcaebf52546af83bee4e59f6840076ceea15c4b160dc->leave($__internal_66c620e8d995601eb6c9fcaebf52546af83bee4e59f6840076ceea15c4b160dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
