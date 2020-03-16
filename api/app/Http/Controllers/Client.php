<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Client extends Controller
{
    private $dumpData = [
        [
            'client' => 'Paweł Nowakowski',
            'product' => 'Elegant fence 1800/1950 x 1800mm',
            'price' => 6000,
            'discount' => 10,
        ],
        [
            'client' => 'Karol Kowalski',
            'product' => 'Modern fence 1800/1950 x 1800mm',
            'price' => 4620,
            'discount' => 20,
        ],
        [
            'client' => 'Mateusz Kwiatkowski',
            'product' => 'Elegant fence 1800/1950 x 1800mm',
            'price' => 6000,
            'discount' => 15,
        ],
        [
            'client' => 'Karol Kowalski',
            'product' => 'Elegant fence 1800/1950 x 1800mm',
            'price' => 4000,
            'discount' => 10,
        ],
        [
            'client' => 'Paweł Nowakowski',
            'product' => 'Elegant fence 1800/1950 x 1800mm',
            'price' => 7000,
            'discount' => 10,
        ],
    ];

    /**
     * Get purchases list
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPurchasesList(): \Illuminate\Http\JsonResponse
    {
        $this->success();
        $this->response['data'] = $this->dumpData;
        return $this->output();
    }
}