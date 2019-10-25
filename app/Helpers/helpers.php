<?php

// Return code Success

// 200 – OK – Everything is working
// 201 – OK – New resource has been created
// 204 – OK – The resource was successfully deleted

// Return code Error

// 400 – Bad Request – The request was invalid or cannot be served. The exact error should be explained in the error payload. E.g. „The JSON is not valid“
// 401 – Unauthorized – The request requires an user authentication
// 403 – Forbidden – The server understood the request, but is refusing it or the access is not allowed.
// 404 – Not found – There is no resource behind the URI.

function response_success($data, $message, $code = 200)
{
    return response()->json([
        'code' => $code,
        'message' => 'Successfully, ' . $message,
        'data' => $data
    ]);
}

function response_error($data, $message, $code = 400)
{
    return response()->json([
        'code' => $code,
        'message' => $message,
        'data' => $data
    ]);
}
