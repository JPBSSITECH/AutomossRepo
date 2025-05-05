            </div>
            </div>


  
        </div>
      </div>
    </div>

<?php  
    
 
    
 
    $this->load->view('front/inc/footer.php');

   
?>

<script>
      const sidebar = document.getElementById("sidebar");
      const content = document.getElementById("content");
      const toggleButton = document.getElementById("toggleSidebar");

      toggleButton.addEventListener("click", () => {
        sidebar.classList.toggle("collapsed");
        sidebar.classList.toggle("expanded");
        content.classList.toggle("collapsed");
      });
    </script>