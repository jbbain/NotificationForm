var mainContainer = document.getElementById("supervisors");

fetch('https://609aae2c0f5a13001721bb02.mockapi.io/lightfeather/managers')
  .then((response) => {
    return response.json();
  })
  .then((JSON) => {
        JSON.sort(function(a,b){
            // Sort by jurisdiction
            if (a.jurisdiction > b.jurisdiction) return 1;
            if (a.jurisdiction < b.jurisdiction) return -1;
        
            // If the jurisdiction number is the same between both supervisors, sort alphabetically
            if (a.lastName > b.lastName) return 1;
            if (a.lastName < b.lastName) return -1;
            
        }); 
        let supervisorData = JSON.filter(
            eachObj => eachObj.jurisdiction >='a');
        appendData(supervisorData);
  });


  function appendData(data) {
    var mainContainer = document.getElementById("supervisors");
    
    //Loop Through data and create HTML and MODALS
    for (var i = 0; i < data.length; i++) {
        var supervisorInfo=document.createElement('option');
      var sInfoAtt = document.createAttribute("class");
      sInfoAtt.value = lastName + "," + firstName;
      supervisorInfo.setAttributeNode(sInfoAtt); 
      
        var jurisdiction = data[i].jurisdiction;
        var lastName = data[i].lastName;
        var firstName = data[i].firstName;
        //console.log(supervisorString);   
        supervisorInfo.innerHTML = jurisdiction + " - " + lastName +", " + firstName;
         
      mainContainer.appendChild(supervisorInfo);
      
    }
  }