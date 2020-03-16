<?php
/**
 * Created by PhpStorm.
 * User: Zuzanna Olszewska
 * Date: 15.03.2020
 * Time: 12:30
 */

namespace App\Http\Controllers;


class Finance extends Controller
{
    private $dumpData = [
            'payable' => 1506,
            'purchases_made' => 81543,
            'was_paid_out' => 5176,
    ];

    /**
     * Get details
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDetails(): \Illuminate\Http\JsonResponse
    {
        $this->success();
        $this->response['data'] = $this->dumpData;
        return $this->output();
    }
}