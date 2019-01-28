<?php

namespace App\Http\Controllers;

use App\BlockChainConnection;
use Illuminate\Http\Request;

class TestguzzleController extends Controller
{
    public function testAPIGet() {
        $blockchainConnector = new BlockChainConnection();
        // $name = "elza";
        $data = $blockchainConnector->getMethod("FACTORY", "/api/","Sale");
        dd($data);
    }

    public function testAPIPost()
    {
        $blockchainConnector = new BlockChainConnection();
        $newName = "elza3";
        $data = [
            '$class' => "org.acme.factorydemo.Sale",
            "username" => $newName,
            "email" => "hi@onespace.co.th",
        ];
        $res = $blockchainConnector->postMethod("FACTORY", "/api/", "Sale", $data);
        dd($res);
    }

}
