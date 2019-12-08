<?php namespace App\Repos;

use Google2FA;

class GoogleAuthenticatorRepo
{
    /**
     * Genetare google2fa secret key.
     *
     * @return string
     */
    public function secretKey()
    {
        return Google2FA::generateSecretKey();
    }

    /**
     * 2fa activate.
     *
     * @param  \App\User; $user
     * @param  int $security_code
     *
     * @return array
     */
    public function activate($user, $security_code)
    {
        $verify = $this->verify($user->google2fa_secret, $security_code);
        if ($verify) {
            $user->update(['is_2fa_verified' => true]);
        }

        return $verify;
    }

    /**
     * 2fa deactivate.
     *
     * @param  \App\User; $user
     * @param  int $security_code
     *
     * @return array
     */
    public function deactivate($user, $security_code)
    {
        $verify = $this->verify($user->google2fa_secret, $security_code);
        if ($verify) {
            $user->update(['is_2fa_verified' => false]);
        }

        return $verify;
    }

    /**
     * 2fa verify.
     *
     * @param  string  $user_google2fa_secret
     * @param  int $security_code
     *
     * @return boolean
     */
    private function verify($user_google2fa_secret, $security_code)
    {
        return Google2FA::verifyKey($user_google2fa_secret, $security_code);
    }
}
