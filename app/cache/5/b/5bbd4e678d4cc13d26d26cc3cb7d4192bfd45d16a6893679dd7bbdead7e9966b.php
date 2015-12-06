<?php

/* block/base.html */
class __TwigTemplate_5bbd4e678d4cc13d26d26cc3cb7d4192bfd45d16a6893679dd7bbdead7e9966b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "</head>

<body class=\"home blog wide\">
\t<div id=\"page\" class=\"hfeed site\">
\t\t<a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
\t\t";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "\t</div><!-- #page -->
\t<a href=\"#0\" class=\"cd-top\"><i class=\"fa fa-angle-up\"></i></a>


<script type=\"text/javascript\" src=\"/theme/quest/assets/plugins/modernizr/modernizr.custom.js?ver=";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "version", array()), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/js/jquery/jquery.js?ver=1.11.2\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/js/jquery/jquery-migrate.min.js?ver=1.2.1\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/assets/plugins/bootstrap/js/bootstrap.min.js?ver=";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "version", array()), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/assets/plugins/wow/wow.js?ver=";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "version", array()), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/assets/plugins/colorbox/jquery.colorbox-min.js?ver=";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "version", array()), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/theme/quest/assets/js/quest.js?ver=";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "version", array()), "html", null, true);
        echo "\"></script>
\t
";
        // line 49
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "highlight", array())) {
            // line 50
            echo "<link rel=\"stylesheet\" href=\"http://cdn.bootcss.com/highlight.js/8.6/styles/default.min.css\">
<script src=\"http://cdn.bootcss.com/highlight.js/8.6/highlight.min.js\"></script>
<script>hljs.initHighlightingOnLoad();</script>
";
        }
        // line 54
        echo "
";
        // line 55
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "mathjax", array())) {
            // line 56
            echo "<script type=\"text/x-mathjax-config\">MathJax.Hub.Config({tex2jax: {inlineMath: [['\$','\$'], ['\\\\(','\\\\)']]}});</script>
<script type=\"text/javascript\" src=\"http://cdn.bootcss.com/mathjax/2.5.3/MathJax.js?config=TeX-AMS-MML_HTMLorMML\"></script>
";
        }
        // line 59
        echo "</body>
</html>";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta name=\"keywords\" content=\"";
        // line 8
        $this->displayBlock('keywords', $context, $blocks);
        echo "\">
\t<meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('description', $context, $blocks);
        echo "\">
\t
\t<link rel=\"stylesheet\" href=\"/theme/quest/assets/plugins/bootstrap/css/bootstrap.min.css?ver=";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"/theme/quest/assets/plugins/font-awesome/css/font-awesome.min.css?ver=";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"http://fonts.useso.com/css?family=Open+Sans:300,400,600&subset=latin,latin-ext\">
\t<link rel=\"stylesheet\" href=\"/theme/quest/css/style.css?ver=";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"stylesheet\" href=\"/theme/quest/css/customizer.css?ver=";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "version", array()), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "title", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "url", array()), "html", null, true);
        echo "/feed.xml\" />
\t
\t";
        // line 18
        if ($this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "baiduAnalytics", array())) {
            echo "<script>
\tvar _hmt = _hmt || [];
\t(function() {
\t  var hm = document.createElement(\"script\");
\t  hm.src = \"//hm.baidu.com/hm.js?";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "baiduAnalytics", array()), "html", null, true);
            echo "\";
\t  var s = document.getElementsByTagName(\"script\")[0]; 
\t  s.parentNode.insertBefore(hm, s);
\t})();
\t</script>
\t";
        }
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "title", array()), "html", null, true);
    }

    // line 8
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "keywords", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "title", array()), "html", null, true);
    }

    // line 9
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["confObj"]) ? $context["confObj"] : null), "description", array()), "html", null, true);
    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        echo " ";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "block/base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 36,  188 => 35,  182 => 34,  176 => 9,  168 => 8,  162 => 7,  151 => 22,  144 => 18,  137 => 16,  133 => 15,  129 => 14,  124 => 12,  120 => 11,  115 => 9,  111 => 8,  107 => 7,  102 => 4,  99 => 3,  94 => 59,  89 => 56,  87 => 55,  84 => 54,  78 => 50,  76 => 49,  71 => 47,  67 => 46,  63 => 45,  59 => 44,  53 => 41,  47 => 37,  44 => 36,  41 => 35,  39 => 34,  32 => 29,  30 => 3,  26 => 1,);
    }
}
