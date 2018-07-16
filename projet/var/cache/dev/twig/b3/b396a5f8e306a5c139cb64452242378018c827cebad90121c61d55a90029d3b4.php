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
    <div id=\"main\" class=\"animated fadeIn\">
        <!-- Start: Content-Wrapper -->
        <section id=\"content_wrapper\">
            <!-- Begin: Content -->
            <section id=\"content\">
                <div class=\"admin-form theme-info mw500\" id=\"login\">
                    <!-- Login Logo -->
                    <div class=\"row table-layout\">
                \t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("inc/templates/back/assets/img/logos/logo.png"), "html", null, true);
        echo "\" title=\"AdminDesigns Logo\" class=\"center-block img-responsive\" style=\"max-width: 275px;\">
                    </div>

                    <!-- Login Panel/Form -->
                    <div class=\"panel mt30 mb25\">
                        <form method=\"post\" action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" id=\"contact\">
                            <div class=\"panel-body bg-light p25 pb15\">

                                <!-- Divider -->
                                <div class=\"section-divider mv30\">
                            \t\t<span>CONNEXION</span>
                                </div>

                                ";
        // line 29
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                                    <div class=\"alert alert-danger\">
                                        ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 31, $this->source); })()), "messageKey", array()), "html", null, true);
            echo "
                                    </div>
                                ";
        }
        // line 34
        echo "
                                <!-- Username Input -->
                                <div class=\"section\">
                                    <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Nom d'utilisateur</label>
                                    <label for=\"username\" class=\"field prepend-icon\">
                                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "\" class=\"gui-input\" placeholder=\"Entrer votre nom d'utilisateur\">
                                        <label for=\"username\" class=\"field-icon\">
                                            <i class=\"fa fa-user\"></i>
                                        </label>
                                    </label>
                                </div>

                                <!-- Password Input -->
                                <div class=\"section\">
                                    <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Mot de passe</label>
                                    <label for=\"password\" class=\"field prepend-icon\">
                                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"gui-input\" placeholder=\"Entrer votre mot de passe\">
                                        <label for=\"password\" class=\"field-icon\">
                                            <i class=\"fa fa-lock\"></i>
                                        </label>
                                    </label>
                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                            </div>

                            <div class=\"panel-footer clearfix\">
                                <button type=\"submit\" class=\"button btn-primary mr10 pull-right\">Se connecter</button>
                                <label class=\"switch ib switch-primary mt10\">
                                    <input type=\"checkbox\" name=\"remember\" id=\"remember\" checked>
                                    <label for=\"remember\" data-on=\"YES\" data-off=\"NO\"></label>
                                    <span>Se souvenir de moi</span>
                                </label>
                            </div>
                        </form>
                    </div>

                    <!-- Registration Links -->
                    <div class=\"login-links\">
                        <p>
                            <a href=\"\" class=\"active\" title=\"Récuperer votre mot de passe\">Mot de passe oublié?</a>
                        </p>
                    </div>

                </div>
            </section>
            <!-- End: Content -->
        </section>
        <!-- End: Content-Wrapper -->
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
        return array (  124 => 56,  104 => 39,  97 => 34,  91 => 31,  88 => 30,  86 => 29,  75 => 21,  67 => 16,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'back.html.twig' %}

{% block body %}
    <script type=\"text/javascript\">
        var body = document.querySelector(\"body\");
        body.setAttribute(\"class\", \"external-page external-alt sb-l-c sb-r-c\");
    </script>
    <div id=\"main\" class=\"animated fadeIn\">
        <!-- Start: Content-Wrapper -->
        <section id=\"content_wrapper\">
            <!-- Begin: Content -->
            <section id=\"content\">
                <div class=\"admin-form theme-info mw500\" id=\"login\">
                    <!-- Login Logo -->
                    <div class=\"row table-layout\">
                \t\t<img src=\"{{asset('inc/templates/back/assets/img/logos/logo.png')}}\" title=\"AdminDesigns Logo\" class=\"center-block img-responsive\" style=\"max-width: 275px;\">
                    </div>

                    <!-- Login Panel/Form -->
                    <div class=\"panel mt30 mb25\">
                        <form method=\"post\" action=\"{{ path('security_login') }}\" id=\"contact\">
                            <div class=\"panel-body bg-light p25 pb15\">

                                <!-- Divider -->
                                <div class=\"section-divider mv30\">
                            \t\t<span>CONNEXION</span>
                                </div>

                                {% if error %}
                                    <div class=\"alert alert-danger\">
                                        {{ error.messageKey }}
                                    </div>
                                {% endif %}

                                <!-- Username Input -->
                                <div class=\"section\">
                                    <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Nom d'utilisateur</label>
                                    <label for=\"username\" class=\"field prepend-icon\">
                                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"gui-input\" placeholder=\"Entrer votre nom d'utilisateur\">
                                        <label for=\"username\" class=\"field-icon\">
                                            <i class=\"fa fa-user\"></i>
                                        </label>
                                    </label>
                                </div>

                                <!-- Password Input -->
                                <div class=\"section\">
                                    <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Mot de passe</label>
                                    <label for=\"password\" class=\"field prepend-icon\">
                                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"gui-input\" placeholder=\"Entrer votre mot de passe\">
                                        <label for=\"password\" class=\"field-icon\">
                                            <i class=\"fa fa-lock\"></i>
                                        </label>
                                    </label>
                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                            </div>

                            <div class=\"panel-footer clearfix\">
                                <button type=\"submit\" class=\"button btn-primary mr10 pull-right\">Se connecter</button>
                                <label class=\"switch ib switch-primary mt10\">
                                    <input type=\"checkbox\" name=\"remember\" id=\"remember\" checked>
                                    <label for=\"remember\" data-on=\"YES\" data-off=\"NO\"></label>
                                    <span>Se souvenir de moi</span>
                                </label>
                            </div>
                        </form>
                    </div>

                    <!-- Registration Links -->
                    <div class=\"login-links\">
                        <p>
                            <a href=\"\" class=\"active\" title=\"Récuperer votre mot de passe\">Mot de passe oublié?</a>
                        </p>
                    </div>

                </div>
            </section>
            <!-- End: Content -->
        </section>
        <!-- End: Content-Wrapper -->
    </div>

{% endblock %}

", "Security/login.html.twig", "/var/www/html/html/Projets/Personnel/My-Office/projet/templates/Security/login.html.twig");
    }
}
