@extends('index')
@section('body')
<div class="row">
    <div class="container mt-3">
        <div class="card" style="width:300px">
            <img src="{{asset('images/pizza-1.jpg')}}" class="float-start" width="auto" height="auto"></a>
            <div class="card-body">
                <h4 class="card-title" style="color: #fac564; font-size:24px;">Pizza</h4>
                <p class="card-text" style="font-size: 28px;color:red">Giảm 7%</p>
                <p class="card-text" style="color: black;">Đơn hàng tối thiểu: 20.00$</p>
                <p class="card-text" style="color: black;">Ngày hết hạn:20/05/2023</p>
                <button class="btn btn-primary">See Profile</button>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="card" style="width:300px">
            <img src="{{asset('images/pizza-1.jpg')}}" class="float-start" width="auto" height="auto"></a>
            <div class="card-body">
                <h4 class="card-title" style="color: #fac564; font-size:24px;">Pizza</h4>
                <p class="card-text" style="font-size: 28px;color:red">Giảm 7%</p>
                <p class="card-text" style="color: black;">Đơn hàng tối thiểu: 20.00$</p>
                <p class="card-text" style="color: black;">Ngày hết hạn:20/05/2023</p>
                <button class="btn btn-primary">See Profile</button>
            </div>
        </div>
    </div>
</div>
@endsection