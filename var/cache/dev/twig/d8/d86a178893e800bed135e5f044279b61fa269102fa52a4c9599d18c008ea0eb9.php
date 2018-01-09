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
        $__internal_64b1637b156ab944ba5afdcb1046e4a9e1b84cc01a8d9079432bd6d3a74c3d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b1637b156ab944ba5afdcb1046e4a9e1b84cc01a8d9079432bd6d3a74c3d1c->enter($__internal_64b1637b156ab944ba5afdcb1046e4a9e1b84cc01a8d9079432bd6d3a74c3d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_95193df9ad1c4f97b71f544fe7e3616c451cb385c927f9878531f06b79a696b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95193df9ad1c4f97b71f544fe7e3616c451cb385c927f9878531f06b79a696b9->enter($__internal_95193df9ad1c4f97b71f544fe7e3616c451cb385c927f9878531f06b79a696b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_64b1637b156ab944ba5afdcb1046e4a9e1b84cc01a8d9079432bd6d3a74c3d1c->leave($__internal_64b1637b156ab944ba5afdcb1046e4a9e1b84cc01a8d9079432bd6d3a74c3d1c_prof);

        
        $__internal_95193df9ad1c4f97b71f544fe7e3616c451cb385c927f9878531f06b79a696b9->leave($__internal_95193df9ad1c4f97b71f544fe7e3616c451cb385c927f9878531f06b79a696b9_prof);

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
