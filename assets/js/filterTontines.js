$(document).ready(function() {
  $('#mySelect').on('change', function() {
    var selectedMonth = $(this).val();
    
    if (selectedMonth === '') {
      $('.table.datatable tbody tr').show();
      return;
    }
    
    $('.table.datatable tbody tr').hide();
    
    $('.table.datatable tbody tr').each(function() {
      var date = $(this).find('td:first-child').text();
      var month = new Date(date).getMonth() + 1;
      
      if (month === parseInt(selectedMonth)) {
        $(this).show();
      }
    });
  });
});