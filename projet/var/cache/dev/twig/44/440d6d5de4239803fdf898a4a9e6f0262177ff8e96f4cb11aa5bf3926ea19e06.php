<?php

/* front/ajout-salle.html.twig */
class __TwigTemplate_6884ec26e7d12fd2fea3781ea5094721a34418f84621dda2e2978a57542008b6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("front.html.twig", "front/ajout-salle.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'offre' => array($this, 'block_offre'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/ajout-salle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/ajout-salle.html.twig"));

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

        echo "Partager votre salle";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<style>
.nav-tabs {
    margin-bottom: 15px;
}
.sign-with {
    margin-top: 25px;
    padding: 20px;
}
div#OR {
    height: 30px;
    width: 30px;
    border: 1px solid #C2C2C2;
    border-radius: 50%;
    font-weight: bold;
    line-height: 28px;
    text-align: center;
    font-size: 12px;
    float: right;
    position: absolute;
    right: -16px;
    top: 40%;
    z-index: 1;
    background: #DFDFDF;
}
.a-tab:hover{
    height: 25px;
}

#LoginForm .form-group,
#SignupForm .form-group {
    margin-bottom: 0px;
}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_slide($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_offre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 49
        echo "<div class=\"mg-page-title parallax\" style=\"margin-top: 8.5%;\">
\t<div class=\"container \">
\t\t<div class=\"ro\">
            <div class=\"col-md-12\">
                <h2>Louer  votre salle</h2>
                <p style=\"text-shadow: 2px 2px #16262e; font-weight: bold; font-size: 18px;\">Sen Office vous permet de louer en toute sécurité votre salle de réunion, formation ou séminaire...</p>
            </div>
        </div>
    </div>
</div>

<!-- Large modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                    ×</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">
                    Connexion/Inscription</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\" style=\"border-right: 1px dotted #C2C2C2;padding-right: 30px;\">
                        <!-- Nav tabs -->
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a class=\"a-tab\" href=\"#Login\" data-toggle=\"tab\">Connexion</a></li>
                            <li><a class=\"a-tab\" href=\"#Registration\" data-toggle=\"tab\">Inscription</a></l>
                        </ul>
                        <!-- Tab panes -->
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"Login\">
                                <form id=\"LoginForm\"  method=\"post\" action=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" role=\"form\" class=\"form-horizontal\">
                                    <div class=\"alert alert-danger\" id=\"alert-error\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"email\" class=\"col-sm-4 control-label\">
                                            E-mail</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"text\" id=\"email\" name=\"_username\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"E-mail\" required/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"col-sm-4 control-label\">
                                            Mot de passe</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\" minlength=\"4\" required/>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                                    <!--<input type=\"hidden\" name=\"_failure_path\" value=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partager_salle_front");
        echo "\" />-->
                                    <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_salle");
        echo "\" />
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 col-sm-offset-4\">
                                            <button type=\"submit\" class=\"btn btn-main\">
                                                Se connecter
                                            </button>
                                            <img id=\"loading-verif\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/loading.gif"), "html", null, true);
        echo "\" alt=\"chargement...\">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class=\"tab-pane\" id=\"Registration\">
                                ";
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->source); })()), 'form_start', array("attr" => array("id" => "SignupForm", "class" => "form-horizontal", "role" => "form")));
        echo "
                                    <div class=\"form-group\">
                                        <label for=\"nomComplet\" class=\"col-sm-4 control-label\">
                                            Prénom et Nom
                                        </label>
                                        <div class=\"col-sm-8\">
                                            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->source); })()), "proprietaire", array()), "nomComplet", array())), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prénom et Nom")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"numPiece\" class=\"col-sm-4 control-label\">
                                            Numéro de pièce
                                        </label>
                                        <div class=\"col-sm-8\">
                                            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 126, $this->source); })()), "proprietaire", array()), "numPiece", array())), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "175619940126")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"adresse\" class=\"col-sm-4 control-label\">
                                            Adresse
                                        </label>
                                        <div class=\"col-sm-8\">
                                            ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->source); })()), "proprietaire", array()), "adresse", array())), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Colobane, Dakar")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"email\" class=\"col-sm-4 control-label\">
                                            E-mail</label>
                                        <div class=\"col-sm-8\">
                                            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 141, $this->source); })()), "email", array())), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "E-mail")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"telephone\" class=\"col-sm-4 control-label\">
                                            Téléphone
                                        </label>
                                        <div class=\"col-sm-8\">
                                            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->source); })()), "proprietaire", array()), "telephone", array())), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "775919686")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"username\" class=\"col-sm-4 control-label\">
                                            Nom d'utilisateur
                                        </label>
                                        <div class=\"col-sm-8\">
                                            ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->source); })()), "username", array())), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Username")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"col-sm-4 control-label\">
                                            Mot de passe
                                        </label>
                                        <div class=\"col-sm-8\">
                                            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 165, $this->source); })()), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mot de passe")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"col-sm-4 control-label\">
                                            Mot de passe
                                        </label>
                                        <div class=\"col-sm-8\">
                                            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 173, $this->source); })()), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Retapez le mot de passe")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-10 col-sm-offset-2\">
                                            <button type=\"submit\" class=\"btn btn-main\">
                                                S'inscrire & Continuer
                                            </button>
                                            <button type=\"reset\" class=\"btn btn-default\">
                                                Annuler
                                            </button>
                                        </div>
                                    </div>
                                ";
        // line 186
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 186, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                        <div id=\"OR\" class=\"hidden-xs\">
                            OU
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"row text-center sign-with\">
                            <div class=\"col-md-12\">
                                <h3>
                                    S'inscrire avec</h3>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"btn-group btn-group-justified\">
                                    <a href=\"#\" class=\"btn\" style=\"background: #0d47a1; color: white; border-radius: 5px 0px 0px 5px;\">Facebook</a>
                                    <a href=\"#\" class=\"btn\" style=\"background: red; color: white; border-radius: 0px 5px 5px 0px;\">Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"container\" style=\"margin-top: 1%; margin-bottom: 5%;\">
    <div class=\"row\" style=\"margin-right: 0; padding: 5px;\">
        <div class=\"mg-testi-partners parallax col-12 col-sm-6\" style=\"padding: 20px; background: white; color: #16262e;\">
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
        </div>
        <div class=\"mg-testi-partners parallax col-12 col-sm-6\" style=\"padding: 20px;\">
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
                ";
        // line 247
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 247, $this->source); })()), "user", array())) {
            // line 248
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_salle");
            echo "\" id=\"btn-authenticate\" class=\"btn btn-main\" data-toggle=\"modal\" data-target=\"\">
                    <span style=\"font-weight: bold; text-transform: upperCase;\">Je loue ma salle</span>
                </a>
                ";
        } else {
            // line 252
            echo "                    
                <button id=\"btn-authenticate\" class=\"btn btn-main\" data-toggle=\"modal\" data-target=\"#myModal\">
                    <span style=\"font-weight: bold; text-transform: upperCase;\">Je loue ma salle</span>
                </button>
                ";
        }
        // line 257
        echo "            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 264
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 267
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 270
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 273
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 274
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/js/authentication.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/ajout-salle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 275,  507 => 274,  498 => 273,  481 => 270,  464 => 267,  447 => 264,  432 => 257,  425 => 252,  417 => 248,  415 => 247,  351 => 186,  335 => 173,  324 => 165,  313 => 157,  302 => 149,  291 => 141,  281 => 134,  270 => 126,  259 => 118,  250 => 112,  241 => 106,  232 => 100,  228 => 99,  224 => 98,  211 => 88,  201 => 81,  167 => 49,  158 => 48,  141 => 45,  124 => 42,  79 => 6,  70 => 5,  52 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'front.html.twig' %}

{% block title %}Partager votre salle{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.nav-tabs {
    margin-bottom: 15px;
}
.sign-with {
    margin-top: 25px;
    padding: 20px;
}
div#OR {
    height: 30px;
    width: 30px;
    border: 1px solid #C2C2C2;
    border-radius: 50%;
    font-weight: bold;
    line-height: 28px;
    text-align: center;
    font-size: 12px;
    float: right;
    position: absolute;
    right: -16px;
    top: 40%;
    z-index: 1;
    background: #DFDFDF;
}
.a-tab:hover{
    height: 25px;
}

#LoginForm .form-group,
#SignupForm .form-group {
    margin-bottom: 0px;
}
</style>
{% endblock %}

{% block slide %}
{% endblock %}

{% block recherche %}
{% endblock %}

{% block offre %}
<div class=\"mg-page-title parallax\" style=\"margin-top: 8.5%;\">
\t<div class=\"container \">
\t\t<div class=\"ro\">
            <div class=\"col-md-12\">
                <h2>Louer  votre salle</h2>
                <p style=\"text-shadow: 2px 2px #16262e; font-weight: bold; font-size: 18px;\">Sen Office vous permet de louer en toute sécurité votre salle de réunion, formation ou séminaire...</p>
            </div>
        </div>
    </div>
</div>

<!-- Large modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                    ×</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">
                    Connexion/Inscription</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-8\" style=\"border-right: 1px dotted #C2C2C2;padding-right: 30px;\">
                        <!-- Nav tabs -->
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a class=\"a-tab\" href=\"#Login\" data-toggle=\"tab\">Connexion</a></li>
                            <li><a class=\"a-tab\" href=\"#Registration\" data-toggle=\"tab\">Inscription</a></l>
                        </ul>
                        <!-- Tab panes -->
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"Login\">
                                <form id=\"LoginForm\"  method=\"post\" action=\"{{ path('security_login') }}\" role=\"form\" class=\"form-horizontal\">
                                    <div class=\"alert alert-danger\" id=\"alert-error\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"email\" class=\"col-sm-4 control-label\">
                                            E-mail</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"text\" id=\"email\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"E-mail\" required/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"col-sm-4 control-label\">
                                            Mot de passe</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\" minlength=\"4\" required/>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                                    <!--<input type=\"hidden\" name=\"_failure_path\" value=\"{{ path('partager_salle_front') }}\" />-->
                                    <input type=\"hidden\" name=\"_target_path\" value=\"{{ path('ajouter_salle') }}\" />
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 col-sm-offset-4\">
                                            <button type=\"submit\" class=\"btn btn-main\">
                                                Se connecter
                                            </button>
                                            <img id=\"loading-verif\" src=\"{{asset('assets/images/loading.gif')}}\" alt=\"chargement...\">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class=\"tab-pane\" id=\"Registration\">
                                {{ form_start(form, {'attr': {'id': 'SignupForm', 'class': 'form-horizontal', 'role':'form'}}) }}
                                    <div class=\"form-group\">
                                        <label for=\"nomComplet\" class=\"col-sm-4 control-label\">
                                            Prénom et Nom
                                        </label>
                                        <div class=\"col-sm-8\">
                                            {{ form_widget(form.proprietaire.nomComplet |raw |e, {'attr': {'class': 'form-control', 'placeholder': 'Prénom et Nom'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"numPiece\" class=\"col-sm-4 control-label\">
                                            Numéro de pièce
                                        </label>
                                        <div class=\"col-sm-8\">
                                            {{ form_widget(form.proprietaire.numPiece |raw |e, {'attr': {'class': 'form-control', 'placeholder': '175619940126'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"adresse\" class=\"col-sm-4 control-label\">
                                            Adresse
                                        </label>
                                        <div class=\"col-sm-8\">
                                            {{ form_widget(form.proprietaire.adresse |raw |e, {'attr': {'class': 'form-control', 'placeholder': 'Colobane, Dakar'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"email\" class=\"col-sm-4 control-label\">
                                            E-mail</label>
                                        <div class=\"col-sm-8\">
                                            {{ form_widget(form.email |raw |e, {'attr': {'class': 'form-control', 'placeholder': 'E-mail'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"telephone\" class=\"col-sm-4 control-label\">
                                            Téléphone
                                        </label>
                                        <div class=\"col-sm-8\">
                                            {{ form_widget(form.proprietaire.telephone |raw |e, {'attr': {'class': 'form-control', 'placeholder': '775919686'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"username\" class=\"col-sm-4 control-label\">
                                            Nom d'utilisateur
                                        </label>
                                        <div class=\"col-sm-8\">
                                            {{ form_widget(form.username |raw |e, {'attr': {'class': 'form-control', 'placeholder': 'Username'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"col-sm-4 control-label\">
                                            Mot de passe
                                        </label>
                                        <div class=\"col-sm-8\">
                                            {{ form_widget(form.password.first, {'attr': {'class': 'form-control', 'placeholder': 'Mot de passe'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"col-sm-4 control-label\">
                                            Mot de passe
                                        </label>
                                        <div class=\"col-sm-8\">
                                            {{ form_widget(form.password.second, {'attr': {'class': 'form-control', 'placeholder': 'Retapez le mot de passe'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-10 col-sm-offset-2\">
                                            <button type=\"submit\" class=\"btn btn-main\">
                                                S'inscrire & Continuer
                                            </button>
                                            <button type=\"reset\" class=\"btn btn-default\">
                                                Annuler
                                            </button>
                                        </div>
                                    </div>
                                {{ form_end(form) }}
                            </div>
                        </div>
                        <div id=\"OR\" class=\"hidden-xs\">
                            OU
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"row text-center sign-with\">
                            <div class=\"col-md-12\">
                                <h3>
                                    S'inscrire avec</h3>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"btn-group btn-group-justified\">
                                    <a href=\"#\" class=\"btn\" style=\"background: #0d47a1; color: white; border-radius: 5px 0px 0px 5px;\">Facebook</a>
                                    <a href=\"#\" class=\"btn\" style=\"background: red; color: white; border-radius: 0px 5px 5px 0px;\">Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"container\" style=\"margin-top: 1%; margin-bottom: 5%;\">
    <div class=\"row\" style=\"margin-right: 0; padding: 5px;\">
        <div class=\"mg-testi-partners parallax col-12 col-sm-6\" style=\"padding: 20px; background: white; color: #16262e;\">
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
        </div>
        <div class=\"mg-testi-partners parallax col-12 col-sm-6\" style=\"padding: 20px;\">
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
            </div>
            <div>
                <p>
                    Proposez la location de votre salle de réunion ou salle de séminaire et obtenez un revenu complémentaire. La création d'une annonce pour louer une salle sur Bird Office est gratuite et sans engagement !
                </p>
                {% if  app.user %}
                <a href=\"{{path('ajouter_salle')}}\" id=\"btn-authenticate\" class=\"btn btn-main\" data-toggle=\"modal\" data-target=\"\">
                    <span style=\"font-weight: bold; text-transform: upperCase;\">Je loue ma salle</span>
                </a>
                {% else %}
                    
                <button id=\"btn-authenticate\" class=\"btn btn-main\" data-toggle=\"modal\" data-target=\"#myModal\">
                    <span style=\"font-weight: bold; text-transform: upperCase;\">Je loue ma salle</span>
                </button>
                {% endif %}
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block apropos %}
{% endblock %}

{% block partenaires %}
{% endblock %}

{% block galerie %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{asset ('assets/template/js/authentication.js')}}\"></script>
{% endblock %}
", "front/ajout-salle.html.twig", "/var/www/html/scjdchjdfdhjeseze/projet/templates/front/ajout-salle.html.twig");
    }
}
