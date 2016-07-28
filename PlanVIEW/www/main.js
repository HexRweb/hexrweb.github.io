<script>
document.getElementById("demo").addEventListener("click", myFunction);

function myFunction() {
    var x = document.getElementById("2nd").innerHTML;
    var 2a = 'onclick="window.open(''
    var 2b = '', '_system', 'location=yes');">'
    var 2total = 2a+x+2b;

    document.getElementById("2ndp").innerHTML = 2total;


}
</script>
