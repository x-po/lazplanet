---
title: How to Run Lua Code Inside Lazarus Programs
tags:
  - Articles
  - Linux
  - lua
  - Tutorials
url: 9.html
id: 9
categories:
  - Uncategorized
date: 2020-05-01 10:37:00
---

[![Lua inside Lazarus projects blog thumbnail](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/lua-inside-lazarus-thumb.jpg "Lua inside Lazarus projects blog thumbnail")](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/lua-inside-lazarus-thumb.jpg)

We're crazy! We're out of our minds! We're going to run Lua code, from inside our Lazarus code! 2 Languages at once!  
  
Lua is a programming language. Lazarus' Free Pascal is a programming language too. But did you know we can use Lua from Free Pascal? Interesting, right? One language inside the other.  
  
Lua was designed to be small, compact and user friendly. So embedding Lua inside another program is a no sweat task. We can have the taste of another language in our Free Pascal programs with a small footprint (~260kb on \*nix, ~225kb on Windows).  
  
This can be especially useful if you want to let the user input some code and run it on the fly. This can help you create your own small IDE that can read code from a project file of your chosen syntax and run them! Or run some code that's only available on Lua and not FPC. Or anything else... sky is the limit.  
  
Let's start with a simple tutorial...  
  

### Simple Tutorial

Start [Lazarus](https://lazarus-ide.org/).  
  
Create a new Program project (**Project - New Project - Program - OK**).  
Now click **File - Save All** (because we'll need to keep some dependent files inside our project folder).  
  

#### Common tasks:

1\. Download **lua53.pas** from [here](https://github.com/malcome/Lua4Lazarus/raw/master/lua53.pas) and keep it inside your project folder. If that file is not there anymore (due to future changes) get the file from [this archive](https://github.com/malcome/Lua4Lazarus/archive/R150205.zip). This file will let us use the **lua53** unit inside our uses clause and act like a bridge between Lua and Free Pascal.  
  
2\. Download Lua dynamic libraries. Go to [http://luabinaries.sourceforge.net/](http://luabinaries.sourceforge.net/) and scroll down to the **History** heading. Click on the latest 5.3.x release. For me it was [https://sourceforge.net/projects/luabinaries/files/5.3.5/](https://sourceforge.net/projects/luabinaries/files/5.3.5/).  
  

*   If you are using Windows, click the **Windows Libraries**, then **Dynamic**. Check if your Lazarus is 32bit or 64bit. Then download the archive and Microsoft Visual C++ Redistributable for that architecture. If you scroll down a bit you will be able to see which file is for which redistributable. e.g. I had [2015 redistributable](https://www.microsoft.com/en-us/download/details.aspx?id=48145) installed and 32bit Lazarus installed, so I downloaded **lua-5.3.5\_Win32\_dll14\_lib.zip**, extracted it, then copied the lua53.dll into my project folder.
*   If you are using Linux platform, click **Linux Libraries**, then download the one that is closest to your kernel version. (For me it was **lua-5.3.5\_Linux44\_64\_lib.tar.gz**.) Then get the **libluaXX.so** file from the archive and put that into project folder.
*   If you are using Mac OS, click **Other Libraries** (Note: but I have not tested this on Mac)

  
Download the archive appropriate for you and extract it somewhere. Get either lua53.dll for Windows or liblua53.so for other platforms from there. Put the file inside the project folder. This file has the stuff that will run our Lua code.  
  
For Linux (and also I assume Mac) through, you'll have to do something extra.  
A. Open a terminal on the project folder, then run **sudo cp liblua53.so /usr/lib/**  
B. Or, run the executable with **LD\_LIBRARY\_PATH=. ./proj\_example1**  
  
End of Common tasks. Now let's get back to tutorial...  
  
Copy-paste this on your pascal unit:  
  
```
program Project1;  
{$mode objfpc}{$H+}  
  
uses  
  {$IFDEF UNIX}{$IFDEF UseCThreads}cthreads,{$ENDIF}{$ENDIF}  
  Classes  
  , lua53;  
  
var  
    L: Plua\_State;  
    result: integer;  
  
begin  
  L := luaL\_newstate();  
  luaL\_openlibs(L);  
  result := luaL\_dostring(L, 'print ("I''m Lua, but I''m running inside".." Lazarus!!")');  
  lua\_close(L);  
  ReadLn('Press enter to exit...'); // To keep the terminal window open  
end.  
```
  
So after all these my project folder looks like this:  
  

[![Project files](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/lua-project-setup-01-300x131.png "Project files")](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/lua-project-setup-01.png)

  
Now we are ready to run our program. Hit **Run - Run** (or F9).  
  
It should print the message from Lua as expected:  
  

[![Lua code running inside a Free Pascal program in a Console program](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/lua-cli-01-300x152.png "Lua code running inside a Free Pascal program in a Console program")](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/lua-cli-01.png)

  
  
**Troubleshooting**  
  
On Windows, if you get a boring "The Application was Unable to Start Correctly (0xc000007b)" message when you run your program from explorer or file manager, then maybe you should try dll file from 32bit architecture. 64bit dlls cause this issue sometimes. You can also use [Dependency Walker](http://www.dependencywalker.com/) to find out where the issue is. Just remember, the files will be for the target architecture you are building for.  
  

### Tutorial

Start [Lazarus](https://lazarus-ide.org/).  
  
Create a new Application project (**Project - New Project - Application - OK**).  
Now click **File - Save All** (because we'll need to keep some dependent files inside our project folder).  
  
Don't forget to follow the things under "**Common tasks**" heading above.  
  
Place 2 TMemos and a TButton. Change the Lines property of Memo1 to something like:  
  

print ("I'm Lua, but I'm running inside".." Lazarus!!")  

  
This way we'll have a simple code to execute when we run our program. We should also empty the Lines property of **Memo2** to let our output fill it in later. Add TLabels as you wish.  
  
Set the Caption property of Button1 to something like "Execute!" or anything you like. Your form should now look something like this:  
  

[![Form design of the GUI program](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/Lua-form-design-01-300x173.gif "Form design of the GUI program")](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/Lua-form-design-01.gif)

  
Double click the Button1 and enter:  
  
```
procedure TForm1.Button1Click(Sender: TObject);  
var  
  L: Plua\_State;  
  s: string;  
begin  
  Memo2.Clear;  
  L:= lua\_newstate(@alloc, nil);  
  try  
    luaL\_openlibs(L);  
    lua\_register(L, 'print', @print\_func);  
    try  
      s:= Memo1.Text;  
      if luaL\_loadbuffer(L, PChar(s), Length(s), 'example2') <> 0 then  
        Raise Exception.Create('');  
      if lua\_pcall(L, 0, 0, 0) <> 0 then  
        Raise Exception.Create('');  
    except  
      Form1.Memo2.Lines.Add(lua\_tostring(L, -1));  
      Form1.Memo2.SelStart:= 0;  
      Form1.Memo2.SelLength:= 0;  
    end;  
  finally  
    lua\_close(L);  
  end;  
end;  
```
  
Now put these functions before the **TForm1.Button1Click** procedure that you just edited:  
  
```
function print\_func(L : Plua\_State) : Integer; cdecl;  
var  
  i, c: integer;  
begin  
  c:= lua\_gettop(L);  
  for i:= 1 to c do  
    Form1.Memo2.Lines.Add(lua\_tostring(L, i));  
  
  Form1.Memo2.SelStart:= 0;  
  Form1.Memo2.SelLength:= 0;  
  
  Result := 0;  
end;  
  
function Alloc({%H-}ud, ptr: Pointer; {%H-}osize, nsize: size\_t) : Pointer; cdecl;  
begin  
  try  
    Result:= ptr;  
    ReallocMem(Result, nSize);  
  
  except  
    Result:= nil;  
  
  end;  
end;  
```
  
**Note:** If you put them before the procedure you won't need [forward declaration](https://en.wikipedia.org/wiki/Forward_declaration). If you want to put them anywhere you want (before or after) you can just copy and paste just the whole function line before the **implementation** line, something like this:  
  
```
...  
var  
  Form1: TForm1;  
  
  function print\_func(L : Plua\_State) : Integer; cdecl;  
  function Alloc({%H-}ud, ptr: Pointer; {%H-}osize, nsize: size\_t) : Pointer; cdecl;  
  
implementation  
...  
```
  
**Why do we use cdecl?**  
You will also notice there is a word "cdecl" at the end of the function lines. These are used when the function is meant to communicate with a C library. In our case, we are communicating with Lua which is written in C. So we use this feature.  
  
Now add **lua53** under uses clause:  
  

uses  
  ...  
  , lua53;  

  
Now click Run - Run (or F9). It will show up on screen.  
  

[![Lua GUI application for running Lua code from inside Free Pascal program](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/Lua-form-design-02-300x173.gif "Lua GUI application for running Lua code from inside Lazarus program")](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/Lua-form-design-02.gif)

  
Now click the Execute button and it should show a message on the Memo to the right.  
  

[![Basic functionality is working](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/Lua-gui-03-300x173.gif "Basic functionality is working")](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/Lua-gui-03.gif)

  
You can paste any Lua code and it should work. I tried a code example from [tutorialspoint.com](https://www.tutorialspoint.com/lua/lua_variables.htm) (love their work by the way) which is something like this:  
  

\-- Variable definition:  
local a, b  
  
\-- Initialization  
a = 10  
b = 30  
  
print("value of a:", a)  
  
print("value of b:", b)  
  
\-- Swapping of variables  
b, a = a, b  
  
print("value of a:", a)  
  
print("value of b:", b)  
  
f = 70.0/3.0  
print("value of f", f)  

  
Which should output like the screenshot below:  
  

[![Lazarus program running a variable example code written in Lua](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/Lua-gui-04-300x173.gif "Lazarus program running a variable example code written in Lua")](http://localhost/wp-lazplanet/wp-content/uploads/2020/05/Lua-gui-04.gif)

  
Have fun with this amazing trick!  
  

### Download Sample Code ZIP

### 

You can download the above example tutorial project's source code from [here](https://www.dropbox.com/s/xyz7jws01axuvnk/lua-inside-fpc.zip?dl=1) or [here](https://gitlab.com/lazplanet/lua-inside-fpc/-/releases).

Size: 1.02MB

The package may contain compiled executable EXE file(s).  
  
We now have a GitLab.com page where (hopefully) all future project source codes will be available. You can also post issues and pull requests if you want to: [https://gitlab.com/lazplanet/](https://gitlab.com/lazplanet/)

  
**Ref:**  
\- Basics: [http://lua-users.org/wiki/LuaInFreePascal](http://lua-users.org/wiki/LuaInFreePascal)  
\- Lots of examples: [https://github.com/lainz/lainzcodestudio](https://github.com/lainz/lainzcodestudio)  
\- Lua4Lazarus bridge unit project: [https://github.com/malcome/Lua4Lazarus](https://github.com/malcome/Lua4Lazarus)  
\- Example Lua code: [https://www.tutorialspoint.com/lua/lua\_variables.htm](https://www.tutorialspoint.com/lua/lua_variables.htm)  
\- Some more examples of Lua code usage: [https://github.com/mvdhoning/dlua](https://github.com/mvdhoning/dlua)  
\- cdecl: [https://freepascal.org/docs-html/ref/refsu71.html](https://freepascal.org/docs-html/ref/refsu71.html)