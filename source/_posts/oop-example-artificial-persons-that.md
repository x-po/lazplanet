---
title: 'OOP Example: Artificial Persons that Respond!'
tags:
  - Explanation
  - objects
  - OOP
  - Sample Code
id: '39'
categories:
  - [Code Snippets]
date: 2014-07-30 14:47:00
thumbnail: oop-example-artificial-persons-that/bionic-thumb.jpg
---

Today we create bionic, robotic, futuristic human beings! That can even respond to your question! A virtual TPerson to be precise!
<!-- more -->
  
  
  
I hope you've read the [Classes article that I posted earlier](http://lazplanet.blogspot.com/2014/07/what-are-classes-and-what-they-can-do.html). It is fun working with [Classes](http://wiki.freepascal.org/Class) and [objects](http://wiki.freepascal.org/Object_Oriented_Programming_with_Free_Pascal_and_Lazarus#Object) and stuff. We can give life to our programs! That's very cool.  
  
If you have missed the article I strongly recommend you to read it, as example on this article is based on [that article](http://lazplanet.blogspot.com/2014/07/what-are-classes-and-what-they-can-do.html).  
  
Today I was thinking more of an example of virtual persons. We store data in computers, right? We keep data of persons. But what will happen if we could get to create virtual instances of those persons from those data? What if those "virtual persons" could respond? That would be cooler! So let's try that-  
  
Start [Lazarus](http://lazarus.freepascal.org/).  
  
Go ahead and create an Application Project (Project-> New Project-> Program-> OK).  
  
After the uses clause, enter the following code:  
  

  TPerson = object  
    public  
      Name: string;  
      GenderMale: Boolean;  
      Age: byte;  
      procedure WhoRU();  
  end;

  
Through this declaration, we create a structure for our virtual persons. We could've added a lot more information to our little persons. But we keep them simple for now. Name, GenderMale and Age variables will hold our data. But our magic will come from the WhoRU procedure.  
  
Now take you cursor inside the object declaration and press Ctrl+Shift+C. It will create the TPerson.WhoRU procedure code automatically. Now you can enter the code:  
  

// This procedure will let the 'person'  
// speak their identity (through writeln).  
// The actual magic happens here...  
procedure TPerson.WhoRU;  
var  
  Gender: string;  
begin  
  if GenderMale then  
    Gender := 'Male'  
  else  
    Gender := 'Female';  
  
  WriteLn('I am ', Name, '. I am ', Age, ' year-old ', Gender);  
end;

  
When writing this procedure keep in mind what kind of data can you encounter. Remember that every instance of TPerson will have this same function running inside them. Just write accordingly. For example, you could encounter an instance GenderMale of False or True. So I wrote code to generate the message accordingly.  
  
So basically what it does is it will take information from itself (such as Name, Age etc.) and spit out a message according to them. So the message would be something like:  
  
'I am {Name}. I am {Age} year-old {Gender}'  
  
So think about you just wrote this class and sent it to a friend. He can just include it in his code and use it with any data in the world and it would reply the message perfectly. That's why OOP is fun. It is flexible and way more usable.  
  
Now let's test it. Declare some variable:  
  

var  
  // we declare our test 'persons'  
  John, Peter, Lily, Rachel: TPerson;  
  
We use some random names. Now just under the main begin block enter:  
  
  // we input the person information  
  with John do begin  
    Name:='John Hopkins';  
    Age:=14;  
    GenderMale:=True;  
  end;  
  
  with Peter do begin  
    Name:='Peter Parker';  
    Age:=19;  
    GenderMale:=True;  
  end;  
  
  with Lily do begin  
    Name:='Lily Allen';  
    Age:=23;  
    GenderMale:=False;  
  end;  
  
  with Rachel do begin  
    Name:='Rachel Adams';  
    Age:=27;  
    GenderMale:=False;  
  end;

  
We just entered some information for the instances. You could customize it as you see fit.  
  
Now we want our objects to talk!  
  

John.WhoRU();  
  
Readln; // to keep the dos window from not closing.

  
Now Run the project (F9 or Run -> Run).  
  
In the screen you will see "John" saying his identity. If you could [implement a TTS](http://inkoflife.blogspot.com/2013/03/let-your-software-speak.html) in this object, you will be amazed at what this simple code could do! (The objects would really speak through the speakers, instead of just writeln.)  
  
Now let's see the full code:  
  

program object\_persons;  
  
{$mode objfpc}{$H+}  
  
uses  
  {$IFDEF UNIX}{$IFDEF UseCThreads}  
  cthreads,  
  {$ENDIF}{$ENDIF}  
  Classes;  
  
type  
  
  { TPerson }  
  
  TPerson = object  
    public  
      Name: string;  
      GenderMale: Boolean;  
      Age: byte;  
      procedure WhoRU();  
  end;  
  
{ TPerson }  
  
// This procedure will let the 'person'  
// speak their identity (through writeln).  
// The actual magic happens here...  
procedure TPerson.WhoRU;  
var  
  Gender: string;  
begin  
  if GenderMale then  
    Gender := 'Male'  
  else  
    Gender := 'Female';  
  
  WriteLn('I am ', Name, '. I am ', Age, ' year-old ', Gender);  
end;  
  
var  
  // we declare our test 'persons'  
  John, Peter, Lily, Rachel: TPerson;  
  
begin  
  // we input the person information  
  with John do begin  
    Name:='John Hopkins';  
    Age:=14;  
    GenderMale:=True;  
  end;  
  
  with Peter do begin  
    Name:='Peter Parker';  
    Age:=19;  
    GenderMale:=True;  
  end;  
  
  with Lily do begin  
    Name:='Lily Allen';  
    Age:=23;  
    GenderMale:=False;  
  end;  
  
  with Rachel do begin  
    Name:='Rachel Adams';  
    Age:=27;  
    GenderMale:=False;  
  end;  
  
  // We just entered the information  
  // Now we want our object to talk!  
  // And we won't help the classes by writing messages  
  // ourselves.  
  // They'll just respond and will create the message  
  // themselves!  
  // That's the beauty of classes!  
  
  // Now, we ask John...  
  John.WhoRU();  
  
  // Try with Rachel, Lily and Peter as well  
  
  ReadLn;  
end.

  
If you want to experiment, go ahead! But remember "{$mode objfpc}" compiler directive is required to use OOP in your code. (See above code for usage.)  
  
If you have any questions, feel free to ask in the comments. ;-)  

### Download Sample Code ZIP

You can download the above tutorial project's source code example from [here](https://www.dropbox.com/s/pl0rjwmdliaedx8/ObjectPersons.zip?dl=1)  
Or [here](https://drive.google.com/uc?export=download&id=0B9WrDtlrEzlSbjFWa1M3dXpQOGM)  
Size: 70 KB  
The package contains compiled executable (EXE) file.