<?php
namespace App\Http\Controllers;


use App\Services\SpfService;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function auth(Request $request)
    {
//        dd($request->all());
        $code = $request->input('code');

        $spfService = new SpfService($request->input('shop'));
        $accessToken = $spfService->getAccessToken($code);
//        dd($accessToken);
        session(['accessToken' => $accessToken, 'shopDomain' => $request->input('shop')]);
        return redirect('/');
    }


    public function install()
    {
        return view('app.install');
    }


    public function installHandle(Request $request)
    {
        $shop = $request->input('shop');
        $spfService = new SpfService();

        return redirect($spfService->installURL($shop));
    }
}