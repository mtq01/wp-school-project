<?php
// This file is generated. Do not modify it manually.
return array(
	'animate-onscroll' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'school-blocks/animate-onscroll',
		'version' => '0.1.0',
		'title' => 'Animate',
		'category' => 'design',
		'icon' => 'buddicons-activity',
		'description' => 'This block will animate when scrolled into the viewport.',
		'attributes' => array(
			'animation' => array(
				'type' => 'string',
				'default' => 'fade-up'
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'school-blocks',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'editorStyle' => 'file:./index.css'
	),
	'copyright-date' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'school-blocks/copyright-date',
		'version' => '0.1.0',
		'title' => 'Copyright Date',
		'category' => 'text',
		'icon' => 'calendar',
		'description' => 'Custom blocks for the school Site',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'typography' => array(
				'fontSize' => true,
				'textAlign' => true
			),
			'spacing' => array(
				'margin' => true,
				'padding' => true
			)
		),
		'attributes' => array(
			'startingYear' => array(
				'type' => 'number',
				'default' => 2026
			)
		),
		'textdomain' => 'school-blocks',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	)
);
