<?php require 'partials/head.php'; ?>

<?php require 'partials/header.php'; ?>

<main class="main-projects">
	<div class="container">
		<section class="wrap-project-board">
			<h1 class="title-h1">Название проекта <small>[или новый проект]</small></h1>
			<h2 class="page-title-h2 project-icon">Настройка проекта</h2>
			<div class="project-board-content">
				<div class="wrap-board-form w-form">
					<form id="project-form" name="project-form-settings">
						<div class="form-row">
							<label class="field-label" for="project-form-settings-name">Название проекта *</label>
							<input
									class="field w-input"
									id="project-form-settings-name"
									maxlength="256"
									placeholder="Название проекта"
									required="required"
									type="text">
						</div>

						<div class="form-row">
							<label class="field-label" for="project-form-settings-link-source">Источник *</label>
							<input
									class="field w-input"
									id="project-form-settings-link-source"
									maxlength="256"
									placeholder="Ссылка на сайт или страницу Webflow"
									required="required"
									type="text">
						</div>

						<div class="form-row">
							<label class="field-label" for="project-form-settings-link-dest">Цель *</label>
							<input
									class="field w-input"
									id="project-form-settings-link-dest"
									maxlength="256"
									placeholder="Адрес сайта с проектом"
									required="required"
									type="text">
						</div>

						<div class="form-settings">
							<h3 class="page-title-h3 icon-settings">Настройка почты</h3>

							<div class="form-row">
								<label class="field-label" for="project-form-settings-send-to">Куда отправлять письма из формы *</label>
								<input class="field w-input"
								       id="project-form-settings-send-to"
								       maxlength="256"
								       placeholder="example@example.com"
								       required="required"
								       type="email">
							</div>

							<div class="form-row">
								<label class="field-label" for="project-form-settings-subject">Тема письма</label>
								<input class="field w-input"
								       id="project-form-settings-subject"
								       maxlength="256"
								       placeholder="Тема"
								       required="required"
								       type="text">
							</div>

							<div class="form-row">
								<label class="field-label" for="project-form-settings-from">Отправитель</label>
								<input class="field w-input"
								       id="project-form-settings-from"
								       maxlength="256"
								       placeholder="Письмо с сайта"
								       required="required"
								       type="text">
							</div>

							<div class="form-row">
								<label class="field-label" for="project-form-settings-copy">Отправлять копии на адрес</label>
								<input class="field w-input"
								       id="project-form-settings-copy"
								       maxlength="256"
								       placeholder=" name1@example.com, name2@example.com, ...."
								       required="required"
								       type="text">
							</div>

							<div class="form-row">
								<label class="field-label" for="project-form-settings-max-files">Максимальное количество файлов</label>
								<input class="field w-input"
								       id="project-form-settings-max-files"
								       maxlength="256"
								       placeholder="по умолчанию 10 файлов"
								       type="number">
							</div>

							<div class="form-row">
								<label class="field-label" for="project-form-settings-max-size">Максимальный объем загружаемых файлов (число)</label>
								<input class="field w-input"
								       id="project-form-settings-max-size"
								       maxlength="256"
								       placeholder="по умолчанию 10 мегабайт"
								       type="number">
							</div>

							<div class="form-row">
								<label class="field-label" for="project-form-settings-types">Типы файлов</label>
								<input class="field w-input"
								       id="project-form-settings-types"
								       maxlength="256"
								       placeholder="Какие типы файлов можно загружать? jpeg, jpg, png, webp, svg+xml, ico, bmp, giff, tiff, zip, pdf, doc, .... Пусто - без ограничений." type="text">
							</div>

							<div class="settings-send">
								<div class="board-form-subtitle icon-settings">Авторизация почтового сервиса</div>
								<div class="form-row">
									<label class="field-label" for="project-form-settings-login">Логин
										<span class="note">(например если эти yandex.ru, то указать почту)</span>
									</label>
									<input class="field w-input"
									       id="project-form-settings-login"
									       maxlength="256"
									       placeholder="example@example.com"
									       type="email">
								</div>

								<div class="form-row">
									<label class="field-label" for="project-form-settings-password">Пароль
										<span class="note">(Указать пароль от почты указанной выше)</span>
									</label>
									<input class="field w-input"
									       id="project-form-settings-password"
									       maxlength="256"
									       placeholder="Пароль"
									       type="text">
								</div>

								<div class="form-row">
									<label class="field-label" for="project-form-settings-smtp">SMTP
										<span class="note">(например если эти yandex.ru, то smtp.yandex.ru)</span>
									</label>
									<input class="field w-input"
									       id="project-form-settings-smtp"
									       maxlength="256"
									       name="smtp"
									       placeholder="smtp.example.com"
									       type="text">
								</div>
								<div class="form-row">
									<label class="field-label" for="project-form-settings-port">Порт
										<span class="note">(по умолчанию 465)</span>
									</label>
									<input class="field w-input"
									       id="project-form-settings-port"
									       maxlength="256"
									       name="port"
									       placeholder="465"
									       type="number">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="row-buttons">
								<input class="submit-button w-button" data-wait="..." type="submit" value="Сохранить">
								<div class="submit-button color-blue">Обновить</div>
								<div class="submit-button color-green">Скачать ZIP</div>
								<div class="submit-button color-tomato">Удалить проект</div>
							</div>
						</div>
					</form>
					<div class="w-form-done">
						<div>Thank you! Your submission has been received!</div>
					</div>
					<div class="w-form-fail">
						<div>Oops! Something went wrong while submitting the form.</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</main>

<?php require 'partials/footer.php'; ?>
