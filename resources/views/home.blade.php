
<!DOCTYPE html>
<html>

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>

    <meta charset="utf-8">
   

<script src="js/main.js">
</script>
    <style>
        *{margin:0px;
        padding:0px;}
        .div_2{
            width: 100%;
            height:70px;
            background-color: #252524;
        }
        .h3_1 {
            color:#fffafa;
            margin-left: 10px;
            font-size: 22px;
            margin-top:20px;
            float: left;
            font-weight: 900;
        }
        .span_1{

            font-size: 20px;
            color: #f9f9f9;
            height: 40px;
            width: 100px;
            float: right;
            padding-top:20px;

        }
        .nav_1{
            width: 250px;
            float: left;
            height:900px;
            background-color: #252524;

        }


        .h_1{
            text-align: center;
            margin-top: 15px;
            margin-bottom: 7px;
            color: #f4fff8;

        }



        .li_1 {

            list-style-type: none;
            width:250px;
            height:40px;
            background-color: #252524;
            color: #fdfdf6;
            text-align: center;
            font-weight: 700;
            font-size:18px;
            padding-top:20px;
            border-top: 1px solid #fdfdf6;
            margin-left:0px;

        }

        .img_log{
            width: 110px;
            height: 65px;
            margin-left: 400px;

        }

        .h3_1 {
            color:#fffafa;
            margin-left: 10px;
            font-size: 22px;
            margin-top:20px;
            float: left;
            font-weight: 900;
        }
       li > ul{
            display: none;
           left: 250px;
           position: absolute;

           }

        ul .li_1:hover > ul {
            display:block;

        }

    </style>

</head>
<body>
<div class="div_2"><span class="h3_1">WebSiteName</span>

<img class="img_log" src="css/images/building.png">
<span  class="span_1" >Login</span></div>
    
    <div class="nav_1">
    
<h2 style="text-align:center;width:250px;padding-top: 20px;color: #fcfcfc;background-color:#252524;padding-bottom: 10px">Main Menu</h2>

       <?php  $menu=array();
       $index=0;


       function sort1($j,$m,$c,$item,$right,$index,$temp){

        echo "<ul>";
        foreach($m as $i)
               if($i->parentid==$j)
                   {    if($index>0)
                       echo "</li>";
                       $index++;
                       echo "<li class='li_1'>".$i->name;
                         sort1($i->id,$m,$c,$item,$right+250,0,-1);
                   }


                     foreach($c as $i1)
                       if($i1->menuelists_id==$j || $i1->parentid==$temp)
                       {   if($index>0)
                           echo "</li>";
                           $index++;
                           echo "<li class='li_1'>".$i1->categname;
                           sort1(-1,$m,$c,$item,$right+250,0,1,$i1);
                       }

           foreach($item as $i2)
               if($i2->Categorymodels_id==$temp)
               {   if($index>0)
                   echo "</li>";
                   $index++;
                   echo "<li class='li_1'>".$i2->title;

               }



            if($index>0)
                echo "</li>";



           echo "</ul>";
       }

sort1(0,$m,$c,$item,0,0,-1);
         ?>



    </div>
</body>

</html>