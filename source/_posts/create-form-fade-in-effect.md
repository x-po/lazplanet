---
title: Create a Form Fade in Effect
tags:
  - animation
  - Articles
  - Code Snippets
  - effect
  - Form Controls
  - Sample Code
  - Tutorials
url: 91.html
id: 91
categories:
  - Uncategorized
date: 2013-05-11 19:21:00
---

![](http://4.bp.blogspot.com/-zAs6tEuLxfs/UY6Z6XMniBI/AAAAAAAAAvY/5hSRPFRojn4/s1600/Form-alpha-blending.gif)Forms are a bit boring sometimes, right? Spice it a little bit with a Fade In animation effect on startup. That boring square area of form will amuse the users a bit more.  
  
  
  
Effects always amuse us. Even the slight fade in effect in Windows XP menus used to give us a joyous feeling. Things on the screen appear and disappear all the time. There is no variation. It looks boring. The Web 2.0 is getting a hang of effects. And also there was also Flash used once in the webpages which is becoming extinct due to the popularity of HTML5's browser based technology. Flash brought out many eye catching effects in websites and advertisements. Effects on the screen have also made iPhone and MacOS successful.  
  

### How Form Alpha Blending works in Lazarus

There are [three terms](http://melander.dk/articles/alphasplash/) you should know:  

> [**Transparent**](http://dictionary.reference.com/search?q=transparent)  
>     **trans·par·ent** \[trans-**pair**\-uh nt, -**par**\-\]  
>     Capable of transmitting light so that objects or images can be seen as if there were no intervening material.  
>     In other words; Transparent means invisible.  
> [**Translucent**](http://dictionary.reference.com/browse/translucent)  
>     **trans·lu·cent** \[trans-**loo**\-suh nt, tranz-\]  
>     Permitting light to pass through but diffusing it so that persons, objects, etc., on the opposite side are not clearly visible.  
>     In other words: Translucent means partially transparent. Semi transparent is the same as translucent.  
> [**Opaque**](http://dictionary.reference.com/search?q=opaque)  
>     **o·paque** \[oh-**peyk**\]  
>     Impenetrable by light; neither transparent nor translucent.  
>     In other words; Opaque is the opposite of transparent.

  
Since the version (probably) 0.9.30, an AlphaBlend property is added to TForm's properties. There used to be involved a lot of lines of codes to apply alpha blending to form. This AlphaBlending is the above Translucent term. It means _slightly_ transparent, not totally. For example, Windows 7/8 taskbar is translucent. That means, you can see the wallpaper through the taskbar but in a faded form, as you can see what's behind a fog but partially.  
  
![](http://1.bp.blogspot.com/-pj0UUO7KPUE/UY6HmLWGtPI/AAAAAAAAAu8/GHRbuWpioaQ/s1600/translucency-example.jpg)  
![](http://1.bp.blogspot.com/-yfFe6X5LQvQ/UY6VVho3mTI/AAAAAAAAAvM/-xeZU52UMEQ/s1600/form-fade-in-effect-1.gif)  
  
We have used "Show Again" button that's why we used the Tbutton's OnClick procedure. You can use separate procedure and no button to produce same results.  
  

### Download Sample Code ZIP

You can download the example source code from here: [http://db.tt/DKJZ6LSb](http://db.tt/DKJZ6LSb)  
Or here: [http://bit.ly/ZQmIs8](http://bit.ly/ZQmIs8)  
Size: 518 KB  
The package contains compiled executable EXE file.