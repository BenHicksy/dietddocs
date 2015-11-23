<?php

/* forms/bmi.twig */
class __TwigTemplate_f955e5b719ced35ed51253e19be21fe710bc66d5b1ff6e6b65f30768abc1b870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("md_document.twig", "forms/bmi.twig", 1);
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
    <h1>Calculate your BMI</h1>


    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("bmi"), "html", null, true);
        echo "\" method=\"post\">

         <div class=\"form-group ";
        // line 10
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "weight", array())) {
            echo "has-error";
        }
        echo "\">
            <label class=\"control-label\" for=\"weight\"> What is your weight(kg)?</label>
            <input type=\"text\" class=\"form-control\" name=\"weight\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bmi"]) ? $context["bmi"] : null), "weight", array()), "html", null, true);
        echo "\"  />
            ";
        // line 13
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "weight", array())) {
            echo "<span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "weight", array()), 0, array()), "html", null, true);
            echo "</span>";
        }
        // line 14
        echo "        </div>

        <div class=\"form-group ";
        // line 16
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "height", array())) {
            echo "has-error";
        }
        echo "\">
            <label class=\"control-label\" for=\"height\"> What is your height(m)?</label>
            <input type=\"text\" class=\"form-control\" name=\"height\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bmi"]) ? $context["bmi"] : null), "height", array()), "html", null, true);
        echo "\"  />
            ";
        // line 19
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "height", array())) {
            echo "<span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "height", array()), 0, array()), "html", null, true);
            echo "</span>";
        }
        // line 20
        echo "        </div>

        <hr>

        <p>Enter your email to subscribe to our newsletter</p>

        <div class=\"form-group ";
        // line 26
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "email", array())) {
            echo "has-error";
        }
        echo "\">
            <label class=\"control-label\" for=\"email\">What is your email?</label>
            <input type=\"text\" class=\"form-control\" name=\"email\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bmi"]) ? $context["bmi"] : null), "email", array()), "html", null, true);
        echo "\"  />
            ";
        // line 29
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "email", array())) {
            echo "<span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "email", array()), 0, array()), "html", null, true);
            echo "</span>";
        }
        // line 30
        echo "        </div>

        <input type=\"hidden\" name=\"csrf_name\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["csrf"]) ? $context["csrf"] : null), "name", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"csrf_value\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["csrf"]) ? $context["csrf"] : null), "value", array()), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        <a class=\"btn btn-default\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("docs-home"), "html", null, true);
        echo "\">Cancel</a>

    </form>

";
    }

    public function getTemplateName()
    {
        return "forms/bmi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 35,  113 => 33,  109 => 32,  105 => 30,  99 => 29,  95 => 28,  88 => 26,  80 => 20,  74 => 19,  70 => 18,  63 => 16,  59 => 14,  53 => 13,  49 => 12,  42 => 10,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'md_document.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <h1>Calculate your BMI</h1>*/
/* */
/* */
/*     <form action="{{ path_for('bmi') }}" method="post">*/
/* */
/*          <div class="form-group {% if errors.weight %}has-error{% endif %}">*/
/*             <label class="control-label" for="weight"> What is your weight(kg)?</label>*/
/*             <input type="text" class="form-control" name="weight" value="{{ bmi.weight }}"  />*/
/*             {% if errors.weight %}<span class="help-block">{{ errors.weight.0 }}</span>{% endif %}*/
/*         </div>*/
/* */
/*         <div class="form-group {% if errors.height %}has-error{% endif %}">*/
/*             <label class="control-label" for="height"> What is your height(m)?</label>*/
/*             <input type="text" class="form-control" name="height" value="{{ bmi.height }}"  />*/
/*             {% if errors.height %}<span class="help-block">{{ errors.height.0 }}</span>{% endif %}*/
/*         </div>*/
/* */
/*         <hr>*/
/* */
/*         <p>Enter your email to subscribe to our newsletter</p>*/
/* */
/*         <div class="form-group {% if errors.email %}has-error{% endif %}">*/
/*             <label class="control-label" for="email">What is your email?</label>*/
/*             <input type="text" class="form-control" name="email" value="{{ bmi.email }}"  />*/
/*             {% if errors.email %}<span class="help-block">{{ errors.email.0 }}</span>{% endif %}*/
/*         </div>*/
/* */
/*         <input type="hidden" name="csrf_name" value="{{ csrf.name }}">*/
/*         <input type="hidden" name="csrf_value" value="{{ csrf.value }}">*/
/*         <button type="submit" class="btn btn-primary">Submit</button>*/
/*         <a class="btn btn-default" href="{{ path_for('docs-home') }}">Cancel</a>*/
/* */
/*     </form>*/
/* */
/* {% endblock %}*/
