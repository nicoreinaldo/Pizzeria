<?php

/* base.html.twig */
class __TwigTemplate_58fcb55423d3274a662181a229734752e725144dd63773cc99fa1c7691dad048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1b011b0e5ebb0be5bddb6f8006ced40f477acfe3825ca3ea8b9a65dfd6e043f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b011b0e5ebb0be5bddb6f8006ced40f477acfe3825ca3ea8b9a65dfd6e043f->enter($__internal_b1b011b0e5ebb0be5bddb6f8006ced40f477acfe3825ca3ea8b9a65dfd6e043f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f75ae52c29e5fb1c1a1cfbfb85811081136d10336711ed14e2af60a8dd8116f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75ae52c29e5fb1c1a1cfbfb85811081136d10336711ed14e2af60a8dd8116f3->enter($__internal_f75ae52c29e5fb1c1a1cfbfb85811081136d10336711ed14e2af60a8dd8116f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "</head>


<body class=\"hold-transition skin-blue layout-top-nav\">

";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "
<div class=\"wrapper\">
    <div class=\"content-wrapper\">
            ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "    </div>
    ";
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "</div>

";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "</body>
</html>";
        
        $__internal_b1b011b0e5ebb0be5bddb6f8006ced40f477acfe3825ca3ea8b9a65dfd6e043f->leave($__internal_b1b011b0e5ebb0be5bddb6f8006ced40f477acfe3825ca3ea8b9a65dfd6e043f_prof);

        
        $__internal_f75ae52c29e5fb1c1a1cfbfb85811081136d10336711ed14e2af60a8dd8116f3->leave($__internal_f75ae52c29e5fb1c1a1cfbfb85811081136d10336711ed14e2af60a8dd8116f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf752d28f1d88758f3f62a8343cb2ef2128f351e8add0fa26fdeb21e5e93ed35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf752d28f1d88758f3f62a8343cb2ef2128f351e8add0fa26fdeb21e5e93ed35->enter($__internal_cf752d28f1d88758f3f62a8343cb2ef2128f351e8add0fa26fdeb21e5e93ed35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f75ae1e646740f31b2e76fda62bc19e97bbc9408bd71258efa43d5a7a7adbd60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75ae1e646740f31b2e76fda62bc19e97bbc9408bd71258efa43d5a7a7adbd60->enter($__internal_f75ae1e646740f31b2e76fda62bc19e97bbc9408bd71258efa43d5a7a7adbd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PizzaNuestra";
        
        $__internal_f75ae1e646740f31b2e76fda62bc19e97bbc9408bd71258efa43d5a7a7adbd60->leave($__internal_f75ae1e646740f31b2e76fda62bc19e97bbc9408bd71258efa43d5a7a7adbd60_prof);

        
        $__internal_cf752d28f1d88758f3f62a8343cb2ef2128f351e8add0fa26fdeb21e5e93ed35->leave($__internal_cf752d28f1d88758f3f62a8343cb2ef2128f351e8add0fa26fdeb21e5e93ed35_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c19df3f42acbe36d466482f6c127b007fff1d72d0b9a4576dc1644c2b3e747cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19df3f42acbe36d466482f6c127b007fff1d72d0b9a4576dc1644c2b3e747cb->enter($__internal_c19df3f42acbe36d466482f6c127b007fff1d72d0b9a4576dc1644c2b3e747cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac06d004e3693629d0604dfaea8f0b8b9ac65141bb4be728254f67a2fda584a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac06d004e3693629d0604dfaea8f0b8b9ac65141bb4be728254f67a2fda584a8->enter($__internal_ac06d004e3693629d0604dfaea8f0b8b9ac65141bb4be728254f67a2fda584a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"/asset/favicon.ico\">
        ";
        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/morris.js/morris.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
 ";
        // line 19
        echo "        ";
        // line 20
        echo "         <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,300italic' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/animat/animate.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/fancybox/jquery.fancybox.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/nivo-lightbox/nivo-lightbox.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/themes/default/default.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/owl-carousel/owl.theme.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/owl-carousel/owl.transitions.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"/>
        <link rel=\"shortcut icon\" href=\"asset/images/favicon.ico\">
    ";
        
        $__internal_ac06d004e3693629d0604dfaea8f0b8b9ac65141bb4be728254f67a2fda584a8->leave($__internal_ac06d004e3693629d0604dfaea8f0b8b9ac65141bb4be728254f67a2fda584a8_prof);

        
        $__internal_c19df3f42acbe36d466482f6c127b007fff1d72d0b9a4576dc1644c2b3e747cb->leave($__internal_c19df3f42acbe36d466482f6c127b007fff1d72d0b9a4576dc1644c2b3e747cb_prof);

    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        $__internal_549a75d1d8f43245516a89da9faeaa0398f076884e2a9938efd07f960158b6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549a75d1d8f43245516a89da9faeaa0398f076884e2a9938efd07f960158b6ec->enter($__internal_549a75d1d8f43245516a89da9faeaa0398f076884e2a9938efd07f960158b6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_909741c2662f3164331392af3d92f32ff86b6f148234c012fd91c842edb42587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909741c2662f3164331392af3d92f32ff86b6f148234c012fd91c842edb42587->enter($__internal_909741c2662f3164331392af3d92f32ff86b6f148234c012fd91c842edb42587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        $this->loadTemplate("default/header.html.twig", "base.html.twig", 40)->display($context);
        echo " ";
        
        $__internal_909741c2662f3164331392af3d92f32ff86b6f148234c012fd91c842edb42587->leave($__internal_909741c2662f3164331392af3d92f32ff86b6f148234c012fd91c842edb42587_prof);

        
        $__internal_549a75d1d8f43245516a89da9faeaa0398f076884e2a9938efd07f960158b6ec->leave($__internal_549a75d1d8f43245516a89da9faeaa0398f076884e2a9938efd07f960158b6ec_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_26b6d3351d5fb89b55694444b4116b0143468abc82675fb6775a4535d2121960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b6d3351d5fb89b55694444b4116b0143468abc82675fb6775a4535d2121960->enter($__internal_26b6d3351d5fb89b55694444b4116b0143468abc82675fb6775a4535d2121960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98b695e8510d20b5ebb5c65aa96ceb4b2752d529a0fc350ae94993fb51856502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b695e8510d20b5ebb5c65aa96ceb4b2752d529a0fc350ae94993fb51856502->enter($__internal_98b695e8510d20b5ebb5c65aa96ceb4b2752d529a0fc350ae94993fb51856502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        $this->loadTemplate("default/index.html.twig", "base.html.twig", 44)->display($context);
        echo " ";
        
        $__internal_98b695e8510d20b5ebb5c65aa96ceb4b2752d529a0fc350ae94993fb51856502->leave($__internal_98b695e8510d20b5ebb5c65aa96ceb4b2752d529a0fc350ae94993fb51856502_prof);

        
        $__internal_26b6d3351d5fb89b55694444b4116b0143468abc82675fb6775a4535d2121960->leave($__internal_26b6d3351d5fb89b55694444b4116b0143468abc82675fb6775a4535d2121960_prof);

    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1047bb017c90134b695ef474a6385c08ae3478abf8f6b5498d92abe1dc118264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1047bb017c90134b695ef474a6385c08ae3478abf8f6b5498d92abe1dc118264->enter($__internal_1047bb017c90134b695ef474a6385c08ae3478abf8f6b5498d92abe1dc118264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a6f457a31f59894c9661e1e22c284bee7e796f6d567b26f17d64fc0bc380e93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f457a31f59894c9661e1e22c284bee7e796f6d567b26f17d64fc0bc380e93e->enter($__internal_a6f457a31f59894c9661e1e22c284bee7e796f6d567b26f17d64fc0bc380e93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        $this->loadTemplate("default/footer.html.twig", "base.html.twig", 46)->display($context);
        echo " ";
        
        $__internal_a6f457a31f59894c9661e1e22c284bee7e796f6d567b26f17d64fc0bc380e93e->leave($__internal_a6f457a31f59894c9661e1e22c284bee7e796f6d567b26f17d64fc0bc380e93e_prof);

        
        $__internal_1047bb017c90134b695ef474a6385c08ae3478abf8f6b5498d92abe1dc118264->leave($__internal_1047bb017c90134b695ef474a6385c08ae3478abf8f6b5498d92abe1dc118264_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0cb591b23bbaf941fd4aa4bad2c75bebbec5ced22b7f8233df86d728c7af1fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb591b23bbaf941fd4aa4bad2c75bebbec5ced22b7f8233df86d728c7af1fbf->enter($__internal_0cb591b23bbaf941fd4aa4bad2c75bebbec5ced22b7f8233df86d728c7af1fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4f88f0453116fa1b344343b94ed069b832027bac8b92b63e658f2c2dc702ea63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f88f0453116fa1b344343b94ed069b832027bac8b92b63e658f2c2dc702ea63->enter($__internal_4f88f0453116fa1b344343b94ed069b832027bac8b92b63e658f2c2dc702ea63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "
   <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-knob/dist/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 70
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/nivo-lightbox/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/jquery-easing/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/js/wow/wow.min.js"), "html", null, true);
        echo "\"></script> 
";
        
        $__internal_4f88f0453116fa1b344343b94ed069b832027bac8b92b63e658f2c2dc702ea63->leave($__internal_4f88f0453116fa1b344343b94ed069b832027bac8b92b63e658f2c2dc702ea63_prof);

        
        $__internal_0cb591b23bbaf941fd4aa4bad2c75bebbec5ced22b7f8233df86d728c7af1fbf->leave($__internal_0cb591b23bbaf941fd4aa4bad2c75bebbec5ced22b7f8233df86d728c7af1fbf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  380 => 80,  376 => 79,  372 => 78,  368 => 77,  364 => 76,  360 => 75,  356 => 74,  352 => 73,  347 => 70,  343 => 68,  339 => 67,  335 => 66,  331 => 65,  327 => 64,  323 => 63,  319 => 62,  315 => 61,  311 => 60,  307 => 59,  303 => 58,  299 => 57,  295 => 56,  291 => 55,  287 => 54,  283 => 53,  279 => 52,  275 => 51,  272 => 50,  263 => 49,  243 => 46,  223 => 44,  203 => 40,  189 => 31,  185 => 30,  181 => 29,  177 => 28,  173 => 27,  169 => 26,  165 => 25,  161 => 24,  157 => 23,  153 => 22,  147 => 20,  145 => 19,  140 => 16,  136 => 15,  132 => 14,  128 => 13,  124 => 12,  120 => 11,  116 => 10,  111 => 9,  108 => 7,  99 => 6,  81 => 5,  70 => 82,  68 => 49,  64 => 47,  62 => 46,  59 => 45,  57 => 44,  52 => 41,  50 => 40,  43 => 35,  41 => 6,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}PizzaNuestra{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"shortcut icon\" href=\"/asset/favicon.ico\">
        {# <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" /> #}
        <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/bootstrap/dist/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/Ionicons/css/ionicons.min.css') }}\">
        <link href=\"{{asset('asset/bower_components/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/dist/css/AdminLTE.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/dist/css/skins/_all-skins.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/bower_components/morris.js/morris.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
 {#        <link rel=\"stylesheet\" href=\"{{asset('asset/css/styles.css') }}\"> #}
        {# agregado del index #}
         <link rel=\"stylesheet\" href=\"{{asset('asset/css/font-awesome/css/font-awesome.min.css') }}\" />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,300italic' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/bootstrap/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/animat/animate.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/fancybox/jquery.fancybox.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/nivo-lightbox/nivo-lightbox.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/themes/default/default.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/owl-carousel/owl.carousel.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/owl-carousel/owl.theme.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/owl-carousel/owl.transitions.css') }}\">
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/style.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{asset('asset/css/responsive.css') }}\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"/>
        <link rel=\"shortcut icon\" href=\"asset/images/favicon.ico\">
    {% endblock %}
</head>


<body class=\"hold-transition skin-blue layout-top-nav\">

{% block header %} {% include 'default/header.html.twig' %} {% endblock %}

<div class=\"wrapper\">
    <div class=\"content-wrapper\">
            {% block body %} {% include 'default/index.html.twig' %} {% endblock %}
    </div>
    {% block footer %} {% include 'default/footer.html.twig' %} {% endblock %}
</div>

{% block javascripts %}

   <script src=\"{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/jquery-ui/jquery-ui.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/raphael/raphael.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/morris.js/morris.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}\"></script>
    <script src=\"{{asset('asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}\"></script>
    <script src=\"{{asset('asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/jquery-knob/dist/jquery.knob.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/moment/min/moment.min.js')}}\"></script>
    <script src=\"{{asset('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}\"></script>
    <script src=\"{{asset('asset/bower_components/fastclick/lib/fastclick.js')}}\"></script>
    <script src=\"{{asset('asset/dist/js/adminlte.min.js')}}\"></script>
    <script src=\"{{ asset('asset/bower_components/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{asset('asset/dist/js/pages/dashboard.js')}}\"></script>
    <script src=\"{{asset('asset/dist/js/demo.js')}}\"></script>
    {# agregado del index #}

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"{{asset('asset/js/jquery/jquery.js')}}\"></script>
    <script src=\"{{asset('asset/js/script.js')}}\"></script>
    <script src=\"{{asset('asset/js/bootstrap/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('asset/js/fancybox/jquery.fancybox.pack.js')}}\"></script>
    <script src=\"{{asset('asset/js/nivo-lightbox/nivo-lightbox.min.js')}}\"></script>
    <script src=\"{{asset('asset/js/owl-carousel/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('asset/js/jquery-easing/jquery.easing.1.3.js')}}\"></script>
    <script src=\"{{asset('asset/js/wow/wow.min.js')}}\"></script> 
{% endblock %}
</body>
</html>", "base.html.twig", "/home/nico/pizzeria/app/Resources/views/base.html.twig");
    }
}
