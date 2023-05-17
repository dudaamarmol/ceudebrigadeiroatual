        navigator.geolocation.getCurrentPosition(function(posicao) {
            var url = "http://nominatim.openstreetmap.org/reverse?lat="+posicao.coords.latitude+"&lon="+posicao.coords.longitude+"&format=json&json_callback=preencherDados";
            var script = document.createElement('script');
            script.src = url;
            document.body.appendChild(script);
        });
    
        
    
    function preencherDados(dados) {
      cep.value=dados.address.postcode;  
      estado.innerHTML+="<option selected>"+dados.address.state+"</option>"; 
      bairro.value=dados.address.suburb; 
      rua.value=dados.address.road; 
      cidade.value=dados.address.city;  
      
      console.log(dados)
    }