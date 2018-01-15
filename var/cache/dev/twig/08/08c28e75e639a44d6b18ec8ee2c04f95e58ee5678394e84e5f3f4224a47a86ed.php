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
        $__internal_1da6014f48848dcb37082c2e8acfffcd88d32620af0bb1c577dab53d33407d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da6014f48848dcb37082c2e8acfffcd88d32620af0bb1c577dab53d33407d89->enter($__internal_1da6014f48848dcb37082c2e8acfffcd88d32620af0bb1c577dab53d33407d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:new.html.twig"));

        $__internal_a20b0b1044f4e8759fd59ab96c4f9da597bb131ddeeabb4f115c1fbe619ce3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20b0b1044f4e8759fd59ab96c4f9da597bb131ddeeabb4f115c1fbe619ce3fa->enter($__internal_a20b0b1044f4e8759fd59ab96c4f9da597bb131ddeeabb4f115c1fbe619ce3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1da6014f48848dcb37082c2e8acfffcd88d32620af0bb1c577dab53d33407d89->leave($__internal_1da6014f48848dcb37082c2e8acfffcd88d32620af0bb1c577dab53d33407d89_prof);

        
        $__internal_a20b0b1044f4e8759fd59ab96c4f9da597bb131ddeeabb4f115c1fbe619ce3fa->leave($__internal_a20b0b1044f4e8759fd59ab96c4f9da597bb131ddeeabb4f115c1fbe619ce3fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18822a20afde3ab028027889dfa3954fe03096b5a4cfb75d6994951ffc73e26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18822a20afde3ab028027889dfa3954fe03096b5a4cfb75d6994951ffc73e26b->enter($__internal_18822a20afde3ab028027889dfa3954fe03096b5a4cfb75d6994951ffc73e26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1befffba2f3c242e463ea166c3f8237ff18b62eee8bb21eed1a6c29d1c1e3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1befffba2f3c242e463ea166c3f8237ff18b62eee8bb21eed1a6c29d1c1e3a3->enter($__internal_e1befffba2f3c242e463ea166c3f8237ff18b62eee8bb21eed1a6c29d1c1e3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e1befffba2f3c242e463ea166c3f8237ff18b62eee8bb21eed1a6c29d1c1e3a3->leave($__internal_e1befffba2f3c242e463ea166c3f8237ff18b62eee8bb21eed1a6c29d1c1e3a3_prof);

        
        $__internal_18822a20afde3ab028027889dfa3954fe03096b5a4cfb75d6994951ffc73e26b->leave($__internal_18822a20afde3ab028027889dfa3954fe03096b5a4cfb75d6994951ffc73e26b_prof);

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
