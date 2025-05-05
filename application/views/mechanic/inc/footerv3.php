 </div>
          </div>





        </div>
      </div>
    </div>
<?php  
    
    $this->load->view('front/inc/footer.php');
?>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


     
<script type="text/javascript">
 

<?php
  ///////////////////////////////////////////////////////////
  $err = $this->session->flashdata('error');
  if(!empty($err))
  {
        ?> 
        $(document).ready(function(){
          Swal.fire("Ohh!", "<?=$err ?>", "warning");
        });
        <?php
        unset($_SESSION['error']);
   }
  $scs = $this->session->flashdata('success');
  if(!empty($scs))
  {
     ?> 
        $(document).ready(function(){
             Swal.fire("Great!", "<?=$scs ?>", "success");
        });
    <?php
    unset($_SESSION['success']); 
  }
  ////////////////////////////////////////////////////////
  ?>

</script>


<script>
      const sidebar = document.getElementById("sidebar");
      const content = document.getElementById("content");
      const toggleButton = document.getElementById("toggleSidebar");

      toggleButton.addEventListener("click", () => {
        sidebar.classList.toggle("collapsed");
        sidebar.classList.toggle("expanded");
        content.classList.toggle("collapsed");
      });

      const ctx = document.getElementById("lineChart").getContext("2d");
      const lineChart = new Chart(ctx, {
        type: "line",
        data: {
          labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
          ],
          datasets: [
            {
              label: "Monthly Report",
              data: [65, 59, 80, 81, 56, 55, 40],
              fill: false,
              borderColor: "rgb(75, 192, 192)",
              tension: 0.1,
              borderWidth: 1,
            },
          ],
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: "top",
              labels: {
                usePointStyle: true,
                padding: 20,
                font: {
                  family: "'Helvetica Neue', 'Arial', sans-serif",
                  size: 14,
                  weight: "bold",
                },
              },
            },
            tooltip: {
              callbacks: {
                label: function (tooltipItem) {
                  return tooltipItem.raw + "%";
                },
              },
              backgroundColor: "rgba(0, 0, 0, 0.8)",
              titleColor: "white",
              bodyColor: "white",
            },
          },
          scales: {
            y: {
              beginAtZero: true,
              ticks: {
                color: "#bbb",
              },
            },
            x: {
              ticks: {
                color: "#bbb",
              },
            },
          },
        },
      });
</script>
  