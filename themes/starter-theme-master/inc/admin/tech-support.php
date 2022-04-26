<?php

/**
 * dawei technical support dashboard widget
 */
function dawei_tech_support_dashboard_widget() {
	wp_add_dashboard_widget(
		'dawei_tech_support_dashboard_widget',
		'Technická podpora',
		'dawei_tech_support_dashboard_widget_content'
	);
}

add_action('wp_dashboard_setup', 'dawei_tech_support_dashboard_widget');

function dawei_tech_support_dashboard_widget_content() {
	?>
		<div class="tech-support-widget">
			<p>
				<a href="mailto:info@dawei.cz">info@dawei.cz</a><br>
				<a href="https://www.dawei.cz/" target="_blank">dawei.cz</a>
			</p>
			<form action="#" class="tech-support-form">
				<div class="tech-support-form__group">
					<label for="supportEmail">Váš email</label>
					<input type="email" id="supportEmail">
				</div>
				<div class="tech-support-form__group">
					<label for="supportSubject">Předmět</label>
					<input type="text" id="supportSubject">
				</div>
				<div class="tech-support-form__group">
					<label for="supportMessage">S čím máte problém?</label>
					<textarea id="supportMessage" rows="3"></textarea>
				</div>
				<div class="tech-support-form__group">
					<input type="submit" name="supportSave" class="button button-primary" value="Odeslat">
				</div>
			</form>
		</div>
	<?php
}

// Todo: process the form