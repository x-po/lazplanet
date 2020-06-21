---
title: Find out the smallest number from two numbers
tags:
  - Algorithms
  - Console
  - Explanation
  - Math Dates
  - minimum
  - numbers
url: 32.html
id: 32
categories:
  - Uncategorized
date: 2014-11-18 09:09:00
---

![](http://1.bp.blogspot.com/-RUFxHvT6awg/VGsIypMCRuI/AAAAAAAABv4/gqVav5JqAJU/s1600/min-number.jpg)This is usually a very basic task for beginner programmers. Find out the smaller from two numbers.  
  
  
There are many basic problems that a beginner programmer has to solve. One of the most popular is finding the smallest number out of two.  
  
Luckily, Free Pascal has a ready-made function for that. [The function is Min()](http://www.freepascal.org/docs-html/rtl/math/min.html) and can be found under the math unit. The function is very easy. Even you can write it yourself. Just see the code:  
  

// Copied from the math unit.  
// We don't need to write it ourselves.  
function Min(a, b: Extended): Extended;inline;  
begin  
  if a < b then  
    Result := a  
  else  
    Result := b;  
end;

  
The function pasted here is for Extended numbers. But it has declarations for Integer, Int64 and Extended. Writing functions for all these types will be cumbersome for you. So, it is nicely packed in the math unit.  
  
Basically, what it does is return the number which is smaller between the two provided.  
  

### The syntax

  
The syntax of Min() function is very simple. Just input two numbers. They can be Integer, Int64 or Extended. So it pretty much covers every number you can think of:  
  

function Min(  
  a: Integer;  
  b: Integer  
):Integer; overload;  
  
function Min(  
  a: Int64;  
  b: Int64  
):Int64; overload;  
  
function Min(  
  a: Extended;  
  b: Extended  
):Extended; overload;

  

### Example Console Program

Start [Lazarus](http://lazarus.freepascal.org/).  
  
Now add the math unit to the uses clause:  

uses  
  ..., ..., math;

  
Now add a var clause before the begin block:  
  

var  
  x,y: integer;

  
(You can change this to single, double, extended according to needs.)  
  
  
Now paste the following code in the begin...end block:  
  

begin  
  WriteLn('Write two integers (press enter after each):');  
  ReadLn(x);  
  ReadLn(y);  
  
  WriteLn('The smaller one is: ', Min(x,y) );  
  ReadLn;  
end.

  
We are basically taking two numbers through the ReadLine statements then passing the values to the Min() function. Min function then returns the minimum number.  
  
The resulting code is as follows:  
  

program proj\_min\_num;  
  
{$mode objfpc}{$H+}  
  
uses  
  {$IFDEF UNIX}{$IFDEF UseCThreads}  
  cthreads,  
  {$ENDIF}{$ENDIF}  
  Classes, math;  
  
var  
  x,y: integer;  
begin  
  WriteLn('Write two integers (press enter after each):');  
  ReadLn(x);  
  ReadLn(y);  
  
  WriteLn('The smaller one is: ', Min(x,y));  
  ReadLn;  
end.

  
Now Run the Project (Run-> Run or press F9).  
  
![](http://3.bp.blogspot.com/-I-AGEp6O1po/VGsMmFBNDtI/AAAAAAAABwE/SBVNTrvtWfs/s1600/min-number-lazarus.gif)  
Test it with two numbers on each line. You should get the minimum number between the two inputs.  

### Download Sample Code ZIP

You can download the above example tutorial project's source code from [here](https://db.tt/aSea8hOp).  
Or [here](http://bit.ly/min-number)  
Size: 71 KB  
The package contains compiled executable EXE file.  
  
Ref:  
[http://www.freepascal.org/docs-html/rtl/math/min.html](http://www.freepascal.org/docs-html/rtl/math/min.html)