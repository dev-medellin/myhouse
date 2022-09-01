<?php
/** 
 * Handles the json http response from all request 
 * _Success()
 * _Error()
 * _Fail()
 * 
 * */  


/**
 * Return success report 
 * @param String $message,
 * @param Any $data, $meta
 * @param Integer $code
 */
if (! function_exists('responseSuccess')) {

    function responseSuccess($message, $data = null, $meta = null, $code = 200, $extension = null) {
        
        $response = (Object)[];

        $response->status   = 'SUCCESS';

        $response->message  = $message;
        
        $response->code  = $code;
        
        if($data != null)
            $response->data = $data;

        if($meta != null) 
            $response->meta = $meta;

        if($extension != null)
            $response->ext = $extension;


        return response()->json($response, $code);
    }
}




/**
 * Return fail report 
 * @param String $message,
 * @param Any $data, $meta
 * @param Integer $code
 */
if (! function_exists('responseFail')) {

    function responseFail($error, $error_message = null) { 

        $response = (Object)[];

        $response->status   = 'FAIL';

        $response->message  = $error;

        if($error_message       != null)
            $response->data     = $error_message;

        return response()->json($response, 200);
    }
}

if (! function_exists('responseError')) {
    /**
     * Return success report 
     * @param String $message,
     * @param Any $data, $meta
     * @param Integer $code
     */
    function responseError ($origin, $error = [], $code = 400, $line = NULL, $message = NULL) {
        $response           = (Object)[];
        $response->status   = 'ERROR';
        $response->origin   = $origin;
        $response->line     = $line;
        $response->message  = $message ? $message : 'Something went wrong, please try again.';
        if ($error != NULL)
            $response->error = $error; 
        return response()->json($response, $code);
    }

    function responseErrorInvoiceID ($origin, $error = [], $code = 400, $line = NULL, $message = NULL) {
        $response           = (Object)[];
        $response->status   = 'ERROR';
        $response->origin   = $origin;
        $response->line     = $line;
        $response->message  = $message ? $message : 'Ops! Invoice ID is not valid please check your invoice ID!';
        if ($error != NULL)
            $response->error = $error; 
        return response()->json($response, $code);
    }
}
 


