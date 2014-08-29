<?php

/* テーマのカスタマイズ項目を追加 */

function get_analytics_options(){
  return get_option( 'analytics_options' );
}

add_action( 'customize_register', 'theme_customize_register' );
function theme_customize_register($wp_customize) {
  $wp_customize->add_setting( 'analytics_options[tracking_id]', array(
    'default' => '',
    'type'    => 'option',
  ));

  $wp_customize->add_section('analytics_section', array(
    'title'   =>  'アクセス解析',
    'priority'=>  '10',
  ));

  $wp_customize->add_control( 'tracking_id_textfield', array(
    'settings'    => 'analytics_options[tracking_id]',
    'label'       => 'Google Analytics トラッキングID',
    'section'     => 'analytics_section',
    'type'        => 'text',
  ));

}

