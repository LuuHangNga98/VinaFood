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

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="button d-flex justify-content-between">
                  <div class="add">
                    <a href="http://127.0.0.1:8000/product/addpro" class="btn-color" type="button">Thêm sản phẩm</a>
                    <button type="button" class="nhan btn btn-danger px-5">Xóa</button>

                  </div>
                  <div class="csv d-flex justify-content-center align-items-center">
                    <form action="http://127.0.0.1:8000/product/export-csv" method="POST" class="mr-4 has-validation-callback">
                      <input type="hidden" name="_token" value="SF5AeVLgvDAzH4YLGmkgLssjFS4y1PvYlzoH9b31"> <input type="submit" value="Xuất file excel" name="export_csv" class="btn btn-success">
                    </form>


                    <form action="http://127.0.0.1:8000/product/import-csv" method="POST" enctype="multipart/form-data" class="love has-validation-callback">
                      <input type="hidden" name="_token" value="SF5AeVLgvDAzH4YLGmkgLssjFS4y1PvYlzoH9b31"> <!-- <input type="file" name="file" accept=".xlsx" class="should"><br> -->
                      <span class="btn btn-default btn-file">
                        chọn file excel <input type="file" name="file" accept=".xlsx">
                      </span>
                      <input type="submit" value="Nhập file excel" name="import_csv" class="btn btn-warning ">
                    </form>

                  </div>




                </div>
                <div class="search text-right p-2">
                  <input type="search" placeholder="search" class="search" id="search">
                </div>

                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive" id="list-product">
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th class="text-center"></th>
                              <th>STT</th>
                              <th>Name</th>
                              <th>Hình ảnh</th>
                              <th>Loại sản phẩm</th>
                              <th>Giá</th>
                              <th>Giá khuyển mãi</th>
                              <th>Số lượng</th>
                              <th>Tình trạng</th>
                              <th>Thao tác</th>
                            </tr>
                          </thead>


                          <tbody id="list">
                            <tr>
                              <td class="text-center"><input type="checkbox" value="252" class="check"></td>
                              <td>1</td>
                              <td>Mỳ Ý abc</td>
                              <td><img src="http://127.0.0.1:8000/images/1684119430.png" alt="" width="100px" height="100px"></td>
                              <td>MỲ Ý</td>
                              <td>25000</td>
                              <td>0</td>
                              <td>10</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/252" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/252" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/252" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/252" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="248" class="check"></td>
                              <td>2</td>
                              <td>KEM SUNDAES SÔCÔLA</td>
                              <td><img src="http://127.0.0.1:8000/images/1683441759.png" alt="" width="100px" height="100px"></td>
                              <td>MÓN TRÁNG MIỆNG</td>
                              <td>15000</td>
                              <td>0</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/248" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/248" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/248" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/248" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="247" class="check"></td>
                              <td>3</td>
                              <td>KEM SUNDAES DÂU</td>
                              <td><img src="http://127.0.0.1:8000/images/1683441725.png" alt="" width="100px" height="100px"></td>
                              <td>MÓN TRÁNG MIỆNG</td>
                              <td>15000</td>
                              <td>0</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/247" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/247" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/247" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/247" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="246" class="check"></td>
                              <td>4</td>
                              <td>TROPICAL SUNDAE</td>
                              <td><img src="http://127.0.0.1:8000/images/1683441681.png" alt="" width="100px" height="100px"></td>
                              <td>MÓN TRÁNG MIỆNG</td>
                              <td>20000</td>
                              <td>0</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/246" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/246" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/246" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/246" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="245" class="check"></td>
                              <td>5</td>
                              <td>KHOAI TÂY LẮC VỊ BBQ (LỚN)</td>
                              <td><img src="http://127.0.0.1:8000/images/1683441561.png" alt="" width="100px" height="100px"></td>
                              <td>KHOAI TÂY CHIÊN</td>
                              <td>35000</td>
                              <td>0</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/245" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/245" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/245" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/245" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="244" class="check"></td>
                              <td>6</td>
                              <td>KHOAI TÂY CHIÊN</td>
                              <td><img src="http://127.0.0.1:8000/images/1683441513.png" alt="" width="100px" height="100px"></td>
                              <td>KHOAI TÂY CHIÊN</td>
                              <td>25000</td>
                              <td>0</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/244" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/244" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/244" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/244" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="243" class="check"></td>
                              <td>7</td>
                              <td>SANDWICH GÀ GIÒN + NƯỚC NGỌT + KHOAI TÂY</td>
                              <td><img src="http://127.0.0.1:8000/images/1683441221.png" alt="" width="100px" height="100px"></td>
                              <td>HAMBURGER</td>
                              <td>50000</td>
                              <td>0</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/243" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/243" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/243" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/243" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="242" class="check"></td>
                              <td>8</td>
                              <td>SANDWICH GÀ GIÒN</td>
                              <td><img src="http://127.0.0.1:8000/images/1683441172.png" alt="" width="100px" height="100px"></td>
                              <td>HAMBURGER</td>
                              <td>30000</td>
                              <td>0</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/242" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/242" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/242" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/242" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="241" class="check"></td>
                              <td>9</td>
                              <td>SANDWICH GÀ GIÒN + NƯỚC NGỌT</td>
                              <td><img src="http://127.0.0.1:8000/images/1683441120.png" alt="" width="100px" height="100px"></td>
                              <td>HAMBURGER</td>
                              <td>35000</td>
                              <td>0</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/241" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/241" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/241" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/241" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="240" class="check"></td>
                              <td>10</td>
                              <td>MÌ Ý + 1 MIẾNG GÀ RÁN + KHOAI TÂY VỪA + NƯỚC NGỌT</td>
                              <td><img src="http://127.0.0.1:8000/images/1683440789.png" alt="" width="100px" height="100px"></td>
                              <td>MỲ Ý</td>
                              <td>90000</td>
                              <td>5000</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/240" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/240" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/240" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/240" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="239" class="check"></td>
                              <td>11</td>
                              <td>MÌ Ý + NƯỚC NGỌT</td>
                              <td><img src="http://127.0.0.1:8000/images/1683440712.png" alt="" width="100px" height="100px"></td>
                              <td>MỲ Ý</td>
                              <td>40000</td>
                              <td>0</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/239" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/239" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/239" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/239" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="238" class="check"></td>
                              <td>12</td>
                              <td>MÌ Ý</td>
                              <td><img src="http://127.0.0.1:8000/images/1683440634.png" alt="" width="100px" height="100px"></td>
                              <td>MỲ Ý</td>
                              <td>35000</td>
                              <td>0</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/238" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/238" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/238" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/238" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="237" class="check"></td>
                              <td>13</td>
                              <td>2 MIẾNG GÀ SỐT CAY + KHOAI TÂY + NƯỚC</td>
                              <td><img src="http://127.0.0.1:8000/images/1683440309.png" alt="" width="100px" height="100px"></td>
                              <td>GÀ SỐT CAY</td>
                              <td>90000</td>
                              <td>15000</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/237" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/237" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/237" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/237" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="236" class="check"></td>
                              <td>14</td>
                              <td>2 MIẾNG GÀ SỐT CAY</td>
                              <td><img src="http://127.0.0.1:8000/images/1683440242.png" alt="" width="100px" height="100px"></td>
                              <td>GÀ SỐT CAY</td>
                              <td>70000</td>
                              <td>10000</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/236" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/236" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/236" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/236" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center"><input type="checkbox" value="235" class="check"></td>
                              <td>15</td>
                              <td>1 CƠM GÀ SỐT CAY</td>
                              <td><img src="http://127.0.0.1:8000/images/1683440193.jpg" alt="" width="100px" height="100px"></td>
                              <td>GÀ SỐT CAY</td>
                              <td>50000</td>
                              <td>5000</td>
                              <td>50</td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/huykichhoat/235" title="Hiển thị"><i class="glyphicon glyphicon-eye-open success"></i></a>

                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/product/add_images/235" title="Thêm thư viện"><i class="glyphicon glyphicon-th"></i></a>
                                <a href="http://127.0.0.1:8000/product/edit_pro/235" title="Sửa sản phẩm"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="http://127.0.0.1:8000/product/delete/235" title="xóa sản phẩm"><i class="glyphicon glyphicon-trash"></i></a>
                              </td>
                            </tr>
                          </tbody>

                        </table>
                        <nav>
                          <ul class="pagination">

                            <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                              <span class="page-link" aria-hidden="true">‹</span>
                            </li>





                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/pagination?page=2">2</a></li>


                            <li class="page-item">
                              <a class="page-link" href="http://127.0.0.1:8000/pagination?page=2" rel="next" aria-label="pagination.next">›</a>
                            </li>
                          </ul>
                        </nav>


                        <!--   <div class="Pagination d-flex justify-content-center"> -->

                        <!--   </div> -->




                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection