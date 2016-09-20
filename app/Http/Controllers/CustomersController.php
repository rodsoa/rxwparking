<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;

class CustomersController extends Controller
{
    // GET customers/
    public function index() {
        $customers = Customer::all();
        return $customers;
    }

    // GET customers/create
    public function create() {}

    // POST customers/
    public function store() {}
}
