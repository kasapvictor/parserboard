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

/* project.html */
class __TwigTemplate_2c13ad60c74266aa6c836291fdb40970a4e925b242eb1abc56424928130824a6 extends \Twig\Template
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
        $this->loadTemplate("partials/head.php", "project.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("partials/header.php", "project.html", 3)->display($context);
        // line 4
        echo "
<main class=\"main-projects\">
\t<div class=\"container\">
\t\t<section class=\"wrap-project-board\">
\t\t\t<h1 class=\"title-h1\">Название проекта <small>[или новый проект]</small></h1>
\t\t\t<h2 class=\"page-title-h2 project-icon\">Настройка проекта</h2>
\t\t\t<div class=\"project-board-content\">
\t\t\t\t<div class=\"wrap-board-form w-form\">
\t\t\t\t\t<form id=\"project-form\" name=\"project-form-settings\">
\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-name\">Название проекта *</label>
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\tclass=\"field w-input\"
\t\t\t\t\t\t\t\t\tid=\"project-form-settings-name\"
\t\t\t\t\t\t\t\t\tmaxlength=\"256\"
\t\t\t\t\t\t\t\t\tplaceholder=\"Название проекта\"
\t\t\t\t\t\t\t\t\trequired=\"required\"
\t\t\t\t\t\t\t\t\ttype=\"text\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-link-source\">Источник *</label>
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\tclass=\"field w-input\"
\t\t\t\t\t\t\t\t\tid=\"project-form-settings-link-source\"
\t\t\t\t\t\t\t\t\tmaxlength=\"256\"
\t\t\t\t\t\t\t\t\tplaceholder=\"Ссылка на сайт или страницу Webflow\"
\t\t\t\t\t\t\t\t\trequired=\"required\"
\t\t\t\t\t\t\t\t\ttype=\"text\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-link-dest\">Цель *</label>
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\tclass=\"field w-input\"
\t\t\t\t\t\t\t\t\tid=\"project-form-settings-link-dest\"
\t\t\t\t\t\t\t\t\tmaxlength=\"256\"
\t\t\t\t\t\t\t\t\tplaceholder=\"Адрес сайта с проектом\"
\t\t\t\t\t\t\t\t\trequired=\"required\"
\t\t\t\t\t\t\t\t\ttype=\"text\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-settings\">
\t\t\t\t\t\t\t<h3 class=\"page-title-h3 icon-settings\">Настройка почты</h3>

\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-send-to\">Куда отправлять письма из формы *</label>
\t\t\t\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t\t\t\t       id=\"project-form-settings-send-to\"
\t\t\t\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t\t\t\t       placeholder=\"example@example.com\"
\t\t\t\t\t\t\t\t       required=\"required\"
\t\t\t\t\t\t\t\t       type=\"email\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-subject\">Тема письма</label>
\t\t\t\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t\t\t\t       id=\"project-form-settings-subject\"
\t\t\t\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t\t\t\t       placeholder=\"Тема\"
\t\t\t\t\t\t\t\t       required=\"required\"
\t\t\t\t\t\t\t\t       type=\"text\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-from\">Отправитель</label>
\t\t\t\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t\t\t\t       id=\"project-form-settings-from\"
\t\t\t\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t\t\t\t       placeholder=\"Письмо с сайта\"
\t\t\t\t\t\t\t\t       required=\"required\"
\t\t\t\t\t\t\t\t       type=\"text\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-copy\">Отправлять копии на адрес</label>
\t\t\t\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t\t\t\t       id=\"project-form-settings-copy\"
\t\t\t\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t\t\t\t       placeholder=\" name1@example.com, name2@example.com, ....\"
\t\t\t\t\t\t\t\t       required=\"required\"
\t\t\t\t\t\t\t\t       type=\"text\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-max-files\">Максимальное количество файлов</label>
\t\t\t\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t\t\t\t       id=\"project-form-settings-max-files\"
\t\t\t\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t\t\t\t       placeholder=\"по умолчанию 10 файлов\"
\t\t\t\t\t\t\t\t       type=\"number\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-max-size\">Максимальный объем загружаемых файлов (число)</label>
\t\t\t\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t\t\t\t       id=\"project-form-settings-max-size\"
\t\t\t\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t\t\t\t       placeholder=\"по умолчанию 10 мегабайт\"
\t\t\t\t\t\t\t\t       type=\"number\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-types\">Типы файлов</label>
\t\t\t\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t\t\t\t       id=\"project-form-settings-types\"
\t\t\t\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t\t\t\t       placeholder=\"Какие типы файлов можно загружать? jpeg, jpg, png, webp, svg+xml, ico, bmp, giff, tiff, zip, pdf, doc, .... Пусто - без ограничений.\" type=\"text\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"settings-send\">
\t\t\t\t\t\t\t\t<div class=\"board-form-subtitle icon-settings\">Авторизация почтового сервиса</div>
\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-login\">Логин
\t\t\t\t\t\t\t\t\t\t<span class=\"note\">(например если эти yandex.ru, то указать почту)</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t\t\t\t\t       id=\"project-form-settings-login\"
\t\t\t\t\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t\t\t\t\t       placeholder=\"example@example.com\"
\t\t\t\t\t\t\t\t\t       type=\"email\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-password\">Пароль
\t\t\t\t\t\t\t\t\t\t<span class=\"note\">(Указать пароль от почты указанной выше)</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t\t\t\t\t       id=\"project-form-settings-password\"
\t\t\t\t\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t\t\t\t\t       placeholder=\"Пароль\"
\t\t\t\t\t\t\t\t\t       type=\"text\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-smtp\">SMTP
\t\t\t\t\t\t\t\t\t\t<span class=\"note\">(например если эти yandex.ru, то smtp.yandex.ru)</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t\t\t\t\t       id=\"project-form-settings-smtp\"
\t\t\t\t\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t\t\t\t\t       name=\"smtp\"
\t\t\t\t\t\t\t\t\t       placeholder=\"smtp.example.com\"
\t\t\t\t\t\t\t\t\t       type=\"text\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<label class=\"field-label\" for=\"project-form-settings-port\">Порт
\t\t\t\t\t\t\t\t\t\t<span class=\"note\">(по умолчанию 465)</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t\t\t\t\t       id=\"project-form-settings-port\"
\t\t\t\t\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t\t\t\t\t       name=\"port\"
\t\t\t\t\t\t\t\t\t       placeholder=\"465\"
\t\t\t\t\t\t\t\t\t       type=\"number\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<div class=\"row-buttons\">
\t\t\t\t\t\t\t\t<input class=\"submit-button w-button\" data-wait=\"...\" type=\"submit\" value=\"Сохранить\">
\t\t\t\t\t\t\t\t<div class=\"submit-button color-blue\">Обновить</div>
\t\t\t\t\t\t\t\t<div class=\"submit-button color-green\">Скачать ZIP</div>
\t\t\t\t\t\t\t\t<div class=\"submit-button color-tomato\">Удалить проект</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"w-form-done\">
\t\t\t\t\t\t<div>Thank you! Your submission has been received!</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"w-form-fail\">
\t\t\t\t\t\t<div>Oops! Something went wrong while submitting the form.</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>
</main>

";
        // line 184
        $this->loadTemplate("partials/footer.php", "project.html", 184)->display($context);
    }

    public function getTemplateName()
    {
        return "project.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 184,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "project.html", "/home/v/vic4884g/parser-board.ru/public_html/views/project.html");
    }
}
