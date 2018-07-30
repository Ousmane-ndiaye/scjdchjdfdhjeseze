<?php

/* account/salle/all.html.twig */
class __TwigTemplate_0bf4db697b0eafaf9fd24630ba5432e00a56ffcdc541aec8abd316559da7d69d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("account/base.html.twig", "account/salle/all.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/salle/all.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/salle/all.html.twig"));

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

        echo " LISTE DE MES SALLES ";
        
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

        echo "MES SALLES !";
        
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
        echo "    <!-- DataTables -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        // line 12
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_filedarian($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filedarian"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filedarian"));

        // line 16
        echo "<li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_account");
        echo "\">Sen office</a></li>
<li class=\"active\">Mes salles</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Responsive example</h3>
            </div>
            <div class=\"panel-body\">
                <table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom de la salle</th>
                            <th>Type de salle</th>
                            <th>Adresse</th>
                            <th>Nombre de Place</th>
                            <th>Prix location/H</th>
                            <th>En ligne</th>
                            <th>Détails</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new Twig_Error_Runtime('Variable "salles" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 42
            echo "                        <tr>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salle"], "nomComplet", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["salle"], "typeDeBien", array()), "nomType", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["salle"], "quartier", array()) . ", ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["salle"], "cArrondissement", array()), "nomCArrond", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salle"], "nbreDeplaces", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salle"], "prixLocation", array()), "html", null, true);
            echo " FCFA</td>
                            <td>
                                ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["salle"], "etat", array())) {
                // line 50
                echo "                                    OUI
                                ";
            } else {
                // line 52
                echo "                                    NON
                                ";
            }
            // line 54
            echo "                            </td>
                            <td>
                                <form method=\"POST\" action=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_salle");
            echo "\">
                                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salle"], "id", array()), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-custom waves-effect waves-light m-b-5\">Voir détails</button>
                                </form>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div> <!-- End Row -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- Datatables-->
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/responsive.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/datatables/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatable init js -->
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('#datatable-responsive').DataTable({
                \"aoColumnDefs\": [{
                    'bSortable': false,
                    'aTargets': [-1]
                }],
                \"oLanguage\": {
                    \"oPaginate\": {
                        \"sFirst\": \"Premier\",
                        \"sLast\": \"Dérnier\",
                        \"sNext\": \"Suivant\",
                        \"sPrevious\": \"Précedent\",
                    },
                    \"sSearch\": \"Recherche:\",
                    \"sEmptyTable\": \"Aucune donnée disponible\",
                    \"sInfo\": \"affichage de _START_ à _END_ sur _TOTAL_ éléments\",
                    \"sInfoEmpty\": \"Aucune donnée disponible\",
                    \"sInfoFiltered\": \"(Recherché sur _MAX_ éléments au total)\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"sLengthMenu\": \"Afficher par _MENU_ éléments\",
                    \"loadingRecords\": \"Chargement...\",
                    \"processing\": \"procéssus...\",
                    \"sZeroRecords\": \"Aucun résultat trouvé\",
                },
                \"iDisplayLength\": 5,
                \"aLengthMenu\": [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, \"Tout\"]
                ]
            });
        } );
        TableManageButtons.init();
        </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/salle/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 88,  302 => 85,  298 => 84,  294 => 83,  290 => 82,  286 => 81,  282 => 80,  278 => 79,  274 => 78,  270 => 77,  266 => 76,  260 => 74,  251 => 73,  233 => 63,  221 => 57,  217 => 56,  213 => 54,  209 => 52,  205 => 50,  203 => 49,  198 => 47,  194 => 46,  190 => 45,  186 => 44,  182 => 43,  179 => 42,  175 => 41,  153 => 21,  144 => 20,  130 => 16,  121 => 15,  109 => 12,  105 => 11,  101 => 10,  97 => 9,  94 => 8,  85 => 7,  67 => 5,  49 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'account/base.html.twig' %}

{% block title %} LISTE DE MES SALLES {% endblock %}

{% block titrepage %}MES SALLES !{% endblock %}

{% block stylesheets %}
    <!-- DataTables -->
    <link href=\"{{asset('assets/plugins/datatables/jquery.dataTables.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('assets/plugins/datatables/buttons.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('assets/plugins/datatables/responsive.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    {{ parent() }}
{% endblock %}

{% block filedarian %}
<li><a href=\"{{path('accueil_account')}}\">Sen office</a></li>
<li class=\"active\">Mes salles</li>
{% endblock %}

{% block main %}
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Responsive example</h3>
            </div>
            <div class=\"panel-body\">
                <table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom de la salle</th>
                            <th>Type de salle</th>
                            <th>Adresse</th>
                            <th>Nombre de Place</th>
                            <th>Prix location/H</th>
                            <th>En ligne</th>
                            <th>Détails</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for salle in salles %}
                        <tr>
                            <td>{{ salle.nomComplet }}</td>
                            <td>{{ salle.typeDeBien.nomType }}</td>
                            <td>{{ salle.quartier ~ ', ' ~ salle.cArrondissement.nomCArrond }}</td>
                            <td>{{ salle.nbreDeplaces }}</td>
                            <td>{{ salle.prixLocation }} FCFA</td>
                            <td>
                                {% if salle.etat %}
                                    OUI
                                {% else %}
                                    NON
                                {% endif %}
                            </td>
                            <td>
                                <form method=\"POST\" action=\"{{ path('detail_salle') }}\">
                                    <input type=\"hidden\" name=\"id\" value=\"{{ salle.id }}\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-custom waves-effect waves-light m-b-5\">Voir détails</button>
                                </form>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div> <!-- End Row -->
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Datatables-->
    <script src=\"{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datatables/buttons.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datatables/vfs_fonts.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datatables/buttons.html5.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datatables/dataTables.keyTable.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datatables/responsive.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datatables/dataTables.scroller.min.js')}}\"></script>

    <!-- Datatable init js -->
    <script src=\"{{asset('assets/pages/datatables.init.js')}}\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('#datatable-responsive').DataTable({
                \"aoColumnDefs\": [{
                    'bSortable': false,
                    'aTargets': [-1]
                }],
                \"oLanguage\": {
                    \"oPaginate\": {
                        \"sFirst\": \"Premier\",
                        \"sLast\": \"Dérnier\",
                        \"sNext\": \"Suivant\",
                        \"sPrevious\": \"Précedent\",
                    },
                    \"sSearch\": \"Recherche:\",
                    \"sEmptyTable\": \"Aucune donnée disponible\",
                    \"sInfo\": \"affichage de _START_ à _END_ sur _TOTAL_ éléments\",
                    \"sInfoEmpty\": \"Aucune donnée disponible\",
                    \"sInfoFiltered\": \"(Recherché sur _MAX_ éléments au total)\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"sLengthMenu\": \"Afficher par _MENU_ éléments\",
                    \"loadingRecords\": \"Chargement...\",
                    \"processing\": \"procéssus...\",
                    \"sZeroRecords\": \"Aucun résultat trouvé\",
                },
                \"iDisplayLength\": 5,
                \"aLengthMenu\": [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, \"Tout\"]
                ]
            });
        } );
        TableManageButtons.init();
        </script>

{% endblock %}", "account/salle/all.html.twig", "/var/www/html/scjdchjdfdhjeseze/projet/templates/account/salle/all.html.twig");
    }
}
