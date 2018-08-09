@extends('layouts.app')
@section('content')
    <div class="ui vertical segment">

        <div class="ui grid container">
            <div class="row">
                <div class="ui column header">

                </div>
            </div>
            <div class="row">

                <div class="sixteen wide column">
                    @if (sizeof(Cart::content()) > 0)

                        <table  class="ui compact selectable striped celled table" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th class="table-image"></th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th class="column-spacer"></th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach (Cart::content() as $item)
                                <tr>
                                    <td class="table-image"><a href="{{ url('shop', [$item->model->slug]) }}"><img src="http://wpsghalelearningcenter.com/storage/185.jpg" alt="product" class="img-responsive cart-image"></a></td>
                                    <td><a href="{{ url('shop', [$item->model->slug]) }}">{{ $item->name }}</a></td>
                                    <td>
                                        <select class="quantity" data-id="{{ $item->rowId }}">
                                            <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                                            <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                                            <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                                            <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                                            <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
                                        </select>
                                    </td>
                                    <td>${{ $item->subtotal }}</td>
                                    <td class=""></td>
                                    <td>
                                        <form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="submit" class="ui negative primary button" value="Remove">
                                        </form>

                                    </td>
                                </tr>

                            @endforeach
                            <tr>
                                <td class="table-image"></td>
                                <td></td>
                                <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
                                <td>${{ Cart::instance('default')->subtotal() }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="table-image"></td>
                                <td></td>
                                <td class="small-caps table-bg" style="text-align: right">Tax</td>
                                <td>${{ Cart::instance('default')->tax() }}</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr class="border-bottom">
                                <td class="table-image"></td>
                                <td style="padding: 40px;"></td>
                                <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                                <td class="table-bg">${{ Cart::total() }}</td>
                                <td class="column-spacer"></td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>

                        <a href="{{ route('home') }}" class="ui primary button">Continue Shopping</a> &nbsp;
                        <a href="#" class="ui positive primary button">Proceed to Checkout</a>

                        <div style="float:right">
                            <form action="{{ url('/emptyCart') }}" method="POST">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="ui negative primary button" value="Empty Cart">
                            </form>
                        </div>

                    @else

                        <h3>You have no courses in purchase cart.</h3>
                        <a href="{{ route('home') }}" class="ui negative positive button" >Continue Shopping</a>

                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.quantity').on('change', function() {
                    var id = $(this).attr('data-id');
                    $.ajax({
                        type: "PATCH",
                        url: '{{ url("/cart") }}' + '/' + id,
                        data: {
                            'quantity': this.value,
                        },
                        success: function(data) {
                            window.location.href = '{{ url('/cart') }}';
                        }
                    });
        });



            });



    </script>
@endsection
