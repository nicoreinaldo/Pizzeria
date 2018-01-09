<?php

/* :pizzapedido:edit.html.twig */
class __TwigTemplate_7d7b26603307066423b0f622229c8111841ec51b5c812db8e47c427fcb080f98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pizzapedido:edit.html.twig", 1);
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
        $__internal_e0c8d24c4e379e76a77c80ac1beba8dffc1ccf90d3d7711a037deff01396b2a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c8d24c4e379e76a77c80ac1beba8dffc1ccf90d3d7711a037deff01396b2a2->enter($__internal_e0c8d24c4e379e76a77c80ac1beba8dffc1ccf90d3d7711a037deff01396b2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:edit.html.twig"));

        $__internal_16ffe2ac74affa1611078bfbaca5821d1906e0f2e9504c3a312959c465f0bc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ffe2ac74affa1611078bfbaca5821d1906e0f2e9504c3a312959c465f0bc62->enter($__internal_16ffe2ac74affa1611078bfbaca5821d1906e0f2e9504c3a312959c465f0bc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0c8d24c4e379e76a77c80ac1beba8dffc1ccf90d3d7711a037deff01396b2a2->leave($__internal_e0c8d24c4e379e76a77c80ac1beba8dffc1ccf90d3d7711a037deff01396b2a2_prof);

        
        $__internal_16ffe2ac74affa1611078bfbaca5821d1906e0f2e9504c3a312959c465f0bc62->leave($__internal_16ffe2ac74affa1611078bfbaca5821d1906e0f2e9504c3a312959c465f0bc62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c25c8f7e82e1e89ff577ed8c671df27b3bcc0ccb4d80eb0ea53296102cbb03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c25c8f7e82e1e89ff577ed8c671df27b3bcc0ccb4d80eb0ea53296102cbb03f->enter($__internal_3c25c8f7e82e1e89ff577ed8c671df27b3bcc0ccb4d80eb0ea53296102cbb03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef72946aa69ce43ee2fe4c85883437b009922e78206f2a474bd2cc2e1d3104ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef72946aa69ce43ee2fe4c85883437b009922e78206f2a474bd2cc2e1d3104ae->enter($__internal_ef72946aa69ce43ee2fe4c85883437b009922e78206f2a474bd2cc2e1d3104ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pizzapedido edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ef72946aa69ce43ee2fe4c85883437b009922e78206f2a474bd2cc2e1d3104ae->leave($__internal_ef72946aa69ce43ee2fe4c85883437b009922e78206f2a474bd2cc2e1d3104ae_prof);

        
        $__internal_3c25c8f7e82e1e89ff577ed8c671df27b3bcc0ccb4d80eb0ea53296102cbb03f->leave($__internal_3c25c8f7e82e1e89ff577ed8c671df27b3bcc0ccb4d80eb0ea53296102cbb03f_prof);

    }

    public function getTemplateName()
    {
        return ":pizzapedido:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Pizzapedido edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('pizzapedido_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":pizzapedido:edit.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizzapedido/edit.html.twig");
    }
}
