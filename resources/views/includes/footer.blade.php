<!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Valentine's Cake House 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript">
  $('.totalPrice').on('change', function(){
    var price1 = parseFloat($('#flavourP').val());
    console.log(price1);
    var price2 = parseFloat($('#sizeP').val());
    var price3 = parseFloat($('#icingP').val());

    var total = price1 + price2 + price3;
    if(isNaN(total)){
      total=0;
    }
    $('#total').val(total);
  });

  $(function(){
    $("#datepicker").datepicker({ minDate: 0, maxDate: 14 });
    $.datepicker.formatDate("dd-mm-yy");
  });
  </script>
