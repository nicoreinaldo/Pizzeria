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
        $__internal_ed4e2a44a04dbe0470e4592ab3ac567ae9179992875ca25b98494c79775b493e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed4e2a44a04dbe0470e4592ab3ac567ae9179992875ca25b98494c79775b493e->enter($__internal_ed4e2a44a04dbe0470e4592ab3ac567ae9179992875ca25b98494c79775b493e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_96c549d1e49f7344c86e58a274eb71ecea21931816435dea103555f51da4b48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c549d1e49f7344c86e58a274eb71ecea21931816435dea103555f51da4b48d->enter($__internal_96c549d1e49f7344c86e58a274eb71ecea21931816435dea103555f51da4b48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ed4e2a44a04dbe0470e4592ab3ac567ae9179992875ca25b98494c79775b493e->leave($__internal_ed4e2a44a04dbe0470e4592ab3ac567ae9179992875ca25b98494c79775b493e_prof);

        
        $__internal_96c549d1e49f7344c86e58a274eb71ecea21931816435dea103555f51da4b48d->leave($__internal_96c549d1e49f7344c86e58a274eb71ecea21931816435dea103555f51da4b48d_prof);

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
