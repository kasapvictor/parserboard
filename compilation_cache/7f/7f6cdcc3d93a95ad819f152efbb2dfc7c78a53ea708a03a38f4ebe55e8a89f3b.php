<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/head.php */
class __TwigTemplate_14ba0594be09e96d7070259c176741ce67677167b6046a79fdbf85e2d7385923 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"utf-8\">
    <title>Parser board - ";
        // line 5
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>

    <meta content=\"Parser board\" property=\"og:title\">
    <meta content=\"Parser board\" property=\"twitter:title\">
    <meta content=\"Парсер\" name=\"description\">
    <meta content=\"Парсер\" property=\"og:description\">
    <meta content=\"Парсер\" property=\"twitter:description\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <meta name=\"author\" content=\"Parser board\">
    <meta property=\"og:image\" content=\"https://.../assets/images/logo256.png\" />
    <meta property=\"og:image:secure_url\" content=\"https://.../assets/images/logo256.png\" />
    <meta property=\"og:image:type\" content=\"image/png\" />

    <link href=\"views/assets/images/logo32.png\" rel=\"shortcut icon\" type=\"image/x-icon\">
    <link href=\"views/assets/images/logo256.png\" rel=\"apple-touch-icon\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"views/assets/styles/main.css\">
</head>

<body class=\"body\">
<div class=\"body-content\">";
    }

    public function getTemplateName()
    {
        return "partials/head.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/head.php", "/home/v/vic4884g/parser-board.ru/public_html/views/partials/head.php");
    }
}
