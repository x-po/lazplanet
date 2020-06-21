---
title: >-
  How to install Castle Game Engine in Lazarus (Installation Guide with
  Screenshots)
tags:
  - 3D Graphics
  - Articles
  - install
  - Screen Graphics
  - Tutorials
url: 85.html
id: 85
categories:
  - Uncategorized
date: 2013-05-17 18:21:00
---

![](http://1.bp.blogspot.com/-ebE9X7D8OJQ/UZZtPGh-W3I/AAAAAAAAA0o/CpTjgQ7MlEo/s1600/lazarus-and-castle-3d.jpg)Castle is a mouth watering and exciting 3D Game Engine for Lazarus. It can show, modify, animate X3D, Collada, 3DS, VRML, OBJ and more 3D formats. Start your 3D programing life, now...!  
  
  

### Introduction

[Castle Game Engine](http://castle-engine.sourceforge.net/) is a 3D game engine for [Lazarus](http://www.lazarus.freepascal.org/) having a range of features to create 3D games. It was formerly known as Kambi VRML Game Engine, apparently because the game engine is created by Michalis Kamburelis. Although it is a game engine, you can use it for anything 3D. (Duh...!) Castle is a cross platform game engine for your favorite cross platform IDE.  
  
![](http://2.bp.blogspot.com/-O5lgEh6_zBM/UZZuVYSFZDI/AAAAAAAAA00/XTkdjdReqzI/s1600/castle_screen_demo_1.jpg)![](http://1.bp.blogspot.com/-D0F2y_Ef_pg/UZZuq5N1IJI/AAAAAAAAA08/gNvgZrFJOU8/s1600/castle_sunset.jpg)![](http://2.bp.blogspot.com/-AqOWn7gfQtw/UZZkuO0-KxI/AAAAAAAAAzU/5UgCNDf4hrQ/s1600/copy-to-components.gif)  
  
Remember, Lazarus will need these files even after the installation. That's why I prefer to install it inside the Lazarus directory, so I don't accidentally delete or move those files to other directory.  
  

### Step-3: Install the Engine

This seems to be the hardest part. But trust me, I am with you and you will be able to install it just fine. And there will be screenshots to accompany you. Click any screen shot to see it in larger size.  
  
![](http://3.bp.blogspot.com/-0PdueFCCvKI/UZZk4TMSUYI/AAAAAAAAAzc/VcEcuLHqzFA/s1600/select-3-lpks.gif)  
  
1\. Start Lazarus.  
2\. Go to **Package -> Open package file (.lpk)**.  
3\. Select the 3 files: castle\_base.lpk, castle\_components.lpk, castle\_window.lpk and click open. Now 3 windows will appear one over the other. Move the windows to see each of the windows.  
  
![](http://3.bp.blogspot.com/-B4H6BncfOps/UZZlMU7s2dI/AAAAAAAAAzk/BFSdIBV2BTA/s1600/3-package-windows.gif)  
  
[The Castle website says](http://castle-engine.sourceforge.net/tutorial_install.php) to "Compile" the 3 packages. But [due to a problem](http://www.lazarus.freepascal.org/index.php?topic=10984.0) I recommend a different approach.  
  
\[\[ **UPDATE:** As you know that Lazarus 1.0.10 has been released recently and the bug that created the above problem got squashed! So if you are using Lazarus 1.0.10 you can just use "Compile" instead of Recompile Clean. (Thanks to Michalis Kamburelis for pointing out this fact.) \]\]  
  
![](http://1.bp.blogspot.com/-hov6iZMOF5I/UZZlfq19GlI/AAAAAAAAAzs/xcAQVag_l24/s1600/recompile-clean.gif)  
You will see in the messages window that the compiling package xyz is completed. Do this for **all the 3 windows.**  
  
![](http://4.bp.blogspot.com/-Z6wJpaMIong/UZZl3vM--AI/AAAAAAAAAz0/rfJ60GLk3Qg/s1600/compiling-finished.gif)  
  
  
5\. Now in the window for **castle\_components**, click **Use** and then click **Install**. **Do this for only castle\_components window** and not for the other 2 windows.  
  
![](http://3.bp.blogspot.com/-hYITuJNyjgY/UZZmZwTuEvI/AAAAAAAAAz8/D8wUWyxxBUk/s1600/lpk_install.gif)  
Click OK on the message that comes in the screen.  
  
![](http://4.bp.blogspot.com/-HaIMi-nTuQk/UZZmjeWQLZI/AAAAAAAAA0E/hTX7fmRPOLA/s1600/install-message.gif)  
Click Yes in the next message.  
  
![](http://2.bp.blogspot.com/-sT-XSOKLff0/UZZmx64S4RI/AAAAAAAAA0M/lP6InD6_wcE/s1600/install-message2.gif)  
Now Lazarus will recompile and rebuild itself. After the rebuild process Lazarus will restart itself. Check out the components' tabs. You will see a new tab in the toolbar named "Castle" (and another one named "OpenGL").  
  
![](http://3.bp.blogspot.com/-_gdNNelLnNI/UZZn2NcF6VI/AAAAAAAAA0Y/XuMyR-Hq41A/s1600/castle-component-toolbar.gif)  
  

### Step-4: Use Lazarus with Castle

  
Now that you have installed Castle, it is time to test things. Start Lazarus. You will see a new tab in the toolbar called "Castle". If you see that, then you have installed Castle successfully. You can use the components in the Castle tab for building programs with 3D objects in Lazarus.  
  
Now we will test an example program. We will compile a sample project that is given in the Castle source package.  
  
1\. Go to **C:lazaruscomponentscastle\_game\_engineexampleslazarusmodel\_3d\_viewer**. (Or if you have extracted elsewhere then **castle\_game\_engineexampleslazarusmodel\_3d\_viewer**)  
  
2\. **Open the .lpi file.** When you have opened the file, you will notice a strange thing. The Lazarus splash screen does not disappear after loading the project! This only occurs to projects using Castle and does not affect other projects. So don't worry. Simply click the splash screen and press Alt+F4 and it will disappear.  
  
3\. Click **Run-> Build** menu and the project will be compiled and executables will be built. Now run the EXE file that has been created in the project directory. Open any 3D file that is supported, and you will be able to see it in the 3D area/viewport.  
  
You will notice that the generated EXE is so big (around 37 mb). You can [reduce EXE file size by following a tutorial article here](http://lazplanet.blogspot.com/2013/03/how-to-reduce-exe-file-size-of-your.html) . By following the tutorial you can reduce size with 2 clicks, or even none.  
  
There you go! Your 3D Software Development Environment is ready! You can look at the examples in the [Castle sourceforge project files](http://sourceforge.net/projects/castle-engine/files/) to have a better understanding of the engine.