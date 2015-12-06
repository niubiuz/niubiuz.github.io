<?php

/* widget/search.html */
class __TwigTemplate_ed3937d27c755622e2e2ca8b8d23da74d21d187c9227c46fb3c4dab56752e2f5 extends Twig_Template
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
        echo "<aside class=\"widget widget_search sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">搜索</h3>
\t<form class=\"search\" action=\"/search\" method=\"get\">
\t\t<fieldset>
\t\t\t<div class=\"text\">
\t\t\t\t<input name=\"keyword\" id=\"keyword\" type=\"text\" placeholder=\"Search ...\"/>
\t\t\t\t<button class=\"fa fa-search\">Search</button>
\t\t\t</div>
\t\t</fieldset>
\t</form>
</aside>";
    }

    public function getTemplateName()
    {
        return "widget/search.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
