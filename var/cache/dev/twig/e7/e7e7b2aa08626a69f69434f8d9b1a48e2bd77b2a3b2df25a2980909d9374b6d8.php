<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f64a4724956a2caf00c03cb76209f1b2b2d3a075757fb12e13f10d9667d15295 extends Twig_Template
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
        $__internal_1bb7154e4bf8e2dbd579d747385e86bae8198f67ecc17b87edf9f929be61048b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb7154e4bf8e2dbd579d747385e86bae8198f67ecc17b87edf9f929be61048b->enter($__internal_1bb7154e4bf8e2dbd579d747385e86bae8198f67ecc17b87edf9f929be61048b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_596feed5ac76cfa34b9ae18055bcb48e2ffd6ff28d6d90107ffa3b3412b4b39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596feed5ac76cfa34b9ae18055bcb48e2ffd6ff28d6d90107ffa3b3412b4b39e->enter($__internal_596feed5ac76cfa34b9ae18055bcb48e2ffd6ff28d6d90107ffa3b3412b4b39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1bb7154e4bf8e2dbd579d747385e86bae8198f67ecc17b87edf9f929be61048b->leave($__internal_1bb7154e4bf8e2dbd579d747385e86bae8198f67ecc17b87edf9f929be61048b_prof);

        
        $__internal_596feed5ac76cfa34b9ae18055bcb48e2ffd6ff28d6d90107ffa3b3412b4b39e->leave($__internal_596feed5ac76cfa34b9ae18055bcb48e2ffd6ff28d6d90107ffa3b3412b4b39e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
