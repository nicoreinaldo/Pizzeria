<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1b0e9c4b22c46743b968e7f0fadebeaacf90d92c6a7ce1c217e3b85c4e748aae extends Twig_Template
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
        $__internal_d91dec946b34350cb8c05abf70d68d761b79f349a55e98f3622219cc2312cacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91dec946b34350cb8c05abf70d68d761b79f349a55e98f3622219cc2312cacc->enter($__internal_d91dec946b34350cb8c05abf70d68d761b79f349a55e98f3622219cc2312cacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_70905e2df69c4b7e729cef2745d519f7e73a11f00fe4f2f70c3a5ca4c0d2b96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70905e2df69c4b7e729cef2745d519f7e73a11f00fe4f2f70c3a5ca4c0d2b96b->enter($__internal_70905e2df69c4b7e729cef2745d519f7e73a11f00fe4f2f70c3a5ca4c0d2b96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d91dec946b34350cb8c05abf70d68d761b79f349a55e98f3622219cc2312cacc->leave($__internal_d91dec946b34350cb8c05abf70d68d761b79f349a55e98f3622219cc2312cacc_prof);

        
        $__internal_70905e2df69c4b7e729cef2745d519f7e73a11f00fe4f2f70c3a5ca4c0d2b96b->leave($__internal_70905e2df69c4b7e729cef2745d519f7e73a11f00fe4f2f70c3a5ca4c0d2b96b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
