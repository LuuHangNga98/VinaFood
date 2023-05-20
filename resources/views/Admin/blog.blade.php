@extends('layout_admin')
@section('main')
<div class="">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Quản lý bài viết</h2>
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
        <div class="button">
          <a href="http://127.0.0.1:8000/add-post" class="btn-color" type="button">Thêm bài viết</a>
        </div>
        <div class="x_content">
          <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">


                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tên bài viết</th>
                      <th>Hình ảnh</th>
                      <th>Slug</th>
                      <th>Mô tả bài viết</th>
                      <th>Từ khóa bài viết</th>
                      <th>Danh mục bài viết</th>
                      <th>Tình trạng</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>


                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Fastfood/ Thức ăn nhanh là gì? Các loại đồ ăn nhanh phổ biến hiện nay</td>
                      <td><img src="http://127.0.0.1:8000/uploads/post/thuc-an-nhanh-la-gi-164.webp" height="100" width="100"></td>
                      <td>fastfood-thuc-an-nhanh-la-gi-cac-loai-do-an-nhanh-pho-bien-hien-nay</td>
                      <td>
                        <p>Fastfood hay đồ ăn nhanh như gà rán, xúc xích, pizza… được các bạn trẻ rất yêu thích vì sự tiện dụng, nhìn rất bắt mắt và hương vị hấp dẫn. Vậy<strong>&nbsp;thức ăn nhanh là gì&nbsp;</strong>và những loại đồ ăn nhanh nào được các bạn trẻ yêu thích nhất? Bạn hãy cùng Blog Sapo tìm hiểu tại bài viết sau nhé.</p>
                      </td>
                      <td>thức ăn nhanh</td>
                      <td>Thức ăn nhanh là gì</td>
                      <td>
                        Hiển thị
                      </td>

                      <td>
                        <a href="http://127.0.0.1:8000/edit-post/27" class="active styling-edit" ui-toggle-class="">
                          <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                        <a onclick="return confirm('Bạn có chắc là muốn xóa bài viết này ko?')" href="http://127.0.0.1:8000/delete-post/27" class="active styling-edit" ui-toggle-class="">
                          <i class="fa fa-times text-danger text"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Mở quán ăn vặt: Những món ăn vặt dễ kiếm tiền triệu mỗi ngày</td>
                      <td><img src="http://127.0.0.1:8000/uploads/post/kinh-doanh-do-an-qua-mang193.webp" height="100" width="100"></td>
                      <td>mo-quan-an-vat-nhung-mon-an-vat-de-kiem-tien-trieu-moi-ngay</td>
                      <td>
                        <p>Bạn muốn&nbsp;<em>mở quán ăn vặt vỉa hè</em>&nbsp;và đang lúng túng chưa biết trong&nbsp;<em>những món ăn vặt dễ kinh doanh nhất hiện nay nên bán đồ ăn vặt gì</em>, bạn muốn tìm&nbsp;<em>cách làm món ăn vặt để bán mang nét đặc trưng riêng của quán bạn</em>. Vậy thì hãy đọc hết bài viết sau đây nhé, nó sẽ cung cấp cho bạn thông tin&nbsp;<em>các món ăn vặt dễ bán nhất</em>&nbsp;để bạn có thêm kinh nghiệm&nbsp;<em>mở quán ăn vặt nhỏ</em>&nbsp;nhỏ xinh xinh cho mình đó.</p>
                      </td>
                      <td>kinh doanh</td>
                      <td>Mở quán ăn vặt: Những món ăn vặt dễ kiếm tiền triệu mỗi ngày</td>
                      <td>
                        Hiển thị
                      </td>

                      <td>
                        <a href="http://127.0.0.1:8000/edit-post/28" class="active styling-edit" ui-toggle-class="">
                          <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                        <a onclick="return confirm('Bạn có chắc là muốn xóa bài viết này ko?')" href="http://127.0.0.1:8000/delete-post/28" class="active styling-edit" ui-toggle-class="">
                          <i class="fa fa-times text-danger text"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="Pagination d-flex justify-content-center">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection