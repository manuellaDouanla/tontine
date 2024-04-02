
$(document).ready(function() { $('#mySelect').on('change', function() { 
    var selectedMonth = $(this).val(); 
    if (selectedMonth === '') { 
        $('.table.datatable tbody tr').show(); 
        return; 
    } 
    $('.table.datatable tbody tr').hide(); 
    $('.table.datatable tbody tr').each(function() 
    { 
        var paymentDate = $(this).find('td:nth-child(3)').text(); 
        var paymentMonth = parseDate(paymentDate).getMonth() + 1; 
        if (paymentMonth === parseInt(selectedMonth)) 
        { 
            $(this).show(); 
        } 
    }); });
});

function parseDate(dateString) { 
    var parts = dateString.split('-'); 
    var year = parts[0]; 
    var month = parts[1]; 
    var day = parts[2]; 
    return new Date(year, month - 1, day);
}