<?php

/* widget/archive.html */
class __TwigTemplate_851129f2cbf1f43edd34203886cb4536e4b6c25b360fa616ca0a9627c959b5e1 extends Twig_Template
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
        echo "<aside class=\"widget widget_archive sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">文章归档</h3>
\t<ul>
\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["yearMonthList"]) ? $context["yearMonthList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["yearMonth"]) {
            // line 5
            echo "\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["yearMonth"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["yearMonth"], "name", array()), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yearMonth'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t</ul>
</aside>";
    }

    public function getTemplateName()
    {
        return "widget/archive.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
