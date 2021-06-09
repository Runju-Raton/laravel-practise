function sendData(){
   var name = document.getElementById('name').value;
   var age = document.getElementById('age').value;
   var city = document.getElementById('city').value;

   var url="/insertData";
   var jsonData={name:name,age:age,city:city};
   axios.post(url,jsonData)
   .then(function(response){
    alert(response);

   })
   .catch(function(error){
    alert(error);
   });
}