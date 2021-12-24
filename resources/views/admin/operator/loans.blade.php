<style>
    #chartdiv {
      width: 100%;
      height: 500px;
    }
</style>

<div class="section-header">
            <h1>Хугцаа хэтрэлт</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Нүүр хуудас</a></div>
              <div class="breadcrumb-item"><a href="#">Оператор</a></div>
              <div class="breadcrumb-item">Хугцаа хэтрэлт</div>
            </div>
          </div>

          <div class="section-body">
           
            <div class="row">
              <div class="col-md-5">
                <div class="card">
                  <div class="card-header">
                    <h4>Зээлийн график</h4>
                  </div>
                  <div class="card-body">
                      <div id="chartdiv"></div>
                  </div>
                  <div class="card-footer text-right">
                    
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="card">
                  <div class="card-header">
                    <h4>Хугцаа хэтэрсэн зээлүүд</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Нэр</th>
                          <th>Утасны дугаар</th>
                          <th>Зээлийн дүн</th>
                          <th>ХХ хоног</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Irwansyah Saputra</td>
                          <td>99878425</td>
                          <td>5,000,000</td>
                          <td>2 хоног</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Hasan Basri</td>
                          <td>88765431</td>
                          <td>100,000</td>
                          <td>10 хоног</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Kusnadi</td>
                          <td>77843132</td>
                          <td>900,000</td>
                          <td>7 хоног</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Rizal Fakhri</td>
                          <td>99663355</td>
                          <td>2,500,000</td>
                          <td>5 хоног</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              
            </div>
          </div>


<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
var chart = root.container.children.push(
  am5percent.PieChart.new(root, {
    endAngle: 270
  })
);

// Create series
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
var series = chart.series.push(
  am5percent.PieSeries.new(root, {
    valueField: "value",
    categoryField: "category",
    endAngle: 270
  })
);

series.states.create("hidden", {
  endAngle: -90
});

// Set data
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
series.data.setAll([{
  category: "Хэвийн зээлүүд",
  value: 501.9
}, {
  category: "Хугцаа хэтрэх дөхсөн",
  value: 301.9
}, {
  category: "Хугцаа хэтрээд 1-7 хоносон",
  value: 201.1
}, {
  category: "Хугцаа хэтрээд 7-14 хоносон",
  value: 165.8
}, {
  category: "Хугцаа хэтрээд 14-21 хоносон",
  value: 139.9
}, {
  category: "Хугцаа хэтрээд 21-28 хоносон",
  value: 128.3
}, {
  category: "Хугцаа хэтрээд 28-аас дээш хоносон",
  value: 99
}]);

series.appear(1000, 100);

}); // end am5.ready()
</script>