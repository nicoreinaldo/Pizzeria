<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_290fde11590f1bbaf60b82cf01cc8c55c4c7cb735b2d6a309b2f10d8d5415f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_402227ff1a871530ae96386152303bee69d6f3a0cd4b2ba735c55c5703d74df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402227ff1a871530ae96386152303bee69d6f3a0cd4b2ba735c55c5703d74df3->enter($__internal_402227ff1a871530ae96386152303bee69d6f3a0cd4b2ba735c55c5703d74df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_8c93dad2cd42c52138a9f7fc1d753284d0f9672a65c560171b46837bdf8cdb5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c93dad2cd42c52138a9f7fc1d753284d0f9672a65c560171b46837bdf8cdb5c->enter($__internal_8c93dad2cd42c52138a9f7fc1d753284d0f9672a65c560171b46837bdf8cdb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_402227ff1a871530ae96386152303bee69d6f3a0cd4b2ba735c55c5703d74df3->leave($__internal_402227ff1a871530ae96386152303bee69d6f3a0cd4b2ba735c55c5703d74df3_prof);

        
        $__internal_8c93dad2cd42c52138a9f7fc1d753284d0f9672a65c560171b46837bdf8cdb5c->leave($__internal_8c93dad2cd42c52138a9f7fc1d753284d0f9672a65c560171b46837bdf8cdb5c_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_977a5afff0d8336400f492426178321bdd20383f4238dc3f9f442cfebb7deaed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977a5afff0d8336400f492426178321bdd20383f4238dc3f9f442cfebb7deaed->enter($__internal_977a5afff0d8336400f492426178321bdd20383f4238dc3f9f442cfebb7deaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_89cc8b472725ca8bfdf4fd50420bc90c41c0ae1f61025e023683805cc7f2d172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89cc8b472725ca8bfdf4fd50420bc90c41c0ae1f61025e023683805cc7f2d172->enter($__internal_89cc8b472725ca8bfdf4fd50420bc90c41c0ae1f61025e023683805cc7f2d172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_89cc8b472725ca8bfdf4fd50420bc90c41c0ae1f61025e023683805cc7f2d172->leave($__internal_89cc8b472725ca8bfdf4fd50420bc90c41c0ae1f61025e023683805cc7f2d172_prof);

        
        $__internal_977a5afff0d8336400f492426178321bdd20383f4238dc3f9f442cfebb7deaed->leave($__internal_977a5afff0d8336400f492426178321bdd20383f4238dc3f9f442cfebb7deaed_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_69ab58f877f5ca487a8a2e656e81adeb27d9d092ba5cf4318b9e11b6ccb726be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ab58f877f5ca487a8a2e656e81adeb27d9d092ba5cf4318b9e11b6ccb726be->enter($__internal_69ab58f877f5ca487a8a2e656e81adeb27d9d092ba5cf4318b9e11b6ccb726be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_20f45781e570a0425548d824b93c24fc099ff9dd1628262164fde739ec6e42a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f45781e570a0425548d824b93c24fc099ff9dd1628262164fde739ec6e42a0->enter($__internal_20f45781e570a0425548d824b93c24fc099ff9dd1628262164fde739ec6e42a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_20f45781e570a0425548d824b93c24fc099ff9dd1628262164fde739ec6e42a0->leave($__internal_20f45781e570a0425548d824b93c24fc099ff9dd1628262164fde739ec6e42a0_prof);

        
        $__internal_69ab58f877f5ca487a8a2e656e81adeb27d9d092ba5cf4318b9e11b6ccb726be->leave($__internal_69ab58f877f5ca487a8a2e656e81adeb27d9d092ba5cf4318b9e11b6ccb726be_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_34d23cc52e3b825362eb28c10b05fb31428bb8ddde6720c6679e7ad632c0a145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d23cc52e3b825362eb28c10b05fb31428bb8ddde6720c6679e7ad632c0a145->enter($__internal_34d23cc52e3b825362eb28c10b05fb31428bb8ddde6720c6679e7ad632c0a145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c89487aaf07746a5324fc06d4361b322c24234f4970b95f27be39fad57c4827c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89487aaf07746a5324fc06d4361b322c24234f4970b95f27be39fad57c4827c->enter($__internal_c89487aaf07746a5324fc06d4361b322c24234f4970b95f27be39fad57c4827c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c89487aaf07746a5324fc06d4361b322c24234f4970b95f27be39fad57c4827c->leave($__internal_c89487aaf07746a5324fc06d4361b322c24234f4970b95f27be39fad57c4827c_prof);

        
        $__internal_34d23cc52e3b825362eb28c10b05fb31428bb8ddde6720c6679e7ad632c0a145->leave($__internal_34d23cc52e3b825362eb28c10b05fb31428bb8ddde6720c6679e7ad632c0a145_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_c9d8f1e316b13d3d3d5776813902450dca306feb53b1edcda4176a8baf78f295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d8f1e316b13d3d3d5776813902450dca306feb53b1edcda4176a8baf78f295->enter($__internal_c9d8f1e316b13d3d3d5776813902450dca306feb53b1edcda4176a8baf78f295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_41d8e156237f4c75def23a9122b49a29f376cbf121abccbb7433d236d080da4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d8e156237f4c75def23a9122b49a29f376cbf121abccbb7433d236d080da4d->enter($__internal_41d8e156237f4c75def23a9122b49a29f376cbf121abccbb7433d236d080da4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_41d8e156237f4c75def23a9122b49a29f376cbf121abccbb7433d236d080da4d->leave($__internal_41d8e156237f4c75def23a9122b49a29f376cbf121abccbb7433d236d080da4d_prof);

        
        $__internal_c9d8f1e316b13d3d3d5776813902450dca306feb53b1edcda4176a8baf78f295->leave($__internal_c9d8f1e316b13d3d3d5776813902450dca306feb53b1edcda4176a8baf78f295_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_2f0df656c8f3f870eabb39fc38fbb53befc078bfe952153b0c9c6dca8b3c57d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0df656c8f3f870eabb39fc38fbb53befc078bfe952153b0c9c6dca8b3c57d3->enter($__internal_2f0df656c8f3f870eabb39fc38fbb53befc078bfe952153b0c9c6dca8b3c57d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_ad5d06fccee68a48c945fc241fcc219eddf50861bc6d1cdf9966a6a4a0c0d97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5d06fccee68a48c945fc241fcc219eddf50861bc6d1cdf9966a6a4a0c0d97d->enter($__internal_ad5d06fccee68a48c945fc241fcc219eddf50861bc6d1cdf9966a6a4a0c0d97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_ad5d06fccee68a48c945fc241fcc219eddf50861bc6d1cdf9966a6a4a0c0d97d->leave($__internal_ad5d06fccee68a48c945fc241fcc219eddf50861bc6d1cdf9966a6a4a0c0d97d_prof);

        
        $__internal_2f0df656c8f3f870eabb39fc38fbb53befc078bfe952153b0c9c6dca8b3c57d3->leave($__internal_2f0df656c8f3f870eabb39fc38fbb53befc078bfe952153b0c9c6dca8b3c57d3_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_0a6a3f473660455f64eb708cc1ea78dd4a41193ed8d64ff60460a1231f965456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6a3f473660455f64eb708cc1ea78dd4a41193ed8d64ff60460a1231f965456->enter($__internal_0a6a3f473660455f64eb708cc1ea78dd4a41193ed8d64ff60460a1231f965456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_dbe23857d86782c2b08a218f04b8ba28308aaed0fb1a91281574bcfca053ae5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe23857d86782c2b08a218f04b8ba28308aaed0fb1a91281574bcfca053ae5f->enter($__internal_dbe23857d86782c2b08a218f04b8ba28308aaed0fb1a91281574bcfca053ae5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_dbe23857d86782c2b08a218f04b8ba28308aaed0fb1a91281574bcfca053ae5f->leave($__internal_dbe23857d86782c2b08a218f04b8ba28308aaed0fb1a91281574bcfca053ae5f_prof);

        
        $__internal_0a6a3f473660455f64eb708cc1ea78dd4a41193ed8d64ff60460a1231f965456->leave($__internal_0a6a3f473660455f64eb708cc1ea78dd4a41193ed8d64ff60460a1231f965456_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_ef80acd2ad2b889dc13b7f6bd3677393d3f6db157a2fb967766fc02065f82340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef80acd2ad2b889dc13b7f6bd3677393d3f6db157a2fb967766fc02065f82340->enter($__internal_ef80acd2ad2b889dc13b7f6bd3677393d3f6db157a2fb967766fc02065f82340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c6b62b9d2b0eb12cb14bc742f6a689ad4ab42e628d162d89719ad777f2932b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b62b9d2b0eb12cb14bc742f6a689ad4ab42e628d162d89719ad777f2932b6e->enter($__internal_c6b62b9d2b0eb12cb14bc742f6a689ad4ab42e628d162d89719ad777f2932b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_c6b62b9d2b0eb12cb14bc742f6a689ad4ab42e628d162d89719ad777f2932b6e->leave($__internal_c6b62b9d2b0eb12cb14bc742f6a689ad4ab42e628d162d89719ad777f2932b6e_prof);

        
        $__internal_ef80acd2ad2b889dc13b7f6bd3677393d3f6db157a2fb967766fc02065f82340->leave($__internal_ef80acd2ad2b889dc13b7f6bd3677393d3f6db157a2fb967766fc02065f82340_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_312109cf01e906cc49731ce9e1a838d740414931fe3d46bd3a8c41fcdd1682fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312109cf01e906cc49731ce9e1a838d740414931fe3d46bd3a8c41fcdd1682fe->enter($__internal_312109cf01e906cc49731ce9e1a838d740414931fe3d46bd3a8c41fcdd1682fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8004756ca25ba1361f9d75a092b6bc8c8aad64a5fe8c9071c603fef69548a19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8004756ca25ba1361f9d75a092b6bc8c8aad64a5fe8c9071c603fef69548a19d->enter($__internal_8004756ca25ba1361f9d75a092b6bc8c8aad64a5fe8c9071c603fef69548a19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_8004756ca25ba1361f9d75a092b6bc8c8aad64a5fe8c9071c603fef69548a19d->leave($__internal_8004756ca25ba1361f9d75a092b6bc8c8aad64a5fe8c9071c603fef69548a19d_prof);

        
        $__internal_312109cf01e906cc49731ce9e1a838d740414931fe3d46bd3a8c41fcdd1682fe->leave($__internal_312109cf01e906cc49731ce9e1a838d740414931fe3d46bd3a8c41fcdd1682fe_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3039f1169116823d842d8704b3da348b4060d4753ca51a8363023ad82fbf1504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3039f1169116823d842d8704b3da348b4060d4753ca51a8363023ad82fbf1504->enter($__internal_3039f1169116823d842d8704b3da348b4060d4753ca51a8363023ad82fbf1504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_2e0d997bbd88a63d467623ef5bff352005bb67727cde873fe1359591d73414a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0d997bbd88a63d467623ef5bff352005bb67727cde873fe1359591d73414a3->enter($__internal_2e0d997bbd88a63d467623ef5bff352005bb67727cde873fe1359591d73414a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_2e0d997bbd88a63d467623ef5bff352005bb67727cde873fe1359591d73414a3->leave($__internal_2e0d997bbd88a63d467623ef5bff352005bb67727cde873fe1359591d73414a3_prof);

        
        $__internal_3039f1169116823d842d8704b3da348b4060d4753ca51a8363023ad82fbf1504->leave($__internal_3039f1169116823d842d8704b3da348b4060d4753ca51a8363023ad82fbf1504_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_cf700261cd53533ea723fb8d00dacd948d7b6e002ad5c7b856e042375a01c006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf700261cd53533ea723fb8d00dacd948d7b6e002ad5c7b856e042375a01c006->enter($__internal_cf700261cd53533ea723fb8d00dacd948d7b6e002ad5c7b856e042375a01c006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_348bc189dbda26c4aeae4a3d2aa7e4ad8b1d941c63167589cbfdc4723cd103b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348bc189dbda26c4aeae4a3d2aa7e4ad8b1d941c63167589cbfdc4723cd103b0->enter($__internal_348bc189dbda26c4aeae4a3d2aa7e4ad8b1d941c63167589cbfdc4723cd103b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_348bc189dbda26c4aeae4a3d2aa7e4ad8b1d941c63167589cbfdc4723cd103b0->leave($__internal_348bc189dbda26c4aeae4a3d2aa7e4ad8b1d941c63167589cbfdc4723cd103b0_prof);

        
        $__internal_cf700261cd53533ea723fb8d00dacd948d7b6e002ad5c7b856e042375a01c006->leave($__internal_cf700261cd53533ea723fb8d00dacd948d7b6e002ad5c7b856e042375a01c006_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_79059d674aae1605ffd64b1a39e26a35ef761b0bdc43c50151dd645a8de2112b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79059d674aae1605ffd64b1a39e26a35ef761b0bdc43c50151dd645a8de2112b->enter($__internal_79059d674aae1605ffd64b1a39e26a35ef761b0bdc43c50151dd645a8de2112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_97574d4be376f63d01fb021c2cbbbdf5d72bb5a53ad5aabaa688129cc056d7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97574d4be376f63d01fb021c2cbbbdf5d72bb5a53ad5aabaa688129cc056d7a8->enter($__internal_97574d4be376f63d01fb021c2cbbbdf5d72bb5a53ad5aabaa688129cc056d7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_97574d4be376f63d01fb021c2cbbbdf5d72bb5a53ad5aabaa688129cc056d7a8->leave($__internal_97574d4be376f63d01fb021c2cbbbdf5d72bb5a53ad5aabaa688129cc056d7a8_prof);

        
        $__internal_79059d674aae1605ffd64b1a39e26a35ef761b0bdc43c50151dd645a8de2112b->leave($__internal_79059d674aae1605ffd64b1a39e26a35ef761b0bdc43c50151dd645a8de2112b_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1161e2b0623bb8c45ec0c4885a5373ebec8c89175d7d227aac1d7f82592de26a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1161e2b0623bb8c45ec0c4885a5373ebec8c89175d7d227aac1d7f82592de26a->enter($__internal_1161e2b0623bb8c45ec0c4885a5373ebec8c89175d7d227aac1d7f82592de26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_17c981d747fea20abd77cceb0906a36a74a2ad8dcd1154febe06b85f2e20f7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c981d747fea20abd77cceb0906a36a74a2ad8dcd1154febe06b85f2e20f7bb->enter($__internal_17c981d747fea20abd77cceb0906a36a74a2ad8dcd1154febe06b85f2e20f7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_17c981d747fea20abd77cceb0906a36a74a2ad8dcd1154febe06b85f2e20f7bb->leave($__internal_17c981d747fea20abd77cceb0906a36a74a2ad8dcd1154febe06b85f2e20f7bb_prof);

        
        $__internal_1161e2b0623bb8c45ec0c4885a5373ebec8c89175d7d227aac1d7f82592de26a->leave($__internal_1161e2b0623bb8c45ec0c4885a5373ebec8c89175d7d227aac1d7f82592de26a_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2c734295763185fa9b4c23b40c2d491fcc5b074c3d156c3506c53ffa84b7d28d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c734295763185fa9b4c23b40c2d491fcc5b074c3d156c3506c53ffa84b7d28d->enter($__internal_2c734295763185fa9b4c23b40c2d491fcc5b074c3d156c3506c53ffa84b7d28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_739bc16df666a78181ffa7cba5efda6e4409bdb8f94acee40ea98e9708d2229d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739bc16df666a78181ffa7cba5efda6e4409bdb8f94acee40ea98e9708d2229d->enter($__internal_739bc16df666a78181ffa7cba5efda6e4409bdb8f94acee40ea98e9708d2229d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_739bc16df666a78181ffa7cba5efda6e4409bdb8f94acee40ea98e9708d2229d->leave($__internal_739bc16df666a78181ffa7cba5efda6e4409bdb8f94acee40ea98e9708d2229d_prof);

        
        $__internal_2c734295763185fa9b4c23b40c2d491fcc5b074c3d156c3506c53ffa84b7d28d->leave($__internal_2c734295763185fa9b4c23b40c2d491fcc5b074c3d156c3506c53ffa84b7d28d_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_3969bf72e6d0848608789cc8fc84674c97ec6275483a4457c1d4579009a68d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3969bf72e6d0848608789cc8fc84674c97ec6275483a4457c1d4579009a68d09->enter($__internal_3969bf72e6d0848608789cc8fc84674c97ec6275483a4457c1d4579009a68d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_de3760b74761d0edece4fb50fd822cb4049caa86eef63bd1ec8bb936cf5b0f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3760b74761d0edece4fb50fd822cb4049caa86eef63bd1ec8bb936cf5b0f85->enter($__internal_de3760b74761d0edece4fb50fd822cb4049caa86eef63bd1ec8bb936cf5b0f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_de3760b74761d0edece4fb50fd822cb4049caa86eef63bd1ec8bb936cf5b0f85->leave($__internal_de3760b74761d0edece4fb50fd822cb4049caa86eef63bd1ec8bb936cf5b0f85_prof);

        
        $__internal_3969bf72e6d0848608789cc8fc84674c97ec6275483a4457c1d4579009a68d09->leave($__internal_3969bf72e6d0848608789cc8fc84674c97ec6275483a4457c1d4579009a68d09_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_903decf6f5282361c6ee928289dd18061289676ea441cc63f46c5d5e3ba1b0ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903decf6f5282361c6ee928289dd18061289676ea441cc63f46c5d5e3ba1b0ac->enter($__internal_903decf6f5282361c6ee928289dd18061289676ea441cc63f46c5d5e3ba1b0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_8a702fafa6bde3f63562c328d0bc6a6d7e1cf142124f8d9db211a2a7983e5703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a702fafa6bde3f63562c328d0bc6a6d7e1cf142124f8d9db211a2a7983e5703->enter($__internal_8a702fafa6bde3f63562c328d0bc6a6d7e1cf142124f8d9db211a2a7983e5703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8a702fafa6bde3f63562c328d0bc6a6d7e1cf142124f8d9db211a2a7983e5703->leave($__internal_8a702fafa6bde3f63562c328d0bc6a6d7e1cf142124f8d9db211a2a7983e5703_prof);

        
        $__internal_903decf6f5282361c6ee928289dd18061289676ea441cc63f46c5d5e3ba1b0ac->leave($__internal_903decf6f5282361c6ee928289dd18061289676ea441cc63f46c5d5e3ba1b0ac_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_716ab469cfc334d30312e29742768e450867cb9f49b856cb20cd02cd82661973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716ab469cfc334d30312e29742768e450867cb9f49b856cb20cd02cd82661973->enter($__internal_716ab469cfc334d30312e29742768e450867cb9f49b856cb20cd02cd82661973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c6a4cedeb0bc88e1c32119c8ca571a6aa4ec534b02492ec6abbe8581337d49ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a4cedeb0bc88e1c32119c8ca571a6aa4ec534b02492ec6abbe8581337d49ab->enter($__internal_c6a4cedeb0bc88e1c32119c8ca571a6aa4ec534b02492ec6abbe8581337d49ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c6a4cedeb0bc88e1c32119c8ca571a6aa4ec534b02492ec6abbe8581337d49ab->leave($__internal_c6a4cedeb0bc88e1c32119c8ca571a6aa4ec534b02492ec6abbe8581337d49ab_prof);

        
        $__internal_716ab469cfc334d30312e29742768e450867cb9f49b856cb20cd02cd82661973->leave($__internal_716ab469cfc334d30312e29742768e450867cb9f49b856cb20cd02cd82661973_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_8ee1aa21cdd3dbb8f1ad43120c7b8a2b3d7688effe8fc8a63b09e74f0711ba8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee1aa21cdd3dbb8f1ad43120c7b8a2b3d7688effe8fc8a63b09e74f0711ba8f->enter($__internal_8ee1aa21cdd3dbb8f1ad43120c7b8a2b3d7688effe8fc8a63b09e74f0711ba8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_a8524d1e72fabb4bedeb73f5c80d6c1fe0b3964546345dda37e059be2be76b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8524d1e72fabb4bedeb73f5c80d6c1fe0b3964546345dda37e059be2be76b85->enter($__internal_a8524d1e72fabb4bedeb73f5c80d6c1fe0b3964546345dda37e059be2be76b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_a8524d1e72fabb4bedeb73f5c80d6c1fe0b3964546345dda37e059be2be76b85->leave($__internal_a8524d1e72fabb4bedeb73f5c80d6c1fe0b3964546345dda37e059be2be76b85_prof);

        
        $__internal_8ee1aa21cdd3dbb8f1ad43120c7b8a2b3d7688effe8fc8a63b09e74f0711ba8f->leave($__internal_8ee1aa21cdd3dbb8f1ad43120c7b8a2b3d7688effe8fc8a63b09e74f0711ba8f_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_dacf3e158e6fd4db4d086dee10ac4a598f6db851fea1313e223305542f36a823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacf3e158e6fd4db4d086dee10ac4a598f6db851fea1313e223305542f36a823->enter($__internal_dacf3e158e6fd4db4d086dee10ac4a598f6db851fea1313e223305542f36a823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_74117fecfcff027bd53724967d8bff654e87d5c2b0fb849d7bbb706f42d706dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74117fecfcff027bd53724967d8bff654e87d5c2b0fb849d7bbb706f42d706dc->enter($__internal_74117fecfcff027bd53724967d8bff654e87d5c2b0fb849d7bbb706f42d706dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_74117fecfcff027bd53724967d8bff654e87d5c2b0fb849d7bbb706f42d706dc->leave($__internal_74117fecfcff027bd53724967d8bff654e87d5c2b0fb849d7bbb706f42d706dc_prof);

        
        $__internal_dacf3e158e6fd4db4d086dee10ac4a598f6db851fea1313e223305542f36a823->leave($__internal_dacf3e158e6fd4db4d086dee10ac4a598f6db851fea1313e223305542f36a823_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_24d3251d95f8eb7a6223e9ca93b27ee9c4b91c0084757888fe9f7ed182257b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d3251d95f8eb7a6223e9ca93b27ee9c4b91c0084757888fe9f7ed182257b1a->enter($__internal_24d3251d95f8eb7a6223e9ca93b27ee9c4b91c0084757888fe9f7ed182257b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_b58e4bb9abf43c35b6aea65b6a55c17d068b33d2d606c5f6b32a752e4e7f56cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58e4bb9abf43c35b6aea65b6a55c17d068b33d2d606c5f6b32a752e4e7f56cb->enter($__internal_b58e4bb9abf43c35b6aea65b6a55c17d068b33d2d606c5f6b32a752e4e7f56cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b58e4bb9abf43c35b6aea65b6a55c17d068b33d2d606c5f6b32a752e4e7f56cb->leave($__internal_b58e4bb9abf43c35b6aea65b6a55c17d068b33d2d606c5f6b32a752e4e7f56cb_prof);

        
        $__internal_24d3251d95f8eb7a6223e9ca93b27ee9c4b91c0084757888fe9f7ed182257b1a->leave($__internal_24d3251d95f8eb7a6223e9ca93b27ee9c4b91c0084757888fe9f7ed182257b1a_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a91aadb109d53540fd63ec6bd14467cd9827a31f83e995d7f4f898d9cd7ac4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91aadb109d53540fd63ec6bd14467cd9827a31f83e995d7f4f898d9cd7ac4f1->enter($__internal_a91aadb109d53540fd63ec6bd14467cd9827a31f83e995d7f4f898d9cd7ac4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_06274d8e98eecfaf552646387758cad01453e048f42f379ebe1c62690224d204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06274d8e98eecfaf552646387758cad01453e048f42f379ebe1c62690224d204->enter($__internal_06274d8e98eecfaf552646387758cad01453e048f42f379ebe1c62690224d204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_06274d8e98eecfaf552646387758cad01453e048f42f379ebe1c62690224d204->leave($__internal_06274d8e98eecfaf552646387758cad01453e048f42f379ebe1c62690224d204_prof);

        
        $__internal_a91aadb109d53540fd63ec6bd14467cd9827a31f83e995d7f4f898d9cd7ac4f1->leave($__internal_a91aadb109d53540fd63ec6bd14467cd9827a31f83e995d7f4f898d9cd7ac4f1_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_7bc721db7a809b811a234bc0c4799ba86cd9a2e10111d6c46d9d5e1802308620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc721db7a809b811a234bc0c4799ba86cd9a2e10111d6c46d9d5e1802308620->enter($__internal_7bc721db7a809b811a234bc0c4799ba86cd9a2e10111d6c46d9d5e1802308620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b1534992f4abcc8b00e1dbf19aa020a3511291e30c2228a4e4d78ff33d317250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1534992f4abcc8b00e1dbf19aa020a3511291e30c2228a4e4d78ff33d317250->enter($__internal_b1534992f4abcc8b00e1dbf19aa020a3511291e30c2228a4e4d78ff33d317250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b1534992f4abcc8b00e1dbf19aa020a3511291e30c2228a4e4d78ff33d317250->leave($__internal_b1534992f4abcc8b00e1dbf19aa020a3511291e30c2228a4e4d78ff33d317250_prof);

        
        $__internal_7bc721db7a809b811a234bc0c4799ba86cd9a2e10111d6c46d9d5e1802308620->leave($__internal_7bc721db7a809b811a234bc0c4799ba86cd9a2e10111d6c46d9d5e1802308620_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_797080948956a0ba9eb282f9d2871d858a9aef89f1a3f2fbd8c8f5a10e748bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_797080948956a0ba9eb282f9d2871d858a9aef89f1a3f2fbd8c8f5a10e748bf1->enter($__internal_797080948956a0ba9eb282f9d2871d858a9aef89f1a3f2fbd8c8f5a10e748bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_bce379f4a31f340b0c11a3a40fa4bec85bf6a9f7eb1d2dcffd5d5cc2028a6073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce379f4a31f340b0c11a3a40fa4bec85bf6a9f7eb1d2dcffd5d5cc2028a6073->enter($__internal_bce379f4a31f340b0c11a3a40fa4bec85bf6a9f7eb1d2dcffd5d5cc2028a6073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bce379f4a31f340b0c11a3a40fa4bec85bf6a9f7eb1d2dcffd5d5cc2028a6073->leave($__internal_bce379f4a31f340b0c11a3a40fa4bec85bf6a9f7eb1d2dcffd5d5cc2028a6073_prof);

        
        $__internal_797080948956a0ba9eb282f9d2871d858a9aef89f1a3f2fbd8c8f5a10e748bf1->leave($__internal_797080948956a0ba9eb282f9d2871d858a9aef89f1a3f2fbd8c8f5a10e748bf1_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e708db8a13577551504a95659f9c1bade8489e50da37b60efdd960a63a5e1924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e708db8a13577551504a95659f9c1bade8489e50da37b60efdd960a63a5e1924->enter($__internal_e708db8a13577551504a95659f9c1bade8489e50da37b60efdd960a63a5e1924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_59a0aada574a158eb88db16fc5b06982fae025de0997d52a30133b6e2a615adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a0aada574a158eb88db16fc5b06982fae025de0997d52a30133b6e2a615adf->enter($__internal_59a0aada574a158eb88db16fc5b06982fae025de0997d52a30133b6e2a615adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_59a0aada574a158eb88db16fc5b06982fae025de0997d52a30133b6e2a615adf->leave($__internal_59a0aada574a158eb88db16fc5b06982fae025de0997d52a30133b6e2a615adf_prof);

        
        $__internal_e708db8a13577551504a95659f9c1bade8489e50da37b60efdd960a63a5e1924->leave($__internal_e708db8a13577551504a95659f9c1bade8489e50da37b60efdd960a63a5e1924_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_87ac7ac94cf610771fa6d537c92ac759bb24369dfcaf154e4d97145271ce6bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ac7ac94cf610771fa6d537c92ac759bb24369dfcaf154e4d97145271ce6bff->enter($__internal_87ac7ac94cf610771fa6d537c92ac759bb24369dfcaf154e4d97145271ce6bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a6d9711c7a7d9d9511b9d7828f4ce3132307b95e851b4d871f9f51f29577b1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d9711c7a7d9d9511b9d7828f4ce3132307b95e851b4d871f9f51f29577b1ab->enter($__internal_a6d9711c7a7d9d9511b9d7828f4ce3132307b95e851b4d871f9f51f29577b1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_a6d9711c7a7d9d9511b9d7828f4ce3132307b95e851b4d871f9f51f29577b1ab->leave($__internal_a6d9711c7a7d9d9511b9d7828f4ce3132307b95e851b4d871f9f51f29577b1ab_prof);

        
        $__internal_87ac7ac94cf610771fa6d537c92ac759bb24369dfcaf154e4d97145271ce6bff->leave($__internal_87ac7ac94cf610771fa6d537c92ac759bb24369dfcaf154e4d97145271ce6bff_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fd9823f2a8d13448a03b833878d9de27cd8036414a2b70ff8ce7ae8533b897d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9823f2a8d13448a03b833878d9de27cd8036414a2b70ff8ce7ae8533b897d2->enter($__internal_fd9823f2a8d13448a03b833878d9de27cd8036414a2b70ff8ce7ae8533b897d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9524d6fda85464a41d58ded170e269ab76ea327b8f3e9070f145b99f4349f615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9524d6fda85464a41d58ded170e269ab76ea327b8f3e9070f145b99f4349f615->enter($__internal_9524d6fda85464a41d58ded170e269ab76ea327b8f3e9070f145b99f4349f615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_9524d6fda85464a41d58ded170e269ab76ea327b8f3e9070f145b99f4349f615->leave($__internal_9524d6fda85464a41d58ded170e269ab76ea327b8f3e9070f145b99f4349f615_prof);

        
        $__internal_fd9823f2a8d13448a03b833878d9de27cd8036414a2b70ff8ce7ae8533b897d2->leave($__internal_fd9823f2a8d13448a03b833878d9de27cd8036414a2b70ff8ce7ae8533b897d2_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
