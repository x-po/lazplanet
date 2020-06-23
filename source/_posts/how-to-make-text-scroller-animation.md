---
title: How to Make a Text Scroller Animation
tags:
  - animation
  - Articles
  - Explanation
  - Form Controls
  - Text Operation
  - Tutorials
url: 24.html
id: 24
categories:
  - Uncategorized
date: 2016-04-25 08:11:00
---

[![](how-to-make-text-scroller-animation/text-scroller-thumb.jpg)](how-to-make-text-scroller-animation/text-scroller-thumb.jpg)

At the end of a movie or in our application, we could use some text scrolling fun! But how to do that? Let's see...  
  
The text scroller in the Lazarus About dialog box made me think of the days when I used to code text scrollers all day in VB6! Component based, owner drawn, timer based, loop based and all that stuff! Inspired and fired up I was hitting keystrokes and writing this article at the middle of the night.  
  
So yeah!  
Let's scroll some text!  
  

### Tutorial

  
Start [Lazarus](http://www.lazarus-ide.org/).  
  
Create a new Application project (Project->New Project->Application->OK).  
  
Draw a TPanel. Make it a bit big to fit in the form... as you wish!  
  
Inside that TPanel draw a TLabel. (To make sure it is created inside the TPanel, start the drawing from inside the area of the TPanel. Or if you misplaced it, just Cut the TLabel, right click the TPanel and click Paste.)  
  
With the TLabel selected, click the \[...\] button beside the "Anchor" property and go to "Left anchoring" part of the window. Select the Panel1 that you just created as the Sibling. Then on the bottom of the drop down you will see 3 buttons. Click the button in the right side (that says "Center control horizontally..." when you move your mouse over it).  
  
This will center the Label, based on Panel1. This will keep its center position even if you resize the Panel, so it will be a piece of cake to move around and play with it later on! Sweet!  
  
Now, with the Label still selected, change the "Alignment" (not "Align") property to taCenter. Now edit the Caption property value to any text you desire, but try to make it long and remember that you can enter new lines!  
  
Now our form should look something like this:  
  

[![](http://localhost/wp-lazplanet/wp-content/uploads/2016/04/Text-scroller-form-design-lazarus-1-300x253.gif)](how-to-make-text-scroller-animation/Text-scroller-form-design-lazarus-1.gif)

  
  
Now our items are almost ready! Now drop a TTimer (from "System" tab). Set its Interval as 60 (or any value to control the speed). Double click, and enter the code:  
  

procedure TForm1.Timer1Timer(Sender: TObject);  
begin  
  if label1.BoundsRect.Bottom <= 0 then begin //reset position  
    Label1.Top := Panel1.Height;  
  end else begin // scroooolll!  
    Label1.Top := Label1.Top - 1;  
  end;  
end;  

  
  
You can change the 1 in the code "Label1.Top - 1". It will increase the speed, but it is entirely up to you.  
  
We used "label1.BoundsRect.Bottom" because it is simpler to look at! If you want to avoid it, you can write it like this:  

  if label1.Top + label1.Height <= 0 then begin  
    //...  

  
Or may be like this:  

  if label1.Top <= -(label1.Height) then begin  
    //...  

  
Now move the label a bit to the bottom so that it appears to be rising from the bottom. My form layout now looks something like this...  
  

[![](http://localhost/wp-lazplanet/wp-content/uploads/2016/04/Text-scroller-form-design-lazarus-2-300x253.gif)](how-to-make-text-scroller-animation/Text-scroller-form-design-lazarus-2.gif)

  
  
Now Run the Project (F9 or Run -> Run).  
  

[![](http://localhost/wp-lazplanet/wp-content/uploads/2016/04/Text-scroller-lazarus-simple-1-300x253.gif)](how-to-make-text-scroller-animation/Text-scroller-lazarus-simple-1.gif)

  
  
Now you'll have a scrolling text on your screen! Voila!  
  
  

### Horizontal Text Scrolling

  
Same way you can make a horizontal scroller. Just change the "Anchors" property accordingly (Top anchoring, Sibling, Center control vertically...). Then change the code, like this:  
  

procedure TForm1.Timer1Timer(Sender: TObject);  
begin  
  if label1.BoundsRect.Right <= 0 then begin  
    Label1.Left := Panel1.Width;  
  end else begin  
    Label1.Left := Label1.Left - 1;  
  end;  
end;

  

### Download Sample Code ZIP

You can download the above example tutorial project's source code from [here](https://db.tt/DEgWwwBm).  
Or [here](https://drive.google.com/uc?export=download&id=0B9WrDtlrEzlSeVlDX3NHZFhDWXc).  
Size: 598KB  
The package contains compiled executable EXE file.