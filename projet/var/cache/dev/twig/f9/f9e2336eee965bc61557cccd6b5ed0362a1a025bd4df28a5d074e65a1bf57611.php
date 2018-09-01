<?php

/* account/base.html.twig */
class __TwigTemplate_5cf303210f72d09577f8de40a75097bbc9c4c0a8fc32f8f16e56472ed5947f5b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("back.html.twig", "account/base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titrepage' => array($this, 'block_titrepage'),
            'topbar' => array($this, 'block_topbar'),
            'leftsidebar' => array($this, 'block_leftsidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/base.html.twig"));

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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 8
        echo "<!-- Top Bar Start -->
<div class=\"topbar\">
    <!-- LOGO -->
    <div class=\"topbar-left\">
        <div class=\"text-center\">
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_front");
        echo "\" class=\"logo\">
                <img class=\"img-responsive\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/template/images/senoffice.png"), "html", null, true);
        echo "\" alt=\"SEN OFFICE\">
            </a>
        </div>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"\">
                <div class=\"pull-left\">
                    <button type=\"button\" class=\"button-menu-mobile open-left\" id=\"collapse-menu\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                    <span class=\"clearfix\"></span>
                </div>
                <form class=\"navbar-form pull-left\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control search-bar\" value=\"Type here for search...\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                </form>

                <ul class=\"nav navbar-nav navbar-right pull-right\">
                    <li class=\"dropdown hidden-xs\">
                        <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                            <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-dark\">3</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-lg\">
                            <li class=\"text-center notifi-title\">Notification</li>
                            <li class=\"list-group\">
                                <!-- list item-->
                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                    <div class=\"media\">
                                        <div class=\"media-left\">
                                        <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                        </div>
                                        <div class=\"media-body clearfix\">
                                        <div class=\"media-heading\">New user registered</div>
                                        <p class=\"m-0\">
                                            <small>You have 10 unread messages</small>
                                        </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                    <div class=\"media\">
                                        <div class=\"media-left\">
                                        <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                        </div>
                                        <div class=\"media-body clearfix\">
                                        <div class=\"media-heading\">New settings</div>
                                        <p class=\"m-0\">
                                            <small>There are new settings available</small>
                                        </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                    <div class=\"media\">
                                        <div class=\"media-left\">
                                        <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                        </div>
                                        <div class=\"media-body clearfix\">
                                        <div class=\"media-heading\">Updates</div>
                                        <p class=\"m-0\">
                                            <small>There are
                                                <span class=\"text-primary\">2</span> new updates available</small>
                                        </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- last list item -->
                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                    <small>See all notifications</small>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"hidden-xs\">
                        <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect\"><i class=\"md md-crop-free\"></i></a>
                    </li>
                    <li class=\"hidden-xs\">
                        <a href=\"#\" class=\"right-bar-toggle waves-effect\"><i class=\"md md-chat\"></i></a>
                    </li>
                    <li class=\"dropdown\">
                    ";
        // line 100
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 100, $this->source); })()), "user", array()), "photo", array()) != null) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 100, $this->source); })()), "user", array()), "photo", array())) > 10000))) {
            // line 101
            echo "                        <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"data:image/png;base64,";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 101, $this->source); })()), "user", array()), "photo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 101, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "\" class=\"img-circle\"> </a>

                         ";
        } else {
            // line 104
            echo "                     <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-6.jpg"), "html", null, true);
            echo "\" alt=\"nom defini \" class=\"img-circle\"> </a>

                      ";
        }
        // line 107
        echo "                        <ul class=\"dropdown-menu\">
                            <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                            <li><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_leftsidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftsidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftsidebar"));

        // line 124
        echo "<!-- ========== Left Sidebar Start ========== -->
<div class=\"left side-menu\">
    <div class=\"sidebar-inner slimscrollleft\">
        <div class=\"user-details\">
            <div class=\"pull-left\">
            ";
        // line 129
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 129, $this->source); })()), "user", array()), "photo", array()) != null) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 129, $this->source); })()), "user", array()), "photo", array())) > 10000))) {
            // line 130
            echo "            
                <img  src=\"data:image/png;base64,";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 131, $this->source); })()), "user", array()), "photo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 131, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "\" class=\"thumb-md img-circle\">
            ";
        } else {
            // line 133
            echo "            
            <img src=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-6.jpg"), "html", null, true);
            echo "\" alt=\"no defini\" class=\"thumb-md img-circle\">
            
           ";
        }
        // line 137
        echo "            </div>
            <div class=\"user-info\">
                <div class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 140, $this->source); })()), "user", array()), "Proprietaire", array()), "nomComplet", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profil<div class=\"ripple-wrapper\"></div></a></li>
                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Paramétrage</a></li>
                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                        <li><a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                    </ul>
                </div>

                <p class=\"text-muted m-0\" style=\"color: #675656;\">Proprietaire</p>
            </div>
        </div>
        <!--- Divider -->
        <div id=\"sidebar-menu\" style=\"box-shadow: 1px -3px 3px 0 rgba(0, 0, 0, 0.2);\">
            <ul>
                <li>
                    <a href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_account");
        echo "\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Tableau de bord </span></a>
                </li>

                <li>
                    <a href=\"javascript:void(0)\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span></a>
                </li>

                <li>
                    <a href=\"javascript:void(0)\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendrier </span></a>
                </li>

                <li class=\"has_sub\">
                    <a href=\"#\" class=\"waves-effect\"><i class=\"md md-view-module\"></i><span> Salle </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_salle");
        echo "\">Liste de mes Salles</a></li>
                        <li><a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_salle");
        echo "\">Ajouter une salle</a></li>
                    </ul>
                </li>

                <li class=\"has_sub\">
                    <a href=\"#\" class=\"waves-effect\"><i class=\"md md-business\"></i><span> Fournisseurs </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"form-validation.html\">Ajouter un fournisseur</a></li>
                        <li><a href=\"javascript:void(0)\">Liste des fournisseurs</a></li>
                    </ul>
                </li>

                <li class=\"has_sub\">
                    <a href=\"#\" class=\"waves-effect\"><i class=\"md md-account-child\"></i><span> Structures interne </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"tables-basic.html\">Ajouter une structure</a></li>
                        <li><a href=\"tables-datatable.html\">Liste des structures</a></li>
                    </ul>
                </li>

                <li class=\"has_sub\">
                    <a href=\"#\" class=\"waves-effect\"><i class=\"md md-poll\"></i><span> Indicateurs </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                        <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                        <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                        <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                        <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                        <li><a href=\"charts-radial.html\">Radial charts</a></li>
                        <li><a href=\"charts-other.html\">Other Chart</a></li>
                    </ul>
                </li>

                <li class=\"has_sub\">
                    <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"maps-google.html\"> Google Map</a></li>
                        <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                    </ul>
                </li>

                <li class=\"has_sub\">
                    <a href=\"#\" class=\"waves-effect\"><i class=\"fa fa-users\"></i> <span> Utilisateurs </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"javascript:void(0)\">Liste utilisateurs</a></li>
                        <li><a href=\"ui-typography.html\">Partenaires</a></li>
                        <li><a href=\"ui-buttons.html\">Fournisseurs</a></li>
                        <li><a href=\"ui-panels.html\">Évaluateurs</a></li>
                    </ul>
                </li>
            </ul>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
</div>
<!-- Left Sidebar End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 171,  316 => 170,  299 => 156,  285 => 145,  277 => 140,  272 => 137,  266 => 134,  263 => 133,  256 => 131,  253 => 130,  251 => 129,  244 => 124,  235 => 123,  214 => 111,  208 => 107,  201 => 104,  192 => 101,  190 => 100,  101 => 14,  97 => 13,  90 => 8,  81 => 7,  64 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'back.html.twig' %}

{% block title %}{% endblock %}

{% block titrepage %}{% endblock %}

{% block topbar %}
<!-- Top Bar Start -->
<div class=\"topbar\">
    <!-- LOGO -->
    <div class=\"topbar-left\">
        <div class=\"text-center\">
            <a href=\"{{path('accueil_front')}}\" class=\"logo\">
                <img class=\"img-responsive\" src=\"{{asset('assets/template/images/senoffice.png')}}\" alt=\"SEN OFFICE\">
            </a>
        </div>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"\">
                <div class=\"pull-left\">
                    <button type=\"button\" class=\"button-menu-mobile open-left\" id=\"collapse-menu\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                    <span class=\"clearfix\"></span>
                </div>
                <form class=\"navbar-form pull-left\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control search-bar\" value=\"Type here for search...\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                </form>

                <ul class=\"nav navbar-nav navbar-right pull-right\">
                    <li class=\"dropdown hidden-xs\">
                        <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                            <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-dark\">3</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-lg\">
                            <li class=\"text-center notifi-title\">Notification</li>
                            <li class=\"list-group\">
                                <!-- list item-->
                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                    <div class=\"media\">
                                        <div class=\"media-left\">
                                        <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                        </div>
                                        <div class=\"media-body clearfix\">
                                        <div class=\"media-heading\">New user registered</div>
                                        <p class=\"m-0\">
                                            <small>You have 10 unread messages</small>
                                        </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                    <div class=\"media\">
                                        <div class=\"media-left\">
                                        <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                        </div>
                                        <div class=\"media-body clearfix\">
                                        <div class=\"media-heading\">New settings</div>
                                        <p class=\"m-0\">
                                            <small>There are new settings available</small>
                                        </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                    <div class=\"media\">
                                        <div class=\"media-left\">
                                        <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                        </div>
                                        <div class=\"media-body clearfix\">
                                        <div class=\"media-heading\">Updates</div>
                                        <p class=\"m-0\">
                                            <small>There are
                                                <span class=\"text-primary\">2</span> new updates available</small>
                                        </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- last list item -->
                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                    <small>See all notifications</small>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"hidden-xs\">
                        <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect\"><i class=\"md md-crop-free\"></i></a>
                    </li>
                    <li class=\"hidden-xs\">
                        <a href=\"#\" class=\"right-bar-toggle waves-effect\"><i class=\"md md-chat\"></i></a>
                    </li>
                    <li class=\"dropdown\">
                    {% if app.user.photo != null and app.user.photo|length > 10000  %}
                        <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"data:image/png;base64,{{ app.user.photo }}\" alt=\"{{ app.user.username }}\" class=\"img-circle\"> </a>

                         {% else %}
                     <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"{{asset('assets/images/users/avatar-6.jpg')}}\" alt=\"nom defini \" class=\"img-circle\"> </a>

                      {% endif %}
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                            <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                            <li><a href=\"{{path('security_logout')}}\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
{% endblock topbar %}

{% block leftsidebar %}
<!-- ========== Left Sidebar Start ========== -->
<div class=\"left side-menu\">
    <div class=\"sidebar-inner slimscrollleft\">
        <div class=\"user-details\">
            <div class=\"pull-left\">
            {% if app.user.photo != null and app.user.photo|length >10000  %}
            
                <img  src=\"data:image/png;base64,{{ app.user.photo }}\" alt=\"{{ app.user.username }}\" class=\"thumb-md img-circle\">
            {% else %}
            
            <img src=\"{{asset('assets/images/users/avatar-6.jpg')}}\" alt=\"no defini\" class=\"thumb-md img-circle\">
            
           {% endif %}
            </div>
            <div class=\"user-info\">
                <div class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">{{ app.user.Proprietaire.nomComplet }} <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profil<div class=\"ripple-wrapper\"></div></a></li>
                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Paramétrage</a></li>
                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                        <li><a href=\"{{path('security_logout')}}\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                    </ul>
                </div>

                <p class=\"text-muted m-0\" style=\"color: #675656;\">Proprietaire</p>
            </div>
        </div>
        <!--- Divider -->
        <div id=\"sidebar-menu\" style=\"box-shadow: 1px -3px 3px 0 rgba(0, 0, 0, 0.2);\">
            <ul>
                <li>
                    <a href=\"{{path('accueil_account')}}\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Tableau de bord </span></a>
                </li>

                <li>
                    <a href=\"javascript:void(0)\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span></a>
                </li>

                <li>
                    <a href=\"javascript:void(0)\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendrier </span></a>
                </li>

                <li class=\"has_sub\">
                    <a href=\"#\" class=\"waves-effect\"><i class=\"md md-view-module\"></i><span> Salle </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"{{path('liste_salle')}}\">Liste de mes Salles</a></li>
                        <li><a href=\"{{path('ajouter_salle')}}\">Ajouter une salle</a></li>
                    </ul>
                </li>

                <li class=\"has_sub\">
                    <a href=\"#\" class=\"waves-effect\"><i class=\"md md-business\"></i><span> Fournisseurs </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"form-validation.html\">Ajouter un fournisseur</a></li>
                        <li><a href=\"javascript:void(0)\">Liste des fournisseurs</a></li>
                    </ul>
                </li>

                <li class=\"has_sub\">
                    <a href=\"#\" class=\"waves-effect\"><i class=\"md md-account-child\"></i><span> Structures interne </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"tables-basic.html\">Ajouter une structure</a></li>
                        <li><a href=\"tables-datatable.html\">Liste des structures</a></li>
                    </ul>
                </li>

                <li class=\"has_sub\">
                    <a href=\"#\" class=\"waves-effect\"><i class=\"md md-poll\"></i><span> Indicateurs </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                        <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                        <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                        <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                        <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                        <li><a href=\"charts-radial.html\">Radial charts</a></li>
                        <li><a href=\"charts-other.html\">Other Chart</a></li>
                    </ul>
                </li>

                <li class=\"has_sub\">
                    <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"maps-google.html\"> Google Map</a></li>
                        <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                    </ul>
                </li>

                <li class=\"has_sub\">
                    <a href=\"#\" class=\"waves-effect\"><i class=\"fa fa-users\"></i> <span> Utilisateurs </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"javascript:void(0)\">Liste utilisateurs</a></li>
                        <li><a href=\"ui-typography.html\">Partenaires</a></li>
                        <li><a href=\"ui-buttons.html\">Fournisseurs</a></li>
                        <li><a href=\"ui-panels.html\">Évaluateurs</a></li>
                    </ul>
                </li>
            </ul>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
</div>
<!-- Left Sidebar End -->
{% endblock leftsidebar %}", "account/base.html.twig", "/var/www/html/scjdchjdfdhjeseze/projet/templates/account/base.html.twig");
    }
}
