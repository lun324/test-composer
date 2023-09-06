<?php

namespace Lun324\Test;

class Validator
{
    private static function getRequiredOptions($type)
    {
        switch ($type) {
            case "ImageToTextTask":
                return ["body"];
            case "HCaptchaTaskProxyless":
            case "RecaptchaV3TaskProxyless":
            case "RecaptchaV2EnterpriseTaskProxyless":
            case "NoCaptchaTaskProxyless":
            case "TurnstileTaskProxyless":
                return ["websiteURL", "websiteKey"];
            case "HCaptchaTask":
            case "RecaptchaV2EnterpriseTask":
            case "NoCaptchaTask":
            case "TurnstileTask":
                return ["websiteURL", "websiteKey", "proxyType", "proxyAddress", "proxyPort"];
            case "FunCaptchaTask":
                return ["websiteURL", "websitePublicKey", "proxyType", "proxyAddress", "proxyPort", "userAgent"];
            case "FunCaptchaTaskProxyless":
                return ["websiteURL", "websitePublicKey"];
            case "GeeTestTask":
                return ["websiteURL", "gt", "proxyType", "proxyAddress", "proxyPort"];
            case "GeeTestTaskProxyless":
                return ["websiteURL", "gt"];
            case "ComplexImageTask":
                return ["class", "metadata"];
        }
    }

    private static function buildFailtureMessage($diff)
    {
        return "The following required parameters were not found: " . implode(", ", $diff);
    }

    public static function validate($type, $options)
    {
        $requiredOptions = self::getRequiredOptions($type);

        $existKeys = array_keys($options);
        $diff = array_diff($requiredOptions, $existKeys);

        if (count($diff) > 0) {
            return new Result(false, self::buildFailtureMessage($diff));
        }

        return new Result(true, "valid");
    }

}
