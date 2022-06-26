@extends('user.layouts.master')

@section('title','Order Detail')

@section('main-content')
<div class="card">
<h5 class="card-header">{{ trans('ordertrans.Order') }} </h5>
  <div class="card-body">
    @if($order)
    <table class="table table-striped table-hover">
      <thead>
        <tr>
            <th>{{ trans('ordertrans.S.N.') }}</th>
            <th>{{ trans('ordertrans.OrderNo.') }}</th>
            <th>{{ trans('ordertrans.Name') }}</th>
           
            <th>{{ trans('ordertrans.QUANTITY') }}</th>
           
            <th>{{ trans('ordertrans.TOTAL') }}</th>
            <th>{{ trans('ordertrans.Status') }}</th>
           
        </tr>
      </thead>
      <tbody>
        <tr>
            
            <td>{{$order->id}}</td>
            <td>{{$order->order_number}}</td>
            <td>{{$order->first_name}} {{$order->last_name}}</td>
       
            <td>{{$order->quantity}}</td>
           
            <td>{{ trans('carttrans.S.P') }} {{number_format($order->total_amount,2)}}</td>
            <td>
                @if($order->status=='new')
                  <span class="badge badge-primary">{{$order->status}}</span>
                @elseif($order->status=='process')
                  <span class="badge badge-warning">{{$order->status}}</span>
                @elseif($order->status=='delivered')
                  <span class="badge badge-success">{{$order->status}}</span>
                @else
                  <span class="badge badge-danger">{{$order->status}}</span>
                @endif
            </td>
            
          
        </tr>
      </tbody>
    </table>

    <section class="confirmation_part section_padding">
      <div class="order_boxes">
        <div class="row">
          <div class="col-lg-6 col-lx-4">
            <div class="order-info">
              <h4 class="text-center pb-4">{{ trans('ordertrans.orderinfo') }}</h4>
              <table class="table">
                    <tr class="">
                        <td>{{ trans('ordertrans.OrderNo.') }}</td>
                        <td> : {{$order->order_number}}</td>
                    </tr>
                    <tr>
                        <td>{{ trans('ordertrans.OrderDate') }}</td>
                        <td> : {{$order->created_at->format('D d M, Y')}} at {{$order->created_at->format('g : i a')}} </td>
                    </tr>
                    <tr>
                        <td>{{ trans('ordertrans.QUANTITY') }}</td>
                        <td> : {{$order->quantity}}</td>
                    </tr>
                    <tr>
                        <td>{{ trans('ordertrans.OrderStatus') }}</td>
                        <td> : {{$order->status}}</td>
                    </tr>
                    <tr>
                      
                        <td>{{ trans('ordertrans.ShippingCharge') }}</td>
                        <td> :0 </td>
                    </tr>
                    <tr>
                        <td>{{ trans('ordertrans.TOTAL') }}</td>
                        <td> : {{ trans('carttrans.S.P') }} {{number_format($order->total_amount,2)}}</td>
                    </tr>
                    <tr>
                      <td>{{ trans('ordertrans.PaymentMethod') }}</td>
                      <td> : @if($order->payment_method=='cod') Cash on Delivery @else Paypal @endif</td>
                    </tr>
                    <tr>
                        <td>{{ trans('ordertrans.PaymentStatus') }}</td>
                        <td> : {{$order->payment_status}}</td>
                    </tr>
              </table>
            </div>
          </div>

          <div class="col-lg-6 col-lx-4">
            <div class="shipping-info">
              <h4 class="text-center pb-4">{{ trans('ordertrans.Shippinginfo') }}</h4>
              <table class="table">
                    <tr class="">
                        <td>{{ trans('ordertrans.Fullname') }}</td>
                        <td> : {{$order->first_name}} {{$order->last_name}}</td>
                    </tr>
                   
                    <tr>
                        <td>{{ trans('ordertrans.MobileNo.') }}</td>
                        <td> : {{$order->phone}}</td>
                    </tr>
                    <tr>
                        <td>{{ trans('ordertrans.Address') }}</td>
                        <td> : {{$order->address1}}</td>
                    </tr>
                    
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

  </div>
</div>
@endsection

@push('styles')
<style>
    .order-info,.shipping-info{
        background:#ECECEC;
        padding:20px;
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
    }

</style>
@endpush