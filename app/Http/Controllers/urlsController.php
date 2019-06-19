<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class urlsController extends Controller
{
    public function __invoke()
        {
            return view('welcome');
            
        } 

    public function sorry()
        {
            return view('sorry');
        }


    public function store(Request $request) 
        {
            $urlName = $request->get('url-name'); 
            $this->validate($request, ['url-name' => 'required|url']);

            $reqUrl = $this->getUrls($urlName);

            return view('result')->with('rac', $reqUrl->raccourcir);            
        }


    public function show($rac)
        {
            //rac est un parametre d'url => {param}
            $redUrl = Url::where('raccourcir', $rac)->firstOrFail();

            return redirect($redUrl->url);
        }


        //Methode helper

    private function getUrls($url)
        {
            return Url::firstOrCreate(
                ['url' => $url],
                ['raccourcir' => Url::createRaccourcir()]
            );

            //EQUIVALENT
            // $verifUrl = Url::whereUrl($url)->first(); 

            // if($verifUrl) {
            //     return $verifUrl;
            // }

            // return Url::create([
            //     'url' => $url,
            //     'raccourcir' => Url::createRaccourcir()
            // ]);

        }
    
}
