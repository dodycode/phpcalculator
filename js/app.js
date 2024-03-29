function setOperator(operator) {
	document.getElementById('operator').value = operator;
	document.getElementById('showOperator').innerHTML = operator;

	return true;
}

window.addEventListener("DOMContentLoaded",function() {
  document.getElementById('calculate-form').addEventListener("submit",function(e) {
    e.preventDefault(); 
    
    var formData = new FormData(this);
    document.getElementById('submitBtn').value = 'Loading...';

    axios({
	    method: 'post',
	    url: 'calculate.php',
	    data: formData
    })
    .then(function (response) {
       	return response.data;
    })
    .then(function (data) {
    	swal("Result", "Result: "+data.hasil);
    	document.getElementById('submitBtn').value = 'Hitung';
    })
    .catch(function (response) {
        console.error(response);
    });
  });
});