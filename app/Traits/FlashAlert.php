<?php

namespace App\Traits;

/**
 * Flash Alert Notification
 */
trait FlashAlert
{
    public function alertRegisterSuccess()
    {
        return [
            'type' => 'success',
            'message' => 'Registrasi berhasil. Silakan masuk untuk melanjutkan.',
        ];
    }

    public function alertLoginSuccess()
    {
        return [
            'type' => 'success',
            'message' => 'Login berhasil. Selamat datang kembali!',
        ];
    }

    public function alertUmkmRegistrationSuccess()
    {
        return [
            'type' => 'success',
            'message' => 'Pendaftaran UMKM berhasil. Silakan tunggu verifikasi.',
        ];
    }
}
