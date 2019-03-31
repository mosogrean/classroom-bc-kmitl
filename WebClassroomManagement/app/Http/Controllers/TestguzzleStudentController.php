<?php
//
//namespace App\Http\Controllers;
//
//use App\BlockChainConnection;
//use Illuminate\Http\Request;
//
//class TestguzzleController extends Controller
//{
//    public function testAPIGet() {
//        $blockchainConnector = new BlockChainConnection();
// 6       // $name = "elza";
//        $data = $blockchainConnector->getMethod("STUDENTS", "/api/","Students");
//        dd($data);
//    }
//
//    public function testAPIPost()
//    {
//        $blockchainConnector = new BlockChainConnection();
//        $newName = "elza3";
//        $data = [
//            '$class': "classroom.management.kmitl.Teachers",
//        "teacherId": "555",
//        "name": $newName,
//        "surname": "Sint ad.",
//        "position": "resource:classroom.management.kmitl.Positions#Teacher",
//        "faculty": "Id aute sit laborum esse.",
//        "major": "Tempor qui laboris esse eu.",
//        "tel": "Pariatur ut.",
//        "email": "Elit.",
//        "room": [
//        "8488#0"
//        ];
//        $res = $blockchainConnector->postMethod("TEACHERS", "/api/", "Teachers", $data);
//        dd($res);
//    }
//
//}
