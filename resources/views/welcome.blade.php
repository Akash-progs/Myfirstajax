<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- Styles -->
    </head>
    <body>
<!--
            <select  id="slct">
                <option value="">select</option>
                <option value="1">Akash</option>
                <option value="3">Bashu</option>
            </select>-->
            
            <div class="container">
                @include("add")<br><br>
            <div id="view"></div>
            </div>


    </body>
</html>
<script src="{{ asset('/jquery/jquery-3.5.1.js') }}"></script>

 <script>
    $(document).ready(function(){
                function loaddata(){
                    var vurl="/sdetails";
                    $.ajax({
                        url: vurl,
                        success: function(data){
                        $('#view').html(data);
                        }
                    });
                }
                loaddata();
            //add details
            $("#btnadd").click(function(event) {
                event.preventDefault();
                var nm=$("#name").val();
                var phone=$("#phn").val();
                var emil=$("#email").val();
                    $.ajax({
                        url: "/add_details",
                        type: "POST",
                        data:{"_token": "{{ csrf_token() }}",name:nm , phone:phone , email:emil}
                    })
                    loaddata();
                
                })  
            //delete
           $(document).on("click","#btndelete",function(){
                var id=$(this).data("id");
                $.ajax({
                    url: '/delete_data/'+id,
                    type: 'GET',
                })
                loaddata();
                
           });
            
            
        });   
 </script> 
