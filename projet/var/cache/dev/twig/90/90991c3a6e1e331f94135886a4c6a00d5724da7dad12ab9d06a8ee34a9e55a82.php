<?php

/* account/salle/detail.html.twig */
class __TwigTemplate_0f9233d26d6c4c0daefd9d2b64900ef6c0b8626d58a44388083954c477d0aa9f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("account/base.html.twig", "account/salle/detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titrepage' => array($this, 'block_titrepage'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'filedarian' => array($this, 'block_filedarian'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "account/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/salle/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/salle/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new Twig_Error_Runtime('Variable "salle" does not exist.', 3, $this->source); })()), "nomComplet", array()), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_titrepage($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrepage"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new Twig_Error_Runtime('Variable "salle" does not exist.', 5, $this->source); })()), "nomComplet", array()), "html", null, true);
        echo " !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <!-- Plugin Css-->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/magnific-popup/dist/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery-datatables-editable/datatables.css"), "html", null, true);
        echo "\">
    ";
        // line 11
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/tagsinput/jquery.tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/toggles/toggles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/timepicker/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/colorpicker/colorpicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_filedarian($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filedarian"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filedarian"));

        // line 24
        echo "<li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_account");
        echo "\">Sen office</a></li>
<li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_salle");
        echo "\">Mes salles</a></li>
<li class=\"active\">details ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new Twig_Error_Runtime('Variable "salle" does not exist.', 26, $this->source); })()), "nomComplet", array()), "html", null, true);
        echo "</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 30
        echo "    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><h3 class=\"panel-title\">Informations</h3></div>
                <div class=\"panel-body\">
                    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), 'form_start', array("attr" => array("class" => "form-horizontal", "role" => "form")));
        echo "
                        <div class=\"form-group\">
                            <label>Nom de la salle</label>
                            <div class=\"col-md-12\">
                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "nomComplet", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prénom et Nom")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Adresse</label>
                            <div class=\"col-md-12\">
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "cArrondissement", array()), 'widget', array("attr" => array("class" => "select2 form-control", "data-placeholder" => "Choisir votre adresse...")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Quartier</label>
                            <div class=\"col-md-12\">
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "quartier", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre quartier, Rue")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Type de salle</label>
                            <div class=\"col-md-12\">
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "typeDeBien", array()), 'widget', array("attr" => array("class" => "select2 form-control", "data-placeholder" => "Choisir votre adresse...")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Nombre de place</label>
                            <div class=\"col-md-12\">
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "nbreDeplaces", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de place de salle")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Prix de location (<span class=\"text-danger\">FCFA</span>)</label>
                            <div class=\"col-md-12\">
                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "prixLocation", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "12000")));
        echo "
                                <span class=\"help-block\"><small>Renseigner le prix sans espace ni de FCFA à la fin.</small></span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Description</label>
                            <div class=\"col-md-12\">
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "5", "placeholder" => "Décrivez nous un peut votre salle...")));
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-3 col-sm-6 col-sm-offset-3\">
                                <button type=\"submit\" class=\"btn btn-block btn-lg btn-primary waves-effect waves-light\">AJouter</button>
                            </div>
                        </div>
                    ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
        echo "
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->

        <div class=\"col-sm-8\">
            <div class=\"panel\">
                <div class=\"panel-heading\"><h3 class=\"panel-title\">Horaires d'ouverture</h3></div>
                    <div class=\"panel-body\" style=\"overflow: auto;\">
                        <table class=\"table table-bordered table-striped\" id=\"datatable-editable\" data-leschamps=\"ref, jour, disponible, hOuverture, hFermeture\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Jour</th>
                                    <th>Ouvrable</th>
                                    <th>Ouverture</th>
                                    <th>Fermeture</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ouvrables"]) || array_key_exists("ouvrables", $context) ? $context["ouvrables"] : (function () { throw new Twig_Error_Runtime('Variable "ouvrables" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ouvrable"]) {
            // line 107
            echo "                                <tr class=\"gradeX\">
                                    <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ouvrable"], "jour", array()), "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ouvrable"], "jour", array()), "libelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 111
            if (twig_get_attribute($this->env, $this->source, $context["ouvrable"], "disponible", array())) {
                // line 112
                echo "                                            OUI
                                        ";
            } else {
                // line 114
                echo "                                            NON
                                        ";
            }
            // line 116
            echo "                                    </td>
                                    <td data-id=\"";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ouvrable"], "id", array()), "html", null, true);
            echo "\">
                                        ";
            // line 118
            if (twig_get_attribute($this->env, $this->source, $context["ouvrable"], "disponible", array())) {
                // line 119
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ouvrable"], "ouverture", array()), "H:i"), "html", null, true);
                echo "
                                        ";
            } else {
                // line 121
                echo "                                            -
                                        ";
            }
            // line 123
            echo "                                    </td>
                                    <td data-id=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ouvrable"], "id", array()), "html", null, true);
            echo "\">
                                        ";
            // line 125
            if (twig_get_attribute($this->env, $this->source, $context["ouvrable"], "disponible", array())) {
                // line 126
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ouvrable"], "fermeture", array()), "H:i"), "html", null, true);
                echo "
                                        ";
            } else {
                // line 128
                echo "                                            -
                                        ";
            }
            // line 130
            echo "                                    </td>
                                    <td class=\"actions\">
                                        <a href=\"#\" data-id=\"";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ouvrable"], "id", array()), "html", null, true);
            echo "\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                        <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                        <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ouvrable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                            </tbody>
                        </table>
                    </div>
                    <!-- end: page -->
                </div> <!-- end Panel -->
            </div>
        </div> <!-- col -->

    </div> <!-- End row -->

<!-- MODAL -->
<div id=\"dialog\" class=\"modal-block mfp-hide\">
    <section class=\"panel panel-info panel-color\">
        <header class=\"panel-heading\">
            <h2 class=\"panel-title\">Etes vous Sûre?</h2>
        </header>
        <div class=\"panel-body\">
            <div class=\"modal-wrapper\">
                <div class=\"modal-text\">
                    <p>Voulez vous vraiment supprimmer?</p>
                </div>
            </div>

            <div class=\"m-t-20\">
                <div class=\"text-right\">
                    <button type=\"button\" id=\"dialogConfirm\" class=\"btn btn-primary waves-effect waves-light\">Confirm</button>
                    <button type=\"button\" id=\"dialogCancel\" class=\"btn btn-default waves-effect\">Annuler</button>
                </div>
            </div>
        </div>

    </section>
</div>
<!-- end Modal -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 175
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 176
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/toggles/toggles.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/colorpicker/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery-multi-select/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery-multi-select/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Examples -->
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/datatable.ouvrable.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(document).ready(function() {
            // Select2
            jQuery(\".select2\").select2({
                width: '100%'
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/salle/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 192,  487 => 191,  483 => 190,  479 => 189,  473 => 186,  469 => 185,  465 => 184,  461 => 183,  457 => 182,  453 => 181,  449 => 180,  445 => 179,  441 => 178,  437 => 177,  432 => 176,  423 => 175,  379 => 139,  366 => 132,  362 => 130,  358 => 128,  352 => 126,  350 => 125,  346 => 124,  343 => 123,  339 => 121,  333 => 119,  331 => 118,  327 => 117,  324 => 116,  320 => 114,  316 => 112,  314 => 111,  309 => 109,  305 => 108,  302 => 107,  298 => 106,  274 => 85,  262 => 76,  252 => 69,  243 => 63,  234 => 57,  225 => 51,  216 => 45,  207 => 39,  200 => 35,  193 => 30,  184 => 29,  172 => 26,  168 => 25,  163 => 24,  154 => 23,  141 => 19,  137 => 18,  133 => 17,  129 => 16,  125 => 15,  121 => 14,  117 => 13,  113 => 12,  109 => 11,  105 => 10,  101 => 9,  98 => 8,  89 => 7,  69 => 5,  49 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'account/base.html.twig' %}

{% block title %} {{ salle.nomComplet }} {% endblock %}

{% block titrepage %} {{ salle.nomComplet }} !{% endblock %}

{% block stylesheets %}
    <!-- Plugin Css-->
    <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/magnific-popup/dist/magnific-popup.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/jquery-datatables-editable/datatables.css')}}\">
    {{ parent() }}
    <link href=\"{{asset('assets/plugins/tagsinput/jquery.tagsinput.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/plugins/toggles/toggles.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/plugins/timepicker/bootstrap-timepicker.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/plugins/colorpicker/colorpicker.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{asset('assets/plugins/select2/dist/css/select2.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/plugins/select2/dist/css/select2-bootstrap.css')}}\" rel=\"stylesheet\" type=\"text/css\">

{% endblock %}

{% block filedarian %}
<li><a href=\"{{path('accueil_account')}}\">Sen office</a></li>
<li><a href=\"{{path('liste_salle')}}\">Mes salles</a></li>
<li class=\"active\">details {{ salle.nomComplet }}</li>
{% endblock %}

{% block main %}
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><h3 class=\"panel-title\">Informations</h3></div>
                <div class=\"panel-body\">
                    {{ form_start(form, {'attr': {'class': 'form-horizontal', 'role': 'form'}}) }}
                        <div class=\"form-group\">
                            <label>Nom de la salle</label>
                            <div class=\"col-md-12\">
                                {{ form_widget(form.nomComplet, {'attr': {'class': 'form-control', 'placeholder': 'Prénom et Nom'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Adresse</label>
                            <div class=\"col-md-12\">
                                {{ form_widget(form.cArrondissement, {'attr': {'class': 'select2 form-control', 'data-placeholder': 'Choisir votre adresse...'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Quartier</label>
                            <div class=\"col-md-12\">
                                {{ form_widget(form.quartier, {'attr': {'class': 'form-control', 'placeholder': 'Votre quartier, Rue'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Type de salle</label>
                            <div class=\"col-md-12\">
                                {{ form_widget(form.typeDeBien, {'attr': {'class': 'select2 form-control', 'data-placeholder': 'Choisir votre adresse...'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Nombre de place</label>
                            <div class=\"col-md-12\">
                                {{ form_widget(form.nbreDeplaces, {'attr': {'class': 'form-control', 'placeholder': 'Nombre de place de salle'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Prix de location (<span class=\"text-danger\">FCFA</span>)</label>
                            <div class=\"col-md-12\">
                                {{ form_widget(form.prixLocation, {'attr': {'class': 'form-control', 'placeholder': '12000'}}) }}
                                <span class=\"help-block\"><small>Renseigner le prix sans espace ni de FCFA à la fin.</small></span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Description</label>
                            <div class=\"col-md-12\">
                                {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': '5', 'placeholder': 'Décrivez nous un peut votre salle...'}}) }}
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-3 col-sm-6 col-sm-offset-3\">
                                <button type=\"submit\" class=\"btn btn-block btn-lg btn-primary waves-effect waves-light\">AJouter</button>
                            </div>
                        </div>
                    {{ form_end(form) }}
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->

        <div class=\"col-sm-8\">
            <div class=\"panel\">
                <div class=\"panel-heading\"><h3 class=\"panel-title\">Horaires d'ouverture</h3></div>
                    <div class=\"panel-body\" style=\"overflow: auto;\">
                        <table class=\"table table-bordered table-striped\" id=\"datatable-editable\" data-leschamps=\"ref, jour, disponible, hOuverture, hFermeture\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Jour</th>
                                    <th>Ouvrable</th>
                                    <th>Ouverture</th>
                                    <th>Fermeture</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for ouvrable in ouvrables %}
                                <tr class=\"gradeX\">
                                    <td>{{ ouvrable.jour.id }}</td>
                                    <td>{{ ouvrable.jour.libelle }}</td>
                                    <td>
                                        {% if ouvrable.disponible %}
                                            OUI
                                        {% else %}
                                            NON
                                        {% endif %}
                                    </td>
                                    <td data-id=\"{{ ouvrable.id }}\">
                                        {% if ouvrable.disponible %}
                                            {{ ouvrable.ouverture | date(\"H:i\") }}
                                        {% else %}
                                            -
                                        {% endif %}
                                    </td>
                                    <td data-id=\"{{ ouvrable.id }}\">
                                        {% if ouvrable.disponible %}
                                            {{ ouvrable.fermeture | date(\"H:i\") }}
                                        {% else %}
                                            -
                                        {% endif %}
                                    </td>
                                    <td class=\"actions\">
                                        <a href=\"#\" data-id=\"{{ ouvrable.id }}\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                        <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                        <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <!-- end: page -->
                </div> <!-- end Panel -->
            </div>
        </div> <!-- col -->

    </div> <!-- End row -->

<!-- MODAL -->
<div id=\"dialog\" class=\"modal-block mfp-hide\">
    <section class=\"panel panel-info panel-color\">
        <header class=\"panel-heading\">
            <h2 class=\"panel-title\">Etes vous Sûre?</h2>
        </header>
        <div class=\"panel-body\">
            <div class=\"modal-wrapper\">
                <div class=\"modal-text\">
                    <p>Voulez vous vraiment supprimmer?</p>
                </div>
            </div>

            <div class=\"m-t-20\">
                <div class=\"text-right\">
                    <button type=\"button\" id=\"dialogConfirm\" class=\"btn btn-primary waves-effect waves-light\">Confirm</button>
                    <button type=\"button\" id=\"dialogCancel\" class=\"btn btn-default waves-effect\">Annuler</button>
                </div>
            </div>
        </div>

    </section>
</div>
<!-- end Modal -->
{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script src=\"{{asset('assets/plugins/select2/dist/js/select2.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/plugins/tagsinput/jquery.tagsinput.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/toggles/toggles.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/timepicker/bootstrap-timepicker.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('assets/plugins/colorpicker/bootstrap-colorpicker.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('assets/plugins/jquery-multi-select/jquery.multi-select.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('assets/plugins/jquery-multi-select/jquery.quicksearch.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}\" type=\"text/javascript\"></script>

    <!-- Examples -->
    <script src=\"{{asset('assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}\"></script>
    <script src=\"{{asset('assets/pages/datatable.ouvrable.js')}}\"></script>
    <script>
        jQuery(document).ready(function() {
            // Select2
            jQuery(\".select2\").select2({
                width: '100%'
            });
        });
    </script>
{% endblock %}", "account/salle/detail.html.twig", "/var/www/html/scjdchjdfdhjeseze/projet/templates/account/salle/detail.html.twig");
    }
}
