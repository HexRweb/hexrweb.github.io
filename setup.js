<script>
window.onload = function()
           {
               document.addEventListener("deviceready", init, false);
           }
           function init()
                      {
                          document.getElementById("fbutton").addEventListener("click",saveData, false);
                      }

function saveData()
 {
                var firstnotes = document.getElementById("1stnotes1").value;
                window.localStorage.setItem("fnotes", firstNotes);
                alert("Your data is stored successfuly");
  }

  function getData()
         {
             var output =  window.localStorage.getItem("fnotes");
             document.getElementById("1stn").innerHTML = output;
         }
</script>
