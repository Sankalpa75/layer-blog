<div class="page">
    <div class="container">
        <div class="row">
 
                <div class="container" style="text-align:center; margin-bottom: 40px;">
                    <h4 class="heading">Curriculum Vitae</h4>
                </div>

 

      <button class="accordion">Curriculum Vitae</button>


      <div class="panel">
        <span>
          <img src="images/pdf-icon.png">
        </span>
        <a href="pdf/notices/001.pdf" target="_blank">
          <span>
            Curriculum Vitae: Shraddha Bhattarai
          </span>
        </a>

        <a href="pdf/notices/001.pdf" download>
          <div class="download-icon">
            <i class="fa fa-download"></i>
          </div>
        </a>
      </div>

      
</div>

                <div class="clearfix"></div>
                
                <hr>
                <marquee style="font-size: 20px;
    color: #b99566;"> Visit my legal updates page for more information on latest legal news.
</marquee>
            </div>
        </div>
    </div>
</div>
<!--welcome-->



<script type="text/javascript">
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
</script>