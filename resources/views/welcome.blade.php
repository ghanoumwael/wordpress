<!doctype html>
<html >
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CMS PROJECT</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

       <!-- Styles -->
        <style>
          .li_1{
             display: inline-block;
              width:300px;
              height:70px;
              background-color: #252524;
              color: #fdfdf6;
              text-align: center;
              font-weight: 700;
              font-size:18px;
              padding-top:20px;
                border-left: 1px solid #fdfdf6;
              margin-left:0px;
              margin-top:0px;


          }
            .div_0{
                background-color:#1d643b;
                margin-top:0px;
                margin-left: 0px;
                height:75px;
                width:100%;
                background-color: #252524;
            }
            .div_1{
                background-color:#4c110f;
              margin-top:0px;
                margin-left: 0px;
                background-color: #252524;
                width:300px;
                float: left;
                height:1000px;

            }
            *{
                padding:0px;
                margin:0px;
            }
            .li_2{
                list-style-type: none;
                width:300px;
                height:70px;
                background-color: #252524;
                color: #fdfdf6;
                text-align: center;
                font-weight: 700;
                font-size:18px;
                padding-top:20px;
                border-top: 1px solid #fdfdf6;
                margin-left:0px;
            }
            .div_2{
                margin-top:40px;

                width:1000px;


            }
            .div_4{
                float: left;
                width:1000px;
                height:1000px;
                transition: all 3s;
            }
            .div_4_run{
                position:absolute;
                right:-1000px;
                transition:all 1s;

            }
            .img_1{
                float: left;
                width:150px;
                height:120px;
                margin-left:90px;
                margin-right:20px;

            }
            .p_1{
                width:900px;
                font-weight: 800;
                font-size:15px;

                margin-top:1px;
            }
           .li_2 ul{
                display: none;
               position:absolute;
               left:300px;
            }
          .uu .li_2:hover ul {

              display:block;

          }

          .div_3{
              margin-top:40px;
              float: left;
              width:1000px;
              height:1000px ;
              position:absolute;
              right:-1000px;
              transition: all 1s;
          }


            .input_1{
              margin-top:50px;
                height:70px;
                width:1000px;
                font-size:26px;
             }
            .div_3_run{
               right:0;

            }



        </style>
    </head>
    <body>


    <div class="div_0">
        <ul >
            <li class=" li_1" style="font-weight:900;font-size: 22px">WebSitName</li>
            <li class="li_1">Home</li>
            <li class="li_1" >Document</li>
            <li class="li_1" >About Us</li>
            <li class="li_1" style="width: 100px;margin-left:42px;border: none" >Login</li>
        </ul>
    </div>

            <div class="div_1">
                     <ul class="uu">
                        <li class=" li_2" >
                                <ul>
                                     <a href="{{url('calc/id/1')}}">  <li   class="li_2" id="addm" style="background-color: #4c110f">Add Menu</li></a>
                                    <a href="{{url('calc/id/2')}}"> <li class="li_2" style="background-color: #4c110f"nid="delm">Delete Menu</li></a>
                                    <a href="{{url('calc/id/2')}}"> <li class="li_2" style="background-color: #4c110f" >Edit Menu</li></a>
                                    <a href="{{url('calc/id/2')}}"> <li class="li_2" style="background-color: #4c110f" >Add Langueg for Menu</li></a>
                                    </form>
                                </ul>
                            Mange Menuelist
                                </li>

                       <li class="li_2">


                           <ul>
                               <a href="{{url('calc/id/3')}}"> <li class="li_2" style="background-color: #4c110f">Add Item</li></a>
                        <a href="{{url('calc/id/4')}}"> <li class="li_2" style="background-color: #4c110f">Delete Item</li></a>
                        <a href="{{url('calc/id/4')}}"> <li class="li_2" style="background-color: #4c110f" >Edit Item</li></a>
                               <a href="{{url('calc/id/4')}}"> <li class="li_2" style="background-color: #4c110f" >Add Languege for Item</li></a>
                           </ul>

                        Manage item</li>
                        <li class="li_2">
                    <ul>
                            <a href="{{url('calc/id/5')}}"> <li class="li_2" style="background-color: #4c110f" >Add Cat</li></a>
                        <a href="{{url('calc/id/6')}}"> <li class="li_2"  style="background-color: #4c110f">Delete Cat</li></a>
                        <a href="{{url('calc/id/6')}}"> <li class="li_2"  style="background-color: #4c110f">Edit Cat</li></a>

                         </ul>
                        Manage Category</li>

                         <a href="{{url('showview')}}"> <li class="li_2">show view</li></a>

                    </ul>

                </div>

    <!--           add menu =====================                        -->

            <div class=" div_3" id="addmenu">

                <form action="{{url('addmenu')}}" method="post" enctype="multipart/form-data" accept-charset="utf-8" class="formc">
                    {{csrf_field()}}
                     <input class="input_1" type="text" placeholder="enter name of menu" name="menuename" />
                    <select class="input_1" type="text" placeholder="choose parent id of menu" name="paraentid" />
                    <option value="0">Select id of parent</option>
                    @if(isset($menunId))
                    @foreach($menunId as $p)
                        <option value="{{ $p->id }}">  {{ $p->name }}</option>
                    @endforeach
                            @endif
                    </select>
                   <button class="input_1" style="background-color: #1a1a1c;font-size: 27px;font-weight: 900;color: #eeeeff">Add</button></form>
            </div>

    <!--            delete menu =====================                        -->

    <div class="div_3" id="deletmenu">


        <ul >
            <span  style="width:500px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">Name</span>
            <span  style="width:100px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">edit</span>
            <span  style="width:100px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">delete</span>
            <span  style="width:200px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">add langueg</span>
        </ul>

                    @if(isset($m))
                        @foreach($m as  $i)
                <ul>
                            <li style="width:500px;height: 70px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">
                                {{$i->name}}

                            </li>

                    <li onclick="<?php echo "showedtit('".$i->id."'".",'".$i->name."')"?>" style="width:100px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color:#fcfcfc;background-color: #4c110f"> Edit</li>
                    <a href="{{ url('/deletemenu/id/'.$i->id) }}"> <li style="width:100px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color:#fcfcfc;background-color: #4c110f"> Delete</li></a>
                    <li onclick="showaddlanmenu({{$i->id}})" style="width:200px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color:#fcfcfc;background-color: #4c110f">add langueg</li>
                 </ul>
                @endforeach
                @endif
                </div>

    <!--           edit menu =====================                        -->
    <div class="div_3" id="editmenu">
        <form action="" method="post" enctype="multipart/form-data" name="form_ed" accept-charset="utf-8" class="formc">
            {{csrf_field()}}


            <input class="input_1" placeholder="Enter New Name" type="text" name="menuename" id="menuename"/>


            <select class="input_1"  type="text"  name="paraentid" id="paraentid"/>
            <option value="0">Select id of parent</option>
            @if(isset($m))
                @foreach($m as $p)
                    <option value="{{ $p->id }}">  {{ $p->name }}</option>
                    @endforeach
                    @endif
                    </select>
                 <button class="input_1" style="background-color: #1a1a1c;font-size: 27px;font-weight: 900;color: #eeeeff">Edit</button></form></div>

<!--            add item =====================                        -->
    <div class="div_3" id="additem">
        <form action="{{url('additem')}}" method="post" enctype="multipart/form-data" accept-charset="utf-8" class="formc">
            {{csrf_field()}}
            <input class="input_1" type="text" name="itemname" placeholder="enter name of item"/>
             <input placeholder="item description" style="color: #030303;" class="input_1" type="text" name="itemdec" id="itemdec">
                </input>
                <input class="input_1" placeholder="eneter url to image of item" type="file" name="itemimage" id="itemimage"/>
            <input class="input_1" placeholder="eneter link of item" type="url" name="itemlink" id="itemlink"/>
            <select class="input_1"  type="text"  name="hasparenti" id="paraentid"/>
            <option value="0">Select id of parent cat</option>
                 @if(isset($itemId))
                @foreach($itemId as $p)
                    <option value="{{ $p->id }}">  {{ $p->categname }}</option>
                    @endforeach
                    @endif
                    </select>
                    <button class="input_1" style="background-color: #1a1a1c;font-size: 27px;font-weight: 900;color: #eeeeff">Add</button>
                 </form></div>



    <!--            delete item =====================                        -->

    <div class="div_3" id="deletitem">


        <ul >
            <span  style="width:450px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">Name Item</span>
            <span  style="width:100px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">edit</span>
            <span  style="width:150px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">delete</span>
            <span  style="width:200px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">Add Langueg</span>
        </ul>

        @if(isset($item))
            @foreach($item as  $i)
                <ul>
                    <li style="width:450px;height: 70px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">
                        {{$i->title}}

                    </li>


                    <li onclick="<?php echo "showedtititem('".$i->id."','".$i->title."','".$i->itemlink."','".$i->descreption."')"?>"
                        style="width:100px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color:#fcfcfc;background-color: #4c110f"> Edit</li>
                    <a href="{{ url('/deletitem/itemid/'.$i->id) }}"> <li style="width:150px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color:#fcfcfc;background-color: #4c110f">delete</li></a>
                    <li onclick="showaddlanitem({{$i->id}})" style="width:200px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color:#fcfcfc;background-color: #4c110f"> Add langueg</li>



                </ul>
            @endforeach
        @endif
    </div>

    <!--            edit item =====================                        -->
    <div class="div_3" id="edititem">
        <form action="" method="post" name="form_editem">
            {{csrf_field()}}
            <input class="input_1" type="text" name="itemname" placeholder="enter name of item" id="itemname"/>
            <input placeholder="item description" style="color: #030303;" class="input_1" type="text" name="itemdec" id="itemdec">
            </input>
          <!--  <input class="input_1" placeholder="eneter url to image of item" type="file" name="itemimage" id="itemimage"/> -->
            <input class="input_1" placeholder="eneter link of item" type="text" name="itemlink" id="itemlink"/>
            <select class="input_1"  type="text"  name="hasparenti" id="hasparenti"/>
            <option value="0">Select id of parent cat</option>
            @if(isset($itemnn))
                @foreach($itemnn as $p)
                    <option value="{{ $p->id }}">  {{ $p->categname }}</option>
                    @endforeach
                    @endif
                    </select>
                    <button class="input_1" style="background-color: #1a1a1c;font-size: 27px;font-weight: 900;color: #eeeeff">Edit</button>
        </form></div>



    <!--           add cat =====================                        -->

    <div class=" div_3" id="addcat">

        <form action="{{url('addcat')}}" method="post" enctype="multipart/form-data" accept-charset="utf-8" class="formc">
            {{csrf_field()}}
            <input class="input_1" type="text" placeholder="enter name of catagory" name="categname" />
            <select class="input_1" type="text" placeholder="choose parent id of menu" name="hasmenu" />
            <option value="0">Select id of parent menu</option>
            @if(isset($men_catid))
                @foreach($men_catid as $p)
                    <option value="{{ $p->id }}">  {{ $p->name }}</option>
                    @endforeach
                    @endif
                    </select>

                    <select class="input_1" type="text" placeholder="choose parent id of cat" name="hasparentc" />
                    <option value="0">Select id of parent cat</option>
                    @if(isset($cat_cat))
                        @foreach($cat_cat as $p)
                            <option value="{{ $p->id }}">  {{ $p->categname }}</option>
                            @endforeach
                            @endif
                            </select>
                    <button class="input_1" style="background-color: #1a1a1c;font-size: 27px;font-weight: 900;color: #eeeeff">Add</button></form>
    </div>




    <!--            delete cat =====================                        -->

    <div class="div_3" id="deletcat">


        <ul >
            <span  style="width:600px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">Name Cat</span>
            <span  style="width:150px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">edit</span>
            <span  style="width:150px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">delete</span>
        </ul>

        @if(isset($cat))
            @foreach($cat as  $i)
                <ul>
                    <li style="width:600px;height: 70px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color: #000000">
                        {{$i->categname}}

                    </li>
                    <li onclick="<?php echo "showedtitcat('".$i->id."'".",'".$i->categname."')"?>" style="width:150px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color:#fcfcfc;background-color: #4c110f"> Edit</li>
                    <a href="{{ url('/deletecat/id/'.$i->id) }}"> <li style="width:150px;height: 50px;display: inline-block;text-align: center;font-weight: 800;font-size: 25px;color:#fcfcfc;background-color: #4c110f"> Delete</li></a>



                </ul>
            @endforeach
        @endif
    </div>

    <!--           edit cat =====================                        -->

    <div class=" div_3" id="editcat">

        <form action="" method="post" name="form_edcat">
            {{csrf_field()}}
            <input class="input_1" type="text" placeholder="enter name of catagory" name="categname" id="categname"/>
            <select class="input_1" type="text" placeholder="choose parent id of menu" name="hasmenu" />
            <option value="0">Select id of parent menu</option>
            @if(isset($men_cat))
                @foreach($men_cat as $p)
                    <option value="{{ $p->id }}">  {{ $p->name }}</option>
                    @endforeach
                    @endif
                    </select>
                    <select class="input_1" type="text" placeholder="choose parent id of cat" name="hasparentc" />
                    <option value="0">Select id of parent cat</option>
                    @if(isset($cat))
                        @foreach($cat as $p)
                            <option value="{{ $p->id }}">  {{ $p->categname }}</option>
                            @endforeach
                            @endif
                            </select>
                            <button class="input_1" style="background-color: #1a1a1c;font-size: 27px;font-weight: 900;color: #eeeeff">Add</button></form>
                        </div>


        <div class=" div_3" id="addlan_m">

        <form action="" method="post" name="form_edlang_m">
            {{csrf_field()}}
         <select class="input_1" type="text" placeholder="choose parent id of menu" name="hasmenu" />
            <option value="0">Select langueg</option>
            @if(isset($lan_m))
                @foreach($lan_m as $p)
                    <option value="{{ $p->id }}">  {{ $p->name }}</option>
                    @endforeach
                    @endif
                    </select>
                    <button class="input_1" style="background-color: #1a1a1c;font-size: 27px;font-weight: 900;color: #eeeeff">Add</button></form>
                    </div>

    <div class=" div_3" id="addlan_item">

        <form action="" method="post" name="form_edlang_item">
            {{csrf_field()}}
            <input type="text" class="input_1" name="text_translate" placeholder="enter the translate">
            <select class="input_1" type="text" placeholder="choose parent id of menu" name="hasitem" />
            <option value="0">Select langueg</option>
            @if(isset($lan_item))
                @foreach($lan_item as $p)
                    <option value="{{ $p->id }}">  {{ $p->name }}</option>
                    @endforeach
                    @endif
                    </select>
                    <button class="input_1" style="background-color: #1a1a1c;font-size: 27px;font-weight: 900;color: #eeeeff">Add</button></form>
    </div>

    <div class="div_4">
          <div class="div_2"><img class="img_1" src="css/images/product.jpg" >
    <p  class="p_1" style="font-size: 20px">Lorem ipsum dolor</p>
    <p class="p_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
    <p class="p_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
    <p class="p_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>

</div>

          <div class="div_2"><img class="img_1" src="css/images/product.jpg" >
        <p class="p_1" style="font-size: 20px">Lorem ipsum dolor</p>
        <p class="p_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
        <p class="p_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
        <p class="p_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>

    </div>
        <div class="div_2"><img class="img_1" src="css/images/b.jpg" >
        <p style="font-size: 20px">Lorem ipsum dolor</p>
        <p class="p_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
        <p class="p_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
        <p class="p_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>

    </div>
        <div class="div_2"><img class="img_1" src="css/images/a.jpg" >
        <p  class="p_1" style="font-size: 20px">Lorem ipsum dolor</p>
        <p class="p_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
        <p class="p_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
        <p class="p_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>

    </div>
</div>




 <script src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
    @if(isset($menunId))
        <script>
            $(function () {

                $("#addmenu").toggleClass("div_3_run");
                $(".div_4").toggleClass("div_4_run");

            });
        </script>
    @endif

    @if(isset($m))
        <script>
            $(function () {

                $("#deletmenu").toggleClass("div_3_run");
                $(".div_4").toggleClass("div_4_run");

            });
        </script>
    @endif

    @if(isset($men_catid))
        <script>
            $(function () {

                $("#addcat").toggleClass("div_3_run");
                $(".div_4").toggleClass("div_4_run");

            });
        </script>
    @endif

        @if(isset($cat))
            <script>
                $(function () {

                    $("#deletcat").toggleClass("div_3_run");
                    $(".div_4").toggleClass("div_4_run");

                });
            </script>
        @endif

    @if(isset($itemId))
        <script>
            $(function () {

                $("#additem").toggleClass("div_3_run");
                $(".div_4").toggleClass("div_4_run");

            });
        </script>
    @endif

    @if(isset($item))
        <script>
            $(function () {

                $("#deletitem").toggleClass("div_3_run");
                $(".div_4").toggleClass("div_4_run");

            });
        </script>
    @endif
    <script>

        function showedtit (id,name)
        {   document.form_ed.action= "<?php echo url(''); ?>"+"/edmenu/id/"+id;
            document.getElementById('menuename').value=name

            $("#editmenu").toggleClass("div_3_run");
            $("#deletmenu").toggleClass("div_3_run");
            }

        function showedtititem (id,name,link,dec)
        {   document.form_editem.action= "<?php echo url(''); ?>"+"/editem/id/"+id;
            document.getElementById('itemname').value=name;
            document.getElementById('itemlink').value=link;
            document.getElementById('itemdec').value=dec;
           $("#edititem").toggleClass("div_3_run");
            $("#deletitem").toggleClass("div_3_run");
        }

        function showedtitcat (id,name)
        {   document.form_edcat.action= "<?php echo url(''); ?>"+"/edcat/id/"+id;
            document.getElementById('categname').value=name;
        $("#editcat").toggleClass("div_3_run");
            $("#deletcat").toggleClass("div_3_run");
        }
        function showaddlanmenu (id)
        {   document.form_edlang_m.action= "<?php echo url(''); ?>"+"/addmenulan/id/"+id;
            $("#addlan_m").toggleClass("div_3_run");
            $("#deletmenu").toggleClass("div_3_run");
        }
        function showaddlanitem (id)
        {   document.form_edlang_item.action= "<?php echo url(''); ?>"+"/additemlan/id/"+id;
            $("#addlan_item").toggleClass("div_3_run");
            $("#deletitem").toggleClass("div_3_run");
        }

    </script>
 </body>
</html>
