<?php

namespace App\Http\Controllers\Helper;

use App\Http\Controllers\Controller;
use Exception;
use App\Traits\CustomException;

class ErrorHelperController extends Controller
{
    use CustomException {
        generateApiError as customGenerateApiError;
    }

    public function generateApiError($message)
    {
        return $this->customGenerateApiError($message);
    }
}
