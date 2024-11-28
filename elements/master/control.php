<?php

namespace Elementor;

if (!defined('ABSPATH')) exit;
class Healthray_Master extends Widget_Base
{
	public function get_name()
	{
		return __('Master', 'healthray');
	}
	public function get_title()
	{
		return __('Master', 'healthray');
	}

	protected function register_controls()
	{
		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'title',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Title', 'textdomain' ),
				'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
			]
		);
		$this->end_controls_section();

		$style = new style_picker();
		$style->get_style_picker($this);


	}



	protected function render()
	{

		$settings = $this->get_settings();
		if ($settings['fancy_style'] == '1') {
			require plugin_dir_path(__FILE__) . 'style-1.php';
		} 
		elseif ($settings['fancy_style'] == '2') {
			require plugin_dir_path(__FILE__) . 'style-2.php';
		} 
// 		elseif ($settings['fancy_style'] == '3') {
// 			require plugin_dir_path(__FILE__) . 'style-3.php';
// 		}
	}
}
Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\Healthray_Master());
