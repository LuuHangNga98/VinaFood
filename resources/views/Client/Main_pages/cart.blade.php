@extends('index')
@section('body')

<div class="container">
    <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Cart</h2>
            <p class="flip">
                <span class="deg1"></span>
                <span class="deg2"></span>
                <span class="deg3"></span>
            </p>
            <p class="mt-5">(2 Sản Phẩm)</p>
        </div>
    </div>
    <div class="row">
    <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Images</th>
        <th>Food's name</th>
        <th>Unit price</th>
        <th>Quantity</th>
        <th>Function</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
        <img src="{{asset('images/pizza-1.jpg')}}" class="float-start" width="50px" height="50px"></a>
        <td>Pizza</td>
        <td>20.00$</td>
        <td><span class="qty">
                <span class="q-inner">
                    <button class="btn-minute" type="button" disabled="">-</button>
                    <span class="number">1</span>
                    <button class="btn-plus" type="button" fdprocessedid="akszw">+</button>
                </span>
            </span>
        </td>
        <td>
            <button type="button" class="btn btn-success">
                <span class="glyphicon glyphicon-refresh"></span>
            </button>
            <button type="button" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash"></span>
            </button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<!-- </section> -->
@endsection