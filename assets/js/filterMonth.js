$(document).ready(function() {
  $('#mySelect').on('change', function() {
    var selectedMonth = $(this).val();
    
    if (selectedMonth === '') {
      $('.table.datatable tbody tr').show();
      return;
    }
    
    $('.table.datatable tbody tr').hide();
    
    $('.table.datatable tbody tr').each(function() {
      var dateInscription = $(this).find('td:nth-child(6)').text();
      var inscriptionMonth = new Date(dateInscription).getMonth() + 1;
      
      if (inscriptionMonth === parseInt(selectedMonth)) {
        $(this).show();
      }
    });
  });
});