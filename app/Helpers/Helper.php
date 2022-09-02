<?php
use App\Models\{ Banner, Blog, Coupon, ProofNote, QuoteSlider, User, Setting, UserRank, ShippingMethod };
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

if (!function_exists('noReplyEmail')) {
    function noReplyEmail ($email, $sender) {
        if(User::where('email',$email)->where('status','active')->first()) {
            return "no-reply@myhouse.com";
        // } else { 
        //     if($sender){
        //         return $sender;
        //     } else {
        //         return "myhouse@gmail.com";
        //     }
        }
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
}