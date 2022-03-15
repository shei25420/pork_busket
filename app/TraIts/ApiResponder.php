<?php

namespace App\Traits;

trait ApiResponder {
    protected function success($data, string $message = null, int $code = 200) {
        return response()->json([
            'status' => true,
            'data' => $data,
            'message' => $message
        ], $code);
    }

    protected function fail(string $message, int $code, $data = null) {
        if($code === 500) {
            if(config('app.debug') === false) $message = "Something seems to have gone wrong. Please try again";
        }
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => $data
        ], $code);
    }
};  