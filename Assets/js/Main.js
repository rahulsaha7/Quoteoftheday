$(document).ready(function(){

    $.post( "Include/QueryShow.php", function( data ) {
        //  $(".query-show").html(data[0]['quotes']);
        data = JSON.parse(data);
        console.log(data[0]['quotedby']);
        $(".query-show").html(data[0]['quotes']);
        $(".author-image").attr('src',data[0]["imagelink"])
        $(".author-title").html(data[0]['quoteby'])
      });


      $(".movie-add").on({

        submit: function(e){
          movie_add(e);
      }
      });
      
      function movie_add(e){
         
          e.preventDefault();
         
          let myForm = document.getElementById('my-form');
      
          
          let formData = new FormData(myForm);
      
          
      
          
            $.ajax({
                url:"Include/addtodb.php",
                type:"POST",
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success:function(data){
                  alert(data);
                },
                error: function(status,error){
                    alert(status);
                }
      
            });
      
        
        }

        $(".edit").click(function(){

          // console.log("hello");
      
         var test2 =  $(this).attr('id');
      //    var test3 =  $(".edit");
      
          $('.'+test2).each(function(){
              
              var td_value = $('.'+test2).find('td');
              
              old_user = td_value[0].innerText;
              
              for (let index = 0; index < td_value.length-1; index++) {
                  
                  var html = '<input class="form-control " type="text"   name="name'+index+'" value="'+td_value[index].innerText+'" required="">';
                  td_value[index].innerHTML=html;
              
              }
              
              $('#'+test2).html('Save');
              $('#'+test2).addClass('Save'); 
              $('.edit').unbind('click');
              $('#'+test2).removeClass('edit'); 
              
              $(".Cancel").show();
              $(".delete").hide();
             
      
              // var html = '<input class="form-control " type="text"   name="" value="'+td_value+'" required="">';
              // td_value_td.html(html);
          });
      
          $('.Save').click(function(){
              var table_name = $(".table-header-row").find('th');
              var call = table_name[0].innerText;
              
      
              var test2 =  $(this).attr('id');
              var td_value = $('.'+test2).find('input');
              
              // var call = 'update_student';
              var values = new Array();
              for (let index = 0; index < td_value.length; index++) {
                  
                   values.push(td_value[index].value);
              
              }
              // console.log(values);
              $.post('Include/update.php',{
                  call:call,
                  value:values,
                  olded_user:old_user
            },function(data,status){
                  if(data == "successfull"){
                  alert("Updated  successfully");
                  window.location.reload();
                  }else{
                      alert(data); 
                  }
            });   
              
      
      
      
          });
      
        
      
        
      
      });
      
      $(".Cancel").click(function(){
      
          window.location.reload();
      
      
      });
      
      $(".delete-project").click(()=>{
          if(confirm('This Will delete this row  \n Are you sure')){
              var test2 =  $(this).attr('id');
              var test2 = test2.substring(0,5);
              call = 'delete_project';
             
              var reg = $('.'+test2).find('td');
              reg = reg[0].innerText;
              $.post('Include/delete.php',{
                  call:call,
                  value:reg,
            },function(data,status){
                  if(data == "successfull"){
                  alert("Deletetion Successfull");
                  window.location.reload();
                  }else{
                      alert(data); 
                  }
            });  
              
          }
      
      });


      $(".View").click((event)=>{
       
         var test = event.target.id;
         test = test.substring(0,5);
         var reg = $('.'+test).find('td');
         reg = reg[0].innerText;
         $.post('Include/viewdata.php',{
          value:reg,
    },function(data,status){
          if(data == "successfull"){
          alert("Deletetion Successfull");
          window.location.reload();
          }else{
              alert(data); 
          }
    });  
      });
      

});