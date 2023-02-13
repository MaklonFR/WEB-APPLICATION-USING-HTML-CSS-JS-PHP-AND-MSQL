function tampilJurusan() {
    $.ajax({
      url: "View/dataJurusan.php",
      data: {},
      beforeSend:function()
          {
            $('#judul').html("<span style='color:steelblue'>Loading...</span>");
          },
      success: function(data)
          {   
            window.setTimeout(function() {   
                $("#tampil_hasil").html(data);
            }, 500); 
          }
       });
  }

  function tampilGuru() {
    $.ajax({
      url: "View/dataGuru.php",
      data: {},
      beforeSend:function()
          {
            $('#judul').html("<span style='color:steelblue'>Loading...</span>");
          },
      success: function(data)
          {   
            window.setTimeout(function() {   
                $("#tampil_hasil").html(data);
            }, 1000); 
          }
       });
  }

  function tampilSiswa() {
    $.ajax({
      url: "View/dataSiswa.php",
      data: {},
      beforeSend:function()
          {
            $('#judul').html("<span style='color:steelblue'>Loading...</span>");
          },
      success: function(data)
          {   
            window.setTimeout(function() {   
                $("#tampil_hasil").html(data);
            }, 1000); 
          }
       });
  }

  function tampilKelas() {
    $.ajax({
      url: "View/dataKelas.php",
      data: {},
      beforeSend:function()
          {
            $('#judul').html("<span style='color:steelblue'>Loading...</span>");
          },
      success: function(data)
          {   
            window.setTimeout(function() {   
                $("#tampil_hasil").html(data);
            }, 1000); 
          }
       });
  }

  function tampilHome() {
    $.ajax({
      url: "View/dataHome.php",
      data: {},
      beforeSend:function()
          {
            $('#judul').html("<span style='color:steelblue'>Loading...</span>");
          },
      success: function(data)
          {   
            window.setTimeout(function() {   
                $("#tampil_hasil").html(data);
            }, 1000); 
          }
       });
    //window.location.href = "admin/homeAdmin.php";
  }