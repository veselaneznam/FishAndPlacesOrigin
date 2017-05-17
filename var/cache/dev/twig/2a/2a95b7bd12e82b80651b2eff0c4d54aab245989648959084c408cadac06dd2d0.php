<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_da18a18bff670b5a41f79eb5cc7d44473f6abd54007a6a48d9296def9ab5f995 extends Twig_Template
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
        $__internal_07e2cf895d90ce2de77c0a1f0fb6ebc4bb169450d30d6bc9730472766c5318b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e2cf895d90ce2de77c0a1f0fb6ebc4bb169450d30d6bc9730472766c5318b1->enter($__internal_07e2cf895d90ce2de77c0a1f0fb6ebc4bb169450d30d6bc9730472766c5318b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_8daf33b11ef4b0c4fbaa58e323d30e0a995447098a4f850c825e1acecdecb46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8daf33b11ef4b0c4fbaa58e323d30e0a995447098a4f850c825e1acecdecb46b->enter($__internal_8daf33b11ef4b0c4fbaa58e323d30e0a995447098a4f850c825e1acecdecb46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_07e2cf895d90ce2de77c0a1f0fb6ebc4bb169450d30d6bc9730472766c5318b1->leave($__internal_07e2cf895d90ce2de77c0a1f0fb6ebc4bb169450d30d6bc9730472766c5318b1_prof);

        
        $__internal_8daf33b11ef4b0c4fbaa58e323d30e0a995447098a4f850c825e1acecdecb46b->leave($__internal_8daf33b11ef4b0c4fbaa58e323d30e0a995447098a4f850c825e1acecdecb46b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
