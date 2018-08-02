<?php

/* front.html.twig */
class __TwigTemplate_794d660678aeeeaccf60562eb54b37247b7e694ab31e5b4f7cd2f70ec097611a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'titre' => array($this, 'block_titre'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'offre' => array($this, 'block_offre'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Début bloc CSS -->
        <style>
\t\t\t/*.select2-result-label{
\t\t\t\tbackground-color: yellow;
\t\t\t}*/
            .nav>li>a:hover{
                padding-bottom: 35px;
                border-bottom: 3px solid #e7b315;
            }

\t\t\t.wrap {
            \tmargin: 10px auto 0;
\t\t\t}

\t\t\t#steps {
\t\t\t\tmargin: 80px 0 0 0
\t\t\t}

\t\t\t.commands {
\t\t\t\toverflow: hidden;
\t\t\t\tmargin-top: 30px;
\t\t\t}

\t\t\t.prev {
\t\t\t\tfloat: left
\t\t\t}

\t\t\t.next,
\t\t\t.submit {
\t\t\t\tfloat: right
\t\t\t}

\t\t\t.error {
\t\t\t\tcolor: #b33;
\t\t\t}

\t\t\t#progress {
\t\t\t\tposition: relative;
\t\t\t\theight: 5px;
\t\t\t\tbackground-color: #eee;
\t\t\t\tmargin-bottom: 20px;
\t\t\t}

\t\t\t#progress-complete {
\t\t\t\tborder: 0;
\t\t\t\tposition: absolute;
\t\t\t\theight: 5px;
\t\t\t\tmin-width: 10px;
\t\t\t\tbackground-color: #337ab7;
\t\t\t\ttransition: width .2s ease-in-out;
\t\t\t}
\t\t</style>


\t\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/nprogress-master/nprogress.js"), "html", null, true);
        echo "\"></script>
\t\t<link rel='stylesheet' href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/nprogress-master/nprogress.css"), "html", null, true);
        echo "\"/>

\t\t<!-- Plugins css-->
        <!--<link href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/plugins/tagsinput/jquery.tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/plugins/toggles/toggles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->
        <link href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/plugins/jquery-multi-select/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


        ";
        // line 74
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 97
        echo "        <!-- Fin bloc CSS -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("senoffice.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 101
        $this->displayBlock('body', $context, $blocks);
        // line 578
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 75
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<link href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/css/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/css/owl.transitions.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/css/cs-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/css/freepik.hotels.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/autocomplete/ac.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 87
        echo "

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.min.js\"></script>
\t\t<script src=\"js/respond.min.js\"></script>
\t\t<![endif]-->
\t\t<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/modernizr.custom.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 102
        echo "        <div class=\"preloader\"></div>
        ";
        // line 103
        $this->displayBlock('header', $context, $blocks);
        // line 174
        echo "
        ";
        // line 175
        $this->displayBlock('titre', $context, $blocks);
        // line 177
        echo "
        ";
        // line 178
        $this->displayBlock('slide', $context, $blocks);
        // line 180
        echo "        ";
        $this->displayBlock('recherche', $context, $blocks);
        // line 182
        echo "        ";
        $this->displayBlock('offre', $context, $blocks);
        // line 184
        echo "        ";
        $this->displayBlock('apropos', $context, $blocks);
        // line 274
        echo "
        ";
        // line 275
        $this->displayBlock('partenaires', $context, $blocks);
        // line 310
        echo "        ";
        $this->displayBlock('galerie', $context, $blocks);
        // line 367
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 459
        echo "        <!-- Début bloc script -->
\t\t<script>
            if (window.location.href !== \"http://127.0.0.1:8000/sen-office/accueil\") {
\t\t\t\tvar lenav = document.getElementById(\"leheader\").children[0];
\t\t\t\tlenav.setAttribute(\"style\", \"background-color: rgba(22, 38, 46, 0.95);\");
            }
        </script>
        ";
        // line 466
        $this->displayBlock('javascripts', $context, $blocks);
        // line 488
        echo "\t\t<!-- Fin bloc script -->


\t\t<script>
            var resizefunc = [];
        </script>

\t\t<!-- Main  -->
        <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/plugins/toggles/toggles.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/plugins/jquery-multi-select/jquery.quicksearch.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/js/connexion.js"), "html", null, true);
        echo "\"></script> 
\t\t<script src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ac/assets/js/gallerie.js"), "html", null, true);
        echo "\"></script>  
 


        <script>
            jQuery(document).ready(function() {

                // Select2
                jQuery(\".select2\").select2({
\t\t\t\t\twidth: '100%'
\t\t\t\t});
\t\t\t\tif(document.getElementById(\"select2-chosen-2\") != null) {
\t\t\t\t\tdocument.getElementById(\"select2-chosen-2\").setAttribute(\"style\", \"color: white\");
\t\t\t\t}
            });
        </script>
\t\t<script>
\t\t\t\$(function() {
\t\t\t\tvar \$signupForm = \$('#SignupForm');

\t\t\t\t\$signupForm.validate({
\t\t\t\t\terrorElement: 'em',
\t\t\t\t\tsubmitHandler: function(form) {
\t\t\t\t\t\tform.submit();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t\$signupForm.formToWizard({
\t\t\t\t\tsubmitButton: 'SaveAccount',
\t\t\t\t\tnextBtnClass: 'btn btn-primary next',
\t\t\t\t\tprevBtnClass: 'btn btn-default prev',
\t\t\t\t\tbuttonTag: 'button',
\t\t\t\t\tvalidateBeforeNext: function(form, step) {
\t\t\t\t\t\tvar stepIsValid = true;
\t\t\t\t\t\tvar validator = form.validate();
\t\t\t\t\t\t\$(':input', step).each(function(index) {
\t\t\t\t\t\t\tvar xy = validator.element(this);
\t\t\t\t\t\t\tstepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
\t\t\t\t\t\t});
\t\t\t\t\t\treturn stepIsValid;
\t\t\t\t\t},
\t\t\t\t\tprogress: function(i, count) {
\t\t\t\t\t\t\$('#progress-complete').width('' + (i / count * 100) + '%');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});

\t\t\t/*document.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t\tvar elements = document.getElementsByTagName(\"INPUT\");
\t\t\t\tfor (var i = 0; i < elements.length; i++) {
\t\t\t\t\telements[i].oninvalid = function(e) {
\t\t\t\t\t\te.target.setCustomValidity(\"\");
\t\t\t\t\t\tif (!e.target.validity.valid) {
\t\t\t\t\t\t\te.target.setCustomValidity(\"This field cannot be left blank\");
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t\telements[i].oninput = function(e) {
\t\t\t\t\t\te.target.setCustomValidity(\"\");
\t\t\t\t\t};
\t\t\t\t}
\t\t\t});*/
\t\t</script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 104
        echo "\t\t<header id=\"leheader\" class=\"header transp sticky\"> <!-- available class for header: .sticky .center-content .transp -->
\t\t\t<nav class=\"navbar navbar-inverse\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>

\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/senoffice.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li  class=\"";
        // line 121
        if (array_key_exists("activeA", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeA"]) || array_key_exists("activeA", $context) ? $context["activeA"] : (function () { throw new Twig_Error_Runtime('Variable "activeA" does not exist.', 121, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_front");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 122
        if (array_key_exists("activeC", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeC"]) || array_key_exists("activeC", $context) ? $context["activeC"] : (function () { throw new Twig_Error_Runtime('Variable "activeC" does not exist.', 122, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue_front");
        echo "\">Catalogue</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t";
        // line 124
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 124, $this->source); })()), "user", array())) {
            // line 125
            echo "\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Espace client<span class=\"caret\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 128
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Connexion</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 129
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partager_salle_front");
            echo "\">Nouveau Proprietaire ?</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
                            ";
        } else {
            // line 134
            echo "\t\t\t\t\t<li style=\"width:20px;height:20px; margin-right:50px\" class=\"dropdown\">

                ";
            // line 136
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 136, $this->source); })()), "user", array()), "photo", array()) != null) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 136, $this->source); })()), "user", array()), "photo", array())) > 10000))) {
                // line 137
                echo "\t\t\t
                        <a  href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t<img style=\"width:40px;height:40px\" src=\"data:image/png;base64,";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 139, $this->source); })()), "user", array()), "photo", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 139, $this->source); })()), "user", array()), "username", array()), "html", null, true);
                echo "\" class=\"img-circle\">
\t\t\t\t\t\t </a>
                  ";
            } else {
                // line 142
                echo "\t\t\t\t  
\t\t\t\t\t\t <a  href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t<img style=\"width:40px;height:40px\" src=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-6.jpg"), "html", null, true);
                echo "\" alt=\"pas defini\" class=\"img-circle\">
\t\t\t\t\t\t </a>

\t\t\t\t\t\t ";
            }
            // line 148
            echo "                        <ul class=\"dropdown-menu\">
                            <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                            <li><a href=\"";
            // line 150
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_salle");
            echo "\"><i class=\"md md-home\"></i> Mes salles</a></li>
                            <li><a href=\"";
            // line 151
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_salle");
            echo "\"><i class=\"md md-add\"></i> Ajouter Salle</a></li>
                            <li><a href=\"";
            // line 152
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\"><i class=\"md md-settings-power\"></i> Deconnexion</a></li>
                        </ul>
                    </li>

\t\t\t\t\t";
        }
        // line 157
        echo "\t\t\t\t\t\t\t<li class=\"";
        if (array_key_exists("activePS", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activePS"]) || array_key_exists("activePS", $context) ? $context["activePS"] : (function () { throw new Twig_Error_Runtime('Variable "activePS" does not exist.', 157, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partager_salle_front");
        echo "\">Partagez votre salle</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t\t\t<div class=\"mg-search-box-cont pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"mg-search-box-trigger\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t\t<div class=\"mg-search-box\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"s\" class=\"form-control\" placeholder=\"Type Keyword...\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.container-fluid -->
\t\t\t</nav>
\t\t</header>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 175
    public function block_titre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 176
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 178
    public function block_slide($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 179
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 181
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 182
    public function block_offre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 183
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 184
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 185
        echo "\t\t<div class=\"mg-about parallax\" id=\"apropos\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">A propos de Sen Office</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tSen Office c'est une équipe de passionnés qui souhaite simplifier la vie des particuliers, entreprises, ONG, Associations, PME en leur donnant accès à des salles de réunion, séminaire, de formation ou de conférence au meilleur prix et en quelques minutes.Notre mission est d'offrir à chaque professionnel plus de flexibilité en lui permettant de trouver le meilleur espace de travail à tout moment et dans la ville de son choix. Nous avons pour ambition de devenir le site de réservation de salles de référence pour toutes les entreprises
\t\t\t\t\t\t.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"video-responsive\">
\t\t\t\t\t\t\t<iframe src=\"https://player.vimeo.com/video/134008155\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mg-features\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t\t<h2>Hotel facilties</h2>
\t\t\t\t\t\t\t<p>These best rooms chosen by our customers</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fp-ht-receptionist\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>24-hour reception</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Room service</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-car\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Car hire</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Wake-up call</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-coffee\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Coffee and tea</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Free Wi-Fi</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 275
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        // line 276
        echo "\t\t<div class=\"mg-testi-partners parallax\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Témoignages</h2>
\t\t\t\t\t\t<div class=\"mg-testimonial-slider\" id=\"mg-testimonial-slider\">
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consumeret terminatas oritur euripidis satis. Venisset ipsum.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sol magnum gustare pararetur statuam, morbi patriam omittantur.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Stabilem monet, petat excepturi nudus expeteremus fabellas vexetur.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Nos partenaires</h2>
\t\t\t\t\t\t<ul class=\"mg-part-logos\" id=\"mg-part-logos\">
\t\t\t\t\t\t\t<li><img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/part-logo-1.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/part-logo-2.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/part-logo-3.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/part-logo-1.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/part-logo-3.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 310
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        // line 311
        echo "\t\t<div class=\"mg-news-gallery\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Recent News</h2>
\t\t\t\t\t\t<ul class=\"mg-recnt-posts\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Our Gallery</h2>

\t\t\t\t\t\t<div class=\"mg-gallery-container\">
\t\t\t\t\t\t\t<ul class=\"mg-gallery\" id=\"mg-gallery\">
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/gallery-01.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/gallery-02.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/gallery-05.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/gallery-06.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/gallery-07.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/gallery-08.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"mg-gallery-thumb\" id=\"mg-gallery-thumb\">
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/gallery-thumb-01.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/gallery-thumb-02.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/gallery-thumb-05.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/gallery-thumb-06.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/gallery-thumb-07.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/gallery-thumb-08.png"), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 367
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 368
        echo "\t\t<footer class=\"mg-footer\">
\t\t\t<div class=\"mg-footer-widget\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Contactez-nous</h2>
\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t<strong></strong><br>
\t\t\t\t\t\t\t\t\tRue 3,Brenger Feraud, Sonatel Academy<br>
\t\t\t\t\t\t\t\t\tCTIC/DAKAR
\t\t\t\t\t\t\t\t</address>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t+221 78 173 54 79<br>
\t\t\t\t\t\t\t\t\t+221 77 373 19 36
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:#\">contact@myoffice.sn</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Instagram</h2>
\t\t\t\t\t\t\t\t<ul class=\"mg-instagram\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/ins-01.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/ins-02.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/ins-03.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/ins-04.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/ins-05.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/ins-06.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/ins-07.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/ins-08.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/ins-09.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Newsletter</h2>
\t\t\t\t\t\t\t\t<p>inscrivez-vous à notre Newsletter pour ne rien manquer de nos nouveautés.</p>
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Votre Email\">
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-main\" value=\"Je m'inscris\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Suivez-nous sur les réseaux sociaux</h2>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLes équipes se réunissent souvent dans les espaces Sen Office pour une réunion commerciale, pour préparer un projet, pour une présentation des objectifs ou une réunion du service marketing
\t\t\t\t\t\t\t\t\t.</p>
\t\t\t\t\t\t\t\t<ul class=\"mg-footer-social\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>

\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"mg-copyright\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<ul class=\"mg-footer-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Acceuil</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#apropos\">A propos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"gallery.html\">catalogue</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<p>&copy; 2018 <a href=\"http://www.senoffice.sn\">ADOB-TECH</a>. All rights reserved.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</footer>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 466
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 467
        echo "        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
\t\t<script src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.formtowizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/autocomplete/ac.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t<script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/jssor.slider.mini.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/selectFx.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/starrr.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/jquery.shuffle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
\t\t<script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/gmaps.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/script.js"), "html", null, true);
        echo "\"></script>
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.9/js/all.js\" integrity=\"sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1192 => 485,  1188 => 484,  1184 => 483,  1179 => 481,  1175 => 480,  1171 => 479,  1167 => 478,  1163 => 477,  1159 => 476,  1155 => 475,  1151 => 474,  1147 => 473,  1142 => 471,  1138 => 470,  1134 => 469,  1130 => 468,  1127 => 467,  1118 => 466,  1052 => 403,  1048 => 402,  1044 => 401,  1040 => 400,  1036 => 399,  1032 => 398,  1028 => 397,  1024 => 396,  1020 => 395,  991 => 368,  982 => 367,  964 => 359,  960 => 358,  956 => 357,  952 => 356,  948 => 355,  944 => 354,  938 => 351,  934 => 350,  930 => 349,  926 => 348,  922 => 347,  918 => 346,  881 => 311,  872 => 310,  855 => 303,  851 => 302,  847 => 301,  843 => 300,  839 => 299,  814 => 276,  805 => 275,  707 => 185,  698 => 184,  688 => 183,  679 => 182,  669 => 181,  660 => 180,  650 => 179,  641 => 178,  631 => 176,  622 => 175,  588 => 157,  580 => 152,  576 => 151,  572 => 150,  568 => 148,  561 => 144,  557 => 142,  549 => 139,  545 => 137,  543 => 136,  539 => 134,  531 => 129,  527 => 128,  522 => 125,  520 => 124,  509 => 122,  499 => 121,  491 => 116,  477 => 104,  468 => 103,  395 => 515,  391 => 514,  387 => 513,  383 => 512,  379 => 511,  375 => 510,  371 => 509,  366 => 507,  361 => 505,  356 => 503,  352 => 502,  348 => 501,  344 => 500,  340 => 499,  336 => 498,  332 => 497,  328 => 496,  318 => 488,  316 => 466,  307 => 459,  304 => 367,  301 => 310,  299 => 275,  296 => 274,  293 => 184,  290 => 182,  287 => 180,  285 => 178,  282 => 177,  280 => 175,  277 => 174,  275 => 103,  272 => 102,  263 => 101,  251 => 95,  241 => 87,  237 => 85,  233 => 84,  229 => 83,  225 => 82,  221 => 81,  217 => 80,  213 => 79,  209 => 78,  204 => 76,  199 => 75,  190 => 74,  172 => 5,  160 => 578,  158 => 101,  152 => 98,  149 => 97,  147 => 74,  141 => 71,  137 => 70,  132 => 68,  128 => 67,  124 => 66,  120 => 65,  116 => 64,  110 => 61,  106 => 60,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <!-- Début bloc CSS -->
        <style>
\t\t\t/*.select2-result-label{
\t\t\t\tbackground-color: yellow;
\t\t\t}*/
            .nav>li>a:hover{
                padding-bottom: 35px;
                border-bottom: 3px solid #e7b315;
            }

\t\t\t.wrap {
            \tmargin: 10px auto 0;
\t\t\t}

\t\t\t#steps {
\t\t\t\tmargin: 80px 0 0 0
\t\t\t}

\t\t\t.commands {
\t\t\t\toverflow: hidden;
\t\t\t\tmargin-top: 30px;
\t\t\t}

\t\t\t.prev {
\t\t\t\tfloat: left
\t\t\t}

\t\t\t.next,
\t\t\t.submit {
\t\t\t\tfloat: right
\t\t\t}

\t\t\t.error {
\t\t\t\tcolor: #b33;
\t\t\t}

\t\t\t#progress {
\t\t\t\tposition: relative;
\t\t\t\theight: 5px;
\t\t\t\tbackground-color: #eee;
\t\t\t\tmargin-bottom: 20px;
\t\t\t}

\t\t\t#progress-complete {
\t\t\t\tborder: 0;
\t\t\t\tposition: absolute;
\t\t\t\theight: 5px;
\t\t\t\tmin-width: 10px;
\t\t\t\tbackground-color: #337ab7;
\t\t\t\ttransition: width .2s ease-in-out;
\t\t\t}
\t\t</style>


\t\t<script src=\"{{asset ('assets/nprogress-master/nprogress.js')}}\"></script>
\t\t<link rel='stylesheet' href=\"{{asset ('assets/nprogress-master/nprogress.css')}}\"/>

\t\t<!-- Plugins css-->
        <!--<link href=\"{{asset ('ac/assets/plugins/tagsinput/jquery.tagsinput.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset ('ac/assets/plugins/toggles/toggles.css')}}\" rel=\"stylesheet\">-->
        <link href=\"{{asset ('ac/assets/plugins/jquery-multi-select/multi-select.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('ac/assets/plugins/select2/dist/css/select2.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('ac/assets/plugins/select2/dist/css/select2-bootstrap.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{asset ('ac/assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('ac/assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">


        {% block stylesheets %}
        <link href=\"{{asset ('assets/template/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/font-awesome.min.css')}}\" rel=\"stylesheet\">

\t\t<link href=\"{{asset ('assets/template/css/owl.carousel.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/owl.theme.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/owl.transitions.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/cs-select.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/bootstrap-datepicker3.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/freepik.hotels.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/template/css/style.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset ('assets/autocomplete/ac.css')}}\" rel=\"stylesheet\">
\t\t{# <link href=\"{{asset ('assets/css/gallerie.css')}}\" rel=\"stylesheet\"> #}


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.min.js\"></script>
\t\t<script src=\"js/respond.min.js\"></script>
\t\t<![endif]-->
\t\t<script src=\"{{asset ('assets/template/js/modernizr.custom.min.js')}}\"></script>
        {% endblock %}
        <!-- Fin bloc CSS -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('senoffice.ico') }}\" />
    </head>
    <body>
    {% block body %}
        <div class=\"preloader\"></div>
        {% block header %}
\t\t<header id=\"leheader\" class=\"header transp sticky\"> <!-- available class for header: .sticky .center-content .transp -->
\t\t\t<nav class=\"navbar navbar-inverse\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>

\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"{{asset  ('assets/template/images/senoffice.png')}}\" alt=\"logo\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li  class=\"{% if activeA is defined %} {{ activeA }} {% endif %}\"><a href=\"{{path ('accueil_front') }}\">Accueil</a></li>
\t\t\t\t\t\t\t<li class=\"{% if activeC is defined %} {{ activeC }} {% endif %}\"><a href=\"{{path ('catalogue_front') }}\">Catalogue</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t{% if not app.user %}
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Espace client<span class=\"caret\"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('security_login')}}\">Connexion</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('partager_salle_front')}}\">Nouveau Proprietaire ?</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
                            {% else %}
\t\t\t\t\t<li style=\"width:20px;height:20px; margin-right:50px\" class=\"dropdown\">

                {% if app.user.photo != null and app.user.photo|length >10000  %}
\t\t\t
                        <a  href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t<img style=\"width:40px;height:40px\" src=\"data:image/png;base64,{{ app.user.photo }}\" alt=\"{{ app.user.username }}\" class=\"img-circle\">
\t\t\t\t\t\t </a>
                  {% else %}
\t\t\t\t  
\t\t\t\t\t\t <a  href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t<img style=\"width:40px;height:40px\" src=\"{{asset('assets/images/users/avatar-6.jpg')}}\" alt=\"pas defini\" class=\"img-circle\">
\t\t\t\t\t\t </a>

\t\t\t\t\t\t {% endif %}
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                            <li><a href=\"{{path('liste_salle')}}\"><i class=\"md md-home\"></i> Mes salles</a></li>
                            <li><a href=\"{{path('ajouter_salle')}}\"><i class=\"md md-add\"></i> Ajouter Salle</a></li>
                            <li><a href=\"{{path('security_logout')}}\"><i class=\"md md-settings-power\"></i> Deconnexion</a></li>
                        </ul>
                    </li>

\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<li class=\"{% if activePS is defined %} {{ activePS }} {% endif %}\"><a href=\"{{ path ('partager_salle_front') }}\">Partagez votre salle</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t\t\t<div class=\"mg-search-box-cont pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"mg-search-box-trigger\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t\t<div class=\"mg-search-box\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"s\" class=\"form-control\" placeholder=\"Type Keyword...\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.container-fluid -->
\t\t\t</nav>
\t\t</header>
        {% endblock %}

        {% block titre %}
        {% endblock %}

        {% block slide %}
        {% endblock %}
        {% block recherche %}
        {% endblock %}
        {% block offre %}
        {% endblock %}
        {% block apropos %}
\t\t<div class=\"mg-about parallax\" id=\"apropos\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">A propos de Sen Office</h2>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tSen Office c'est une équipe de passionnés qui souhaite simplifier la vie des particuliers, entreprises, ONG, Associations, PME en leur donnant accès à des salles de réunion, séminaire, de formation ou de conférence au meilleur prix et en quelques minutes.Notre mission est d'offrir à chaque professionnel plus de flexibilité en lui permettant de trouver le meilleur espace de travail à tout moment et dans la ville de son choix. Nous avons pour ambition de devenir le site de réservation de salles de référence pour toutes les entreprises
\t\t\t\t\t\t.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"video-responsive\">
\t\t\t\t\t\t\t<iframe src=\"https://player.vimeo.com/video/134008155\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mg-features\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"mg-sec-title\">
\t\t\t\t\t\t\t<h2>Hotel facilties</h2>
\t\t\t\t\t\t\t<p>These best rooms chosen by our customers</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fp-ht-receptionist\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>24-hour reception</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Room service</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-car\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Car hire</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Wake-up call</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-coffee\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Coffee and tea</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"mg-feature\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-feature-icon-title\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t<h3>Free Wi-Fi</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        {% endblock %}

        {% block partenaires %}
\t\t<div class=\"mg-testi-partners parallax\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Témoignages</h2>
\t\t\t\t\t\t<div class=\"mg-testimonial-slider\" id=\"mg-testimonial-slider\">
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consumeret terminatas oritur euripidis satis. Venisset ipsum.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sol magnum gustare pararetur statuam, morbi patriam omittantur.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Stabilem monet, petat excepturi nudus expeteremus fabellas vexetur.</p>
\t\t\t\t\t\t\t\t<footer>John Doe, Example Inc</footer>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Nos partenaires</h2>
\t\t\t\t\t\t<ul class=\"mg-part-logos\" id=\"mg-part-logos\">
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-1.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-2.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-3.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-1.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/part-logo-3.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        {% endblock %}
        {% block galerie %}
\t\t<div class=\"mg-news-gallery\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Recent News</h2>
\t\t\t\t\t\t<ul class=\"mg-recnt-posts\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"mg-recnt-post\">
\t\t\t\t\t\t\t\t\t<div class=\"mg-rp-date\">27 <div class=\"mg-rp-month\">may</div></div>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">A Standard Blog Post</a></h3>
\t\t\t\t\t\t\t\t\t<p>Nostram virtutem poterimus quoddam praesertim legendos libero exhorrescere saluti...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<h2 class=\"mg-sec-left-title\">Our Gallery</h2>

\t\t\t\t\t\t<div class=\"mg-gallery-container\">
\t\t\t\t\t\t\t<ul class=\"mg-gallery\" id=\"mg-gallery\">
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-01.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-02.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-05.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-06.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-07.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-08.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"mg-gallery-thumb\" id=\"mg-gallery-thumb\">
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-01.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-02.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-05.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-06.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-07.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t\t<li><img src=\"{{asset ('assets/template/images/gallery-thumb-08.png')}}\" alt=\"Partner Logo\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        {% endblock %}
        {% block footer %}
\t\t<footer class=\"mg-footer\">
\t\t\t<div class=\"mg-footer-widget\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Contactez-nous</h2>
\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t<strong></strong><br>
\t\t\t\t\t\t\t\t\tRue 3,Brenger Feraud, Sonatel Academy<br>
\t\t\t\t\t\t\t\t\tCTIC/DAKAR
\t\t\t\t\t\t\t\t</address>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t+221 78 173 54 79<br>
\t\t\t\t\t\t\t\t\t+221 77 373 19 36
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:#\">contact@myoffice.sn</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Instagram</h2>
\t\t\t\t\t\t\t\t<ul class=\"mg-instagram\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-01.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-02.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-03.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-04.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-05.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-06.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-07.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-08.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset ('assets/template/images/ins-09.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Newsletter</h2>
\t\t\t\t\t\t\t\t<p>inscrivez-vous à notre Newsletter pour ne rien manquer de nos nouveautés.</p>
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Votre Email\">
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-main\" value=\"Je m'inscris\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Suivez-nous sur les réseaux sociaux</h2>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLes équipes se réunissent souvent dans les espaces Sen Office pour une réunion commerciale, pour préparer un projet, pour une présentation des objectifs ou une réunion du service marketing
\t\t\t\t\t\t\t\t\t.</p>
\t\t\t\t\t\t\t\t<ul class=\"mg-footer-social\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>

\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"mg-copyright\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<ul class=\"mg-footer-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Acceuil</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#apropos\">A propos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"gallery.html\">catalogue</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<p>&copy; 2018 <a href=\"http://www.senoffice.sn\">ADOB-TECH</a>. All rights reserved.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</footer>
        {% endblock %}
        <!-- Début bloc script -->
\t\t<script>
            if (window.location.href !== \"http://127.0.0.1:8000/sen-office/accueil\") {
\t\t\t\tvar lenav = document.getElementById(\"leheader\").children[0];
\t\t\t\tlenav.setAttribute(\"style\", \"background-color: rgba(22, 38, 46, 0.95);\");
            }
        </script>
        {% block javascripts %}
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
\t\t<script src=\"{{asset('assets/template/js/jquery.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/js/jquery.validate.js')}}\"></script>
\t\t<script src=\"{{asset('assets/js/jquery.formtowizard.js')}}\"></script>
\t\t<script src=\"{{asset('assets/autocomplete/ac.js')}}\"></script>
\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t<script src=\"{{asset('assets/template/js/bootstrap.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/template/js/owl.carousel.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/template/js/jssor.slider.mini.js')}}\"></script>
\t\t<script src=\"{{asset('assets/template/js/classie.js')}}\"></script>
\t\t<script src=\"{{asset('assets/template/js/selectFx.js')}}\"></script>
\t\t<script src=\"{{asset('assets/template/js/bootstrap-datepicker.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/template/js/starrr.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/template/js/nivo-lightbox.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/template/js/jquery.shuffle.min.js')}}\"></script>
\t\t<script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
\t\t<script src=\"{{asset('assets/template/js/gmaps.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/template/js/jquery.parallax-1.1.3.js')}}\"></script>
        <script src=\"{{asset('assets/template/js/script.js')}}\"></script>
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.9/js/all.js\" integrity=\"sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl\" crossorigin=\"anonymous\"></script>
        {% endblock %}
\t\t<!-- Fin bloc script -->


\t\t<script>
            var resizefunc = [];
        </script>

\t\t<!-- Main  -->
        <script src=\"{{asset ('ac/assets/js/detect.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/fastclick.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/waves.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/wow.min.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/js/jquery.scrollTo.min.js')}}\"></script>

        <script src=\"{{asset ('ac/assets/js/jquery.app.js')}}\"></script>

        <script src=\"{{asset ('ac/assets/plugins/select2/dist/js/select2.min.js')}}\" type=\"text/javascript\"></script>

        <script src=\"{{asset ('ac/assets/plugins/tagsinput/jquery.tagsinput.min.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/plugins/toggles/toggles.min.js')}}\"></script>
        <script src=\"{{asset ('ac/assets/plugins/jquery-multi-select/jquery.quicksearch.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset ('ac/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset ('ac/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset ('ac/assets/js/connexion.js')}}\"></script> 
\t\t<script src=\"{{asset ('ac/assets/js/gallerie.js')}}\"></script>  
 


        <script>
            jQuery(document).ready(function() {

                // Select2
                jQuery(\".select2\").select2({
\t\t\t\t\twidth: '100%'
\t\t\t\t});
\t\t\t\tif(document.getElementById(\"select2-chosen-2\") != null) {
\t\t\t\t\tdocument.getElementById(\"select2-chosen-2\").setAttribute(\"style\", \"color: white\");
\t\t\t\t}
            });
        </script>
\t\t<script>
\t\t\t\$(function() {
\t\t\t\tvar \$signupForm = \$('#SignupForm');

\t\t\t\t\$signupForm.validate({
\t\t\t\t\terrorElement: 'em',
\t\t\t\t\tsubmitHandler: function(form) {
\t\t\t\t\t\tform.submit();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t\$signupForm.formToWizard({
\t\t\t\t\tsubmitButton: 'SaveAccount',
\t\t\t\t\tnextBtnClass: 'btn btn-primary next',
\t\t\t\t\tprevBtnClass: 'btn btn-default prev',
\t\t\t\t\tbuttonTag: 'button',
\t\t\t\t\tvalidateBeforeNext: function(form, step) {
\t\t\t\t\t\tvar stepIsValid = true;
\t\t\t\t\t\tvar validator = form.validate();
\t\t\t\t\t\t\$(':input', step).each(function(index) {
\t\t\t\t\t\t\tvar xy = validator.element(this);
\t\t\t\t\t\t\tstepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
\t\t\t\t\t\t});
\t\t\t\t\t\treturn stepIsValid;
\t\t\t\t\t},
\t\t\t\t\tprogress: function(i, count) {
\t\t\t\t\t\t\$('#progress-complete').width('' + (i / count * 100) + '%');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});

\t\t\t/*document.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t\tvar elements = document.getElementsByTagName(\"INPUT\");
\t\t\t\tfor (var i = 0; i < elements.length; i++) {
\t\t\t\t\telements[i].oninvalid = function(e) {
\t\t\t\t\t\te.target.setCustomValidity(\"\");
\t\t\t\t\t\tif (!e.target.validity.valid) {
\t\t\t\t\t\t\te.target.setCustomValidity(\"This field cannot be left blank\");
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t\telements[i].oninput = function(e) {
\t\t\t\t\t\te.target.setCustomValidity(\"\");
\t\t\t\t\t};
\t\t\t\t}
\t\t\t});*/
\t\t</script>
    {% endblock %}
    </body>
</html>
", "front.html.twig", "/var/www/html/scjdchjdfdhjeseze/projet/templates/front.html.twig");
    }
}
