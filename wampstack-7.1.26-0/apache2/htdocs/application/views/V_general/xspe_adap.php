<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
            
            <title>극한스피킹</title>


            <style>
                body {
                    background-color:rgb(240, 240, 240);
                }

                #top-bar {
                    background-color: rgb(95, 95, 95);
                    padding-top : 7px;
                    padding-bottom : 7px;
                    padding-left : 10px;
                    z-index: 1;
                    width : 1900px;
                }

                .top-bar-table {
                    border-right:2px solid rgb(255, 255, 255); 
                    padding-top:0px; 
                    padding-right:12px;
                }

                .top-title {
                    font-family : "타이포_쌍문동" , "휴먼둥근헤드라인";
                    font-size : 50px;
                    color: whitesmoke;
                    font-weight : bold;
                }
                
                .main-left-list {
                  margin-top : 30px;
                  margin-left : 30px;
                  margin-bottom : 20px;
                  background: silver;
                  height: 900px; 
                  width: 500px;
                  border-radius : 20px;
                  
                }

                .main-right-list {
                  margin-top : 20px;
                  margin-left : 20px;
                  margin-bottom : 20px;
                  background: silver;
                  height: 900px; 
                  width: 1310px;
                  border-radius : 20px;
                  position : absolute;
                  top : 100px;
                  left : 540px;
                  
                }

                .playlist_list {
                    background-color: rgb(255, 255, 255);
                    padding-top : 10px;
                    padding-bottom : 0px;
                    padding-left : 0px;
                    width : 420px;
                    height: 650px;
                    border-radius : 20px;
                    margin-top: 30px;
                    margin-left : 30px;
                    position : absolute;
                    top : 310px;
                }

                .info_list {
                    background-color: rgb(255, 255, 255);
                    padding-top : 10px;
                    padding-bottom : 0px;
                    padding-left : 0px;
                    width : 1220px;
                    height: 600px;
                    border-radius : 20px;
                    margin-top: 30px;
                    margin-left : 30px;
                    position : relative;
                    top : 240px;
                }

                .default_font {
                    font-family:'나눔스퀘어라운드','맑은 고딕'; 
                    color:snow; 
                    font-weight:bold;
                }

                .playlist_info_data{
                    
                    font-size:25px; 
                    font-weight:bold; 
                    color:white; 
                    position:absolute; 
                    top: 140px; 
                    left:30px;
                    
                }
              
            </style>



    </head>
    <body>
        <div id="top-bar">
            <table>
                    <tr style="vertical-align:top">
                      <td class="top-bar-table"><span class="top-title">극한스피킹</span></td>
                      <td style="padding-left:10px"></td>
                    </tr>
                  </table>



        </div>

                <div class='main-left-list'>
                   <div>
                       <span class="default_font" style="font-size:60px; position: absolute; top: 160px; left:60px;">Playlist</span>
                       <hr style="border: solid 3px snow; width: 440px; border-radius: 10px; position:absolute; top:220px; left: 58px;">
                   </div>
                    <div>
                        
                        <form class="form-inline mr-auto" style="position: absolute; top:270px; left: 60px;">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style=" width:250px; float: right;">
                            <button class="btn btn-unique btn-rounded btn-sm my-0" style="height:40px;background-color:rgb(64, 157, 163); float: left;" type="submit"><span style="font-size:15px; color:white;">Search</span></button>
                          </form>

                        <button class="btn btn-primary" style="width:90px; position:absolute; top:260px; left:420px;"><span style="font-family:'나눔스퀘어라운드','맑은 고딕';font-size:28px; font-weight: bold;">생성</span></button>
                    </div> 
                    <div class='playlist_list' style="border-radius:10px;">
                        <!-- List group -->
                        <div class="list-group" id="myList" role="tablist">
                            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#Playlist_1" role="tab"><span class="default_font" style="color:black;font-size:20px;">Playlist_1</span></a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#Playlist_2" role="tab"><span class="default_font" style="color:black;font-size:20px;">Playlist_2</span></a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#Playlist_3" role="tab"><span class="default_font" style="color:black;font-size:20px;">Playlist_3</span></a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#Playlist_4" role="tab"><span class="default_font" style="color:black;font-size:20px;">Playlist_4</span></a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#Playlist_5" role="tab"><span class="default_font" style="color:black;font-size:20px;">Playlist_5</span></a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#Playlist_6" role="tab"><span class="default_font" style="color:black;font-size:20px;">Playlist_6</span></a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#Playlist_7" role="tab"><span class="default_font" style="color:black;font-size:20px;">Playlist_7</span></a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#Playlist_8" role="tab"><span class="default_font" style="color:black;font-size:20px;">Playlist_8</span></a>
                        </div>
                        
                       
                    </div>
                </div>


                <div class='main-right-list'>
                    
                    <div>
                        <span class="default_font" style="font-size:60px; position: absolute; top: 45px; left:28px;">Information</span>
                        <hr style="border: solid 3px snow; width: 1240px; border-radius: 10px; position:absolute; top:100px; left: 26px;">
                    </div>
                    
                <div>
                    <div class="default_font" style="font-size:25px; font-weight:bold; color:white; position:absolute; top: 140px; left:30px;">
                        제목 : <br>
                        작성자 : <br>
                        최근 수정일 :
                    </div>

                        <div class="tab-content">
                                <div class="tab-pane active" id="Playlist_1" role="tabpanel">
                                    
                                    <div class="default_font playlist_info_data" style="font-size:25px; font-weight:bold; color:rgb(0, 0, 0); position: absolute; top: 140px; left: 180px;">
                                    Playlist_1<br>
                                    홍길동<br>
                                    2019/01/08
                                    </div>

                                </div>
                                <div class="tab-pane" id="Playlist_2" role="tabpanel">
                                        <div class="default_font playlist_info_data" style="font-size:25px; font-weight:bold; color:rgb(0, 0, 0); position: absolute; top: 140px; left: 180px;">
                                                Playlist_2<br>
                                                임꺽정<br>
                                                2019/01/12
                                                </div>
            
                                </div>
                                <div class="tab-pane" id="Playlist_3" role="tabpanel">c</div>
                                <div class="tab-pane" id="Playlist_4" role="tabpanel">d</div>
                                <div class="tab-pane" id="Playlist_5" role="tabpanel">e</div>
                                <div class="tab-pane" id="Playlist_6" role="tabpanel">f</div>
                                <div class="tab-pane" id="Playlist_7" role="tabpanel">g</div>
                                <div class="tab-pane" id="Playlist_8" role="tabpanel">h</div>
                            </div>
                </div>



                <button class="btn btn-primary default_font" style="width:90px; position:absolute; top:190px; left:1120px;"><span style="font-size:28px; font-weight: bold;">수정</span></button>
                
                
                        <div class='info_list'>

                             <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="Playlist_1" role="tabpanel">

                                    a

                                </div>
                                <div class="tab-pane" id="Playlist_2" role="tabpanel">b</div>
                                <div class="tab-pane" id="Playlist_3" role="tabpanel">c</div>
                                <div class="tab-pane" id="Playlist_4" role="tabpanel">d</div>
                                <div class="tab-pane" id="Playlist_5" role="tabpanel">e</div>
                                <div class="tab-pane" id="Playlist_6" role="tabpanel">f</div>
                                <div class="tab-pane" id="Playlist_7" role="tabpanel">g</div>
                                <div class="tab-pane" id="Playlist_8" role="tabpanel">h</div>
                            </div>

                            </div>


                </div>

    </body>
</html>