<?php

namespace App\Http\Controllers;

use App\BlockChainConnection;
use Illuminate\Http\Request;

class TestguzzleController extends Controller
{
    public function testAPIGet() {
        $blockchainConnector = new BlockChainConnection();
        // $name = "elza";
        $data = $blockchainConnector->getMethod("TEACHER", "/api/","Order/15471");
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
        $res = $blockchainConnector->postMethod("TEACHER", "/api/", "Order/15471", $data);
        dd($res);
    }

}
