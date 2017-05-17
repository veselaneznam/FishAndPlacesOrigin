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
        $__internal_aabc84bb58347df06e1f42b8239068ad8284449d5bc4546c04bd0adceca5fedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aabc84bb58347df06e1f42b8239068ad8284449d5bc4546c04bd0adceca5fedd->enter($__internal_aabc84bb58347df06e1f42b8239068ad8284449d5bc4546c04bd0adceca5fedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_fb833fc1a582abe2ffb2922d0998b3a1bbda9d52e3356b8dddd75362367c5f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb833fc1a582abe2ffb2922d0998b3a1bbda9d52e3356b8dddd75362367c5f2e->enter($__internal_fb833fc1a582abe2ffb2922d0998b3a1bbda9d52e3356b8dddd75362367c5f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_aabc84bb58347df06e1f42b8239068ad8284449d5bc4546c04bd0adceca5fedd->leave($__internal_aabc84bb58347df06e1f42b8239068ad8284449d5bc4546c04bd0adceca5fedd_prof);

        
        $__internal_fb833fc1a582abe2ffb2922d0998b3a1bbda9d52e3356b8dddd75362367c5f2e->leave($__internal_fb833fc1a582abe2ffb2922d0998b3a1bbda9d52e3356b8dddd75362367c5f2e_prof);

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
