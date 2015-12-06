<?php

/* widget/categories.html */
class __TwigTemplate_c0467c3355d4f6a9245ccceaaaf9e9fe6fb89e8b591961f61e308480ac21d4c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["categoryList"]) ? $context["categoryList"] : null), 0)) {
            // line 2
            echo "<aside class=\"widget widget_categories sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">分类目录</h3>
\t<ul>
\t\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryList"]) ? $context["categoryList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "        <li class=\"cat-item\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t</ul>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/categories.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
