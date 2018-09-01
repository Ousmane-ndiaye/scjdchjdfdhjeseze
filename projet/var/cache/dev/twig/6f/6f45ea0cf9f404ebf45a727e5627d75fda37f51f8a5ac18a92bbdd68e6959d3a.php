<?php

/* back/index.html.twig */
class __TwigTemplate_4d8e6a07bb5f029d1cac3f0b14d8f8bfc94f90ec77155da09c7a4f7d43c84a2b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("back/base.html.twig", "back/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titrepage' => array($this, 'block_titrepage'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "back/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back/index.html.twig"));

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

        echo " Tableau de bord ";
        
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

        echo "Bienvenue !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <!-- Start Widget -->
    <!--Widget-4 -->
    <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bx-shadow bg-white\">
                <span class=\"mini-stat-icon bg-info\"><i class=\"ion-social-usd\"></i></span>
                <div class=\"mini-stat-info text-right text-dark\">
                    <span class=\"counter text-dark\">15852</span>
                    Total Sales
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">60%</span></h5>
                        <div class=\"progress progress-sm m-0\">
                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                <span class=\"sr-only\">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bx-shadow bg-white\">
                <span class=\"mini-stat-icon bg-purple\"><i class=\"ion-ios7-cart\"></i></span>
                <div class=\"mini-stat-info text-right text-dark\">
                    <span class=\"counter text-dark\">956</span>
                    New Orders
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">90%</span></h5>
                        <div class=\"progress progress-sm m-0\">
                            <div class=\"progress-bar progress-bar-purple\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\">
                                <span class=\"sr-only\">90% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bx-shadow bg-white\">
                <span class=\"mini-stat-icon bg-success\"><i class=\"ion-android-contacts\"></i></span>
                <div class=\"mini-stat-info text-right text-dark\">
                    <span class=\"counter text-dark\">5210</span>
                    New Users
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">57%</span></h5>
                        <div class=\"progress progress-sm m-0\">
                            <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"57\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 57%\">
                                <span class=\"sr-only\">57% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bx-shadow bg-white\">
                <span class=\"mini-stat-icon bg-primary\"><i class=\"ion-eye\"></i></span>
                <div class=\"mini-stat-info text-right text-dark\">
                    <span class=\"counter text-dark\">20544</span>
                    Unique Visitors
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">60%</span></h5>
                        <div class=\"progress progress-sm m-0\">
                            <div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                <span class=\"sr-only\">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End row-->


    <div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"portlet\"><!-- /portlet heading -->
                <div class=\"portlet-heading\">
                    <h3 class=\"portlet-title text-dark text-uppercase\">
                        Website Stats
                    </h3>
                    <div class=\"portlet-widgets\">
                        <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                        <span class=\"divider\"></span>
                        <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet1\"><i class=\"ion-minus-round\"></i></a>
                        <span class=\"divider\"></span>
                        <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div id=\"portlet1\" class=\"panel-collapse collapse in\">
                    <div class=\"portlet-body\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div id=\"website-stats\" style=\"position: relative;height: 320px\"></div>
                                <div class=\"row text-center m-t-30\">
                                    <div class=\"col-sm-4\">
                                        <h4 class=\"counter\">86,956</h4>
                                        <small class=\"text-muted\"> Weekly Report</small>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <h4 class=\"counter\">86,69</h4>
                                        <small class=\"text-muted\">Monthly Report</small>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <h4 class=\"counter\">948,16</h4>
                                        <small class=\"text-muted\">Yearly Report</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /Portlet -->
        </div> <!-- end col -->

        <div class=\"col-lg-4\">
            <div class=\"portlet\"><!-- /portlet heading -->
                <div class=\"portlet-heading\">
                    <h3 class=\"portlet-title text-dark text-uppercase\">
                        Website Stats
                    </h3>
                    <div class=\"portlet-widgets\">
                        <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                        <span class=\"divider\"></span>
                        <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet2\"><i class=\"ion-minus-round\"></i></a>
                        <span class=\"divider\"></span>
                        <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div id=\"portlet2\" class=\"panel-collapse collapse in\">
                    <div class=\"portlet-body\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div id=\"pie-chart\">
                                    <div id=\"pie-chart-container\" class=\"flot-chart\" style=\"height: 320px\">
                                    </div>
                                </div>

                                <div class=\"row text-center m-t-30\">
                                    <div class=\"col-sm-6\">
                                        <h4 class=\"counter\">86,956</h4>
                                        <small class=\"text-muted\"> Weekly Report</small>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <h4 class=\"counter\">86,69</h4>
                                        <small class=\"text-muted\">Monthly Report</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /Portlet -->
        </div> <!-- end col -->
    </div> <!-- End row -->


    <div class=\"row\">
        <!-- INBOX -->
        <div class=\"col-lg-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">Inbox</h4>
                </div>
                <div class=\"panel-body\">
                    <div class=\"inbox-widget nicescroll mx-box\">
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-1.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Chadengle</p>
                                <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                <p class=\"inbox-item-date\">13:40 PM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Tomaslau</p>
                                <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                <p class=\"inbox-item-date\">13:34 PM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-3.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Stillnotdavid</p>
                                <p class=\"inbox-item-text\">This theme is awesome!</p>
                                <p class=\"inbox-item-date\">13:17 PM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-4.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Kurafire</p>
                                <p class=\"inbox-item-text\">Nice to meet you</p>
                                <p class=\"inbox-item-date\">12:20 PM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-5.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Shahedk</p>
                                <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                <p class=\"inbox-item-date\">10:15 AM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-6.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Adhamdannaway</p>
                                <p class=\"inbox-item-text\">This theme is awesome!</p>
                                <p class=\"inbox-item-date\">9:56 AM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-8.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Arashasghari</p>
                                <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                <p class=\"inbox-item-date\">10:15 AM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-9.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Joshaustin</p>
                                <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                <p class=\"inbox-item-date\">9:56 AM</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <!-- CHAT -->
        <div class=\"col-lg-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Chat</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"chat-conversation\">
                        <ul class=\"conversation-list nicescroll\">
                            <li class=\"clearfix\">
                                <div class=\"chat-avatar\">
                                    <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"male\">
                                    <i>10:00</i>
                                </div>
                                <div class=\"conversation-text\">
                                    <div class=\"ctext-wrap\">
                                        <i>John Deo</i>
                                        <p>
                                            Hello!
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"clearfix odd\">
                                <div class=\"chat-avatar\">
                                    <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-5.jpg"), "html", null, true);
        echo "\" alt=\"Female\">
                                    <i>10:01</i>
                                </div>
                                <div class=\"conversation-text\">
                                    <div class=\"ctext-wrap\">
                                        <i>Smith</i>
                                        <p>
                                            Hi, How are you? What about our next meeting?
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"clearfix\">
                                <div class=\"chat-avatar\">
                                    <img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"male\">
                                    <i>10:01</i>
                                </div>
                                <div class=\"conversation-text\">
                                    <div class=\"ctext-wrap\">
                                        <i>John Deo</i>
                                        <p>
                                            Yeah everything is fine
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"clearfix odd\">
                                <div class=\"chat-avatar\">
                                    <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-5.jpg"), "html", null, true);
        echo "\" alt=\"male\">
                                    <i>10:02</i>
                                </div>
                                <div class=\"conversation-text\">
                                    <div class=\"ctext-wrap\">
                                        <i>Smith</i>
                                        <p>
                                            Wow that's great
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class=\"row\">
                            <div class=\"col-sm-9 chat-inputbar\">
                                <input type=\"text\" class=\"form-control chat-input\" placeholder=\"Enter your text\">
                            </div>
                            <div class=\"col-sm-3 chat-send\">
                                <button type=\"submit\" class=\"btn btn-info btn-block waves-effect waves-light\">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->


        <!-- TODOs -->
        <div class=\"col-lg-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Todo</h3>
                </div>
                <div class=\"panel-body todoapp\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <h4 id=\"todo-message\"><span id=\"todo-remaining\"></span> of <span id=\"todo-total\"></span> remaining</h4>
                        </div>
                        <div class=\"col-sm-6\">
                            <a href=\"\" class=\"pull-right btn btn-primary btn-sm waves-effect waves-light\" id=\"btn-archive\">Archive</a>
                        </div>
                    </div>

                    <ul class=\"list-group no-margn nicescroll todo-list\" style=\"max-height: 288px\" id=\"todo-list\"></ul>

                    <form name=\"todo-form\" id=\"todo-form\" role=\"form\" class=\"m-t-20\">
                        <div class=\"row\">
                            <div class=\"col-sm-9 todo-inputbar\">
                                <input type=\"text\" id=\"todo-input-text\" name=\"todo-input-text\" class=\"form-control\" placeholder=\"Add new todo\">
                            </div>
                            <div class=\"col-sm-3 todo-send\">
                                <button class=\"btn-primary btn-block btn waves-effect waves-light\" type=\"button\" id=\"todo-btn-submit\">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 367
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 368
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- jQuery  -->
    <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    <script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>


    <!-- flot Chart -->
    <script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.selection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/flot-chart/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/jquery.todo.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/jquery.chat.js"), "html", null, true);
        echo "\"></script>

    <!-- jQuery  -->
    <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/jquery.dashboard.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        /* ==============================================
        Counter Up
        =============================================== */
        jQuery(document).ready(function(\$) {
            \$('.counter').counterUp({
                delay: 100,
                time: 1200
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 397,  573 => 394,  567 => 391,  561 => 388,  557 => 387,  553 => 386,  549 => 385,  545 => 384,  541 => 383,  537 => 382,  533 => 381,  526 => 377,  520 => 374,  516 => 373,  510 => 370,  504 => 368,  495 => 367,  425 => 306,  408 => 292,  391 => 278,  374 => 264,  349 => 242,  338 => 234,  327 => 226,  316 => 218,  305 => 210,  294 => 202,  283 => 194,  272 => 186,  92 => 8,  83 => 7,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'back/base.html.twig' %}

{% block title %} Tableau de bord {% endblock %}

{% block titrepage %}Bienvenue !{% endblock %}

{% block main %}
    <!-- Start Widget -->
    <!--Widget-4 -->
    <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bx-shadow bg-white\">
                <span class=\"mini-stat-icon bg-info\"><i class=\"ion-social-usd\"></i></span>
                <div class=\"mini-stat-info text-right text-dark\">
                    <span class=\"counter text-dark\">15852</span>
                    Total Sales
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">60%</span></h5>
                        <div class=\"progress progress-sm m-0\">
                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                <span class=\"sr-only\">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bx-shadow bg-white\">
                <span class=\"mini-stat-icon bg-purple\"><i class=\"ion-ios7-cart\"></i></span>
                <div class=\"mini-stat-info text-right text-dark\">
                    <span class=\"counter text-dark\">956</span>
                    New Orders
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">90%</span></h5>
                        <div class=\"progress progress-sm m-0\">
                            <div class=\"progress-bar progress-bar-purple\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\">
                                <span class=\"sr-only\">90% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bx-shadow bg-white\">
                <span class=\"mini-stat-icon bg-success\"><i class=\"ion-android-contacts\"></i></span>
                <div class=\"mini-stat-info text-right text-dark\">
                    <span class=\"counter text-dark\">5210</span>
                    New Users
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">57%</span></h5>
                        <div class=\"progress progress-sm m-0\">
                            <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"57\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 57%\">
                                <span class=\"sr-only\">57% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bx-shadow bg-white\">
                <span class=\"mini-stat-icon bg-primary\"><i class=\"ion-eye\"></i></span>
                <div class=\"mini-stat-info text-right text-dark\">
                    <span class=\"counter text-dark\">20544</span>
                    Unique Visitors
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase\">Target <span class=\"pull-right\">60%</span></h5>
                        <div class=\"progress progress-sm m-0\">
                            <div class=\"progress-bar progress-bar-primary\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                <span class=\"sr-only\">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End row-->


    <div class=\"row\">
        <div class=\"col-lg-8\">
            <div class=\"portlet\"><!-- /portlet heading -->
                <div class=\"portlet-heading\">
                    <h3 class=\"portlet-title text-dark text-uppercase\">
                        Website Stats
                    </h3>
                    <div class=\"portlet-widgets\">
                        <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                        <span class=\"divider\"></span>
                        <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet1\"><i class=\"ion-minus-round\"></i></a>
                        <span class=\"divider\"></span>
                        <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div id=\"portlet1\" class=\"panel-collapse collapse in\">
                    <div class=\"portlet-body\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div id=\"website-stats\" style=\"position: relative;height: 320px\"></div>
                                <div class=\"row text-center m-t-30\">
                                    <div class=\"col-sm-4\">
                                        <h4 class=\"counter\">86,956</h4>
                                        <small class=\"text-muted\"> Weekly Report</small>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <h4 class=\"counter\">86,69</h4>
                                        <small class=\"text-muted\">Monthly Report</small>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <h4 class=\"counter\">948,16</h4>
                                        <small class=\"text-muted\">Yearly Report</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /Portlet -->
        </div> <!-- end col -->

        <div class=\"col-lg-4\">
            <div class=\"portlet\"><!-- /portlet heading -->
                <div class=\"portlet-heading\">
                    <h3 class=\"portlet-title text-dark text-uppercase\">
                        Website Stats
                    </h3>
                    <div class=\"portlet-widgets\">
                        <a href=\"javascript:;\" data-toggle=\"reload\"><i class=\"ion-refresh\"></i></a>
                        <span class=\"divider\"></span>
                        <a data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#portlet2\"><i class=\"ion-minus-round\"></i></a>
                        <span class=\"divider\"></span>
                        <a href=\"#\" data-toggle=\"remove\"><i class=\"ion-close-round\"></i></a>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div id=\"portlet2\" class=\"panel-collapse collapse in\">
                    <div class=\"portlet-body\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div id=\"pie-chart\">
                                    <div id=\"pie-chart-container\" class=\"flot-chart\" style=\"height: 320px\">
                                    </div>
                                </div>

                                <div class=\"row text-center m-t-30\">
                                    <div class=\"col-sm-6\">
                                        <h4 class=\"counter\">86,956</h4>
                                        <small class=\"text-muted\"> Weekly Report</small>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <h4 class=\"counter\">86,69</h4>
                                        <small class=\"text-muted\">Monthly Report</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /Portlet -->
        </div> <!-- end col -->
    </div> <!-- End row -->


    <div class=\"row\">
        <!-- INBOX -->
        <div class=\"col-lg-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">Inbox</h4>
                </div>
                <div class=\"panel-body\">
                    <div class=\"inbox-widget nicescroll mx-box\">
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"{{asset('assets/images/users/avatar-1.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Chadengle</p>
                                <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                <p class=\"inbox-item-date\">13:40 PM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"{{asset('assets/images/users/avatar-2.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Tomaslau</p>
                                <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                <p class=\"inbox-item-date\">13:34 PM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"{{asset('assets/images/users/avatar-3.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Stillnotdavid</p>
                                <p class=\"inbox-item-text\">This theme is awesome!</p>
                                <p class=\"inbox-item-date\">13:17 PM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"{{asset('assets/images/users/avatar-4.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Kurafire</p>
                                <p class=\"inbox-item-text\">Nice to meet you</p>
                                <p class=\"inbox-item-date\">12:20 PM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"{{asset('assets/images/users/avatar-5.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Shahedk</p>
                                <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                <p class=\"inbox-item-date\">10:15 AM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"{{asset('assets/images/users/avatar-6.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Adhamdannaway</p>
                                <p class=\"inbox-item-text\">This theme is awesome!</p>
                                <p class=\"inbox-item-date\">9:56 AM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"{{asset('assets/images/users/avatar-8.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Arashasghari</p>
                                <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                <p class=\"inbox-item-date\">10:15 AM</p>
                            </div>
                        </a>
                        <a href=\"#\">
                            <div class=\"inbox-item\">
                                <div class=\"inbox-item-img\"><img src=\"{{asset('assets/images/users/avatar-9.jpg')}}\" class=\"img-circle\" alt=\"\"></div>
                                <p class=\"inbox-item-author\">Joshaustin</p>
                                <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                <p class=\"inbox-item-date\">9:56 AM</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <!-- CHAT -->
        <div class=\"col-lg-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Chat</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"chat-conversation\">
                        <ul class=\"conversation-list nicescroll\">
                            <li class=\"clearfix\">
                                <div class=\"chat-avatar\">
                                    <img src=\"{{asset('assets/images/avatar-1.jpg')}}\" alt=\"male\">
                                    <i>10:00</i>
                                </div>
                                <div class=\"conversation-text\">
                                    <div class=\"ctext-wrap\">
                                        <i>John Deo</i>
                                        <p>
                                            Hello!
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"clearfix odd\">
                                <div class=\"chat-avatar\">
                                    <img src=\"{{asset('assets/images/users/avatar-5.jpg')}}\" alt=\"Female\">
                                    <i>10:01</i>
                                </div>
                                <div class=\"conversation-text\">
                                    <div class=\"ctext-wrap\">
                                        <i>Smith</i>
                                        <p>
                                            Hi, How are you? What about our next meeting?
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"clearfix\">
                                <div class=\"chat-avatar\">
                                    <img src=\"{{asset('assets/images/avatar-1.jpg')}}\" alt=\"male\">
                                    <i>10:01</i>
                                </div>
                                <div class=\"conversation-text\">
                                    <div class=\"ctext-wrap\">
                                        <i>John Deo</i>
                                        <p>
                                            Yeah everything is fine
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"clearfix odd\">
                                <div class=\"chat-avatar\">
                                    <img src=\"{{asset('assets/images/users/avatar-5.jpg')}}\" alt=\"male\">
                                    <i>10:02</i>
                                </div>
                                <div class=\"conversation-text\">
                                    <div class=\"ctext-wrap\">
                                        <i>Smith</i>
                                        <p>
                                            Wow that's great
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class=\"row\">
                            <div class=\"col-sm-9 chat-inputbar\">
                                <input type=\"text\" class=\"form-control chat-input\" placeholder=\"Enter your text\">
                            </div>
                            <div class=\"col-sm-3 chat-send\">
                                <button type=\"submit\" class=\"btn btn-info btn-block waves-effect waves-light\">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->


        <!-- TODOs -->
        <div class=\"col-lg-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Todo</h3>
                </div>
                <div class=\"panel-body todoapp\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <h4 id=\"todo-message\"><span id=\"todo-remaining\"></span> of <span id=\"todo-total\"></span> remaining</h4>
                        </div>
                        <div class=\"col-sm-6\">
                            <a href=\"\" class=\"pull-right btn btn-primary btn-sm waves-effect waves-light\" id=\"btn-archive\">Archive</a>
                        </div>
                    </div>

                    <ul class=\"list-group no-margn nicescroll todo-list\" style=\"max-height: 288px\" id=\"todo-list\"></ul>

                    <form name=\"todo-form\" id=\"todo-form\" role=\"form\" class=\"m-t-20\">
                        <div class=\"row\">
                            <div class=\"col-sm-9 todo-inputbar\">
                                <input type=\"text\" id=\"todo-input-text\" name=\"todo-input-text\" class=\"form-control\" placeholder=\"Add new todo\">
                            </div>
                            <div class=\"col-sm-3 todo-send\">
                                <button class=\"btn-primary btn-block btn waves-effect waves-light\" type=\"button\" id=\"todo-btn-submit\">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- jQuery  -->
    <script src=\"{{ asset('assets/plugins/moment/moment.js')}}\"></script>

    <!-- jQuery  -->
    <script src=\"{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.js')}}\"></script>
    <script src=\"{{ asset('assets/plugins/counterup/jquery.counterup.min.js')}}\"></script>

    <!-- jQuery  -->
    <script src=\"{{ asset('assets/plugins/sweetalert/dist/sweetalert.min.js')}}\"></script>


    <!-- flot Chart -->
    <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.js')}}\"></script>
    <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.time.js')}}\"></script>
    <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}\"></script>
    <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.resize.js')}}\"></script>
    <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.pie.js')}}\"></script>
    <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.selection.js')}}\"></script>
    <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.stack.js')}}\"></script>
    <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.crosshair.js')}}\"></script>

    <!-- jQuery  -->
    <script src=\"{{ asset('assets/pages/jquery.todo.js')}}\"></script>

    <!-- jQuery  -->
    <script src=\"{{ asset('assets/pages/jquery.chat.js')}}\"></script>

    <!-- jQuery  -->
    <script src=\"{{ asset('assets/pages/jquery.dashboard.js')}}\"></script>

    <script type=\"text/javascript\">
        /* ==============================================
        Counter Up
        =============================================== */
        jQuery(document).ready(function(\$) {
            \$('.counter').counterUp({
                delay: 100,
                time: 1200
            });
        });
    </script>
{% endblock %}", "back/index.html.twig", "/var/www/html/scjdchjdfdhjeseze/projet/templates/back/index.html.twig");
    }
}
