<?php

/* layout.twig */
class __TwigTemplate_405646ae03b57badaa35d9a57446574109d208207dbd83993eac79c36cf7709d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'navbar' => array($this, 'block_navbar'),
            'topnavbar' => array($this, 'block_topnavbar'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "    </head>

    <body>


        <div id=\"wrapper\">

            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\">
                ";
        // line 36
        $this->displayBlock('navbar', $context, $blocks);
        // line 39
        echo "            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id=\"page-content-wrapper\">
                <div class=\"container-fluid\">

                    <nav class=\"navbar navbar-default  \">
                        <div class=\"navbar-header\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    ";
        // line 50
        $this->displayBlock('topnavbar', $context, $blocks);
        // line 76
        echo "                                </div>
                            </div>
                        </div>
                    </nav>
                    ";
        // line 80
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 110
        echo "
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            ";
        // line 113
        $this->displayBlock('content', $context, $blocks);
        // line 116
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/jquery.js\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>

        <!-- Menu Toggle Script -->
        <script>
            \$(\"#menu-toggle\").click(function (e) {
                e.preventDefault();
                \$(\"#wrapper\").toggleClass(\"toggled\");
            });
        </script>

    </body>

</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">

            <title>Dieting with Slim</title>

            <!-- Bootstrap Core CSS -->
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">

            <!-- Custom CSS -->
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/simple-sidebar.css\" rel=\"stylesheet\">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
            <![endif]-->
        ";
    }

    // line 36
    public function block_navbar($context, array $blocks = array())
    {
        // line 37
        echo "                    ";
        // line 38
        echo "                ";
    }

    // line 50
    public function block_topnavbar($context, array $blocks = array())
    {
        // line 51
        echo "                                        <div class=\"col-sm-3\">
                                            <a href=\"#menu-toggle\" class=\"btn btn-default navbar-text\" id=\"menu-toggle\">Toggle Menu</a>
                                        </div>
                                        <div class=\"dropdown col-sm-4\">
                                            <button class=\"btn  btn-default dropdown-toggle navbar-text\" type=\"button\"
                                                    data-toggle=\"dropdown\">Calculators
                                                <span class=\"caret\"></span></button>
                                            <ul class=\"dropdown-menu\">
                                                <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("bmi"), "html", null, true);
        echo "\">BMI</a></li>
                                                <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("bmr"), "html", null, true);
        echo "\">BMR</a></li>
                                            </ul>
                                        </div>

                                        <div class=\"dropdown col-sm-5\">
                                            <button class=\"btn  btn-default dropdown-toggle navbar-text\" type=\"button\"
                                                    data-toggle=\"dropdown\">User
                                                <span class=\"caret\"></span></button>
                                            <ul class=\"dropdown-menu\">
                                                ";
        // line 69
        if ( !(isset($context["userLogged"]) ? $context["userLogged"] : null)) {
            echo " <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("login"), "html", null, true);
            echo "\">Login</a></li> ";
        }
        // line 70
        echo "                                               ";
        if ((isset($context["userLogged"]) ? $context["userLogged"] : null)) {
            echo "  <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("user-edit"), "html", null, true);
            echo "\">Profile</a></li>
                                                <li><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("logout"), "html", null, true);
            echo "\">Logout</a></li> ";
        }
        // line 72
        echo "                                            </ul>
                                        </div>

                                    ";
    }

    // line 80
    public function block_flash_messages($context, array $blocks = array())
    {
        // line 81
        echo "                        ";
        if ($this->getAttribute((isset($context["flash_messages"]) ? $context["flash_messages"] : null), "success", array())) {
            // line 82
            echo "                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"alert alert-success\" role=\"alert\">
                                        ";
            // line 86
            echo "                                        <ul>
                                            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["flash_messages"]) ? $context["flash_messages"] : null), "success", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 88
                echo "                                                <li>";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 95
        echo "                        ";
        if ($this->getAttribute((isset($context["flash_messages"]) ? $context["flash_messages"] : null), "danger", array())) {
            // line 96
            echo "                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"alert alert-danger\" role=\"alert\">
                                        ";
            // line 100
            echo "                                        <ul>
                                            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["flash_messages"]) ? $context["flash_messages"] : null), "danger", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 102
                echo "                                                <li>";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 109
        echo "                    ";
    }

    // line 113
    public function block_content($context, array $blocks = array())
    {
        // line 114
        echo "                                ";
        // line 115
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 115,  279 => 114,  276 => 113,  272 => 109,  265 => 104,  256 => 102,  252 => 101,  249 => 100,  244 => 96,  241 => 95,  234 => 90,  225 => 88,  221 => 87,  218 => 86,  213 => 82,  210 => 81,  207 => 80,  200 => 72,  196 => 71,  189 => 70,  183 => 69,  171 => 60,  167 => 59,  157 => 51,  154 => 50,  150 => 38,  148 => 37,  145 => 36,  132 => 18,  126 => 15,  115 => 6,  112 => 5,  94 => 130,  88 => 127,  75 => 116,  73 => 113,  68 => 110,  66 => 80,  60 => 76,  58 => 50,  45 => 39,  43 => 36,  32 => 27,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/*         {% block head %}*/
/*             <meta charset="utf-8">*/
/*             <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*             <meta name="description" content="">*/
/*             <meta name="author" content="">*/
/* */
/*             <title>Dieting with Slim</title>*/
/* */
/*             <!-- Bootstrap Core CSS -->*/
/*             <link href="{{ base_url() }}/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*             <!-- Custom CSS -->*/
/*             <link href="{{ base_url() }}/css/simple-sidebar.css" rel="stylesheet">*/
/* */
/*             <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*             <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*             <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*             <![endif]-->*/
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>*/
/* */
/* */
/*         <div id="wrapper">*/
/* */
/*             <!-- Sidebar -->*/
/*             <div id="sidebar-wrapper">*/
/*                 {% block navbar %}*/
/*                     {# Left side menu #}*/
/*                 {% endblock %}*/
/*             </div>*/
/*             <!-- /#sidebar-wrapper -->*/
/* */
/*             <!-- Page Content -->*/
/*             <div id="page-content-wrapper">*/
/*                 <div class="container-fluid">*/
/* */
/*                     <nav class="navbar navbar-default  ">*/
/*                         <div class="navbar-header">*/
/*                             <div class="container-fluid">*/
/*                                 <div class="row">*/
/*                                     {% block topnavbar %}*/
/*                                         <div class="col-sm-3">*/
/*                                             <a href="#menu-toggle" class="btn btn-default navbar-text" id="menu-toggle">Toggle Menu</a>*/
/*                                         </div>*/
/*                                         <div class="dropdown col-sm-4">*/
/*                                             <button class="btn  btn-default dropdown-toggle navbar-text" type="button"*/
/*                                                     data-toggle="dropdown">Calculators*/
/*                                                 <span class="caret"></span></button>*/
/*                                             <ul class="dropdown-menu">*/
/*                                                 <li><a href="{{ path_for('bmi') }}">BMI</a></li>*/
/*                                                 <li><a href="{{ path_for('bmr') }}">BMR</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/* */
/*                                         <div class="dropdown col-sm-5">*/
/*                                             <button class="btn  btn-default dropdown-toggle navbar-text" type="button"*/
/*                                                     data-toggle="dropdown">User*/
/*                                                 <span class="caret"></span></button>*/
/*                                             <ul class="dropdown-menu">*/
/*                                                 {% if not userLogged %} <li><a href="{{ path_for('login') }}">Login</a></li> {% endif %}*/
/*                                                {% if  userLogged %}  <li><a href="{{ path_for('user-edit') }}">Profile</a></li>*/
/*                                                 <li><a href="{{ path_for('logout') }}">Logout</a></li> {% endif %}*/
/*                                             </ul>*/
/*                                         </div>*/
/* */
/*                                     {% endblock %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </nav>*/
/*                     {% block flash_messages %}*/
/*                         {% if flash_messages.success %}*/
/*                             <div class="row">*/
/*                                 <div class="col-lg-12">*/
/*                                     <div class="alert alert-success" role="alert">*/
/*                                         {# display flash messages #}*/
/*                                         <ul>*/
/*                                             {% for msg in flash_messages.success %}*/
/*                                                 <li>{{ msg }}</li>*/
/*                                                 {% endfor %}*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                         {% if flash_messages.danger %}*/
/*                             <div class="row">*/
/*                                 <div class="col-lg-12">*/
/*                                     <div class="alert alert-danger" role="alert">*/
/*                                         {# display flash messages #}*/
/*                                         <ul>*/
/*                                             {% for msg in flash_messages.danger %}*/
/*                                                 <li>{{ msg }}</li>*/
/*                                                 {% endfor %}*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     {% endblock %}*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             {% block content %}*/
/*                                 {# Main Page content #}*/
/*                             {% endblock %}*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /#page-content-wrapper -->*/
/* */
/*         </div>*/
/*         <!-- /#wrapper -->*/
/* */
/*         <!-- jQuery -->*/
/*         <script src="{{ base_url() }}/js/jquery.js"></script>*/
/* */
/*         <!-- Bootstrap Core JavaScript -->*/
/*         <script src="{{ base_url() }}/js/bootstrap.min.js"></script>*/
/* */
/*         <!-- Menu Toggle Script -->*/
/*         <script>*/
/*             $("#menu-toggle").click(function (e) {*/
/*                 e.preventDefault();*/
/*                 $("#wrapper").toggleClass("toggled");*/
/*             });*/
/*         </script>*/
/* */
/*     </body>*/
/* */
/* </html>*/
/* */
