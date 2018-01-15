<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_82d94865b8bc774c13f5ebb9ff2abfad6837ed5c949c7dfb9a8d130b8e708058 extends Twig_Template
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
        $__internal_053e88636cc22314ca3c8fb41cbd79fe9a7b25df6cbd90a50b0b56ec137e2677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053e88636cc22314ca3c8fb41cbd79fe9a7b25df6cbd90a50b0b56ec137e2677->enter($__internal_053e88636cc22314ca3c8fb41cbd79fe9a7b25df6cbd90a50b0b56ec137e2677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f7b6a4d64385eac87178355a5f4d3ebb539246dde9ac689c1c527ee8e655ca10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b6a4d64385eac87178355a5f4d3ebb539246dde9ac689c1c527ee8e655ca10->enter($__internal_f7b6a4d64385eac87178355a5f4d3ebb539246dde9ac689c1c527ee8e655ca10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_053e88636cc22314ca3c8fb41cbd79fe9a7b25df6cbd90a50b0b56ec137e2677->leave($__internal_053e88636cc22314ca3c8fb41cbd79fe9a7b25df6cbd90a50b0b56ec137e2677_prof);

        
        $__internal_f7b6a4d64385eac87178355a5f4d3ebb539246dde9ac689c1c527ee8e655ca10->leave($__internal_f7b6a4d64385eac87178355a5f4d3ebb539246dde9ac689c1c527ee8e655ca10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
