<!-- Modal -->
<style>
    .modal {
        margin-top:275px;
    }
    .buy{
        width: 190px;
        display: block;
        margin: 0 auto;
        border: 1px solid;
        border-color: #bbb6b0;
    }
    .pro-qty input {
        border: 1px solid;
        height: 80%;
    }
    .pro-qty .qtybtn{
        border: 1px solid;
    }
</style>
<form action="{{route('fe.postOrder')}}" method="post">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirm order</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div><br>
            <div class="modal-body">
                <div>
                    <span>
                        Product: {{$products->name}}
                        <input type="hidden" name="product_id" value="{{$products->id}}">
                        <input type="hidden" name="product_name" value="{{$products->name}}">
                        <input type="hidden" name="price" value="{{$products->price}}">
                        <input type="hidden" name="image" value="{{ asset($products->image)}}">
                    </span>
                </div>
                <div style="display:flex;margin-top:10px;">
                    <span>Quantity: </span> &ensp;
                    <div class="shoping__cart__quantity" style="height: 45px !important;">
                        <div class="quantity">
                            <div class="pro-qty" style="width:130px !important;height:32px !important;">
                                <input type="text" name="qty" value="1">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div>
                    <input type="hidden" name="image" value="{{ asset($products->image)}}">
                </div> --}}
            </div>
              <button type="submit" class="buy" onclick="msgFunction()">BUY</button> <br>
          </div>
        </div>
    </div>
</form>
{{-- <script src="{{ asset('frontend/js/custom.js')}}"></script> --}}
<script>
    function msgFunction() {
        alert('You have successfully purchased')
    }
</script>


