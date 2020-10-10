---
title: How to install Lazarus
tags:
  - Articles
id: '118'
categories:
  - - true
date: 2013-03-21 00:35:00
---

![](how-to-install-lazarus/windows-mac-os-linux-logo1.jpg)

Lazarus is a cross-platform IDE. It runs on Windows, Ubuntu/Linux, Mac OS and BSD Operating systems.  
  
Below is a guide of how to install Lazarus in Windows and Ubuntu (Linux).
<!-- more -->
  
  

### Installing Lazarus in Windows

Installing Lazarus in Windows is the easiest. Follow these steps below:

  

#### Step-1: Download Lazarus for Windows

[Download Lazarus from here (32 bit)](http://sourceforge.net/projects/lazarus/files/Lazarus%20Windows%2032%20bits/). It is normally 32 bit version that works for all. But If you have a 64 Bit OS then [Go here](http://sourceforge.net/projects/lazarus/files/Lazarus%20Windows%2064%20bits/). If you are blocked from SourceForge.net then try [here](http://mirrors.iwi.me/lazarus/), [here](ftp://freepascal.dfmk.hu/pub/lazarus/releases/), or [here](http://michael-ep3.physik.uni-halle.de/Lazarus/releases/).

  

Click on the Latest version folder directory. For example, the current version while writing this article is [1.0.8](http://www.lazarus.freepascal.org/index.php/topic,20297.0.html). So we are going to "Lazarus 1.0.8" directory.

  

![](how-to-install-lazarus/download-lazarus.gif)

  
  

Now click on the lazarus-x.x.x-fpc-x-win32.exe or ...win64.exe (x is the version number) link. Be careful not to download the winCE version.

  

#### Step-2: Install

Double click the downloaded .exe file and install it like any other software. Here's a more detailed view:  
  

![](how-to-install-lazarus/01.gif)

![](how-to-install-lazarus/02.gif)

  

![](how-to-install-lazarus/03.gif)

  

![](how-to-install-lazarus/04.gif)

  
  
Notice that Lazarus is installed in C:Lazarus directory. You can choose any other drives if you want (like D:Lazarus) but you should not install it in a folder with spaces in its name (such as C:lazarus ide).  
  

![](how-to-install-lazarus/05.gif)

The rest of the installation is self-explanatory. For  starters, it is better that you select Full Installation.  

![](how-to-install-lazarus/06.gif)

![](how-to-install-lazarus/07.gif)

  
You can keep a shortcut in the desktop or not. ;-)

![](how-to-install-lazarus/08.gif)

  

![](how-to-install-lazarus/09.gif)

  
The install will take a couple of minutes. After all it is installing more than 700 MB of data.  

![](how-to-install-lazarus/10.gif)

  
Click Finish, and the installation is complete.  

![](how-to-install-lazarus/11.gif)

Double click the icon in  the desktop to run  Lazarus.  

![](how-to-install-lazarus/12.gif)

  
Lazarus running in Windows:  

![Lazarus IDE in Windows](how-to-install-lazarus/13.gif "Lazarus IDE in Windows")

  

### Installing \*Latest\* Lazarus in Ubuntu (or any other Linux)

Here we look into the steps of installing Lazarus in Ubuntu. This guide has been tested in Ubuntu version 12.04 LTS but should work on other versions and other debian based distros as well. If your distro is RPM based, you can [follow instructions here](http://wiki.freepascal.org/Installing_Lazarus#Installing_using_rpms). If you face any trouble, post a comment and let us know. ;)

  

You can always run **sudo apt-get install lazarus** in terminal to install Lazarus from the Ubuntu Repository. But the version you will get is probably backdated. So read this guide to install the latest Lazarus:

  

#### Step-1: Downloading

  

[Go here](http://sourceforge.net/projects/lazarus/files/), or [here](http://mirrors.iwi.me/lazarus/). Then click "Lazarus Linux i386 DEB" (or Lazarus Linux amd64 DEB if you use 64 bit). Then click the latest version link, for example "Lazarus 1.0.8"

  

![Download the 3 files necessary for the installation](how-to-install-lazarus/download-lazarus2.gif "Download the 3 files necessary for the installation")

  
  

Download the 3 .deb files that are available. For example, fpc\_2.6.2-0\_i386.deb, fpc-src\_2.6.2-0\_i386.deb, lazarus\_1.0.8-0\_i386.deb . (The filenames may differ based on the version chosen.)  
  
**NOTE:** Since Lazarus 2.0, the fpc debian package has been renamed to fpc-laz. It's the same, just a name change. Please use fpc-laz instead for 2.0 or later versions.  
  
Save those 3 files in a separate folder. It will help you in the installation process.

  

#### Step-2: Installing

If you already have lazarus installed then uninstall it first.  
  

Press Ctrl+Alt+T to open a terminal. Run the following commands to uninstall:  

>     sudo apt-get purge fpc lazarus  
>     sudo rm -Rf /usr/lib/fpc  
>     sudo rm -Rf /usr/lib/lazarus  
>     sudo rm -Rf /usr/share/fpcsrc  
>     sudo rm -f ~/.fpc  
>     sudo rm -Rf ~/.lazarus

  
Now we are going to install Lazarus. Type cd  followed by a space.

  

Drag the folder (inside which you have saved the 3 .deb files) in the terminal window. Press enter.

  

Then run:

> sudo dpkg -i \*.deb

  

You will probably see a message saying that some library is not installed (such as libgtk2.0-dev). Install the dependent libraries. For example,

> sudo apt-get install libgtk2.0-dev

Then run the above command again

> sudo dpkg -i \*.deb

Now it is going to install. It takes a bit of a time. It will require about 1.5 GB of space in your linux partition to install Lazarus in Linux.  
  
To run lazarus you can use the dash menu or on a command prompt run "startlazarus". When Lazarus runs, you can right click the Launcher icon of Lazarus and Click "Lock to Launcher". It will place the Lazarus icon in the Launcher for your convenience.  
  
  

### Installing Lazarus in MacOS X

[Click here](http://wiki.freepascal.org/Installing_Lazarus_on_MacOS_X) for an excellent guide for installing Lazarus in Mac OS. Lazarus is one of the two options of developing Carbon applications in Mac OS. So go on...!  
  
  

### Installing Lazarus in BSD

For [FreeBSD instructions](http://wiki.freepascal.org/Installing_Lazarus#Installing_Lazarus_under_FreeBSD) click here  
For [instruction on PC-BSD click here](http://wiki.freepascal.org/Installing_Lazarus#Installing_Lazarus_under_PC-BSD_1.0rc1.2B).  
  

### Installing Lazarus in Raspberry Pi

Lazarus can also be installed in a Raspberry Pi, a credit-card-sized computer motherboard. Go here to find out an installation guide: [http://wiki.freepascal.org/Lazarus\_on\_Raspberry\_Pi](http://wiki.freepascal.org/Lazarus_on_Raspberry_Pi)  

![](how-to-install-lazarus/750px-Lazarus_on_Raspberry_Pi_Raspian_Wheezy_version_2012-10-28.png)