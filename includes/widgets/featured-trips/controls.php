<?php

namespace WPTRAVELENGINEEB;

/**
 * Featured Trip Widget Controls.
 *
 * @since 1.3.0
 * @package wptravelengine-elementor-widgets
 */

$selectors = array(
	// general section
	'card_background_color' => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--g-bg: {{VALUE}};',),
	'card_padding'          => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--g-p: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',),
	'card_border'           => '{{WRAPPER}} .wpte-elementor-widget .wpte-card',
	'card_border_radius'    => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--g-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',),
	'card_boxshadow'        => '{{WRAPPER}} .wpte-elementor-widget .wpte-card',

	// content section
	'content_alignment'        => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--content-alignment: {{VALUE}};',),
	'content_background_color' => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--content-background: {{VALUE}};',),
	'content_padding'          => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--content-padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',),
	'content_border'           => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__content',
	'content_border_radius'    => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--content-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',),
	'content_boxshadow'        => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__content',

	// image section
	'image_scale'            => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--img-fit: {{VALUE}};',),
	'image_width'            => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--img-w: {{SIZE}}{{UNIT}};',),
	'image_height'           => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--img-h: {{SIZE}}{{UNIT}};',),
	'animation_type'         => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card img' => 'transition-timing-function: {{VALUE}};',),
	'img_animation_duration' => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card img' => 'transition-duration: {{VALUE}}s;',),
	'image_border_radius'    => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--img-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',),

	// title
	'title_typography'  => '{{WRAPPER}} .wpte-elementor-widget .wpte-card__title',
	'title_color'       => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--t-fc: {{VALUE}};'),
	'title_color_hover' => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--t-fc-h: {{VALUE}};'),
	'title_margin'      => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--t-m: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'),

	// sub title
	'sub-title_typography'  => '{{WRAPPER}} .wpte-elementor-widget .wpte-card__sub-title',
	'sub-title_color'       => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--st-fc: {{VALUE}};'),
	'sub-title_margin'      => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--st-m: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'),

	// location
	'location_typography'       => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__location',
	'location_icon_color'       => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--l-ic: {{VALUE}};'),
	'location_icon_size'        => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--l-is: {{SIZE}}{{UNIT}};',),
	'location_margin'           => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--l-m: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'),
	'location_color'            => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--l-fc: {{VALUE}};'),
	'location_hover_color'      => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--l-fc-h: {{VALUE}};'),
	'location_hover_decoration' => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--l-decoration: {{VALUE}};'),


	// meta
	'meta_typography' => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__meta',
	'meta_color'      => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--m-fc: {{VALUE}};',),
	'meta_icon_color' => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--m-ic: {{VALUE}};',),
	'meta_spacing'    => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--m-sb: {{SIZE}}{{UNIT}};',),
	'meta_margin'     => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--m-m: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',),
	'meta_icon_size'  => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--m-is: {{SIZE}}{{UNIT}};',),

	// price
	'price_typography'  => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__price .actual-price',
	'price_color'       => array('{{WRAPPER}} .wpte-elementor-widget.wpte-featured-trips .wpte-card' => '--p-fc-n: {{VALUE}};',),
	'price_bg_color'                      => array(
		'{{WRAPPER}} .wpte-elementor-widget.wpte-featured-trips .wpte-card' => '--p-bg: {{VALUE}};',
	),
	'strike_typography' => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__price .striked-price',
	'strike_color'      => array('{{WRAPPER}} .wpte-elementor-widget.wpte-featured-trips .wpte-card' => '--p-fc-s: {{VALUE}};',),
	'price_margin'      => array('{{WRAPPER}} .wpte-elementor-widget.wpte-featured-trips .wpte-card' => '--p-m: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',),

	// feat tag
	'feat_typography' => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-badge_featured .wpte-badge__text',

	'feat_tag_color'    => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--f-fc: {{VALUE}};',),
	'feat_tag_bg_color' => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--f-bg: {{VALUE}};',),

	// discounttag
	'discount_typography'                => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-badge_discount .wpte-badge__text',
	'discount_tag_color'    => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--d-fc: {{VALUE}};',),
	'discount_tag_bg_color' => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--d-bg: {{VALUE}};',),

	// rating
	'rating_typography' => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__rating',
	'rating_color'      => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__rating' => '--r-fc: {{VALUE}};'),
	'rating_margin'     => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__rating' => '--r-m: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',),

	// button
	'button_typography'          => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__button',
	'button_padding'             => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--b-p: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',),
	'button_margin'              => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--b-m: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',),
	'button_bg_color'            => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--b-bg: {{VALUE}};',),
	'button_color'               => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--b-fc: {{VALUE}};',),
	'button_border'              => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__button',
	'button_border_radius'       => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--b-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',),
	'button_boxshadow'           => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__button',
	'button_bg_hover_color'      => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--b-bg-h: {{VALUE}};',),
	'button_hover_color'         => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--b-fc-h: {{VALUE}};',),
	'button_hover_border'        => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__button:hover',
	'button_hover_border_radius' => array('{{WRAPPER}} .wpte-elementor-widget .wpte-card' => '--b-radius-h: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',),
	'button_hover_boxshadow'     => '{{WRAPPER}} .wpte-elementor-widget .wpte-card .wpte-card__button:hover',
);


return array(
	'featured_trip_layout_settings' => array(
		'type'        => 'control_section',
		'label'       => __('Layout', 'wptravelengine-elementor-widgets'),
		'subcontrols' => array(
			'cardlayout'       => array(
				'label'     => __('Widget Layouts', 'wptravelengine-elementor-widgets'),
				'type'      => 'SELECT',
				'options'   => array(
					'1' => __('Layout 1', 'wptravelengine-elementor-widgets'),
					'2' => __('Layout 2', 'wptravelengine-elementor-widgets'),
					'3' => __('Layout 3', 'wptravelengine-elementor-widgets'),
				),
				'default'   => '1',
			),
		),
	),
	'sorting_filtering'     => array(
		'type'        => 'control_section',
		'label'       => __('Query', 'wptravelengine-elementor-widgets'),
		'subcontrols' => array(
			'listby'         => array(
				'type'    => 'SELECT',
				'label'   => __('Show Featured Trip', 'wptravelengine-elementor-widgets'),
				'default' => [],
				'options' => $this->get_all_posts(),
			),
		),
	),
	'additional_settings'   => array(
		'type'        => 'control_section',
		'label'       => __('Additional', 'wptravelengine-elementor-widgets'),
		'subcontrols' => array(
			'showFeaturedRibbon'    => array(
				'label'   => __('Featured Ribbon', 'wptravelengine-elementor-widgets'),
				'type'    => 'SWITCHER',
				'default' => 'yes',
			),
			'showDiscount'          => array(
				'label'   => __('Discount', 'wptravelengine-elementor-widgets'),
				'type'    => 'SWITCHER',
				'default' => 'yes',
			),
			'showReviews'           => array(
				'label' => __('Reviews', 'wptravelengine-elementor-widgets'),
				'type'  => 'SWITCHER',
			),
			'showLocation'          => array(
				'label'   => __('Location', 'wptravelengine-elementor-widgets'),
				'type'    => 'SWITCHER',
			),
			'showTitle'             => array(
				'label'   => __('Title', 'wptravelengine-elementor-widgets'),
				'type'    => 'SWITCHER',
				'default' => 'yes',
			),
			'showSubTitle'             => array(
				'label'   => __('Sub Title', 'wptravelengine-elementor-widgets'),
				'type'    => 'SWITCHER',
				'default' => 'yes',
			),
			'showSubTitleText'    => array(
				'default'   => __('TRIP OF THE MONTH', 'wptravelengine-elementor-widgets'),
				'type'      => 'TEXT',
				'condition' => array('showSubTitle' => 'yes'),
				'label'     => __('Sub title label', 'wptravelengine-elementor-widgets'),
				'condition' => array('showSubTitle' => 'yes'),
			),
			'showTripMeta'  => array(
				'label'   => __('Trip Meta', 'wptravelengine-elementor-widgets'),
				'type'    => 'SELECT2',
				'label_block' => true,
				'multiple' => true,
				'options' => [
					'showDuration'  => esc_html__('Duration', 'wptravelengine-elementor-widgets'),
					'showDifficulty' => esc_html__('Difficulty', 'wptravelengine-elementor-widgets'),
					'showActivities' => esc_html__('Activity', 'wptravelengine-elementor-widgets'),
					'showTripType' => esc_html__('Trip Type', 'wptravelengine-elementor-widgets'),
					'showGroupSize' => esc_html__('Group Size', 'wptravelengine-elementor-widgets'),
					'showAgeGroup' => esc_html__('Age Group', 'wptravelengine-elementor-widgets'),
					'showAltitude' => esc_html__('Altitude', 'wptravelengine-elementor-widgets'),
				],
				'default' => ['showDuration', 'showDifficulty', 'showActivities', 'showAltitude'],
			),
			'durationType'          => array(
				'type'      => 'SELECT',
				'label'     => __('Duration Type', 'wptravelengine-elementor-widgets'),
				'default'   => 'days',
				'options'   => array(
					'both'   => __('Both Days & Nights', 'wptravelengine-elementor-widgets'),
					'days'   => __('Days only', 'wptravelengine-elementor-widgets'),
					'nights' => __('Nights only', 'wptravelengine-elementor-widgets'),
				),
				'condition' => array('showTripMeta' => 'showDuration'),
			),
			'showPrice'             => array(
				'label'   => __('Price', 'wptravelengine-elementor-widgets'),
				'type'    => 'SWITCHER',
				'default' => 'yes',
			),
			'showStrikedPrice'      => array(
				'label'   => __('Show striked price on sale', 'wptravelengine-elementor-widgets'),
				'type'    => 'SWITCHER',
				'default' => 'yes',
				'condition' => array('showPrice' => 'yes'),
			),
			'priceLabel'    => array(
				'default'   => __('from', 'wptravelengine-elementor-widgets'),
				'type'      => 'TEXT',
				'condition' => array('showPrice' => 'yes'),
				'label'     => __('Price label', 'wptravelengine-elementor-widgets'),
			),
			'showWishlist'  => array(
				'label'   => __('Wishlist', 'wptravelengine-elementor-widgets'),
				'type'    => 'SWITCHER',
				'default' => 'yes',
			),
			'showViewMoreButton'    => array(
				'label' => __('View Details button', 'wptravelengine-elementor-widgets'),
				'type'  => 'SWITCHER',
				'default' => 'yes',
			),
			'viewMoreButtonText'    => array(
				'default'   => __('View Details', 'wptravelengine-elementor-widgets'),
				'type'      => 'TEXT',
				'condition' => array('showViewMoreButton' => 'yes'),
				'label'     => __('Button label', 'wptravelengine-elementor-widgets'),
				'condition' => array('showViewMoreButton' => 'yes'),
			),
		),
	),
	'general_section'      => array(
		'type'        => \Elementor\Controls_Manager::TAB_STYLE,
		'label'       => __('General', 'wptravelengine-elementor-widgets'),
		'subcontrols' => array(
			'card_background_color' => array(
				'type'      => \Elementor\Controls_Manager::COLOR,
				'label'     => __('Background Color', 'wptravelengine-elementor-widgets'),
				'selectors' => $selectors['card_background_color'],
			),
			'card_padding'    => array(
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'label'      => __('Padding', 'wptravelengine-elementor-widgets'),
				'size_units' => array('px', '%', 'em'),
				'selectors'  => $selectors['card_padding'],
			),
			'card_border'           => array(
				'type'     => \Elementor\Group_Control_Border::get_type(),
				'selector' => $selectors['card_border'],
			),
			'card_border_radius'    => array(
				'type'       => 'DIMENSIONS',
				'label'      => __('Border Radius', 'wptravelengine-elementor-widgets'),
				'size_units' => array('px', '%'),
				'selectors'  => $selectors['card_border_radius'],
			),
			'card_boxshadow'        => array(
				'type'     => \Elementor\Group_Control_Box_Shadow::get_type(),
				'selector' => $selectors['card_boxshadow'],
				'label'    => __('Box Shadow', 'wptravelengine-elementor-widgets'),
			),
		),
	),
	'content_section'      => array(
		'type'        => \Elementor\Controls_Manager::TAB_STYLE,
		'label'       => __('Content', 'wptravelengine-elementor-widgets'),
		'subcontrols' => array(
			'content_alignment'  => array(
				'type'      => 'CHOOSE',
				'label'     => __('Alignment', 'wptravelengine-elementor-widgets'),
				'options'   => array(
					'start'   => array(
						'title' => esc_html__('Left', 'wptravelengine-elementor-widgets'),
						'icon'  => 'eicon-text-align-left',
					),
					'center' => array(
						'title' => esc_html__('Center', 'wptravelengine-elementor-widgets'),
						'icon'  => 'eicon-text-align-center',
					),
					'end'  => array(
						'title' => esc_html__('Right', 'wptravelengine-elementor-widgets'),
						'icon'  => 'eicon-text-align-right',
					),
				),
				'selectors' => $selectors['content_alignment'],
			),
			'content_bg_color'      => array(
				'type'      => \Elementor\Controls_Manager::COLOR,
				'label'     => esc_html__('Background Color', 'wptravelengine-elementor-widgets'),
				'selectors' => $selectors['content_background_color'],
			),
			'content_padding'    => array(
				'label'      => esc_html__('Padding', 'wptravelengine-elementor-widgets'),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => array('px', '%', 'em'),
				'selectors'  => $selectors['content_padding'],
			),

			'content_border'           => array(
				'type'     => \Elementor\Group_Control_Border::get_type(),
				'selector' => $selectors['content_border'],
			),
			'content_border_radius'    => array(
				'type'       => 'DIMENSIONS',
				'label'      => __('Border Radius', 'wptravelengine-elementor-widgets'),
				'size_units' => array('px', '%'),
				'selectors'  => $selectors['content_border_radius'],
			),
			'content_boxshadow'        => array(
				'type'     => \Elementor\Group_Control_Box_Shadow::get_type(),
				'label'    => __('Box Shadow', 'wptravelengine-elementor-widgets'),
				'selector' => $selectors['content_boxshadow'],
			),
		),
	),
	'image_section'        => array(
		'type'        => \Elementor\Controls_Manager::TAB_STYLE,
		'label'       => __('Image', 'wptravelengine-elementor-widgets'),
		'subcontrols' => array(
			'image_tabs' => array(
				'type' => 'start_controls_tabs',
				'tabs' => array(
					'image_normal' => array(
						'type'        => 'start_controls_tab',
						'label'       => __('Normal', 'wptravelengine-elementor-widgets'),
						'subcontrols' => array(
							'image_size'          => array(
								'type'    => 'SELECT',
								'label'   => esc_html__('Image Size', 'wptravelengine-elementor-widgets'),
								'options' => Widget::get_image_size_options(),
								'default' => 'full',
							),
							'image_custom_size'   => array(
								'type'      => 'IMAGE_DIMENSIONS',
								'label'     => esc_html__('Custom Image Size', 'wptravelengine-elementor-widgets'),
								'condition' => array(
									'image_size' => 'custom',
								),
							),
							'image_scale'         => array(
								'type'      => 'SELECT',
								'label'     => esc_html__('Object Fit', 'wptravelengine-elementor-widgets'),
								'options'   => array(
									'initial' => esc_html__('Original', 'wptravelengine-elementor-widgets'),
									'contain'  => esc_html__('Contain', 'wptravelengine-elementor-widgets'),
									'cover'    => esc_html__('Cover', 'wptravelengine-elementor-widgets'),
									'fill'     => esc_html__('Fill', 'wptravelengine-elementor-widgets'),
								),
								'default'   => 'cover',
								'selectors' => $selectors['image_scale'],
							),
							'image_width'         => array(
								'type'       => 'SLIDER',
								'label'      => esc_html__('Width', 'wptravelengine-elementor-widgets'),
								'size_units' => array('px', '%'),
								'range'      => array(
									'%'  => array(
										'min' => 0,
										'max' => 100,
									),
									'px' => array(
										'min' => 0,
										'max' => 1000,
									),
								),
								'selectors'  => $selectors['image_width'],
							),
							'image_height'        => array(
								'type'       => 'SLIDER',
								'label'      => esc_html__('Height', 'wptravelengine-elementor-widgets'),
								'size_units' => array('px', '%'),
								'range'      => array(
									'%'  => array(
										'min' => 0,
										'max' => 100,
									),
									'px' => array(
										'min' => 0,
										'max' => 1000,
									),
								),
								'selectors'  => $selectors['image_height'],
							),
							'image_border_radius' => array(
								'type'       => \Elementor\Controls_Manager::DIMENSIONS,
								'label'      => __('Border Radius', 'wptravelengine-elementor-widgets'),
								'size_units' => array('px', '%'),
								'selectors'  => $selectors['image_border_radius'],
							),
						),
					),
					'image_hover'  => array(
						'type'        => 'start_controls_tab',
						'label'       => __('Hover', 'wptravelengine-elementor-widgets'),
						'subcontrols' => array(
							'animation_type'         => array(
								'type'      => 'SELECT',
								'label'     => esc_html__('Animation Type', 'wptravelengine-elementor-widgets'),
								'options'   => array(
									'linear'      => esc_html__('Linear', 'wptravelengine-elementor-widgets'),
									'ease'        => esc_html__('Ease', 'wptravelengine-elementor-widgets'),
									'ease-in'     => esc_html__('Ease-in', 'wptravelengine-elementor-widgets'),
									'ease-out'    => esc_html__('Ease-out', 'wptravelengine-elementor-widgets'),
									'ease-in-out' => esc_html__('Ease-in-out', 'wptravelengine-elementor-widgets'),
									'step-start'  => esc_html__('Step-start', 'wptravelengine-elementor-widgets'),
									'step-end'    => esc_html__('Step-end', 'wptravelengine-elementor-widgets'),
									'initial'     => esc_html__('Initial', 'wptravelengine-elementor-widgets'),
									'inherit'     => esc_html__('Inherit', 'wptravelengine-elementor-widgets'),
								),
								'default'   => 'linear',
								'selectors' => $selectors['animation_type'],
							),
							'img_animation_duration' => array(
								'type'      => \Elementor\Controls_Manager::NUMBER,
								'label'     => esc_html__('Animation Duration (sec)', 'wptravelengine-elementor-widgets'),
								'selectors' => $selectors['img_animation_duration'],
								'min'       => 0,
								'max'       => 100,
								'step'      => 0.1,
								'default'   => 0.3,
							),
						),
					),
				),
			),
		),
	),
	'title_section'        => array(
		'type'        => \Elementor\Controls_Manager::TAB_STYLE,
		'label'       => __('Title', 'wptravelengine-elementor-widgets'),
		'subcontrols' => array(
			'title_typography' => array(
				'type'     => \Elementor\Group_Control_Typography::get_type(),
				'selector' => $selectors['title_typography'],
				'label'    => __('Typography', 'wptravelengine-elementor-widgets'),
			),
			'title_tabs'       => array(
				'type' => 'start_controls_tabs',
				'tabs' => array(
					'title_normal' => array(
						'type'        => 'start_controls_tab',
						'label'       => __('Normal', 'wptravelengine-elementor-widgets'),
						'subcontrols' => array(
							'title_color' => array(
								'type'      => \Elementor\Controls_Manager::COLOR,
								'label'     => __('Color', 'wptravelengine-elementor-widgets'),
								'selectors' => $selectors['title_color'],
							),
						),
					),
					'title_hover'  => array(
						'type'        => 'start_controls_tab',
						'label'       => __('Hover', 'wptravelengine-elementor-widgets'),
						'subcontrols' => array(
							'title_color_hover' => array(
								'type'      => \Elementor\Controls_Manager::COLOR,
								'label'     => __('Color', 'wptravelengine-elementor-widgets'),
								'selectors' => $selectors['title_color_hover'],
							),
						),
					),
				),
			),
			'title_margin'     => array(
				'label'      => esc_html__('Margin', 'wptravelengine-elementor-widgets'),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => array('px', '%', 'em'),
				'selectors'  => $selectors['title_margin'],
			),
		),
		'condition' => array('showTitle' => 'yes'),
	),
	'sub-title_section'        => array(
		'type'        => \Elementor\Controls_Manager::TAB_STYLE,
		'label'       => __('Sub Title', 'wptravelengine-elementor-widgets'),
		'subcontrols' => array(
			'sub-title_typography' => array(
				'type'     => \Elementor\Group_Control_Typography::get_type(),
				'selector' => $selectors['sub-title_typography'],
				'label'    => __('Typography', 'wptravelengine-elementor-widgets'),
			),
			'subtitle_color' => array(
				'type'      => \Elementor\Controls_Manager::COLOR,
				'label'     => __('Color', 'wptravelengine-elementor-widgets'),
				'selectors' => $selectors['sub-title_color'],
			),
			'sub-title_margin'     => array(
				'label'      => esc_html__('Margin', 'wptravelengine-elementor-widgets'),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => array('px', '%', 'em'),
				'selectors'  => $selectors['sub-title_margin'],
			),
		),
		'condition' => array('showSubTitle' => 'yes'),
	),
	'location_section'         => array(
		'type'        => \Elementor\Controls_Manager::TAB_STYLE,
		'label'       => __('Location', 'wptravelengine-elementor-widgets'),
		'subcontrols' => array(
			'loc_position' => array(
				'type'      => 'SELECT',
				'label'     => esc_html__('Position', 'wptravelengine-elementor-widgets'),
				'options'   => array(
					'top'     => esc_html__('Above Title', 'wptravelengine-elementor-widgets'),
					'bottom'  => esc_html__('Below Title', 'wptravelengine-elementor-widgets'),
				),
				'default'   => 'top',
			),
			'loc_typography' => array(
				'type'     => \Elementor\Group_Control_Typography::get_type(),
				'selector' => $selectors['location_typography'],
			),
			'loc_icon_color' => array(
				'type'      => \Elementor\Controls_Manager::COLOR,
				'label'     => esc_html__('Icon Color', 'wptravelengine-elementor-widgets'),
				'selectors' => $selectors['location_icon_color'],
			),
			'location_icon_size'    => array(
				'type'       => 'SLIDER',
				'label'      => esc_html__('Icon Size', 'wptravelengine-elementor-widgets'),
				'size_units' => array('px', '%'),
				'default'    => array(
					'size' => 16,
					'unit' => 'px'
				),
				'range'      => array(
					'%'  => array(
						'min' => 0,
						'max' => 100,
					),
					'px' => array(
						'min' => 0,
						'max' => 100,
					),
				),
				'selectors'  => $selectors['location_icon_size'],
			),
			'loc_margin'     => array(
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'label'      => __('Margin', 'wptravelengine-elementor-widgets'),
				'size_units' => array('px', '%', 'em'),
				'selectors'  => $selectors['location_margin'],
			),
			'loc_tabs'       => array(
				'type' => 'start_controls_tabs',
				'tabs' => array(
					'loc_normal' => array(
						'type'        => 'start_controls_tab',
						'label'       => __('Normal', 'wptravelengine-elementor-widgets'),
						'subcontrols' => array(
							'loc_color' => array(
								'type'      => \Elementor\Controls_Manager::COLOR,
								'label'     => esc_html__('Text Color', 'wptravelengine-elementor-widgets'),
								'selectors' => $selectors['location_color'],
							),
						),
					),
					'loc_hover'  => array(
						'type'        => 'start_controls_tab',
						'label'       => __('Hover', 'wptravelengine-elementor-widgets'),
						'subcontrols' => array(
							'loc_hover_color' => array(
								'type'      => \Elementor\Controls_Manager::COLOR,
								'label'     => esc_html__('Text Color', 'wptravelengine-elementor-widgets'),
								'selectors' => $selectors['location_hover_color'],
							),
							'loc_hover_decoration'  => array(
								'type'      => 'SELECT',
								'label'     => esc_html__('Link Text Decoration', 'wptravelengine-elementor-widgets'),
								'options'   => array(
									'default'      => esc_html__('Default', 'wptravelengine-elementor-widgets'),
									'underline'    => esc_html__('Underline', 'wptravelengine-elementor-widgets'),
									'overline'     => esc_html__('Overline', 'wptravelengine-elementor-widgets'),
									'line-through' => esc_html__('Line Through', 'wptravelengine-elementor-widgets'),
									'none'         => esc_html__('None', 'wptravelengine-elementor-widgets'),
								),
								'default'   => 'default',
								'selectors' => $selectors['location_hover_decoration'],
							),
						),
					),
				),
			),
		),
		'condition' => array('showLocation' => 'yes'),
	),
	'meta_section'         => array(
		'type'        => \Elementor\Controls_Manager::TAB_STYLE,
		'label'       => __('Meta', 'wptravelengine-elementor-widgets'),
		'subcontrols' => array(
			'meta_typography' => array(
				'type'     => \Elementor\Group_Control_Typography::get_type(),
				'selector' => $selectors['meta_typography'],
			),
			'meta_color' => array(
				'type'      => \Elementor\Controls_Manager::COLOR,
				'label'     => esc_html__('Text Color', 'wptravelengine-elementor-widgets'),
				'selectors' => $selectors['meta_color'],
			),
			'meta_icon_color' => array(
				'type'      => \Elementor\Controls_Manager::COLOR,
				'label'     => esc_html__('Icon Color', 'wptravelengine-elementor-widgets'),
				'selectors' => $selectors['meta_icon_color'],
			),
			'meta_icon_size'    => array(
				'type'       => 'SLIDER',
				'label'      => esc_html__('Icon Size', 'wptravelengine-elementor-widgets'),
				'size_units' => array('px', '%'),
				'range'      => array(
					'%'  => array(
						'min' => 0,
						'max' => 100,
					),
					'px' => array(
						'min' => 0,
						'max' => 100,
					),
				),
				'selectors'  => $selectors['meta_icon_size'],
			),
			'meta_spacing'    => array(
				'type'       => 'SLIDER',
				'label'      => esc_html__('Space Between', 'wptravelengine-elementor-widgets'),
				'size_units' => array('px', '%'),
				'range'      => array(
					'%'  => array(
						'min' => 0,
						'max' => 100,
					),
					'px' => array(
						'min' => 0,
						'max' => 100,
					),
				),
				'selectors'  => $selectors['meta_spacing'],
			),
			'meta_margin'     => array(
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'label'      => __('Margin', 'wptravelengine-elementor-widgets'),
				'size_units' => array('px', '%', 'em'),
				'selectors'  => $selectors['meta_margin'],
			)
		),
	),
	'price_section'        => array(
		'type'        => \Elementor\Controls_Manager::TAB_STYLE,
		'label'       => __('Price', 'wptravelengine-elementor-widgets'),
		'condition' => array('showPrice' => 'yes'),
		'subcontrols' => array(
			'priceType'          => array(
				'type'      => 'SELECT',
				'label'     => __('Layouts', 'wptravelengine-elementor-widgets'),
				'default'   => '3',
				'options'   => array(
					'1'   => __('Layout 1', 'wptravelengine-elementor-widgets'),
					'2'   => __('Layout 2', 'wptravelengine-elementor-widgets'),
					'3'   => __('Layout 3', 'wptravelengine-elementor-widgets'),
				),
			),
			'price_bg_color'      => array(
				'type'      => \Elementor\Controls_Manager::COLOR,
				'label'     => esc_html__('Background Color', 'wptravelengine-elementor-widgets'),
				'selectors' => $selectors['price_bg_color'],
				'condition' => array('priceType' => '1'),
			),
			'price_tabs' => array(
				'type' => 'start_controls_tabs',
				'tabs' => array(
					'price_normal' => array(
						'type'        => 'start_controls_tab',
						'label'       => __('Normal', 'wptravelengine-elementor-widgets'),
						'subcontrols' => array(
							'price_typography' => array(
								'type'     => \Elementor\Group_Control_Typography::get_type(),
								'selector' => $selectors['price_typography'],
							),
							'price_color'      => array(
								'type'      => \Elementor\Controls_Manager::COLOR,
								'label'     => esc_html__('Color', 'wptravelengine-elementor-widgets'),
								'selectors' => $selectors['price_color'],
							),
						),
					),
					'price_hover'  => array(
						'type'        => 'start_controls_tab',
						'label'       => __('Strikeout', 'wptravelengine-elementor-widgets'),
						'subcontrols' => array(
							'strike_typography' => array(
								'type'     => \Elementor\Group_Control_Typography::get_type(),
								'selector' => $selectors['strike_typography'],
							),
							'strike_color'      => array(
								'type'      => \Elementor\Controls_Manager::COLOR,
								'label'     => esc_html__('Color', 'wptravelengine-elementor-widgets'),
								'selectors' => $selectors['strike_color'],
							),
						),
					),
				),
			),
			'price_margin'     => array(
				'label'      => esc_html__('Margin', 'wptravelengine-elementor-widgets'),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => array('px', '%', 'em'),
				'selectors'  => $selectors['price_margin'],
			),
		),
	),
	'featured_section'     => array(
		'type'        => \Elementor\Controls_Manager::TAB_STYLE,
		'label'       => __('Featured Tag', 'wptravelengine-elementor-widgets'),
		'condition' => array('showFeaturedRibbon' => 'yes'),
		'subcontrols' => array(
			'ribbonTypography' => array(
				'type'     => \Elementor\Group_Control_Typography::get_type(),
				'selector' => $selectors['feat_typography'],
				'label'    => __('Typography', 'wptravelengine-elementor-widgets'),
			),
			'ribbonType'          => array(
				'type'      => 'SELECT',
				'label'     => __('Layout', 'wptravelengine-elementor-widgets'),
				'default'   => '3',
				'options'   => array(
					'3'   => __('Layout 1', 'wptravelengine-elementor-widgets'),
					'4'   => __('Layout 2', 'wptravelengine-elementor-widgets'),
					'5'   => __('Layout 3', 'wptravelengine-elementor-widgets'),
				),
			),
			'ribbonAlignment'   => array(
				'type'      => 'CHOOSE',
				'label'     => __('Alignment', 'wptravelengine-elementor-widgets'),
				'default'   => 'center',
				'options'   => array(
					'left' => [
						'title' => esc_html__('Left', 'wptravelengine-elementor-widgets'),
						'icon' => 'eicon-flex eicon-align-start-h',
					],
					'center' => [
						'title' => esc_html__('Center', 'wptravelengine-elementor-widgets'),
						'icon' => 'eicon-flex eicon-align-center-h',
					],
					'right' => [
						'title' => esc_html__('Right', 'wptravelengine-elementor-widgets'),
						'icon' => 'eicon-flex eicon-align-end-h',
					],
				),
			),
			'feat_tag_color'    => array(
				'type'      => \Elementor\Controls_Manager::COLOR,
				'label'     => esc_html__('Color', 'wptravelengine-elementor-widgets'),
				'selectors' => $selectors['feat_tag_color'],
			),
			'feat_tag_bg_color' => array(
				'type'      => \Elementor\Controls_Manager::COLOR,
				'label'     => esc_html__('Background Color', 'wptravelengine-elementor-widgets'),
				'selectors' => $selectors['feat_tag_bg_color'],
			),
		),
	),
	'discount_section'     => array(
		'type'        => \Elementor\Controls_Manager::TAB_STYLE,
		'label'       => __('Discount Tag', 'wptravelengine-elementor-widgets'),
		'condition' => array('showDiscount' => 'yes'),
		'subcontrols' => array(
			'discountTypography' => array(
				'type'     => \Elementor\Group_Control_Typography::get_type(),
				'selector' => $selectors['discount_typography'],
				'label'    => __('Typography', 'wptravelengine-elementor-widgets'),
			),
			'discountType'          => array(
				'type'      => 'SELECT',
				'label'     => __('Layout', 'wptravelengine-elementor-widgets'),
				'default'   => '2',
				'options'   => array(
					'1'   => __('Layout 1', 'wptravelengine-elementor-widgets'),
					'2'   => __('Layout 2', 'wptravelengine-elementor-widgets'),
				),
			),
			'discountAlignment'   => array(
				'type'      => 'CHOOSE',
				'label'     => __('Alignment', 'wptravelengine-elementor-widgets'),
				'default'   => 'left',
				'options'   => array(
					'left' => [
						'title' => esc_html__('Left', 'wptravelengine-elementor-widgets'),
						'icon' => 'eicon-flex eicon-align-start-h',
					],
					'right' => [
						'title' => esc_html__('Right', 'wptravelengine-elementor-widgets'),
						'icon' => 'eicon-flex eicon-align-end-h',
					],
				),
			),
			'discount_tag_color'    => array(
				'type'      => \Elementor\Controls_Manager::COLOR,
				'label'     => esc_html__('Color', 'wptravelengine-elementor-widgets'),
				'selectors' => $selectors['discount_tag_color'],
			),
			'discount_tag_bg_color' => array(
				'type'      => \Elementor\Controls_Manager::COLOR,
				'label'     => esc_html__('Background Color', 'wptravelengine-elementor-widgets'),
				'selectors' => $selectors['discount_tag_bg_color'],
			),
		),
	),

	'rating_section'       => !class_exists('Wte_Trip_Review_Init') ? array() : array(
		'type'        => \Elementor\Controls_Manager::TAB_STYLE,
		'label'       => __('Rating', 'wptravelengine-elementor-widgets'),
		'condition'   => array('showReviews' => 'yes'),
		'subcontrols' => array(
			'rating_layout' => array(
				'label'     => __('Layouts', 'wptravelengine-elementor-widgets'),
				'type'      => 'SELECT',
				'options'   => array(
					'1' => __('Layout 1', 'wptravelengine-elementor-widgets'),
					'2' => __('Layout 2', 'wptravelengine-elementor-widgets'),
					'3' => __('Layout 3', 'wptravelengine-elementor-widgets')
				),
				'default'   => '1',
			),
			'rating_typography' => array(
				'type'     => \Elementor\Group_Control_Typography::get_type(),
				'selector' => $selectors['rating_typography'],
			),
			'rating_color'      => array(
				'type'      => \Elementor\Controls_Manager::COLOR,
				'label'     => esc_html__('Color', 'wptravelengine-elementor-widgets'),
				'selectors' => $selectors['rating_color'],
			),
			'rating_margin'    => array(
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'label'      => __('Margin', 'wptravelengine-elementor-widgets'),
				'size_units' => array('px', '%', 'em'),
				'selectors'  => $selectors['rating_margin'],
			),
		),
	),

	'button_section'       => array(
		'type'        => \Elementor\Controls_Manager::TAB_STYLE,
		'label'       => __('Button', 'wptravelengine-elementor-widgets'),
		'subcontrols' => array(
			'button_typography' => array(
				'type'     => \Elementor\Group_Control_Typography::get_type(),
				'selector' => $selectors['button_typography'],
				'label'    => __('Typography', 'wptravelengine-elementor-widgets'),
			),
			'button_padding'    => array(
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'label'      => __('Padding', 'wptravelengine-elementor-widgets'),
				'size_units' => array('px', '%', 'em'),
				'selectors'  => $selectors['button_padding'],
			),
			'button_margin'     => array(
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'label'      => __('Margin', 'wptravelengine-elementor-widgets'),
				'size_units' => array('px', '%', 'em'),
				'selectors'  => $selectors['button_margin'],
			),
			'button_tabs'       => array(
				'type' => 'start_controls_tabs',
				'tabs' => array(
					'button_normal' => array(
						'type'        => 'start_controls_tab',
						'label'       => __('Normal', 'wptravelengine-elementor-widgets'),
						'subcontrols' => array(
							'button_bg_color'      => array(
								'type'      => \Elementor\Controls_Manager::COLOR,
								'label'     => esc_html__('Background Color', 'wptravelengine-elementor-widgets'),
								'selectors' => $selectors['button_bg_color'],
							),
							'button_color'         => array(
								'type'      => \Elementor\Controls_Manager::COLOR,
								'label'     => esc_html__('Color', 'wptravelengine-elementor-widgets'),
								'selectors' => $selectors['button_color'],
							),
							'button_border'        => array(
								'type'     => \Elementor\Group_Control_Border::get_type(),
								'selector' => $selectors['button_border'],
							),
							'button_border_radius' => array(
								'type'       => \Elementor\Controls_Manager::DIMENSIONS,
								'label'      => __('Border Radius', 'wptravelengine-elementor-widgets'),
								'size_units' => array('px', '%'),
								'selectors'  => $selectors['button_border_radius'],
							),
							'button_boxshadow'     => array(
								'type'     => \Elementor\Group_Control_Box_Shadow::get_type(),
								'selector' => $selectors['button_boxshadow'],
								'label'    => esc_html__('Box Shadow', 'wptravelengine-elementor-widgets'),
							),
						),
					),
					'button_hover'  => array(
						'type'        => 'start_controls_tab',
						'label'       => __('Hover', 'wptravelengine-elementor-widgets'),
						'subcontrols' => array(
							'button_bg_hover_color'      => array(
								'type'      => \Elementor\Controls_Manager::COLOR,
								'label'     => esc_html__('Background Color', 'wptravelengine-elementor-widgets'),
								'selectors' => $selectors['button_bg_hover_color'],
							),
							'button_hover_color'         => array(
								'type'      => \Elementor\Controls_Manager::COLOR,
								'label'     => esc_html__('Color', 'wptravelengine-elementor-widgets'),
								'selectors' => $selectors['button_hover_color'],
							),
							'button_hover_border'        => array(
								'type'     => \Elementor\Group_Control_Border::get_type(),
								'selector' => $selectors['button_hover_border'],
							),
							'button_hover_border_radius' => array(
								'type'       => \Elementor\Controls_Manager::DIMENSIONS,
								'label'      => __('Border Radius', 'wptravelengine-elementor-widgets'),
								'size_units' => array('px', '%'),
								'selectors'  => $selectors['button_hover_border_radius'],
							),
							'button_hover_boxshadow'     => array(
								'type'     => \Elementor\Group_Control_Box_Shadow::get_type(),
								'selector' => $selectors['button_hover_boxshadow'],
								'label'    => esc_html__('Box Shadow', 'wptravelengine-elementor-widgets'),
							),
						),
					),
				),
			),
		),
	),
);
