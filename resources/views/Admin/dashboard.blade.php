@extends('layout_admin')
@section('main')
<div class="row" style="display: inline-block; width: 100%;text-align: center;">
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Tổng Users</span>
              <div class="count">1</div>
              <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span -->
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Tổng đơn hàng</span>
              <div class="count">0</div>
              <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Tổng khách hàng</span>
              <div class="count green">6</div>
              <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Tổng sản phẩm</span>
              <div class="count">21</div>
              <!-- <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Doanh thu tháng này</span>
              <div class="count">0</div>
              <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Lợi nhuận tháng này</span>
              <div class="count">0</div>
              <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
          </div>
        </div>



        <div class="thongke">
          <div class="title">
            <p class="title_thongke">THỐNG KÊ ĐƠN HÀNG THEO DOANH SỐ</p><br>
          </div>
          <form autocomplete="off" class="has-validation-callback">
            <input type="hidden" name="_token" value="FZVBKJNg0GQqhyYZAdZOmPJLFYJN0v2wsy5o5ue0">
            <div class="col-md-2" style="margin-left: 24px;">

              <p>Từ ngày: <input type="text" id="datepicker" class="form-control hasDatepicker" fdprocessedid="sx9m1g"></p>
              <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="LỌC KẾT QUẢ" style="margin-top: 11px;" fdprocessedid="rj80kn">

            </div>

            <div class="col-md-2">
              <p>Đến ngày: <input type="text" id="datepicker2" class="form-control hasDatepicker" fdprocessedid="uvutz"></p>

            </div>

            <div class="col-md-2">
              <p>
                Lọc theo:
                <select class="dashboard-filter form-control" fdprocessedid="ynkmzi">
                  <option>--Chọn--</option>
                  <!-- <option value="thang9">Trong tháng 9</option>
            <option value="7ngay">7 ngày qua</option> -->
                  <option value="thangtruoc">tháng trước</option>
                  <option value="thangnay">tháng này</option>
                  <option value="365ngayqua">365 ngày qua</option>
                </select>
              </p>
            </div>

          </form>



        </div>




        <div class="col-md-12" style="padding:20px 20px">
          <div id="chart1" style="height: 250px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" width="1000px"><svg height="250" version="1.1" width="1094" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.965302px; top: -0.296326px;">
              <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc>
              <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
            </svg>
            <div class="morris-hover morris-default-style" style="display: none;"></div>
          </div>
        </div>



        <div class="row">
          <p class="title_thongke">THỐNG KÊ TRUY CẬP</p>

          <table class="table table-bordered table-dark text-white">
            <thead>
              <tr>
                <th scope="col">Đang online</th>
                <th scope="col">Tổng tháng trước</th>
                <th scope="col">Tổng tháng này</th>
                <th scope="col">Tổng một năm</th>
                <th scope="col">Tổng truy cập</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="color:white">1</td>
                <td style="color:white">0</td>
                <td style="color:white">1</td>
                <td style="color:white">1</td>
                <td style="color:white">1</td>
              </tr>

            </tbody>
          </table>

        </div>

        <div class="x_content">
          <div class="row">
            <div class="col-sm-6 ">
              <p class="title_thongke">THỐNG KÊ ĐƠN HÀNG</p>
              <div id="donut"><svg height="342" version="1.1" width="554" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.974548px; top: -0.608887px;">
                  <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc>
                  <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                  <path fill="none" stroke="#2a3f54" d="M277,278.3333333333333" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
                  <path fill="#2a3f54" stroke="#ffffff" d="M277,281.3333333333333A161,161,0,0,1,277,332Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                  <path fill="none" stroke="#20c997" d="M,0,0" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                  <path fill="#20c997" stroke="#ffffff" d="Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                  <path fill="none" stroke="#17a2b8" d="M,0,0" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                  <path fill="#17a2b8" stroke="#ffffff" d="Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                  <path fill="none" stroke="#dc3545" d="M,0,0" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                  <path fill="#dc3545" stroke="#ffffff" d="Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="277" y="161" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 800 15px Arial;" font-size="15px" font-weight="800" transform="matrix(1.7726,0,0,1.7726,-213.7213,-132.399)" stroke-width="0.5641462590630257">
                    <tspan dy="5.925924301147461" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Đơn hàng mới</tspan>
                  </text><text x="277" y="181" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 14px Arial;" font-size="14px" transform="matrix(2.3,0,0,2.3,-360.1,-225.1889)" stroke-width="0.4347826294277025">
                    <tspan dy="4.8148274421691895" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                  </text>
                </svg></div>
              <div class="info">
                <table class="tile_info">
                  <tbody>
                    <tr>
                      <th class="exp">
                        <p><i class="fa fa-square pro"></i>Đơn hàng mới </p>
                      </th>
                      <th class="exp">
                        <p><i class="fa fa-square post"></i>Đơn hàng đã hủy </p>
                      </th>
                      <th class="exp">
                        <p><i class="fa fa-square or"></i>Đang vận chuyển </p>
                      </th>
                      <th class="exp">
                        <p><i class="fa fa-square cus"></i>Đơn hàng đã xử lý </p>
                      </th>
                      <!--  <th>
                              <p><i class="fa fa-square red"></i>Others </p>
                            </th> -->

                    </tr>

                  </tbody>
                </table>
              </div>

            </div>
            <div class="col-md-6">
              <p class="title_thongke">THỐNG KÊ BÀI VIẾT XEM NHIỀU VÀ SẢN PHẨM BÁN CHẠY</p>
              <div class="row">
                <div class="col-md-6">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Tên sản phẩm</th>
                        <th>số lượng</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                        <td>
                          <a target="_blank" href="http://127.0.0.1:8000/detail/227">1 MIẾNG GÀ GIÒN </a>
                        </td>
                        <td><span style="color:black">()</span></td>

                      </tr>
                      <tr>

                        <td>
                          <a target="_blank" href="http://127.0.0.1:8000/detail/228">6 MIẾNG GÀ GIÒN </a>
                        </td>
                        <td><span style="color:black">()</span></td>

                      </tr>
                      <tr>

                        <td>
                          <a target="_blank" href="http://127.0.0.1:8000/detail/229">4 MIẾNG GÀ GIÒN </a>
                        </td>
                        <td><span style="color:black">()</span></td>

                      </tr>
                      <tr>

                        <td>
                          <a target="_blank" href="http://127.0.0.1:8000/detail/230">2 MIẾNG GÀ GIÒN </a>
                        </td>
                        <td><span style="color:black">()</span></td>

                      </tr>
                      <tr>

                        <td>
                          <a target="_blank" href="http://127.0.0.1:8000/detail/233">1 MIẾNG GÀ GIÒN + KHOAI TÂY CHIÊN VỪA + NƯỚC NGỌT </a>
                        </td>
                        <td><span style="color:black">()</span></td>

                      </tr>
                      <tr>

                        <td>
                          <a target="_blank" href="http://127.0.0.1:8000/detail/234">1 MIẾNG GÀ GIÒN+1 MỲ Ý JOLLY+1 NƯỚC NGỌT </a>
                        </td>
                        <td><span style="color:black">()</span></td>

                      </tr>
                      <tr>

                        <td>
                          <a target="_blank" href="http://127.0.0.1:8000/detail/235">1 CƠM GÀ SỐT CAY </a>
                        </td>
                        <td><span style="color:black">()</span></td>

                      </tr>
                      <tr>

                        <td>
                          <a target="_blank" href="http://127.0.0.1:8000/detail/236">2 MIẾNG GÀ SỐT CAY </a>
                        </td>
                        <td><span style="color:black">()</span></td>

                      </tr>
                      <tr>

                        <td>
                          <a target="_blank" href="http://127.0.0.1:8000/detail/237">2 MIẾNG GÀ SỐT CAY + KHOAI TÂY + NƯỚC </a>
                        </td>
                        <td><span style="color:black">()</span></td>

                      </tr>
                      <tr>

                        <td>
                          <a target="_blank" href="http://127.0.0.1:8000/detail/238">MÌ Ý </a>
                        </td>
                        <td><span style="color:black">()</span></td>

                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-6">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Tên bài viết</th>
                        <th>Views </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                        <td>
                          <a target="_blank" href="http://127.0.0.1:8000/bai-viet/fastfood-thuc-an-nhanh-la-gi-cac-loai-do-an-nhanh-pho-bien-hien-nay">Fastfood/ Thức ăn nhanh là gì? Các loại đồ ăn nhanh phổ biến hiện nay</a>
                        </td>
                        <td><span style="color:black">(1)</span></td>

                      </tr>
                      <tr>

                        <td>
                          <a target="_blank" href="http://127.0.0.1:8000/bai-viet/mo-quan-an-vat-nhung-mon-an-vat-de-kiem-tien-trieu-moi-ngay">Mở quán ăn vặt: Những món ăn vặt dễ kiếm tiền triệu mỗi ngày</a>
                        </td>
                        <td><span style="color:black">(1)</span></td>

                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection