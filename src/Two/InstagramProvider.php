<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 12/31/16
 * Time: 5:41 AM
 */

namespace Laravel\Socialite\Two;
use Illuminate\Support\Arr;

class InstagramProvider extends AbstractProvider implements ProviderInterface
{

  protected $scope = ['name','email','gender','verified'];

    /**
     * Get the authentication URL for the provider.
     *
     * @param  string $state
     * @return string
     */
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase('https://api.instagram.com/oauth/authorize/', $state);
        // TODO: Implement getAuthUrl() method.
    }

    /**
     * Get the raw user for the given access token.
     *
     * @param  string $token
     * @return array
     */
    protected function getUserByToken($token)
    {
        // TODO: Implement getUserByToken() method.
    }

    /**
     * Map the raw user array to a Socialite User instance.
     *
     * @param  array $user
     * @return \Laravel\Socialite\Two\User
     */
    protected function mapUserToObject(array $user)
    {
        // TODO: Implement mapUserToObject() method.
    }

    /**
     * Get the token URL for the provider.
     *
     * @return string
     */
    protected function getTokenUrl()
    {
        return 'https://api.instagram.com/oauth/access_token';
        // TODO: Implement getTokenUrl() method.
    }

}
