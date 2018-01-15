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
        $__internal_18c3632effe4f3317ae4749833e04f26d1b2168f70e262d4583fee91dfecf73c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c3632effe4f3317ae4749833e04f26d1b2168f70e262d4583fee91dfecf73c->enter($__internal_18c3632effe4f3317ae4749833e04f26d1b2168f70e262d4583fee91dfecf73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:show.html.twig"));

        $__internal_9c42a2f939f9d12cfeca8ecfe6ca441b8fde6274df76be889d9c6b84f7ea5d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c42a2f939f9d12cfeca8ecfe6ca441b8fde6274df76be889d9c6b84f7ea5d85->enter($__internal_9c42a2f939f9d12cfeca8ecfe6ca441b8fde6274df76be889d9c6b84f7ea5d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18c3632effe4f3317ae4749833e04f26d1b2168f70e262d4583fee91dfecf73c->leave($__internal_18c3632effe4f3317ae4749833e04f26d1b2168f70e262d4583fee91dfecf73c_prof);

        
        $__internal_9c42a2f939f9d12cfeca8ecfe6ca441b8fde6274df76be889d9c6b84f7ea5d85->leave($__internal_9c42a2f939f9d12cfeca8ecfe6ca441b8fde6274df76be889d9c6b84f7ea5d85_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33d6e9e61c19c182ab4d81c88bdc0c4d7840233fc263e3db501b852b2c61bdb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d6e9e61c19c182ab4d81c88bdc0c4d7840233fc263e3db501b852b2c61bdb3->enter($__internal_33d6e9e61c19c182ab4d81c88bdc0c4d7840233fc263e3db501b852b2c61bdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_017f27d1f46e0e8ceb8f617da9312ca26ed3cd5f239c8e9b4ac998d305a98cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017f27d1f46e0e8ceb8f617da9312ca26ed3cd5f239c8e9b4ac998d305a98cb5->enter($__internal_017f27d1f46e0e8ceb8f617da9312ca26ed3cd5f239c8e9b4ac998d305a98cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_017f27d1f46e0e8ceb8f617da9312ca26ed3cd5f239c8e9b4ac998d305a98cb5->leave($__internal_017f27d1f46e0e8ceb8f617da9312ca26ed3cd5f239c8e9b4ac998d305a98cb5_prof);

        
        $__internal_33d6e9e61c19c182ab4d81c88bdc0c4d7840233fc263e3db501b852b2c61bdb3->leave($__internal_33d6e9e61c19c182ab4d81c88bdc0c4d7840233fc263e3db501b852b2c61bdb3_prof);

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
