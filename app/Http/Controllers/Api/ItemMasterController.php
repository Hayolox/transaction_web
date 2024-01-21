<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ItemMaster;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ItemMasterController extends Controller
{
    public function index()
    {
        return ItemMaster::all();
    }

    public function show($id)
    {
        return ItemMaster::find($id);
    }

    public function store(Request $request)
    {
        return ItemMaster::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $itemMaster = ItemMaster::findOrFail($id);
        $itemMaster->update($request->all());

        return $itemMaster;
    }

    public function destroy($id)
    {
        $itemMaster = ItemMaster::findOrFail($id);
        $itemMaster->delete();

        return 204;
    }

    public function showQrCode($itemMasterId)
    {
        $item = ItemMaster::with('subItem')->find($itemMasterId);
        $qrCode = QrCode::size(500)->generate($item);

        return view('qrCode', compact('qrCode', 'item'));
    }
}
