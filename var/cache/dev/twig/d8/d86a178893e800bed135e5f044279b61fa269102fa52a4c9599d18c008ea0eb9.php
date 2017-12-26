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
        $__internal_23ca37e4d6455d8eacf01aa08ad0a228d38b75f35ad6d7957a24f39d29a60820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ca37e4d6455d8eacf01aa08ad0a228d38b75f35ad6d7957a24f39d29a60820->enter($__internal_23ca37e4d6455d8eacf01aa08ad0a228d38b75f35ad6d7957a24f39d29a60820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_408412a04209ab15c9b3f06f041f2c829e2bb4957a7bb91a29198ed57886e21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408412a04209ab15c9b3f06f041f2c829e2bb4957a7bb91a29198ed57886e21a->enter($__internal_408412a04209ab15c9b3f06f041f2c829e2bb4957a7bb91a29198ed57886e21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_23ca37e4d6455d8eacf01aa08ad0a228d38b75f35ad6d7957a24f39d29a60820->leave($__internal_23ca37e4d6455d8eacf01aa08ad0a228d38b75f35ad6d7957a24f39d29a60820_prof);

        
        $__internal_408412a04209ab15c9b3f06f041f2c829e2bb4957a7bb91a29198ed57886e21a->leave($__internal_408412a04209ab15c9b3f06f041f2c829e2bb4957a7bb91a29198ed57886e21a_prof);

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
