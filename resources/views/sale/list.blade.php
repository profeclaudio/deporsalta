@extends('layouts.app')
@section('content')  
  <div class="container">        
    <hr>
    <h2>Ventas realizadas</h2>
    <script src="{{asset('js/sale/action.js')}}"></script>
    <div>
      @foreach($salesDetail as $sale)
      <div class='row alert alert-dark'>
        <div class='col-md-4' >Comprobante: N° {{$sale->id}}</div>
        <div class='col-md-4'>Fecha: {{date('d-m-Y', strtotime($sale->date))}} Hora: {{date('H:m', strtotime($sale->date))}}</div>
        @foreach ($sale->total as $total)
        <div class='col-md-4'>Total: $ {{$total->totalSale}}</div>    
        @endforeach
        
      </div>        
      <div>   
        <table class="table">
          <thead>
            <th>Id</th>
            <th>Producto</th>
            <th>Talle</th>
            <th>P. Unitario</th>
            <th>Cantidad</th>
            <th>Total</th>      
            <!-- <th>Cancelar</th>       -->
          </thead>
          <tbody>
            @forelse ($sale->saledetail as $detail)         

              <tr id='rowSale{{$detail->id}}'>
                <td>{{$detail->product->id}}</td>
                <td>{{$detail->product->description}}</td>
                <td>{{$detail->waist->description}}</td>
                <td>{{$detail->priceUnit}}</td>
                <td>{{$detail->quantity}}</td>      
                <td>{{$detail->total}}</td>                                  
              </tr>                            
            @empty
              <p>Sin detalles para este comprobante</p>
            @endforelse

          </tbody>
        </table>
      </div>   
      @endforeach
      
    </div>
    @if(count($salesDetail))
      <div class="mt-2 mx-auto">
          {{$salesDetail->links('pagination::bootstrap-4')}}
      </div>
    @endif
  </div>
@endsection
