<?php

/* widget/tagcloud.html */
class __TwigTemplate_a25a934c60e93c606e1be493ca8f72b0c584e4ea368a37096882da797388bb37 extends Twig_Template
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
        if ($this->getAttribute((isset($context["tagsList"]) ? $context["tagsList"] : null), 0)) {
            // line 2
            echo "<aside class=\"widget widget_tag_cloud sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">标签</h3>
\t<div class=\"tagcloud\">
\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tagsList"]) ? $context["tagsList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 6
                echo "\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "url", array()), "html", null, true);
                echo "\"  title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</a>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t</div>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/tagcloud.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
