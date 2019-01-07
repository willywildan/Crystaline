    <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; SIMPATI.Inc 2018</span>
              <span>Informatics 2017</span>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Custom scripts for all pages-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url()?>js/sb-admin.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?php echo base_url()?>js/sb-admin.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/chart.js/Chart.min.js"></script>
    

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url()?>js/demo/datatables-demo.js"></script>
     <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?php echo base_url()?>js/sb-admin.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function()
{
  $.ajax(
  {
    url: "data_triase.php",
    method: "GET",
    success: function(data) 
    {
      var triase = [];
      var merah = 0;
      var kuning = 0;
      var hijau = 0;
      for(var i in data) {
        triase.push(data[i].triase);      
        if (triase[i] == "red.png") {
          merah++;
        } if (triase[i] == "yellow.png") {
          kuning++;
        } if (triase[i] == "green.png") {
          hijau++;
        }
      }
      var ctx = document.getElementById("myBarChart");
      var myLineChart = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: ["Kuning", "Hijau", "Merah"],
        datasets: [{
        label: "Jumlah",
        backgroundColor: ['yellow', 'green', 'red'],
        borderColor: "rgba(2,117,216,1)",
        data: [kuning, hijau, merah],
    }],
  },
  options: 
  {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
      });
    },
    error: function(data) {
    }
  });
});
    </script>

    <script type="text/javascript">
      $(document).ready(function()
{
  $.ajax(
  {
    url: "data_umur.php",
    method: "GET",
    success: function(data) 
    {
      var umur = [];
      var A = 0;
      var B = 0;
      var C = 0;
      var D = 0;
      var E = 0;
      var F = 0;
      var G = 0;
      for(var i in data) {
        umur.push(data[i].umur);      
        if (umur[i] < 11) {
          A++;
        } if (umur[i] >= 11 && umur[i] <21) {
          B++;
        } if (umur[i] >= 21 && umur[i] <31) {
          C++;
        } if (umur[i] >= 31 && umur[i] <41) {
          D++;
        } if (umur[i] >= 41 && umur[i] <51) {
          E++;
        } if (umur[i] >= 51 && umur[i] <61) {
          F++;
        } if (umur[i] >= 61) {
          G++;
        }
      }
      var ctx = document.getElementById("myLineChart");
      var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
        labels: ["0-10 Tahun", "11-20 Tahun", "21-30 Tahun", "31-40 Tahun", "41-50 Tahun", "51-60 Tahun", "60+ tahun"],
      datasets: [{
      label: "Jumlah",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [A, B, C, D, E, F, G],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
      });
    },
    error: function(data) {
    }
  });
});
    </script>

    <script type="text/javascript">
      $(document).ready(function()
{
  $.ajax(
  {
    url: "data_bencana.php",
    method: "GET",
    success: function(data) 
    {
      var tipe = [];
      var Banjir = 0;
      var Longsor = 0;
      var Gempa = 0;
      var Tsunami = 0;
      var Topan = 0;
      var Gunung = 0;
      var Kebakaran = 0;
      var Kekeringan = 0;
      var Badai = 0;
      for(var i in data) 
      {
        tipe.push(data[i].tipe);      
        if (tipe[i] == "Banjir") {
          Banjir++;
        } if (tipe[i] == "Tanah Longsor") {
          Longsor++;
        } if (tipe[i] == "Gempa Bumi") {
          Gempa++;
        } if (tipe[i] == "Tsunami") {
          Tsunami++;
        } if (tipe[i] == "Angin Topan") {
          Topan++;
        } if (tipe[i] == "Gunung Meletus") {
          Gunung++;
        } if (tipe[i] == "Kebakaran Hutan") {
          Kebakaran++;
        } if (tipe[i] == "Kekeringan") {
          Kekeringan++;
        } if (tipe[i] == "Badai") {
          Badai++;
        }
      }
      var ctx = document.getElementById("myPieChart");
      var myLineChart = new Chart(ctx, 
      {
        type: 'pie',
        data: {
        labels: ["Banjir", "Longsor", "Gempa", "Tsunami", "Topan", "Gunung", "Kebakaran", "Kekeringan", "Badai"],
      datasets: [{
      data: [Banjir, Longsor, Gempa, Tsunami, Topan, Gunung, Kebakaran, Kekeringan, Badai],
      backgroundColor: ['purple', 'green', 'black', 'blue', 'orange', 'grey', 'red', 'brown', 'navy'],
      }],
  },
      });
    },
    error: function(data) {
    }
  });
});
    </script>

      
  </body>

</html>
