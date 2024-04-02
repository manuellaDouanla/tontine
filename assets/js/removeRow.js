function removeRow(a) {
    var row = a.parentNode.parentNode;
    if (row.parentNode.getElementsByTagName('tr').length <= 1){
    
  }else{
  
    row.parentNode.removeChild(row);
  }
}