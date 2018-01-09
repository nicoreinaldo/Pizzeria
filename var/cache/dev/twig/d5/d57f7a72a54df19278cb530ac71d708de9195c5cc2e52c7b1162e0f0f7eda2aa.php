<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a62b39ddd7f5b5864fcf9fea12f44a9f9a068460c92c123a214a405feca34032 extends Twig_Template
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
        $__internal_84625389dbc9a08bddbd3366fa33fb2e6bbe95be5949c02f3e5e406374ad146d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84625389dbc9a08bddbd3366fa33fb2e6bbe95be5949c02f3e5e406374ad146d->enter($__internal_84625389dbc9a08bddbd3366fa33fb2e6bbe95be5949c02f3e5e406374ad146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_15841a525332731690b87b8e7f7ea042c383b2660f90c13be91478d6d45020f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15841a525332731690b87b8e7f7ea042c383b2660f90c13be91478d6d45020f4->enter($__internal_15841a525332731690b87b8e7f7ea042c383b2660f90c13be91478d6d45020f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_84625389dbc9a08bddbd3366fa33fb2e6bbe95be5949c02f3e5e406374ad146d->leave($__internal_84625389dbc9a08bddbd3366fa33fb2e6bbe95be5949c02f3e5e406374ad146d_prof);

        
        $__internal_15841a525332731690b87b8e7f7ea042c383b2660f90c13be91478d6d45020f4->leave($__internal_15841a525332731690b87b8e7f7ea042c383b2660f90c13be91478d6d45020f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
