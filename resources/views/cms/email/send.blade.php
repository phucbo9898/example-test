<h2>
    @switch($order->status)
        @case(1)
            <span>{{$order->fullname}}'s order status has been changed to</span>
            <span style="color: rgb(164, 194, 90); font-weight: bold;">In progress</span><br>
            <span>Please wait for the store to prepare and send it to the carrier.</span>
            @break
        @case(2)
            <span>{{$order->fullname}}'s order status has been changed to</span>
            <span style="color:red; font-weight: bold;">Buyer cancel</span>
            @break
        @case(3)
            <span>{{$order->fullname}}'s order status has been changed to</span>
            <span style="color:red; font-weight: bold;">Admin cancel</span>
            @break
        @default
            <span>{{$order->fullname}}'s order status has been changed to</span>
            <span style="color:rgb(29, 189, 24); font-weight: bold;">Done</span><br>
            <span>The order has been successfully delivered, thank you for trusting and choosing to buy the store's products</span>
    @endswitch
    !!!
</h2>


