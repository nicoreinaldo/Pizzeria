<?php

/* :pizzapedido:new.html.twig */
class __TwigTemplate_4f05ca7aa2bcf75094f64012c57fd1271a085fa24657fc15b3e128a2ac6b4c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pizzapedido:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bab2d34b12a21354aba6fd063ec3e4ea4f79c0523c93d1c8d7bd378229597bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bab2d34b12a21354aba6fd063ec3e4ea4f79c0523c93d1c8d7bd378229597bf->enter($__internal_5bab2d34b12a21354aba6fd063ec3e4ea4f79c0523c93d1c8d7bd378229597bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:new.html.twig"));

        $__internal_899031969df2b68dbc278287185cd2ac19e636da9961dd96a27964dfd80ce626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899031969df2b68dbc278287185cd2ac19e636da9961dd96a27964dfd80ce626->enter($__internal_899031969df2b68dbc278287185cd2ac19e636da9961dd96a27964dfd80ce626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bab2d34b12a21354aba6fd063ec3e4ea4f79c0523c93d1c8d7bd378229597bf->leave($__internal_5bab2d34b12a21354aba6fd063ec3e4ea4f79c0523c93d1c8d7bd378229597bf_prof);

        
        $__internal_899031969df2b68dbc278287185cd2ac19e636da9961dd96a27964dfd80ce626->leave($__internal_899031969df2b68dbc278287185cd2ac19e636da9961dd96a27964dfd80ce626_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f5472fb1597f80ac895a9bbb6d07b3b11cd025e99eab6683685412ad058d919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5472fb1597f80ac895a9bbb6d07b3b11cd025e99eab6683685412ad058d919->enter($__internal_3f5472fb1597f80ac895a9bbb6d07b3b11cd025e99eab6683685412ad058d919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a5fd9b4cd86bb56a482770fd2c699f977ee2ede0ef0238d0531f4ae1922a5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5fd9b4cd86bb56a482770fd2c699f977ee2ede0ef0238d0531f4ae1922a5b9->enter($__internal_5a5fd9b4cd86bb56a482770fd2c699f977ee2ede0ef0238d0531f4ae1922a5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pizzapedido creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5a5fd9b4cd86bb56a482770fd2c699f977ee2ede0ef0238d0531f4ae1922a5b9->leave($__internal_5a5fd9b4cd86bb56a482770fd2c699f977ee2ede0ef0238d0531f4ae1922a5b9_prof);

        
        $__internal_3f5472fb1597f80ac895a9bbb6d07b3b11cd025e99eab6683685412ad058d919->leave($__internal_3f5472fb1597f80ac895a9bbb6d07b3b11cd025e99eab6683685412ad058d919_prof);

    }

    public function getTemplateName()
    {
        return ":pizzapedido:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Pizzapedido creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('pizzapedido_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":pizzapedido:new.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizzapedido/new.html.twig");
    }
}
