<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_179ce0a4f86c0bfffce389c3659d39dfe7ce04fbcad0402ffe8a07c4c49abf6b extends Twig_Template
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
        $__internal_d50e54c9d839c8a41c73f3961b50cc3907d0b9eb8233775a2ae6e26553a486f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50e54c9d839c8a41c73f3961b50cc3907d0b9eb8233775a2ae6e26553a486f3->enter($__internal_d50e54c9d839c8a41c73f3961b50cc3907d0b9eb8233775a2ae6e26553a486f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b16f5e2dd0b24acd554bc3cfbc2bc6e760963eb14950b8bb08bb8de21cf437f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16f5e2dd0b24acd554bc3cfbc2bc6e760963eb14950b8bb08bb8de21cf437f4->enter($__internal_b16f5e2dd0b24acd554bc3cfbc2bc6e760963eb14950b8bb08bb8de21cf437f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d50e54c9d839c8a41c73f3961b50cc3907d0b9eb8233775a2ae6e26553a486f3->leave($__internal_d50e54c9d839c8a41c73f3961b50cc3907d0b9eb8233775a2ae6e26553a486f3_prof);

        
        $__internal_b16f5e2dd0b24acd554bc3cfbc2bc6e760963eb14950b8bb08bb8de21cf437f4->leave($__internal_b16f5e2dd0b24acd554bc3cfbc2bc6e760963eb14950b8bb08bb8de21cf437f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
