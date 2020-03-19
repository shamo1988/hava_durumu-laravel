@php
    function ara($bas, $son, $yazi)
    {
      @preg_match_all('/' . preg_quote($bas, '/') .
      '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
      return @$m[1];
    }
    #@foreach (trans()->get('index.azseherler') as $link=>$key2)

    $link = "https://weather.day.az/az/locations/";
    $icerik = file_get_contents($link);
    $title2 = ara('<h1>','</h1>',$icerik);

    $seher = ara('<p>','</a>',$icerik);
    $bugun=date("d.m.Y");
$sayfa = file_get_contents('https://weather.day.az/az/locations/');
preg_match_all('~<p><a href="(.*?)">(.*)</a>~', $sayfa, $cikti);

          $x = array_reverse($cikti[0],true);
$y=array_reverse($cikti[0]);
   $url = file_get_contents('https://weather.day.az/az/city/100147622/today.html');
   $urleng = file_get_contents('https://weather.day.az/en/city/100147622/today.html');
   $urlru = file_get_contents('https://weather.day.az/city/100147622/today.html');

   if(App::isLocale('az')){
    $sagkenar=ara('<p>','</p>',$url);
        $derece=ara('<p class="degree">','</p>',$url);
       $kulek=ara('<p class="wind">','</p>',$url);
    preg_match_all('#<div class="state-icon" title="(.*?)"><img src="(.*?)">(.*)</div>#', $url, $title);
    preg_match_all('#<div class="state-icon" title="(.*?)"><img src="(.*?)">(.*)</div>#', $url, $sekil);
    preg_match_all('@<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 current_state text-center">(.*?)</div>@si',$url,$dizi);
    $html=$dizi[0][0];
    $metin  = $html; 
  $eski   = '/assets';
  $yeni   ='https://weather.day.az/assets';
  $metin = str_replace($eski, $yeni, $metin);
   }
   if(App::isLocale('en')){
    $sagkenar=ara('<p>','</p>',$urleng);
        $derece=ara('<p class="degree">','</p>',$urleng);
       $kulek=ara('<p class="wind">','</p>',$urleng);
    preg_match_all('#<div class="state-icon" title="(.*?)"><img src="(.*?)">(.*)</div>#', $urleng, $title);
    preg_match_all('#<div class="state-icon" title="(.*?)"><img src="(.*?)">(.*)</div>#', $urleng, $sekil);
    preg_match_all('@<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 current_state text-center">(.*?)</div>@si',$urleng,$dizi);
    $html=$dizi[0][0];
    $metin  = $html; 
  $eski   = '/assets';
  $yeni   ='https://weather.day.az/assets';
  $metin = str_replace($eski, $yeni, $metin);
   }
   if(App::isLocale('ru')){
    $sagkenar=ara('<p>','</p>',$urlru);
        $derece=ara('<p class="degree">','</p>',$urlru);
       $kulek=ara('<p class="wind">','</p>',$urlru);
    preg_match_all('#<div class="state-icon" title="(.*?)"><img src="(.*?)">(.*)</div>#', $urlru, $title);
    preg_match_all('#<div class="state-icon" title="(.*?)"><img src="(.*?)">(.*)</div>#', $urlru, $sekil);
    preg_match_all('@<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 current_state text-center">(.*?)</div>@si',$urlru,$dizi);
    $html=$dizi[0][0];
    $metin  = $html; 
  $eski   = '/assets';
  $yeni   ='https://weather.day.az/assets';
  $metin = str_replace($eski, $yeni, $metin);
   }
  $url2eng = file_get_contents('https://weather.day.az/en/city/100147622/week.html');

  $url2az = file_get_contents('https://weather.day.az/az/city/100147622/week.html');
  $url2rus = file_get_contents('https://weather.day.az/city/100147622/week.html');

        $derece=ara('<p class="degree">','</p>',$url);
       $kulek=ara('<p class="wind">','</p>',$url);
       if(App::isLocale('en')){
       
    preg_match_all('@<div class="row">(.*?)</div>@si', $url2eng, $komple);
    preg_match_all('@<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">(.*?)</div>@si', $url2eng, $sagkenarhefte);

    $hmtl1=$komple[0][3];
$hmtl2=$komple[0][4];
$hmtl3=$komple[0][5];
$hmtl4=$komple[0][6];
$hmtl5=$komple[0][7];
$hmtl6=$komple[0][8];
$hmtl7=$komple[0][9];
    $metin2  = $hmtl1; 
    $metin3  = $hmtl2; 
    $metin4  = $hmtl3; 
    $metin5  = $hmtl4; 
    $metin6  = $hmtl5; 
    $metin7  = $hmtl6; 
    $metin8  = $hmtl7; 
   

  $eski2   = '/assets';
	
  $yeni2   ='https://weather.day.az/assets';
      $heftesol1 = str_replace($eski2, $yeni2, $metin2);
      $heftesol2 = str_replace($eski2, $yeni2, $metin3);
      $heftesol3 = str_replace($eski2, $yeni2, $metin4);
      $heftesol4 = str_replace($eski2, $yeni2, $metin5);
      $heftesol5 = str_replace($eski2, $yeni2, $metin6);
      $heftesol6 = str_replace($eski2, $yeni2, $metin7);
      $heftesol7 = str_replace($eski2, $yeni2, $metin8);
       }
       if(App::isLocale('az')){
    preg_match_all('@<div class="row">(.*?)</div>@si', $url2az, $komple);
    preg_match_all('@<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">(.*?)</div>@si', $url2az, $sagkenarhefte);
    $hmtl1=$komple[0][3];
$hmtl2=$komple[0][4];
$hmtl3=$komple[0][5];
$hmtl4=$komple[0][6];
$hmtl5=$komple[0][7];
$hmtl6=$komple[0][8];
$hmtl7=$komple[0][9];
    $metin2  = $hmtl1; 
    $metin3  = $hmtl2; 
    $metin4  = $hmtl3; 
    $metin5  = $hmtl4; 
    $metin6  = $hmtl5; 
    $metin7  = $hmtl6; 
    $metin8  = $hmtl7; 
   

  $eski2   = '/assets';
	
  $yeni2   ='https://weather.day.az/assets';
      $heftesol1 = str_replace($eski2, $yeni2, $metin2);
      $heftesol2 = str_replace($eski2, $yeni2, $metin3);
      $heftesol3 = str_replace($eski2, $yeni2, $metin4);
      $heftesol4 = str_replace($eski2, $yeni2, $metin5);
      $heftesol5 = str_replace($eski2, $yeni2, $metin6);
      $heftesol6 = str_replace($eski2, $yeni2, $metin7);
      $heftesol7 = str_replace($eski2, $yeni2, $metin8);
       }
       if(App::isLocale('ru')){
    preg_match_all('@<div class="row">(.*?)</div>@si', $url2rus, $komple);
    preg_match_all('@<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">(.*?)</div>@si', $url2rus, $sagkenarhefte);
    $hmtl1=$komple[0][3];
$hmtl2=$komple[0][4];
$hmtl3=$komple[0][5];
$hmtl4=$komple[0][6];
$hmtl5=$komple[0][7];
$hmtl6=$komple[0][8];
$hmtl7=$komple[0][9];
    $metin2  = $hmtl1; 
    $metin3  = $hmtl2; 
    $metin4  = $hmtl3; 
    $metin5  = $hmtl4; 
    $metin6  = $hmtl5; 
    $metin7  = $hmtl6; 
    $metin8  = $hmtl7; 
   

  $eski2   = '/assets';
	
  $yeni2   ='https://weather.day.az/assets';
      $heftesol1 = str_replace($eski2, $yeni2, $metin2);
      $heftesol2 = str_replace($eski2, $yeni2, $metin3);
      $heftesol3 = str_replace($eski2, $yeni2, $metin4);
      $heftesol4 = str_replace($eski2, $yeni2, $metin5);
      $heftesol5 = str_replace($eski2, $yeni2, $metin6);
      $heftesol6 = str_replace($eski2, $yeni2, $metin7);
      $heftesol7 = str_replace($eski2, $yeni2, $metin8);
       }
        //print_r($sagkenarhefte[0][0]);

@endphp
<body style="margin-top: 9px;background:url('images/bg.png');background-size: cover;background-repeat: no-repeat;background-position: bottom;">
  
    <div id="spanaxtar" style="margin-right: 62px; " class="float-right">
    <input type="text" name="axtar" Placeholder="@lang('index.seheradi')" title="Şəhər adı (nümunə:Lənkəran)" style="display:none" id="axtar"> <button class="btn btn-primary" style="margin-left: -64px; margin-top: -6px; border-radius: 20px;background: #ddedfd; display:none" id="btnaxtar"><i class="fa fa-search" style=""></i></button><button class="btn btn-primary" style="margin-left: -61px; margin-top: -6px; border-radius: 20px;background: #ddedfd;" id="btnaxtar2"><i class="fa fa-search" style=""></i></button>
    </div>
    
    <div class="clear"></div>
    <p class="dil col-md-4">
        <select name="dil" id="dil">
          <option @if (App::isLocale('az')) selected @endif value="aze"  data-image="{{ url('images/msdropdown/icons/blank.gif') }}" data-imagecss="flag az" data-title="AZE">Az</option>
          <option @if (App::isLocale('en')) selected @endif value="en" data-image="{{ url('images/msdropdown/icons/blank.gif') }}" data-imagecss="flag gb" data-title="Eng">En</option>
          <option @if (App::isLocale('ru')) selected @endif value="rus" data-image="{{ url('images/msdropdown/icons/blank.gif') }}" data-imagecss="flag ru" data-title="Turk"> Ru</option>
      </select>
    </p>

<div class="clear" style="both:clear"></div>
    <div align="center" id="fixed" style="margin-top: 5px;">
        <br>
               <select style="" name="olke" id="olke" class="olke1 col-md-12 col-lg-3">
                <option value="aze">{{trans()->get('index.azhava')}}</option>
                <option value="xarici">{{trans()->get('index.xarhava')}}</option>
                   </select>
    
    <select style="display:none; " name="seherler" id="seherler" class="seherler1">
     <option class="gizle" value="">@lang('index.secim')</option>
     
      <?php $i=0;

      
      ?>
@foreach (trans()->get('index.azseherler') as $link=>$key2)
     <?php
           $trim2=substr($key2,42,9);
     $i++;
     
$trim2=trans()->get('index.value');
     
     ?>
    
        @if($i==73)
       @break
       
            @else
   <option id="{{$link}}" value="{{$trim2[$i]}}"><?php echo $key2;?></option>
        @endif
        @endforeach
    </select>    
              <select style="display:none;" name="olkeler" id="olkeler" class="olkeler1">
              <option class="gizle2" value="">@lang('index.secim')</option>
    
       <?php $i=0;?>
       @foreach (trans()->get('index.xarici') as $link1=>$key3)
    
       <?php $trim3=trans()->get('index.valuexarici');
    
    $i++;
    ?>
     @if($i==61)
    
       @break
        
             @else
<option  id="{{$link1}}" value="{{$trim3[$i]}}"><?php echo $key3;?></option>
    
            @endif
            @endforeach
    
    </select>      
  
               </div>
               <div id="temanot" class="alert alert-danger" style="display:none">Axtarışa dair heç bir nəticə tapılmadı!</div>


     <div style="clear:both;"></div>
      <!--<div align="center" class= "col-sm-12 col-md-12 col-lg-12">
        //<div class="col-lg-12 col-md-12 col-sm-12 col-xs-10 text-center">-->
        <section class="inner-page-contents ptl">
        <div class="block weather" style="height: auto !important;">
    
        <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-7" style="margin-left:20px;" >
                                  <div id="secim">
                                   <h3 id="seherad" style=""></h3>
                                  </div>
    <div align="center" class="forecast container-fluid ">
    
        <div class="row" style="margin-top: -36px">
               
                <?php echo $metin;?>      
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 today_forecast">
                <h4 style="color:#176FD3;">@lang('index.bugun') {{$bugun}}</h4>
 
                @foreach ($sagkenar as $link=>$havabugun)
         
    
                <p><?php echo $havabugun;?></p>
               
                        @endforeach
            </div>
                                                                 
    
        </div>
    
        <div class="row weather_forecast">
                        <div class="col-xs-3 col-md-3 col-sm-3 state">
                    <!-- 2019-12-30 22:00:00 --> 
                    <span class="day_time">@lang('index.axsam')</span>
                    <div class="state-icon" title="{{$title[1][0]}}"><img src="https://weather.day.az/<?php echo $sekil[2][0];?>" alt=""></div>
                    <p class="degree"><?php echo $derece[1];?></p>
                    <p class="wind"><?php echo $kulek[0];?></p>
                </div>
                        <div class="col-xs-3 col-md-3 col-sm-3 state">
                    <!-- 2019-12-31 04:00:00 --> 
                    <span class="day_time">@lang('index.gece')</span>
                    <div class="state-icon" title="{{ $title[1][1]}}"><img src="https://weather.day.az/<?php echo $sekil[2][1];?>" alt=""></div>
                    <p class="degree"><?php echo $derece[2];?></p>
                    <p class="wind"><?php echo$kulek[1];?></p>
                </div>
                       
                        <div class="col-xs-3 col-md-3 col-sm-3 state">
                    <!-- 2019-12-31 10:00:00 --> 
                    <span class="day_time">@lang('index.seher')</span>
                    <div class="state-icon" title="<?php echo $title[1][2];?>"><img src="https://weather.day.az/<?php echo $sekil[2][2];?>" alt=""></div>
                    <p class="degree"><?php echo $derece[3];?></p>
                    <p class="wind"><?php echo $kulek[2];?></p>
                </div>
                        <div class="col-xs-3 col-md-3 col-sm-3 state">
                    <!-- 2019-12-31 16:00:00 --> 
                    <span class="day_time">@lang('index.gun')</span>
                    <div class="state-icon" title="<?php echo $title[1][3];?>"><img src="https://weather.day.az/<?php echo $sekil[2][3];?>" alt=""></div>
                    <p class="degree"><?php echo $derece[4];?></p>
                    <p class="wind">{{ $kulek[3]}}</p>
                </div>
    
                </div>
                       <hr>
    
        <div class="forecast_list">
                <h4 style="color: #176FD3;"> @lang('index.proqnoz')</h4>
    
                           <ul class="list-inline">
    
                <li class="list-inline-item"><div class="row">
                <!--div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center ">
                    <p class="weekday">Ç.a.</p>
                    <p class="date">31.12</p>
                </div-->
 <?php  echo $heftesol1;?> 
                
             <?php echo $sagkenarhefte[0][0];?> 
            </div></li>
            <br><br>
             <hr>
              <li class="list-inline-item"><div class="row">
                <!--div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center ">
                    <p class="weekday">Ç.</p>
                    <p class="date">1.01</p>
                </div-->
                            <?php echo $heftesol2;?>
    
                       <?php echo $sagkenarhefte[0][1];?> 
    
                  </div></li>
                  <br><br>
             <hr>
               <li class="list-inline-item"><div class="row">
                <!--div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center ">
                    <p class="weekday">C.a.</p>
                    <p class="date">2.01</p>
                </div-->
                           <?php echo $heftesol3;?>
    
                       <?php echo $sagkenarhefte[0][2];?> 
    
            </div></li> 
                                 <br><br><hr>
               <li class="list-inline-item"> <div class="row">
                <!--div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center ">
                    <p class="weekday">C.</p>
                    <p class="date">3.01</p>
                </div-->
                         <?php echo $heftesol4;?>
    
                        <?php echo $sagkenarhefte[0][3];?> 
    
            </div></li>
               <br><br>
             <hr>
                <li class="list-inline-item"><div class="row">
                <!--div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center weekend">
                    <p class="weekday">Ş.</p>
                    <p class="date">4.01</p>
                </div-->
                            <?php echo $heftesol5;?>
    
                      <?php echo $sagkenarhefte[0][4];?> 
    
            </div></li>
                                 <br><br>
             <hr>
    
               <li class="list-inline-item"> <div class="row">
                <!--div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center weekend">
                    <p class="weekday">В.</p>
                    <p class="date">5.01</p>
                </div-->
                           <?php echo $heftesol6;?>
    
                   <?php echo $sagkenarhefte[0][5];?> 
    
            </div></li>
               <br><br>
             <hr>
                <li class="list-inline-item"><div class="row">
                <!--div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center ">
                    <p class="weekday">B.e.</p>
                    <p class="date">6.01</p>
                </div-->
                            <?php echo $heftesol7;?>
    
                     <?php echo $sagkenarhefte[0][6];?> 
    
            </div></li>
    <br><br>
            </ul>
        </div>
      
    </div>
      
      
       </div>
        
        
    <div style="margin-left: 20px;" class="col-sm-12 col-md-12 col-lg-2 listing">
    
        
    <div style="" class="">
                                            <div style="z-index: 1;" class="listing">
        <ul id="azelist"  >
            <li style="text-align:center; cursor:pointer" id="menu1" class="list-group-item2">{{trans()->get('index.azhava')}} &#8595;&#8593;</li>
                      
      <?php $i=0;?>
      @foreach (trans()->get('index.azseherler') as $link5=>$key5)         
      <?php 
      $trim4=trans()->get('index.value');
       $i++;?>
        @if($i==73)
       @break
          
            @else
        @php
    $htmlaze='<p><a href="http://weather.day.az/az/city/'.$trim4[$i].'/today.html"><strong>'.$key5.'</strong></a>';
        
        $metina  = $htmlaze;
        
      $eskia  = '<p><a href="http://weather.day.az/az/city/'.$trim4[$i].'/today.html">';
        
      $yenia  ='';
        
        
      $metinsona = str_replace($eskia, $yenia, $metina);
      @endphp
                
          
                        <li class="list-group-item" style="border-radius: 15px;">
                       
                        <span style="cursor: pointer; text-align:center;" id="{{$trim4[$i]}}" class="alist"><?php echo $metinsona;?></span>
                </li>
                       
            @endif
            @endforeach
                        
        </ul>
    </div>               
                           </div>
               </div>    
        
    <div style="margin-left: 20px;" class="col-sm-12 col-md-12 col-lg-2 listing">
        <div style="" class="">
        <div class="listing">
        <ul id="xaricilist">
            <li style="text-align:center; cursor:pointer" id="menu2" class="list-group-item2">{{trans()->get('index.xarhava')}} &#8595;&#8593;</li>
                      
       <?php $i=0;?>
       @foreach (trans()->get('index.xarici') as $link2=>$key4)
    
       <?php $trim3=trans()->get('index.valuexarici');

    $i++;
    ?>
   
        @if($i==61)
       @break
          
            @else
   <?php 
   $htmlxarici='<p><a href="http://weather.day.az/az/city/'.$trim3[$i].'/today.html"><strong>'.$key4.'</strong></a>';
        
        $metinx  = $htmlxarici;
        
      $eskix   = '<p><a href="http://weather.day.az/az/city/'.$trim3[$i].'/today.html">';
        
      $yenix   ='';
     
      $metinsonx = str_replace($eskix, $yenix, $metinx);
      ?>
                        <li class="list-group-item" style="border-radius: 15px;">
                       
                        <span style="cursor: pointer;" id="{{$trim3[$i]}}" class="xlist"><?php echo $metinsonx;?></span>
                </li>
                       
             @endif
             @endforeach
        </ul>
    </div> 
          </div>
        
               </div>
               @if(App::isLocale('az'))
      <div id="load3"  class="animated fadeIn faster" style="display:none; position: absolute;
        left: 7%;
        top: 200px;
        display: none;
        z-index: 1000;
        height: 500px;
        width: 500px;font-size:150px; border-radius:15px; content:'';"><img class="sekil" width="" height="" src="images/az.gif">
        
    </div>
    @elseif(App::isLocale('en'))
    <div id="load3"  class="animated fadeIn faster" style="display:none; position: absolute;
      left: 7%;
      top: 200px;
      display: none;
      z-index: 1000;
      height: 500px;
      width: 500px;font-size:150px; border-radius:15px; content:'';"><img class="sekil" width="" height="" src="images/en.gif">
      
  </div>
  @elseif(App::isLocale('ru'))
  <div id="load3"  class="animated fadeIn faster" style="display:none; position: absolute;
    left: 7%;
    top: 200px;
    display: none;
    z-index: 1000;
    height: 500px;
    width: 500px;font-size:150px; border-radius:15px; content:'';"><img class="sekil" width="" height="" src="images/rus.gif">
    
</div>
    @endif
            </div>
                                  
                                  
                                  
            </div>                      
        </section>
        