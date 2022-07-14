@extends('layouts.app')

@section('extra-css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style-cos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop
@section('title')
    <title>KASA-Cart</title>
@stop
@section('content')
    <header>
        <h2>Cart</h2>
    </header>
    <br><br><br><br><br><br>
    <section id="shopping-cart">
        <table cellpadding="10" cellspacing="1">
            <thead>
                <tr>
                    <th style="text-align: left;"><strong>Image</strong></th>
                    <th style="text-align: left;"><strong>Product</strong></th>
                    <th style="text-align: right;"><strong>Quantity</strong></th>
                    <th style="text-align: right;"><strong>Price</strong></th>
                    <th style="text-align: center;"><strong>Subtotal</strong></th>
                </tr>
            </thead>
            <tbody>
                
                @php $total = 0 @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <tr data-id="{{ $id }}">
                            <td style="text-align: left; border-bottom: #F0F0F0 1px solid;"><img src="{{ $details['image'] }}"/></td>
                            <td style="text-align: left; border-bottom: #F0F0F0 1px solid;"><strong>{{ $details['name'] }}"</strong></td>
                            <td style="text-align: left; border-bottom: #F0F0F0 1px solid;">
                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart quantity-input" />
                            </td>
                            <td style="text-align: right; border-bottom: #F0F0F0 1px solid;">{{ $details['price'] }}</td>
                            <td style="text-align: right; border-bottom: #F0F0F0 1px solid;">${{ $details['price'] * $details['quantity'] }}</td>
                            <td class="actions" style="text-align: center; border-bottom: #F0F0F0 1px solid;"><button class="remove-from-cart"><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" align=right><strong>Total:</strong></td>
                    <td align=right>${{ $total }}</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </section>
    <section class="other-actions">
            <a id="back-to-shop" href="/">Take me back to the shopping zone</a>
    </section>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
    <script>
        $(".update-cart").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
        url: '{{ route('update.cart') }}',
        method: "patch",
        data: {
        _token: '{{ csrf_token() }}',
        id: ele.parents("tr").attr("data-id"),
        quantity: ele.parents("tr").find(".quantity").val()
        },
        success: function (response) {
        window.location.reload();
        }
        });
        });

        $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
        $.ajax({
        url: '{{ route('remove.from.cart') }}',
        method: "DELETE",
        data: {
        _token: '{{ csrf_token() }}',
        id: ele.parents("tr").attr("data-id")
        },
        success: function (response) {
        window.location.reload();
        }
        });
        }
        });
    </script>

@stop