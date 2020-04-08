<?php
/**
 * ProfilesController
 */
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Facades\UsersFacade;

class ProfilesController extends Controller
{

    /**
     *
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function show(Request $request, Response $response)
    {
        $datas = UsersFacade::getAllProfiles($this->container);
        return $this->render($response, 'pages/profiles.php', $datas);
    }

    /**
     *
     * @param Request $request
     * @param Response $response
     * @param Array $args
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showProfile(Request $request, Response $response, $args)
    {
        $datas = UsersFacade::getProfile($this->container, $args['username']);
        return $this->render($response, 'pages/profile.php', $datas);
    }
}