<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_027602830842674326db7f8850d692d5129112432751b59ef7b4e7fa33b59732 extends Twig_Template
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
        $__internal_b36955bd3b1a79af1cd5077ec44a93c595ff954a0c975797cf7747790107d4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36955bd3b1a79af1cd5077ec44a93c595ff954a0c975797cf7747790107d4fe->enter($__internal_b36955bd3b1a79af1cd5077ec44a93c595ff954a0c975797cf7747790107d4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_31079b1f7ef3b2bcefe698843a55dd604e15bc3cf209c168dfd7f30e1e05ac15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31079b1f7ef3b2bcefe698843a55dd604e15bc3cf209c168dfd7f30e1e05ac15->enter($__internal_31079b1f7ef3b2bcefe698843a55dd604e15bc3cf209c168dfd7f30e1e05ac15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b36955bd3b1a79af1cd5077ec44a93c595ff954a0c975797cf7747790107d4fe->leave($__internal_b36955bd3b1a79af1cd5077ec44a93c595ff954a0c975797cf7747790107d4fe_prof);

        
        $__internal_31079b1f7ef3b2bcefe698843a55dd604e15bc3cf209c168dfd7f30e1e05ac15->leave($__internal_31079b1f7ef3b2bcefe698843a55dd604e15bc3cf209c168dfd7f30e1e05ac15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
