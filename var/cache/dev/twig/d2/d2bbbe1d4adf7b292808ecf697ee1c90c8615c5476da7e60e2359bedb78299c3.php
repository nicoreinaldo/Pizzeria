<?php

/* default/footer.html.twig */
class __TwigTemplate_6a62dc4a87d27a8475edc86d4886d6a2954a964bf3d0449d64238cce8dfba6ab extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        // line 1
        echo "<footer id=\"footer\" class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-5 col-sm-offset-7 col-xs-10 col-xs-offset-2\">
\t\t\t\t\t<div class=\"contact_area wow slideInLeft\" data-wow-duration=\"2s\">
\t\t\t\t\t\t<div class=\"head_title text-center\">
\t\t\t\t\t\t\t<h4>Contacto</h4>
\t\t\t\t\t\t\t<div class=\"separetor\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"main_contact_content\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single_contact text-left\">
\t\t\t\t\t\t\t\t\t\t<h5> Pizza Nuestra </h5>
\t\t\t\t\t\t\t\t\t\t<span>Maipu 555</span>
\t\t\t\t\t\t\t\t\t\t<span>Rio Cuarto Cordoba</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single_contact text-left\">
\t\t\t\t\t\t\t\t\t\t<h5>Hace tu pedido</h5>
\t\t\t\t\t\t\t\t\t\t<span>pedidos@pizzanuestra.com</span>
\t\t\t\t\t\t\t\t\t\t<span>+54 351 7736 643</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form action=\"/enviar\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"contact_form_area\">
\t\t\t\t\t\t\t\t<h4>Formulario de contacto</h4>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"name\">Nombre </label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"nombre\" placeholder=\"Nombre\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email\">E-mail</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name= \"desde\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"mensaje\">Mensaje</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"mensaje\" rows=\"3\" name=\"mensaje\" placeholder=\"Mensaje\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form_btn_area text-center\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\"  class=\"btn\" value=\"Enviar\"/>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"copyright_text_area\">
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"single_footer text-right wow zoomIn\" data-wow-duration=\"2s\">
\t\t\t\t\t\t\t<p>Hecho Baez / Reinaldo 2018.</p>
\t\t\t\t\t\t\t<p>Todos los derechos reservados</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
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
        return new Twig_Source("<footer id=\"footer\" class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-5 col-sm-offset-7 col-xs-10 col-xs-offset-2\">
\t\t\t\t\t<div class=\"contact_area wow slideInLeft\" data-wow-duration=\"2s\">
\t\t\t\t\t\t<div class=\"head_title text-center\">
\t\t\t\t\t\t\t<h4>Contacto</h4>
\t\t\t\t\t\t\t<div class=\"separetor\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"main_contact_content\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single_contact text-left\">
\t\t\t\t\t\t\t\t\t\t<h5> Pizza Nuestra </h5>
\t\t\t\t\t\t\t\t\t\t<span>Maipu 555</span>
\t\t\t\t\t\t\t\t\t\t<span>Rio Cuarto Cordoba</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"single_contact text-left\">
\t\t\t\t\t\t\t\t\t\t<h5>Hace tu pedido</h5>
\t\t\t\t\t\t\t\t\t\t<span>pedidos@pizzanuestra.com</span>
\t\t\t\t\t\t\t\t\t\t<span>+54 351 7736 643</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form action=\"/enviar\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"contact_form_area\">
\t\t\t\t\t\t\t\t<h4>Formulario de contacto</h4>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"name\">Nombre </label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"nombre\" placeholder=\"Nombre\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email\">E-mail</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name= \"desde\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"mensaje\">Mensaje</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"mensaje\" rows=\"3\" name=\"mensaje\" placeholder=\"Mensaje\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form_btn_area text-center\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\"  class=\"btn\" value=\"Enviar\"/>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"copyright_text_area\">
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"single_footer text-right wow zoomIn\" data-wow-duration=\"2s\">
\t\t\t\t\t\t\t<p>Hecho Baez / Reinaldo 2018.</p>
\t\t\t\t\t\t\t<p>Todos los derechos reservados</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>", "default/footer.html.twig", "/home/nico/pizzeria/app/Resources/views/default/footer.html.twig");
    }
}
