<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class LoginRedirectTest extends TestCase
{

    /**
     * the loggedin page should only be available when we are authenticated
     * When we are not, we should redirect to the sign in page
     */
    public function testNotLoggedInRedirect()
    {
        $response = $this->call('GET', 'loggedin');

        $this->assertRedirectedToRoute('login');

        return 'Tested redirect';
    }

    /**
     * Likewise if we are logged in, should go to the logged in page and see the user name
     */
    public function testLoggedInRedirect()
    {
        $user = new User(array('name' => 'Diane'));
        $this->be($user); //You are now authenticated

        $response = $this->call('GET', 'loggedin');
        $this->see('Logged in');

        //Check that the name is being displayed on the logged in page
        $this->see('Diane');

        return 'tested login';
    }
}