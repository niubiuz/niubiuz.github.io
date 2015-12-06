<?php

/* widget/text.html */
class __TwigTemplate_32ddc974895a3950765448c2fd43291151d51f66dd8562a97e7abc9a69b89872 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "text", array()), "intro")) {
            // line 2
            echo "<aside class=\"widget widget_text sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "text", array()), "title", array()), "html", null, true);
            echo "</h3>
\t<div class=\"textwidget\">
\t\t<p>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "text", array()), "intro", array()), "html", null, true);
            echo "</p>
\t</div>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/text.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
