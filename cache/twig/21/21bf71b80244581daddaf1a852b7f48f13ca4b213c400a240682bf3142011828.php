<?php

/* md_document.twig */
class __TwigTemplate_10cbca03c19a9ca01478c1bb31e8efde75ce1c550811216d9de86415109a5f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "md_document.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        // line 4
        echo "    <ul class=\"sidebar-nav\">
        <li class=\"sidebar-brand\">
            <a href=\"#\">
                Get Slim with Slim
            </a>
        </li>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["docs"]) ? $context["docs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 11
            echo "            <li>
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("docs", array("fname" => $this->getAttribute($context["doc"], "slug", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "fname", array()), "html", null, true);
            echo "</a>
            </li>
            ";
            // line 14
            if ((((isset($context["current_file"]) ? $context["current_file"] : null) == $this->getAttribute($context["doc"], "fname", array())) &&  !twig_test_empty($this->getAttribute($context["doc"], "anchors", array())))) {
                // line 15
                echo "                <ul>
                    ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["doc"], "anchors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["anchor"]) {
                    // line 17
                    echo "                        <li>
                            <a href=\"#";
                    // line 18
                    echo twig_escape_filter($this->env, $context["anchor"], "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["anchor"], "html", null, true);
                    echo "</a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anchor'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "                </ul>
            ";
            }
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        echo (isset($context["page_content"]) ? $context["page_content"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "md_document.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  92 => 27,  87 => 24,  81 => 23,  77 => 21,  66 => 18,  63 => 17,  59 => 16,  56 => 15,  54 => 14,  47 => 12,  44 => 11,  40 => 10,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.twig' %}*/
/* */
/* {% block navbar %}*/
/*     <ul class="sidebar-nav">*/
/*         <li class="sidebar-brand">*/
/*             <a href="#">*/
/*                 Get Slim with Slim*/
/*             </a>*/
/*         </li>*/
/*         {% for doc in docs %}*/
/*             <li>*/
/*                 <a href="{{ path_for('docs', {fname : doc.slug}) }}"> {{ doc.fname }}</a>*/
/*             </li>*/
/*             {% if current_file == doc.fname and doc.anchors is not empty %}*/
/*                 <ul>*/
/*                     {% for anchor in doc.anchors %}*/
/*                         <li>*/
/*                             <a href="#{{ anchor }}"> {{ anchor }}</a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {{ page_content|raw }}*/
/* {% endblock %}*/
