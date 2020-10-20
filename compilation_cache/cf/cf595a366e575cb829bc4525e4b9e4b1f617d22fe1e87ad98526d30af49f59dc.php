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

/* partials/header.html */
class __TwigTemplate_ccd84de5b01b531b08d7516685459c6abf60f61c937d8bcc56eaf113710be7cc extends \Twig\Template
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
        echo "<body class=\"body\">
<div class=\"body-content\">
    <header class=\"header\">
        <div data-collapse=\"medium\" data-animation=\"default\" data-duration=\"400\" role=\"banner\" class=\"navbar w-nav\">
            <div class=\"nav-container w-container\">
                <a href=\"/\" class=\"logo w-nav-brand\">
                    <img src=\"templates/assets/images/logo256.png\"
                         loading=\"lazy\"
                         alt=\"ParserBoard\"
                         class=\"top-logo\">
                </a>

                ";
        // line 13
        $this->loadTemplate("partials/navigation.html", "partials/header.html", 13)->display($context);
        // line 14
        echo "
                <div class=\"menu-button w-nav-button\">
                    <div class=\"w-icon-nav-menu\"></div>
                </div>
            </div>
        </div>
    </header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  44 => 13,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/header.html", "/home/v/vic4884g/parser-board.ru/public_html/templates/partials/header.html");
    }
}
