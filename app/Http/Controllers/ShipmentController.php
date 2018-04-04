<?php

namespace App\Http\Controllers;

use App\Library\Services\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    function index(Shipment $shipment)
    {

        $data = $shipment->getShipments();
        return view('shipment/index', ['shipments'=>$data->data->shipments]);
    }

    function add(Shipment $shipment)
    {
        return view('shipment/add');
    }
    function store(Request $request, Shipment $shipment)
    {
        $name = $request->input('name');
        $id = time();
        $shipment->addShipment($id, $name);
        return redirect( 'shipment' );
    }
    function show($id, Shipment $shipment)
    {
        $data = $shipment->showShipment($id);
        return view('shipment/view', ['shipment'=>$data->data]);
    }
    function edit($id, Shipment $shipment)
    {
        $data = $shipment->showShipment($id);
        return view('shipment/edit', ['shipment'=>$data->data]);
    }
    function put(Request $request, Shipment $shipment)
    {
        $name = $request->input('name');
        $id = $request->input('id');
        $shipment->putShipment($id, $name);
        return redirect( 'shipment/'.$id );
    }
    function delete(Request $request, Shipment $shipment)
    {
        $id = $request->input('id');
        $shipment->deleteShipment($id);
        return redirect( 'shipment' );
    }
}
