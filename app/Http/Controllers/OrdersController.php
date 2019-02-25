<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserNewOrderRequest;
use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class OrdersController extends Controller
{
    public function manageOrder($order)
    {
        if ($order = Orders::find($order)) {
            $view = view('Pages.Admin.ManageOrder');
            $view->with('order', $order);
            $view->with('title', 'GhostShell.eu | Panel administratora');
            return $view;

        } else {
            return Redirect::to('/zarzadzaj/zlecenia');
        }
    }



    public function contract($order)
    {
        if ($order = Orders::find($order)) {
            if (Storage::disk()->exists('/conctract/' . $order->contract_file)) {
                if ($order->users_id == Auth::id()) {
                    return Response::make(Storage::get('/conctract/' . $order->contract_file), 200, [
                        'Content-Type' => 'application/pdf',
                        'Content-Disposition' => 'inline; filename="' . $order->contract_file . '"'
                    ]);
                } else {
                    return Redirect::to('/');
                }
            } else {
                return Redirect::to('/');
            }
        } else {
            return Redirect::to('/');
        }
    }

    public function myOrder($order)
    {
        if ($order = Orders::find($order)) {
            $view = view('Pages.Panel.MyOrder');
            $view->with('order', $order);
            $view->with('title', 'GhostShell.eu | Panel administratora');
            return $view;

        } else {
            return Redirect::to('/zlecenia');
        }
    }

    public function myOrders()
    {

        $view = view('Pages.Panel.MyOrders');
        $view->with('orders', new Orders());
        $view->with('title', 'GhostShell.eu | Zlecenia - Twoje zlecenia');
        return $view;
    }

    public function newOrder()
    {
        $view = view('Pages.Panel.NewOrder');
        $view->with('title', 'GhostShell.eu | Zlecenia - Nowe zlecenia');
        return $view;
    }


    public function manageOrders()
    {
        $view = view('Pages.Admin.ManageOrders');
        $view->with('orders', new Orders());
        $view->with('title', 'GhostShell.eu | Zlecenia - Zarządzaj zleceniami');
        return $view;
    }

    public function newOrderUser(UserNewOrderRequest $request)
    {
        $input = $request->all();

        if (!empty($input['file'])) {
            $this->validate($request, [
                'file' => 'mimes:pdf',
            ]);

            $order = Orders::createOrder(['name' => $input['name'], 'description' => $input['description'], 'contract' => 1, 'value' => $input['value'], 'users_id' => Auth::user()->id]);
            Orders::findorfail($order)->update(['contract_file' => $request->user()->id . '_' . $order . '.pdf']);
            $request->file('file')->storeAs(
                'conctract', $request->user()->id . '_' . $order . '.pdf'
            );
            return Redirect::to('/zlecenia');

        } else {
            Orders::createOrder(['name' => $input['name'], 'description' => $input['description'], 'value' => $input['value'], 'users_id' => Auth::user()->id]);
            return Redirect::to('/zlecenia');
        }
    }
}
