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
        $__internal_ed3d3726e96837e4f77ef52ce768ddc82e9dc58816b3aa22123cade7ed99f5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3d3726e96837e4f77ef52ce768ddc82e9dc58816b3aa22123cade7ed99f5bf->enter($__internal_ed3d3726e96837e4f77ef52ce768ddc82e9dc58816b3aa22123cade7ed99f5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_36766a2f0dd950b586cb80b570176b6d9430bc39037e2cc4d7e131daf635b85d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36766a2f0dd950b586cb80b570176b6d9430bc39037e2cc4d7e131daf635b85d->enter($__internal_36766a2f0dd950b586cb80b570176b6d9430bc39037e2cc4d7e131daf635b85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed3d3726e96837e4f77ef52ce768ddc82e9dc58816b3aa22123cade7ed99f5bf->leave($__internal_ed3d3726e96837e4f77ef52ce768ddc82e9dc58816b3aa22123cade7ed99f5bf_prof);

        
        $__internal_36766a2f0dd950b586cb80b570176b6d9430bc39037e2cc4d7e131daf635b85d->leave($__internal_36766a2f0dd950b586cb80b570176b6d9430bc39037e2cc4d7e131daf635b85d_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_37874c60b22c2d9484cfae32650bad8fc57ebc16108025aa1d5bed6043a1259f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37874c60b22c2d9484cfae32650bad8fc57ebc16108025aa1d5bed6043a1259f->enter($__internal_37874c60b22c2d9484cfae32650bad8fc57ebc16108025aa1d5bed6043a1259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d23eafaba725b9bf7ed272d016b9ed148f0a13c0b422dc045540a812190fab7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23eafaba725b9bf7ed272d016b9ed148f0a13c0b422dc045540a812190fab7f->enter($__internal_d23eafaba725b9bf7ed272d016b9ed148f0a13c0b422dc045540a812190fab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d23eafaba725b9bf7ed272d016b9ed148f0a13c0b422dc045540a812190fab7f->leave($__internal_d23eafaba725b9bf7ed272d016b9ed148f0a13c0b422dc045540a812190fab7f_prof);

        
        $__internal_37874c60b22c2d9484cfae32650bad8fc57ebc16108025aa1d5bed6043a1259f->leave($__internal_37874c60b22c2d9484cfae32650bad8fc57ebc16108025aa1d5bed6043a1259f_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_24761d855d58284c4f25140acd1a8f54f0462a7e30155c1e3402be09f1496f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24761d855d58284c4f25140acd1a8f54f0462a7e30155c1e3402be09f1496f1f->enter($__internal_24761d855d58284c4f25140acd1a8f54f0462a7e30155c1e3402be09f1496f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_dc855012b2a638853614118b237ce695d580895cbdc0ed07e1bc49e18292cbfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc855012b2a638853614118b237ce695d580895cbdc0ed07e1bc49e18292cbfb->enter($__internal_dc855012b2a638853614118b237ce695d580895cbdc0ed07e1bc49e18292cbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_dc855012b2a638853614118b237ce695d580895cbdc0ed07e1bc49e18292cbfb->leave($__internal_dc855012b2a638853614118b237ce695d580895cbdc0ed07e1bc49e18292cbfb_prof);

        
        $__internal_24761d855d58284c4f25140acd1a8f54f0462a7e30155c1e3402be09f1496f1f->leave($__internal_24761d855d58284c4f25140acd1a8f54f0462a7e30155c1e3402be09f1496f1f_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8f4d36c10ddf77c9c76639578822b71dc7546bd88e22c279bf52af9227d30dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4d36c10ddf77c9c76639578822b71dc7546bd88e22c279bf52af9227d30dc4->enter($__internal_8f4d36c10ddf77c9c76639578822b71dc7546bd88e22c279bf52af9227d30dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6a7853a1106e5d4d06dc8fb116135b5ce3ed4e2d5ecdd6135a25b3eb657828aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7853a1106e5d4d06dc8fb116135b5ce3ed4e2d5ecdd6135a25b3eb657828aa->enter($__internal_6a7853a1106e5d4d06dc8fb116135b5ce3ed4e2d5ecdd6135a25b3eb657828aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_6a7853a1106e5d4d06dc8fb116135b5ce3ed4e2d5ecdd6135a25b3eb657828aa->leave($__internal_6a7853a1106e5d4d06dc8fb116135b5ce3ed4e2d5ecdd6135a25b3eb657828aa_prof);

        
        $__internal_8f4d36c10ddf77c9c76639578822b71dc7546bd88e22c279bf52af9227d30dc4->leave($__internal_8f4d36c10ddf77c9c76639578822b71dc7546bd88e22c279bf52af9227d30dc4_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_403537c329bc81c791205bbde503d79f1098add210da88aa0a7d4bad0602df3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_403537c329bc81c791205bbde503d79f1098add210da88aa0a7d4bad0602df3d->enter($__internal_403537c329bc81c791205bbde503d79f1098add210da88aa0a7d4bad0602df3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_45e5d376a7170871ff2fdc8298514eb41e12070f92c54a7a1fb276e44a845b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e5d376a7170871ff2fdc8298514eb41e12070f92c54a7a1fb276e44a845b48->enter($__internal_45e5d376a7170871ff2fdc8298514eb41e12070f92c54a7a1fb276e44a845b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_45e5d376a7170871ff2fdc8298514eb41e12070f92c54a7a1fb276e44a845b48->leave($__internal_45e5d376a7170871ff2fdc8298514eb41e12070f92c54a7a1fb276e44a845b48_prof);

        
        $__internal_403537c329bc81c791205bbde503d79f1098add210da88aa0a7d4bad0602df3d->leave($__internal_403537c329bc81c791205bbde503d79f1098add210da88aa0a7d4bad0602df3d_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3cf0bd70819023eeea47cf817ff33a8ae319a71f778f240070e6ff768d4177ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf0bd70819023eeea47cf817ff33a8ae319a71f778f240070e6ff768d4177ef->enter($__internal_3cf0bd70819023eeea47cf817ff33a8ae319a71f778f240070e6ff768d4177ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_d42b0a5278f803f1472d660f35e0b8ec34229e05a468a0217efd4f89afe3485a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42b0a5278f803f1472d660f35e0b8ec34229e05a468a0217efd4f89afe3485a->enter($__internal_d42b0a5278f803f1472d660f35e0b8ec34229e05a468a0217efd4f89afe3485a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_d42b0a5278f803f1472d660f35e0b8ec34229e05a468a0217efd4f89afe3485a->leave($__internal_d42b0a5278f803f1472d660f35e0b8ec34229e05a468a0217efd4f89afe3485a_prof);

        
        $__internal_3cf0bd70819023eeea47cf817ff33a8ae319a71f778f240070e6ff768d4177ef->leave($__internal_3cf0bd70819023eeea47cf817ff33a8ae319a71f778f240070e6ff768d4177ef_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_a35335ef7ae4925ed9a115ead9c785d04a55b90761d905d61bbced9ec3e1193e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35335ef7ae4925ed9a115ead9c785d04a55b90761d905d61bbced9ec3e1193e->enter($__internal_a35335ef7ae4925ed9a115ead9c785d04a55b90761d905d61bbced9ec3e1193e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_e9050aa18b5601a8c06def8a5cb1edef72e29f49ed984e8b656a70417f6c8e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9050aa18b5601a8c06def8a5cb1edef72e29f49ed984e8b656a70417f6c8e35->enter($__internal_e9050aa18b5601a8c06def8a5cb1edef72e29f49ed984e8b656a70417f6c8e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_e9050aa18b5601a8c06def8a5cb1edef72e29f49ed984e8b656a70417f6c8e35->leave($__internal_e9050aa18b5601a8c06def8a5cb1edef72e29f49ed984e8b656a70417f6c8e35_prof);

        
        $__internal_a35335ef7ae4925ed9a115ead9c785d04a55b90761d905d61bbced9ec3e1193e->leave($__internal_a35335ef7ae4925ed9a115ead9c785d04a55b90761d905d61bbced9ec3e1193e_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6fd5edb798023b8a87bc76565bcb3d3691aaeb06594752bb90db5820783a5a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd5edb798023b8a87bc76565bcb3d3691aaeb06594752bb90db5820783a5a21->enter($__internal_6fd5edb798023b8a87bc76565bcb3d3691aaeb06594752bb90db5820783a5a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_7a2986fb270e40aafc34c0a948a48136325acc3c119402c90ce2b90fa3d805b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2986fb270e40aafc34c0a948a48136325acc3c119402c90ce2b90fa3d805b3->enter($__internal_7a2986fb270e40aafc34c0a948a48136325acc3c119402c90ce2b90fa3d805b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_7a2986fb270e40aafc34c0a948a48136325acc3c119402c90ce2b90fa3d805b3->leave($__internal_7a2986fb270e40aafc34c0a948a48136325acc3c119402c90ce2b90fa3d805b3_prof);

        
        $__internal_6fd5edb798023b8a87bc76565bcb3d3691aaeb06594752bb90db5820783a5a21->leave($__internal_6fd5edb798023b8a87bc76565bcb3d3691aaeb06594752bb90db5820783a5a21_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d957358bfbeecab7279c6d1de9938111969f9745be90c1ce07d8baf05cc92fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d957358bfbeecab7279c6d1de9938111969f9745be90c1ce07d8baf05cc92fa9->enter($__internal_d957358bfbeecab7279c6d1de9938111969f9745be90c1ce07d8baf05cc92fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_699bb906cc37cb9e3466587b70356b6e10bd0fac6d00c0d503d0885e712c33d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699bb906cc37cb9e3466587b70356b6e10bd0fac6d00c0d503d0885e712c33d0->enter($__internal_699bb906cc37cb9e3466587b70356b6e10bd0fac6d00c0d503d0885e712c33d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_699bb906cc37cb9e3466587b70356b6e10bd0fac6d00c0d503d0885e712c33d0->leave($__internal_699bb906cc37cb9e3466587b70356b6e10bd0fac6d00c0d503d0885e712c33d0_prof);

        
        $__internal_d957358bfbeecab7279c6d1de9938111969f9745be90c1ce07d8baf05cc92fa9->leave($__internal_d957358bfbeecab7279c6d1de9938111969f9745be90c1ce07d8baf05cc92fa9_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ef12423c7ff7d69ec16849e467f911862156351349486d359abd1452882aada0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef12423c7ff7d69ec16849e467f911862156351349486d359abd1452882aada0->enter($__internal_ef12423c7ff7d69ec16849e467f911862156351349486d359abd1452882aada0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e37749426c36d1d3dbed502d652946b340b1acab26271ec74dbe705f21a3c72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37749426c36d1d3dbed502d652946b340b1acab26271ec74dbe705f21a3c72b->enter($__internal_e37749426c36d1d3dbed502d652946b340b1acab26271ec74dbe705f21a3c72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_e37749426c36d1d3dbed502d652946b340b1acab26271ec74dbe705f21a3c72b->leave($__internal_e37749426c36d1d3dbed502d652946b340b1acab26271ec74dbe705f21a3c72b_prof);

        
        $__internal_ef12423c7ff7d69ec16849e467f911862156351349486d359abd1452882aada0->leave($__internal_ef12423c7ff7d69ec16849e467f911862156351349486d359abd1452882aada0_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5f9abcc97588542a243bff15d27daecec9f7c9b423f461b64bf4ab8108e6a189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9abcc97588542a243bff15d27daecec9f7c9b423f461b64bf4ab8108e6a189->enter($__internal_5f9abcc97588542a243bff15d27daecec9f7c9b423f461b64bf4ab8108e6a189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_296b4ee6d288c9444601bf5242b09fc028c3dd3e01b87acf979e66dd75bddaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296b4ee6d288c9444601bf5242b09fc028c3dd3e01b87acf979e66dd75bddaee->enter($__internal_296b4ee6d288c9444601bf5242b09fc028c3dd3e01b87acf979e66dd75bddaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_296b4ee6d288c9444601bf5242b09fc028c3dd3e01b87acf979e66dd75bddaee->leave($__internal_296b4ee6d288c9444601bf5242b09fc028c3dd3e01b87acf979e66dd75bddaee_prof);

        
        $__internal_5f9abcc97588542a243bff15d27daecec9f7c9b423f461b64bf4ab8108e6a189->leave($__internal_5f9abcc97588542a243bff15d27daecec9f7c9b423f461b64bf4ab8108e6a189_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6275ae6e55cbcc34e3b0af72a999e9e868580f72e54c0bb13212f9e26fe53b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6275ae6e55cbcc34e3b0af72a999e9e868580f72e54c0bb13212f9e26fe53b4f->enter($__internal_6275ae6e55cbcc34e3b0af72a999e9e868580f72e54c0bb13212f9e26fe53b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_43a32d4523457057640541cc3d1f8f793d8443911c6780725bce91e99132b7a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a32d4523457057640541cc3d1f8f793d8443911c6780725bce91e99132b7a4->enter($__internal_43a32d4523457057640541cc3d1f8f793d8443911c6780725bce91e99132b7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_43a32d4523457057640541cc3d1f8f793d8443911c6780725bce91e99132b7a4->leave($__internal_43a32d4523457057640541cc3d1f8f793d8443911c6780725bce91e99132b7a4_prof);

        
        $__internal_6275ae6e55cbcc34e3b0af72a999e9e868580f72e54c0bb13212f9e26fe53b4f->leave($__internal_6275ae6e55cbcc34e3b0af72a999e9e868580f72e54c0bb13212f9e26fe53b4f_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e847a979e077960713f7377050327aeb4f0a0754c93ea8ebdc761f79c4532559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e847a979e077960713f7377050327aeb4f0a0754c93ea8ebdc761f79c4532559->enter($__internal_e847a979e077960713f7377050327aeb4f0a0754c93ea8ebdc761f79c4532559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_83b9e9f3e7989f98a0b8560ca9db322529e8916375d0f13ae9e2bf7430bece4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b9e9f3e7989f98a0b8560ca9db322529e8916375d0f13ae9e2bf7430bece4a->enter($__internal_83b9e9f3e7989f98a0b8560ca9db322529e8916375d0f13ae9e2bf7430bece4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_83b9e9f3e7989f98a0b8560ca9db322529e8916375d0f13ae9e2bf7430bece4a->leave($__internal_83b9e9f3e7989f98a0b8560ca9db322529e8916375d0f13ae9e2bf7430bece4a_prof);

        
        $__internal_e847a979e077960713f7377050327aeb4f0a0754c93ea8ebdc761f79c4532559->leave($__internal_e847a979e077960713f7377050327aeb4f0a0754c93ea8ebdc761f79c4532559_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_256e439fd2b652f160156b613353acb9978da6a9aa5c3efa3ed5c0ab162102b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_256e439fd2b652f160156b613353acb9978da6a9aa5c3efa3ed5c0ab162102b1->enter($__internal_256e439fd2b652f160156b613353acb9978da6a9aa5c3efa3ed5c0ab162102b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_48e510c04ed519dcdc65cc25caf7ceb1869b981cc16717b5f26e58fa174001d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e510c04ed519dcdc65cc25caf7ceb1869b981cc16717b5f26e58fa174001d4->enter($__internal_48e510c04ed519dcdc65cc25caf7ceb1869b981cc16717b5f26e58fa174001d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_48e510c04ed519dcdc65cc25caf7ceb1869b981cc16717b5f26e58fa174001d4->leave($__internal_48e510c04ed519dcdc65cc25caf7ceb1869b981cc16717b5f26e58fa174001d4_prof);

        
        $__internal_256e439fd2b652f160156b613353acb9978da6a9aa5c3efa3ed5c0ab162102b1->leave($__internal_256e439fd2b652f160156b613353acb9978da6a9aa5c3efa3ed5c0ab162102b1_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_16eceea725184036b8d9f76d41e478438f3b4fc4bb2d0371c3819d93e0516336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16eceea725184036b8d9f76d41e478438f3b4fc4bb2d0371c3819d93e0516336->enter($__internal_16eceea725184036b8d9f76d41e478438f3b4fc4bb2d0371c3819d93e0516336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_0471d646f74fb21ab0979346493f839a9769f2efee1f67beb603b488c9ed58d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0471d646f74fb21ab0979346493f839a9769f2efee1f67beb603b488c9ed58d0->enter($__internal_0471d646f74fb21ab0979346493f839a9769f2efee1f67beb603b488c9ed58d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_0471d646f74fb21ab0979346493f839a9769f2efee1f67beb603b488c9ed58d0->leave($__internal_0471d646f74fb21ab0979346493f839a9769f2efee1f67beb603b488c9ed58d0_prof);

        
        $__internal_16eceea725184036b8d9f76d41e478438f3b4fc4bb2d0371c3819d93e0516336->leave($__internal_16eceea725184036b8d9f76d41e478438f3b4fc4bb2d0371c3819d93e0516336_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_e329c30a80111a5b24b239da56421a03fe2a6a063bbb3512069bfc6f770e934a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e329c30a80111a5b24b239da56421a03fe2a6a063bbb3512069bfc6f770e934a->enter($__internal_e329c30a80111a5b24b239da56421a03fe2a6a063bbb3512069bfc6f770e934a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_b4e483e7db8144dedca6b74d42fb7f28a35adbdf535b507d4628061b912f5aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e483e7db8144dedca6b74d42fb7f28a35adbdf535b507d4628061b912f5aed->enter($__internal_b4e483e7db8144dedca6b74d42fb7f28a35adbdf535b507d4628061b912f5aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b4e483e7db8144dedca6b74d42fb7f28a35adbdf535b507d4628061b912f5aed->leave($__internal_b4e483e7db8144dedca6b74d42fb7f28a35adbdf535b507d4628061b912f5aed_prof);

        
        $__internal_e329c30a80111a5b24b239da56421a03fe2a6a063bbb3512069bfc6f770e934a->leave($__internal_e329c30a80111a5b24b239da56421a03fe2a6a063bbb3512069bfc6f770e934a_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_aef9004ecb0eebb5c013883cea318d82329e3b0ba59934b034bab16cf6ff20df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef9004ecb0eebb5c013883cea318d82329e3b0ba59934b034bab16cf6ff20df->enter($__internal_aef9004ecb0eebb5c013883cea318d82329e3b0ba59934b034bab16cf6ff20df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c6fa5ddbbfd78cd3319d45ac5f582db592cc22fb0060a535f321ca837b5ddb5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fa5ddbbfd78cd3319d45ac5f582db592cc22fb0060a535f321ca837b5ddb5e->enter($__internal_c6fa5ddbbfd78cd3319d45ac5f582db592cc22fb0060a535f321ca837b5ddb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c6fa5ddbbfd78cd3319d45ac5f582db592cc22fb0060a535f321ca837b5ddb5e->leave($__internal_c6fa5ddbbfd78cd3319d45ac5f582db592cc22fb0060a535f321ca837b5ddb5e_prof);

        
        $__internal_aef9004ecb0eebb5c013883cea318d82329e3b0ba59934b034bab16cf6ff20df->leave($__internal_aef9004ecb0eebb5c013883cea318d82329e3b0ba59934b034bab16cf6ff20df_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a9dae9c38d3c8cdde38dc38c243ae4836b63356c70eaa42e78b62ab53db75955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9dae9c38d3c8cdde38dc38c243ae4836b63356c70eaa42e78b62ab53db75955->enter($__internal_a9dae9c38d3c8cdde38dc38c243ae4836b63356c70eaa42e78b62ab53db75955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_926e95fa4c0048101d30484a653023f9fbc08eedf43e510565fdfdb3560e4cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926e95fa4c0048101d30484a653023f9fbc08eedf43e510565fdfdb3560e4cfd->enter($__internal_926e95fa4c0048101d30484a653023f9fbc08eedf43e510565fdfdb3560e4cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_926e95fa4c0048101d30484a653023f9fbc08eedf43e510565fdfdb3560e4cfd->leave($__internal_926e95fa4c0048101d30484a653023f9fbc08eedf43e510565fdfdb3560e4cfd_prof);

        
        $__internal_a9dae9c38d3c8cdde38dc38c243ae4836b63356c70eaa42e78b62ab53db75955->leave($__internal_a9dae9c38d3c8cdde38dc38c243ae4836b63356c70eaa42e78b62ab53db75955_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_30a69751ccaba34e34dce532da87ec1da1596d86bb2ce3c05f9047d8877665bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a69751ccaba34e34dce532da87ec1da1596d86bb2ce3c05f9047d8877665bc->enter($__internal_30a69751ccaba34e34dce532da87ec1da1596d86bb2ce3c05f9047d8877665bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_35e4a565630ae07c2cf5c08458da2eea747ed144a514e437cfba8c0f2d446e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e4a565630ae07c2cf5c08458da2eea747ed144a514e437cfba8c0f2d446e36->enter($__internal_35e4a565630ae07c2cf5c08458da2eea747ed144a514e437cfba8c0f2d446e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_35e4a565630ae07c2cf5c08458da2eea747ed144a514e437cfba8c0f2d446e36->leave($__internal_35e4a565630ae07c2cf5c08458da2eea747ed144a514e437cfba8c0f2d446e36_prof);

        
        $__internal_30a69751ccaba34e34dce532da87ec1da1596d86bb2ce3c05f9047d8877665bc->leave($__internal_30a69751ccaba34e34dce532da87ec1da1596d86bb2ce3c05f9047d8877665bc_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_32305de2b58296893dfa20b7c9628be3c340c03f64bf303825b9a22cffe09678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32305de2b58296893dfa20b7c9628be3c340c03f64bf303825b9a22cffe09678->enter($__internal_32305de2b58296893dfa20b7c9628be3c340c03f64bf303825b9a22cffe09678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_aaaba8abba55422b454a4768679a0a022949eec89cd3e5cff52458c5db2e5734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaaba8abba55422b454a4768679a0a022949eec89cd3e5cff52458c5db2e5734->enter($__internal_aaaba8abba55422b454a4768679a0a022949eec89cd3e5cff52458c5db2e5734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aaaba8abba55422b454a4768679a0a022949eec89cd3e5cff52458c5db2e5734->leave($__internal_aaaba8abba55422b454a4768679a0a022949eec89cd3e5cff52458c5db2e5734_prof);

        
        $__internal_32305de2b58296893dfa20b7c9628be3c340c03f64bf303825b9a22cffe09678->leave($__internal_32305de2b58296893dfa20b7c9628be3c340c03f64bf303825b9a22cffe09678_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_587ac2ab6d535500ba75dc4f7e92c79b2f8f69d781926511a906f274440f979b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587ac2ab6d535500ba75dc4f7e92c79b2f8f69d781926511a906f274440f979b->enter($__internal_587ac2ab6d535500ba75dc4f7e92c79b2f8f69d781926511a906f274440f979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_8ef2d3ef93b7d8be01ebcd143162a10da519266d1646ffd80307a6bd49375c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef2d3ef93b7d8be01ebcd143162a10da519266d1646ffd80307a6bd49375c0e->enter($__internal_8ef2d3ef93b7d8be01ebcd143162a10da519266d1646ffd80307a6bd49375c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8ef2d3ef93b7d8be01ebcd143162a10da519266d1646ffd80307a6bd49375c0e->leave($__internal_8ef2d3ef93b7d8be01ebcd143162a10da519266d1646ffd80307a6bd49375c0e_prof);

        
        $__internal_587ac2ab6d535500ba75dc4f7e92c79b2f8f69d781926511a906f274440f979b->leave($__internal_587ac2ab6d535500ba75dc4f7e92c79b2f8f69d781926511a906f274440f979b_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_34784e698fe7cefc9d5dcc1c61b476033b7d843196b0c6fd25b94efc914efa24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34784e698fe7cefc9d5dcc1c61b476033b7d843196b0c6fd25b94efc914efa24->enter($__internal_34784e698fe7cefc9d5dcc1c61b476033b7d843196b0c6fd25b94efc914efa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_d00bb6cf5e470cbde2ec6ca789fcac7822b682830f835f52b523e6e62bc18abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00bb6cf5e470cbde2ec6ca789fcac7822b682830f835f52b523e6e62bc18abe->enter($__internal_d00bb6cf5e470cbde2ec6ca789fcac7822b682830f835f52b523e6e62bc18abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d00bb6cf5e470cbde2ec6ca789fcac7822b682830f835f52b523e6e62bc18abe->leave($__internal_d00bb6cf5e470cbde2ec6ca789fcac7822b682830f835f52b523e6e62bc18abe_prof);

        
        $__internal_34784e698fe7cefc9d5dcc1c61b476033b7d843196b0c6fd25b94efc914efa24->leave($__internal_34784e698fe7cefc9d5dcc1c61b476033b7d843196b0c6fd25b94efc914efa24_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_c2092eb19a83d0e752f29edc192695765003d54cde2ba4a727992b942f9d94b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2092eb19a83d0e752f29edc192695765003d54cde2ba4a727992b942f9d94b2->enter($__internal_c2092eb19a83d0e752f29edc192695765003d54cde2ba4a727992b942f9d94b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_ae05f42888cebcdab52d4c76093049002bb83e0a58b3645ec1581867639ed1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae05f42888cebcdab52d4c76093049002bb83e0a58b3645ec1581867639ed1ed->enter($__internal_ae05f42888cebcdab52d4c76093049002bb83e0a58b3645ec1581867639ed1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ae05f42888cebcdab52d4c76093049002bb83e0a58b3645ec1581867639ed1ed->leave($__internal_ae05f42888cebcdab52d4c76093049002bb83e0a58b3645ec1581867639ed1ed_prof);

        
        $__internal_c2092eb19a83d0e752f29edc192695765003d54cde2ba4a727992b942f9d94b2->leave($__internal_c2092eb19a83d0e752f29edc192695765003d54cde2ba4a727992b942f9d94b2_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f3292082239a944620acf1df4b8234895cf96dfaf530d1245cd1f2e5c1b57204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3292082239a944620acf1df4b8234895cf96dfaf530d1245cd1f2e5c1b57204->enter($__internal_f3292082239a944620acf1df4b8234895cf96dfaf530d1245cd1f2e5c1b57204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_24955af522d66bcf97890279e99078102f453cc27839be2ffc17939c7c034e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24955af522d66bcf97890279e99078102f453cc27839be2ffc17939c7c034e4e->enter($__internal_24955af522d66bcf97890279e99078102f453cc27839be2ffc17939c7c034e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_24955af522d66bcf97890279e99078102f453cc27839be2ffc17939c7c034e4e->leave($__internal_24955af522d66bcf97890279e99078102f453cc27839be2ffc17939c7c034e4e_prof);

        
        $__internal_f3292082239a944620acf1df4b8234895cf96dfaf530d1245cd1f2e5c1b57204->leave($__internal_f3292082239a944620acf1df4b8234895cf96dfaf530d1245cd1f2e5c1b57204_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3e0e72bf9f82287c04a9ee91217bee7715bdc16a8b7da1c5c4c1e317c1f4b66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0e72bf9f82287c04a9ee91217bee7715bdc16a8b7da1c5c4c1e317c1f4b66a->enter($__internal_3e0e72bf9f82287c04a9ee91217bee7715bdc16a8b7da1c5c4c1e317c1f4b66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_43f7372e6205b2305ec4d00120f304d2b98df571c6b0260b8d8d28f2316dd784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f7372e6205b2305ec4d00120f304d2b98df571c6b0260b8d8d28f2316dd784->enter($__internal_43f7372e6205b2305ec4d00120f304d2b98df571c6b0260b8d8d28f2316dd784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_43f7372e6205b2305ec4d00120f304d2b98df571c6b0260b8d8d28f2316dd784->leave($__internal_43f7372e6205b2305ec4d00120f304d2b98df571c6b0260b8d8d28f2316dd784_prof);

        
        $__internal_3e0e72bf9f82287c04a9ee91217bee7715bdc16a8b7da1c5c4c1e317c1f4b66a->leave($__internal_3e0e72bf9f82287c04a9ee91217bee7715bdc16a8b7da1c5c4c1e317c1f4b66a_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_208bda6cd57ffc895c6254b83d85c27ceb2862c12dd9a3265dc8b9e4e562ed2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_208bda6cd57ffc895c6254b83d85c27ceb2862c12dd9a3265dc8b9e4e562ed2a->enter($__internal_208bda6cd57ffc895c6254b83d85c27ceb2862c12dd9a3265dc8b9e4e562ed2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_8a3a24d5971affdb047b585f5d1a7c209b65f35de4ae42563567403cc5424428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3a24d5971affdb047b585f5d1a7c209b65f35de4ae42563567403cc5424428->enter($__internal_8a3a24d5971affdb047b585f5d1a7c209b65f35de4ae42563567403cc5424428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_8a3a24d5971affdb047b585f5d1a7c209b65f35de4ae42563567403cc5424428->leave($__internal_8a3a24d5971affdb047b585f5d1a7c209b65f35de4ae42563567403cc5424428_prof);

        
        $__internal_208bda6cd57ffc895c6254b83d85c27ceb2862c12dd9a3265dc8b9e4e562ed2a->leave($__internal_208bda6cd57ffc895c6254b83d85c27ceb2862c12dd9a3265dc8b9e4e562ed2a_prof);

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
