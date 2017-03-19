<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.1.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'sobre-nos Formulário envio',
	'heading' => 'Envio de novo formulário',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcado',
		'checkbox_unchecked' => 'Desmarcado',
		'submitted_from' => 'Formulário enviado do site: %s',
		'submitted_by' => 'Endereço IP do visitante: %s',
		'too_many_submissions' => 'Muitos envios recentes deste IP',
		'failed_to_send_email' => 'Falha no envio do email',
		'invalid_reCAPTCHA_private_key' => 'Chave privada do reCAPTCHA inválida.',
		'invalid_reCAPTCHA2_private_key' => 'Chave privada do reCAPTCHA 2.0 inválida.',
		'invalid_reCAPTCHA2_server_response' => 'Resposta do servidor reCAPTCHA 2.0 inválida.',
		'invalid_field_type' => 'Tipo de campo desconhecido \"%s\".',
		'invalid_form_config' => 'O campo \"%s\" possui uma configuração inválida.',
		'unknown_method' => 'Método de solicitação de servidor desconhecido'
	),
	'email' => array(
		'from' => 'honorato.flea@gmail.com',
		'to' => 'honorato.flea@gmail.com'
	),
	'fields' => array(
		'custom_U12126' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Nome',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Nome\" é obrigatório.'
			)
		),
		'Email' => array(
			'order' => 3,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Email\" é obrigatório.',
				'format' => 'O campo \"Email\" possui um email inválido.'
			)
		),
		'custom_U12130' => array(
			'order' => 2,
			'type' => 'radiogroup',
			'label' => 'Grupo de botões de opção',
			'required' => true,
			'optionItems' => array(
				'Varejo',
				'Indústria',
				'Outros'
			),
			'errors' => array(
				'required' => 'O campo \"Grupo de botões de opção\" é obrigatório.',
				'format' => 'O campo \"Grupo de botões de opção\" possui um valor inválido.'
			)
		)
	)
);

process_form($form);
?>