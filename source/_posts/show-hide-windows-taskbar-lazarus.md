---
title: How to Show / Hide the Windows Taskbar with Lazarus
tags:
  - Explanation
  - hide
  - Sample Code
  - show
  - taskbar
  - toggle
  - Tutorials
  - Windows API
id: '51'
categories:
  - [Code Snippets]
  - [Form Controls]
  - [System API]
date: 2014-02-20 14:22:00
thumbnail: show-hide-windows-taskbar-lazarus/task-bar-show-hide-lazplanet-thumb.jpg
downloads:
  - https://db.tt/Nca39jNf
---

If you want to build some uncommon software which needs hiding the taskbar then check out this article.
<!-- more -->
  
  
Windows Taskbar is the bar which sits at the very bottom of the screen. This bar has the Start orb (or the Start Button) and some of our favorite program icons and some other Tray icons on the right as well. It is a prominent feature of a windows desktop.  
  
There are times when we need to hide it, and may be show it again. For example, if you are doing a fullscreen and for some reason the taskbar keeps popping and annoying you or if you just want to have some fun, hiding the taskbar is a nice thing to do.  
  
In this short tutorial, we'll see how to hide the taskbar and show it again. For hiding and showing a window which is not from our project, we will have to use the Windows API. And basically every form, window or component we see in the screen is a "window" to the Windows API. When a form, window or component appears in the screen, windows gives it a special ID to it. It is called HWND. An HWND is like a roll number. As each student in a class have one unique number, HWND is just like that. We can use this HWND to identify a window. We'll learn about that in a minute.

### The code

First of all we are using Windows API. So we will have to add windows unit to our uses clause:  

uses  
  ..., ..., windows;

  

#### Hiding the taskbar (including the start orb)

The code for hiding the Taskbar is:  

ShowWindow(  
    FindWindowEx(0, 0, MAKEINTATOM($C017), 'Start'),  
    SW\_HIDE);  
ShowWindow(FindWindow('Shell\_TrayWnd', nil), SW\_HIDE);

  
The first ShowWindow command hides the start orb. ShowWindow has the following syntax:  

function ShowWindow(hWnd:HWND; nCmdShow:longint):WINBOOL;

  
The first parameter is the HWND that we want to show or hide. We don't have a fixed HWND for Start orb. So we need to find out the HWND of the start orb. The "FindWindowEx(0, 0, MAKEINTATOM($C017), 'Start')" part has been used to find the HWND of the start orb.  
  
And then the second parameter in the ShowWindow function is the nCmdShow flag. (A flag is usually a number to say what we want to do with our command. We can sometimes combine multiple flags.) The interesting thing is that ShowWindow is used for both showing and hiding a window. Look at the flags to further understand:  
  

SW\_HIDE = 0;  
SW\_MAXIMIZE = 3;  
SW\_MINIMIZE = 6;  
SW\_NORMAL = 1;  
SW\_RESTORE = 9;  
SW\_SHOW = 5;  
SW\_SHOWDEFAULT = 10;  
SW\_SHOWMAXIMIZED = 3;  
SW\_SHOWMINIMIZED = 2;  
SW\_SHOWMINNOACTIVE = 7;  
SW\_SHOWNA = 8;  
SW\_SHOWNOACTIVATE = 4;  
SW\_SHOWNORMAL = 1;  
WPF\_RESTORETOMAXIMIZED = 2;  
WPF\_SETMINPOSITION = 1;

(taken from defines.inc. You can find further explanation of the flags in [this MSDN page](http://msdn.microsoft.com/en-us/library/windows/desktop/ms633548%28v=vs.85%29.aspx))  
  
So, you can see that there is SW\_HIDE to hide a window or SW\_SHOW to show a hidden window.  
  
The second ShowWindow command is similar and more easier to understand:  

ShowWindow(FindWindow('Shell\_TrayWnd', nil), SW\_HIDE);

  
It is for the rest of the Taskbar. Taskbar has a class name "Shell\_TrayWnd". We can find out the Taskbar's HWND through FindWindow function. We give FindWindow the Class name. It finds the HWND for us. Then we use ShowWindow to hide the window (or our taskbar).  
  
We had to hide both Task bar and start orb because if we hide the taskbar, the start orb doesn't hide. It is a separate window. So we had to write another line for that.  
  
**It is always a good idea to show the taskbar once your program exits.** Because it you don't do so, when it exits, the user will be left with no taskbar. That's what we are going to see next.  

#### Showing the Taskbar (including start orb)

The code for showing the Taskbar is:  

ShowWindow(FindWindow('Shell\_TrayWnd', nil), SW\_SHOW);  
ShowWindow(  
      FindWindowEx(0, 0, MAKEINTATOM($C017), 'Start'),  
      SW\_SHOW);

  
We do the same thing but instead of SW\_HIDE, we use SW\_SHOW.  
  
I have tested the code in Windows 7 (Ultimate). It should work for other windows versions as well.

### Tutorial

Start [Lazarus](http://www.lazarus.freepascal.org/).  
  
Create a New Application Project (**Project -> New Project -> Application -> OK**).  
  
**Draw** a **TButton** on the form. It wil be named **Button1** automatically. Set it's caption to "**Hide Taskbar**". Size and position it as you like.  
  

![Hide Taskbar Button in lazarus, windows](show-hide-windows-taskbar-lazarus/hide-taskbar-button-lazarus.gif "Hide Taskbar Button in lazarus, windows")

  
Now draw another **TButton**. (Or you can copy and paste Button1 as another option.) This button should automatically be named **Button2**. Set it's caption to "**Show Taskbar**". Size and position it as you like.  
  
  

![Show Taskbar Button in lazarus, windows](show-hide-windows-taskbar-lazarus/show-taskbar-button-lazarus.gif "Show Taskbar Button in lazarus, windows")

  
You can change the name of the buttons as you like but then change the code accordingly.  
  
Now press **F12** to switch to code view. Add the **windows** unit to the **uses** clause:  
  

uses  
  Classes, SysUtils, ..., ...,  
  windows;

  
Press **F12** to switch to Form view again.  
  
Double click **Button1** and enter the following code:  
  

procedure TForm1.Button1Click(Sender: TObject);  
begin  
  ShowWindow(  
      FindWindowEx(0, 0, MAKEINTATOM($C017), 'Start'),  
      SW\_HIDE);  
  ShowWindow(FindWindow('Shell\_TrayWnd', nil), SW\_HIDE);  
end;

  
Switch to Form view (**F12**). Double click **Button2** and enter the following code:  
  

procedure TForm1.Button2Click(Sender: TObject);  
begin  
  ShowWindow(FindWindow('Shell\_TrayWnd', nil), SW\_SHOW);  
  ShowWindow(  
      FindWindowEx(0, 0, MAKEINTATOM($C017), 'Start'),  
      SW\_SHOW);  
end;

  
Now Run the project (Run -> Run or F9).  
  

![show hide taskbar lazarus project](show-hide-windows-taskbar-lazarus/show-hide-taskbar-lazarus-project.gif "show hide taskbar lazarus project")

  
Click both the buttons to show and hide task bar.  
