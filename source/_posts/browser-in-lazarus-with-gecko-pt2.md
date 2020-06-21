---
title: Create a Web Browser in Lazarus with Gecko (Part 2)
tags:
  - browser
  - HTML Web
  - internet
  - Tutorials
url: 60.html
id: 60
categories:
  - Uncategorized
date: 2013-11-03 08:18:00
---

![](http://4.bp.blogspot.com/-F167n1pr6Kk/Um-qCFAy0SI/AAAAAAAABSE/fCp76waB7HE/s1600/firefox-funny-icon.jpg)Web browsers are our daily thing. We browse the internet through them. But what about making our own browser? That we are going to do.  
  
_Before you continue please read [part 1 of this tutorial](http://lazplanet.blogspot.com/2013/10/browser-in-lazarus-with-gecko-pt1.html) to setup your [Lazarus](http://www.lazarus.freepascal.org/) to add support for GeckoPort components in your Toolbar._  
  
Ever thought of having a browser of your own that you wanted to add a stopwatch to? A stopwatch that measures how much time each website takes to load? Or may be counts how much time you surf in a day, month or year? That's just a weird idea. But the head of programers are filled with such ideas. Let's not forget, some of the best creative ideas can come from these weird ideas.  
  
Anyway, I think more or less 1 in 10 developers among us would think making a browser would be cool, considering customizability. Making a browser and completely controling its behavior yourself, is very cool.  
  
So today we are creating a simple web browser in Lazarus IDE. So let's start...  
  

### Before we begin...

  
I am quite sure that you know there are many browsers. For example, Mozilla Firefox, Microsoft Internet Explorer, Google Chrome (Chromium in Linux), Opera etc. Lazarus also has many libraries of creating a web browser. Such as LazActiveX, LazWebkit, Gecko. Check out this wiki page for details on the options you have. But I have chosen GeckoPort for our tutorial. GeckoPort is a port of Mozilla's Gecko engine. Gecko is the library which Firefox uses to render web pages. So if we use GeckoPort then we could show pages like Firefox.  
  
Although there is a "but". The Lazarus Wiki has two versions of GeckoPort. Version 1 and version 2. Version 2, according to the wiki, has better support for later versions of XULRunner:  
  
Version 2 is based on automatically generated include-files from the idl files from the Gecko SDK. For this purpose the idltopas utility is used. This way it's earier to follow the fast Gecko-release cycle now gecko-developers do not maintain backwards compatibility any more.  
  
Now the big BUT is that nobody ever (I think) could make it to work. It has problems that interrupts the compiling. So we would have to use version 1 instead.  
  

### Tutorial

  
In the part 1 of the tutorial we have successfully setup Gecko in Lazarus and built & ran one of the sample projects. We have extracted XULRunner 1.9.2.x on the exe path and everything ran okey.  
  
In this instalment, we will see how to create a browser project ourselves and create a basic browser to browse with.  
  

#### Project Preparation

  
Start [Lazarus](http://www.lazarus.freepascal.org/).  
  
Create a new Application Project (Project->New Project->Application->OK).  
  
Now save the project through Save All (File->Save All). Name the project something like proj\_gecko\_test.lpi and the unit to something like frm1.pas.  
  
Now click Open from the toolbar (or File->Open). Now open the proj\_gecko\_test.lpr file (not the .lpi file). Now we have to add Math unit to the uses section. I had some compiler directives before so I kept them. I have brought the Interfaces unit down in a compiler directive with Math unit. But I think you are safe without it, just by adding Math unit without the compiler directives. Here is the uses part of my project:  
  

uses  
  {$IFDEF UNIX}{$IFDEF UseCThreads}  
  cthreads,  
  {$ENDIF}{$ENDIF}  
  Forms, frm1  
  { you can add units after this }  
  {$IFDEF LCL}  
    ,Interfaces  
    {$IFDEF MSWINDOWS}  
      ,Math  
    {$ENDIF}  
  {$ENDIF}  
  ;

  
Now, after the following code between the begin and end:  

  {$IFDEF FPC}  
   {$IFDEF MSWINDOWS}  
    //For now - disable all floating point exceptions or XULRUNNER will crash.  
    SetExceptionMask(\[exInvalidOp,exDenormalized,exZeroDivide,exOverflow,exUnderflow,exPrecision\]);  
   {$ENDIF}  
  {$ENDIF}

  
Click Save All to save all your project files (including the .lpr file). Now close the .lpr file (you can simply middle click on the tab that has the file name). Now you should only have the frm1 code tab.  
  
And also, extract the XULRunner 1.9.x to your project directory.  
  
Okey, now we are ready for some serious action.  
  

#### Components on Form

  
Go to form view (F12). Now go to Gecko tab from the toolbar and drop TGeckoBrowser on your form. You should see a component with a Lizard in it. That's Gecko! Our trusty browser component! Name your trusty component as "Browser".  
  
![](http://3.bp.blogspot.com/-9xAdosI41mw/UnXg1oCo3bI/AAAAAAAABS0/T4B6ok_iG5U/s1600/lazarus-toolbar-gecko-component.gif)   
![](http://2.bp.blogspot.com/-cvynzcMPtNc/UnXe4W9m3rI/AAAAAAAABSo/fylaLjHoMDA/s1600/lazarus-form-designer-gecko-component.gif)  
  
Now Drop a TEdit (Standard tab) and a TBitBtn (Additional Tab). Set the caption of BitButton as GO. Set it's name to btnGo. Name the TEdit to edtAddress.  
  
Drop 3 TSpeedButtons. They will be our Back, Forward and Refresh/Reload button. Name them btnBack, btnForward and btnReload. Set their Glyphs to icons. I have used [FamFamFam](http://www.famfamfam.com/lab/icons/mini/) and [Silk Companion](http://damieng.com/creative/icons/silk-companion-1-icons) icon packs.  
  
![](http://2.bp.blogspot.com/-J5ocqalFghg/UnXeaYJ7t4I/AAAAAAAABSg/n2MKcLw6nqQ/s1600/BItButtons-lazarus-browser.gif)  
  
Now drop a TProgressBar (Common Controls). That will be our loading progress bar. Drop a TLabel as well and name that lblStatus.  
  
![](http://3.bp.blogspot.com/-655-vWLUUKY/UnXiw2t6-ZI/AAAAAAAABTA/9wvtpXmlpvk/s1600/lazarus-web-browser-progress-status.gif)  

#### Now to coding...

  
Double click btnGo and enter:  

procedure TForm1.btnGoClick(Sender: TObject);  
begin  
  Browser.LoadURI(edtAddress.Text);  
end;

  
Now that you are in code view, go to the first var clause of the unit and add the homepage string, like this:  
  

var  
  Form1: TForm1;  
    
  // Contains the homepage URL. Change it as you wish!  
  HomePage: string = 'http://lazplanet.blogspot.com';

  
( The Form1: TForm1; line will vary if you have named the form to something else other than Form1. )  
  
Now switch to form view (F12) and double click the form. And enter:  

procedure TForm1.FormCreate(Sender: TObject);  
begin  
  edtAddress.Text := HomePage;  
  btnGoClick(Sender);  
end;

  
Basically, we are setting the address bar text to our homepage url, then virtually clicking our go button. That should open the homepage for us when we run the program.  
  
Now some other buttons. Double click btnBack and enter:  

procedure TForm1.btnBackClick(Sender: TObject);  
begin  
  Browser.GoBack;  
end;

  
Double click btnForward and enter:  

procedure TForm1.btnForwardClick(Sender: TObject);  
begin  
  Browser.GoForward;  
end;

  
Only Browser.GoBack and Browser.GoForward is enough for managing our browsing history. In the background, Gecko will manage everything. Like our trusty sidekick, right?! :-)  
  
Reload is also easy. Browser.Reload is the code. Double click btnReload and enter:  

procedure TForm1.btnReloadClick(Sender: TObject);  
begin  
  Browser.Reload;  
end;

  
Now, let's see how our browser looks and works. Press F9 to compile and run the project exe  
  
Okey, now that you have the project exe running, you should see the LazPlanet website (or the URL that you have set in the HomePage string variable). Now if you click any link it loads the page, but the URL of the new page does not show in the Address bar. Also, we want the progress bar to be working and the status too. So, we would now consult the Events of Gecko component.  
  
Now switch to Form view if you are not already (F12). Now select the Browser component. Now go to Object Inspector-> Events. Now click the \[...\] button in front of OnLocationChange. Now enter:  
  

procedure TForm1.BrowserLocationChange(Sender: TObject; const uri: AnsiString);  
begin  
  edtAddress.Text:=uri;  
end;

  
Now Run (F9). Click any URL and the address bar will be updated.  
  
Now we head off to the progress bar and status bar text.  
Add the following code to Browser's OnProgressChange event procedure:  

procedure TForm1.BrowserProgressChange(Sender: TObject; Progress: Integer;  
  ProgressMax: Integer);  
begin  
  ProgressBar1.Max:=ProgressMax;  
  ProgressBar1.Position:=Progress;  
end;

  
Add the following code to Browser's OnStatusChange event procedure:  

procedure TForm1.BrowserStatusChange(Sender: TObject; aMessage: WideString);  
begin  
  lblStatus.Caption:=aMessage;  
end;

  
Also, we love to type address and then press enter to access the website. So select edtAddress and add the following code on OnKeyPress event procedure:  

procedure TForm1.edtAddressKeyPress(Sender: TObject; var Key: char);  
begin  
  // if the user presses enter...  
  if (Key = chr(10)) or (Key = chr(13)) then begin  
    btnGoClick(Sender);  
  end;  
end;

  
Now Run (F9). When you browse, it would feel more responsive because you will know what the browser is doing with status message and the progress bar. Also you can type an address and press enter to visit it. But what about the resize scenario?  
  

#### Resize Scenario

We can use Anchor property to update the components' size on form resize, without writing a single line of code. Every Anchor property (akBottom, akLeft etc.) is available under Anchors property.  
![](http://2.bp.blogspot.com/-qRt7n1nCpkg/UnXyXRau_iI/AAAAAAAABTg/YAvGTv5TNwM/s1600/anchors-property.gif)![](http://3.bp.blogspot.com/-XbsYYiiRGuk/UnXs7d2RqRI/AAAAAAAABTQ/2Vp0jF7Ijq4/s1600/progressbar-overlay-problem.gif)  
  
Select ProgressBar1 and set akTop to False, akBottom to True. Select lblStatus and set akTop to False, akBottom to True.  
  
Now press F9. It should now work nicely.  
  
![](http://1.bp.blogspot.com/-Rz-BdmwTH28/UnX_WXG29fI/AAAAAAAABTw/Z8WByuw5SCM/s1600/gecko-based-browser-sample-code.gif)  

### Download Sample Code ZIP

You can download the above example tutorial project source code from here: [https://db.tt/Vv8h9mk8](https://db.tt/Vv8h9mk8)  
Size: 577 KB  
The package contains compiled executable EXE. Don't forget to extract [xulrunner](http://ftp.mozilla.org/pub/mozilla.org/xulrunner/releases/1.9.2.19/runtimes/xulrunner-1.9.2.19.en-US.win32.zip) in the same directory as the exe to make it work.