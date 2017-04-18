<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cf785cdfe65c9c9e2e6de0ae91f41ebdbd9a7a190b6a1141582a07c9aeeceb00 extends Twig_Template
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
        $__internal_86c1e04a7c1bbcde1e76f881013aab2f3821f879746b21fc171c739e81db70fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c1e04a7c1bbcde1e76f881013aab2f3821f879746b21fc171c739e81db70fc->enter($__internal_86c1e04a7c1bbcde1e76f881013aab2f3821f879746b21fc171c739e81db70fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a3398469ea3abf92567a54c53d1b690378a071995c030e4a947489a40ec0444c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3398469ea3abf92567a54c53d1b690378a071995c030e4a947489a40ec0444c->enter($__internal_a3398469ea3abf92567a54c53d1b690378a071995c030e4a947489a40ec0444c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_86c1e04a7c1bbcde1e76f881013aab2f3821f879746b21fc171c739e81db70fc->leave($__internal_86c1e04a7c1bbcde1e76f881013aab2f3821f879746b21fc171c739e81db70fc_prof);

        
        $__internal_a3398469ea3abf92567a54c53d1b690378a071995c030e4a947489a40ec0444c->leave($__internal_a3398469ea3abf92567a54c53d1b690378a071995c030e4a947489a40ec0444c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
