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

/* index.view.php */
class __TwigTemplate_a8e7ea1045d8a959064f5bc9a9b00a432392badde9a069cce95a79f502c4add3 extends \Twig\Template
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
        $this->loadTemplate("partials/head.php", "index.view.php", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("partials/header.php", "index.view.php", 3)->display($context);
        // line 4
        echo "
<main class=\"main\">
    <div class=\"container\">
        <section class=\"wrap-entry\">
            <div class=\"wrap-form-user w-form\">
                <h1 class=\"title-h1\">Parser board</h1>
                <h2 class=\"title-h2\">Вход</h2>
                <form id=\"entry-form\" name=\"entry-form\">
                    <label for=\"email\"
                           class=\"field-label\">Email</label>
                    <input type=\"text\"
                           class=\"field w-input\"
                           autofocus=\"true\"
                           maxlength=\"256\"
                           name=\"email\"
                           placeholder=\"example@example.com\"
                           id=\"email\"
                           required=\"required\">

                    <label for=\"password\"
                           class=\"field-label\">Пароль</label>
                    <input type=\"password\"
                           class=\"field w-input\"
                           maxlength=\"256\"
                           name=\"password\"
                           id=\"password\"
                           required=\"required\">

                    <input type=\"submit\"
                           value=\"Войти\"
                           data-wait=\"...\"
                           class=\"user-button w-button\">

                    <div class=\"entry-links\">
                        <a href=\"#\" class=\"link icon-new-user\">Регистрация</a>
                        <a href=\"#\" class=\"link icon-question\">Забыл пароль?</a>
                    </div>
                </form>
                <div class=\"w-form-done\">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class=\"w-form-fail\">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </section>
    </div>
</main>

";
        // line 53
        $this->loadTemplate("partials/footer.php", "index.view.php", 53)->display($context);
    }

    public function getTemplateName()
    {
        return "index.view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 53,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index.view.php", "/home/v/vic4884g/parser-board.ru/public_html/views/index.view.php");
    }
}
