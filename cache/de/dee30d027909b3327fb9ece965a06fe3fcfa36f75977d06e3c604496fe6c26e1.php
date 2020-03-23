<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_07093433ffbbddb9a1f75f2befb854c75791fb507e05c5c0bcaab5df6f85e1c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE HTML>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>Logiciel -
\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
\t</head>
\t<body>
\t\t<h1>Logiciel -
\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
\t\t<p>Voici une page HTML, complétée par le texte :
\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "</p>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\LB\\php\\composer-tp\\templates\\base.html.twig");
    }
}
