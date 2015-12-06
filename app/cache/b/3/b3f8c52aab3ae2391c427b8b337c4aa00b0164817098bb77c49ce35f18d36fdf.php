<?php

/* block/homeContent.html */
class __TwigTemplate_b3f8c52aab3ae2391c427b8b337c4aa00b0164817098bb77c49ce35f18d36fdf extends Twig_Template
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
        echo "<div id=\"content\">
\t\t";
        // line 2
        if ((isset($context["category"]) ? $context["category"] : null)) {
            // line 3
            echo "\t\t\t";
            $context["navObj"] = (isset($context["category"]) ? $context["category"] : null);
            // line 4
            echo "    \t";
        } elseif ((isset($context["tag"]) ? $context["tag"] : null)) {
            // line 5
            echo "    \t\t";
            $context["navObj"] = (isset($context["tag"]) ? $context["tag"] : null);
            // line 6
            echo "    \t";
        } elseif ((isset($context["yearMonth"]) ? $context["yearMonth"] : null)) {
            // line 7
            echo "    \t\t";
            $context["navObj"] = (isset($context["yearMonth"]) ? $context["yearMonth"] : null);
            // line 8
            echo "    \t";
        }
        // line 9
        echo "    \t
    \t";
        // line 10
        if (((isset($context["navObj"]) ? $context["navObj"] : null) || (isset($context["keyword"]) ? $context["keyword"] : null))) {
            // line 11
            echo "    \t\t";
            $this->loadTemplate("block/breadcrumbs.html", "block/homeContent.html", 11)->display($context);
            // line 12
            echo "    \t";
        }
        // line 13
        echo "\t<div class=\"quest-row site-content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"primary\" class=\"content-area col-md-9\">
\t\t\t\t\t<div id=\"main\" class=\"site-main\" role=\"main\">
\t\t\t\t\t\t";
        // line 18
        if ((isset($context["blogList"]) ? $context["blogList"] : null)) {
            // line 19
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blogList"]) ? $context["blogList"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                // line 20
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["blog"], "title", array())) {
                    // line 21
                    echo "\t\t\t\t\t        \t";
                    $this->loadTemplate("blog/blog.html", "block/homeContent.html", 21)->display($context);
                    // line 22
                    echo "\t\t\t\t\t        \t";
                }
                // line 23
                echo "\t\t\t\t\t        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t\t\t";
            $this->loadTemplate("block/nav.html", "block/homeContent.html", 24)->display($context);
            // line 25
            echo "\t\t\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t\t\t";
            $this->loadTemplate("block/noresult.html", "block/homeContent.html", 26)->display($context);
            // line 27
            echo "\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- #main -->
\t\t\t\t</div>
\t\t\t\t";
        // line 31
        $this->loadTemplate("block/secondary.html", "block/homeContent.html", 31)->display($context);
        // line 32
        echo "\t\t\t</div>
\t\t\t<!-- .row -->
\t\t</div>
\t\t<!-- .container -->
\t</div>
\t<!-- .quest-row -->
</div><!-- #content -->";
    }

    public function getTemplateName()
    {
        return "block/homeContent.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  120 => 31,  115 => 28,  112 => 27,  109 => 26,  106 => 25,  103 => 24,  89 => 23,  86 => 22,  83 => 21,  80 => 20,  62 => 19,  60 => 18,  53 => 13,  50 => 12,  47 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
