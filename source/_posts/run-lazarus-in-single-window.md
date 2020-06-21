---
title: How to Make Lazarus run in a Single Window
tags:
  - docking
  - IDE
  - Interface
  - single window
  - Tutorials
url: 118.html
id: 118
categories:
  - Uncategorized
date: 2013-03-23 17:10:00
---

![](http://3.bp.blogspot.com/-yIa_Wn9s3iM/UU3k4f-G3EI/AAAAAAAAAUM/r7KqeW86RNs/s1600/single-window.gif)This tutorial shows you how to make lazarus run with just one window. It is a good docking solution which will be integrated in Lazarus in future, when it becomes stable.  
  
  
Lazarus is a good piece of software. It can create cross platform applications, no sweat! It can also convert Delphi projects and help them run on Mac and Linux machines. But let's face it, it has windows running on over the screen. It is sometimes difficult to manage all the cluttered windows and do the actual coding. In this scenerio, you might choose to use single window interface. And the good news is, there is a way to turn those messy windows into a disciplined interface.  
  
Take a look at how Lazarus looks normally:  
  
[![](http://3.bp.blogspot.com/-gMKy4_OFDWA/UU3guU3P2II/AAAAAAAAAUI/zypJN6gZi74/s320/13.gif)](http://3.bp.blogspot.com/-gMKy4_OFDWA/UU3guU3P2II/AAAAAAAAAUI/zypJN6gZi74/s1600/13.gif)  
  
A development environment, or a random collection of windows?!  
  
We will use **KZDesktop** package to make lazarus run in a single window. Please keep in mind that it is in a beta state. It may work properly as expected. So if you want to keep it safe, do not use it. (But I am using it and have not yet faced any crash.)  
  
If you want a stable solution, then choose **Anchor Docking**. It is available with the default installation of Lazarus. ( EDIT: When I wrote this article I didn't know much about Anchor Docking. Now that know I have added instructions on how to use it...) **We'll see the Anchor Docking solution too, at the end.**   
  
I heard that when it is going to become stable, it would be added to Lazarus as a feature. Here's how you can enjoy Lazarus in a single window:  

### 1.Download KZDesktop

Go here to download the package:  
[http://sourceforge.net/projects/kzdesktop/files/](http://sourceforge.net/projects/kzdesktop/files/)  
or here for a direct link: [http://sourceforge.net/projects/kzdesktop/files/?source=navbar](http://sourceforge.net/projects/kzdesktop/files/?source=navbar)  
  
![](http://3.bp.blogspot.com/-hKXOF6YHuXY/UU87a2p7D_I/AAAAAAAAAWs/hKvdOapW3LA/s1600/01.gif)Extract the downloaded package in C:lazaruscomponents (Assuming that you have [installed](http://lazplanet.blogspot.com/2013/03/how-to-install-lazarus.html) Lazarus in C:lazarus directory)  

### 2.Prepare Lazarus

Start Lazarus.  
  
Then go to Package -> Open package file (.lpk)  
  
![](http://1.bp.blogspot.com/-3uFmG6bgkak/UU87fkZMw1I/AAAAAAAAAW0/-TbRccWYvNY/s1600/02.gif)Then Open the C:lazaruscomponentskzdesktop\_beta01kzdesktop\_ide.lpk  
![](http://1.bp.blogspot.com/-hY-XbhwYe_4/UU88Sh6OFdI/AAAAAAAAAW8/RcqgHhSOeOU/s1600/03.gif)  
  
Click compile. It will take some time to compile.  
![](http://1.bp.blogspot.com/-RuYK5-NmEYs/UU887AzwfcI/AAAAAAAAAXE/9AbyGsGpNoU/s1600/04.gif)  
  
Click Use -> Install. Press yes on a messagebox that appears. It will rebuild the whole Lazarus IDE. It is very interesting as Lazarus will re-create Lazarus itself! After rebuilding, Lazarus will restart.  
![](http://2.bp.blogspot.com/-F1UrTyTyaAM/UU89Wn_KADI/AAAAAAAAAXM/GkeJfIN7Y6E/s1600/05.gif)![](http://1.bp.blogspot.com/-b0QzaWZ8-_8/UU8-DoRshEI/AAAAAAAAAXU/xpbbXaBtBa8/s1600/06.gif)  

### 3.Use KZDesktop

  
Click **Tools -> KZ Desktop-Start**. Press OK.  
![](http://2.bp.blogspot.com/-HP14Q6pm13o/UU8-5wY2ubI/AAAAAAAAAXc/Txsm8lIA3_o/s1600/07.gif)![](http://4.bp.blogspot.com/-IIjxCWiz9FE/UU8_GsYRzmI/AAAAAAAAAXk/d_OO0d7IQJE/s1600/08.gif)  
  
Then Click **File -> Restart** and voila! It is in single window!  
  
Now look at your Lazarus with proud as it puts the windows, where they belong! ... In a single window!!  
  
![](http://3.bp.blogspot.com/-1CD3_JvuX9s/UU8_ygc0CSI/AAAAAAAAAXs/3a7aq9SBHiI/s1600/09.gif)  
  
![](http://1.bp.blogspot.com/-0H6BmsfW-Us/UU4RFy8yKII/AAAAAAAAAWc/u8a9gyNBOqM/s1600/Lazar.gif)

### Disabling KZDesktop

![](http://2.bp.blogspot.com/-Hq-SUyOMIgw/UniaNF_FaXI/AAAAAAAABUI/ERX6LBNbXQc/s1600/lazarus.gif)

Not bad, right? To some extent, I like it better than kzDesktop. Especially it doesn't mess up the Alt+Tab behavior. And the form designer is not docked in such a way that I have to use arrows to scroll it. Somehow it feels more natural to me. ( It's just my opinion. )  

  
To uninstall Anchor Docking then click Package -> Install/Uninstall Package. Then select anchordockingdsgn and click Uninstall Selected.  
  

### Conclusion

In this article we learned about 2 solutions for making Lazarus as single window. kzDesktop is in beta, so it makes it less reliable. But if you are strictly looking for a single window solution, even with the form designer, then kzDesktop is your solution. Beta 2 of kzDesktop has a better scrolling of the form by dragging a rectangle view area and not with some arrow buttons.  
  
If you are looking for a stable, reliable option, go for Anchor Docking.  
  
If you are still unsure, then try both of them then choose the best one that suits your needs.