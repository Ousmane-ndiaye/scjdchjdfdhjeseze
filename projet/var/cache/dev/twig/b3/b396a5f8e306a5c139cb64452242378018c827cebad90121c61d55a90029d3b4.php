<?php

/* Security/login.html.twig */
class __TwigTemplate_e84255ac22513a4f23a53d29505c0df174d6ecbc79306752e7a58aba01ae0c38 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("back.html.twig", "Security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <script type=\"text/javascript\">
        var body = document.querySelector(\"body\");
        body.setAttribute(\"class\", \"external-page external-alt sb-l-c sb-r-c\");
    </script>

    <div class=\"wrapper-page\">
        <div class=\"panel panel-color panel-primary panel-pages\">
            <div class=\"panel-heading bg-img\">
                <div class=\"bg-overlay\"></div>
                <h3 class=\"text-center m-t-10 text-white\"> Se connecter à <strong>Sen Office</strong> </h3>
            </div>


            <div class=\"panel-body\">
                <form class=\"form-horizontal m-t-20\" method=\"post\" action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\">

                    ";
        // line 20
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "                        <div class=\"alert alert-danger\">
                            ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 22, $this->source); })()), "message", array()) == "Bad credentials.")) {
                // line 23
                echo "                            E-mail ou Mot de passe incorrecte.
                            ";
            }
            // line 25
            echo "                        </div>
                    ";
        }
        // line 27
        echo "
                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"email\" id=\"email\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"E-mail\" required=\"required\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\">
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <div class=\"checkbox checkbox-primary\">
                                <input type=\"checkbox\" id=\"checkbox-signup\" name=\"_remember_me\" checked />
                                <label for=\"checkbox-signup\">
                                    Se souvenir de moi
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class=\"form-group text-center m-t-40\">
                        <div class=\"col-xs-12\">
                            <button class=\"btn btn-primary btn-lg w-lg waves-effect waves-light\" type=\"submit\">Se connecter</button>
                        </div>
                    </div>

                    <div class=\"form-group m-t-30\">
                        <div class=\"col-sm-7\">
                            <a href=\"pages-recoverpw.html\"><i class=\"fa fa-lock m-r-5\"></i> Mot de passe oublié?</a>
                        </div>
                        <div class=\"col-sm-5 text-right\">
                            <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partager_salle_front");
        echo "\">Nouveau proprietaire?</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 65,  107 => 40,  94 => 30,  89 => 27,  85 => 25,  81 => 23,  79 => 22,  76 => 21,  74 => 20,  69 => 18,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'back.html.twig' %}

{% block body %}
    <script type=\"text/javascript\">
        var body = document.querySelector(\"body\");
        body.setAttribute(\"class\", \"external-page external-alt sb-l-c sb-r-c\");
    </script>

    <div class=\"wrapper-page\">
        <div class=\"panel panel-color panel-primary panel-pages\">
            <div class=\"panel-heading bg-img\">
                <div class=\"bg-overlay\"></div>
                <h3 class=\"text-center m-t-10 text-white\"> Se connecter à <strong>Sen Office</strong> </h3>
            </div>


            <div class=\"panel-body\">
                <form class=\"form-horizontal m-t-20\" method=\"post\" action=\"{{ path('security_login') }}\">

                    {% if error %}
                        <div class=\"alert alert-danger\">
                            {% if error.message == \"Bad credentials.\" %}
                            E-mail ou Mot de passe incorrecte.
                            {% endif %}
                        </div>
                    {% endif %}

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"email\" id=\"email\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"E-mail\" required=\"required\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\">
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <div class=\"checkbox checkbox-primary\">
                                <input type=\"checkbox\" id=\"checkbox-signup\" name=\"_remember_me\" checked />
                                <label for=\"checkbox-signup\">
                                    Se souvenir de moi
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class=\"form-group text-center m-t-40\">
                        <div class=\"col-xs-12\">
                            <button class=\"btn btn-primary btn-lg w-lg waves-effect waves-light\" type=\"submit\">Se connecter</button>
                        </div>
                    </div>

                    <div class=\"form-group m-t-30\">
                        <div class=\"col-sm-7\">
                            <a href=\"pages-recoverpw.html\"><i class=\"fa fa-lock m-r-5\"></i> Mot de passe oublié?</a>
                        </div>
                        <div class=\"col-sm-5 text-right\">
                            <a href=\"{{path('partager_salle_front')}}\">Nouveau proprietaire?</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

{% endblock %}

", "Security/login.html.twig", "/var/www/html/html/Projets/Personnel/My-Office/projet/templates/Security/login.html.twig");
    }
}
