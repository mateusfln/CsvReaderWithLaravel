<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase; //this


class WelcomeTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_welcome_message_can_be_renderized(): void
    {
        $response = $this->view('welcome');
        $response->assertSee(_('Hello world!'));
    }
    public function test_two_buttons_exists(): void
    {
        $response = $this->view('welcome');
        $response->assertSee(_('botao1'));
        $response->assertSee(_('botao2'));
    }
}
