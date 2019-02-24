<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\Order;
use App\Invoice;
use App\Product;
use PDF;

class PdfController extends Controller
{
    public function pdfdownload(Request $request,$id)
    {
    	$user=$request->session()->get('loggedUser');
    	if ($user) {
		$users = DB::table('view_order')
           		 ->where('invoice_id',$id)->get();
    	$pdf = PDF::loadview('User.downinvoice',compact('users','user'));
    	return $pdf->download('invoice.pdf');
        return view('User.invoice');
    	}
    }
}
