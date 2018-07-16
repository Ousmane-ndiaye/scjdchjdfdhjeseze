<?php

/* front/ajout-salle.html.twig */
class __TwigTemplate_780ea48987140bdacb4ef7f019616067997186ca5bb223096b586a0d7759e450 extends Twig_Template
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
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_slide($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_offre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 44
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
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" role=\"form\" class=\"form-horizontal\">
                                    ";
        // line 77
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 77, $this->source); })())) {
            // line 78
            echo "                                        <div class=\"alert alert-danger\">
                                            ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 79, $this->source); })()), "message", array()), "html", null, true);
            echo "
                                        </div>
                                    ";
        }
        // line 82
        echo "                                    <div class=\"form-group\">
                                        <label for=\"email\" class=\"col-sm-4 control-label\">
                                            Username</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Username\" required/>
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
        // line 96
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 col-sm-offset-4\">
                                            <button type=\"submit\" class=\"btn btn-main\">
                                                Se connecter
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class=\"tab-pane\" id=\"Registration\">
                                <!--<form id=\"SignupForm\" method=\"post\" action=\"\" role=\"form\" class=\"form-horizontal\">
                                    <div class=\"form-group\">
                                        <label for=\"nomComplet\" class=\"col-sm-4 control-label\">
                                            Prénom et nom</label>
                                        <div class=\"col-sm-8\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <select name=\"sexe\" class=\"form-control\" required />
                                                        <option value=\"\">Sexe</option>
                                                        <option value=\"m\">M.</option>
                                                        <option value=\"f\">Mme.</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-md-8\">
                                                    <input type=\"text\" name=\"nomComplet\" class=\"form-control\" placeholder=\"Prénom et nom\" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"email\" class=\"col-sm-4 control-label\">
                                            Email</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"emailI\" placeholder=\"Email\" required/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"mobile\" class=\"col-sm-4 control-label\">
                                            Téléphone</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"number\" name=\"tel\" class=\"form-control\" id=\"mobile\" placeholder=\"775919686\" size=\"20\" minlength=\"9\" maxlength=\"14\" required />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"col-sm-4 control-label\">
                                            Mot de passe</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"password\" class=\"form-control\" id=\"passwordI\" placeholder=\"Password\" minlength=\"4\" required/>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-10 col-sm-offset-2\">
                                            <button type=\"submit\" class=\"btn btn-main\">
                                                S'inscrire & Continuer
                                            </button>
                                            <button type=\"button\" class=\"btn btn-default\">
                                                Annuler
                                            </button>
                                        </div>
                                    </div>
                                </form>-->
                                ";
        // line 158
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->source); })()), 'form_start');
        echo "
                                    ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->source); })()), "username", array()), 'row');
        echo "
                                    ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 160, $this->source); })()), "email", array()), 'row');
        echo "
                                    ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 161, $this->source); })()), "password", array()), "first", array()), 'row');
        echo "
                                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 162, $this->source); })()), "password", array()), "second", array()), 'row');
        echo "

                                    <button type=\"submit\" class=\"btn btn-success\">S'inscrire !</button>
                                ";
        // line 165
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 165, $this->source); })()), 'form_end');
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
                <button class=\"btn btn-main\" data-toggle=\"modal\" data-target=\"#myModal\">
                    <span style=\"font-weight: bold; text-transform: upperCase;\">Je loue ma salle</span>
                </button>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 236
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 239
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 242
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
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
        return array (  430 => 242,  413 => 239,  396 => 236,  316 => 165,  310 => 162,  306 => 161,  302 => 160,  298 => 159,  294 => 158,  229 => 96,  216 => 86,  210 => 82,  204 => 79,  201 => 78,  199 => 77,  195 => 76,  161 => 44,  152 => 43,  135 => 40,  118 => 37,  78 => 6,  69 => 5,  51 => 3,  15 => 1,);
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
                                    {% if error %}
                                        <div class=\"alert alert-danger\">
                                            {{ error.message }}
                                        </div>
                                    {% endif %}
                                    <div class=\"form-group\">
                                        <label for=\"email\" class=\"col-sm-4 control-label\">
                                            Username</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"Username\" required/>
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
                                    <div class=\"row\">
                                        <div class=\"col-sm-8 col-sm-offset-4\">
                                            <button type=\"submit\" class=\"btn btn-main\">
                                                Se connecter
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class=\"tab-pane\" id=\"Registration\">
                                <!--<form id=\"SignupForm\" method=\"post\" action=\"\" role=\"form\" class=\"form-horizontal\">
                                    <div class=\"form-group\">
                                        <label for=\"nomComplet\" class=\"col-sm-4 control-label\">
                                            Prénom et nom</label>
                                        <div class=\"col-sm-8\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <select name=\"sexe\" class=\"form-control\" required />
                                                        <option value=\"\">Sexe</option>
                                                        <option value=\"m\">M.</option>
                                                        <option value=\"f\">Mme.</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-md-8\">
                                                    <input type=\"text\" name=\"nomComplet\" class=\"form-control\" placeholder=\"Prénom et nom\" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"email\" class=\"col-sm-4 control-label\">
                                            Email</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"emailI\" placeholder=\"Email\" required/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"mobile\" class=\"col-sm-4 control-label\">
                                            Téléphone</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"number\" name=\"tel\" class=\"form-control\" id=\"mobile\" placeholder=\"775919686\" size=\"20\" minlength=\"9\" maxlength=\"14\" required />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"col-sm-4 control-label\">
                                            Mot de passe</label>
                                        <div class=\"col-sm-8\">
                                            <input type=\"password\" class=\"form-control\" id=\"passwordI\" placeholder=\"Password\" minlength=\"4\" required/>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-10 col-sm-offset-2\">
                                            <button type=\"submit\" class=\"btn btn-main\">
                                                S'inscrire & Continuer
                                            </button>
                                            <button type=\"button\" class=\"btn btn-default\">
                                                Annuler
                                            </button>
                                        </div>
                                    </div>
                                </form>-->
                                {{ form_start(form) }}
                                    {{ form_row(form.username) }}
                                    {{ form_row(form.email) }}
                                    {{ form_row(form.password.first) }}
                                    {{ form_row(form.password.second) }}

                                    <button type=\"submit\" class=\"btn btn-success\">S'inscrire !</button>
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
                <button class=\"btn btn-main\" data-toggle=\"modal\" data-target=\"#myModal\">
                    <span style=\"font-weight: bold; text-transform: upperCase;\">Je loue ma salle</span>
                </button>
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
", "front/ajout-salle.html.twig", "/var/www/html/html/Projets/Personnel/My-Office/projet/templates/front/ajout-salle.html.twig");
    }
}
