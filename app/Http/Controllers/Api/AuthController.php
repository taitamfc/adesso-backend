<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginRequest;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Resources\Users\UserResource;
use App\Services\AuthService;
use App\Services\JwtLoginService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    protected $jwtLoginService;
    protected $authService;

    public function __construct(
        JwtLoginService $jwtLoginService,
        AuthService $authService
    )
    {
        $this->jwtLoginService = $jwtLoginService;
        $this->authService = $authService;
    }

    public function login(LoginRequest $request)
    {
        $tokenJwt = $this->jwtLoginService->login($request->validated());
        if ($tokenJwt === false) {
            return $this->responseError(trans("auth.failed"));
        }
        return $this->responseSuccess([
            'object'       => 'JwtToken',
            'token' => $tokenJwt->getToken(),
            'expires_in'   => $tokenJwt->getExpires() * 60,
            'token_type'   => 'Bearer',
        ]);
    }

    /**
     * Register function
     *
     * @param RegisterRequest $request
     * @return void
     */
    public function register(RegisterRequest $request)
    {
        $user = $this->authService->registerUser($request->validated());
        if (!$user) {
            $this->responseError($user , __("label.faild"));
        }
        $tokenJwt = $this->jwtLoginService->login($request->only(['email', 'password']));
        if ($tokenJwt === false) {
            return $this->responseError(trans("auth.failed"));
        }
        return $this->responseSuccess([
            'user' => new UserResource($user),
            'token' => $tokenJwt->getToken(),
            'expires_in'   => $tokenJwt->getExpires() * 60,
            'token_type'   => 'Bearer',
            'message' => __('label.success')
        ]);
    }

    /**
     * Logout function
     *
     * @return void
     */
    public function logout()
    {
        Auth::guard('api')->logout();
        Session::flush();
        return $this->responseSuccess(trans("label.success"));
    }
}
