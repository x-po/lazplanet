---
title: Create a Simple File Browser in 2 Minutes!
tags:
  - browser
  - explorer
  - Files Directories
  - Sample Code
  - Tutorials
url: 75.html
id: 75
categories:
  - Uncategorized
date: 2013-06-03 03:13:00
---

![](http://4.bp.blogspot.com/-FBqGPcP6-CY/UawH9KVb6hI/AAAAAAAAA-k/EXxIBUUt5PU/s1600/folder-thumb.jpg)File browsers are very useful in our everyday lives. What if you can create a file browser in 2 Minutes? ...without writing code? Yes! That's how we do it in Lazarus.  
  
  
Lazarus is a Rapid Application Development Environment (RAD in short). It is possible to create complex applications in minutes. Form designer is very handy at designing layouts faster than Cheetah!  
  
Today we try out the speed Lazarus. We will create a File Manager in 2 Minutes, plus, without a single line of code to be written. It will have a drive list (in Windows machines), and the files will be shown in a component at the right upon selection of a folder from the Treeview in left.  
  
  

### (Very) Quick Tutorial

![](http://2.bp.blogspot.com/--XYawwmEUEM/UawDBYCaRAI/AAAAAAAAA9g/dGTEVTDXbCE/s1600/components-1.gif)  
![](http://1.bp.blogspot.com/-RiYRuD1cDXo/UawEY-hYEzI/AAAAAAAAA90/iAjkNeeb4S0/s1600/form-layout-1.gif)  
  
Select ShellTreeView1 and set its Align property to alLeft. The treeview control will jump and sit on the left.  
  
![](http://4.bp.blogspot.com/-Hl3UjFzFCjQ/UawE1xGJLBI/AAAAAAAAA98/y-btuqBBpp8/s1600/align-1.gif)  
![](http://1.bp.blogspot.com/-wgMHSXK7eGg/UawE-7had1I/AAAAAAAAA-E/IBnEA09kvf4/s1600/form-layout-2.gif)  
  
Go to Additional tab and click on the TSplitter button and then click TShellTreeView. This will allow us to resize the treeview area at runtime.  
  
![](http://1.bp.blogspot.com/-OK6CVgpeS_g/UawFUC59tlI/AAAAAAAAA-M/BGoNfECDrCc/s1600/components-2.gif)  
  
  
Select the TShellListview and set its Align property to alClient and ShellTreeview property to ShellTreeView1.  
  
![](http://4.bp.blogspot.com/-m4vm7fT-j0M/UawF8C0eAEI/AAAAAAAAA-U/MDeqKRZ-bF8/s1600/form-layout-3.gif)  
  
Voila! Its done!  
  
Now Run it (F9 or Run-> Run).  
  
![](http://3.bp.blogspot.com/-k8k2l1nuw_8/UawEAPQytBI/AAAAAAAAA9s/UbcU7-s3zkI/s1600/file-browser-2-min.gif)  
  

### Download Sample Code

You can download an example source code zip file from here: [http://db.tt/LOmni33C](http://db.tt/LOmni33C)  
Size: 550 KB  
The package contains compiled executable EXE file.  
  
_Image: [http://www.iconarchive.com](http://www.iconarchive.com/show/hydropro-v2-icons-by-media-design/Folder-icon.html)_  
  
  
Ref:  
[http://www.youtube.com/watch?v=Vee9x90Qm4E](http://www.youtube.com/watch?v=Vee9x90Qm4E)