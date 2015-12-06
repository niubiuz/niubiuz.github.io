<?php

/* block/nav.html */
class __TwigTemplate_7c314d0f2c130d1883b0c142bc05d335f653db6f39812f84da9bbae26c1a05d1 extends Twig_Template
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
        if (((isset($context["pages"]) ? $context["pages"] : null) > 1)) {
            // line 2
            echo "<div class=\"center\">
\t<ul class=\"pagination\">
\t";
            // line 4
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prev", array())) {
                // line 5
                echo "\t<li><a class=\"prev page-numbers\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prev", array()), "url", array()), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-left\"></i></a></li>
\t";
            }
            // line 7
            echo "\t
\t";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "showList", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 9
                echo "\t\t";
                if ($this->getAttribute($context["page"], "isCurrent", array())) {
                    // line 10
                    echo "\t\t<li><span class=\"page-numbers current\">";
                    echo twig_escape_filter($this->env, (isset($context["pageNo"]) ? $context["pageNo"] : null), "html", null, true);
                    echo "</span></li>
\t\t";
                } else {
                    // line 12
                    echo "\t\t<li><a class=\"page-numbers\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "num", array()), "html", null, true);
                    echo "</a></li>
    \t";
                }
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        
\t";
            // line 16
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "next", array())) {
                // line 17
                echo "\t<li><a class=\"next page-numbers\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "next", array()), "url", array()), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a></li>
\t";
            }
            // line 19
            echo "\t</ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "block/nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  68 => 17,  66 => 16,  63 => 15,  57 => 14,  49 => 12,  43 => 10,  40 => 9,  36 => 8,  33 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
