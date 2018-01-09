<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4599f3ba6c6fa4e8c3dc357717f7e76ac0261e000440ef63937334e17c46b88c extends Twig_Template
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
        $__internal_e23ecd2be4560fdd8cab729d495c78cc58479410db8352779755aaaf53e7c760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23ecd2be4560fdd8cab729d495c78cc58479410db8352779755aaaf53e7c760->enter($__internal_e23ecd2be4560fdd8cab729d495c78cc58479410db8352779755aaaf53e7c760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b2b4025e8df9d35d6cd417e4e9eebde238397b6f27afe88afa91809a5c398510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b4025e8df9d35d6cd417e4e9eebde238397b6f27afe88afa91809a5c398510->enter($__internal_b2b4025e8df9d35d6cd417e4e9eebde238397b6f27afe88afa91809a5c398510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e23ecd2be4560fdd8cab729d495c78cc58479410db8352779755aaaf53e7c760->leave($__internal_e23ecd2be4560fdd8cab729d495c78cc58479410db8352779755aaaf53e7c760_prof);

        
        $__internal_b2b4025e8df9d35d6cd417e4e9eebde238397b6f27afe88afa91809a5c398510->leave($__internal_b2b4025e8df9d35d6cd417e4e9eebde238397b6f27afe88afa91809a5c398510_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
