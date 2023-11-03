<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BotTelegramController extends Controller
{
    
    public function getBotInformation(){

        $result = Http::get(url: "https://api.telegram.org/bot5991841209:AAFJboqu0W4aCdM8yAxvKGJxIAnRhFSv5fU/getMe");
        
        return response()->json(['type'=> true,'message'=> 'get bot information successfully!','information'=>json_decode($result)]);
 
    }


    public function sendMessage(Request $request){

        $result = Http::get(url: "https://api.telegram.org/bot5991841209:AAFJboqu0W4aCdM8yAxvKGJxIAnRhFSv5fU/sendMessagesendMessage?chat_id=5164060094&text= " . $request->message);

        if($request){

            return response()->json(['type'=> true,'message'=> 'sendmessage successfully!','information'=>json_decode($result)]);
        }else{
            return response()->json(['type'=> false,'message'=> 'sendmessage unSuccessfully!']);

        }
}
}