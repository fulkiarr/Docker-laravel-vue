  <template>
      <div>
          <base-header  style="min-height: 200px; background-image: url(http://127.0.0.1:8000/img/images.jpg); background-size: cover; background-position: center top;" class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center">
          <span class="mask bg-gradient-success opacity-8"></span>
          <div class="container-fluid d-flex align-items-center">
                <div class="row">
                   <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1 class="display-2 text-white">Site Unggaran</h1>
                    </div>
                </div>
            </div>
                </div>
          </div>
          </base-header>
          <!--Maps-->
          <!--Charts-->
          <div class="container-fluid mt--8">
              <div class="row">
                  <div class="col-xl-12 col-md-12 mt-5">
                      <card type="default" header-classes="bg-transparent">
                          <div slot="header" class="row align-items-center">
                                <div class="col">
                                    <base-button size="sm" slot="title" type="secondary">
                                        Last updated : 2019-10-30 12:30:20
                                    </base-button>
                                </div>
                                <div class="col text-right">
                                    <base-dropdown>
                                    <base-button size="sm" slot="title" type="primary" class="dropdown-toggle">
                                    Interval Refresh
                                    </base-button>
                                        <a class="dropdown-item" href="#">5 Min</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">10 Min</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">30 Min</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">60 Min</a>
                                    </base-dropdown>
                                    <base-button type="primary" size="sm"><i class="ni ni-spaceship"></i> Refresh</base-button>
                                </div>
                          </div>

                          <div class="row">
                              <div class="col-md-9">
                                  <card type="default" class="mb-4" gradient="danger" header-classes="bg-transparent">
                                      <center class="text-white font-weight-bold" style="text-transform:uppercase;">
                                          Device Graph</center>
                                  </card>
                                  <div class="row">
                                      <div class="col-md-4">
                                          <card type="default" header-classes="bg-transparent">
                                              <div slot="header" class="row align-items-center">
                                                  <div class="col">
                                                      <h6 class="text-light text-uppercase ls-1 mb-1">Device Name</h6>
                                                      <h5 class="h3 text-white mb-0">PM 25 ()</h5>
                                                  </div>
                                              </div>
                                              <section class="charts">
                                                  <vue-highcharts :options="chart" ref="chart1"
                                                      :highcharts="Highcharts"></vue-highcharts>
                                              </section>
                                          </card>
                                      </div>

                                      <div class="col-md-4">
                                          <card type="default" header-classes="bg-transparent">
                                              <div slot="header" class="row align-items-center">
                                                  <div class="col">
                                                      <h6 class="text-light text-uppercase ls-1 mb-1">Device Name</h6>
                                                      <h5 class="h3 text-white mb-0">PM 10</h5>
                                                  </div>
                                              </div>
                                              <section class="charts">
                                                  <vue-highcharts :options="chart" ref="chart2"
                                                      :highcharts="Highcharts"></vue-highcharts>
                                              </section>
                                          </card>
                                      </div>

                                      <div class="col-md-4">
                                          <card type="default" header-classes="bg-transparent">
                                              <div slot="header" class="row align-items-center">
                                                  <div class="col">
                                                      <h6 class="text-light text-uppercase ls-1 mb-1">Device Name</h6>
                                                      <h5 class="h3 text-white mb-0">CO<sub>2</sub></h5>
                                                  </div>
                                              </div>
                                              <section class="charts">
                                                  <vue-highcharts :options="chart" ref="chart3"
                                                      :highcharts="Highcharts"></vue-highcharts>
                                              </section>
                                          </card>
                                      </div>

                                      <div class="col-md-4 mt-4">
                                          <card type="default" header-classes="bg-transparent">
                                              <div slot="header" class="row align-items-center">
                                                  <div class="col">
                                                      <h6 class="text-light text-uppercase ls-1 mb-1">Data Name</h6>
                                                      <h5 class="h3 text-white mb-0">H<sub>2</sub>O</h5>
                                                  </div>
                                              </div>
                                              <section class="charts">
                                                  <vue-highcharts :options="chart" ref="chart4"
                                                      :highcharts="Highcharts"></vue-highcharts>
                                              </section>
                                          </card>
                                      </div>

                                      <div class="col-md-4 mt-4">
                                          <card type="default" header-classes="bg-transparent">
                                              <div slot="header" class="row align-items-center">
                                                  <div class="col">
                                                      <h6 class="text-light text-uppercase ls-1 mb-1">Data Name</h6>
                                                      <h5 class="h3 text-white mb-0">O<sub>2</sub></h5>
                                                  </div>
                                              </div>
                                              <section class="charts">
                                                  <vue-highcharts :options="chart" ref="chart5"
                                                      :highcharts="Highcharts"></vue-highcharts>
                                              </section>
                                          </card>
                                      </div>

                                      <div class="col-md-4 mt-4">
                                          <card type="default" header-classes="bg-transparent">
                                              <div slot="header" class="row align-items-center">
                                                  <div class="col">
                                                      <h6 class="text-light text-uppercase ls-1 mb-1">Data Name</h6>
                                                      <h5 class="h3 text-white mb-0">Humidity</h5>
                                                  </div>
                                              </div>
                                              <section class="charts">
                                                  <vue-highcharts :options="chart" ref="chart6"
                                                      :highcharts="Highcharts"></vue-highcharts>
                                              </section>
                                          </card>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-3">
                                  <card type="default" class="mb-4" gradient="danger" header-classes="bg-transparent">
                                      <center class="text-white font-weight-bold" style="text-transform:uppercase;">
                                          Device Data</center>
                                  </card>
                                  <div class="row">
                                      <div class="col-md-12">

                                          <div class="card bg-default">
                                              <div class="card-header bg-transparent">
                                                  <div class="row align-items-center">
                                                      <div class="col">
                                                          <h6 class="text-light text-uppercase ls-1 mb-1">Door Status
                                                          </h6>
                                                          <h5 class="h3 text-white mb-0">{{ door }}</h5>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-md-4">
                                                              <div class="icon door icon-shape text-white shadow no-bg"
                                                                  style="border-radius: 10% !important;">
                                                                  <i class="ni ni-lock-circle-open"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                        <div class="card bg-default mt-2">
                                              <div class="card-header bg-transparent">
                                                  <div class="row align-items-center">
                                                      <div class="col">
                                                          <h6 class="text-light text-uppercase ls-1 mb-1">Battery Status
                                                          </h6>
                                                          <h5 class="h3 text-white mb-0">{{ battery }}</h5>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-md-4">
                                                              <div class="icon battery icon-shape text-white shadow no-bg"
                                                                  style="border-radius: 10% !important;">
                                                                  <i class="ni ni-bulb-61"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="card bg-default mt-2">
                                              <div class="card-header bg-transparent">
                                                  <div class="row align-items-center">
                                                      <div class="col">
                                                          <h6 class="text-light text-uppercase ls-1 mb-1">Genset Status
                                                          </h6>
                                                          <h5 class="h3 text-white mb-0">{{ genset }}</h5>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-md-4">
                                                              <div class="icon genset icon-shape text-white shadow no-bg"
                                                                  style="border-radius: 10% !important;">
                                                                  <i class="ni ni-sound-wave"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="card bg-default mt-2">
                                              <div class="card-header bg-transparent">
                                                  <div class="row align-items-center">
                                                      <div class="col">
                                                          <h6 class="text-light text-uppercase ls-1 mb-1">Waterleak Status
                                                          </h6>
                                                          <h5 class="h3 text-white mb-0">{{ waterleak }}</h5>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-md-4">
                                                              <div class="icon waterleak icon-shape text-white shadow no-bg"
                                                                  style="border-radius: 10% !important;">
                                                                  <i class="ni ni-cloud-download-95"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="card bg-default mt-2">
                                              <div class="card-header bg-transparent">
                                                  <div class="row align-items-center">
                                                      <div class="col">
                                                          <h6 class="text-light text-uppercase ls-1 mb-1">CCTV Status
                                                          </h6>
                                                          <h5 class="h3 text-white mb-0">{{ camera }}</h5>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-md-4">
                                                              <div class="icon camera icon-shape text-white shadow no-bg"
                                                                  style="border-radius: 10% !important;">
                                                                  <i class="ni ni-camera-compact"></i>
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
                      </card>
                  </div>
              </div>
          </div>
          <!--- END CHART -->
      </div>
  </template>


<script>
  // Charts
    import VueHighcharts from '../components/VueHighcharts/VueHighcharts.vue'
    import More from 'highcharts/highcharts-more'
    import Highcharts from 'highcharts'
    import solidGauge from 'highcharts/modules/solid-gauge'
    import $ from 'jquery'

    More(Highcharts);
    solidGauge(Highcharts);
    let timer = null
        const data = {
            chart: {
                height: '200px',
                type: 'solidgauge',
                style: {
                    fontFamily: "Helvetica"
                },
                backgroundColor: 'transparent'
            },
            title: null,
            credits: false,
            pane: {
                center: ['50%', '80%'],
                size: '160%',
                startAngle: -90,
                endAngle: 90,
                background: [
                {
                    backgroundColor: 'rgba(233,233,233,0.1)',
                    outerRadius: '5%',
                    innerRadius: '105%',
                    shape: 'arc',
                    borderColor: 'transparent'
                },
                {
                    backgroundColor: '#fff',
                    outerRadius: '5%',
                    innerRadius: '100%',
                    shape: 'arc',
                    borderColor: 'transparent',
                },
                {
                    backgroundColor: 'rgba(0,0,0, 0.8)',
                    outerRadius: '5%',
                    innerRadius: '60%',
                    shape: 'arc',
                    borderColor: 'transparent',
                }
           ]
            },
            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                linearGradient: { x1: 0, x2: 0, y1: 0, y2: 1 },
                stops: [
                    [0.1, '#00A74A'], // green
                    [0.5, '#F6EB61'], // yellow
                    [0.9, '#FF5869'] // red
                ],
                min: 0,
                max: 100,
                minColor: "#fff",
                maxColor: "#fff",
                lineWidth: 0,
                minorTickInterval: null,
                tickColor: 'rgba(0, 0, 0, 0.8)',
                tickAmount: 2,
                // title: {
                //     text: 'PM 2.5',
                //     y: -90,
                //     style: {
                //         "font-size" : "18px",
                //         "color" : "#ffffff",
                //         "font-weight" : "bold"
                //     }
                // },
                labels: {
                    y: 16,
                    style: {
                        color: '#fff'
                    }
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: -5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            },
            series: [
                {
                    name: 'customers',
                    data: [0],
                    dataLabels: {
                        format: '<span style="font-size:35px;color:#fff;' +
                        '' + '">{y}</span><br>'
                    }
                }
            ]
        }


    export default {
        components: {
            VueHighcharts
        },
        mounted() {
            this.logapi('../../api/resources/log', 'Bearer ' + JSON.parse(localStorage.getItem('token'))['token']).then(response => {
                const chart1 = this.$refs.chart1.getChart()
                const chart2 = this.$refs.chart2.getChart()
                const chart3 = this.$refs.chart3.getChart()
                const chart4 = this.$refs.chart4.getChart()
                const chart5 = this.$refs.chart5.getChart()
                const chart6 = this.$refs.chart6.getChart()

                let pm25 = chart1.series[0].points[0]
                let pm10 = chart2.series[0].points[0]
                let co2 = chart3.series[0].points[0]
                let h2o = chart4.series[0].points[0]
                let o2 = chart5.series[0].points[0]
                let humidity = chart6.series[0].points[0]

                pm25.update(response.data['pm25'])
                pm10.update(response.data['pm10'])
                co2.update(response.data['co2'])
                h2o.update(response.data['H2o'])
                o2.update(response.data['O2'])
                humidity.update(response.data['humidity'])
                let arrays = ['door', 'battery', 'genset', 'waterleak', 'camera'];
                for(let i = 0;i < arrays.length;i++){
                    if(response.data[arrays[i]] !== ""){
                        if(response.data[arrays[i]] == "1"){
                            if(arrays[i] == 'door'){
                                this[arrays[i]] = 'CLOSED'
                            }else if(arrays[i] == 'battery'){
                                this[arrays[i]] = 'PLUGGED IN'
                            }else if(arrays[i] == 'genset'){
                                this[arrays[i]] = 'RUN'
                            }else if(arrays[i] == 'waterleak'){
                                this[arrays[i]] = 'NO'
                            }else if(arrays[i] == 'camera'){
                                this[arrays[i]] = 'ON';
                            }
                            if($('.'+arrays[i]).hasClass('no-bg')){
                                $('.'+arrays[i]).toggleClass('no-bg bg-success')
                            }else{
                                $('.'+arrays[i]).toggleClass('bg-gradient-red bg-success')
                            }
                        }else{
                            if(arrays[i] == 'door'){
                                this[arrays[i]] = 'OPENED'
                            }else if(arrays[i] == 'battery'){
                                this[arrays[i]] = 'PLUGGED OUT'
                            }else if(arrays[i] == 'genset'){
                                this[arrays[i]] = 'FAIL'
                            }else if(arrays[i] == 'waterleak'){
                                this[arrays[i]] = 'YES'
                            }else if(arrays[i] == 'camera'){
                                this[arrays[i]] = 'OFF';
                            }
                            if($('.'+arrays[i]).hasClass('no-bg')){
                                $('.'+arrays[i]).toggleClass('no-bg bg-red')
                            }else{
                                $('.'+arrays[i]).toggleClass('bg-success bg-red')
                            }
                        }
                    }
                }

            });
        },
        data() {
            return {
                chart: data,
                door : 'N/A',
                battery: 'N/A',
                genset: 'N/A',
                waterleak: 'N/A',
                camera: 'N/A',
                Highcharts
            };
        },
        methods: {
            logapi(url, token)
            {
                return axios.get(url , {
                headers: {
                    'Authorization' : token
                }
                }).then(response => {return response.data})
                .catch(err => console.log(err))
            }
        }
    };
</script>
