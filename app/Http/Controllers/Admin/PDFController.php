<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Piscina;
use App\Models\Centro;
use App\Models\DiasTrabajo;

class PDFController extends Controller
{
    public function download()
	{
		$pdf = \PDF::loadView('documento');
		return $pdf->download('documento.pdf');
	}
	
	public function PDFUsers()
	{
    	$users = User::all();
    	$pdf = \PDF::loadView('users', compact('users'));
    	return $pdf->stream('users.pdf');
    }
	
	public function PDFPiscinas()
	{
    	$piscinas = Piscina::all();
    	$pdf = \PDF::loadView('piscinas', compact('piscinas'));
    	return $pdf->stream('piscinas.pdf');
    }
	
	public function PDFCentros()
	{
    	$centros = Centro::all();
    	$pdf = \PDF::loadView('centros', compact('centros'));
    	return $pdf->stream('centros.pdf');
    }

	public function PDFDiasTrabajo()
	{
    	$dias = DiasTrabajo::all();
    	$pdf = \PDF::loadView('dias', compact('dias'));
    	return $pdf->stream('dias.pdf');
    }
}
