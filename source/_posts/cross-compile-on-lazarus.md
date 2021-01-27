---
title: How to Cross Compile on Lazarus
tags:
  - building
  - Compiler
  - compiling
  - cross
  - Linux
  - Windows
id: '6'
categories:
  - [Console]
  - [System API]
  - [Hardware]
date: 2020-05-12 23:29:00
authorId: adnan
thumbnail: cross-compile-on-lazarus/lazarus-cross-compile-postthumb.png
downloads:
  - https://gitlab.com/lazplanet/cross-compile/-/releases
---

It's alive! It's working! We're compiling for other OSs that we don't have... easily!
<!-- more -->

How many times have you thought of providing your software for a platform and was planning on running that OS just to create executables for it? I don't know about you, but it recently struck my mind, when I was attaching binaries to one of the [LazPlanet example](https://gitlab.com/lazplanet/lua-inside-fpc) [releases](https://gitlab.com/lazplanet/lua-inside-fpc/-/releases) on GitLab.

Personally I don't like Windows. Many people say that it's easy to use and common, but I find it as a security and privacy nightmare, plus a bloat and very difficult to maintain. Think about updating browsers on both Windows and Linux. Linux has one command to update not just the browsers, but all of the software in the system. In Windows, you have to download things, install things one by one - which is a waste of time. Plus, Linux is free to download and [Free as in freedom](https://www.gnu.org/). It was built by people just like us from all over the world.

I use Linux most of the times and reduced the use of Windows as much as I can.

I was thinking if I could build EXEs for Windows users, without going to a Windows machine. And it turns out it was possible! Through Cross Compilation!

## What is cross compiling and why is it important?

Simply put, cross compile lets us to create executables for a platform that we are not currently running.

If I want to be more correct, cross compile means to compile for an architecture that the currently installed fpc can't handle by default. For example, if you have a 64bit Lazarus installed, it may be able to compile for 64bit just fine. But it can't compile for 32bit. For that you will have to use a cross compiler over your existing fpc compiler.

Cross compile is even possible for operating systems that are not currently installed on your system. For example, you can compile for Windows from Linux operating system with cross compilers. Amazing!

This saves you a ton of effort to maintain a separate OS for just building some EXEs. You can just install the cross compiler, set it up and forget all the trouble!
You also get to streamline your development within a single platform, without ever having to leave the platform that you love so much!

In this article we'll learn how to cross compile in Windows and Linux. Mac is a bit limiting for cross compilation. We can't compile for Mac unless we have a Mac machine. I don't have a Mac, so skipping Mac altogether. But if you're interested on Mac, [try the wiki](https://wiki.lazarus.freepascal.org/Cross_compiling). There are loads of examples on how to do things.

## What's up with 32bit and 64bit?

Some basic terminologies:

*   x86 or i386/i686/80386 or i486/i686 = 32bit
*   x86\_64 or x64 = 64bit
*   Win32 = Windows 32bit
*   Win64 = Windows 64bit

Remember that 64bit is a later architecture and 64bit operating systems can run 32bit applications just fine. But 32bit operating systems cannot run 64bit applications. Similarly, some older processors are 32bit only and cannot run 64bit operating systems. Generally 64bit applications and operating systems should run faster compared to 32bit. So why do we stick to 32bits? There are couple of reasons:

*   some people do not have access to newer hardware, cannot afford it or are fine with existing hardware.
*   some people do not have 4GB or higher RAM which is needed to get most out of 64bit systems.

32bit is kind of an old architecture at this point. Many popular software have also stopped providing 32bit application files. Look around and you'll see loads of examples. Especially browsers, for example, Chromium browser. So should we care for 32bit builds? I think yes. Mostly because 32bit executables can run on both 32bit and 64bit OSs. If you want to build one executable format (which is fine for small projects), 32bit is excellent to support maximum possible users.

Another reason would be to avoid pushing [planned obsolescence](https://en.wikipedia.org/wiki/Planned_obsolescence) to the users who use our software. I think it's a nice idea that we should try to use our computers as long as possible or if that's not possible, pass it to who needs it. There are lots of people who need a computer but can't afford it. The world is filled with computer garbage already, so we should not try to make this worse.


## Video

Find the steps of this article in the [video](https://lbry.tv/@LazPlanet:8/lazarus-cross-compile:e) [below](https://youtu.be/7cQw8M3QwuQ):

<iframe id="lbry-iframe" width="560" height="315" src="https://lbry.tv/$/embed/lazarus-cross-compile/e9114c0eabc4feb743248a19010a0d2417c49178?r=F7BkPca6AFbH1XNfhJNFFiGv3CDf1RS3" allowfullscreen></iframe>


## From Win64 to Win32

This is if you have Lazarus 64 bit installation and want to build for Win32:

*   Go to [https://sourceforge.net/projects/lazarus/files/Lazarus%20Windows%2032%20bits/](https://sourceforge.net/projects/lazarus/files/Lazarus%20Windows%2064%20bits/), then your Lazarus version
*   Download and install `fpc-a.b.c.i386-win32.exe`. When installing it will suggest a path like `C:\FPC\3.0.4`, but make it like `C:\lazarus\fpc\3.0.4`. On Select components screen, to keep things minimal, select Custom installation. Then make sure you have these selected:
    *   Free Pascal Utilities
    *   GNU Make
    *   GNU Debugger
    *   Units

\* Do not select Minimum installation as it will show a nasty fpcres.exe not found error.

*   Go to **Project Options - Compiler Options - Config and Target** and set: Target OS (-T) to Win32 Target CPU family (-P) to i386
*   Go to **Tools - Options - Environment** then set **Compiler executable** from default `C:\lazarus\fpc\3.0.4\bin\x86_64-win64\fpc.exe` to `$(LazarusDir)fpc\$(FPCVer)\bin\$(TargetCPU)-$(TargetOS)\fpc.exe`


## From Win32 to Win64

This is if you have Lazarus 32 bit installation and want to build for Win64:

*   Go to [https://sourceforge.net/projects/lazarus/files/Lazarus%20Windows%2064%20bits/](https://sourceforge.net/projects/lazarus/files/Lazarus%20Windows%2032%20bits/), then your Lazarus version
*   Download and install `lazarus-x.y.z-fpc-a.b.c-cross-i386-win32-win64.exe`. When installing, it will suggest a path like `C:\FPC\3.0.4`, but make it like `C:\lazarus\fpc\3.0.4`. You can select **Minimum installation**.
*   Go to **Project Options - Compiler Options - Config and Target** and set: Target OS (-T) to Win64 Target CPU family (-P) to `x86\_64`
*   Go to **Tools - Options - Environment** then make sure **Compiler executable** is set to `C:\lazarus\fpc\3.0.4\bin\i386-Win32\fpc.exe`


## Use Build modes for more peace of mind

Think about your software. You wrote an awesome piece of software, and you want your friends with Windows, both 32bit and 64bit, use them. You can surely change those settings everytime and hit build. But changing the settings and building 4 times is a nasty time-killer. Let's get it automated.

For the sake of this example, let's assume we want to build both Win32 and Win64 builds of the same software.

*   Hit the cog icon (beside Run button)
*   Click \[...\], click **Create Debug and Release modes** button
*   Select Release and click \[+\] button. This will create a copy of Release item. You can name it anything, but here we name it "win32"
*   Click the \[+\] button again and name it "win64"
*   Click OK
*   Edit **Target file name (-o)** to include `$(BuildMode)`. e.g. `project1_$(BuildMode)`. This will automatically add the build mode name with the executable name. e.g. project1\_win32.exe, project1\_win64.exe
*   Go to **Config and Target**
*   With Build mode selected as **win32**, set:

	* Target OS (-T) -> Win32
	* Target CPU family (-P) -> i386

*   With Build mode selected as **win64**, set:

	* Target OS (-T) -> Win64
	* Target CPU family (-P) -> x86\_64

Now when you are in the mood to build for both win32 and win64, click **Run - Compile many Modes...**, select both **win32** and **win64** and click **OK**. It will build executables for both.

To build for a single mode, click the arrow beside the cog icon on toolbar, select either **win32** or **win64**, then hit **Run - Build** or **Run - Run**.

To simplify the instructions above I have skipped Debug build modes. But it is doable. Just select the **Debug** build mode while clicking **\[+\]** and continue from there. You may need to configure GDB executable in **Tools - Options - Debugger - General**.

Wanna learn a neat trick? To easily determine if an executable file is 32bit or 64bit, you can open it in [7-zip](https://7-zip.org/) and click **Info** button on the toolbar. It should show the `CPU` value as either `x86` or `x64`.


## Cross Compiling from Ubuntu / Linux to Windows

We would be compiling the cross compiler, so we'd need `make` installed. Don't worry, compiling won't be something difficult. It is just a matter of running a command, that's it. On Ubuntu/Debian you can run `sudo apt install make`, on Arch Linux you can run `sudo pacman -S make` on Terminal to install it. For other distros, consult your distro documentation.

The fpcsrc path may be something like `/usr/lib/fpc/src/` or `/usr/share/fpcsrc/3.0.4` depending on your Linux distro. I've checked on Ubuntu/Debian, Arch Linux and Void Linux. They all have either of these 2 directories. If you find any other, let me know.

```sh
#!/bin/sh
# To use the fpc version number later
# It has the version number, e.g. 3.0.4
export FPCVER=`fpc -iV`
# Navigate to the fpc source folder.
# One of them will fail, but this is normal. If it changes into a directory, you're fine.
cd /usr/lib/fpc/src/  cd /usr/share/fpcsrc/$FPCVER

# Compile the cross-compiler for win32.
sudo make clean all OS_TARGET=win32 CPU_TARGET=i386
# It could take a minute or two, depending on your hardware

# Install the cross-compiler.
sudo make crossinstall OS_TARGET=win32 CPU_TARGET=i386 INSTALL_PREFIX=/usr
# You should see messages like: Installation package fpc-all for target i386-win32 succeeded

# Link the cross-compiler and place the link where Lazarus can see it.
sudo ln -sf /usr/lib/fpc/$FPCVER/ppcross386 /usr/bin/ppcross386

# You can do the same using Windows 64 bit as target.
export FPCVER=`fpc -iV`

cd /usr/lib/fpc/src/ || cd /usr/share/fpcsrc/$FPCVER

sudo make clean all OS_TARGET=win64 CPU_TARGET=x86_64
sudo make crossinstall OS_TARGET=win64 CPU_TARGET=x86_64 INSTALL_PREFIX=/usr
sudo ln -sf /usr/lib/fpc/$FPCVER/ppcrossx64 /usr/bin/ppcrossx64
```


Besides copy-pasting each line, you can save this as a `.sh` file and run `sh /path/to/the/file.sh` to run them automatically.

You may have to run these commands again when `fpc` is updated on the system. No problem, just get back to this article to get to it.


### A. Simple way to cross compile

Let me show you the easiest cross compile settings you've ever seen!
You can just:

*   go to **Project - Project Options - Compiler Options - Config and Target**
*   for Windows 32 bit, set **Target OS (-T)** to **Win32** and **Target CPU family (-P)** to **i386**

Done!

Now click **Run - Build**, and eventually project exe file for Windows 32 bit will be created in the project directory.


### B. Advanced, but dev friendly way to cross compile

In the long run this will help you be more efficient with your project setup.

*   Start Lazarus.
*   Go to **Project - Project Options - Compiler Options - Paths**
*   Click the cog icon (beside Run button on toolbar)
*   Click **\[...\]** beside **Build modes**, click **Create Debug and Release modes**
*   With the **Release** selected, click the **\[+\]** button to add new build (it will copy configs from Release). Give it a name. e.g. "Win32"
*   Click **OK** to close **Debug modes** window
*   With the Build modes still selected as Win32, change your **Target file name (-o)** to anything else other than the default value. e.g. You can add `_win32` to the name, or `$(BuildMode)`
*   With the Build modes selected as Win32, go to **Config and Target** and set the value for -T as `Win32` and -P as `i386`
*   Click **OK**
*   Make sure that **Win32** is selected as the build mode from the menu in the cog icon (arrow beside the cog icon on toolbar)
*   Now click **Run - Build** (We won't run it since we are on Linux. The build command will just create .exe file and won't run it.)

If everything went well, you should see a `Compile Project, Mode: Win32, OS: win32, CPU: i386, Target: proj_cross1_win32.exe: Success` message.
You can do the same for Win64:

*   Click the cog icon
*   Click the **\[...\]** button beside Build modes
*   Click the plus sign (if you have **Win32** selected, it will copy configs from there)
*   Name it **Win64** (or something else if you wish), then click **OK**
*   Now go to **Paths**. If you have `$(BuildMode)` you won't need to change `-o`
*   Go to **Config and Target**, select **-T** as `Win64` and **-P** as `x86_64`

If you want to check in a moment what it would look like on Windows, you can install `wine` and right click and run the .exe file with wine. It will emulate more or less how it would in Windows. You can even run this on ReactOS (the win32 version) if you want to.

To easily determine if an executable is 32bit or 64bit on Linux, run `file /path/to/executable` and it should show something like `...PE32+ executable (GUI) x86-64..`. or `...PE32 executable (GUI) Intel 80386...` depending on the architecture.

**Ref:**

*   Instructions for any other platform: [https://wiki.lazarus.freepascal.org/Cross\_compiling](https://wiki.lazarus.freepascal.org/Cross_compiling)
*   Cross compiling for Win32 from Linux: [https://wiki.lazarus.freepascal.org/Cross\_compiling\_for\_Win32\_under\_Linux](https://wiki.lazarus.freepascal.org/Cross_compiling_for_Win32_under_Linux)
