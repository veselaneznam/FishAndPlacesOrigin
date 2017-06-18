<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7c7e16451d641378327ba2a84b4dd0c6192787966321ade91ed6c3d9e0382e60 extends Twig_Template
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
        $__internal_1ac035580e1f8f9daf845d91fdd471b1c765c53bcb212f4f84cba3d785e5cd6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac035580e1f8f9daf845d91fdd471b1c765c53bcb212f4f84cba3d785e5cd6f->enter($__internal_1ac035580e1f8f9daf845d91fdd471b1c765c53bcb212f4f84cba3d785e5cd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1bb5c76e23940a2ba33d200c690c30341a5351d59766f6245606a6d7b1764484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb5c76e23940a2ba33d200c690c30341a5351d59766f6245606a6d7b1764484->enter($__internal_1bb5c76e23940a2ba33d200c690c30341a5351d59766f6245606a6d7b1764484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1ac035580e1f8f9daf845d91fdd471b1c765c53bcb212f4f84cba3d785e5cd6f->leave($__internal_1ac035580e1f8f9daf845d91fdd471b1c765c53bcb212f4f84cba3d785e5cd6f_prof);

        
        $__internal_1bb5c76e23940a2ba33d200c690c30341a5351d59766f6245606a6d7b1764484->leave($__internal_1bb5c76e23940a2ba33d200c690c30341a5351d59766f6245606a6d7b1764484_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
