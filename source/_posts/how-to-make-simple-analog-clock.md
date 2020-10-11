---
title: How to make a simple Analog Clock
tags:
  - analog
  - basic
  - clock
  - draw
  - Explanation
  - time
  - Tutorials
id: '42'
categories:
  - [Math Dates]
  - [Screen Graphics]
date: 2014-06-14 00:03:00
thumbnail: how-to-make-simple-analog-clock/analog-clock-project-thumb.gif
downloads:
  - https://www.dropbox.com/s/5bugnivorzdef3t/analog-clock.zip?dl=1
  - http://bit.ly/analog-clock
---

Digital clocks are cool. But Analog clocks are cooler... when you make them yourself! In this little article we are gonna create an analog clock!
<!-- more -->
  
Although digital clocks are the trend these days, analog clocks also hold a very special place in our hearts. Many luxury brands are still selling analong clocks. (If you are interested about digital clocks, [see this previous tutorial on making a digital clock](http://lazplanet.blogspot.com/2013/12/create-digital-clock-that-talks.html).)  
  
No matter how much old the layout is, there is something special about the analog clocks that ticks with its hands. Even in the digital Desktops, we seems to prefer a digital clock widget. That's another topic. But to get you started I show you a basic analog clock that you can make yourself, by hand. I mean hand-coding. ;)  
  
We will draw the entire interface with code, so it should be super lightweight and a good source of reference too.  
  
Take a look at our final result.  
  

![A cross platform analog clock project made with Lazarus (Free Pascal)](how-to-make-simple-analog-clock/analog-clock-in-lazarus.gif "A cross platform analog clock project made with Lazarus (Free Pascal)")

  
  
This clock is not written by me from scratch. Actually, I have translated it from [another java source code written by Abhishek Dubey](http://www.c-sharpcorner.com/UploadFile/433c33/creating-analog-clock-in-java/) and converted to Free Pascal to make it available for Lazarus. I am thankful to him for writing the code in simple words. ;)  
  

### Let's start

  
Start [Lazarus](http://lazarus.freepascal.org/).  
  
Create a new Application Project (Project -> New Project -> Application -> OK).  
  
Set your form's both Width and Height property to 350. Now add the following variables under the first var clause of the unit (use F12 to switch to & from Code view):  
  

var  
  ...  
  
  xcenter:integer = 175;  
  ycenter:integer = 175;  
  lastxs,lastys,lastxm,lastym,lastxh,lastyh:integer;  
  
  clockbg: tbitmap;  
  
  second, minute, hour: integer;

   
xcenter and ycenter just holds a center point for the hands that we'll draw later. Some other variables such as lastxs, lastys etc. will be used in the drawing of the hands.  
  
"clockbg" will hold the background of the clock, that means everything except the hands.  
  
second, minute and hour variables will hold the parts of time in them to halp in the drawing of hands.  
  
Now Draw a **TTimer** on the form (from System tab). Set its interval to 500.  
  

### Preparing the Background

  
Now that we have the basics ready, we can concentrate on putting the details in. First, let's write the Form Create event:  
  

procedure TForm1.FormCreate(Sender: TObject);  
begin  
  clockbg:=tbitmap.Create;  
  clockbg.SetSize(350,350);  
  with clockbg.Canvas do begin  
    // background clearing  
    Brush.Color:=RGBToColor(0,90,82);  
    FillRect(0,0,350,350);  
  
    // clock area  
    Brush.Color:=clBlack;  
    Ellipsec(xcenter, ycenter, 150, 150);  
  
    // draw numbers...  
    Font.Color:=clRed;  
    Brush.Style:=bsClear;  
    TextOut(xcenter - 145, ycenter - 5, '9');  
    TextOut(xcenter + 135, ycenter - 5, '3');  
    TextOut(xcenter - 5, ycenter - 145, '12');  
    TextOut(xcenter - 5, ycenter + 130, '6');  
  
    // draw the points in between numbers (hour marks)  
    Brush.Style:=bsSolid;  
    Brush.Color:=clLime;  
    // 1  
    EllipseC(  
      round(cos((1 \* 30) \* pi / 180 - pi / 2) \* 140 + xcenter),  
      round(sin((1 \* 30) \* pi / 180 - pi / 2) \* 140 + ycenter),  
      3,3);  
    // 2  
    EllipseC(  
      round(cos((2 \* 30) \* pi / 180 - pi / 2) \* 140 + xcenter),  
      round(sin((2 \* 30) \* pi / 180 - pi / 2) \* 140 + ycenter),  
      3,3);  
    // 4  
    EllipseC(  
      round(cos((4 \* 30) \* pi / 180 - pi / 2) \* 140 + xcenter),  
      round(sin((4 \* 30) \* pi / 180 - pi / 2) \* 140 + ycenter),  
      3,3);  
    // 5  
    EllipseC(  
      round(cos((5 \* 30) \* pi / 180 - pi / 2) \* 140 + xcenter),  
      round(sin((5 \* 30) \* pi / 180 - pi / 2) \* 140 + ycenter),  
      3,3);  
    // 7  
    EllipseC(  
      round(cos((7 \* 30) \* pi / 180 - pi / 2) \* 140 + xcenter),  
      round(sin((7 \* 30) \* pi / 180 - pi / 2) \* 140 + ycenter),  
      3,3);  
    // 8  
    EllipseC(  
      round(cos((8 \* 30) \* pi / 180 - pi / 2) \* 140 + xcenter),  
      round(sin((8 \* 30) \* pi / 180 - pi / 2) \* 140 + ycenter),  
      3,3);  
    // 10  
    EllipseC(  
      round(cos((10 \* 30) \* pi / 180 - pi / 2) \* 140 + xcenter),  
      round(sin((10 \* 30) \* pi / 180 - pi / 2) \* 140 + ycenter),  
      3,3);  
    // 11  
    EllipseC(  
      round(cos((11 \* 30) \* pi / 180 - pi / 2) \* 140 + xcenter),  
      round(sin((11 \* 30) \* pi / 180 - pi / 2) \* 140 + ycenter),  
      3,3);  
  
  end;  
end;

  
I know it's a mouthful. First, we create the clockbg TBitmap. Then the usual filling the background from Black to something we prefer. Then we draw a circle for the background of the clock. Then draw numbers 12, 3, 6, 9 on four corners. Then we put some points at the middle of those numbers to fill in the void for the hour marks.  
  
Now as we have Create-d a TBitmap, now we have to free it before the program closes. If we don't do this, a Memory leak will occur. Now select the form,  then go to Object Inspector and on the OnDestroy event enter this code:  
  

procedure TForm1.FormDestroy(Sender: TObject);  
begin  
  if clockbg <> nil then  
    FreeAndNil(clockbg);  
end;

  
Through our code, we say that if clockbg has been created, free it from memory. This will usually run when the program closes.  
  

### Look Ma, 3 Hands!

  
Now let's take care of the 3 hands of the clock. I said earlier that we'll draw everything with code. So now we'll write code to draw the hands.  
  
Create a new procedure like the follows:  
  

procedure Tform1.DrawHands();  
var  
  HH,MM,SS,MS: Word;  
  xhour, yhour, xminute, yminute, xsecond, ysecond, second, minute, hour: Integer;  
  cSecond, cMinute, cHour: TColor;  
begin  
  // hand colors  
  cSecond:=clGreen;  
  cMinute:=clBlue;  
  cHour:=clRed;  
  
  // get the time  
  DecodeTime(Time,HH,MM,SS,MS);  
  second:=SS;  
  minute:=MM;  
  hour:=HH;  
  
  // calculation of (x, y) points where the hands will point to  
  xsecond := round(cos(second \* pi / 30 - pi / 2) \* 120 + xcenter);  
  ysecond := round(sin(second \* pi / 30 - pi / 2) \* 120 + ycenter);  
  xminute := round(cos(minute \* pi / 30 - pi / 2) \* 100 + xcenter);  
  yminute := round(sin(minute \* pi / 30 - pi / 2) \* 100 + ycenter);  
  xhour := round(cos((hour \* 30 + minute / 2) \* pi / 180 - pi / 2) \* 80 + xcenter);  
  yhour := round(sin((hour \* 30 + minute / 2) \* pi / 180 - pi / 2) \* 80 + ycenter);  
  
  with Canvas do begin  
  
    // drawing the hands  
    pen.Color:=cSecond;  
    Line(xcenter, ycenter, xsecond, ysecond);  
    pen.Color:=cMinute;  
    Line(xcenter, ycenter - 1, xminute, yminute);  
    Line(xcenter - 1, ycenter, xminute, yminute);  
    pen.Color:=cHour;  
    Line(xcenter, ycenter - 1, xhour, yhour);  
    Line(xcenter - 1, ycenter, xhour, yhour);  
  
  end;  
  
  // some info we can use later...  
  lastxs := xsecond;  
  lastys := ysecond;  
  lastxm := xminute;  
  lastym := yminute;  
  lastxh := xhour;  
  lastyh := yhour;  
end;

  
This procedure can be easily integrated with the Timer code we'll see later. This is made just to keep it seperate from other code. In other way, it makes it look simpler.  
  

### Timing it right

  
Now double click the Timer1 component and enter:  
  

procedure TForm1.Timer1Timer(Sender: TObject);  
begin  
  if clockbg <> nil then begin  
    Canvas.Draw(0,0,clockbg);  
  
    DrawHands;  
  
    Canvas.TextOut(xcenter - 30, ycenter + 155,  
      FormatDateTime('hh:nn:ss am/pm', now));  
  end;  
end;

  
This is basically drawing the clockbg, our background for the clock. Then it calls the DrawHands procedure that we made above. At the end, we draw the time in text, just in case anyone needs to read time quickly.  
  
Now hit F9 (or Run-> Run).  
Hopefully you will see your new shiny analog clock on your screen.  
  

![A cross platform analog clock project made with Lazarus (Free Pascal)](how-to-make-simple-analog-clock/analog-clock-in-lazarus.gif "A cross platform analog clock project made with Lazarus (Free Pascal)")

  

#### Things to try further

If you try to expand this project to fit in these features, I think it will benefit you-  
\- Implement an alarm system  
\- Draggable form  
\- Set its form shape to match the contents  
\- Always on top feature  
\- Tray icon to quit or set alarm  
