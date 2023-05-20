@extends('layout_admin')
@section('main')
<div class="">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Quản lý sản phẩm</h2>

          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="dropdown">
          <button class="dropbtn1" fdprocessedid="sjp3xk">Sắp xếp</button>
          <div class="dropdown-content">
            <a href="http://127.0.0.1:8000/manage-order?order=all">Tất cả đơn hàng</a>
            <a href="http://127.0.0.1:8000/manage-order?order=new">Đơn hàng mới</a>
            <a href="http://127.0.0.1:8000/manage-order?order=done">Đơn hàng đã xử lý</a>
            <a href="http://127.0.0.1:8000/manage-order?order=cancel">Đơn hàng đã hủy</a>
            <a href="http://127.0.0.1:8000/manage-order?order=move">Đơn hàng đang được vận chuyển</a>
          </div>
        </div>
        <div class="x_content">
          <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">


                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Thứ tự</th>
                      <th>Mã đơn hàng</th>
                      <th>Ngày tháng đặt hàng</th>
                      <th>Tình trạng đơn hàng</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>


                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>88aa4</td>
                      <td>2023-05-19 07:54:51</td>
                      <td> <!-- <span style="color:blue">Đơn hàng mới <i class="glyphicon glyphicon-plus-sign" style="margin-left:4px"></i></span> -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 35%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Đơn hàng mới</div>
                        </div>
                      </td>
                      <td>
                        <button type="button" data-toggle="modal" class="chitiet" data-target="#exampleModalLong" data-id="88aa4" fdprocessedid="zfutgm"><i class="fa fa-eye text-success"></i></button>
                        <a onclick="return confirm('Bạn có chắc là muốn xóa đơn hàng này ko?')" href="http://127.0.0.1:8000/delete-order/88aa4" class="active styling-edit" ui-toggle-class="">
                          <i class="fa fa-times text-danger text"></i>
                        </a>



                      </td>
                    </tr>
                  </tbody>
                </table>





                <!-- <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div> -->

                <div class="pagination">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết đơn hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" fdprocessedid="36e2i8">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="has-validation-callback">
          <input type="hidden" name="_token" value="AjV09vHVgepEuTTThX0wlATGKPwKkbeDEEPnqMpC">
          <div class="baobang">
            <div id="kh">
              <div class="khah">
                <div class="heade">
                  <span class="panel-heading1">Thông tin khách hàng</span>
                </div>
                <ul style="list-style-type: none; line-height: 30px ;">
                  <li><span class="tieu">Tên khách hàng:</span>NgaNga</li>
                  <li><span class="tieu">Số điện thoại:</span>0376797213</li>
                  <li><span class="tieu">Email: </span>luuhanga1601@gmail.com</li>
                </ul>
              </div>
            </div>
            <div id="ship">
              <div class="vc">
                <div class="heade">
                  <span class="panel-heading1">Thông tin vận chuyển</span>
                </div>
                <ul style="list-style-type: none; ">
                  <li><span class="tieu">Tên người Vận chuyển:</span> Lưu Hằng Nga</li>
                  <li><span class="tieu">Địa chỉ:</span> Bạch Đằng</li>
                  <li><span class="tieu">Số điện thoại:</span> 0376797213</li>
                  <li><span class="tieu">Quận: </span>Quận Bình Thạnh</li>
                  <li><span class="tieu">Email: </span>luuhanga1601@gmail.com</li>
                  <li><span class="tieu">Ghi chú: </span></li>
                  <li><span class="tieu">Hình thức thanh toán: </span><span class="offline">Tiền mặt</span></li>
                </ul>

              </div>
            </div>


          </div>
          <div id="detail">
            <tr">
            </tr">
            <table class="table table-striped ">
              <thead style="background: #f5f5f5;">
                <tr>
                  <th style="width:20px;">
                    STT
                  </th>
                  <th>Tên sản phẩm</th>
                  <th>Số lượng sp trong kho</th>
                  <th>Mã giảm giá</th>
                  <th>Size</th>
                  <th>Phí ship hàng</th>
                  <th>Số lượng</th>
                  <th>Giá sản phẩm</th>
                  <th>Tổng tiền</th>


                </tr>
              </thead>
              <tbody>
                <tr>

                  <td><i>1</i></td>
                  <td>1 MIẾNG GÀ GIÒN</td>
                  <td>50</td>
                  <td> Không mã</td>
                  <td>Vừa</td>

                  <td>15.000đ</td>

                  <td><input type="number" style="width:45px" min="1" disabled="" class=" sol order_qty_227" value="1" name="product_sales_quantity" fdprocessedid="v3rtre">

                    <input type="hidden" name="order_qty_storage" class="order_qty_storage_227" value="">

                    <input type="hidden" name="order_code" class="order_code" value="88aa4">

                    <input type="hidden" name="order_product_id" class="order_product_id" value="227">
                  </td>
                  <td>20000</td>
                  <td>20.000đ</td>
                </tr>
                <tr>
                  <td colspan="8" class="no"><span style="font-weight:bold">Tổng giảm</span> :0 VNĐ<br><span style="font-weight:bold">Phí ship</span> : 15.000 VNĐ <br><span style="font-weight:bold">Thanh toán</span>: 35.000 VNĐ </td>
                </tr>
              </tbody>
            </table>
          </div>


        </form>
        <form class="has-validation-callback">
          <input type="hidden" name="_token" value="AjV09vHVgepEuTTThX0wlATGKPwKkbeDEEPnqMpC">
          <div class="form-group">
            <select name="" class="form-control order_details" id="in" fdprocessedid="z122tuu">
              <option id="276" selected="" value="1">Chưa xử lý</option>
              <option id="276" value="2">Xử lý đơn hàng</option>
            </select>
          </div>
        </form>
        <!--  <div id="in"></div> -->
      </div>
      <div class="modal-footer">
        <div id="print"><a href="print-order/88aa4" type="button" class="btn btn-danger">In đơn hàng</a></div>
      </div>
    </div>
  </div>
  @endsection