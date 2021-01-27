---
title: What are Classes and What They Can Do for You
tags:
  - Articles
  - Explanation
  - Sample Code
  - Tutorials
id: '40'
categories:
  - [Code Snippets]
date: 2014-07-22 15:06:00
authorId: adnan
thumbnail: what-are-classes-and-what-they-can-do/oop-thumb.jpg
---

Learn one of the most powerful features of any language. We will be talking about things that come alive! Plus, learn how to build a robot with the keystrokes!
<!-- more -->


Don't let anyone confuse you. The Classes I am talking about are not classes full of students. In the world of programming, classes have a different meaning. It is what that makes a language "Object oriented". Objects are "things" that can respond to your question. Think of them as a "thing" that has life!

For example, in some language you can ask a string - "What is your uppercase?" Then it would respond with the string's uppercase version. Some thing like that:

```
// we declare a string and give it a value
mystring = 'I am a string!'
// we ask mystring for its uppercase version
showmessage( mystring.uppercase )
// and it would respond by saying:
// I AM A STRING!
```

If mystring wasn't an object then it would be impossible, right? We could've manipulated the string using the uppercase function. But the string itself would not be able do anything by itself, would it? But in the Object oriented world the variables get a power of their own. So they can do things themselves without help from other functions such as `uppercase()`. That power makes them come alive.

Yes, Classes are a kind of variables that have life. Classes are a kind of Object and they have life. As weird as it may sound this is how the objects are. Let me explain, a Class or Object is such a variable that has other variables and functions inside it. It is like a group of variables and functions. You can ask questions to the variable through those functions. Those functions then answers your question by reading or analyzing the variables inside itself.


### Writing a Class, easy as pie

Okey, enough with the definitions. Let's forget the definition and suppose that classes are tiny little robots that you can build yourself. Cool, right! Robots can respond to people. If the robot-maker implements a function, it can lift up balls, walk and can even play music! Now with the power of classes, you can design robots too. You can design the robot with code, merely with the strokes of keyboard! Amazing! Then slowly and steadily, you can teach it different tricks. So as you get on with your coding, it will eventually stand up, walk and show tricks!

I think you are excited, right? So let's start building our first robot.

```pascal
type
    TRobot = class
       
    end;
```

Okey, so this is just the structure of our robot. In this stage, we are not seeing much. But we'll eventually build on top of it. We are just saying to our dear beloved computer that we want to create a robot (or a class). So under our type clause we create a class entry like this. Here, `TRobot` is our **class name**, then after the evident **equal sign** we write the word "**class**" to denote our entry of our robot as a class.

Now we would enhance the robot a little bit more, but don't worry. We'll do it very slowly:

```pascal
type
    TRobot = class
        private
            // stuff our robot has internally, inside its casing
        public
            // stuff everyone can see or access, outside its casing
    end;
```

Now we create a space in our code to decide what we keep inside the casing of our robot (`private`) and what we let others to see (`public`). If you invest millions of dollars in a robot research, then you don't want everybody to see everything. You want to hide some proprietary technology from the croud. So there is private clause to let you do that. But there are other exciting buttons or flashy lights outside the robot's casing that you want your crowd to see. For that you have `public` clause.

Both the `private` and `public` clauses can have procedures, functions and variables. We'll learn about them later on...

Now we make a place for the "on" and "off" switch. It is very important, right? Because if you turn on the robot, you need an off switch. Who knows if it starts to destroy the world and you can't stop it?! An off switch would be a life saver then! ;-) So let's add the on and off switch for our robot:

```pascal
type
    TRobot = class
        private
            // stuff our robot has internally
        public
            // stuff everyone can access
            constructor Create;  // the on switch
            destructor Destroy;  // and don't forget the off switch!
    end;
```

`Constructor` is a function type declaration that runs when we start working with our robot. It kind of acts like our On switch for our robot. After using this On switch we can start working with our robot. You often would see such a code:

```pascal
var
  bmp: TBitmap;
begin
  bmp = TBitmap.Create;
```

When the `TBitmap.Create` code is run, in reality the `constructor` function is called, which is our "on" switch.

`destructor` is also a function declaration that "destroys" the robot. Now, why did I say "destroys the robot?" Why should we destroy the cute little robot we just made with our own hands? Because when we would start using it, we will create a "copy" of the original robot and use it. The "copy" is created in the computer memory. After we are done, we would destroy the "copy". So, it is like a kill switch for the robot! But don't worry. It is just for the copy! We won't hurt our original Robot!

`destructor` function is very important, because sometimes some variables used inside the class stays in the memory even after the program closes. It would keep the memory occupied until the computer is restarted. You can't use that part of the memory until it is freed. This is known as **Memory Leak**. So, the `destructor` function ensures that we free the memory properly. We usually destroy the object through something like this:

```pascal
bmp.free;
```

Every class has a `free()` function. It runs the `destructor` function. Here we free the `bmp` class variable in the code above.

Why write so much? Why care?

Well, you might ask what's the use of Classes in our programming life? The answer is - it let's you spread the functions & variables in different units. They are seperated from the main unit but united again when needed.

You can always use a single unit for keeping all your functions and variables. But as your program gets bigger and more functions get added, it will soon start to look very un-managable to you. Worst case, you will forget which function does what. You will be asking yourself, "what did I name that function 2 years ago?", "What was the variable name again?" ... Navigating through your own code will feel like a hellish experience.

That's why classes were introduced -- to make huge codes managable. I've heard that Simula was the first programming language to implement **Object Oriented Programming (OOP)**. A more complete implementation was done in SmallTalk. I have seen many modern languages doing OOP. But I like the way Pascal classes are written. Pascal classes use natural English words. This way it is easier than other languages to understand existing code and extend further. For this, it still is one of the best implementations of OOP I have seen myself. Again you have the similar power that C has on the same language. That's a delight to have advantage in both ways!

OOP is liked by big organizations and professionals. There is no programming exam or interview where you can get away with not learning OOP. OOP is very important addition in modern programming languages. You can succeed in programming way quicker if you learn it.


### More "things" that are "things"!

There are 2 other concepts related to classes - Objects and Records. Don't worry about these two as you have already learned classes. Classes are more difficult than these two. So, these two won't intimidate you. So just read through, don't force yourself to memorize. Just relax. It's okey if you forget anything about them. You can always read later.


#### Objects

There are another variation of "classes". They are called "Objects". Objects are similar to classes but without **Polymorphism**. They can just hold data and functions, just like the classes. But objects cannot contain, for example, two procedures with the same name (in other words Polymorphism). Also there is difference in the way an object is handled in the memory.

The [Free Pasal wiki](http://wiki.freepascal.org/) has a [simple example of an object](http://wiki.freepascal.org/Object_Oriented_Programming_with_Free_Pascal_and_Lazarus#Object):

```pascal
Type
  Average = Object
    NumVal: Integer;
    Values: Array [1..200] of Real;
    Function Mean: Real; { calculates the average value of the array }
  End;
```

The `Mean` function calculates the average of the numbers inputted through `Values` variable. The `NumVal` can hold how many numbers are inputted. The `Mean` function just takes the values from itself (the object) and calculates the mean.

I use Object for simple structures. But classes are just enough for most of our job.


#### Records

Records are just a collection of variables. Just like the records in a database, you can store a simple table in an array of records. Think of it as classes without the functions and procedures.

When you don't need procedures and functions but still need to keep variables inside variables, record is your pal!

Here goes another [example from the Free Pascal wiki](http://wiki.lazarus.freepascal.org/Record):

```pascal
type
   Member = Record
              Firstname, Surname : string;
              Address: array [1..3] of string;
              Phone : Integer;
              Birthdate: TDateTime;
              PaidCurrentSubscription: Boolean
            End;
```

With having the above `record` declaration, you can just create an array of 10 records like this:

```pascal
var
  MyMembers: array [1..10] of Member;
```

Then fill those records like:

```pascal
with MyMembers[1] do begin
  Firstname := 'John';
  Surname := 'Doe';
  //...
  //...
end
with MyMembers[2] do begin
  Firstname := 'Jane';
  Surname := 'Fonda';
  //...
  //...
end
```


### Using Classes in Lazarus (An Example)


So enough talk. Let's make a robot/class to add two numbers. First we create the basic class structure:

```pascal
type
    TRobotThatAdds = class
        private
           
        public
            constructor Create;
            destructor Destroy;
    end;
```

May be you've noticed that I have added a "`T`" in front of the class name (`TRobotThatAdds`). I've also done it for other examples. I assure you that it is not a requirement. It is just to remind us that it is a `type` declaration.

So back to our robot. Now that we have our structure, we would need inputs. So, let's create input variables:

```pascal
type
    TRobotThatAdds = class
        private
           
        public
            number1: integer;
            number2: integer;
            constructor Create;
            destructor Destroy;
    end;
```

( Please do remember that variables need to be written BEFORE the functions and procedures. )

We have created 2 integers - `number1` and `number2`. These will contain the numbers that we want to add together with a function later on. Our robot will remember these two numbers in itself.

Now we need a function that can take these two numbers and spit out the sum of the two. So we write:

```pascal
type
    TRobotThatAdds = class
        private
           
        public
            number1: integer;
            number2: integer;
            constructor Create;
            destructor Destroy;
            function AddNumbers: integer;
    end;
```

Now, to put it in Lazarus -
1. Start [Lazarus](https://lazarus-ide.org)
2. Click **Project -> New Project -> Program -> OK**.
3. Now copy and paste the above code under the type clause. Click on any of the line of the class to move your cursor over to the class, then press **Ctrl+Shift+C**. Declaration for the all the functions will be created. Now enter the following code in the `AddNumbers` function:

```pascal
function TRobotThatAdds.AddNumbers: integer;
begin
  Result := number1 + number2;
end;
```

Leave the `Create` and `Destroy` functions as is.

4. Now type in the `var` clause (before the main `begin...end.` block) and enter:

```pascal
var
  MyRobot: TRobotThatAdds;
```

We will create an instance of our class in this variable. You will see that in a minute.

Now inside the `begin... end.` block enter the following code:

```pascal
begin
  // we "inject" the instance of the class in the variable
  MyRobot:=TRobotThatAdds.Create;

  // we give our class some input
  MyRobot.number1:=100;
  MyRobot.number2:=200;

  // MyRobot.AddNumbers would return us the sum of the
  // two numbers
  WriteLn('The sum of 100 and 200 is: ', MyRobot.AddNumbers);
  ReadLn;

  // we destroy the class instance or, we turn off the robot
  MyRobot.Free;
end.
```

Now press **F9** (or **Run -> Run**). You will see the result of the sum on the screen:

```
The sum of 100 and 200 is: 300
```

You can write code for summing up hundreds of number pairs by creating that many variables for the class. That's the beauty of classes. You can assign each individual classes their own data and they can do same things like their original copy. They are each like robots, doing stuff as you told them to do!


#### Inheritance

Inheritance is an interesting thing of the OOP. If you want to take the above class and add something to it and name it something different, go ahead! Inheritance will be your friend. And the cool part is you won't have to write the whole class again. Syntax would be:

```pascal
type
  TMyNewName = class (TMyOldClass)
    ...
    ...
  end;
```

The syntax is similar to Class'. We just add a parentheses. Inside parentheses, we write the name of the class which we want to make a copy and enhance.

For example, if we want to make a class that divides 2 numbers, then we can extend our already written `TRobotThatAdds` class like this:

```pascal
type
  TRobotThatDivides = class (TRobotThatAdds)
    private
       
    public
        function DivideNumbers: integer;
  end;
 
  function TRobotThatDivides.DivideNumbers: integer;
  begin
    Result := number1 / number2;
  end;
```

We don't need to write the variables again, or the constructors and destructors. When we use inheritance, we make a "virtual" copy of the base class. Suppose that all the contents that the base class has is already automatically copied to our new class. We just need to write what we want to add.

Now, with the above example we can use the class to divide two numbers:

```pascal
var  MyRobot: TRobotThatDivides;
begin

  MyRobot:=TRobotThatDivides.Create;


  MyRobot.number1:=20;
  MyRobot.number2:=5;

  WriteLn('Dividing 20 by 5 would make: ', MyRobot.DivideNumbers);
  // returns  Dividing 20 by 5 would make: 4
  ReadLn;

  MyRobot.Free;
end.
```

The beauty of inheritance is that we can give a new meaning to the class, change its purpose as we did here and improve it more to add features -- all without copying the whole class.

A popular example of inheritance is perhaps the `TForm1` class that we usually see when we create a new Application project in Lazarus. A definition like the following is created in the code window:

```pascal
type
  TForm1 = class(TForm)
  private
    { private declarations }
  public
    { public declarations }
  end;
```

The `TForm` class has all the properties and functions that a form might need. But we inherit the `TForm` class and give it a new name (`TForm1`) and add components in it that are specific to our design of the form.

When you add components to the form, you would notice that the name of the object and type is added in the `TForm1` class declaration.

```pascal
  TForm1 = class(TForm)
    Button1: TButton;
  private
  ...
  ...
  end;
```

Even when you create an event procedure (such as `OnClick`, `OnMouseOver`) it is added to our `TForm1` class.

```pascal
  TForm1 = class(TForm)
    Button1: TButton;
    procedure Button1Click(Sender: TObject);
  private
  ...
  ...
  end;
```

So basically, we take a generic - empty form, add components and events to it, and make it look and work like our form. This is how inheritance helps us under the hood. This relieves us from writing the whole form class in every project that we create. It seems that classes have helped you since you did the Hello World example! Yes, Classes are helping you from the beginning of your learning to code.


### Some Terminology for OOP

What you've learned so far is the basics to get you started on writing your very first classes. As you grow, you will feel the need to learn more and you will be automatically searching resources to keep learning. Classes are that interesting. There's some terminology you need to know in order to better unsderstand the OOP:

**Encapsulation**
Encapsulation means confinement. We keep our variables and routines (functions+procedures) inside one class definition. We group them together in an object. This grouping into a single object is refered to as Encapsulation.

**Data Abstraction**
Data Abstraction generally means Data Hiding. Sometimes our underlying way of working depends on some variables that are private. Private variables in a class can be declared by writing them under the `private` clause, like this:

```pascal
type
  someclass = class
    private
      MyPrivateSomething: integer;
      MyPassword: string;
    public
      ...
      ...
  end;
```

Such an option is great when you want to have control over what the user should be able to access and what not. Especially when you are programming in a team and you should point out what should be secret and what not.

**Polymorphism**
"Poly" means "many" and "morph" means "changing into something". So Polymorph means "changing into many". The ability to Polymorph is called Polymorphism. In class, a function can be written with the same name, multiple times but with different parameters. When the same function is available with different parameters is referred to as Polymorphism. (In a sense that it is changing its parameters for every instance.)

**And of course, Inheritance**
As we have discussed earlier, it refers to extending a class without really copying the whole class definition.

**Methods**
Methods are the little functions and procedures that are accessible from the "outside" of class. (By outside I mean from the outside of the class declaration, when we use it in our code.) Those are called methods because they follow some flow of steps to accomplish something. Now, we use functions and procedures for the same reason. Meaning they also follow some steps to accomplish something. But the inventors of OOP has named it "method". So there's nothing much you can do except call them "methods".

**Instance Variables**
Instance variables are the variables which we can access from the outside of the class. Remember `number1` and `number2` in our `TRobotThatAdds`? They are Instance variables.



#### So, what we've learned so far:

- Classes are variables that have variables inside them. Classes also have procedures/functions to work with those variables.
- Classes are called objects because they are sort of like a package of variables and functions.
- Classes help us do Object Oriented Programming (or OOP).
- Classes help the programmer to logically allocate huge code into different units.
- Classes make the code more managable. Error detection and debugging becomes easier. Classes can even be used later in other projects. That's why professionals like it so much.
- Classes are declared under type clause.
- Classes contain constructors and destructors.
- Classes can inherit another class. This is called inheritance. In this case, we can extend the class without copying the whole class. We can name it as we like and add functions to it.
- There are 2 other concepts in OOP in Pascal: Objects and Records. They are similar to Classes. They both contain variables.
- Objects don't apply polymorphism (compared to classes). That means we cannot declare a function with same name. It is simpler than classes.
- Records don't allow procedures / functions (compared to objects). It is best for data records.

**Ref:**
[http://www.tutorialspoint.com/pascal/pascal\_object\_oriented.htm](http://www.tutorialspoint.com/pascal/pascal_object_oriented.htm)
[http://www.tutorialspoint.com/pascal/pascal\_classes.htm](http://www.tutorialspoint.com/pascal/pascal_classes.htm)
[http://www.tutorialspoint.com/pascal/pascal\_records.htm](http://www.tutorialspoint.com/pascal/pascal_records.htm)
[http://wiki.freepascal.org/Programming\_Using\_Objects](http://wiki.freepascal.org/Programming_Using_Objects)
[http://wiki.freepascal.org/Object\_Oriented\_Programming\_with\_Free\_Pascal\_and\_Lazarus](http://wiki.freepascal.org/Object_Oriented_Programming_with_Free_Pascal_and_Lazarus)
[http://wiki.lazarus.freepascal.org/Record](http://wiki.lazarus.freepascal.org/Record)
