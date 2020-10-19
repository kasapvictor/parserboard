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

/* partials/header.php */
class __TwigTemplate_8a5cbaa903850f8ecd09a045c387adf0c0a185d3c525a2b6e0e4e597dfe50627 extends \Twig\Template
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
                    <img src=\"views/assets/images/logo256.png\"
                         loading=\"lazy\"
                         alt=\"ParserBoard\"
                         class=\"top-logo\">
                </a>

\t            <nav role=\"navigation\" class=\"nav-menu w-nav-menu\">
\t\t            <a href=\"/password\"
\t\t               class=\"nav-link w-nav-link\">Забыл пароль</a>
\t\t            <a href=\"/projects\"
\t\t               class=\"nav-link w-nav-link\">Проекты</a>
\t\t            <a href=\"/project\"
\t\t               class=\"nav-link w-nav-link\">Проект</a>
\t\t            <a href=\"/registration\"
\t\t               class=\"nav-link w-nav-link\">Регистрация</a>
\t            </nav>

                <div class=\"menu-button w-nav-button\">
                    <div class=\"w-icon-nav-menu\"></div>
                </div>
            </div>
        </div>
    </header>";
    }

    public function getTemplateName()
    {
        return "partials/header.php";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/header.php", "/home/v/vic4884g/parser-board.ru/public_html/views/partials/header.php");
    }
}
