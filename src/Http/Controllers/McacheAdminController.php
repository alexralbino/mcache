<?php

namespace Mixdinternet\Mcache\Http\Controllers;

use Illuminate\Http\Request;

use Caffeinated\Flash\Facades\Flash;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Artisan;

class McacheAdminController extends AdminController
{

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        session()->put('backUrl', request()->fullUrl());

        return view('mixdinternet/mcache::admin.index');
    }

    public function refresh($action)
    {

        switch ($action) {
            case "application":
                Artisan::call('cache:clear');
                Flash::success('Limpeza do cache da aplicação concluído.');
                break;

            case "images":
                Flash::error('Não configurado ainda - Limpeza do cache das imagens concluído.');
                break;

            case "views":
                Artisan::call('view:clear');
                Flash::success('Limpeza do cache das views concluído.');
                break;

            case "routes":
                Artisan::call('route:clear');
                Flash::success('Limpeza do cache das rotas concluído.');
                break;

            case "clear-compiled":
                Artisan::call('clear-compiled');
                Flash::success('Limpeza do cache de otimização concluído.');
                break;

            case "routes-cache":
                Artisan::call('route:cache');
                Flash::success('Cache de rotas gerado com sucesso.');
                break;

            case "optimize":
                Artisan::call('optimize', ['--force' => true]);
                Flash::success('Cache de otimização gerado com sucesso.');
                break;

        }

        return ($url = session()->get('backUrl')) ? redirect($url) : redirect()->route('admin.mcache.index');
    }

}
