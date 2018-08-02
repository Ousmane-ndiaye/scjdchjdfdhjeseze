<?php

/* front/reserver-salle.html.twig */
class __TwigTemplate_833fc38f364d5571afc094bacdc506be1555ee66e17c8c4f7ea2e836d7ecdef8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("front.html.twig", "front/reserver-salle.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'slide' => array($this, 'block_slide'),
            'offre' => array($this, 'block_offre'),
            'recherche' => array($this, 'block_recherche'),
            'apropos' => array($this, 'block_apropos'),
            'partenaires' => array($this, 'block_partenaires'),
            'galerie' => array($this, 'block_galerie'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/reserver-salle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/reserver-salle.html.twig"));

        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
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

        echo "Reserever";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_slide($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 7
        echo "    <div>
        <br><br>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_offre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offre"));

        // line 14
        echo "    ";
        // line 15
        echo "
    <div class=\"mg-best-rooms maclasse\" style=\"display:flex\">

        <div class=\"container ok\">
            ";
        // line 23
        echo "
            <!--div contient forMulaire et iMages-->
            <div>

                <div class=\"col-md-7\">
                    <h2 class=\"mg-sec-left-title\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new Twig_Error_Runtime('Variable "salle" does not exist.', 28, $this->source); })()), "nomComplet", array()));
        echo "</h2>

                    <div style=\"width:600px;heigth:900px\" class=\"mg-gallery-container\">
                        <ul class=\"mg-gallery\" id=\"mg-gallery\">

                            <li><img style=\"width:100%;heigth:200px\" src=\"data:image/png;base64,";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new Twig_Error_Runtime('Variable "salle" does not exist.', 33, $this->source); })()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
                            <li><img style=\"width:100%;heigth:200px\" src=\"data:image/png;base64,";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new Twig_Error_Runtime('Variable "salle" does not exist.', 34, $this->source); })()), "images", array()), 1, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>

                            <li><img style=\"width:100%;heigth:200px\" src=\"data:image/png;base64,";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new Twig_Error_Runtime('Variable "salle" does not exist.', 36, $this->source); })()), "images", array()), 2, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
                          

                        </ul>

                        <ul style=\"width:100% ;heigh:100%\" class=\"mg-gallery-thumb\" id=\"mg-gallery-thumb\">
                            <li><img style=\"width:100%; heigth:100%\" src=\"data:image/png;base64,";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new Twig_Error_Runtime('Variable "salle" does not exist.', 42, $this->source); })()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>

                            <li><img style=\"width:100%; heigth:100%\" src=\"data:image/png;base64,";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new Twig_Error_Runtime('Variable "salle" does not exist.', 44, $this->source); })()), "images", array()), 1, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>
                            <li><img style=\"width:100%; heigth:100%\" src=\"data:image/png;base64,";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new Twig_Error_Runtime('Variable "salle" does not exist.', 45, $this->source); })()), "images", array()), 2, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"Partner Logo\"></li>

                        </ul>
                    </div>
                </div>

                <div style=\"margin-left:10px ; \" class=\"container\">

                    <fieldset >

                        <center>
                            <img style=\"width:100px\" class=\"img-responsive center\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/giphy.gif"), "html", null, true);
        echo "\" alt=\"reservation sen office\"></center>
                        <div style=\"background-color:orange\">
                            <p class=\"h4 text-center mb-4\">RESERVATION</p>
                        </br>
                        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), 'form_start');
        echo "
                        <div style=\"margin-left:20px\" class=\"md-form\">
                            <i class=\"fa fa-user prefix grey-text\"></i>
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "client", array()), "nomComplet", array())), 'row', array("attr" => array("placeholder" => "Boubacar SECK", "class" => "form-control")));
        echo "
                        </div>

                        <div style=\"width:110px\" class=\"md-form\">
                            <i class=\"fa fa-phone prefix grey-text\"></i>
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "client", array()), "telephone", array())), 'row', array("attr" => array("placeholder" => "770000000", "class" => "form-control")));
        echo "
                        </div>

                        <div class=\"md-form\">
                            <i class=\"fa fa-envelope prefix grey-text\"></i>
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "client", array()), "mail", array())), 'row', array("attr" => array("placeholder" => "senoffice@gmail.com", "class" => "form-control")));
        echo "
                        </div>
                        <div style=\"margin-left:20px\" class=\"md-form\">
                            <i class=\"fa fa-clock prefix grey-text\"></i>
                            <label >
                                Date et Heure début de Cérémonie
                                ";
        // line 79
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "debut", array()), 'errors')) {
            // line 80
            echo "                                    <div class=\"alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "debut", array())), 'errors');
            echo "
                                    </div>
                                ";
        }
        // line 83
        echo "                            </label>
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), "debut", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div style=\"margin-left:20px\" class=\"md-form\">
                            <i class=\"fa fa-clock\"></i>
                            <label >
                                Date et Heure Fin de Cérémonie
                                ";
        // line 90
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->source); })()), "fin", array()), 'errors')) {
            // line 91
            echo "                                    <div class=\"alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), "fin", array()), 'errors');
            echo "
                                    </div>
                                ";
        }
        // line 94
        echo "                            </label>
                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->source); })()), "fin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>

                        <div class=\"text-center mt-4\">
                            <input class=\"btn btn-dark\" type=\"submit\" name=\"reserver\" value=\"Reserver\">
                        </div>
                        ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->source); })()), 'form_end');
        echo "
                    </div>

                </fieldset>

            </div>
        </div>

    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_recherche($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recherche"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_apropos($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "apropos"));

        // line 117
        echo "


";
        // line 120
        if ((twig_length_filter($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new Twig_Error_Runtime('Variable "commentaires" does not exist.', 120, $this->source); })())) > 0)) {
            // line 121
            echo "
<div class=\"card \">
    <div class=\"panel panel-warning\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 125
            echo twig_length_filter($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new Twig_Error_Runtime('Variable "commentaires" does not exist.', 125, $this->source); })()));
            echo "
                ";
            // line 126
            if ((twig_length_filter($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new Twig_Error_Runtime('Variable "commentaires" does not exist.', 126, $this->source); })())) == 1)) {
                // line 127
                echo "                    Commentaire Pour cette Publication
                ";
            } else {
                // line 129
                echo "                    Commentaires Pour cette Publication
                ";
            }
            // line 131
            echo "            ";
        }
        // line 132
        echo "            </h4>
       </div>
    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new Twig_Error_Runtime('Variable "commentaires" does not exist.', 134, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 135
            echo "        <div class=\"panel-body\">
        
            <div class=\"inbox-widget  \">

                <a>
                    <div class=\"inbox-item \">
                        <div class=\"inbox-item-img\"><img src=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"\"></div>
                        <p class=\"inbox-item-author\">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", array()), "username", array()));
            echo "</p>
                        <h5><p class=\"\">  ";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenu", array()));
            echo "</p>  </h5>
                        <p class=\"inbox-item-date\">";
            // line 144
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "datePub", array())), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>  
                    </div>
                </a>
            </div>
        </div>
           ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 150
            echo "        <center>
            <button class=\"btn btn-main \">Pas de Commentaires diponibles Soyez le premier à commenter</button>

        </center>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "    </div>

</div>
<br>
<!-- end col -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function block_partenaires($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "partenaires"));

        // line 165
        echo "
";
        // line 166
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 166, $this->source); })()), "user", array())) {
            // line 167
            echo "
<div>

";
            // line 170
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 170, $this->source); })()), 'form_start');
            echo "

<label style=\"margin-left:20px\"  >

    Ajouter Commentaires
    ";
            // line 175
            if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 175, $this->source); })()), "contenu", array()), 'errors')) {
                // line 176
                echo "        <div class=\"alert alert-danger\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 176, $this->source); })()), "contenu", array()), 'errors');
                echo "
        </div>
    ";
            }
            // line 179
            echo "</label>
";
            // line 180
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 180, $this->source); })()), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "

<input  style=\"margin-left:140px\" class=\"btn btn-main\" type=\"submit\" name=\"comment\" value=\"Commenter\">

";
            // line 184
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new Twig_Error_Runtime('Variable "formC" does not exist.', 184, $this->source); })()), 'form_end');
            echo "
</div>
<br>

";
        }
        // line 189
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 192
    public function block_galerie($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "galerie"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 193
    public function block_form($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/reserver-salle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 193,  460 => 192,  448 => 189,  440 => 184,  433 => 180,  430 => 179,  423 => 176,  421 => 175,  413 => 170,  408 => 167,  406 => 166,  403 => 165,  394 => 164,  377 => 155,  367 => 150,  356 => 144,  352 => 143,  348 => 142,  344 => 141,  336 => 135,  331 => 134,  327 => 132,  324 => 131,  320 => 129,  316 => 127,  314 => 126,  310 => 125,  304 => 121,  302 => 120,  297 => 117,  288 => 116,  271 => 114,  249 => 101,  240 => 95,  237 => 94,  230 => 91,  228 => 90,  219 => 84,  216 => 83,  209 => 80,  207 => 79,  198 => 73,  190 => 68,  182 => 63,  176 => 60,  169 => 56,  155 => 45,  151 => 44,  146 => 42,  137 => 36,  132 => 34,  128 => 33,  120 => 28,  113 => 23,  107 => 15,  105 => 14,  96 => 13,  81 => 7,  72 => 6,  54 => 3,  44 => 1,  42 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'front.html.twig' %}

{% block title %}Reserever{% endblock %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}

{% block slide %}
    <div>
        <br><br>

    </div>

{% endblock %}
{% block offre %}
    {# {%for bien in  biens %} #}

    <div class=\"mg-best-rooms maclasse\" style=\"display:flex\">

        <div class=\"container ok\">
            {# <div id=\"alertreseravtion\" class=\"alert alert-success text-center\">
                <strong >Success! Votre Résévation est prise en compte Nous vous contacterons sous peu
                </strong>
            </div> #}

            <!--div contient forMulaire et iMages-->
            <div>

                <div class=\"col-md-7\">
                    <h2 class=\"mg-sec-left-title\">{{ salle.nomComplet |e |raw }}</h2>

                    <div style=\"width:600px;heigth:900px\" class=\"mg-gallery-container\">
                        <ul class=\"mg-gallery\" id=\"mg-gallery\">

                            <li><img style=\"width:100%;heigth:200px\" src=\"data:image/png;base64,{{salle.images[0].image}}\" alt=\"Partner Logo\"></li>
                            <li><img style=\"width:100%;heigth:200px\" src=\"data:image/png;base64,{{salle.images[1].image}}\" alt=\"Partner Logo\"></li>

                            <li><img style=\"width:100%;heigth:200px\" src=\"data:image/png;base64,{{salle.images[2].image}}\" alt=\"Partner Logo\"></li>
                          

                        </ul>

                        <ul style=\"width:100% ;heigh:100%\" class=\"mg-gallery-thumb\" id=\"mg-gallery-thumb\">
                            <li><img style=\"width:100%; heigth:100%\" src=\"data:image/png;base64,{{salle.images[0].image}}\" alt=\"Partner Logo\"></li>

                            <li><img style=\"width:100%; heigth:100%\" src=\"data:image/png;base64,{{salle.images[1].image}}\" alt=\"Partner Logo\"></li>
                            <li><img style=\"width:100%; heigth:100%\" src=\"data:image/png;base64,{{salle.images[2].image}}\" alt=\"Partner Logo\"></li>

                        </ul>
                    </div>
                </div>

                <div style=\"margin-left:10px ; \" class=\"container\">

                    <fieldset >

                        <center>
                            <img style=\"width:100px\" class=\"img-responsive center\" src=\"{{asset('assets/images/users/giphy.gif')}}\" alt=\"reservation sen office\"></center>
                        <div style=\"background-color:orange\">
                            <p class=\"h4 text-center mb-4\">RESERVATION</p>
                        </br>
                        {{ form_start(form)}}
                        <div style=\"margin-left:20px\" class=\"md-form\">
                            <i class=\"fa fa-user prefix grey-text\"></i>
                            {{ form_row(form.client.nomComplet |raw |e,{'attr':{'placeholder':'Boubacar SECK','class':\"form-control\"}})}}
                        </div>

                        <div style=\"width:110px\" class=\"md-form\">
                            <i class=\"fa fa-phone prefix grey-text\"></i>
                            {{ form_row(form.client.telephone |raw |e,{'attr':{'placeholder':'770000000','class':\"form-control\"}})}}
                        </div>

                        <div class=\"md-form\">
                            <i class=\"fa fa-envelope prefix grey-text\"></i>
                            {{ form_row(form.client.mail |raw |e,{'attr':{'placeholder':'senoffice@gmail.com','class':\"form-control\"}})}}
                        </div>
                        <div style=\"margin-left:20px\" class=\"md-form\">
                            <i class=\"fa fa-clock prefix grey-text\"></i>
                            <label >
                                Date et Heure début de Cérémonie
                                {% if form_errors(form.debut) %}
                                    <div class=\"alert alert-danger\">{{ form_errors(form.debut |raw |e) }}
                                    </div>
                                {% endif %}
                            </label>
                            {{ form_widget(form.debut,{'attr':{'class':\"form-control\"}})}}
                        </div>
                        <div style=\"margin-left:20px\" class=\"md-form\">
                            <i class=\"fa fa-clock\"></i>
                            <label >
                                Date et Heure Fin de Cérémonie
                                {% if form_errors(form.fin) %}
                                    <div class=\"alert alert-danger\">{{ form_errors(form.fin) }}
                                    </div>
                                {% endif %}
                            </label>
                            {{ form_widget(form.fin,{'attr':{'class':\"form-control\"}})}}
                        </div>

                        <div class=\"text-center mt-4\">
                            <input class=\"btn btn-dark\" type=\"submit\" name=\"reserver\" value=\"Reserver\">
                        </div>
                        {{ form_end(form)}}
                    </div>

                </fieldset>

            </div>
        </div>

    </div>
</div>

{% endblock %}

{% block recherche %}{% endblock %}

{% block apropos %}



{% if commentaires | length > 0 %}

<div class=\"card \">
    <div class=\"panel panel-warning\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">{{commentaires|length |raw }}
                {% if commentaires | length == 1 %}
                    Commentaire Pour cette Publication
                {% else %}
                    Commentaires Pour cette Publication
                {% endif %}
            {% endif %}
            </h4>
       </div>
    {% for commentaire in commentaires %}
        <div class=\"panel-body\">
        
            <div class=\"inbox-widget  \">

                <a>
                    <div class=\"inbox-item \">
                        <div class=\"inbox-item-img\"><img src=\"{{asset('assets/images/users/avatar-2.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                        <p class=\"inbox-item-author\">{{commentaire.user.username |e |raw }}</p>
                        <h5><p class=\"\">  {{commentaire.contenu |e |raw }}</p>  </h5>
                        <p class=\"inbox-item-date\">{{commentaire.datePub |e |raw  |date('Y-m-d H:i:s') }}</p>  
                    </div>
                </a>
            </div>
        </div>
           {% else %}
        <center>
            <button class=\"btn btn-main \">Pas de Commentaires diponibles Soyez le premier à commenter</button>

        </center>
{% endfor %}
    </div>

</div>
<br>
<!-- end col -->


{% endblock %}

{% block partenaires %}

{% if app.user %}

<div>

{{ form_start(formC)}}

<label style=\"margin-left:20px\"  >

    Ajouter Commentaires
    {% if form_errors(formC.contenu) %}
        <div class=\"alert alert-danger\">{{ form_errors(formC.contenu) }}
        </div>
    {% endif %}
</label>
{{ form_widget(formC.contenu,{'attr':{'class':\"form-control\"}})}}

<input  style=\"margin-left:140px\" class=\"btn btn-main\" type=\"submit\" name=\"comment\" value=\"Commenter\">

{{ form_end(formC)}}
</div>
<br>

{% endif %}


{% endblock %}
{% block galerie %}{% endblock %}
{% block form %}{% endblock %}", "front/reserver-salle.html.twig", "/var/www/html/scjdchjdfdhjeseze/projet/templates/front/reserver-salle.html.twig");
    }
}
