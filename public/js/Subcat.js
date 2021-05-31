 
    showModal = function(){

        $('#saveBtn').val("create-Subcat");
        $('#Subcat_id').val('');
        $('#SubcatForm').trigger("reset");
        $('#modelHeading').html("Create New Subcat");
        $('#ajaxModel').modal('show');
    };





    
    $('body').on('click', '.editSubcat', function () {
      var Subcat_id = $(this).data('id');
      $.get( "/Subcat"+'/' + Subcat_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Subcat");
          $('#saveBtn').val("edit-Subcat");
          $('#ajaxModel').modal('show');
          $('#Subcat_id').val(data.id);
          $('#namear').val(data.namear);
          $('#nameen').val(data.nameen);
          $('#category_id').val(data.category_id);
          $('#image').val(data.image);
          
       } )
   });

  
    


   $('#SubcatForm').on('submit',function(event){

   event.preventDefault();
        let formData = new FormData(this);
        $(this).html('Save');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
        
        });
    
        $.ajax({
            
          data: formData,
          url: "/subcate",
          type: "POST",
          dataType: 'json',
          contentType:false,
          processData:false,


            
    success:( response) => {
      if(response){
        this.reset();
        $('#ajaxModel').modal('hide');
        table.draw();
        
      }
    
  },
          
          
          


          error: function (response) {
              console.log('response');
            
          }
      });

    });

    



        $('body').on('click', '.deleteSubcat', function () {
     
        var Subcat_id = $(this).data("id");
        // confirm("Are You sure want to delete !");
        
        console.log(this);
      
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },

            type: "DELETE",
            url:"/subcat"+'/'+Subcat_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    


