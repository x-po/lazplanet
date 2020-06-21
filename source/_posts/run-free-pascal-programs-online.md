---
title: Run Free Pascal programs without installing compiler (online)
tags:
  - Compiler
  - Console
  - HTML Web
  - online
  - Tutorials
url: 54.html
id: 54
categories:
  - Uncategorized
date: 2014-02-13 12:06:00
---

![](http://4.bp.blogspot.com/-CztlK8qlN6g/Uvy0tvnJ_sI/AAAAAAAABcs/k_JAFWoxqIs/s1600/fpc-compiler-online.jpg)Today we explore a painless online solution for running your Free Pascal programs online, without installing and configuring a compiler yourself! Neat!  
  
  

### Introduction

  
Very often we are at a public PC where we don't have a [compiler](http://en.wikipedia.org/wiki/Compiler) installed. And may be your friend is asking to test a bit of code that he wants you to debug. Installing a compiler may not be an option at times. That's when an online compiler comes in handy. Presenting [IdeOne.com](http://ideone.com/).  
  
![](http://1.bp.blogspot.com/-y2jX0HV1iKQ/UvyjiIfVgyI/AAAAAAAABbU/Tf62SO2ItsA/s1600/ideone-online-compiler-for-fpc.gif)  
  
With this website you can **compile your code online without the need of any special hardware resources and without a compiler** in your computer. With an online compiler you can compile your Free Pascal code from **any platform/OS** in any location of the world, wherever you can run a web browser. You can even run your code from a mobile device, an **iPhone** or an **Android** device and what not -- the sky is the limit.  
  
Besides Free Pascal it supports a wide variety of languages, such as C, C#, C++, JAVA, Python, PHP, Javascript, ADA, FORTRAN, COBOL, Lua, Perl, Scala, SQL and [many more](http://ideone.com/faq).  
  
The basic concept behind an online compiler is that a compiler program is installed and setup at a server. You can go to the online compiler's website, enter your code and run it. The code will be run with the remote compiler and you can see the result in your browser. You can optionally specify input for the program to test it with your program.  
  
In this little article we will discuss a freely available online compiler - [ideone.com](http://ideone.com/). It has the ability to use Free Pascal compiler and a bunch of others to compile your code online, without even touching any compiler yourself! Each code you execute/run is saved in a unique URL, so that you can share your code, the inputs and the results with anyone you please.  
  

### Registering

  
You can also sign up so that you can keep track of all your codes in that website. Plus, logging in gives you better editing options (such as editing the visibility of the code). Registering is not required to run your code, but I recommend you register there. It'll definitely make your life easier.  
  
  
  

### Execute a sample code

  
We will try this online compiler to compile a test code [Adding 2 numbers](http://lazplanet.blogspot.com/2013/03/how-to-add-two-numbers.html). You will see in a minute how easy it is to run and test your Free Pascal programs online.  
  
First, go to [http://www.ideone.com](http://www.ideone.com/)  
(Optionally, you can register and login to keep track of all your codes, but its not required.)  
  
Now you will see a text area showing up for entering code. It is set as Java by default. We will change it to Free Pascal. Click on the Choose Language dropdown menu and select Pascal (fpc).  
  
![](http://2.bp.blogspot.com/-SR5GElzVXz0/UvyojEfQNQI/AAAAAAAABbk/zLNh8ughRX4/s1600/how-to-run-free-pascal-online-1.gif)  
You can now see a template for free pascal in the text box.  
  
![](http://1.bp.blogspot.com/-3Mr8zRIgIJQ/UvypWGtg6EI/AAAAAAAABbs/AKjcYBCwoFs/s1600/how-to-run-free-pascal-online-2.gif)  
Now copy the code from the [Add 2 numbers](http://lazplanet.blogspot.com/2013/03/how-to-add-two-numbers.html) article, or the code below:  
  

var  
  num1, num2: Integer;  
begin  
  // A simple program for adding two numbers.  
   
  WriteLn('This program will add two numbers');  
  WriteLn();  
   
  WriteLn('Enter the first number:');  
  ReadLn(num1);  
   
  WriteLn('Enter the second number');  
  ReadLn(num2);  
   
  WriteLn('The result is: ', num1 + num2);  
   
  WriteLn('Press ENTER to end.');  
  ReadLn();  
end.  

  
You can add the **program addprog;** line. But it seems that it runs fine without the line.  
  
In this situation, we could run the code straight away. But it couldn't add the numbers, well, if there is no numbers to add. We have used ReadLn() in our code, so we need to set some input for testing the program.  
  
So, we open the StdIn input box through the button.  
  
![](http://1.bp.blogspot.com/-dTYRKjpqUo8/Uvyr5HXnkDI/AAAAAAAABb4/astJqUmVdrs/s1600/how-to-run-free-pascal-online-3.gif)  
Now we have an input box for writing inputs. Go through the code and find ReadLn (or Read) lines. Done? Now check what the first ReadLn wants. See the previous line, it says- "Enter the first number:". So enter a number in the first line of stdin. For example, 10  
  
![](http://4.bp.blogspot.com/-ywkCTGG_eQI/UvytSoUrHgI/AAAAAAAABcE/FB8Jeg7UVW8/s1600/how-to-run-free-pascal-online-4.gif)  
Now go to the next ReadLn in the above code. The WriteLn before the line says- "Enter the second number:". So you enter another number in the stdin field. For example, 5  
  
![](http://2.bp.blogspot.com/-PzMueA7F1DA/UvyuhpVILXI/AAAAAAAABcM/fnyfhpCsdJU/s1600/how-to-run-free-pascal-online-5.gif)  
You can set the visibility of the code with these buttons:  
  
![](http://2.bp.blogspot.com/-8HsTDAqYVsc/Uvyu9R__ApI/AAAAAAAABcU/YU0U9MWUuU0/s1600/how-to-run-free-pascal-online-6.gif)  
According to the [FAQ](http://ideone.com/faq) of ideone.com:  

> Visibility determines how the program is visible on ideone.com and who can access it. Possible values are:  
>   
>     **public** \- everyone has access to the code and it is listed at the recent codes page;  
>     **secret** \- everyone has access to the code and it is not listed at the recent codes page;  
>     **private** \- only author of the code has access to it and it is not listed at the recent codes page. To use this level of visibility **you need to be logged in**.

As you can see, you have greater option for customizing the visibility of your precious code if you are logged in.  
  
Now, click on the "Run" button (or alternatively you can press Ctrl+E). Eventually, in a few seconds, you will see your code being executed.  
  
![](http://2.bp.blogspot.com/-wSLHhdYdsN0/Uvyw5IB83nI/AAAAAAAABcg/t5P0Rwr-4vE/s1600/how-to-run-free-pascal-online-8.gif)  
See the output shown with a red arrow in the above image.  
  
I have made the code public. [Click here to see it in action!](http://ideone.com/04UpJs)  
You can also fork the code from the above page if you want to improve it.  
  
In conclusion, it is not a full-fledged compiler. It has its limitations. It can process codes+input+output of total 64 kb. And code compilation should not exceed 10 seconds and execution time can be maximum 15 seconds and can only use 256 mb memory. If your code is in that limit, you can use this option to compile your code with this online compiler.