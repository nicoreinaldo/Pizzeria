<?php

/* :pizzapedido:show.html.twig */
class __TwigTemplate_031bfd9d70ac00dcdfb1c3a6c295c5659bf429fd7b8ed0fcf9017dd20849a9ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pizzapedido:show.html.twig", 1);
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
        $__internal_5fec09d9728b722b34156d065c505ce3f78703f087389fa60f866cbb49ad3a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fec09d9728b722b34156d065c505ce3f78703f087389fa60f866cbb49ad3a07->enter($__internal_5fec09d9728b722b34156d065c505ce3f78703f087389fa60f866cbb49ad3a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:show.html.twig"));

        $__internal_011286cd0b37786702d070f824d9729d7b65bc6670b2dfbfecb77a67b15090d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011286cd0b37786702d070f824d9729d7b65bc6670b2dfbfecb77a67b15090d4->enter($__internal_011286cd0b37786702d070f824d9729d7b65bc6670b2dfbfecb77a67b15090d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fec09d9728b722b34156d065c505ce3f78703f087389fa60f866cbb49ad3a07->leave($__internal_5fec09d9728b722b34156d065c505ce3f78703f087389fa60f866cbb49ad3a07_prof);

        
        $__internal_011286cd0b37786702d070f824d9729d7b65bc6670b2dfbfecb77a67b15090d4->leave($__internal_011286cd0b37786702d070f824d9729d7b65bc6670b2dfbfecb77a67b15090d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_269269c74e843d7965757d6b83a188bee5971a9bd89c1b34b950948ad4c193d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269269c74e843d7965757d6b83a188bee5971a9bd89c1b34b950948ad4c193d4->enter($__internal_269269c74e843d7965757d6b83a188bee5971a9bd89c1b34b950948ad4c193d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68dedd4cdf181c8f5af32169d73d59f3fea5ca9a5145be282b8102e086da000d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dedd4cdf181c8f5af32169d73d59f3fea5ca9a5145be282b8102e086da000d->enter($__internal_68dedd4cdf181c8f5af32169d73d59f3fea5ca9a5145be282b8102e086da000d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pizzapedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpizzapedido</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pizzapedido"] ?? $this->getContext($context, "pizzapedido")), "idpizzapedido", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_edit", array("idpizzapedido" => $this->getAttribute(($context["pizzapedido"] ?? $this->getContext($context, "pizzapedido")), "idpizzapedido", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_68dedd4cdf181c8f5af32169d73d59f3fea5ca9a5145be282b8102e086da000d->leave($__internal_68dedd4cdf181c8f5af32169d73d59f3fea5ca9a5145be282b8102e086da000d_prof);

        
        $__internal_269269c74e843d7965757d6b83a188bee5971a9bd89c1b34b950948ad4c193d4->leave($__internal_269269c74e843d7965757d6b83a188bee5971a9bd89c1b34b950948ad4c193d4_prof);

    }

    public function getTemplateName()
    {
        return ":pizzapedido:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  79 => 23,  73 => 20,  67 => 17,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Pizzapedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpizzapedido</th>
                <td>{{ pizzapedido.idpizzapedido }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('pizzapedido_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('pizzapedido_edit', { 'idpizzapedido': pizzapedido.idpizzapedido }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":pizzapedido:show.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizzapedido/show.html.twig");
    }
}
