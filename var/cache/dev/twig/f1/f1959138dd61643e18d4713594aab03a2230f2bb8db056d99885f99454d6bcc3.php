<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b5598b6f19b504df712797decd911e6b6e6d3dfccf68bb70900d3e52c59105eb extends Twig_Template
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
        $__internal_19e1f18d759ffbe8a4c26b41d82eaae23904cab281016248d76acd5073d41d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e1f18d759ffbe8a4c26b41d82eaae23904cab281016248d76acd5073d41d78->enter($__internal_19e1f18d759ffbe8a4c26b41d82eaae23904cab281016248d76acd5073d41d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_36041344de9557fb322539e1208187e8a0917c20ea3fa2f2cb2ffbddd9475ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36041344de9557fb322539e1208187e8a0917c20ea3fa2f2cb2ffbddd9475ba0->enter($__internal_36041344de9557fb322539e1208187e8a0917c20ea3fa2f2cb2ffbddd9475ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_19e1f18d759ffbe8a4c26b41d82eaae23904cab281016248d76acd5073d41d78->leave($__internal_19e1f18d759ffbe8a4c26b41d82eaae23904cab281016248d76acd5073d41d78_prof);

        
        $__internal_36041344de9557fb322539e1208187e8a0917c20ea3fa2f2cb2ffbddd9475ba0->leave($__internal_36041344de9557fb322539e1208187e8a0917c20ea3fa2f2cb2ffbddd9475ba0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
