<?php

namespace Lun324\TestComposer;

class Timeouts
{
    public static $recaptchaV2Timeouts = [
        "firstRequestDelay" => 1000,
        "requestInterval" => 3000,
        "timeout" => 180000
    ];

    public static $recaptchaV2EnterpriseTimeouts = [
        "firstRequestDelay" => 1000,
        "requestInterval" => 3000,
        "timeout" => 180000
    ];

    public static $recaptchav3timeouts = [
        "firstRequestDelay" => 1000,
        "requestInterval" => 3000,
        "timeout" => 100080
    ];

    public static $imageToTextTimeouts = [
        "firstRequestDelay" => 350,
        "requestInterval" => 200,
        "timeout" => 10000
    ];

    public static $funCaptchaTimeouts = [
        "firstRequestDelay" => 1000,
        "requestInterval" => 1000,
        "timeout" => 80000
    ];

    public static $hCaptchaTimeouts = [
        "firstRequestDelay" => 1000,
        "requestInterval" => 3000,
        "timeout" => 100080
    ];

    public static $geeTestTimeouts = [
        "firstRequestDelay" => 1000,
        "requestInterval" => 1000,
        "timeout" => 80000
    ];

    public static $turnstileTimeouts = [
        "firstRequestDelay" => 1000,
        "requestInterval" => 1000,
        "timeout" => 80000
    ];

    public static $complexImageTimeouts = [
        "firstRequestDelay" => 350,
        "requestInterval" => 200,
        "timeout" => 10000
    ];

    public static function detectTimeouts($captchaType)
    {
        switch ($captchaType) {
            case "FunCaptchaTaskProxyless":
            case "FunCaptchaTask":
                return self::$funCaptchaTimeouts;
            case "GeeTestTaskProxyless":
            case "GeeTestTask":
                return self::$geeTestTimeouts;
            case "HCaptchaTaskProxyless":
            case "HCaptchaTask":
                return self::$hCaptchaTimeouts;
            case "ImageToTextTask":
                return self::$imageToTextTimeouts;
            case "RecaptchaV2EnterpriseTaskProxyless":
            case "RecaptchaV2EnterpriseTask":
                return self::$recaptchaV2EnterpriseTimeouts;
            case "NoCaptchaTaskProxyless":
            case "NoCaptchaTask":
                return self::$recaptchaV2Timeouts;
            case "RecaptchaV3TaskProxyless":
                return self::$recaptchaV3Timeouts;
            case "TurnstileTask":
            case "TurnstileTaskProxyless":
                return self::$turnstileTimeouts;
            case "ComplexImageTask":
                return self::$complexImageTimeouts;
        }
    }

}
