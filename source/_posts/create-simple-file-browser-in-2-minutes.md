---
title: Create a Simple File Browser in 2 Minutes!
tags:
  - browser
  - explorer
  - Sample Code
  - Tutorials
id: '73'
categories:
  - [Files Directories]
date: 2013-06-03 09:13:00
thumbnail: create-simple-file-browser-in-2-minutes/folder-thumb.jpg
---

File browsers are very useful in our everyday lives. What if you can create a file browser in 2 Minutes? ...without writing code? Yes! That's how we do it in Lazarus.
<!-- more -->
  
  
Lazarus is a Rapid Application Development Environment (RAD in short). It is possible to create complex applications in minutes. Form designer is very handy at designing layouts faster than Cheetah!  
  
Today we try out the speed Lazarus. We will create a File Manager in 2 Minutes, plus, without a single line of code to be written. It will have a drive list (in Windows machines), and the files will be shown in a component at the right upon selection of a folder from the Treeview in left.  
  
  

### (Very) Quick Tutorial

  
Start Lazarus. Create a new Application Project (Project-> New Project-> Application-> OK).  
  
Drop a TShellTreeview and TShellListView from the Misc tab. (_Drop_ means click the toolbar buttons and then click on the form.) They both have a yellow folderish kind of icon, so you will easily spot them. Just drop them, no need for accurate pixel to pixel positioning!  
  

![TShellTreeview and TShellListView components in Lazarus](create-simple-file-browser-in-2-minutes/components-1.gif "TShellTreeview and TShellListView components in Lazarus")

  

![TShellTreeview and TShellListView on a TForm (Lazarus)](create-simple-file-browser-in-2-minutes/form-layout-1.gif "TShellTreeview and TShellListView on a TForm (Lazarus)")

  
  
Select ShellTreeView1 and set its Align property to alLeft. The treeview control will jump and sit on the left.  
  

![Align treeview component to left](create-simple-file-browser-in-2-minutes/align-1.gif "Align treeview component to left")

  

![After aligning the TShellTreeview to left in Lazarus](create-simple-file-browser-in-2-minutes/form-layout-2.gif "After aligning the TShellTreeview to left in Lazarus")

  
  
Go to Additional tab and click on the TSplitter button and then click TShellTreeView. This will allow us to resize the treeview area at runtime.  
  

![TSplitter component in Lazarus toolbar](create-simple-file-browser-in-2-minutes/components-2.gif "TSplitter component in Lazarus toolbar")

  
  
  
Select the TShellListview and set its Align property to alClient and ShellTreeview property to ShellTreeView1.  
  

![Final form layout after the alignment of TShellListView](create-simple-file-browser-in-2-minutes/form-layout-3.gif "Final form layout after the alignment of TShellListView")

  
  
Voila! Its done!  
  
Now Run it (F9 or Run-> Run).  
  

![File browser made with Lazarus in 2 Minutes!](create-simple-file-browser-in-2-minutes/file-browser-2-min.gif "File browser made with Lazarus in 2 Minutes!")

  
  

### Download Sample Code

You can download an example source code zip file from here: [http://db.tt/LOmni33C](http://db.tt/LOmni33C)  
Size: 550 KB  
The package contains compiled executable EXE file.  
  
_Image: [http://www.iconarchive.com](http://www.iconarchive.com/show/hydropro-v2-icons-by-media-design/Folder-icon.html)_  
  
  
Ref:  
[http://www.youtube.com/watch?v=Vee9x90Qm4E](http://www.youtube.com/watch?v=Vee9x90Qm4E)