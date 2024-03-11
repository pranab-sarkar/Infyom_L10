<?php

namespace App\Http\Controllers;

use InfyOm\Generator\Utils\ResponseUtil;
use OpenApi\Annotations as OA;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Server(url="/")
 * @OA\Info(
 *   title="InfyOm Laravel Generator APIs",
 *   version="1.0.0"
 * )
 */

class AppBaseController extends BaseController
{
    public function sendResponse($result, $message)
    {
        return response()->json(ResponseUtil::makeResponse($message, $result));
    }

    public function sendError($error, $code = 404)
    {
        return response()->json(ResponseUtil::makeError($error), $code);
    }

    public function sendSuccess($message)
    {
        return response()->json([
            'success' => true,
            'message' => $message
        ], 200);
    }
}

