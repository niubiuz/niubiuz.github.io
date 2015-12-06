<?php

/* blog/footer.html */
class __TwigTemplate_e37af9b550518db92a6164339213ac452542b11e9d5d3dff90823bab985f4683 extends Twig_Template
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
        echo "<footer class=\"entry-footer\">
\t";
        // line 2
        if ($this->getAttribute($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "category", array()), 0)) {
            // line 3
            echo "\t<ul class=\"post-categories\">
        ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "category", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo "  
          <li><a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\" rel=\"category\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "\t</ul>
\t";
        }
        // line 9
        echo "\t
\t";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "tags", array()), 0)) {
            // line 11
            echo "\t<ul class=\"post-tags\">
        ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 13
                echo "           <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "url", array()), "html", null, true);
                echo "\" rel=\"tag\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t</ul>
\t";
        }
        // line 17
        echo "\t
\t";
        // line 18
        if (((isset($context["pageName"]) ? $context["pageName"] : null) != "blog")) {
            // line 19
            echo "\t<div class=\"read-more\">
\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "siteURL", array()), "html", null, true);
            echo "\">阅读全文<i class=\"fa fa-angle-double-right \"></i></a>
\t</div>
\t";
        }
        // line 23
        echo "</footer><!-- .entry-footer -->";
    }

    public function getTemplateName()
    {
        return "blog/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  82 => 20,  79 => 19,  77 => 18,  74 => 17,  70 => 15,  59 => 13,  55 => 12,  52 => 11,  50 => 10,  47 => 9,  43 => 7,  33 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
