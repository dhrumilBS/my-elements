<?php
namespace Elementor;
if (! defined('ABSPATH')) exit;





class style_picker{
	public function get_style_picker($obj){
		$obj->start_controls_section(
			'section_jkhj',
			[
				'label' => __('Style', 'medicate'),
			]
		);
		$obj->add_control(
			'fancy_style',
			[
				'label' => __('Slider Style', 'medicate'),
				'type' => Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => __('Style 1', 'medicate'),
					'2'  => __('Style 2', 'medicate'),
					'3'  => __('Style 3', 'medicate'),
					'4'  => __('Style 4', 'medicate'),
					'5'  => __('Style 5', 'medicate'),
					'6'  => __('Style 6', 'medicate'),
					'7'  => __('Style 7', 'medicate'),
					'8'  => __('Style 8', 'medicate'),
					'9'  => __('Style 9', 'medicate'),
					'10'  => __('Style 10', 'medicate'),
					'11'  => __('Style 11', 'medicate'),
					'12'  => __('Style 12', 'medicate'),
					'13'  => __('Style 13', 'medicate'),
				],
			]
		);

		$obj->end_controls_section();
	}
}


class Slider_Controls
{
	public function get_slider_btn_controls($obj) {
		$obj->start_controls_section(
			'section_control',
			[
				'label' => __('Slider Control', 'healthray'),
			]
		);

		$obj->add_control(
			'desk_num',
			[
				'label' => __('Desktop number', 'healthray'),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __('3', 'healthray'),
			]
		);
		$obj->add_control(
			'lap_num',
			[
				'label' => __('Laptop number', 'healthray'),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __('3', 'healthray'),

			]
		);
		$obj->add_control(
			'tab_num',
			[
				'label' => __('Tablet number', 'healthray'),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __('2', 'healthray'),
			]
		);
		$obj->add_control(
			'mob_num',
			[
				'label' => __('Mobile number', 'healthray'),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => __('1', 'healthray'),
				'separator' => 'after',

			]
		);
		$obj->add_control(
			'autoplay',
			[
				'label'      => __('Autoplay', 'healthray'),
				'type'       => Controls_Manager::SELECT,
				'default'    => 'false',
				'options'    => [
					'true'       => __('True', 'healthray'),
					'false'          => __('False', 'healthray'),

				],

			]
		);
		$obj->add_control(
			'loop',
			[
				'label'      => __('Loop', 'healthray'),
				'type'       => Controls_Manager::SELECT,
				'default'    => 'false',
				'options'    => [
					'true'       => __('True', 'healthray'),
					'false'          => __('False', 'healthray'),

				],

			]
		);
		$obj->add_control(
			'nav_arrow',
			[
				'label'      => __('Navigation Arrow', 'healthray'),
				'type'       => Controls_Manager::SELECT,
				'default'    => 'true',
				'options'    => [
					'true'       => __('True', 'healthray'),
					'false'          => __('False', 'healthray'),

				],

			]
		);
		$obj->add_control(
			'dots',
			[
				'label'      => __('Dots', 'healthray'),
				'type'       => Controls_Manager::SELECT,
				'default'    => 'true',
				'options'    => [
					'true'       => __('True', 'healthray'),
					'false'          => __('False', 'healthray'),

				],

			]
		);
		$obj->add_responsive_control(
			'margin',
			[
				'label' => __('Space', 'elementor'),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 30,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],


			]
		);
		$obj->end_controls_section();
	}
}
