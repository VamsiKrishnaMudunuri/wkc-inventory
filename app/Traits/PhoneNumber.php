<?php

namespace App\Traits;

use Illuminate\Support\Collection;
use Exception;

trait PhoneNumber
{
    public function validatePhoneNumber($phoneNumber, $countryId = null)
    {
        $rsp = [
            'isValid' => false,
            'message' => 'UNKNOWN_ERROR',
            'countryNumber' => '',
            'nationalNumber' => '',
            'fullNumber' => '',
            'request' => [
                'phoneNumber' => $phoneNumber,
                'countryId' => $countryId ? $countryId : env('COUNTRY_ID'),
            ],
        ];
        try {
            $phoneNumberUtil = \libphonenumber\PhoneNumberUtil::getInstance();
            $numberProto = null;
            try {
                $numberProto = $phoneNumberUtil->parse(
                    $rsp['request']['phoneNumber'],
                    $rsp['request']['countryId'],
                );
            } catch (Exception $e) {
                try {
                    $phoneNumberReqPlus = '+' . $rsp['request']['phoneNumber'];
                    $numberProto = $phoneNumberUtil->parse(
                        $phoneNumberReqPlus,
                        $rsp['request']['countryId'],
                    );
                } catch (Exception $e) {
                    throw new Exception('PHONE_NUMBER_VALIDATE:FORMAT_INVALID');
                }
            }

            // check same region country request
            if ($countryId) {
                $isValidNumberRegion = $phoneNumberUtil->isValidNumberForRegion(
                    $numberProto,
                    $rsp['request']['countryId'],
                );
                if ($isValidNumberRegion == false) {
                    throw new Exception(
                        'PHONE_NUMBER_VALIDATE:COUNTRY_ID_INVALID',
                    );
                }
            }

            $getRegion = $phoneNumberUtil->getRegionCodeForNumber($numberProto);
            if ($getRegion) {
                $rsp['countryId'] = $getRegion;
            }

            $isPossibleNumber = $phoneNumberUtil->isPossibleNumber(
                $numberProto,
            );
            if ($isPossibleNumber == false) {
                $isValidNumber = $phoneNumberUtil->isValidNumber($numberProto);
                if ($isValidNumber == false) {
                    throw new Exception(
                        'PHONE_NUMBER_VALIDATE:PHONE_NUMBER_INVALID',
                    );
                }
            }

            $getCountryCode = (string) $numberProto->getCountryCode();
            $getNationalNumber = (string) $numberProto->getNationalNumber();

            $rsp['isValid'] = true;
            $rsp['message'] = '';
            $rsp['countryNumber'] = $getCountryCode;
            $rsp['nationalNumber'] = $getNationalNumber;
            $rsp['fullNumber'] = $rsp['countryNumber'] . $rsp['nationalNumber'];
        } catch (Exception $e) {
            $rsp['message'] = $e->getMessage();
        }
        return $rsp;
    }
}
