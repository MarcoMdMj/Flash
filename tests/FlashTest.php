<?php

use MarcoMdMj\Flash\FlashService as Flash;
use Mockery as m;

class FlashTest extends PHPUnit_Framework_TestCase {

    protected $session;

    protected $flash;

	public function setUp()
	{
        $this->session = m::mock('MarcoMdMj\Flash\SessionStore');
        $this->flash = new Flash($this->session);
	}

	/** @test */
	public function it_displays_default_flashs()
	{
        $this->session->shouldReceive('flash')->with('Flash.message', 'Welcome Aboard');
        $this->session->shouldReceive('flash')->with('Flash.level', 'info');

        $this->flash->message('Welcome Aboard');
	}

    /** @test */
    public function it_displays_info_flashs()
    {
        $this->session->shouldReceive('flash')->with('Flash.message', 'Welcome Aboard');
        $this->session->shouldReceive('flash')->with('Flash.level', 'info');

        $this->flash->info('Welcome Aboard');
    }

	/** @test */
	public function it_displays_success_flashs()
	{
        $this->session->shouldReceive('flash')->with('Flash.message', 'Welcome Aboard');
        $this->session->shouldReceive('flash')->with('Flash.level', 'success');

		$this->flash->success('Welcome Aboard');
	}

	/** @test */
	public function it_displays_error_flashs()
	{
        $this->session->shouldReceive('flash')->with('Flash.message', 'Uh Oh');
        $this->session->shouldReceive('flash')->with('Flash.level', 'error');

        $this->flash->error('Uh Oh');
	}

    /** @test */
    public function it_displays_warning_flashs()
    {
        $this->session->shouldReceive('flash')->with('Flash.message', 'Be careful!');
        $this->session->shouldReceive('flash')->with('Flash.level', 'warning');

        $this->flash->warning('Be careful!');
    }

    /** @test */
    public function it_displays_important_flash()
    {
        $this->session->shouldReceive('flash')->with('Flash.message', 'This is important.');
        $this->session->shouldReceive('flash')->with('Flash.important', true);
        $this->session->shouldReceive('flash')->with('Flash.level', 'info');

        $this->flash->message('This is important.')->important(true);
    }

    /** @test */
    public function it_displays_overlay_flash()
    {
        $this->session->shouldReceive('flash')->with('Flash.overlay', true);
        $this->session->shouldReceive('flash')->with('Flash.message', 'Overlay content.');
        $this->session->shouldReceive('flash')->with('Flash.title', 'This is the title');

        $this->flash->overlay('Overlay content.', 'This is the title');
    }

    /** @test */
    public function it_displays_important_overlay_flash()
    {
        $this->session->shouldReceive('flash')->with('Flash.overlay', true);
        $this->session->shouldReceive('flash')->with('Flash.important', true);
        $this->session->shouldReceive('flash')->with('Flash.message', 'Overlay content.');
        $this->session->shouldReceive('flash')->with('Flash.title', 'This is the title');

        $this->flash->overlay('Overlay content.')->title('This is the title')->important(true);
    }

    /** @test */
    public function it_displays_important_error_overlay_flash()
    {
        $this->session->shouldReceive('flash')->with('Flash.overlay', true);
        $this->session->shouldReceive('flash')->with('Flash.important', true);
        $this->session->shouldReceive('flash')->with('Flash.message', 'Overlay error content.');
        $this->session->shouldReceive('flash')->with('Flash.title', 'Oops');
        $this->session->shouldReceive('flash')->with('Flash.level', 'error');

        $this->flash->overlay('Overlay error content.')->title('Oops')->important(true)->level('error');
    }

}
