<?php

/* front/index.html.twig */
class __TwigTemplate_ea0550169a1a2f1a3a68e2e0be4cdcc26b2c747d26300d48b7330bec2d76d884 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("front.html.twig", "front/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'slide' => array($this, 'block_slide'),
            'recherche' => array($this, 'block_recherche'),
            'offre' => array($this, 'block_offre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/index.html.twig"));

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

        echo "Bienvenue ! ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_slide($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 6
        echo "<div id=\"mega-slider\" class=\"carousel slide \" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#mega-slider\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#mega-slider\" data-slide-to=\"1\"></li>
        <li data-target=\"#mega-slider\" data-slide-to=\"2\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active beactive\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/slide-4.png"), "html", null, true);
        echo "\" style=\"width: 100%;\" alt=\"...\">
            <div class=\"carousel-caption\">
                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
                <h2>Bienvenue Sen Office</h2>
                <p>Vos séminaires et réunions dans le lieu idéal</p>
                <div class=\"col-md-3 \">
                </div>
                <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                    <center><button type=\"submit\" class=\"btn btn-main btn-block\">Comment ça marche?</button></center>
                </div>
            </div>
        </div>

        <div class=\"item\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/slide-2.png"), "html", null, true);
        echo "\" style=\"width: 100%;\" alt=\"...\">
            <div class=\"carousel-caption\">
                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
                <h2>Sen Office</h2>
                <p>Pour faire de chaque rencontre un moment qui vous inspire.</p>
                <div class=\"col-md-3\">
                </div>
                <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                    <center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/slide-3.png"), "html", null, true);
        echo "\" style=\"width: 100%;\" alt=\"...\">
            <div class=\"carousel-caption\">
                <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/stars.png"), "html", null, true);
        echo "\" alt=\"\">
                <h2>Sen Office</h2>
                <p>L'endroit parfait pour vos événements.</p>
                <div class=\"col-md-3\">
                </div>
                <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                    <center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"prev\">
        </a>
        <a class=\"right carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"next\">
        </a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        // line 66
        echo "<div class=\"mg-book-now\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <h5 class=\"mg-bn-title\">&nbsp;Recherchez <span class=\"mg-bn-big\">Par lieux & disponiblité</span></h5>
            </div>
            <div class=\"col-md-9\">
                <div class=\"mg-bn-forms\">
                    <form method=\"post\" action=\"\" class=\"form-horizontal\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-xs-12\">
                                <select class=\"select2 form-control\" style=\"padding: 0;\" data-placeholder=\"Choisir une localité...\">
                                    <option value=\"\">&nbsp;</option>
                                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrondissements"]) || array_key_exists("arrondissements", $context) ? $context["arrondissements"] : (function () { throw new Twig_Error_Runtime('Variable "arrondissements" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arrondissement"]) {
            // line 80
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["arrondissement"], "cArrondissements", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cArrondissement"]) {
                // line 81
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["arrondissement"], "id", array()) . "-") . twig_get_attribute($this->env, $this->source, $context["cArrondissement"], "id", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cArrondissement"], "nomCArrond", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cArrondissement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arrondissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                                </select>
                            </div>
                            <div class=\"col-md-4 col-xs-12\">
                                <select class=\"cs-select cs-skin-elastic\">
                                    <option value=\"\" disabled selected>Type d'évènement</option>
                                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 90
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "nomType", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                                </select>
                            </div>
                            <div class=\"col-md-3 col-xs-12\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\"><i class=\"fa fa-map-marker\"></i></div>
                                    <input type=\"number\" class=\"form-control\" name=\"nbreDePlaces\" id=\"nbreDePlaces\" placeholder=\"Nombre de participants\">
                                </div>
                            </div>
                            <div class=\"col-md-2 col-xs-12\">
                                <button type=\"submit\" class=\"btn btn-main btn-block\">Rechercher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_offre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 113
        echo "<div class=\"mg-best-rooms\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"mg-sec-title\">
                    <h2>Nos meilleures salles</h2>
                    <p>Les salles les plus choisies par nos clients</p>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <figure class=\"mg-room\">
                            <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/room-1.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Super Deluxe</h2>
                                <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                <div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#\" class=\"btn btn-main\">Book</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"col-sm-4\">
                        <figure class=\"mg-room\">
                            <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/room-2.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Super Deluxe</h2>
                                <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                <div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#\" class=\"btn btn-main\">Book</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"col-sm-4\">
                        <figure class=\"mg-room\">
                            <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/room-3.png"), "html", null, true);
        echo "\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Super Deluxe</h2>
                                <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                <div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#\" class=\"btn btn-main\">Book</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <hr>
        </div>
    </div>
</div> -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 150,  297 => 137,  281 => 124,  268 => 113,  259 => 112,  231 => 92,  220 => 90,  216 => 89,  209 => 84,  203 => 83,  192 => 81,  187 => 80,  183 => 79,  168 => 66,  159 => 65,  131 => 46,  126 => 44,  112 => 33,  107 => 31,  92 => 19,  87 => 17,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'front.html.twig' %}

{% block title %}Bienvenue ! {% endblock %}

{% block slide %}
<div id=\"mega-slider\" class=\"carousel slide \" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#mega-slider\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#mega-slider\" data-slide-to=\"1\"></li>
        <li data-target=\"#mega-slider\" data-slide-to=\"2\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active beactive\">
            <img src=\"{{asset ('assets/template/images/slide-4.png')}}\" style=\"width: 100%;\" alt=\"...\">
            <div class=\"carousel-caption\">
                <img src=\"{{asset ('assets/template/images/stars.png')}}\" alt=\"\">
                <h2>Bienvenue Sen Office</h2>
                <p>Vos séminaires et réunions dans le lieu idéal</p>
                <div class=\"col-md-3 \">
                </div>
                <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                    <center><button type=\"submit\" class=\"btn btn-main btn-block\">Comment ça marche?</button></center>
                </div>
            </div>
        </div>

        <div class=\"item\">
            <img src=\"{{asset ('assets/template/images/slide-2.png')}}\" style=\"width: 100%;\" alt=\"...\">
            <div class=\"carousel-caption\">
                <img src=\"{{asset ('assets/template/images/stars.png')}}\" alt=\"\">
                <h2>Sen Office</h2>
                <p>Pour faire de chaque rencontre un moment qui vous inspire.</p>
                <div class=\"col-md-3\">
                </div>
                <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                    <center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <img src=\"{{asset ('assets/template/images/slide-3.png')}}\" style=\"width: 100%;\" alt=\"...\">
            <div class=\"carousel-caption\">
                <img src=\"{{asset ('assets/template/images/stars.png')}}\" alt=\"\">
                <h2>Sen Office</h2>
                <p>L'endroit parfait pour vos événements.</p>
                <div class=\"col-md-3\">
                </div>
                <div class=\"col-md-4\" style=\"margin-left: 9%;\">
                    <center><button type=\"submit\" class=\"btn btn-main btn-block comment ça marche\">Comment ça marche?</button></center>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"prev\">
        </a>
        <a class=\"right carousel-control\" href=\"#mega-slider\" role=\"button\" data-slide=\"next\">
        </a>
    </div>
</div>
{% endblock %}

{% block recherche %}
<div class=\"mg-book-now\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <h5 class=\"mg-bn-title\">&nbsp;Recherchez <span class=\"mg-bn-big\">Par lieux & disponiblité</span></h5>
            </div>
            <div class=\"col-md-9\">
                <div class=\"mg-bn-forms\">
                    <form method=\"post\" action=\"\" class=\"form-horizontal\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-xs-12\">
                                <select class=\"select2 form-control\" style=\"padding: 0;\" data-placeholder=\"Choisir une localité...\">
                                    <option value=\"\">&nbsp;</option>
                                    {% for arrondissement in arrondissements %}
                                        {% for cArrondissement in arrondissement.cArrondissements %}
                                            <option value=\"{{arrondissement.id ~ '-' ~ cArrondissement.id}}\">{{cArrondissement.nomCArrond}}</option>
                                        {% endfor %}
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-md-4 col-xs-12\">
                                <select class=\"cs-select cs-skin-elastic\">
                                    <option value=\"\" disabled selected>Type d'évènement</option>
                                    {% for type in types %}
                                        <option value=\"{{type.id}}\">{{type.nomType}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-md-3 col-xs-12\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\"><i class=\"fa fa-map-marker\"></i></div>
                                    <input type=\"number\" class=\"form-control\" name=\"nbreDePlaces\" id=\"nbreDePlaces\" placeholder=\"Nombre de participants\">
                                </div>
                            </div>
                            <div class=\"col-md-2 col-xs-12\">
                                <button type=\"submit\" class=\"btn btn-main btn-block\">Rechercher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block offre %}
<div class=\"mg-best-rooms\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"mg-sec-title\">
                    <h2>Nos meilleures salles</h2>
                    <p>Les salles les plus choisies par nos clients</p>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <figure class=\"mg-room\">
                            <img src=\"{{asset ('assets/template/images/room-1.png')}}\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Super Deluxe</h2>
                                <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                <div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#\" class=\"btn btn-main\">Book</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"col-sm-4\">
                        <figure class=\"mg-room\">
                            <img src=\"{{asset ('assets/template/images/room-2.png')}}\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Super Deluxe</h2>
                                <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                <div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#\" class=\"btn btn-main\">Book</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"col-sm-4\">
                        <figure class=\"mg-room\">
                            <img src=\"{{asset ('assets/template/images/room-3.png')}}\" alt=\"img11\" class=\"img-responsive\">
                            <figcaption>
                                <h2>Super Deluxe</h2>
                                <div class=\"mg-room-rating\"><i class=\"fa fa-star\"></i> 5.00</div>
                                <div class=\"mg-room-price\">\$249<sup>.99/Night</sup></div>
                                <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                <a href=\"#\" class=\"btn btn-link\">View Details <i class=\"fa fa-angle-double-right\"></i></a>
                                <a href=\"#\" class=\"btn btn-main\">Book</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <hr>
        </div>
    </div>
</div> -->
{% endblock %}", "front/index.html.twig", "/var/www/html/html/Projets/Personnel/My-Office/projet/templates/front/index.html.twig");
    }
}
