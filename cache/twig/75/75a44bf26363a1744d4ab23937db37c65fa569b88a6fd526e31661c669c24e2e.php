<?php

/* forms/login.twig */
class __TwigTemplate_9b55e33fdf2296ee29a99d2b1ac13c678112defe8c5d5729286d7d6319264592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("md_document.twig", "forms/login.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "md_document.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <h1>Login</h1>


    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("login"), "html", null, true);
        echo "\" method=\"post\">

         <div class=\"form-group ";
        // line 10
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "user_name", array())) {
            echo "has-error";
        }
        echo "\">
            <label class=\"control-label\" for=\"user_name\"> Username or email</label>
            <input type=\"text\" class=\"form-control\" name=\"user_name\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "user_name", array()), "html", null, true);
        echo "\"  />
            ";
        // line 13
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "user_name", array())) {
            echo "<span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "user_name", array()), 0, array()), "html", null, true);
            echo "</span>";
        }
        // line 14
        echo "        </div>

        <div class=\"form-group ";
        // line 16
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array())) {
            echo "has-error";
        }
        echo "\">
            <label class=\"control-label\" for=\"password\"> Password</label>
            <input type=\"text\" class=\"form-control\" name=\"password\" value=\"\"  />
            ";
        // line 19
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array())) {
            echo "<span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "password", array()), 0, array()), "html", null, true);
            echo "</span>";
        }
        // line 20
        echo "        </div>

        <hr>


        <input type=\"hidden\" name=\"csrf_name\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["csrf"]) ? $context["csrf"] : null), "name", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"csrf_value\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["csrf"]) ? $context["csrf"] : null), "value", array()), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        ";
        // line 29
        echo "
    </form>
        <div>       
            <p></p>
            <p></p>
            <p>Not a member:  <a class=\"btn btn-default\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("register"), "html", null, true);
        echo "\">Register Here</a>  <p> 
              
       
        </div>
        
";
    }

    public function getTemplateName()
    {
        return "forms/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  93 => 29,  88 => 26,  84 => 25,  77 => 20,  71 => 19,  63 => 16,  59 => 14,  53 => 13,  49 => 12,  42 => 10,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'md_document.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <h1>Login</h1>*/
/* */
/* */
/*     <form action="{{ path_for('login') }}" method="post">*/
/* */
/*          <div class="form-group {% if errors.user_name %}has-error{% endif %}">*/
/*             <label class="control-label" for="user_name"> Username or email</label>*/
/*             <input type="text" class="form-control" name="user_name" value="{{ user.user_name }}"  />*/
/*             {% if errors.user_name %}<span class="help-block">{{ errors.user_name.0 }}</span>{% endif %}*/
/*         </div>*/
/* */
/*         <div class="form-group {% if errors.password %}has-error{% endif %}">*/
/*             <label class="control-label" for="password"> Password</label>*/
/*             <input type="text" class="form-control" name="password" value=""  />*/
/*             {% if errors.password %}<span class="help-block">{{ errors.password.0 }}</span>{% endif %}*/
/*         </div>*/
/* */
/*         <hr>*/
/* */
/* */
/*         <input type="hidden" name="csrf_name" value="{{ csrf.name }}">*/
/*         <input type="hidden" name="csrf_value" value="{{ csrf.value }}">*/
/*         <button type="submit" class="btn btn-primary">Submit</button>*/
/*         {#<a class="btn btn-default" href="{{ path_for('docs-home') }}">Cancel</a>#}*/
/* */
/*     </form>*/
/*         <div>       */
/*             <p></p>*/
/*             <p></p>*/
/*             <p>Not a member:  <a class="btn btn-default" href="{{ path_for('register') }}">Register Here</a>  <p> */
/*               */
/*        */
/*         </div>*/
/*         */
/* {% endblock %}{# empty Twig template #}*/
/* */
