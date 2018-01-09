<?php

/* :estadopedido:show.html.twig */
class __TwigTemplate_7975fbe3c7bd31ca0cf58d731aa1b3bd600a55812f076c8c9bc6028432db4339 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":estadopedido:show.html.twig", 1);
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
        $__internal_d81ae484962f56c751ff434c19551104199573ec9f476b5d19beebf1b53878cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81ae484962f56c751ff434c19551104199573ec9f476b5d19beebf1b53878cc->enter($__internal_d81ae484962f56c751ff434c19551104199573ec9f476b5d19beebf1b53878cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:show.html.twig"));

        $__internal_d3f13bcc92a612ad356a74a685a5414cd055ac7f576f64eb886256df9582bd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f13bcc92a612ad356a74a685a5414cd055ac7f576f64eb886256df9582bd7b->enter($__internal_d3f13bcc92a612ad356a74a685a5414cd055ac7f576f64eb886256df9582bd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d81ae484962f56c751ff434c19551104199573ec9f476b5d19beebf1b53878cc->leave($__internal_d81ae484962f56c751ff434c19551104199573ec9f476b5d19beebf1b53878cc_prof);

        
        $__internal_d3f13bcc92a612ad356a74a685a5414cd055ac7f576f64eb886256df9582bd7b->leave($__internal_d3f13bcc92a612ad356a74a685a5414cd055ac7f576f64eb886256df9582bd7b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5093184dd36f322fb35e06b074a5fb28d2d2cb8f4a197d91e24317ef0e90dd9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5093184dd36f322fb35e06b074a5fb28d2d2cb8f4a197d91e24317ef0e90dd9f->enter($__internal_5093184dd36f322fb35e06b074a5fb28d2d2cb8f4a197d91e24317ef0e90dd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8fe75b455d3a1f56532e999c778703fcdf58d0cd9fbca1e644ae36c3f8854bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe75b455d3a1f56532e999c778703fcdf58d0cd9fbca1e644ae36c3f8854bf8->enter($__internal_8fe75b455d3a1f56532e999c778703fcdf58d0cd9fbca1e644ae36c3f8854bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estadopedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idestadopedido</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["estadopedido"] ?? $this->getContext($context, "estadopedido")), "idestadopedido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["estadopedido"] ?? $this->getContext($context, "estadopedido")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("estadopedido_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("estadopedido_edit", array("idestadopedido" => $this->getAttribute(($context["estadopedido"] ?? $this->getContext($context, "estadopedido")), "idestadopedido", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8fe75b455d3a1f56532e999c778703fcdf58d0cd9fbca1e644ae36c3f8854bf8->leave($__internal_8fe75b455d3a1f56532e999c778703fcdf58d0cd9fbca1e644ae36c3f8854bf8_prof);

        
        $__internal_5093184dd36f322fb35e06b074a5fb28d2d2cb8f4a197d91e24317ef0e90dd9f->leave($__internal_5093184dd36f322fb35e06b074a5fb28d2d2cb8f4a197d91e24317ef0e90dd9f_prof);

    }

    public function getTemplateName()
    {
        return ":estadopedido:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Estadopedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idestadopedido</th>
                <td>{{ estadopedido.idestadopedido }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ estadopedido.nombre }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('estadopedido_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('estadopedido_edit', { 'idestadopedido': estadopedido.idestadopedido }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":estadopedido:show.html.twig", "/home/nico/pizzerianostra/app/Resources/views/estadopedido/show.html.twig");
    }
}
