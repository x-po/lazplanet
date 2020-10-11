---
title: Lazarus 1.4 RC3 is available and why you should test it
tags:
  - install
  - Lazarus
  - new
  - News
  - resource
  - version
id: '28'
categories:
  - 
date: 2015-04-08 01:12:00
---

![](lazarus-14-rc3-is-available-and-why-you/Lazarus-Logo.png)

Lazarus 1.4 RC3 has been released. There are a lots of awaited updates and fixes. See how much Lazarus has evolved.
<!-- more -->
  
Lazarus 1.4 Release Candidate 3 has been released. A [forum post](http://forum.lazarus.freepascal.org/index.php/topic,27985.0.html) has confirmed the news.  
  
**This version has some major changes, this is why developers urge to test it with your existing projects.** It can live as a secondary installation, so you don't need to worry about messing up the existing stable installation of Lazarus. Developers say that if you don't report any misbehavior now, they may be unable to consider the fix for the 1.4.x branch.  
  
The major change in this version is that all LCL resources are changed from LRS to RES. What this means is now you can edit those resources with a resource editor even after building your exe.  
  

### Ummm... Did I smell new features?!

Besides testing, you can have the taste of freshly baked features, such as:  
\- The toolbar can now have new tabs (or pages)  
\- You can rearrange the components and put them in your desired pages (awesome!)  
\- Auto-Indent now supports "tab only".  
\- The compiler messages now have a "quick fix" option:  
"Compiler message marks. Each compiler message shows an icon in the left gutter, a wavy underline in the text and a mark on the right gutter. You can right click on the left icon to get context actions, e.g. Quick Fixes."  
\- In the form designer, now you can undo moving, resizing, deleting any component (neat!)  
\- "The Help/Help menu starts the lhelp help viewer and shows all CHM files"  
\- "The Inspector now supports multi selection. For example delete multiple files or set properties."  
\- "You can drag files from other applications and drop them on Inspector to add files to the project."  
\- The Messages window has been rewritten. Now supports separate header for every tool, searching & filtering in messages, on the fly language switching, changing colors  
\- There are more changes... [check out yourself](http://wiki.lazarus.freepascal.org/Lazarus_1.4.0_release_notes)  
  
1.4 RC3 version is built with fpc 2.6.4. So no surprizes there.  
  
At the end, a thousand thanks to the Lazarus Developers for their hard work in this valuable project.  
  

### What's New

The complete list of changes are [listed here](http://wiki.lazarus.freepascal.org/Lazarus_1.4.0_release_notes).  
  

### Download

The release is available for download at SourceForge:  
[http://sourceforge.net/projects/lazarus/files/](http://sourceforge.net/projects/lazarus/files/)  
  
Choose your CPU, OS, distro and then the "Lazarus 1.4 RC3" directory.  
  
  
  
**Minimum requirements:**  
Windows:       98, 2k, XP, Vista, 7, 32 or 64bit.  
               On 64bit it is recommended to use the 32bit IDE.  
               Win98 IDE needs building with flag -dWIN9XPLATFORM.  
FreeBSD/Linux: gtk 2.8 or qt4.5, 32 or 64bit.  
Mac OS X:      10.5 to 10.10, 10.9+ debugging requires -gw,  
               LCL only 32bit, non LCL apps can be 64bit.  

### Alternate Download

For people who are blocked by SF, the Lazarus releases from SourceForge are mirrored at:  
[ftp://freepascal.dfmk.hu/pub/lazarus/releases/](ftp://freepascal.dfmk.hu/pub/lazarus/releases/)  
and later at (after some time for synchronization)  
[http://michael-ep3.physik.uni-halle.de/Lazarus/releases/](http://michael-ep3.physik.uni-halle.de/Lazarus/releases/)  
and  
[http://mirrors.iwi.me/lazarus/](http://mirrors.iwi.me/lazarus/)  
  

### How-to-Install Guide

  
You can [click here for an installation guide](http://lazplanet.blogspot.com/2013/03/how-to-install-lazarus.html) for all Operating Systems.  
If you are an Ubuntu user then also see [this post for an exclusive guide for installing Lazarus 1.0.10 in Ubuntu 13.04](http://lazplanet.blogspot.com/2013/05/how-to-install-lazarus-108-on-ubuntu.html) (you can follow the same guide to install in previous or latest versions of Ubuntu, such as 12.04 LTS, 12.10, 13.10, 14.04 LTS, 15.04 etc. or any other debian based OS).  
  

### Source

[Lazarus Forum Announcement Post](http://forum.lazarus.freepascal.org/index.php/topic,27985.0.html)  
[Wiki - 1.4.0 Release Notes](http://wiki.lazarus.freepascal.org/Lazarus_1.4.0_release_notes)