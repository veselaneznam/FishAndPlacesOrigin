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
        $__internal_b72f7d156f1585b1eeb05fe11f5850c2aefb17f930be8c6dfa6d6a937b0c3e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72f7d156f1585b1eeb05fe11f5850c2aefb17f930be8c6dfa6d6a937b0c3e68->enter($__internal_b72f7d156f1585b1eeb05fe11f5850c2aefb17f930be8c6dfa6d6a937b0c3e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1811c93e5ded900c712b4dcf9e11a67a4591b85016fe8e4a7f491ecb7a083dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1811c93e5ded900c712b4dcf9e11a67a4591b85016fe8e4a7f491ecb7a083dde->enter($__internal_1811c93e5ded900c712b4dcf9e11a67a4591b85016fe8e4a7f491ecb7a083dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b72f7d156f1585b1eeb05fe11f5850c2aefb17f930be8c6dfa6d6a937b0c3e68->leave($__internal_b72f7d156f1585b1eeb05fe11f5850c2aefb17f930be8c6dfa6d6a937b0c3e68_prof);

        
        $__internal_1811c93e5ded900c712b4dcf9e11a67a4591b85016fe8e4a7f491ecb7a083dde->leave($__internal_1811c93e5ded900c712b4dcf9e11a67a4591b85016fe8e4a7f491ecb7a083dde_prof);

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
