<?php

class WP_Sample_Unit_Init_Test extends WP_UnitTestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class_instance = new WP_Sample_Unit();
    }

    public function test_google_site_verification()
    {

        $google = get_option('google_site_verification');

        if (!$google) {
            add_option('google_site_verification', 'B6wFaCRbzWE42SyxSvKUOyyPxZfJCb5g');
        }


        $google = get_option('google_site_verification');
        $this->assertSame($google, 'B6wFaCRbzWE42SyxSvKUOyyPxZfJCb5g');


        $meta_tag = $this->class_instance->google_site_verification($google);
        $expected = '<meta name="google-site-verification" content="B6wFaCRbzWE42SyxSvKUOyyPxZfJCb5g">';

        $this->assertEquals($expected, $meta_tag);
    }

    public function test_bing_site_verification()
    {
        $meta_tag = $this->class_instance->bing_site_verification('B6wFaCRbzWE42SyxSvKUOyyPxZfJCb5g');
        $expected = '<meta name="msvalidate.01" content="B6wFaCRbzWE42SyxSvKUOyyPxZfJCb5g">';

        $this->assertEquals($expected, $meta_tag);
    }
}
