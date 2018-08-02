<?php

/* Security/login.html.twig */
class __TwigTemplate_709209e5285b77304f988dca81c08afb78965948a53d50300bfac0a0488f3947 extends Twig_Template
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
        echo "<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type=\"text/javascript\">
        var body = document.querySelector(\"body\");
        body.setAttribute(\"class\", \"external-page external-alt sb-l-c sb-r-c\");
    </script>


    <div class=\"wrapper-page\">
        <div class=\"panel panel-color panel-primary panel-pages\">
            <div class=\"panel-heading bg-img\">
                <div class=\"\"></div>
                <h3  class=\"text-center m-t-10 text-white\"> Se connecter à <strong>Sen Office</strong> </h3>
        </div>


            <div style=\"background-color:#DAA520\" class=\"panel-body\">
                <form class=\"form-horizontal m-t-20\" method=\"post\" action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\">

                    ";
        // line 22
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "                        <div class=\"alert alert-danger\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 24, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 24, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "
                        </div>
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
                                <input  type=\"checkbox\" id=\"checkbox-signup\" name=\"_remember_me\" checked />
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
                            <a  href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partager_salle_front");
        echo "\">Nouveau proprietaire?</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </div>



<style>

body {
    background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 36px;
    background: url('') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}

</style>

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
        return array (  133 => 65,  105 => 40,  92 => 30,  87 => 27,  81 => 24,  78 => 23,  76 => 22,  71 => 20,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'back.html.twig' %}

{% block body %}
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type=\"text/javascript\">
        var body = document.querySelector(\"body\");
        body.setAttribute(\"class\", \"external-page external-alt sb-l-c sb-r-c\");
    </script>


    <div class=\"wrapper-page\">
        <div class=\"panel panel-color panel-primary panel-pages\">
            <div class=\"panel-heading bg-img\">
                <div class=\"\"></div>
                <h3  class=\"text-center m-t-10 text-white\"> Se connecter à <strong>Sen Office</strong> </h3>
        </div>


            <div style=\"background-color:#DAA520\" class=\"panel-body\">
                <form class=\"form-horizontal m-t-20\" method=\"post\" action=\"{{ path('security_login') }}\">

                    {% if error %}
                        <div class=\"alert alert-danger\">
                            {{ error.messageKey|trans(error.messageData, 'security') }}
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
                                <input  type=\"checkbox\" id=\"checkbox-signup\" name=\"_remember_me\" checked />
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
                            <a  href=\"{{path('partager_salle_front')}}\">Nouveau proprietaire?</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </div>



<style>

body {
    background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 36px;
    background: url('') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}

</style>

{% endblock %}

", "Security/login.html.twig", "/var/www/html/scjdchjdfdhjeseze/projet/templates/Security/login.html.twig");
    }
}
