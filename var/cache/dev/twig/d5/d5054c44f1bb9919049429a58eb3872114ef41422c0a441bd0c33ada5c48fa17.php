<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_38ba1ee04efa0eab2bb77b654d911aaec766cd68d550dd180d3b740d3badfcb9 extends Twig_Template
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
        $__internal_7fbb6dedb8dbcaf2cb027a546ca67e1461182d62b5f0eebfa82a9ac69f4983c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbb6dedb8dbcaf2cb027a546ca67e1461182d62b5f0eebfa82a9ac69f4983c7->enter($__internal_7fbb6dedb8dbcaf2cb027a546ca67e1461182d62b5f0eebfa82a9ac69f4983c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c2c281024935ce7185aba3947670d95ab2ba5cb4423f8ff76b29aad2efaa2d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c281024935ce7185aba3947670d95ab2ba5cb4423f8ff76b29aad2efaa2d3a->enter($__internal_c2c281024935ce7185aba3947670d95ab2ba5cb4423f8ff76b29aad2efaa2d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7fbb6dedb8dbcaf2cb027a546ca67e1461182d62b5f0eebfa82a9ac69f4983c7->leave($__internal_7fbb6dedb8dbcaf2cb027a546ca67e1461182d62b5f0eebfa82a9ac69f4983c7_prof);

        
        $__internal_c2c281024935ce7185aba3947670d95ab2ba5cb4423f8ff76b29aad2efaa2d3a->leave($__internal_c2c281024935ce7185aba3947670d95ab2ba5cb4423f8ff76b29aad2efaa2d3a_prof);

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
", "@Framework/Form/form_rows.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
