<?php

/* account/salle/add.html.twig */
class __TwigTemplate_5872f29496ecc470273d0a674cf09a7d753cd9137a640fe39b018d6e55197b7b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("account/base.html.twig", "account/salle/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titrepage' => array($this, 'block_titrepage'),
            'filedarian' => array($this, 'block_filedarian'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/salle/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/salle/add.html.twig"));

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

        echo " PARTAGER UNE SALLE ";
        
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

        echo "CRÉATION D'UNE NOUVELLE SALLE !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_filedarian($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filedarian"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filedarian"));

        // line 8
        echo "<li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_account");
        echo "\">Sen office</a></li>
<li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_salle");
        echo "\">Mes salles</a></li>
<li class=\"active\">Nouvelle salle</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/tagsinput/jquery.tagsinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/toggles/toggles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/timepicker/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/colorpicker/colorpicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/select2/dist/css/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 26
        echo "<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h3 class=\"panel-title\">Nouvelle salle</h3></div>
            <div class=\"panel-body\">
                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), 'form_start', array("attr" => array("class" => "form-horizontal", "role" => "form")));
        echo "

                    <div class=\"panel-heading\"><h3 class=\"panel-title\">Information sur la salle</h3></div>

                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Nom de la salle</label>
                        <div class=\"col-md-10\">
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "nomComplet", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la Salle")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Adresse</label>
                        <div class=\"col-md-10\">
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "cArrondissement", array()), 'widget', array("attr" => array("class" => "select2 form-control", "data-placeholder" => "Choisir votre adresse...")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Quartier</label>
                        <div class=\"col-md-10\">
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "quartier", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre quartier, Rue")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Type de salle</label>
                        <div class=\"col-md-10\">
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "typeDeBien", array()), 'widget', array("attr" => array("class" => "select2 form-control", "data-placeholder" => "Choisir votre adresse...")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Nombre de places</label>
                        <div class=\"col-md-10\">
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "nbreDeplaces", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de place de salle")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Prix de location (<span class=\"text-danger\">FCFA</span>)</label>
                        <div class=\"col-md-10\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "prixLocation", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "12000")));
        echo "
                            <span class=\"help-block\"><small>Renseigner le prix sans espace ni de FCFA à la fin. Ex: 12000.</small></span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Description</label>
                        <div class=\"col-md-10\">
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "5", "placeholder" => "Décrivez nous un peut votre salle...")));
        echo "
                        </div>
                    </div>
                    <!-- FIN DES INFORMATION SUR LA SALLE -->
                    <div class=\"panel-heading\"><h3 class=\"panel-title\">Disponibilité de la salle</h3></div>

                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jours"]) || array_key_exists("jours", $context) ? $context["jours"] : (function () { throw new Twig_Error_Runtime('Variable "jours" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
            // line 82
            echo "                        <div class=\"row\">
                            <div class=\"col-sm-2\" style=\"padding-top: 23px;\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-6 control-label\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jour"], "libelle", array()), "html", null, true);
            echo "</label>
                                    <div class=\"col-sm-6 control-label\">
                                        <div class=\"toggle toggle-success\" id=\"jour-";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jour"], "id", array()), "html", null, true);
            echo "\"></div>
                                        <input type=\"hidden\" name=\"jour_";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jour"], "id", array()), "html", null, true);
            echo "\" value=\"OUI\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-1 horaire-du-jour disponible-24h\" style=\"padding-top: 25px;\">
                                <div class=\"form-group\">
                                    <div class=\"checkbox checkbox-primary\">
                                        <input name=\"24h_24_";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jour"], "id", array()), "html", null, true);
            echo "\" id=\"checkbox";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jour"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\">
                                        <label for=\"checkbox";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jour"], "id", array()), "html", null, true);
            echo "\">
                                            24h/24
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-1 horaire-du-jour not-disponible-24h\" style=\"padding-top: 30px;\">
                                <span class=\"text-info\" style=\"padding-left: 15px;\">ou</span>
                            </div>
                            <div class=\"col-sm-4 horaire-du-jour not-disponible-24h\">
                                <label>Heure d'Ouverture</label>
                                <div class=\"input-group m-b-15\">
                                    <div class=\"bootstrap-timepicker\"><input id=\"hOuverture";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jour"], "id", array()), "html", null, true);
            echo "\" name=\"hOuverture";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jour"], "id", array()), "html", null, true);
            echo "\" type=\"text\" class=\"form-control\"></div>
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-time\"></i></span>
                                </div><!-- input-group -->
                            </div>
                            <div class=\"col-sm-4 horaire-du-jour not-disponible-24h\">
                                <label>Heure de Fermeture</label>
                                <div class=\"input-group m-b-15\">
                                    <div class=\"bootstrap-timepicker\"><input id=\"hFermeture";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jour"], "id", array()), "html", null, true);
            echo "\" name=\"hFermeture";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jour"], "id", array()), "html", null, true);
            echo "\" type=\"text\" class=\"form-control\"></div>
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-time\"></i></span>
                                </div><!-- input-group -->
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
                    <div class=\"panel-heading\"><h3 class=\"panel-title\">&nbsp;</h3></div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-3 col-sm-6 col-sm-offset-3\">
                            <button type=\"submit\" class=\"btn btn-block btn-lg btn-primary waves-effect waves-light\">AJouter</button>
                        </div>
                    </div>
                ";
        // line 129
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 129, $this->source); })()), 'form_end');
        echo "
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col -->
</div> <!-- End row -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/toggles/toggles.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/colorpicker/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery-multi-select/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery-multi-select/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        jQuery(document).ready(function() {
            // Form Toggles With options (defaults shown below)
            \$('.toggle').toggles({
                drag: true, // allow dragging the toggle between positions
                click: true, // allow clicking on the toggle
                text: {
                    on: 'OUI', // text for the ON position
                    off: 'NON' // and off
                },
                on: true, // is the toggle ON on init
                animate: 250, // animation time (ms)
                easing: 'swing', // animation transition easing function
                checkbox: null, // the checkbox to toggle (for use in forms)
                clicker: null, // element that can be clicked on to toggle. removes binding from the toggle itself (use nesting)
                width: 50, // width used if not set in css
                height: 20, // height if not set in css
                type: 'compact' // if this is set to 'select' then the select style toggle will be used
            });

            // Getting notified of changes, and the new state:
            \$('.toggle').on('toggle', function(e, active) {
                if (active) {
                    \$(this).next('input').val('OUI');
                    \$(this).closest('.row').find('.disponible-24h input:checkbox').each(function(){
                        if(\$(this).is(\":checked\")){
                            \$(this).closest('.disponible-24h').removeClass('hide');
                        } else {
                            \$(this).closest('.row').find('.horaire-du-jour').removeClass('hide');
                        }
                    })
                } else {
                    \$(this).next('input').val('NON');
                    \$(this).closest('.row').find('.horaire-du-jour').addClass('hide');
                }
            });

            \$('.disponible-24h').find(\"input:checkbox\").on('change', function(){
                if(\$(this).is(\":checked\")){
                    \$(this).closest('.row').find('.not-disponible-24h').addClass('hide');
                } else {
                    \$(this).closest('.row').find('.not-disponible-24h').removeClass('hide');
                }
            });

            // Time Picker
            for (let i = 1; i <= 7; i++) {
                jQuery('#hOuverture' + i).timepicker({showMeridian: false});
                jQuery('#hFermeture' + i).timepicker({showMeridian: false});
            }

            // Date Picker
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker-inline').datepicker();
            jQuery('#datepicker-multiple').datepicker({
                numberOfMonths: 3,
                showButtonPanel: true
            });

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
        return "account/salle/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 147,  403 => 146,  399 => 145,  395 => 144,  391 => 143,  387 => 142,  383 => 141,  379 => 140,  375 => 139,  371 => 138,  366 => 137,  357 => 136,  341 => 129,  331 => 121,  317 => 115,  305 => 108,  290 => 96,  284 => 95,  274 => 88,  270 => 87,  265 => 85,  260 => 82,  256 => 81,  247 => 75,  237 => 68,  228 => 62,  219 => 56,  210 => 50,  201 => 44,  192 => 38,  182 => 31,  175 => 26,  166 => 25,  154 => 22,  150 => 21,  146 => 20,  142 => 19,  138 => 18,  134 => 17,  130 => 16,  126 => 15,  121 => 14,  112 => 13,  99 => 9,  94 => 8,  85 => 7,  67 => 5,  49 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'account/base.html.twig' %}

{% block title %} PARTAGER UNE SALLE {% endblock %}

{% block titrepage %}CRÉATION D'UNE NOUVELLE SALLE !{% endblock %}

{% block filedarian %}
<li><a href=\"{{path('accueil_account')}}\">Sen office</a></li>
<li><a href=\"{{path('liste_salle')}}\">Mes salles</a></li>
<li class=\"active\">Nouvelle salle</li>
{% endblock %}

{% block stylesheets %}
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

{% block main %}
<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h3 class=\"panel-title\">Nouvelle salle</h3></div>
            <div class=\"panel-body\">
                {{ form_start(form, {'attr': {'class': 'form-horizontal', 'role': 'form'}}) }}

                    <div class=\"panel-heading\"><h3 class=\"panel-title\">Information sur la salle</h3></div>

                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Nom de la salle</label>
                        <div class=\"col-md-10\">
                            {{ form_widget(form.nomComplet, {'attr': {'class': 'form-control', 'placeholder': 'Nom de la Salle'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Adresse</label>
                        <div class=\"col-md-10\">
                            {{ form_widget(form.cArrondissement, {'attr': {'class': 'select2 form-control', 'data-placeholder': 'Choisir votre adresse...'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Quartier</label>
                        <div class=\"col-md-10\">
                            {{ form_widget(form.quartier, {'attr': {'class': 'form-control', 'placeholder': 'Votre quartier, Rue'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Type de salle</label>
                        <div class=\"col-md-10\">
                            {{ form_widget(form.typeDeBien, {'attr': {'class': 'select2 form-control', 'data-placeholder': 'Choisir votre adresse...'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Nombre de places</label>
                        <div class=\"col-md-10\">
                            {{ form_widget(form.nbreDeplaces, {'attr': {'class': 'form-control', 'placeholder': 'Nombre de place de salle'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Prix de location (<span class=\"text-danger\">FCFA</span>)</label>
                        <div class=\"col-md-10\">
                            {{ form_widget(form.prixLocation, {'attr': {'class': 'form-control', 'placeholder': '12000'}}) }}
                            <span class=\"help-block\"><small>Renseigner le prix sans espace ni de FCFA à la fin. Ex: 12000.</small></span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-2 control-label\">Description</label>
                        <div class=\"col-md-10\">
                            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': '5', 'placeholder': 'Décrivez nous un peut votre salle...'}}) }}
                        </div>
                    </div>
                    <!-- FIN DES INFORMATION SUR LA SALLE -->
                    <div class=\"panel-heading\"><h3 class=\"panel-title\">Disponibilité de la salle</h3></div>

                    {% for jour in jours %}
                        <div class=\"row\">
                            <div class=\"col-sm-2\" style=\"padding-top: 23px;\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-6 control-label\">{{ jour.libelle }}</label>
                                    <div class=\"col-sm-6 control-label\">
                                        <div class=\"toggle toggle-success\" id=\"jour-{{ jour.id }}\"></div>
                                        <input type=\"hidden\" name=\"jour_{{ jour.id }}\" value=\"OUI\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-1 horaire-du-jour disponible-24h\" style=\"padding-top: 25px;\">
                                <div class=\"form-group\">
                                    <div class=\"checkbox checkbox-primary\">
                                        <input name=\"24h_24_{{jour.id}}\" id=\"checkbox{{jour.id}}\" type=\"checkbox\">
                                        <label for=\"checkbox{{jour.id}}\">
                                            24h/24
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-1 horaire-du-jour not-disponible-24h\" style=\"padding-top: 30px;\">
                                <span class=\"text-info\" style=\"padding-left: 15px;\">ou</span>
                            </div>
                            <div class=\"col-sm-4 horaire-du-jour not-disponible-24h\">
                                <label>Heure d'Ouverture</label>
                                <div class=\"input-group m-b-15\">
                                    <div class=\"bootstrap-timepicker\"><input id=\"hOuverture{{ jour.id }}\" name=\"hOuverture{{ jour.id }}\" type=\"text\" class=\"form-control\"></div>
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-time\"></i></span>
                                </div><!-- input-group -->
                            </div>
                            <div class=\"col-sm-4 horaire-du-jour not-disponible-24h\">
                                <label>Heure de Fermeture</label>
                                <div class=\"input-group m-b-15\">
                                    <div class=\"bootstrap-timepicker\"><input id=\"hFermeture{{ jour.id }}\" name=\"hFermeture{{ jour.id }}\" type=\"text\" class=\"form-control\"></div>
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-time\"></i></span>
                                </div><!-- input-group -->
                            </div>
                        </div>
                    {% endfor %}

                    <div class=\"panel-heading\"><h3 class=\"panel-title\">&nbsp;</h3></div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-3 col-sm-6 col-sm-offset-3\">
                            <button type=\"submit\" class=\"btn btn-block btn-lg btn-primary waves-effect waves-light\">AJouter</button>
                        </div>
                    </div>
                {{ form_end(form) }}
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col -->
</div> <!-- End row -->
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
    <script>
        jQuery(document).ready(function() {
            // Form Toggles With options (defaults shown below)
            \$('.toggle').toggles({
                drag: true, // allow dragging the toggle between positions
                click: true, // allow clicking on the toggle
                text: {
                    on: 'OUI', // text for the ON position
                    off: 'NON' // and off
                },
                on: true, // is the toggle ON on init
                animate: 250, // animation time (ms)
                easing: 'swing', // animation transition easing function
                checkbox: null, // the checkbox to toggle (for use in forms)
                clicker: null, // element that can be clicked on to toggle. removes binding from the toggle itself (use nesting)
                width: 50, // width used if not set in css
                height: 20, // height if not set in css
                type: 'compact' // if this is set to 'select' then the select style toggle will be used
            });

            // Getting notified of changes, and the new state:
            \$('.toggle').on('toggle', function(e, active) {
                if (active) {
                    \$(this).next('input').val('OUI');
                    \$(this).closest('.row').find('.disponible-24h input:checkbox').each(function(){
                        if(\$(this).is(\":checked\")){
                            \$(this).closest('.disponible-24h').removeClass('hide');
                        } else {
                            \$(this).closest('.row').find('.horaire-du-jour').removeClass('hide');
                        }
                    })
                } else {
                    \$(this).next('input').val('NON');
                    \$(this).closest('.row').find('.horaire-du-jour').addClass('hide');
                }
            });

            \$('.disponible-24h').find(\"input:checkbox\").on('change', function(){
                if(\$(this).is(\":checked\")){
                    \$(this).closest('.row').find('.not-disponible-24h').addClass('hide');
                } else {
                    \$(this).closest('.row').find('.not-disponible-24h').removeClass('hide');
                }
            });

            // Time Picker
            for (let i = 1; i <= 7; i++) {
                jQuery('#hOuverture' + i).timepicker({showMeridian: false});
                jQuery('#hFermeture' + i).timepicker({showMeridian: false});
            }

            // Date Picker
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker-inline').datepicker();
            jQuery('#datepicker-multiple').datepicker({
                numberOfMonths: 3,
                showButtonPanel: true
            });

            // Select2
            jQuery(\".select2\").select2({
                width: '100%'
            });
        });
    </script>
{% endblock %}", "account/salle/add.html.twig", "/var/www/html/scjdchjdfdhjeseze/projet/templates/account/salle/add.html.twig");
    }
}
